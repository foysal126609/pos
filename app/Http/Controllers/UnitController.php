<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function unitInfo(){
        return view('admin.unit.unit-info',[
            'allUnitsInfo'=>$allUnitsInfo = Unit::all()
        ]);
    }
    public function saveUnitInfo(Request $request){
        $size = new Unit();
        $size->unit_name = $request->unit_name;
        $size->publication_status = $request->publication_status;
        $size->save();
        return redirect('/unit-info')->with('message', 'unit info save successfully');
    }
    public function editUnitInfo($id){
        return view('admin.unit.edit-unit-info',[
            'allUnitsInfo'=>$allUnitsInfo = Unit::all(),
            'unitInfoById'=>$unitInfoById = Unit::find($id)
        ]);
    }

    public function updateUnitInfo(Request $request){
        $unit = Unit::find($request->unit_id);
        $unit->unit_name = $request->unit_name;
        $unit->publication_status = $request->publication_status;
        $unit->save();
        return redirect('/unit-info')->with('message','unit info update successfully');
    }

    public function unPublishedUnitInfo($id){
        $unitById = Unit::find($id);
        $unitById->publication_status = 0;
        $unitById->save();
        return redirect('/unit-info');

    }
    public function PublishedUnitInfo($id){
        $unitById = Unit::find($id);
        $unitById->publication_status = 1;
        $unitById->save();
        return redirect('/unit-info');

    }
}
