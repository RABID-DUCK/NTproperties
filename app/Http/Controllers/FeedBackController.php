<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class FeedBackController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'Поле имени не может быть пустым',
            'title.required' => 'Поле темы письма не может быть пустым',
            'description.required' => 'Поле описания письма не может быть пустым',
        ]);

        if($data){
            FeedBack::create($data);

            Telegram::sendMessage([
                'chat_id' => env('TELEGRAM_CHAT_ID'),
                'parse_mode' => 'HTML',
                'text' => "
<b>Заполнена обратная связь:</b> \n
Имя: $data[name]\n
Тема: $data[title]\n
Описание: $data[description]\n
    "
            ]);

            return view('pages.contacts');
        }else{
            return redirect()->back();
        }
    }
}
