<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch($locale)
    {
        if (in_array($locale, config('app.available_locales'))) {
            session(['app_locale' => $locale]);
        }

        return redirect()->back();
    }
}
