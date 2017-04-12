@extends('layouts.master')
@section('pageTitle', 'Portfolio')
@section('pageDesc', 'Check out some of the work I\'ve done!')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="card-panel">
					<div class="gallery_menu">
						<ul id="filter" class="filter-menu">
							<li class="waves-effect waves-light btn disabled" data-filter="*">All
								<div class="ripple-container"></div>
							</li>
							<li class="waves-effect waves-light btn" data-filter=".chibi1">Chibi1
								<div class="ripple-container"></div>
							</li>
							<li class="waves-effect waves-light btn" data-filter=".chibi2">Chibi2</li>
							<li class="waves-effect waves-light btn" data-filter=".other">Other</li>
						</ul>
					</div>
					<div class="gallery_items grid" style="position: relative; height: 722px;">
					@foreach (File::directories('img/portfolio') as $directory)
						@foreach (File::allFiles($directory) as $image)
							<div class="grid-item {{ substr(dirname($image), 14) }}@if(endsWith($directory, "chibi1") || endsWith($directory, "chibi2") || endsWith($directory, "panels")) commission @else other @endif">
		                        <div class="card hoverable">
		                            <div class="card-image waves-effect waves-block waves-light">
		                                <img class="activator" src="{{ $image }}">
		                            </div>
		                        </div>
		                    </div>
						@endforeach
					@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection
