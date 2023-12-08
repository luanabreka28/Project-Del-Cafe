<?php

namespace App\Http\Controllers\admin\web;

use App\Http\Controllers\Controller;
use App\Models\ListAlternatife;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = ListAlternatife::paginate(10);
            return view('pages.admin.menu.list',compact('collection'),compact('list_day'));
        }
        return view('pages.admin.menu.main');
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