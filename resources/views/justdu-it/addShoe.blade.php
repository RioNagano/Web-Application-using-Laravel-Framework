@extends('justdu-it.temp')

@section('title','addShoe')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <h2 style="text-align: center;">Add Shoe</h2>
        <form action="{{route('storeShoe')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label>Shoe Name</label>
                <input type="text" name="name" class="form-control">
                @error('name')
                    <div class="error" style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" name="price" class="form-control">
                @error('price')
                    <div class="error" style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control">
                @error('description')
                    <div class="error" style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                @error('image')
                    <div class="error" style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" value="storeShoe" class="btn btn-primary">Add Shoe</button>
        </form>
    </div>
@endsection