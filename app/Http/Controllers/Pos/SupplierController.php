<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use Auth;
use Illuminate\Support\Carbon;
class SupplierController extends Controller
{
    public function SupplierAll(){
        // $suppliers = Supplier::all();
        $suppliers = Supplier::latest()->get();
        return view('backend.supplier.supplier_all',compact('suppliers'));

        

    } // end Method

    public function supplierAdd(){
        return view('backend.supplier.supplier_add');



    }

    public function supplierStore(Request $request){

        Supplier::insert([

            'name' => $request->name,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
            'address' => $request->address,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
            
        ]);
        $notification = array(
            'message' => 'Supplier Added Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('supplier.all')->with($notification);


    }// End Method
}
