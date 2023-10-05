@extends('layouts.layout')

@section('content')
<div>
        @if ($errors->any())
        <div>
            <div>Something went wrong!</div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<div class="container">
    <div class="card">
        <div class="card-header">Login</div>
        <div class="card-body"><div class="col-md-12 text-center">
            <form action="{{route('login')}}" method="POST">
                @csrf
                <label>Email:</label>
                <input type="email" name="email" required>
                <br>
                <label>Password:</label>
                <input type="password" name="password" required>
                <br>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection
