<?php 
/*
* the select() method allows you to select specific columns 
* to return distinct or unique values use distinct() method 

public function DemoAction(Request $request):array {
    return Product::select('name', 'price')->get();
    return Product::select('name', 'price')->distinct()->get();
}