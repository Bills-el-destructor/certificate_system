@extends('layouts.app')
@section('content')

<table class="table-auto w-full">
  <thead class="bg-gray-900 text-gray-400">
    <tr class="text-left">
      <th>Id</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>DNI</th>
      <th>Código CIP</th>
      <th>Acción</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
      <tr class="hover:bg-teal-300">
        <td> {{ $user->id }} </td>
        <td> {{ $user->name }} </td>
        <td> {{ $user->email }} </td>
        <td> {{ $user->dni }} </td>
        <td> {{ $user->cip }} </td>
        <td> Editar o eliminar </td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection