@extends('justdu-it.temp')

@section('title','login')

@section('search')
@stop

@section('sidenav')
@stop

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="formLR">
        <form action="{{Route('login')}}" method="post">
            @csrf
            <div class="fo">
                <label for="formEmail" id="labels">E-Mail address</label>
                <input type="email" name="email">
                @error('email')
                    <div class="error" style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="fo">
                <label for="formPassword" id="labels">Password</label>
                <input type="password" name="password">
                @error('password')
                    <div class="error" style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="fo">
                <input type="checkbox" name="remember" id="rbm">
                <label for="rbm">Remember me</label>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
@endsection