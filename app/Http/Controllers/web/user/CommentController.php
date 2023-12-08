<?php

namespace App\Http\Controllers\web\user;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    
    public function index()
    {
        $collection = Comment::where('id_users',auth()->user()->id)->get();
        return view('pages.user.comment', compact('collection'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'comment' => 'required',
        ]);
        if($validator->fails()){
            $errors = $validator->errors();
            if($errors->has('comment')){
                return response()->json([
                    'alert'=>'error',
                    'message'=>$errors->first('comment')
                ]);
            }
        }
        
        $kritik = new Comment;
        $kritik->id_users = Auth::user()->id;
        $kritik->comment = $request->comment;
        // dd($kritik);
        $kritik->save();
        return response()->json([
            'alert'=>'success',
            'message'=>'Komentar berhasil dikirim'
        ]);
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}