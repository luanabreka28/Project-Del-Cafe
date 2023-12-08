<?php

namespace App\Http\Controllers\admin\web;

use App\Models\ListDay;
use App\Models\ListFood;
use Illuminate\Http\Request;
use App\Models\ListAlternatife;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ListAlternatifeController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = ListAlternatife::join('list_food','id_list_food', '=', 'list_food.id')->join('list_day','id_list_day', '=', 'list_day.id')->select('list_day.day','list_alternatife.id','list_day.date','list_food.name_food','list_alternatife.description')
            ->where('list_day.day', 'LIKE', '%' . $request->keywords . '%')
            ->orWhere('list_alternatife.description', 'LIKE', '%' . $request->keywords . '%')
            ->paginate(20);
            return view('pages.admin.alternatife.list',compact('collection'));
        }
        return view('pages.admin.alternatife.main');
    }

    
    public function create()
    {   
        $listfood = ListFood::get();
        return view('pages.admin.alternatife.input',['alt'=>new ListAlternatife,'listfood'=>$listfood]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'day' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('day')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('day'),
                ]);
            }elseif ($errors->has('description')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('description'),
                ]);
            }
        }

        $list = new ListAlternatife;
        $list->id_list_food = $request->day;
        $list->description = $request->description;
        $list->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Menu Pengganti Berhasil Ditambahkan',
        ]);
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(ListAlternatife $alternatife)
    {
        $listfood = ListFood::get();
        return view('pages.admin.alternatife.input',['alt'=>$alternatife,'listfood'=>$listfood]);
        
    }

    
    public function update(Request $request,ListAlternatife $alternatife)
    {
        $validator = Validator::make($request->all(), [
            'day' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('day')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('day'),
                ]);
            }elseif ($errors->has('description')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('description'),
                ]);
            }
        }

        $alternatife->id_list_food = $request->day;
        $alternatife->description = $request->description;
        $alternatife->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Menu Pengganti Berhasil Diubah',
        ]);
    }

    
    public function destroy(ListAlternatife $alternatife)
    {
        $alternatife->delete();
        return response()->json([
            'alert'=>'success',
            'message'=>'Data berhasil dihapus'
        ]);
    }
}