<?php

namespace App\Http\Controllers\admin\web;

use App\Models\User;
use App\Models\Voucher;
use App\Models\ListChange;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ListChangeController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = ListChange::where('id', 'LIKE', '%' . $request->keywords . '%')
                ->orWhere('id_users', 'LIKE', '%' . $request->keywords . '%')
                ->orWhere('name_food', 'LIKE', '%' . $request->keywords . '%')
                ->orderBy('id', 'desc')
                ->paginate(10);
            return view('pages.admin.change.list',compact('collection'));
        }
        return view('pages.admin.change.main');
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

    
    public function edit()
    {
        //
    }

    
    public function update(Request $request, ListChange $listchange)
    {
    
    }

    
    public function destroy(ListChange $listchange)
    {
        $listchange->delete();
        return response()->json([
            'alert'=>'success',
            'message'=>'Data berhasil dihapus'
        ]);
    }

}