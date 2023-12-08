<?php

namespace App\Http\Controllers\web\user;

use App\Http\Controllers\Controller;
use App\Models\Voucher;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class VoucherController extends Controller
{
    
    public function index()
    {
        $collection = Voucher::where('id_users',auth()->user()->id)->get();
        return view('pages.user.voucher', compact('collection'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
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