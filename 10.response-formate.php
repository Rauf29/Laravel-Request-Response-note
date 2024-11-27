<?php
// DemoController.php
/*
class DemoController extends Controller
{
public function DemoAction(Request $request):array|string|null|int|bool|JsonResponse
{
return null;
//---------------------------------------
return response()->json([
'name' => 'John Doe',
'age' => 25
])
//---------------------------------------
// response with message,data & code
$msg = "Success";
$data = [
'name' => 'John Doe',
'age' => 25
];
$code = 200;
return response()->json([
'message' => $msg,
'data' => $data,
'code' => $code
]);
//----------------------------------
// response redirect
return redirect('/DemoAction2);
//----------------------------------
//  binary response and download
$path = public_path('file.pdf');
return response()->file($path);
return response()->download($path);

}
}
 */
// web.php
/*
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/DemoAction', [DemoController::class, 'DemoAction']);
 */