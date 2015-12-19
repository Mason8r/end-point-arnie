@extends('layouts.default')
@section('content')
	@foreach($web_requests as $request) 
	<div class="">
		<div class="request">
			<div class="request__server-details">
				<?php $server = unserialize($request->server); ?>					
				<h4>Payload Recieved: {{date('l d F g.ia', strtotime($server['REQUEST_TIME']))}}</h4>
				<ul>
					<li><strong>Content Type:</strong> {{{$server['CONTENT_TYPE']}}}</li>
					<li><strong>Content Length:</strong> {{{$server['CONTENT_LENGTH']}}}</li>
					<li><strong>Remote Address:</strong> {{{$server['REMOTE_ADDR']}}}:{{{$server['REMOTE_PORT']}}}</li>
					<li><strong>User Agent:</strong> {{{$server['HTTP_USER_AGENT']}}}</li>
				</ul>
				<h5>Body:</h5>
				{{{var_dump(unserialize($request->payload))}}}
			</div> 
		</div>
	@endforeach
@stop