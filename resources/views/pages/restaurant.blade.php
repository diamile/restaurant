@extends('layouts.app')

@section('content')

<h1 style="text-align:center;font-weight:bold;">{{$restaurant}}</h1><br>
 <table class="table table-striped">
    <thead>
      <tr style="font-weight:bold;font-size:16px">
        <td>Jours</td>
        <td>Horaires</td>
        <td>statut</td>
      </tr>
    </thead>
    <tbody>
    {{--creation d'une boucle foreach afin de recuperer toutes mes données--}}
    @foreach($horaires as $horaire)
      <tr>
           {{--recuperation des jours --}}
        <td>{{$horaire->day->name}}</td>
        <td>

             {{--recuperations des horaires--}}
            @if($horaire->restart_time=="" AND $horaire->reend_time=="")
             {{$horaire->start_time}} - {{$horaire->end_time}}
             @else
            {{$horaire->start_time}} - {{$horaire->end_time}} , {{$horaire->restart_time}} - {{$horaire->reend_time}}
            @endif
        </td>
        
        {{--recuperations du statut ouvert ou fermé--}}
        <td>{{$horaire->state}}</td>
      </tr>
      @endforeach

    </tbody>
  </table>  

 




@endsection