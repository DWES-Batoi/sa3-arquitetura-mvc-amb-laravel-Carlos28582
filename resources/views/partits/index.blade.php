@extends('layouts.app')
@section('title', "Guia d'partits")

@section('content')
<h1 class="text-3xl font-bold text-orange-600 mb-6">Guia d'partits</h1>

@if (session('success'))
  <div class="bg-green-100 text-green-700 p-2 mb-4">{{ session('success') }}</div>
@endif

<p class="mb-4">
  <a href="{{ route('partits.create') }}" class="bg-orange-600 text-white px-3 py-2 rounded">Nou partit</a>
</p>

<table class="w-full border-collapse border border-orange-600">
  <thead class="bg-orange-600">
  <tr>
    <th class="border border-orange-600 p-2">Local</th>
    <th class="border border-orange-600 p-2">Visitant</th>
    <th class="border border-orange-600 p-2">Fecha</th>
    <th class="border border-orange-600 p-2">Resultat</th>
  </tr>
  </thead>
  <tbody>
  @foreach($partits as $key => $partit)
    <tr class="hover:bg-orange-800">
      <td class="border border-orange-600 p-2">
        <a href="{{ route('partits.show', $key) }}" class="text-orange-600 hover:underline">{{ $partit['local'] }}</a>
      </td>
     
      <td class="border border-orange-600 p-2">{{ $partit['visitant'] }}</td>
      <td class="border border-orange-600 p-2">{{ $partit['data'] }}</td>
      <td class="border border-orange-600 p-2">{{ $partit['resultat'] }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection