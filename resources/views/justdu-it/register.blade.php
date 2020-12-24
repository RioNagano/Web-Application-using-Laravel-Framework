@extends('justdu-it.temp')

@section('title','register')

@section('search')
@stop

@section('sidenav')
@stop

@section('content')
    <br>
    <br>
    <br>
    <br>
    <div id="formLR">
        <form action="{{Route('register')}}" method="post">
            @csrf
            <div class="fo">
                <label for="formUsername" id="labels">Username</label>
                <input type="text" name="username">
                @error('username')
                    <div class="error" style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="fo">
                <label for="formEmail" id="labels">E-Mail address</label>
                <input type="email" name="email">
                @error('email')
                    <div class="error" style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="fo">
                <label for="formPassword" id="labels" >Password</label>
                <input type="password" name="password">
                @error('password')
                    <div class="error" style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="fo">
                <label for="formConfirm" id="labels" >Confirm Password</label>
                <input type="password" name="confirm">
                @error('confirm')
                    <div class="error" style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <input type="submit" value="Register">
        </form>
    </div>
    
@endsection