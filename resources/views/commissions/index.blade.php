@extends('layouts.master')
@section('pageTitle', 'Commissions')
@section('pageDesc', 'Current status of commissions')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				@foreach ($commissions as $commission)
					<div class="card-panel">
						<h4 style="margin-bottom: 0">{{ $commission->name }}</h4>
						<small>Order #{{ $commission->id }}</small>
						<p><strong>Type:</strong> {{ $commission->type }}
							<br />
							<strong>Status:</strong>
							@if ($commission->status == 0)
								Submitted, but not approved yet.
							@elseif ($commission->status == 1)
								Submitted &amp; Approved
							@elseif ($commission->status == 2)
								Work in Progress (Client has paid)
							@else
								<span class="green-text">Completed</span>
							@endif
							<br />
							<strong>Comments:</strong> {{ $commission->comments }}
						</p>
					</div>
				@endforeach
				{{ $commissions->links('partials.paginate') }}
			</div>
		</div>
	</div>
@endsection
