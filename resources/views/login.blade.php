@extends('layouts.app')

@section('content')
    <div class="center-part">
        <h3>Login to your account</h3>
        <form class="login-form" method="POST">
            <div class="input-div">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="input-div">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="button-div">
                <input type="submit" name="loginBtn" value="Log in">
                <a href="/register">Register</a>
            </div>
        </form>
    </div>
@endsection