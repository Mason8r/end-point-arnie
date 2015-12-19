@extends('layouts.default')
@section('content')
	<div class="col-md-6">
		<h3>Inspect webhook payloads</h3>
		<a href="{{{url('/'.uniqid('', true).'?inspect=true')}}}" class="btn btn-block btn-large btn-success">Create personalised endpoint</a>
	</div>
@stop