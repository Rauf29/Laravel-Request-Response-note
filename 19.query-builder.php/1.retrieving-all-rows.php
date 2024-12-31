<?php
/*
1. import DB facade
2. use the table() method
3. use the get() method
 */

/*
use Illuminate\Support\Facades\DB;
class DemoController extends Controller {
function DemoAction() {
// retriving all rows
$products = DB::table('products')->get();
// retriving specific column
$products = DB::table('products')->first();
$products = DB::table('products')->find(1);
//retriving list of columns values
$products = DB::table('products')->select('name', 'price')->get();
$products = DB::table('products')->pluck('name', 'id'); // key pair value. name as value and id as key.
return $products;
}

}
 */