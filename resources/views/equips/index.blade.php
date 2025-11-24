@extends('layouts.app')
@section('title', "Guia d'Equips")

@section('content')
<h1 class="text-3xl font-bold text-rose-800 mb-6">Guia d'Equips</h1>

@if (session('success'))
  <div class="bg-green-100 text-green-700 p-2 mb-4">{{ session('success') }}</div>
@endif

<p class="mb-4">
  <a href="{{ route('equips.create') }}" class="bg-rose-600 text-rose px-3 py-2 rounded">Nou equip</a>
</p>

<table class="w-full border-collapse border border-rose-300">
  <thead class="bg-pink-800">
  <tr>
    <th class="border border-rose-300 p-2">Nom</th>
    <th class="border border-rose-300 p-2">Estadi</th>
    <th class="border border-rose-300 p-2">Títols</th>
  </tr>
  </thead>
  <tbody>
  @foreach($equips as $key => $equip)
    <tr class="hover:bg-pink-800">
      <td class="border border-rose-300 p-2">
        <a href="{{ route('equips.show', $key) }}" class="text-rose-300 hover:underline">{{ $equip['nom'] }}</a>
      </td>
      <td class="border border-rose-300 p-2">{{ $equip['estadi'] }}</td>
      <td class="border border-rose-300 p-2">{{ $equip['titols'] }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection