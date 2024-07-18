<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switchLang(Request $request)
    {
        $locale = $request->input('language');
        session(['locale' => $locale]);
        app()->setLocale($locale);
        return redirect()->back();
    }
}
