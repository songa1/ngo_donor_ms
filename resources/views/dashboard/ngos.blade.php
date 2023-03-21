@extends('layouts.dashboard')

@section('dashboard')
    <div class="right">
        <div class="top-action">
            <h2>NGOs</h2>
            <div class="new-search">
                <div class="input-search">
                    <input type="text" placeholder="Search...">
                </div>
                <div class="button-div">
                    <input type="submit" name="add-new-ngo" id="add-new-ngo" value="+">
                </div>
            </div>
        </div>
        <div class="data-table">
            @if(count($ngos) > 0)
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NGO Name</th>
                            <th>NGO Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    @foreach($ngos as $ngo)
                        <tbody>
                            <tr>
                                <td>{{$ngo->ngo_id}}</td>
                                <td>{{$ngo->ngo_name}}</td>
                                <td>{{$ngo->ngo_address}}</td>
                                <td>
                                <form class="button-div
                                    " method="POST">
                                        <input type="submit" value="Edit">
                                        <input type="submit" value="Delete" name="delete_ngo">
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            @else
                <p>No NGOS registered currently!</p>
            @endif
        </div>
    </div>
@endsection