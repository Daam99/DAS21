<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Question;
// use App\Models\Answer;
// use App\Models\Attempt;
// use App\Models\AttemptDetail;
use Auth;
use App\Models\Score;
use DB;

class StatisticsController extends Controller
{
    public function index(){
    	// $scores = Score::all();
    	$scores = Score::join('attempts', 'scores.attempt_id', '=', 'attempts.id')
            	->where('attempts.user_id', Auth::id())
            	->select('scores.*')
            	->get();
    	return view('statistics',compact('scores'));
    }
}
