<?php
/*
use App\Http\Middleware\CheckRequestDetails;

Route::post('/DemoAction',[DemoContoller::class,'DemoAction'])->middleware([CheckRequestDetails::class]);
 */

// CheckRequestDetails.php
/*
public function handle($request, Closure $next):response {
$key = $request->header('key');
if($key== "123") {
return $next($request);
}else {
return response()->json("unauthorized",401);
}
}
 */

// --------------------------------------------------

// apply for route group

/*
Route::middleware(['CheckRequestDetails'])->group(function () {
Route::get('/DemoAction1', [DemoContoller::class, 'DemoAction']);
Route::get('/DemoAction2', [DemoContoller::class, 'DemoAction']);
Route::get('/DemoAction3', [DemoContoller::class, 'DemoAction']);
}
 */
//Kernel.php
/*
protected $middleware = [
'checkRequestDetails' => \App\Http\Middleware\CheckRequestDetails::class,
]
 */

// --------------------------------------------------

// Apply for whole application
//Kernel.php
/*
protected $middlewareGroups = [
'web' => [
\App\Http\Middleware\CheckRequestDetails::class,
];

'api' => [
\App\Http\Middleware\CheckRequestDetails::class,
];
]
 */

// -------------------------------------------------

// Manipulate request from middleware

/*
// add
$request->headers->set('key', '123');

// remove
$request->remove('name);

//replace
$request->headers->replace(['name'=>'XXX','age'=>'20']);

 */

//-----------------------------------------------

// Rate limiting with middleware

/*
Route::middleware('throttle:5,1')->group(function () {
Route::get('/DemoAction1', [DemoContoller::class, 'DemoAction']);
Route::get('/DemoAction2', [DemoContoller::class, 'DemoAction']);
Route::get('/DemoAction3', [DemoContoller::class, 'DemoAction']);
}

Route::get('/DemoAction1', [DemoContoller::class, 'DemoAction'])->middleware('throttle:5,1');
 */