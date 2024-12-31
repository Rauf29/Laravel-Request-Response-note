<?php 
// inner join

/* 
function DemoAction() {
    $products = DB::table('products')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->join('brands', 'products.brand_id', '=', 'brands.id')
        ->get();

        // left join
        $products = DB::table('products')
        ->leftjoin('categories', 'products.category_id', '=', 'categories.id')
        ->leftjoin('brands', 'products.brand_id', '=', 'brands.id')
        ->get();

        // right join
        $products = DB::table('products')
        ->rightjoin('categories', 'products.category_id', '=', 'categories.id')
        ->rightjoin('brands', 'products.brand_id', '=', 'brands.id')
        ->get();
    return $products;
}