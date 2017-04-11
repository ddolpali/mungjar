@extends('layouts.master')
@section('pageTitle', 'Hire Mungjar')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="card-panel">
					<h3>STOP! Before Proceeding...</h3>
					<p>Please read my <a href="{{ route('tos') }}">Terms of Service.</a></p>
					<p>Note that you will be contacted through your PayPal email, so please make sure that you provide a valid email.</p>
					<p class="grey-text">Fields marked with * are required.</p>
					<br />
					<form action="{{ route('commissions.store') }}" method="post">
						{{ csrf_field() }}
		                <div class="input-field">
		                    <input placeholder="John Doe" name="name" id="name" type="text" class="validate" required>
		                    <label for="name">Name*</label>
		                </div>
		                <div class="input-field">
		                    <input placeholder="john.doe212@gmail.com" name="paypal" id="email" type="email" class="validate" required>
		                    <label for="email">PayPal Email*</label>
		                </div>
		                <div class="input-field">
		                    <input placeholder="xXNinjaPaladinWarriorXx" name="ign" id="ign" type="text" class="validate">
		                    <label for="ign">Character Name</label>
		                </div>
						<div class="input-field">
							<input name="deadline" type="date" class="datepicker" id="date">
							<label for="date">Do you have a deadline?</label>
						</div>
		                <p>Commission Type*</p>
		               	<p>
			              	<input name="type" type="radio" value="chibi" id="chibi" checked />
			                <label for="chibi">Chibi</label>
						</p>
						<p>
							<input name="type" type="radio" value="panel" id="panel" />
							<label for="panel">Panel</label>
						</p>
						<p>
							<input name="type" type="radio" value="other" id="other" />
							<label for="other">Other, specify below.</label>
						</p>
		                <br />
		                <div class="input-field">
		                    <input placeholder="Don't fill out if you have not selected Other." name="other" id="other" type="text" class="validate">
		                    <label for="other">Other type:</label>
		                </div>
						<p>Are you going to be using the work for commercial use? <a href="{{ route('faq') }}#commercial-use">(Click here to make sure)</a>*</p>
		               	<p>
			              	<input name="commercial" type="radio" value="1" id="Yes" />
			                <label for="Yes">Yes</label>
						</p>
						<p>
							<input name="commercial" type="radio" value="0" id="No" checked />
							<label for="No">No</label>
						</p>
						<div class="input-field col s12">
							<textarea name="comments" id="textarea1" class="materialize-textarea" data-length="1000" maxlength="1000"></textarea>
							<label for="textarea1">Additional Comments* (Poses, Important Features, etc. If you provide a reference, it must be a link to a full body or color reference. No text descriptions are accepted).</label>
				        </div>
						<p>
					      <input name="tos" type="checkbox" class="filled-in" id="filled-in-box" required />
					      <label for="filled-in-box">I have made sure that I have read the <a href="{{ route('tos') }}">Terms of Service</a> and accept them.*</label>
					    </p>
						<br />
						<div id="recaptcha">
							{!! app('captcha')->display(); !!}
						</div>
						<br />
						<div class="center">
							<button type="submit" class="btn waves-effect waves-light center">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
