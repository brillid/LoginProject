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


<div class="container">
    <div class="card">
        <div class="card-header">Dashboard</div>
        <div class="card-body"><div class="col-md-12 text-center">
            <div>
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" autofocus>
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password">
                    </div>
                    <div>
                        <label>Password confirmation</label>
                        <input type="password" name="password_confirmation">
                    </div>
                    <duv>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </duv>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>