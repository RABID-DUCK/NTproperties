<?php

namespace App\Http\Controllers;

use App\Models\MaillingUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Telegram\Bot\Laravel\Facades\Telegram;

class MaillingUserController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'Поле почты должно быть заполнено.'], 422);
        }

        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHAT_ID'),
            'parse_mode' => 'HTML',
            'text' => "
                    <b>Пользователь подписался на рассылку:</b> \n
Почта: $request->email\n
                "
        ]);
        MaillingUsers::create($request->all());

        return response()->json(['message' => __('main.success_sub')]);
    }
}
