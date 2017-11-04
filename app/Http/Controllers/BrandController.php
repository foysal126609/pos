<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brandInfo(){
        return view('admin.brand.brand-info',[
            'allBrandsInfo'=>$allBrandsInfo = Brand::all()
        ]);
    }
    public function saveBrandInfo(Request $request){
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        return redirect('/brand-info')->with('message', 'Brand info save successfully');
    }
    public function editBranInfo($id)
    {
        $branInfoById = Brand::find($id);
        return view('admin.brand.edit-brand-info', [
            'allBrandsInfo'=>$allBrandsInfo = Brand::all(),
            'branInfoById' => $branInfoById
        ]);
    }
    public function updateBrandInfo(Request $request){
        $brand = Brand::find($request->brand_id);
        $brand->brand_name = $request->brand_name;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        return redirect('/brand-info')->with('message', 'Brand info update successfully');
    }

    public function unPublishedBrandInfo($id){
        $brandById = Brand::find($id);
        $brandById->publication_status = 0;
        $brandById->save();
        return redirect('/brand-info');

    }
    public function publishedBrandInfo($id){
        $brandById = Brand::find($id);
        $brandById->publication_status = 1;
        $brandById->save();
        return redirect('/brand-info');

    }


}
