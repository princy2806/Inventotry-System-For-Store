<?php

namespace App\Http\Controllers;
use App\Models\CategoryMaster;
use App\Models\ItemMaster;
use App\Models\PlaceMaster;
use App\Models\UserMaster;
use App\Models\InwardRegister;
use Illuminate\Support\Facades\DB;
use App\Models\OutwardRegister;


use Illuminate\Http\Request;

class OutwardRegisterController extends Controller
{
    public function index()
    {
        $outward = DB::Table('outward_registers')
        
        ->join('user_masters','outward_registers.uid','=','user_masters.id')
        ->join('item_masters','outward_registers.itemid','=','item_masters.id')
        ->select('item_masters.iname','user_masters.uname','outward_registers.quantity','Outward_registers.expiredate','outward_registers.created_at')
        ->get();


        return view('outwardregister.index', compact('outward'));
    }

    public function create($id){
        $item= ItemMaster::find($id);
        $user=UserMaster::all();
        return view('outwardregister.create', compact('item', 'user'));
      }

      public function store(Request $request)
    {
        $outward = new OutwardRegister();  
        $outward->itemid= $request->get('itemid');
        $outward->uid= $request->get('uid');
        $outward->quantity= $request->get('quantity');
        $outward->expiredate= $request->get('expiredate');

        $request->validate([
            'itemid'             => 'required',                        
            'uid'             => 'required',
            'quantity'      => 'required|numeric',
            'expiredate'          => 'required',
            
        ]);
     
     $outward->save();

        $item=ItemMaster::find($request->get('itemid'));
        $item->currentstock=$item->currentstock - $request->get('quantity');
        $item->save();
       // return back()->with('success',"New Item Added");
		
		return redirect('/outwardregister');
    
       //return redirect('/inwardregister/index');
    }
}
