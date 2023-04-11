<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Alerts;
use Illuminate\Http\Request;

class AlertsController extends Controller
{
    
    public function getUnreadAlerts($user_id)
    {
        $res = Alerts::where('user_id', $user_id)->where('state', false)->get();
        foreach($res as $alert)
        {
            $alert->state = true;
            $alert->save();
        }
        return $res;
    }

    public function saveAlert(Request $request)
    {
        $alert = Alerts::create([
            'user_id' => $request->user_id,
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
        ]);
        return $alert;
    }

    public function getAlertsForUser($user_id)
    {
        return Alerts::where('user_id', $user_id)->get();
    }
}
