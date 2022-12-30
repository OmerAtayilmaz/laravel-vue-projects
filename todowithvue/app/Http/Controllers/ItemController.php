<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function validation_example(){

        return view("validator");
    }

    public function validationform(Request $req){

      /*  $rules =[
            'name'=>'required|max:255|min:3',
            'age'=>'required|integer',
            'username'=>'required|string',
            'email'=>'required|min:10|email|unique:users',
            'country'=>'required'
        ];
        $messages=[
            'name.required'=>"Kullanıcı adı boş bırakılamaz"
        ];
        $validated=$req->validate($rules,$messages);
      */
        $rules=Validator::make($req->all(),[
                'name'=>'required|max:255|min:3',
                'age'=>'required|integer',
                'username'=>'required|string',
                'email'=>'required|min:10|email|unique:users',
                'country'=>'required'
            ]);
        if($rules->fails()){
            return redirect()->back()->withErrors($rules)->withInput();
        }

      return $req->post();

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
