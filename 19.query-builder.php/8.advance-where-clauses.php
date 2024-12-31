<?php 
// list of clauses
/*
1.orwhere()
2.whereNot()
3.whereBetween()
4.whereNotBetween()
5.whereBetweenColumns()
6.whereNotBetweenColumns()
7.whereIn()
8.whereNotIn()
9.whereNull()
10.whereNotNull()
11.whereDate()
12.whereDay()
13.whereMonth()
14.whereYear()
15.whereTime()
16.whereColumn()


*/

/*
function DemoAction() {
    $products = DB::table('products')
    ->where('products.price', '>', 2000)
    ->orwhere('products.price', '=', 20)
    ->get();

    $products = DB::table('products')
    ->whereNot('products.price', '=', 20)
    ->get();

    $products = DB::table('products')
    ->whereBetween('products.price', [2000, 5000])
    ->get();

    $products = DB::table('products')
    ->whereNotBetween('products.price', [2000, 5000])
    ->get();

    $products = DB::table('products')
    ->whereIn('price', [2000, 5000])
    ->get();

    $products = DB::table('products')
    ->whereNotIn('price', [2000, 5000])
    ->get();

    $products = DB::table('products')
    ->whereDate('created_at', '2025-01-01')
    ->get();

    $products = DB::table('products')
    ->whereColumn('price', '>', 'discount')
    ->get();
    return $products;
}