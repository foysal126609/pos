<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplierInfo(){
        return view('admin.supplier.supplier-info');
    }
}
