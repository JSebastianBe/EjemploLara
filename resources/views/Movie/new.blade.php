@extends('app')
@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-primary">
          <div class="panel-heading">Agregar película</div>
          <div class="panel-body">        
             @include('movie.partials.messages')
            {!! Form::open(['route' => 'movie.store', 'method' => 'post', 'novalidate']) !!}
              @include('Movie.partials.fiels')
              <div class="form-group">
                {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
  </div>
</div>
@endsection