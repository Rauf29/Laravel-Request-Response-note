<?php
// DemoController.php
/*
class DemoController extends Controller
{
public function DemoAction(Request $request):array
{
$file = $request->file('photo');
$fileSize = filesize($file);
$filetype = filetype($file);
$originalName = $file->getClientOriginalName();
$tempFileName = $file->getFilename();
$extension = $file->getClientOriginalExtension();

return [
'file' => $file,
'fileSize' => $fileSize,
'filetype' => $filetype,
'originalName' => $originalName,
'tempFileName' => $tempFileName,
'extension' => $extension,
];
}
}
 */
// web.php
/*
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/DemoAction', [DemoController::class, 'DemoAction']);
 */