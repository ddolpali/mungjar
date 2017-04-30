@extends('layouts.master')
@section('pageTitle', 'Portfolio')
@section('pageDesc', 'Check out some of the work I\'ve done!')

@php
	$directories = File::directories('img/portfolio');
	shuffle($directories);
@endphp

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="card-panel">
					<div class="gallery_menu">
						<ul id="filter" class="filter-menu">
							<li class="waves-effect waves-light btn disabled" data-filter="*">All</li>
							<li class="waves-effect waves-light btn" data-filter=".commission">Commissions</li>
							<li class="waves-effect waves-light btn" data-filter=".chibi1">Chibi1</li>
							<li class="waves-effect waves-light btn" data-filter=".chibi2">Chibi2</li>
							<li class="waves-effect waves-light btn" data-filter=".other">Other</li>
						</ul>
					</div>
					<div class="gallery_items grid" style="position: relative; height: 722px;">
					@foreach ($directories as $directory)
						@php $files = File::allFiles($directory); shuffle($files); @endphp
						@foreach ($files as $image)
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
