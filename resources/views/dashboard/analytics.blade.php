@extends('layouts.dashboard')

@section('dashboard')
    <div class="right">
        <div class="top-action">
            <h2>Analytics</h2>
            <div class="new-search">
                <div class="input-search">
                    <select name="date" id="date">
                        <option value="1">Today</option>
                        <option value="1">Yesterday</option>
                        <option value="1">Previous 7 days</option>
                        <option value="1">Previous 28 days</option>
                        <option value="1">Lifetime</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="data-table">
            <div class="analytic">
                <h1>NGOs</h1>
                <p>50</p>
            </div>
            <div class="analytic">
                <h1>Donors</h1>
                <p>34</p>
            </div>
            <div class="analytic">
                <h1>Beneficiaries</h1>
                <p>12</p>
            </div>
            <div class="analytic">
                <h1>Raised (RWF)</h1>
                <p>34000</p>
            </div>
        </div>
    </div>
@endsection