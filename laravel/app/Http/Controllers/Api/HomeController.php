<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Cache;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return 'Api';
    }

    public function storeDb(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => str_random(10),
        ]);

        return 'Stored db';
    }

    public function getDb(Request $request)
    {
        $user_name = User::where('email', $request->email)->first()->name;

        return "The name = $user_name";
    }

    public function storeCache(Request $request)
    {
        Cache::put($request->key, $request->value, 60);

        return 'Stored cache';
    }

    public function getCache(Request $request)
    {
        $value = Cache::get($request->key);

        return "The value = $value";
    }
}
