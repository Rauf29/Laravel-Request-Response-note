<?php
/*
Route::get('StoringData/{email}',[DemoContoller::class,'StoringData']);
Route::get('RetrievingData',[DemoContoller::class,'RetrievingData']);
Route::get('DeletingData',[DemoContoller::class,'DeletingData']);
Route::get('FlashData',[DemoContoller::class,'FlashData']);
 */
/*
function StoringData( Request $request ) {
$request->session()->put( 'email', $request->email );
return true;
}
function RetrievingData( Request $request ) {
return $request->session()->pull( 'email', 'default' );

}
function DeletingData( Request $request ) {
$request->session()->forget( 'email' );
return true;
}
function FlashData( Request $request ) {
$request->session()->flush();
return true;
}
 */