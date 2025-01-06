<?php 
/* 
* use the get() method to execute
* use the all() method to execute

class DemoController extends Controller
{
public function DemoAction(Request $request):array {
return Product::all(); // retriving all rows
return Product::first(); // retriving first row
return Product::find(5); // retriving specific row through id

// retriving list of column values
    return Product::pluck('name');// retriving name column values
    return Product::pluck('name', 'id'); // retriving name and id column values

    // aggregate functions
    return Product::min('price');
    return Product::max('price');
    return Product::avg('price');
    return Product::sum('price');
    return Product::count();

}
}
