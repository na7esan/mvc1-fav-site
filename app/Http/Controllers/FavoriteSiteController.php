<?php

namespace App\Http\Controllers;

use App\Models\FavoriteSite;
use Illuminate\Http\Request;

class FavoriteSiteController extends Controller
{
    /**
     * お気に入りサイトの一覧画面表示処理
     *
     *
     */
    public function index()
    {

        $favoriteSites=FavoriteSite::all();
        return view('favorite-sites.index',[
            'favoriteSites'=>$favoriteSites
        ]);
    }

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
    public function store(Request $request)
    {
        FavoriteSite::create([
            'name' =>$request->name,
            'url' =>$request->url,
        ]);

        return redirect('favorite-sites');
    }
}
