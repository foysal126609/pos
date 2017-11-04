<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Color;
use App\Item;
use App\Size;
use App\Unit;
use Illuminate\Http\Request;

class ItemController extends Controller
{


    public function ItemInfo(){
        return view('admin.item.item-info');
    }
   public function addItemInfo(){
       return view('admin.item.add-item',[
           'publishedcategories'=>$publishedcategories = Category::where('publication_status', 1)->get(),
           'publishedcolors'=>$publishedcolors = Color::where('publication_status', 1)->get(),
           'publishedbrands'=>$publishedbrands = Brand::where('publication_status', 1)->get(),
           'publishedsizes'=>$publishedsizes = Size::where('publication_status', 1)->get(),
           'publishedUnits'=>$publishedUnits = Unit::where('publication_status', 1)->get()
       ]);
   }
//   public function saveItemInfo(Request $request){
//       $item = new Item();
//       $item->category_id = $request->category_id;
//       $item->brand_id = $request->brand_id;
//       $item->color_id = $request->color_id;
//       $item->size_id = $request->size_id;
//       $item->unit_id = $request->unit_id;
//       $item->item_name = $request->item_name;
//       $item->item_code = $request->item_code;
//       $item->minimum_stock_amount = $request->minimum_stock_amount;
//       $item->purchase_cost = $request->purchase_cost;
//       $item->vat = $request->vat;
//       $item->other_cost = $request->other_cost;
//   }
}
