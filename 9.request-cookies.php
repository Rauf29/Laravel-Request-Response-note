<?php
// DemoController.php
/*
class DemoController extends Controller
{
public function DemoAction(Request $request):array
{
// for all cookies
return $request->cookie();
// for specific cookie
return $request->cookie('cookie_name');
}
}
 */
// web.php
/*
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/DemoAction', [DemoController::class, 'DemoAction']);
 */