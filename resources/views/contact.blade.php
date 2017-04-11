@extends('layouts.master')
@section('pageTitle', 'Contact Me')
@section('pageDesc', 'Have any questions regarding your order?')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="card-panel">
					<h3>Methods of Contact</h3>
					<p>You can contact me with the following methods</p>
					<h5 id="Discord">Discord</h5>
					<p>If you're looking for a live chat, you can join my Discord to ask me questions.<br /><a href="{{ config('app.discord') }}">{{ config('app.discord') }}</a></p>
					<h5 id="Social-Media">Social Media</h5>
					<p>You may DM me in either of the following platforms:</p>
					<div class="social-content">
                        <a href="https://twitter.com/messages/compose?recipient_id=782049858983034883&text=Hey I have a question regarding my order"><span class="social-group"><i class="fa fa-twitter" aria-hidden="true"></i> mungasaur</span></a>
                        <a href="https://instagram.com/mungasaur"><span class="social-group"><i class="fa fa-instagram" aria-hidden="true"></i> mungasaur</span></a>
                    </div>
					<h5 id="Email">Email</h5>
					<p>Fill out the following form with a valid email, and I'll get back to you as soon as I get it.</p>
					@if (count($errors) > 0)
						<div class="red-text">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
					<p class="grey-text">Fields marked with * are required.</p>
					<br />
					<form action="{{ route('contact') }}" method="post">
						{{ csrf_field() }}
						<div class="input-field">
							<input placeholder="John Doe" name="name" id="name" type="text" class="validate" required>
							<label for="name">Name*</label>
						</div>
						<div class="input-field">
							<input placeholder="john.doe212@gmail.com" name="email" id="name" type="email" class="validate" required>
							<label for="name">Email*</label>
						</div>
						<div class="input-field">
							<input placeholder="{{ route('commissions.show', 'xxx') }}" name="order" id="order" type="text" class="validate">
							<label for="order">Order Page</label>
						</div>
						<div class="input-field col s12">
							<textarea name="body" id="body" class="materialize-textarea" data-length="1000" maxlength="1000"></textarea>
							<label for="body">Body</label>
				        </div>
						<div id="recaptcha">
							{!! app('captcha')->display(); !!}
						</div>
						<div class="space"></div>
						<div class="center">
							<button type="submit" class="btn waves-effect waves-light center">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
