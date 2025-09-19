<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        try {
            Mail::raw(
                "Name: {$validated['name']}\nEmail: {$validated['email']}\nMessage: {$validated['message']}",
                function ($message) use ($validated) {
                    $message->to('norahnakamatte05@gmail.com')
                            ->subject('New Contact Message from Portfolio');
                }
            );
            return response()->json(['success' => true, 'message' => 'Message sent successfully!']);
        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Failed to send message. Please try again later.'], 500);
        }
    }
}
