@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bienvenido, {{ $user->name }}</h1>
    <div class="profile-info">
        <img src="{{ $user->profile_photo }}" alt="Foto de perfil">
        <p>Email: {{ $user->email }}</p>
        <p>Estado: {{ $user->is_active ? 'Activo' : 'Inactivo' }}</p>
    </div>
    <h2>Registros de Ingreso</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Fecha de Ingreso</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user->logins as $login)
                <tr>
                    <td>{{ $login->login_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection