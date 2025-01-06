<?php 
// method 
/*
1.orderBy()
2.latest()
3.inRandomOrder()
4.groupBy()
5.having()
6.limit()
7.skip()
8.take()
9.oldest()
*/
/* 
public function DemoAction() {
    $products = DB::table('products')->orderBy('price', 'desc')->get();

    $products = DB::table('products')->latest()->get();

    $products = DB::table('products')->inRandomOrder()->get();

    $products = DB::table('products')->groupBy('price')->get();

    $products = DB::table('products')->having('price', '>', 2000)->get();

    $products = DB::table('products')->limit(5)->get();

    $products = DB::table('products')->skip(2)->take(5)->get(); // 2 row skip and take 5 row

    $products = DB::table('products')->groupBy('price')->having('price', '>', 2000)->get();
}