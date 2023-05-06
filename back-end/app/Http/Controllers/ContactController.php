<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Your Telegram bot token
        $botToken = '6002316242:AAG0GkEMulc1Z3oymMUPI_4NEjfBVtYyO2M';

        // Your chat ID
        $chatId = '791648625';

        // Prepare the message
        $message = "New contact message:\n\n";
        $message .= "Name: " . $request->name . "\n";
        $message .= "Email: " . $request->email . "\n";
        $message .= "Message: " . $request->message . "\n";

        // Send the message to the Telegram bot
        Http::get("https://api.telegram.org/bot{$botToken}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $message,
            'parse_mode' => 'HTML'
        ]);

        // Redirect back to the contact form with a success message
        return redirect()->back()->with('success', 'Thank you for your message! We will get back to you shortly.');
    }
}
