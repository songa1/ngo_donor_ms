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
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Donor Name</th>
                        <th>Donor Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td>1</td>
                        <td>Open Society</td>
                        <td>open@society.com</td>
                        <td>
                            <form class="button-div
                            " method="POST">
                                <input type="submit" value="Edit">
                                <input type="submit" value="Delete" name="delete_donor">
                            </form>
                        </td>
                    </tr>
                            
                </tbody>
            </table>
        </div>
    </div>
@endsection