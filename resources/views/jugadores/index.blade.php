@extends('layouts.app')
@section('title', "Guia d'jugadores")

@section('content')
<h1 class="text-3xl font-bold text-pink-500 mb-6">Guia d'jugadores</h1>

@if (session('success'))
  <div class="bg-green-100 text-green-700 p-2 mb-4">{{ session('success') }}</div>
@endif

<p class="mb-4">
  <a href="{{ route('jugadores.create') }}" class="bg-pink-500 text-white px-3 py-2 rounded">Nou jugadora</a>
</p>

<table class="w-full border-collapse border border-pink-100">
  <thead class="bg-pink-500">
  <tr>
    <th class="border border-pink-500 p-2">Nom</th>
    <th class="border border-pink-500 p-2">Equip</th>
        <th class="border border-pink-500 p-2">Posicio</th>
  </tr>
  </thead>
  <tbody>
  @foreach($jugadores as $key => $jugadora)
    <tr class="hover:bg-pink-800">
      <td class="border border-pink-500 p-2">
        <a href="{{ route('jugadores.show', $key) }}" class="text-blue-900 hover:underline">{{ $jugadora['nom'] }}</a>
      </td>
      <td class="border border-pink-500 p-2">{{ $jugadora['equip'] }}</td>
      <td class="border border-pink-500 p-2">{{ $jugadora['posicio'] }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection