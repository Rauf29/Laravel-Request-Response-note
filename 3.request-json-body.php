<?php
// DemoController.php
/*
class DemoController extends Controller
{
public function DemoAction(Request $request):string
{
$name = $request->input(name);
$age = $request->input(age);
return "Name is = ${name} and age is = ${age}";
}
}
 */
// web.php
/*
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/DemoAction', [DemoController::class, 'DemoAction']);
 */