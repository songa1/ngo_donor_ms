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

    <div id="addBeneficiary" class="modal">
        <!-- Modal content -->
            <form class="modal-content" method="POST">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Add a new Beneficiary</h2>
                </div>
                <div class="modal-body">
                    <div class="input-div">
                        <label for="b-name">Beneficiary Name</label>
                        <input type="text" name="b-name" id="b-name" placeholder="Name" required>
                    </div>
                    <div class="input-div">
                        <label for="b-email">Beneficiary Email</label>
                        <input type="email" name="b-email" id="b-email" placeholder="Email" required>
                    </div>
                    <div class="input-div">
                        <label for="b-phone">Beneficiary Phone Number</label>
                        <input type="tel" name="b-phone" id="b-phone" placeholder="Phone Number" required>
                    </div>
                    <div class="input-div">
                        <label for="b-occupation">Beneficiary Occupation</label>
                        <input type="text" name="b-occupation" id="b-occupation" placeholder="Occupation" required>
                    </div>
                    <div class="input-div">
                        <label for="e-dob">Beneficiary Date Of Birth</label>
                        <input type="date" name="b-dob" id="b-dob" placeholder="Date Of Birth" required>
                    </div>
                </div>
                <div class="modal-footer button-div">
                    <div></div>
                    <input type="submit" value="Add Beneficiary" name="add-beneficiary">
                </div>
            </form>
        </div>
@endsection     