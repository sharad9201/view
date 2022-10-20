@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <a href="{{ route('guestlogin.name') }}" class=" btn btn-primary">Create a Guest User </a>
    </div>
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>

            </div>
        </div>
        <div>
            <div class="card ">
                <div class="card-body justify-content-center">
                    <table class="table">
                        <tr>
                            <th>Registered user</th>
                            <th>Their email</th>

                        </tr>
                        @foreach ($guests as $guest)
                        <tr>
                            <td>{{$guest['name']}}</td>
                            <td>{{$guest['email']}}</td>

                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection