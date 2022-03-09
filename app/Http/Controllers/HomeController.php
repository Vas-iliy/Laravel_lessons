<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // db
        /*DB::insert("INSERT INTO posts (title, content) VALUES (?, ?)", ['state5', 'content state 5']);
        DB::update("UPDATE posts SET created_at = ?, updated_at = ? WHERE id = ?", [NOW(), NOW(), 1]);
        DB::delete("DELETE FROM posts WHERE id = ?", [4]);
        $posts = DB::select("SELECT * FROM posts WHERE id > ?", [3]);
        dd($posts);*/
//table
/*        $data = DB::table('country')->get();
        $data = DB::table('country')->limit(5)->get();
        $data = DB::table('country')->select('Code', 'Name')->limit(5)->get();
        $data = DB::table('country')->select('Code', 'Name')->first();
        $data = DB::table('country')->select('Code', 'Name')->orderBy('Code', 'desc')->first();
        $data = DB::table('city')->select('ID', 'Name')->find(2);
        $data = DB::table('city')->select('ID', 'Name')->where('id', '<',  5)->get();
        $data = DB::table('city')->select('ID', 'Name')->where([
            ['id', '>', 1],
            ['id', '<', 5]
        ])->get();
        $data = DB::table('city')->where('id', '<', 3)->value('Name');
        $data = DB::table('country')->limit(10)->pluck('Name', 'Code');

        $data = DB::table('country')->count();
        $data = DB::table('country')->max('population');
        $data = DB::table('country')->min('population');
        $data = DB::table('country')->sum('population');
        $data = DB::table('country')->avg('population');
        $data = DB::table('city')->select('CountryCode')->distinct()->get();

        $data = DB::table('city')->select('city.ID', 'city.Name as city_name',
        'country.Code', 'country.Name as county_name')->limit(10)->join('country',
            'city.CountryCode', '=', 'country.Code')->orderBy('city.ID')->get();
        dd($data);*/

        $post = new Post();
        $post->title = 'State 1';
        //$post->content = 'Content State 1';
        $post->save();
        return view('home');
    }

    public function test()
    {
        return __METHOD__;
    }
}
