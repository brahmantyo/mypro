@extends('master')

@section('content')
<h1>Control Panel</h1>

@foreach($menus as $menu)
  <h2><a href="/page/{{$menu}}">{{ $menu }}</a></h2>
@endforeach


@stop

@section('footer')
Copyright @niclogic
@stop
