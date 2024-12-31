<?php 
/* 
public function DemoAction(Request $request){ {
    $result = DB::table('products')->where('id', '=', $request->id)->update(
        $request->input()
    )
}
 */

 // updateOrInsert

 /*
 public function DemoAction(Request $request){ 
    $result = DB::table('products')->updateOrInsert(
    ['brandName' => $request->Name], // frist check if exist then update
    $request->input() // if not exist then insert
 }

 // increment & decrement
 public function DemoAction(Request $request){ 
    $result = DB::table('products')->where('id', '=', $request->id)->increment('price',2);
    $result = DB::table('products')->where('id', '=', $request->id)->decrement('price',2);
 }