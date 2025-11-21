@extends('layouts.app')
@section('title', "Detall d'jugadora")

@section('content')
<x-jugadora :nom="$jugadora['nom']" :equip="$jugadora['equip']" :posicio="$jugadora['posicio']" />
@endsection