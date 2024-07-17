<?php

namespace App\Http\Controllers;

use App\Models\MaillingUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        MaillingUsers::create($request->all());

        return response()->json(['message' => 'Вы подписались на рассылку новостей компании']);
    }
}
