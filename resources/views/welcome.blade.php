@extends('layouts.app')
@section('content')
    <div class="center-part">
        <h2>Welcome Damascene!</h2>
        <p>Here's a list of NGOs you belong to. Click on it to go to the dashboard, or create another one.</p>
        <div class="ngo-list">
            @if(count($ngo) > 0)
            @foreach($ngo as $ng)
            <a class="ngo" href="/dashboard">
                <div><p>{{$ng->ngo_name}}</p></div>
            </a>
            @endforeach
            @else
            <div class="ngo-add" id="openAddModal">
                <h1>+</h1>
            </div>
            @endif
        </div>
    </div>
@endsection