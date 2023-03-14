@extends('layouts.app')
@section('content')
    <div class="center-part">
        <h2>Welcome Damascene!</h2>
        <p>Here's a list of NGOs you belong to. Click on it to go to the dashboard, or create another one.</p>
        <div class="ngo-list">
            <a class="ngo" href="/dashboard/analytics">
                <div><p>Compassion</p></div>
            </a>
            <div class="ngo-add" id="openAddModal">
                <h1>+</h1>
            </div>
        </div>
    </div>
@endsection