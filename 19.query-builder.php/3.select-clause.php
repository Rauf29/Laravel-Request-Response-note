<?php 
/*
function DemoAction() {
    $products = DB::table('products')->select('name', 'price')->get();
    // for unique value use distinct() method
    $products = DB::table('products')->select('name', 'price')->distinct()->get();
    return $products;
}