<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{

    public function all() {
        if (Auth::id() === 1) {
        $questions = Question::all();
        $quizzes = Quiz::all();
        return view('questions.all', ['questions'=>$questions, "quizzes"=>$quizzes]);
        }
        else{
            return redirect()->route("quizzes.index");
        }
    }

    public function create() {
        if (auth()->user()->id == 1) {
            $quizzes = Quiz::all();
        } else {
            $quizzes = Quiz::where('author_id', auth()->user()->id)->get();
        }

        return view('questions.create', ['quizzes' => $quizzes]);
    }
    
    public function store(Request $request) {
        $question = new Question;
        $question->question = $request->question;
        $question->picture = $request->picture;
        $question->answer_1 = $request->answer_1;
        $question->answer_2 = $request->answer_2;
        $question->answer_3 = $request->answer_3;
        $question->answer_4 = $request->answer_4;
        $question->position = $request->position;
        $question->correct_answer = $request->correct_answer;
        $question->quiz_id = $request->quiz_id;
        $question->save();

        return redirect()->route('questions.create');
    }

    public function update(Request $request, int $id){
        $question = Question::find($id);
        $question->update([
            'quiz_id' => $request->quiz_id,
        ]);
        $question->save();
        return back();
    }
  
}
