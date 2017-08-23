<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $badges = \DB::table('badges')
            ->orderBy('user_id', 'asc')
            ->get();

        $badgeCount = \DB::table('badges')
            ->select('user_id', DB::raw('SUM(user_id) as number'))
            ->groupBy('user_id')
            ->get();

        $items = \DB::table('items')
            ->orderBy('user_id', 'asc')
            ->get();

        $itemCount = \DB::table('items')
            ->select('user_id', DB::raw('SUM(user_id) as number'))
            ->groupBy('user_id')
            ->get();
        
        $companies = \DB::table('users')
            ->select('company', DB::raw('SUM(currenty) as currency'))
            ->groupBy('company')
            ->get();

        $users = \DB::table('users')
            ->orderBy('xp', 'desc')
            ->get();
            

        return view('home', [
                'badges' => $badges, 
                'badgeCount' => $badgeCount, 
                'items' => $items, 
                'itemCount' => $itemCount, 
                'companies' => $companies,
                'users' => $users, 
        ]);
    }
}
