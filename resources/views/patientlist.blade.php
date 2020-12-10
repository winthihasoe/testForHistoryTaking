@extends('layouts.pagelayout')
@section('content')
    <div class="container">
        <h2 class="mt-3">Patient List</h2>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Patient Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Region</th>
                    <th scope="col">Start @</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td><a href="#">U Win Maung</a></td>
                    <td>56</td>
                    <td>Mandalay</td>
                    <td>1-12-2020</td>
                    </tr>
                    
                </tbody>
            </table>
    </div>
@endsection