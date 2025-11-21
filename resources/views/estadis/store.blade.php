@extends('layouts.app')
@section('title', "Detall d'estadi")

@section('content')
<x-estadi :nom="$estadi['nom']" :ciutat="$estadi['ciutat']" :capacitat="$estadi['capacitat']" :equip="$estadi['equip']"/>
@endsection