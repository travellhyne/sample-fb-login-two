@extends('layouts.app')

@section('content')
    @if($errors->has('email') || $errors->has('password'))
        <script>
            var authError = true;
        </script>
    @endif
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <link rel="import" href="/elements/login-form.html">
                    <login-form></login-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
