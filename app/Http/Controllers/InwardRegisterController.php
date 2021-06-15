<?php

namespace App\Http\Controllers;
use App\Models\CategoryMaster;
use App\Models\ItemMaster;
use App\Models\PlaceMaster;
use App\Models\UserMaster;
use App\Models\InwardRegister;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;




class InwardRegisterController extends Controller
{
    public function index()
    {
        $inward = DB::Table('inward_registers')
        ->join('item_masters','inward_registers.itemid','=','item_masters.id')
        ->join('place_masters','inward_registers.pid','=','place_masters.id')
        ->join('user_masters','inward_registers.uid','=','user_masters.id')
        ->select('item_masters.iname','place_masters.landmark','user_masters.uname','inward_registers.quantity','inward_registers.price','inward_registers.expiredate','inward_registers.created_at')
        ->get();


        return view('inwardregister.index', compact('inward'));
    }

    
    public function create($id){
      $item= ItemMaster::find($id);
        $place=PlaceMaster::all();
        $user=UserMaster::all();
        return view('inwardregister.create', compact('item', 'place', 'user'));
    }
    

    
     public function store(Request $request)
    {
        $inward = new InwardRegister();  
        $inward->itemid = $request->get('itemid');  
        $inward->pid = $request->get('pid');  
        $inward->uid= $request->get('uid');
        $inward->quantity= $request->get('quantity');
        $inward->price= $request->get('price');
        $inward->expiredate= $request->get('expiredate');
        $request->validate([
            'itemid'             => 'required',                        
            'pid'             => 'required',
            'uid'             => 'required',
            'quantity'      => 'required|numeric',
            'price'          => 'required|numeric',
            'expiredate'      => 'required',
        ]);
     
     $inward->save();

        $item=ItemMaster::find($request->get('itemid'));
        $item->currentstock=$item->currentstock + $request->get('quantity');
        $item->save();
        //return back()->with('success',"New Item Added");
		
		return redirect('/inwardregister');
    
       //return redirect('/inwardregister/index');
    }

    public function destroy($id)
    {
        $inward =inwardregister::find($id); 
		$inward->delete();
       return (" Inward Record Deleted");  
    }
    
}
