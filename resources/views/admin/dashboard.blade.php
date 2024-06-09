@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bienvenido, {{ $user->name }} (Administrador)</h1>
    <a href="{{ route('users.index') }}" class="btn btn-primary">Gestionar Usuarios</a>
    <a href="{{ route('roles.index') }}" class="btn btn-primary">Gestionar Roles</a>
    <a href="{{ route('permissions.index') }}" class="btn btn-primary">Gestionar Permisos</a>
</div>
@endsection