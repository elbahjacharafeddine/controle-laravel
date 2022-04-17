@extends('layouts.master')
@section('menu')
@extends('sidebar.dashboard')
@endsection
@section('content')
<div class="container container-form ml-5" style="margin-left: 300px; margin-top:100px;">
    <legend>Dossiers Scientifiques</legend>
    <table class="table"  >
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">nom</th>
        @if (Auth::user()->role_name=='Admin')
        <th scope="col">nom_prof</th>
        @endif
        <th scope="col">etat_dossier</th>
        @if (Auth::user()->role_name=='Admin')
        <th scope="col">modifier</th>
        @endif
        </tr>
    </thead>
        <tbody>
            @foreach ($data as $key => $item)
            <tr>
            <th>{{$item->id}}</th>
            <th>{{$item->nom}}</th>
            @if (Auth::user()->role_name=='Admin')
            <th>{{$item->nom_prof}}</th>
            @endif
            <th>{{$item->etat_dossier}}</th>
            @if (Auth::user()->role_name=='Admin')
            <td class="text-center">
                <a href="#">
                    <span class="badge bg-info"><i class="bi bi-check"></i></span>
                </a>
                <a href="#">
                    <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                </a>  
                <a href="#" onclick="return confirm('Are you sure to want to delete it?')">
                    <span class="badge bg-danger"><i class="bi bi-trash"></i></span>
                </a>
            </td>
            @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection