@extends('layouts.app')
@section('title', "Guia d'Estadis")

@section('content')
<h1 class="text-3xl font-bold text-green-500 mb-6">Guia d'estadis</h1>

@if (session('success'))
  <div class="bg-green-100 text-green-700 p-2 mb-4">{{ session('success') }}</div>
@endif

<p class="mb-4">
  <a href="{{ route('estadis.create') }}" class="bg-green-500 text-white px-3 py-2 rounded">Nou estadi</a>
</p>

<table class="w-full border-collapse border border-gray-300">
  <thead class="bg-green-500">
  <tr>
    <th class="border border-green-500 p-2">Nom</th>
    <th class="border border-green-500 p-2">Ciutat</th>
    <th class="border border-green-500 p-2">Capacitat</th>
    <th class="border border-green-500 p-2">Equip</th>
  </tr>
  </thead>
  <tbody>
  @foreach($estadis as $key => $estadi)
    <tr class="hover:bg-green-800">
      <td class="border border-green-500 p-2">
        <a href="{{ route('estadis.show', $key) }}" class="text-purple-500 hover:underline">{{ $estadi['nom'] }}</a>
      </td>
     
      <td class="border border-green-500 p-2">{{ $estadi['ciutat'] }}</td>
      <td class="border border-green-500 p-2">{{ $estadi['capacitat'] }}</td>
      <td class="border border-green-500 p-2">{{ $estadi['equip'] }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection