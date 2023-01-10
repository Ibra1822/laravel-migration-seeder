@extends('layout.main')

@section('content')
<h1>Partenze Treni</h1>

<div class="cont-card">
@foreach ($trains as $train)
    <div class="card">
      <div>
        <h2> Treno: {{$train->azienda}}</h2>
        <h2>Parte da: {{$train->stazione_partenza}}</h2>
        <h2>Arriva a: {{$train->stazione_arrivo}}</h2>
        <h2>Parte alle: {{$train->orario_partenza}}</h2>
        <h2>Arriva alle: {{$train->orario_arrivo}}</h2>
       </div>
    </div>
    @endforeach

</div>

@endsection
