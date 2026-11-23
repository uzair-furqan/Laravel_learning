@include("nav")
<h1>WElcome Page</h1>

<form action="/submit" method="post">
    @csrf
    name: <input type="text" name="name" id="" value="{{ old('name') }}">
    @error('name')
    <p style="color:red;">{{$message}}</p>
    @enderror
    <br>
    password: <input type="password" name="pass" id="">
    @error('pass')
    <p style="color:red;">{{$message}}</p>
    @enderror
    <br>
    <input type="submit" name="" id="">
</form>