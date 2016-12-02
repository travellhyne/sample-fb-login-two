@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Users</div>
                    <div class="panel-body">
                        <link rel="import" href="/elements/user-list.html">
                        <user-list></user-list>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection