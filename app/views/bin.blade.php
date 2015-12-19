@extends('layouts.default')
@section('content')
	<div class="col-md-8">
		<p>Endpoint: <a href="{{url('/'.$name)}}" target="_blank">{{url('/'.$name)}}</a></p>
	</div>
	@foreach($web_requests as $request)
	<div class="col-md-12">
		<div class="request">
			<div class="request__server-details">
				<?php $server = unserialize($request->server); ?>					
				<h4>Payload Recieved: {{date('l d F g.ia', strtotime($request->created_at))}}</h4>
				<ul>
					<li><strong>Content Type:</strong> {{{$server['CONTENT_TYPE']}}}</li>
					<li><strong>Content Length:</strong> {{{$server['CONTENT_LENGTH']}}}</li>
					<li><strong>Remote Address:</strong> {{{$server['REMOTE_ADDR']}}}:{{{$server['REMOTE_PORT']}}}</li>
					<li><strong>User Agent:</strong> {{{$server['HTTP_USER_AGENT']}}}</li>
				</ul>
				<h5>Body:</h5>
				<pre>{{{var_dump(unserialize($request->payload))}}}</pre>
			</div> 
		</div>
	</div>
	@endforeach
@stop