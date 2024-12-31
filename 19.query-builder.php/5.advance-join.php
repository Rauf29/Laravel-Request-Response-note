<?php 
/*
function DemoAction() {
    $products = DB::table('products')
        ->join('categories', function (JoinClause $join) {
            $join->on('products.category_id', '=', 'categories.id')
                ->where('products.price', '>', 2000);
        })join('brands', function (JoinClause $join) {
            $join->on('products.brand_id', '=', 'brands.id')
                ->where('brands.brandName', '=', 'Apple');
        })
        ->get();
    return $products;
}