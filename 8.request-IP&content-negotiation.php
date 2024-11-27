<?php
// DemoController.php
/*
class DemoController extends Controller
{
public function DemoAction(Request $request):array
{
// for ip
return $request->ip();
// show content type
return $request->getAcceptableContentTypes();
// negotiate content type
if ($request->accepts(['application/json'])) {
return 1;
}esle {
return 0;
}

}
}
 */
// web.php
/*
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/DemoAction', [DemoController::class, 'DemoAction']);
 */