<?php 
/*
* laravel provides convenience methods for incrementing and decrementing values in a column.

public function DemoAction(Request $request){
Product::where('id', $request->id)
->increment('price', 2);
// ->decrement('price', 10);// decrement by 2
//->increment('price') // increment by 1
}