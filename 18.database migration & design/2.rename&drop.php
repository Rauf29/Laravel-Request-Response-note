<?php
// Table
/*
public function DemoAction(){
// rename table
Schema::rename('products', 'products2');
// drop table
Schema::dropIfExists('products2');
}
 */
// Column
/*
//add
public function DemoAction(){
Schema::table('profiles', function (Blueprint $table) {
$table->after('city', function ($table) {
$table->string('country');
$table->string('address');
});
});
}
}
// rename column

public function DemoAction(){
Schema::table('profiles', function (Blueprint $table) {
$table->renameColumn('country', 'country2');
});
}
// drop column
public function DemoAction(){
Schema::table('profiles', function (Blueprint $table) {
$table->dropColumn('address');
});
}
 */