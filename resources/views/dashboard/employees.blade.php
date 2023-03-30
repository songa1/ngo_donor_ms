@extends('layouts.dashboard')

@section('dashboard')
    <div class="right">
        <div class="top-action">
            <h2>Employees</h2>
            <div class="new-search">
                <div class="input-search">
                    <input type="text" placeholder="Search...">
                </div>
                <div class="button-div">
                    <input type="submit" name="add-new" id="add-new" value="+" data- 
            toggle="modal" data-target="#addUser">
                </div>
            </div>
        </div>
        <div class="data-table">
            @if(count($employees) > 0)
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Employee Name</th>
                        <th>Employee Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @foreach($employees as $employee)
                <tbody>
                    <tr>
                        <td>{{$employee->employee_id}}</td>
                        <td>{{$employee->employee_name}}</td>
                        <td>{{$employee->employee_email}}</td>
                        <td>
                            <form class="button-div" method="POST">
                                <input type="submit" value="Edit">
                                <input type="submit" value="Delete" name="delete_user">
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            @else
            <p>No Employee registered currently!</p>
            @endif
        </div>
    </div>
    <div id="addUser" class="modal">
    <!-- Modal content -->
        <form class="modal-content" method="POST">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Add a new Employeee</h2>
            </div>
            <div class="modal-body">
                <div class="input-div">
                    <label for="e-name">Employee Name</label>
                    <input type="text" name="e-name" id="e-name" placeholder="Name" required>
                </div>
                <div class="input-div">
                    <label for="-e-email">Employee Email</label>
                    <input type="email" name="e-email" id="e-email" placeholder="Email" required>
                </div>
                <div class="input-div">
                    <label for="e-phone">Employee Phone Number</label>
                    <input type="tel" name="e-phone" id="e-phone" placeholder="Phone Number" required>
                </div>
                <div class="input-div">
                    <label for="e-dob">Employee Date Of Birth</label>
                    <input type="date" name="e-dob" id="e-dob" placeholder="Date Of Birth" required>
                </div>
            </div>
            <div class="modal-footer button-div">
                <div></div>
                <input type="submit" value="Add Employee" name="add-employee">
            </div>
        </form>
    </div>
@endsection