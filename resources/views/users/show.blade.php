@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center text-success">{{ $users[0]->name }}</h3>
                    <br /><hr />
                    <h4>Display Comments</h4>
                    <br />
                    @include('users.commentsDisplay', ['users' => $users])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection