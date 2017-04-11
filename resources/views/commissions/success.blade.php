@extends('layouts.master')
@section('pageTitle', 'Successful!')
@section('pageDesc', 'Save the below link just in case.')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="card-panel">
					<h4>Hey, you made it!</h4>
					<p> Now just wait for mungjar to review your request and email you back. You should also <a href="{{ config('app.discord') }}">check out the Discord</a> and message him.</p>
					<br><br>
					<h5>Your Unique Commission URL</h5>
					<p>Don't lose this! You might need it :)</p>
					<div class="blue-text center">
						<h3><a href="{{ route('commissions.show', $token) }}">{{ route('commissions.show', $token) }}</a></h3>
					</div>
					<br><br>
					<p class="center">Have a great day!</p>
				</div>
			</div>
		</div>
	</div>
@endsection
