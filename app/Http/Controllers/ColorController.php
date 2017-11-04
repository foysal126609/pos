<?php

namespace App\Http\Controllers;


use App\Category;
use App\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function colorInfo(){
        return view('admin.color.color-info',[
            'allColorsInfo'=>$allColorsInfo = Color::all()
        ]);
    }
    public function saveColorInfo(Request $request){
        $color = new Color();
        $color->color_name = $request->color_name;
        $color->publication_status = $request->publication_status;
        $color->save();
        return redirect('/color-info')->with('message', 'color info save successfully');
    }
    public function editColorInfo($id){
        return view('admin.color.edit-color-info',[
            'allColorsInfo'=>$allColorsInfo = Color::all(),
            'colorInfoById'=>$colorInfoById = Color::find($id)
        ]);
    }

    public function updateColorInfo(Request $request){
        $color = Color::find($request->color_id);
        $color->color_name = $request->color_name;
        $color->publication_status = $request->publication_status;
        $color->save();
        return redirect('/color-info')->with('message','color info update successfully');
    }

    public function unPublishedColorInfo($id){
        $colorById = Color::find($id);
        $colorById->publication_status = 0;
        $colorById->save();
        return redirect('/color-info');

    }
    public function PublishedColorInfo($id){
        $colorById = Color::find($id);
        $colorById->publication_status = 1;
        $colorById->save();
        return redirect('/color-info');

    }
}
