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
					<strong>Status:</strong>
					@if ($commission->status == 0)
						Submitted, but not approved yet.
					@elseif ($commission->status == 1)
						Submitted &amp; Approved <span class="red-text">(Please pay the sent invoice)</span>
					@elseif ($commission->status == 2)
						Work in Progress (Client has paid)
					@else
						<span class="green-text">Completed</span>
					@endif
					<p><strong>Name:</strong> {{ $commission->name }}</p>
					<p><strong>PayPal:</strong> {{ censor($commission->paypal) }}</p>
					<p><strong>Character Name:</strong> {{ $commission->ign }}</p>
					<p><strong>Requested Deadline:</strong> {{ $commission->deadline }}</p>
					<p><strong>Commission Type:</strong> {{ $commission->type == 'other' ? $commission->other : $commission->type }}</p>
					<p><strong>Commercial Use?</strong> {{ $commission->commercial > 0 ? 'Yes' : 'No' }}</p>
					<p><strong>Any Additional Comments:</strong></p>
					<blockquote>{{ $commission->comments }}</blockquote>
				</div>
			</div>
		</div>
	</div>
@endsection
