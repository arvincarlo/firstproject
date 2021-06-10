<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index() {
        $id = 5;

        // query builders
        
        // $posts = DB::select('select * from posts WHERE id = :id', ['id' => 1]);

        // $posts = DB::table('posts')
        //     ->select('body')
        //     ->get();

        // $posts = DB::table('posts')
        //     ->where('created_at', '>', now()->subDay())
        //     ->orWhere('title', 'This is my first post.')
        //     ->get();


        // where clause
        // $posts = DB::table('posts')
        //     // ->whereNull('created_at')
        //     ->whereNotNull('created_at')
        //     // ->whereBetween('id', [1, 3])
        //     ->get();

        // select distinct
        // $posts = DB::table('posts')
        //     ->select('title')
        //     ->distinct()
        //     ->get();

        // get the latest in descending order
        // $posts = DB::table('posts')
        //     ->latest()
        //     ->oldest()
        //     ->get();

        // find specific based on the id min, max, avg, sum, find

        // insert syntax
        // $posts = DB::table('posts')
        //     ->insert([
        //         'title' => 'New post',
        //         'body' => 'New body'
        //     ]);

        // update syntax
        // $posts = DB::table('posts')
        //     ->where('id', '=', 7)
        //     ->update([
        //         'title' => 'New title by Arvin',
        //         'body' => 'Updated New body by Arvin'
        //     ]);

        // delete query syntax
        $posts = DB::table('posts')
            ->where('id', '=', 7)
            ->delete();
            
        dd($posts);
    }
}
