<?php
// DemoController.php
/*
class DemoController extends Controller
{
public function DemoAction(Request $request):array
{
$file = $request->file('photo');
// for upload in storage folder
$file->storeAs('upload', $file->getClientOriginalName());

// for upload in public folder
$file->move(public_path('upload', $file->getClientOriginalName()));

}
}
 */
// web.php
/*
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/DemoAction', [DemoController::class, 'DemoAction']);
 */