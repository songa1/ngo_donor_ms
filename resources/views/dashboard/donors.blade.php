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
    <div id="addDonor" class="modal">
        <!-- Modal content -->
            <form class="modal-content" method="POST">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Add a new Donor</h2>
                </div>
                <div class="modal-body">
                    <div class="input-div">
                        <label for="d-name">Donor Name</label>
                        <input type="text" name="d-name" id="d-name" placeholder="Name" required>
                    </div>
                    <div class="input-div">
                        <label for="d-email">Donor Email</label>
                        <input type="email" name="d-email" id="d-email" placeholder="Email" required>
                    </div>
                    <div class="input-div">
                        <label for="d-phone">Donor Phone Number</label>
                        <input type="tel" name="d-phone" id="d-phone" placeholder="Phone Number" required>
                    </div>
                </div>
                <div class="modal-footer button-div">
                    <div></div>
                    <input type="submit" value="Add Donor" name="add-donor">
                </div>
            </form>
        </div>
@endsection