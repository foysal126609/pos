<?php

namespace App\Http\Controllers;

use App\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function sizeInfo(){
        return view('admin.size.size-info',[
        'allSizesInfo'=>$allSizesInfo = Size::all()
        ]);
    }
    public function saveSizeInfo(Request $request){
        $size = new Size();
        $size->size_name = $request->size_name;
        $size->publication_status = $request->publication_status;
        $size->save();
        return redirect('/size-info')->with('message', 'size info save successfully');
    }

    public function editSizeInfo($id){
        return view('admin.size.edit-size-info',[
            'allSizesInfo'=>$allSizesInfo = Size::all(),
            'sizeInfoById'=>$sizeInfoById = Size::find($id)
        ]);
    }

    public function updateSizeInfo(Request $request){
        $color = Size::find($request->size_id);
        $color->size_name = $request->size_name;
        $color->publication_status = $request->publication_status;
        $color->save();
        return redirect('/size-info')->with('message','Size info update successfully');
    }

    public function unPublishedSizeInfo($id){
        $sizByIde = Size::find($id);
        $sizByIde->publication_status = 0;
        $sizByIde->save();
        return redirect('/size-info');

    }
    public function PublishedSizeInfo($id){
        $sizByIde = Size::find($id);
        $sizByIde->publication_status = 1;
        $sizByIde->save();
        return redirect('/size-info');

    }
}
