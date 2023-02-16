<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuizController extends Controller
{
    public function index()
    {

    }


    public function store(Request $request)
    {
        // return $request;

        try {

            $validator = Validator::make($request->data, [
                'title' => 'required',
                'questions.*.title' => 'required',
                'questions.*.answers.*.title' => 'required'
            ],[
                'title.required' => 'Quiz Title is Required',
                'questions.*.title.required' => 'Question Title is Required',
                'questions.*.answers.*.title.required' => 'Question Answer Title is Required'
            ]);

            if ($validator->fails())
                return response()->json($validator->errors(), 500);


        } catch (\Throwable $th) {


        }
    }


    public function update(Request $request,$id)
    {

    }


}
