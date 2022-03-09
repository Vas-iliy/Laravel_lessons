<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        //DB::insert("INSERT INTO posts (title, content) VALUES (?, ?)", ['state5', 'content state 5']);
        //DB::update("UPDATE posts SET created_at = ?, updated_at = ? WHERE id = ?", [NOW(), NOW(), 1]);
        //DB::delete("DELETE FROM posts WHERE id = ?", [4]);

        $posts = DB::select("SELECT * FROM posts WHERE id > ?", [3]);
        dd($posts);
        return view('home');
    }

    public function test()
    {
        return __METHOD__;
    }
}
