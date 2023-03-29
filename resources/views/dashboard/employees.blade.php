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
                    <input type="submit" name="add-new" id="add-new" value="+">
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
@endsection