<?php
// DemoController.php
/*
class DemoController extends Controller
{
public function DemoAction()
{
$name = "cookie_1";
$value = "This is value of cookie_1";
$minute = 60;
$path = "/";
$domain = $_SERVER['SERVER_NAME'];
$secure = true;
$httponly = false;
return response("Cookie created")->cookie($name, $value, $minute, $path, $domain, $secure, $httponly);

}
}
 */
// web.php
/*
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/DemoAction', [DemoController::class, 'DemoAction']);
 */