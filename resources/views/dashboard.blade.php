@extends('layouts.layout')

@section('content')
<div class="container">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body"><div class="col-md-12 text-center">
                <nav>
                    <ul>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('page1')}}">Page 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('page2')}}">Page 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('page3')}}">Page 3</a>
                        </li>
                    </ul>
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </nav>
            </div>
            </div>
        </div>
@endsection
    



