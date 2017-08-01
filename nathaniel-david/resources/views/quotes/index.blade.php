@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Quotes</h1><hr>
            @foreach ($objects as $quote)
             <p>Name: {{ $quote->name }}</p>
             <p>Sent: {{ $quote->created_at }}</p>
             <p>Company: {{ $quote->company }}</p>
             <p>Email: {{ $quote->email }}</p>
             <p>Phone: {{ $quote->phone }}</p>
             <p>About: {{ $quote->about }}</p>
             <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection
