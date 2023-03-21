@extends('layouts.dashboard')

@section('dashboard')
    <div class="right">
        <div class="top-action">
            <h2>Funds</h2>
            <div class="new-search">
                <div class="input-search">
                    <input type="text" placeholder="Search...">
                </div>
                <div class="button-div">
                    <input type="submit" name="add-new-fund" id="add-new-fund" value="+">
                </div>
            </div>
        </div>
        <div class="data-table">
        @if(count($funds) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Fund ID</th>
                        <th>Amount</th>
                        <th>Donor</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @foreach($funds as $fund)
                <tbody>
                    
                    <tr>
                        <td>{{$fund->fund_id}}</td>
                        <td>{{$fund->fund_amount}}</td>
                        <td>{{$fund->fund_donor}}</td>
                        <td>
                            <form class="button-div
                            " method="POST">
                                <input type="submit" value="Edit">
                                <input type="submit" value="Delete" name="delete_fund">
                            </form>
                        </td>
                    </tr>
                            
                </tbody>
                @endforeach
            </table>
        @else
            <p>No Funds registered currently!</p>
        @endif
        </div>
    </div>
@endsection