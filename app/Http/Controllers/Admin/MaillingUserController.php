<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MaillingUsers;
use Illuminate\Http\Request;

class MaillingUserController extends Controller
{
    public function index(){
        $maillings = MaillingUsers::all();

        return view('backend.maillings.index', compact('maillings'));
    }
}
