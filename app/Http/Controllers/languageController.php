<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Page;

class languageController extends Controller
{
    public function index($locale){

        $languages = Language::query()->orderBy('id','asc')->get();

        $pages = Page::query()->orderBy('id','asc')->where('language',$locale)->get();

        return view('index',[
            'languages' => $languages,
            'pages' => $pages, 
            'currentLocale' => $locale,
        ]);

    }
}
