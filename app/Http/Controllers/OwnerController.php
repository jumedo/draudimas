<?php

namespace App\Http\Controllers;

use App\Car;
use App\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']);
    }

    public function ownerList(){
        return view('owners', ['owners' => Owner::all()]);
    }

    public function addOwner(){
        return view('addOwner');
    }


    public function insertOwner(Request $request){
        $owner= new Owner();
        $owner->name=$request->name;
        $owner->surname=$request->surname;
        $owner->from_date=$request->from_date;
        $owner->to_date=$request->to_date;
        $owner->save();

        return redirect()->route('ownerList');
    }

    public function editOwner($id){
        $owner=Owner::find($id);
       return view('editOwner', ['owner'=>$owner]);

    }

    public function updateOwner($id, Request $request){
        $owner=Owner::find($id);
        $owner->name=$request->name;
        $owner->surname=$request->surname;
        $owner->from_date=$request->from_date;
        $owner->to_date=$request->to_date;
        $owner->save();

        return redirect()->route('ownerList');
    }

    public function deleteOwner($id){
        $owner=Owner::find($id);
        $owner->delete();

        return redirect()->route('ownerList');
    }
}
