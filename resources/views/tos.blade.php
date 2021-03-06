@extends('layouts.master')
@section('pageTitle', 'Terms of Service')
@section('pageDesc', 'By ordering, you agree to these listed terms.')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="card-panel">
					<h5 class="center">Commission Status:
						@if (config('app.commissions'))
							<span class="green-text">Open</span>
						@else
							<span class="red-text">Closed</span>
						@endif
					</h5>
					<h3 id="license">Licensing (Regular License)</h3>
					<ul class="browser-default">
						<li>You are <strong>not</strong> able to repost my work to other websites (Twitter, Facebook, DeviantART, etc) without proper credit and my consent.</li>
						<li>You must post credits where it is publicly displayed using my username with a link to my website.</li>
						<li>I have all the rights to the artwork, so I can post it where I want and do whatever I want with it.</li>
						<li>You may <strong>not</strong> use my artwork for commercial use without a commercial license.</li>
					</ul>
					<h3>Licensing (Commercial License)</h3>
					<ul class="browser-default">
						<li>You will be charged extra for buying a commercial license.</li>
						<li>You are able to use my work for any purpose, including paid-services, without any royalties.</li>
						<li>You must post credits where it is publicly displayed using my username with a link to my website.</li>
					</ul>
					<h3>Liability</h3>
					<ul class="browser-default">
						<li>I am <strong>not</strong> responsible for keeping the artwork that I provide for you.</li>
						<li>You are responsible for what you do with the artwork provided</li>
						<li>You are responsible for providing feedback to the work before the final version is sent to you</li>
						<li>I am <strong>not</strong> responsible for making modifications to the work after the job is completed.</li>
					</ul>
					<h3>Modifications, Replacements, etc.</h3>
					<p>The following apply AFTER the final artpiece has been given to you.</p>
					<ul class="browser-default">
						<li>Modifications and replacements can be requested to be made, but a fee will be charged if I accept them.</li>
					</ul>
					<h3>Termination</h3>
					<ul class="browser-default">
						<li>If the commission has already been made, and the art piece is in progress, you may <strong>NOT</strong> cancel the commission.</li>
						<li>Canceling the commission will require a fee of half the original price for the artwork.</li>
					</ul>
					<h3>Requests</h3>
					I will <strong>NOT</strong> accept the following:
					<ul class="browser-default">
						<li>NSFW</li>
						<li>Pornography of any kind</li>
						<li>Nudity</li>
						<li>Mecha</li>
						<li>Muscles</li>
						<li>Furries</li>
						<li>Elderly</li>
						<li>Illegal content</li>
					</ul>
					<p>I will look over other requests before accepting your commission.</p>
					<h3>General</h3>
					<ul class="browser-default">
						<li>You may <strong>not</strong> rush me with your commission request.</li>
						<li>If you provide me with a short deadline, you are subject to be charged extra.</li>
						<li>I can deny any commission request that makes me feel uncomfortable.</li>
						<li>By commissioning me, you are agreeing to my terms of serivce.</li>
					</ul>
					<p class="center" id="last-updated"></p>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			var date = 'This page was last modified: {{ date("d F Y h:i:s", File::lastModified('../resources/views/tos.blade.php')) }}'
			document.getElementById("last-updated").innerHTML = date;
		});
	</script>
@endsection
