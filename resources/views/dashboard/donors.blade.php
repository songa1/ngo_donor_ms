@extends('layouts.dashboard')

@section('dashboard')
    <div class="right">
        <div class="top-action">
            <h2>Donors</h2>
            <div class="new-search">
                <div class="input-search">
                    <input type="text" placeholder="Search...">
                </div>
                <div class="button-div">
                    <input type="submit" name="add-new-donor" id="add-new-donor" value="+">
                </div>
            </div>
        </div>
        <div class="data-table">
            @if(count($donors) > 0)
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Donor Name</th>
                        <th>Donor Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @foreach($donors as $donor)
                <tbody>
                
                    <tr>
                        <td>{{$donor->donor_id}}</td>
                        <td>{{$donor->donor_name}}</td>
                        <td>{{$donor->donor_email}}</td>
                        <td>
                            <form class="button-div
                            " method="POST">
                                <input type="submit" value="Edit">
                                <input type="submit" value="Delete" name="delete_donor">
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            @else
            <p>No Donor registered currently!</p>
            @endif
        </div>
    </div>
@endsection