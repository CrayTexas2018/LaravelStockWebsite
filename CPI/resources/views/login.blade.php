@extends('Templates.Master')

@section('title')
    Log In
@endsection

@section('content')
    <div class="col-md-12">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="col-md-6">
        <form class="form-group" action="{{route('signUp')}}" method="post">
            <div class="form-group">
                <h3>Sign Up:</h3>
                <label for="email">Email Address:</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="name">First Name:</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
                <input type="hidden" name="_token" value="{{@Session::token()}}">
        </form>
    </div>

    <div class="col-md-6">
        <form class="form-group" action="{{route('signIn')}}" method="post">
            <div class="form-group">
                <h3>Sign In:</h3>
                <label for="email">Email Address:</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
            <input type="hidden" name="_token" value="{{@Session::token()}}">
        </form>
    </div>
@endsection