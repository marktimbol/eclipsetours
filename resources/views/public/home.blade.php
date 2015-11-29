@extends('public.layouts.home')

@section('pageTitle', 'Home')

@section('header_styles')
	
	<link rel="stylesheet" href="{{ elixir('css/triangle.css') }}" />
@endsection

@section('body_class', 'home')

@section('content')

	@include('public.partials._home-slideshow')

	<div class="container">
		<div class="row">
			<div class="col s12 m12">
				<div class="white-background">
					<div class="row center-content">
						<div class="col s12 m8">
							{!! getPhoto('home-slide1.jpg', '', '') !!}
						</div>

						<div class="col s12 m4">
							<div class="home__message">
								<h3 class="home__message__title">Lorem ipsum dolor sit amet.</h3>

								<p class="home__message__description">
									Ipsum has been the industry's standard dummy text ever since the 1500s.
								</p>

								<a href="{{ route('packages') }}" class="btn waves-effect waves-light blue">See the latest offers</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row featured_package">
			<div class="col s12 m12">
				<h3 class="featured__package__title">Featured Packages</h3>
			</div>

			<!-- trianglify pattern container -->
			<div class="pattern pattern--hidden"></div>
			
			@foreach( range(1, 12) as $index )

				<div class="col s12 m4">
					<div class="card">
						<div class="card__container card__container--closed">
							<svg class="card__image" 
								xmlns="http://www.w3.org/2000/svg" 
								xmlns:xlink="http://www.w3.org/1999/xlink" 
								viewBox="0 0 1920 500" 
								preserveAspectRatio="xMidYMid slice"
							>
								<defs>
									<clipPath id="clipPath{{ $index }}">
										<!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
										<circle class="clip" cx="960" cy="250" r="992"></circle>
									</clipPath>
								</defs>
								<image clip-path="url(#clipPath{{ $index }})" 
										width="1920" 
										height="500" 
										xlink:href="{{ asset('images/card-expand-test-image.jpg') }}"
								></image>
							</svg>
							<div class="card__content">
								<i class="card__btn-close fa fa-times"></i>
								<div class="card__caption">
									<h2 class="card__title">Sample Package {{ $index }}</h2>
									<p class="card__subtitle">A modern day love story</p>
								</div>
								<div class="card__copy">
									<div class="meta">
										<span class="meta__author">Gerry Sutherland</span>
										<span class="meta__date">06/19/2015</span>
									</div>
									<p>Business model canvas bootstrapping deployment startup. In A/B testing pivot niche market alpha conversion startup down monetization partnership business-to-consumer success for investor mass market business-to-business.</p>
								
								</div>
							</div>
						</div>
					</div>
				</div>

			@endforeach

			<div class="text-center">
				<p>&nbsp;</p>
				<p>
					<a href="{{ route('packages') }}" class="btn waves-effect waves-light">View all Packages</a>
				</p>
			</div>

		</div>
	

{{-- 		<div class="row">
			<div class="col s12 m8">
				<div class="owl-carousel">
					<a href="{{ route('package', 'hot-air-balloon') }}">
						{!! getPhoto('hot-air-balloon.jpg', 'Hot Air Balloon Tour') !!}
					</a>

					<a href="{{ route('package', 'hot-air-balloon') }}">
						{!! getPhoto('hot-air-balloon.jpg', 'Hot Air Balloon Tour') !!}
					</a>
				</div>
			</div>

			<div class="col s12 m4">
				<div class="row">
					<div class="col s12 m12 mb-20">
						<div class="home__package">
							
							<a href="{{ route('package', 'dune-buggy-drive') }}"></a>

							{!! getPhoto('dune-buggy-drive-tour.jpg', 'Dune Buggy Drive Tour') !!}

							<h4 class="home__package__title white">Dune Buggy Drive</h4>

						</div>
					</div>
					<div class="col s12 m12">
						<div class="home__package">
							
							<a href="{{ route('package', 'ferrari-world-theme-park') }}"></a>

							{!! getPhoto('ferrari-world-tour.jpg', 'Ferrari World Tour') !!}

							<h4 class="home__package__title white">Ferrari World</h4>
				
						</div>		
					</div>					
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col s12 m4">
				<div class="home__package">
					
					<a href="{{ route('package', 'desert-safari') }}"></a>

					{!! getPhoto('desert-safari-tour.jpg', 'Desert Safari Tour') !!}

					<h4 class="home__package__title white">Desert Safari</h4>
		
				</div>	
			</div>

			<div class="col s12 m4">
				<div class="home__package">
					
					<a href="{{ route('package', 'burj-khalifa') }}"></a>

					{!! getPhoto('burj-khalifa-tour.jpg', 'Burj Khalifa Tour') !!}

					<h4 class="home__package__title white">Burj Khalifa</h4>
		
				</div>		
			</div>

			<div class="col s12 m4">

				<div class="home__package">
					
					<a href="{{ route('package', 'dhow-dinner-cruise') }}"></a>

					{!! getPhoto('dhow-cruise-tour.jpg', 'Dhow Cruise Tour') !!}

					<h4 class="home__package__title white">Dhow Cruise</h4>
		
				</div>	
			</div>	

			<div class="col s12 m12">
				<p>&nbsp;</p>
				<p class="text-center">
					<a href="{{ route('packages') }}" class="btn waves-effect waves-light">view all packages</a>
				</p>
			</div>					
		</div>	 --}}	
	</div>

@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/home-video.js') }}"></script>
	<script src="{{ elixir('js/triangle.js') }}"></script>
@endsection