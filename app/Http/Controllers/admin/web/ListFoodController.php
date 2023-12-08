<?php

namespace App\Http\Controllers\admin\web;

use App\Models\ListDay;
use App\Models\ListFood;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ListFoodController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = ListFood::paginate(10);
            $list_day = ListDay::get();
            return view('pages.admin.menu.list',compact('collection'),compact('list_day'));
        }
        return view('pages.admin.menu.main');
    }

    
    public function create()
    {
        $list_day = ListDay::get();
        return view('pages.admin.menu.input',['list_food'=>new ListFood, 'list_day'=>$list_day]);
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_list_day' => 'required',
            'name_food' => 'required',
            'description' => 'required',
            'image' => 'required',
            'image_background' => 'required',
            'price' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('id_list_day')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('id_list_day'),
                ]);
            }elseif ($errors->has('name_food')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('name_food'),
                ]);
            }elseif ($errors->has('description')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('description'),
                ]);
            }elseif ($errors->has('image')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('image'),
                ]);
            }elseif ($errors->has('image_background')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('image_background'),
                ]);
            }elseif ($errors->has('price')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('price'),
                ]);
            }elseif ($errors->has('start')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('start'),
                ]);
            }elseif ($errors->has('end')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('end'),
                ]);
            }
        }
        // dd($request->all());
        $file = $request->file('image');
        $namaFile = $file->getClientOriginalName();
        $tujuanFile ='images/makanan';
        $file->move($tujuanFile,$namaFile);

        $file2 = $request->file('image_background');
        $namaFile2 = $file2->getClientOriginalName();
        $tujuanFile2 ='images/makanan_background';
        $file2->move($tujuanFile2,$namaFile2);

        $product = new ListFood;
        $product->id_list_day = $request->id_list_day;
        $product->name_food = $request->name_food;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->start = $request->start;
        $product->end = $request->end;
        $product->image = $namaFile;
        $product->image_background = $namaFile2;
        $product->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Daftar makanan tersimpan',
        ]);

    }

    
    public function show()
    {
    }
    
    
    public function edit(ListFood $list_food)
    {
        $list_day = ListDay::get();
        return view('pages.admin.menu.input',['list_food'=>$list_food, 'list_day'=>$list_day]);
    }

    
    public function update(Request $request, ListFood $list_food)
    {
        $validator = Validator::make($request->all(), [
            'id_list_day' => 'required',
            'name_food' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('id_list_day')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('id_list_day'),
                ]);
            }elseif ($errors->has('name_food')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('name_food'),
                ]);
            }elseif ($errors->has('description')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('description'),
                ]);
            }elseif ($errors->has('price')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('price'),
                ]);
            }elseif ($errors->has('start')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('start'),
                ]);
            }elseif ($errors->has('end')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('end'),
                ]);
            }
        }
        
        if($request->hasfile('image')){
            Storage::delete($list_food->image);
            $file = $request->file('image');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile ='images/makanan';
            $file->move($tujuanFile,$namaFile);

            $file2 = $request->file('image_background');
            $namaFile2 = $file2->getClientOriginalName();
            $tujuanFile2 ='images/makanan_background';
            $file2->move($tujuanFile2,$namaFile2);

            $list_food->id_list_day = $request->id_list_day;
            $list_food->name_food = $request->name_food;
            $list_food->description = $request->description;
            $list_food->price = $request->price;
            $list_food->start = $request->start;
            $list_food->end = $request->end;
            $list_food->image = $namaFile;
            $list_food->image_background = $namaFile2;
            $list_food->update();
        }else{        
            $list_food->id_list_day = $request->id_list_day;
            $list_food->name_food = $request->name_food;
            $list_food->description = $request->description;
            $list_food->price = $request->price;
            $list_food->start = $request->start;
            $list_food->end = $request->end;
            $list_food->update();
        }

        return response()->json([
            'alert' => 'success',
            'message' => 'Menu berhasil diubah',
        ]);
    }

    
    public function destroy(ListFood $list_food)
    {
        Storage::delete($list_food->image_product);
        $list_food->delete();
        return response()->json([
            'alert'=>'success',
            'message'=>'Data berhasil dihapus'
        ]);
    }
}