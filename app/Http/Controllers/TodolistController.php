<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
class TodolistController extends Controller
{
    //should be default always to mdo this
    public function index(){
        //passing values is easwy because views take second parameters
        //listitem::all returns all of them from the table
    return view('welcome',['listItems' => ListItem::all()]); //for all
     // return view('welcome',['listItems' => ListItem::where('isComplete',0)->get()]);
    }
  
    public function markComplete($id){
       // \Log::info($id);
       //return redirect('/');
        //find it
  
        $listItem = ListItem::find($id);
   
     
        
   
        if($listItem->isComplete != 1){
        $listItem->isComplete = 1;
        }else{
            $listItem->isComplete = 0;
        }
        $listItem->save();
        return redirect('/');
     
        
    }
    public function deleteItem($id){
        // \Log::info($id);
        //return redirect('/');
         //find it
   
         $listItem = ListItem::find($id)->delete();
    
      
         
   
         return redirect('/');
      
         
     }
    public function saveItem(Request $request){
        //\Log::info(json_encode($request->all()));
        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->isComplete=0;
        $newListItem->save();
        //saveItemtodatabase
        return redirect('/');
        //return view('welcome',['listItems' => ListItem::all()]);
        //make sure it's passed to both that use default route
    }
    //
}
