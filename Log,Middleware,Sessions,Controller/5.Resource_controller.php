<?php
// web.php
/*
Route::resource('/DemoAction', DemoController::class);

 */

// DemoController.php
/*
public function index() {
return "Hello World";
}
public function create() {
return "Hello World";
}
public function store(Request $request) {
return "Hello World";
}
public function show(string $id) {
return "Hello World";
}
public function edit(string $id) {
return "Hello World";
}
public function update(Request $request, string $id) {
return "Hello World";
}
public function destroy(string $id) {
return "Hello World";
}
 */

// constructor
/*
public function __construct() {
$this->middleware('auth');
$this->middleware('log')->only('index');
$this->middleware('subscribed')->except('store');

}
 */