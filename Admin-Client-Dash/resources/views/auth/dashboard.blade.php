@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>   
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Postal Code</th>
                        </tr>
                    </thead>
                    @foreach($users as $user)
                    <tbody>
                        <tr>
                            <th scope="row">{{$user['id']}}</th>
                            <td>{{$user['name']}}</td>
                            <td>{{$user['age']}}</td>
                            <td>{{$user['postal_code']}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>    
</div>
    
@endsection