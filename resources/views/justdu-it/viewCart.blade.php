@extends('justdu-it.temp')

@section('title','viewCart')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <h2 style="text-align: center;">View Cart</h2>
        <table class="table">
            @foreach($cart as $head)
            <tbody>
                @foreach($shoe as $sub)    
                    @if($sub->id == $head->item_id)
                        <tr>
                            <th><img src="{{asset('storage/images/' . $sub->image)}}" width="300px" height="200px" alt="image"></th>
                            <th>{{$sub->name}}</th>
                            <th>{{$head->quantity}}</th>
                            <th>{{$sub->price * $head->quantity}}</th>
                            <th><a class="btn btn-primary" href="/editCart/{{$head->id}}" role="button">Edit</a></th>
                        </tr>
                        @break
                    @endif
                @endforeach
            </tbody>
            @endforeach
        </table>
        @if(!empty($head))
        <a class="btn btn-primary" href="{{Route('checkout')}}" role="button" style="float: right;">Checkout</a>
        @endif
    </div>
@endsection