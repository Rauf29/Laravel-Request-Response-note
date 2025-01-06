<?php
/*
 * The update() method expects an array of column and value pairs representing the values to update.
 * In laravel the fillable property is used to define which fields in amodel can be mass assingned.

class Product extends Model {
protected $fillable = ['name', 'price'];
}

class DemoController extends Controller {
public function DemoAction(Request $request) {
return Product::where('id', $request->id)->update($request->input());
}
}
 */