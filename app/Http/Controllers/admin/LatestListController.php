<?php

namespace App\Http\Controllers\admin;

use App\Models\{Order, User};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\OrderDataTable;
// use Yajra\Datatables\Facades\Datatables;
use Yajra\DataTables\Services\DataTable;
// use DataTables;
// use DataTables;

class LatestListController extends Controller
{
    // public function  index1(Request $request){
    //     if($request -> ajax()){
    //         return datatables()->of(Order::all())->toJson();
    //      }
    //     return view('ordertable');
    // }
    public function index1(OrderDataTable $dataTable){
        return $dataTable->render('ordertable');
    }
    // This function bring the latest Order and Users
    // public function index1(OrderDataTable $dataTable){
    //     $orders = Order::with(['products' => function($q){$q ->select('ar_name');}])->orderBy('created_at', 'desc')->limit(4)->get();
    //     $users = User::orderBy('created_at', 'desc')->limit(3)->get();
    //     // return $dataTable ->render('ordertable')->with('orders','users');
    //   //  return $dataTable ->render('ordertable')->compact('orders','users');
    //   return $dataTable ->render('ordertable',['id']);
    // }
    // public function index1( ){
    //     $data = Order::select('*');
    //     return Datatable::of($data)
    //     ->indexColumn()
    //     ->make(true);
    // }

    public function index()
    {
        $orders = Order::with(['products' => function($q){$q ->select('ar_name');}])->orderBy('created_at', 'desc')->limit(4)->get();
        $users = User::orderBy('created_at', 'desc')->limit(3)->get();
        return view('admin.last', compact('orders','users'));
    }
}
