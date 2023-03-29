@extends('layouts.dashboard')

@section('dashboard')
    <div class="right">
        <div class="top-action">
            <h2>Beneficiaries</h2>
            <div class="new-search">
                <div class="input-search">
                    <input type="text" placeholder="Search...">
                </div>
                <div class="button-div">
                    <input type="submit" name="add-new-beneficiary" id="add-new-beneficiary" value="+">
                </div>
            </div>
        </div>
        <div class="data-table">
            @if(count($beneficiaries) > 0)
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Beneficiary Name</th>
                        <th>Beneficiary Occupation</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @foreach($beneficiaries as $beneficiary)
                <tbody>
                    <tr>
                        <td>{{$beneficiary->beneficiary_id}}</td>
                        <td>{{$beneficiary->beneficiary_name}}</td>
                        <td>{{$beneficiary->beneficiary_occupation}}</td>
                        <td>
                        <form class="button-div" method="POST">
                                <input type="submit" value="Edit">
                                <input type="submit" value="Delete" name="delete_benef">
                            </form>
                        </td>
                    </tr>
                            
                </tbody>
                @endforeach
            </table>
            @else
            <p>No beneficiary registered currently!</p>
            @endif
        </div>
    </div>
@endsection     