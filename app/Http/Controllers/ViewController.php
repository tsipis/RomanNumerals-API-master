<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
	// Return different views/pages
    public function home()
    {
    	return view('homepage');
    }

    public function recent()
    {
        $recent = \App\Numbers::select()->orderBy('converted_at', 'desc')->get();
    	return view('recent', compact('recent'));
    }

    public function top10()
    {
        $top = \App\Numbers::select('integer', 'roman_numeral', DB::raw('COUNT(*) as count'))->groupBy('integer')->orderByRaw('COUNT(*) DESC')->limit(10)->get();

    	return view('top10', compact('top'));
    }
}
