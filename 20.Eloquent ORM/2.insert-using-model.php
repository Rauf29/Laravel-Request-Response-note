<?php
/*
 * The create() method to "save" a new model using a single php statement.
 * In laravel the fillable property is used to define which fields in amodel can be mass assingned.

class Product extends Model {
protected $fillable = ['name', 'price'];
}

class DemoController extends Controller {
public function DemoAction(Request $request) {
return Product::create($request->input());
}
}
 */