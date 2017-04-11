@extends('layouts.master')

@section('pageTitle')
	{{ $commission->name }}
@endsection

@section('pageDesc')
	{{ $commission->token }}
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="card-panel">
					<h4>Commission #{{ $commission->id }}</h4>
					<p>Name: {{ $commission->name }}</p>
					<p>PayPal: {{ censor($commission->paypal) }}</p>
					<p>Character Name: {{ $commission->ign }}</p>
					<p>Requested Deadline: {{ $commission->deadline }}</p>
					<p>Commission Type: {{ $commission->type == 'other' ? $commission->other : $commission->type }}</p>
					<p>Commercial Use? {{ $commission->commercial > 0 ? 'Yes' : 'No' }}</p>
					<p>Any Additional Comments:</p>
					<blockquote>{{ $commission->comments }}</blockquote>
				</div>
			</div>
		</div>
	</div>
@endsection
