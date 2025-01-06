<?php 
/*  Display simple "Next" and "Previous" links in your application's UL, use the simplePaginate() method.

public function DemoAction(Request $request):array {
return Product::simplePaginate(2);
}

The paginate method couts the total number of records mathced by the query before retrieving the records from the datebase.

public function DemoAction(Request $request):array {
//return Product::paginate(2);
return Product::paginate(
$perPage = 2,
$columns = ['*'],// * means all. ["name", "price"] then it will return only name and price
$pageName = 'page',
)
}

