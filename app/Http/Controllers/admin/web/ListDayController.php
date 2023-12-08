<?php

namespace App\Http\Controllers\admin\web;

use App\Models\ListDay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ListDayController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = ListDay::paginate(10);
            return view('pages.admin.daftar.list',compact('collection'));
        }
        return view('pages.admin.daftar.main');
    }

    
    public function create()
    {
        return view('pages.admin.daftar.input',['list_day'=>new ListDay]);
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'day' => 'required',
            'date' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('day')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('day'),
                ]);
            }elseif ($errors->has('date')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('date'),
                ]);
            }elseif ($errors->has('description')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('description'),
                ]);
            }
            elseif ($errors->has('image_product')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('image_product'),
                ]);
            }
        }
        $file = $request->file('image_product');
        $namaFile = $file->getClientOriginalName();
        $tujuanFile ='images/products';
        $file->move($tujuanFile,$namaFile);

        $product = new ListDay;
        $product->day = $request->day;
        $product->date = $request->date;
        $product->description = $request->description;
        $product->image_product = $namaFile;
        $product->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'List Hari tersimpan',
        ]);
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(ListDay $list_day)
    {
        // dd($listday);
        return view('pages.admin.daftar.input',['list_day'=>$list_day]);
    }

    
    public function update(Request $request, ListDay $list_day)
    {
        $validator = Validator::make($request->all(), [
            'day' => 'required',
            'date' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('day')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('day'),
                ]);
            }elseif ($errors->has('date')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('date'),
                ]);
            }elseif ($errors->has('description')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('description'),
                ]);
            }
            elseif ($errors->has('image_product')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('image_product'),
                ]);
            }
        }
        if($request->hasfile('image_product')){
            Storage::delete($list_day->image_product);
            $file = $request->file('image_product');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile ='images/products';
            $file->move($tujuanFile,$namaFile);

            $list_day->day = $request->day;
            $list_day->date = $request->date;
            $list_day->description = $request->description;
            $list_day->image_product = $namaFile;
            $list_day->update();
        }else{        
            $list_day->day = $request->day;
            $list_day->date = $request->date;
            $list_day->description = $request->description;
            $list_day->update();
        }

        return response()->json([
            'alert' => 'success',
            'message' => 'List berhasil diubah',
        ]);
    }

    
    public function destroy(ListDay $list_day)
    {
        Storage::delete($list_day->image_product);
        $list_day->delete();
        return response()->json([
            'alert'=>'success',
            'message'=>'Data berhasil dihapus'
        ]);
    }
}