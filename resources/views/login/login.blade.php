
@extends('layouts.admin')
@section('content')
<div class="container show-window"  id="showLogin">
    <x-login-component> </x-login-component>
</div>

<div class="container hide-window"  id="showRegister">
    <x-register-user-component> </x-register-user-component>
</div>


@endsection
