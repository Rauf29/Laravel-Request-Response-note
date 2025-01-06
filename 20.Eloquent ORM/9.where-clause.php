<?php 
/*
// where() method allow to filter the data
/*
1. =(equal to)
2. != (not equal to)
3.< (less than)
4.<= (less than or equal to)
5.> (greater than)
6.>= (greater than or equal to)
7. like(contains)
8. not like(not contains)
9. in(is in the list)
10. not in(not in the list)
 */
/*
 public function DemoAction() {
    $products = DB::table('products')->where('products.price', '>', 2000)->get();
    $products = DB::table('products')->where('title', 'like', '%CA%')->get();
 }