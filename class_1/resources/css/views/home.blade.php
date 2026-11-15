
<h1>HOME PAGE</h1>

@php

$name = "uzair";
$age = 21;

@endphp

<p>the name is {{$name}} and the age is {{$age}}  </p>   

@php
$username = "uzair";
$pass = 123;
@endphp

<h1>IF / ELSE</h1>
@if($username == "uzai2" && $pass == 123)
    <p>You are logged</p>

    @else
    <p>The username or password is incorrect</p>
@endif

<h1>FOR LOOP</h1>

@for($i = 1; $i <= 10; $i++)
    <p>{{$i}}</p>
@endfor