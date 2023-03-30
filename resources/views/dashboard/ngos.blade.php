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
    <div id="addNgo" class="modal">
        <!-- Modal content -->
            <form class="modal-content" method="POST">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Add a new Ngo</h2>
                </div>
                <div class="modal-body">
                    <div class="input-div">
                        <label for="b-name">Ngo Name</label>
                        <input type="text" name="b-name" id="b-name" placeholder="Name" required>
                    </div>
                    <div class="input-div">
                        <label for="b-email">Ngo Email</label>
                        <input type="email" name="b-email" id="b-email" placeholder="Email" required>
                    </div>
                    <div class="input-div">
                        <label for="b-phone">Ngo Phone Number</label>
                        <input type="tel" name="b-phone" id="b-phone" placeholder="Phone Number" required>
                    </div>
                    <div class="input-div">
                        <label for="b-occupation">Ngo Phone</label>
                        <input type="text" name="b-occupation" id="b-occupation" placeholder="Occupation" required>
                    </div>
                    <div class="input-div">
                        <label for="e-dob">Beneficiary Date Of Birth</label>
                        <input type="date" name="b-dob" id="b-dob" placeholder="Date Of Birth" required>
                    </div>
                </div>
                <div class="modal-footer button-div">
                    <div></div>
                    <input type="submit" value="Add Ngo" name="add-ngo">
                </div>
            </form>
        </div>
@endsection