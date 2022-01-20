<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Attempt;
use App\Models\AttemptDetail;
use Auth;
use App\Models\Score;

class QuestionnaireController extends Controller
{
    public function index(){
    	$all_questions = Question::all();
    	$all_answers = Answer::all();
    	return view('dashboard', compact('all_questions','all_answers'));
    }
    public function submit(Request $request){
    	// print_r($request->all());
        $all_answers = Answer::all();
        $depression_keys = [3,5,10,13,16,17,21];
        $anxiety_keys = [2,4,7,9,15,19,20];
        $stress_keys = [1,6,8,11,12,14,18];
        $attempt = new Attempt();
        $attempt->user_id = Auth::id();
        $attempt->save();

        $total_questions =  explode (",", $request->statement_id);
        // print_r($total_questions);
        $depression_score = 0;
        $anxiety_score = 0;
        $stress_score = 0;

        for ( $i=0; $i < count($total_questions); $i++ ) {
            $dy_key = 'answer'.$total_questions[$i];
            $attempt_detail = new AttemptDetail();
            $attempt_detail->attempt_id = $attempt->id;
            $attempt_detail->question_id = $total_questions[$i];
            $attempt_detail->answer_id = $request[$dy_key];
            $attempt_detail->save();

            $question_id = (int)$total_questions[$i];
            $question_id = $question_id-1;
            $answer_id = $request[$dy_key];
            

            foreach($all_answers as $answer) {
                if ($answer_id == $answer->id) {
                    $answer_number = $answer->number;
                    break;
                }
            }

            if( in_array($question_id, $depression_keys ) ) {
                $depression_score = $depression_score + ($answer_number);
            } else if( in_array($question_id, $anxiety_keys )) {
                $anxiety_score = $anxiety_score + ($answer_number);
            } else if( in_array($question_id, $stress_keys )) {
                $stress_score = $stress_score + ($answer_number);
            }
        }

        $depression_result = 'normal';
        $anxiety_result = 'normal';
        $stress_result = 'normal';
        if ( $depression_score < 5 ) { //normal
            $depression_result = 'normal';
        } elseif ( $depression_score == 5 || $depression_score == 6 ) { //mild
            $depression_result = 'mild';
        } elseif ( $depression_score >= 7 && $depression_score <= 10 ) { //moderate
            $depression_result = 'moderate';
        } elseif ( $depression_score >= 11 && $depression_score <= 13 ) { //severe
            $depression_result = 'severe';
        } elseif ( $depression_score >= 14 ) { //extremely severe
            $depression_result = 'extremely severe';
        }

        if ( $anxiety_score < 3 ) { //normal
            $anxiety_result = 'normal';
        } elseif ( $anxiety_score == 4 || $anxiety_score == 5 ) { //mild
            $anxiety_result = 'mild';
        } elseif ( $anxiety_score == 6 || $anxiety_score == 7 ) { //moderate
            $anxiety_result = 'moderate';
        } elseif ( $anxiety_score == 8 || $anxiety_score == 9 ) { //severe
            $anxiety_result = 'severe';
        } elseif ( $anxiety_score >= 10 ) { //extremely severe
            $anxiety_result = 'extremely severe';
        }

        if ( $stress_score < 7 ) { //normal
            $stress_result = 'normal';
        } elseif ( $stress_score == 8 || $stress_score == 9 ) { //mild
            $stress_result = 'mild';
        } elseif ( $stress_score >= 10 && $stress_score <= 12 ) { //moderate
            $stress_result = 'moderate';
        } elseif ( $stress_score >= 13 && $stress_score <= 16 ) { //severe
            $stress_result = 'severe';
        } elseif ( $stress_score >= 17 ) { //extremely severe
            $stress_result = 'extremely severe';
        }

        $score = new Score();
        $score->attempt_id = $attempt->id;
        $score->depression = $depression_score;
        $score->anxiety = $anxiety_score;
        $score->stress = $stress_score;
        $score->depression_result = $depression_result;
        $score->anxiety_result = $anxiety_result;
        $score->stress_result = $stress_result;
        $score->save();
    	return response()->json($score);
    }
}
