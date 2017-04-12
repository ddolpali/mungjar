@extends('layouts.master')
@section('pageTitle', 'My Packages')
@section('pageDesc', 'Here\'s what is usually ordered. (Click and drag)')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="card-panel">
					<section id="chibi1" class="center">
						<h3>Chibi Style &num;1</h3>
						<div class="carousel">
							@foreach (File::allFiles('img/portfolio/chibi1') as $chibi)
								<a class="carousel-item" href=""><img src="{{ $chibi }}"></a>
							@endforeach
						</div>
						<ul>
							<li>$15</li>
							<li>Size around 600x800</li>
							<li>Simple Coloring</li>
							<li>Transparent background</li>
							<li>Only offering <strong>ONE</strong> character per commission.</li>
							<li>Examples are downscaled</li>
						</ul>
					</section>
					<section id="chibi2" class="center">
						<h3>Chibi Style &num;2</h3>
						<div class="carousel">
							@foreach (File::allFiles('img/portfolio/chibi2') as $chibi)
								<a class="carousel-item" href=""><img src="{{ $chibi }}"></a>
							@endforeach
						</div>
						<ul>
							<li>$15</li>
							<li>Size around 600x800</li>
							<li>Very Simple Shading</li>
							<li>Transparent background</li>
							<li>Only offering <strong>ONE</strong> character per commission.</li>
							<li>Examples are downscaled</li>
						</ul>
					</section>
					<section id="panels" class="center">
						<h3>Chibi Style &num;2</h3>
						<div class="carousel" style="margin-top: 5%;height: 200px;">
							@foreach (File::allFiles('img/portfolio/panels') as $panel)
								<a class="carousel-item" href=""><img src="{{ $panel }}"></a>
							@endforeach
						</div>
						<ul>
							<li>$5 <strong>EACH</strong></li>
							<li>Size at 320x100</li>
							<li>Examples are downscaled</li>
						</ul>
						<p><strong>NOTE:</strong> The examples displayed belong to <a href="http://emperpep.deviantart.com/">emperpep</a></p>
					</section>
				</div>
			</div>
		</div>
	</div>
@endsection
