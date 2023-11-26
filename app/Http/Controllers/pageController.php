<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Page;

class pageController extends Controller
{
    public function page($locale, $slug){

        $detail = Page::query()
                    ->where('slug',$slug)
                    ->where('language', $locale)
                    ->first();

        $languages = Language::query()->orderBy('id','asc')->get();
        $pages = Page::query()->orderBy('id','asc')->where('language',$locale)->get();

        if($detail->type === 'home') {
            return view('home',[
                'detail' => $detail,
                'languages' => $languages,
                'pages' => $pages, 
                'currentLocale' => $locale,
            ]);
        }

        if($detail->type === 'about') {
            return view('about',[
                'detail' => $detail,
                'languages' => $languages,
                'pages' => $pages, 
                'currentLocale' => $locale,
            ]);
        }

        if($detail->type === 'services') {
            return view('services',[
                'detail' => $detail,
                'languages' => $languages,
                'pages' => $pages, 
                'currentLocale' => $locale,
            ]);
        }

        if($detail->type === 'contact') {
            return view('contact',[
                'detail' => $detail,
                'languages' => $languages,
                'pages' => $pages, 
                'currentLocale' => $locale,
            ]);
        }

    }
}
