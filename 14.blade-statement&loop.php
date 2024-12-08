<?php
/*
<body>
@if($name == 'John')
<h1>Hello John</h1>
@elseif($name == 'Jane')
<h1>Hello Jane</h1>
@else
<h1>Hello Guest</h1>
@endif
</body>
 */

/*
<body>
@switch($name)
@case('John')
<h1>Hello John</h1>
@break
@case('Jane')
<h1>Hello Jane</h1>
@break
@default
<h1>Hello Guest</h1>
@endswitch
</body>
 */

/*
<body>
@for($i=1; $i<=10; $i++)
<h1>{{$i}}</h1>
@endfor
</body>
 */

/*
// DemoController.php
function DemoAction(Request $request){
$users= [
['name' => 'John', 'age' => 25],
['name' => 'Jane', 'age' => 30],
['name' => 'Bob', 'age' => 35],
];
return view('home', ['users' => $users]);

}

<body>
@foreach($names as $name)
<h1>{{$name}}</h1>
@endforeach
</body>
 */
