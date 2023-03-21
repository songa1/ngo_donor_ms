@extends('layouts.dashboard')

@section('dashboard')
    <div class="right">
        <div class="top-action">
            <h2>Settings</h2>
            <div class="new-search">
                <div class="button-div">
                    <input type="submit" name="add-new" id="add-new" value="Save Settings">
                </div>
            </div>
        </div>
        <div class="data-table">
            <div class="setting">
                <p>Edit your Name:</p>
                <input type="text" placeholder="Full Name" value="Damascene">
            </div>
            <div class="setting">
                <p>Edit your User name:</p>
                <input type="text" placeholder="User name" value="Damascene">
            </div>
            <div class="setting">
                <p>Edit your Email:</p>
                <input type="email" placeholder="Email" value="damascene@email.com">
            </div>
            <div class="setting">
                <p>Edit your Occupation:</p>
                <input type="text" placeholder="Occupation">
            </div>
            <div class="setting">
                <p>Allow us to send you promotional emails:</p>
                <input type="checkbox" placeholder="Occupation">
            </div>
            <div class="setting">
                <p>Allow us to show your funding data to donors:</p>
                <input type="checkbox" placeholder="Occupation">
            </div>
        </div>
    </div>
@endsection