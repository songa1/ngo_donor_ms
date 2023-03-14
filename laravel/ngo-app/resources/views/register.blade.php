@extends('layouts.app')

@section('content')
    <div class="center-part">
        <h3>Create a new account</h3>
        <form class="register-form" method="POST">
            <div class="reg-parts">
                <div class="reg-part">
                    <h2>NGO INFORMATION</h2>
                    <div class="input-div">
                        <label for="ngo_name">NGO Name</label>
                        <input type="text" name="ngo_name" id="ngo_name" placeholder="NGO Name" required>
                    </div>
                    <div class="input-div">
                        <label for="ngo_address">NGO Address</label>
                        <input type="text" name="ngo_address" id="ngo_address" placeholder="NGO Adress">
                    </div>
                    <div class="input-div">
                        <label for="ngo_phone">NGO Phone</label>
                        <input type="tel" name="ngo_phone" id="ngo_phone" placeholder="NGO Phone">
                    </div>
                    <div class="input-div">
                        <label for="ngo_email">NGO Email</label>
                        <input type="email" name="ngo_email" id="ngo_email" placeholder="NGO Email" required>
                    </div>
                    <div class="input-div">
                        <label for="ngo_web">NGO Website</label>
                        <input type="url" name="ngo_web" id="ngo_web" placeholder="https://example.com">
                    </div>
                </div>
                <div class="reg-part">
                    <h2>USER INFORMATION</h2>
                    <div class="input-div">
                        <label for="employee_name">Full name</label>
                        <input type="text" name="employee_name" id="employee_name" placeholder="Full Name" required>
                    </div>
                    <div class="input-div">
                        <label for="employee_email">User Email</label>
                        <input type="email" name="employee_email" id="employee_email" placeholder="User Email" required>
                    </div>
                    <div class="input-div">
                        <label for="employee_phone">User Phone</label>
                        <input type="tel" name="employee_phone" id="employee_phone" placeholder="User Phone">
                    </div>
                    <div class="input-div">
                        <label for="employee_dob">Date of Birth</label>
                        <input type="date" name="employee_dob" id="employee_dob" placeholder="Date Of Birth">
                    </div>
                    <div class="input-div">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>
                    <div class="input-div">
                        <label for="c-password">Confirm Password</label>
                        <input type="password" name="c-password" id="c-password" placeholder="Confirm Password" required>
                    </div>
                </div>    
            </div>
            <div class="button-div">
                <input type="submit" value="Register" name="register">
                <a href="/">Login</a>
            </div>
        </form>

    </div>
@endsection