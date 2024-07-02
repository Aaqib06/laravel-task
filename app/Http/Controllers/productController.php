<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    function product_add(Request $request){
        $insert = [
            'name' => $request->name,
            'description'=> $request->description,
            'price' => $request->price,
          
        ];
        $add = product::create($insert);
        if($add){
            $response = [
                'status'=>'ok',
                'success'=>true,
                'message'=>'Record created succesfully!'
            ];
            return $response;
        }else{
            $response = [
                'status'=>'ok',
                'success'=>false,
                'message'=>'Record created failed!'
            ];
            return $response;
        }
    } 

    function product_view(Request $request){
        return product::find($request->id);
    } 

    function product_delete(Request $request){
        $delete =  product::destroy($request->id);
        if($delete){
            $response = [
                'status'=>'ok',
                'success'=>true,
                'message'=>'Record deleted succesfully!'
            ];
            return $response;
        }else{
            $response = [
                'status'=>'ok',
                'success'=>false,
                'message'=>'Record deleted failed!'
            ];
            return $response;
        }
    } 

    function product_edit(Request $request){
        $update = [
            'name' => $request->name,
            'description'=> $request->description,
            'price' => $request->price,
        ];
        $edit = product::where('id', $request->product_id)->update($update);
        if($edit){
            $response = [
                'status'=>'ok',
                'success'=>true,
                'message'=>'Record updated succesfully!'
            ];
            return $response;
        }else{
            $response = [
                'status'=>'ok',
                'success'=>false,
                'message'=>'Record updated failed!'
            ];
            return $response;
        }
    } 

    function product_list(){
        return product::orderby('name','desc')->get();
}
public function me(Request $request)
{
return $request->product();
}
}