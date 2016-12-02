@extends('layouts.app')

@section('content')
@if($errors->has('name') || $errors->has('email') || $errors->has('password'))
    <script>
        var registerError = true;
    </script>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <link rel="import" href="/elements/register-form.html">
                    <register-form></register-form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
