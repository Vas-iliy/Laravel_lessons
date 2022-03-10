<?php

namespace App\Http\Controllers;

use App\Country;
use App\Post;
use App\Rubric;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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

        //insert from model
        /*$post = new Post();
        $post->title = 'State 1';
        $post->content = 'Content State 1';
        $post->save();

        Post::query()->create(['title' => 'Post', 'content' => 'new Content']);

        $post = new Post();
        $post->fill(['title' => 'Post2', 'content' => 'new Content 2']);
        $post->save();*/

        //select from model
        /*$data = Country::all();
        $data = Country::query()->limit(5)->get();
        dd($data);*/

        //update from model
        /*$post = Post::query()->find(4);
        $post->content = 'allalal';
        $post->save();

        Post::query()->where('id', '>', '2')->update(['updated_at' => NOW()]);*/

        //delete from model
        /*$post = Post::query()->find(4);
        $post->delete();

        Post::destroy(3);*/

        //One to One
        /*$post = Post::query()->find(2);
        dump($post->title, $post->rubric->title);
        $rubric = Rubric::query()->find(3);
        dump($rubric->title, $rubric->post->title);*/

        //One to Many
        /*$rubric = Rubric::query()->find(1);
        dump($rubric->posts);
        $post = Post::query()->find(2);
        dump($post->title, $post->rubric->title);*/

        //ленивая и жадная загрузка
        /*$posts = Post::query()->with('rubric')->where('id', '>', 1)->get();
        foreach ($posts as $post) {
            dump($post->title, $post->rubric->title);
        }*/

        //Many to Many
        /*$post = Post::query()->find(5);
        dump($post->title);
        foreach ($post->tags as $tag) {
            dump($tag->title);
        }
        $tag = Tag::query()->find(4);
        dump($tag->title);
        foreach ($tag->posts as $post) {
            dump($post->title);
        }*/
        $title = 'Home Page';
        $h1 = 'Home';
        $posts = Post::query()->orderBy('id', 'desc')->get();
        return view('home', compact('title', 'h1', 'posts'));
    }

    public function create()
    {
        $title = 'Create Post';
        $rubrics = Rubric::query()->pluck('title', 'id')->all();
        return view('create', compact('title', 'rubrics'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
           'title' => 'required|min:5|max:255',
           'content' => 'required',
           'rubric_id' => 'integer'
        ]);

        /*$rules = [
            'title' => 'required|min:5|max:255',
            'content' => 'required',
            'rubric_id' => 'integer'
        ];
        $messages = [
            'title.required' => 'Заполните название'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();*/
        Post::query()->create($request->all());
        return redirect()->route('home');
    }
}
