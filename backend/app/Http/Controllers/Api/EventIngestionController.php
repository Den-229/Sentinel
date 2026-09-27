<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\SecurityEvent;
use Illuminate\Http\Request;
class EventIngestionController extends Controller {
    public function store(Request $request) {
        $event = SecurityEvent::create([
            'event_type' => $request->event_type ?? 'SSH_LOGIN',
            'source_ip' => $request->ip(),
            'severity' => $request->severity ?? 'info',
            'payload' => json_encode($request->all())
        ]);
        return response()->json(['status' => 'ingested', 'id' => $event->id], 201);
    }
}
