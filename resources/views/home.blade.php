@extends('layouts.app')

@section('content')
    <main role="main">
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3 text-center">Test task</h1>
            </div>
        </div>
        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4 text-center">
                    <h2>Users list</h2>
                    <p><a class="btn btn-secondary" href="{{route('users-list')}}" role="button">View »</a></p>
                </div>
                <div class="col-md-4 text-center">
                    <h2>Enrolled users list</h2>
                    <p><a class="btn btn-secondary" href="{{route('enrolled-users-list')}}" role="button">View »</a></p>
                </div>
                <div class="col-md-4 text-center">
                    <h2>Courses list</h2>
                    <p><a class="btn btn-secondary" href="{{route('courses-list')}}" role="button">View »</a></p>
                </div>
            </div>
        </div> <!-- /container -->
    </main>
@endsection
