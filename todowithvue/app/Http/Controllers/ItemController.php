<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;
class ItemController extends Controller
{

    public function index()
    {

       return Item::orderBy("created_at","DESC")->get();
    }

    public function store(Request $request)
    {
        $newItem=new Item();
        $newItem->name=$request->item["name"];
        $newItem->save();
        return $newItem;
    }


    public function update(Request $request,$id)
    {
      $existingItem=Item::find($id);
      if($existingItem){
          $existingItem->status=$request->item["status"]=='completed'?'completed':'task';
          $existingItem->completed_at=$request->item["status"]=='completed'? Carbon::now():null;
          $existingItem->save();
          return $existingItem;
      }
        return "Item not found.";
    }


    public function destroy($id)
    {
        $existingItem=Item::find($id);
        if($existingItem){
            $existingItem->status='deleted';
            $existingItem->save();
            return "Item gracefully deleted.";
        }
        return "Item not found.";
    }
    public function edit(Request $request,$id){
        $existingItem=Item::find($id);
        if($existingItem){
            $existingItem->name=$request->name;
            $existingItem->save();
            return $existingItem;
        }
        return response("Not Found",404)->header('Content-Type', 'application/json');

    }
}
