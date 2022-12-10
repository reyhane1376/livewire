<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
        ]);
        if ($validator->fails()) {
            // return 'ki';
            return response()->json(['message' => $validator->errors()]);
        }

        // Article::create()
    }
}
