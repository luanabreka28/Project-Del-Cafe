<?php

namespace App\Http\Controllers\web\user;

use App\Models\ListDay;
use App\Models\ListFood;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{
    public function __construct(){
        $this->middleware(function ($request,$next) {
            if(Auth::check()){
                $role = Auth::user()->role;
                if(!$role || $role != 'user'){
                    return view('pages.auth.mainuser');
                }
            }else{
                return redirect()->route('user.auth.index');
            }
            return $next($request);
        });
    }
    public function index()
    {
        $collection = ListDay::get();
        return view('pages.user.dashboard',compact('collection'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(ListDay $home)
    {
        $list_day = ListDay::get();
        $collection = ListFood::where('id_list_day',$home->id)->get();
        // dd($collection);
        return view('pages.user.desc',compact('home','collection'),compact('list_day'));
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