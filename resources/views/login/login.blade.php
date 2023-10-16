
@extends('layouts.admin')
@section('content')
<div class="container" style="display: none;">
    <x-login-component> </x-login-component>
</div>

<div class="container" style="display: block;">
    <x-register-user-component> </x-register-user-component>
</div>

@endsection
