<?php

namespace App\Http\Controllers\admin\web;

use App\Models\User;
use App\Models\Voucher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminVoucherController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Voucher::where('barcode','LIKE', '%' . $request->keywords . '%')->paginate(20);
            return view('pages.admin.voucher.list',compact('collection'));
        }
        return view('pages.admin.voucher.main');
    }

    
    public function create()
    {
        $user = User::get();
        return view('pages.admin.voucher.input',['voucher'=>new Voucher,'user'=>$user]);
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'price' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('price')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('price'),
                ]);
            }
        }
        
        $list = new Voucher;
        $list->id_users = $request->id_user;
        $list->price = $request->price;
        $list->status = 'Belum Digunakan';
        $list->barcode = random_int(100000, 999999);
        $list->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Voucher Berhasil Ditambahkan',
        ]);
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit()
    {
        $user = User::get();
        return view('pages.admin.voucher.input',['voucher'=>new Voucher,'user'=>$user]);
    }

    
    public function update(Request $request, Voucher $voucher)
    {
    
    }

    
    public function destroy(Voucher $voucher)
    {
        $voucher->delete();
        return response()->json([
            'alert'=>'success',
            'message'=>'Data berhasil dihapus'
        ]);
    }

    public function active(Voucher $product)
    {
        $product->status = 'Sudah Digunakan';
        $product->update();
        return response()->json([
            'alert'=>'success',
            'message'=>'Data berhasil ubah'
        ]);
    }
}