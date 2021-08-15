<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteSiteController extends Controller
{
    /**
     * お気に入りサイトの登録画面表示処理
     */
    public function create()
    {
        return view('favorite-sites.create');
    }

    /**
     * お気に入りサイトの登録処理
     */
    public function store()
    {
        return 'ストアです。ここでお気に入りサイトの登録処理を行う';
    }
}
