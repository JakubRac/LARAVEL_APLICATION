
@extends('template')

@section('content')
<div style="margin-top: 200px; margin-bottom: 200px; text-align: center; font-size: 30px;">
<form action="{{ asset('/login') }}" method="post">
{{ csrf_field() }}
    <input type="text" name="login" placeholder="username"/> </br>
    <input type="password" name="password" placeholder="password"/> </br>
    <button type="submit"> LOG IN </button>
</form>
</div>


<div style="text-align: center; font-size: 15px;">
    <p>{{ $error }}</p>
</div>


<div style="margin-top: 200px; margin-bottom: 200px; text-align: center; font-size: 30px;">
<form action="{{ asset('/register') }}" method="post">
{{ csrf_field() }}
    <input type="text" name="login" placeholder="username"/> </br>
    <input type="text" name="email" placeholder="email"/> </br>
    <input type="password" name="password" placeholder="password"/> </br>
    <button type="submit"> REGISTER </button>
</form>
</div>



@endsection