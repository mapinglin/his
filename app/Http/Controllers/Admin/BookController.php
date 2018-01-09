<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/8
 * Time: 16:33
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller{
    public function index(){
        return view('admin.book.books');
    }

    public function test(Request $request){
        if($request->isMethod('post')){
            $all = $request->all();
            return ajaxSuccess($all);
        }
    }
}