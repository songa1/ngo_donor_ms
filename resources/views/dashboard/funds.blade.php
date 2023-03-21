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
            <table>
                <thead>
                    <tr>
                        <th>Fund ID</th>
                        <th>Amount</th>
                        <th>Donor</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>1</td>
                        <td>20000</td>
                        <td>Open Society</td>
                        <td>
                            <form class="button-div
                            " method="POST">
                                <input type="submit" value="Edit">
                                <input type="submit" value="Delete" name="delete_fund">
                            </form>
                        </td>
                    </tr>
                            
                </tbody>
            </table>
        </div>
    </div>
@endsection