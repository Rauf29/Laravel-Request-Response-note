<?php
/*
 * The updateORCreate() method in laravel is used to update an existing record or create a new record.

class Product extends Model {
protected $fillable = ['name', 'price'];
}

class DemoController extends Controller {
public function DemoAction(Request $request) {
return Product::updateOrCreate(['name' => $request->name], $request->input());
}
}
 */