<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DailyFactsController extends Controller
{
    // public function index()
    // {
    // 	$dailyfacts = \DB::table('dailyfacts')->get();

    // 	return view('facts.index', compact('dailyfacts'));
    // }

    // public function index()
    // {
    // 	$dailyfacts = \DB::table('dailyfacts')->get();

    // 	return view('facts.index', ['dailyfacts' => $dailyfacts]);
    // }

    // public function index()
    // {
    // 	$dailyfacts = \DB::table('dailyfacts')
    // 		->whereMonth('date', '01')
    // 		->whereDay('date', '05')
    // 		->get();

    // 	return view('facts.index', ['dailyfacts' => $dailyfacts]);
    // }

    // public function index()
    // {
    // 	$daily = \DB::table('daily')
    // 		->get();

    // 	return view('facts.index', ['daily' => $daily]);

    // }


    // public function index()
    // {
    //     $daily = \DB::table('daily')
    //         ->whereDate('date', '=', date('Y-m-d'))
    //         ->get();

    //     return view('welcome', ['daily' => $daily]);

    // }

    // public function index()
    // {
    //     $daily = \DB::table('daily')
    //         ->whereDate('date', '=', date('Y-m-d'))
    //         ->get();

    //     return view('welcome', ['daily' => $daily]);

    // }
    


    public function index()
    {
        $daily = \DB::table('daily')
            ->whereDate('date', '=', date('Y-m-d'))
            ->get();

        $calendar = \DB::table('calendar')
            ->whereDate('eventDate', '=', date('Y-m-d'))
            ->orWhereDate('eventDate', '>', date('Y-m-d'))
            ->orderBy('eventDate', 'asc')
            ->limit(10)
            ->get();

        return view('welcome', 
            [
                'daily' => $daily,
                'calendar' => $calendar, 
            ]);

    }

}
