@include("nav")
<h1>WElcome Page</h1>

<form action="/submit" method="post">
    @csrf
    name: <input type="text" name="name" id="">
    <br>
    password: <input type="password" name="pass" id="">
    <br>
    <input type="submit" name="" id="">
</form>