@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ Auth::user() -> name }} <span class="badge badge-success">Active Now</span>
                    <b class="float-right">  Total users <span class="badge badge-danger"> {{ count( $users ) }} </span> </b>
                </div>

                <div class="card-body">

                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Si</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created At</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach( $users as $key => $user )
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $user -> name }}</td>
                            <td>{{ $user -> email }}</td>
                            <!-- Eloquent ORM Read Users Data -->
                            <td>{{ $user -> created_at -> diffForHumans() }}</td>
                            </tr>
                        @endforeach



                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
