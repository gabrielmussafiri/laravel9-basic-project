<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Illuminate\Support\Carbon;

class CustomerController extends Controller
{
    public function CustomerAll(){
        $customers = Customer::latest()->get();
        return view('backend.customer.customer_all',compact('customers'));
    }// End CustomerAll() Methode

    public function CustomerAdd(){
        return view('backend.customer.customer_add');
    }// End CustomerAdd() Methode
}