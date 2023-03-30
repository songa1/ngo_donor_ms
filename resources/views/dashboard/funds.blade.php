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
                    <input type="submit" name="add-new-fund" id="add-new-fund" value="+" data- 
            toggle="modal" data-target="#addFunds">
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
    <div id="addFunds" class="modal">
        <!-- Modal content -->
            <form class="modal-content" method="POST">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Add a new Fund</h2>
                </div>
                <div class="modal-body">
                    <div class="input-div">
                        <label for="f-source">Fund Source</label>
                        <select name="f-source" id="f-source" required>
                            <option>Select the source of this fund</option>
                            
                        </select>
                    </div>
                    <div class="input-div">
                        <label for="f-amount">Fund Amount</label>
                        <input type="number" name="f-amount" id="f-amount" placeholder="Amount" required>
                    </div>
                    <div class="input-div">
                        <label for="b-type">Funds Type</label>
                        <select name="f-type" id="f-type" required>
                            <option>Select a fund type</option>
                            
                        </select>
                    </div>
                </div>
                <div class="modal-footer button-div">
                    <div></div>
                    <input type="submit" value="Add Fund" name="add-fund">
                </div>
            </form>
        </div>
@endsection