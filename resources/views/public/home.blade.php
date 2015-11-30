@extends('public.layouts.home')

@section('pageTitle', 'Home')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/triangle.css') }}" />
@endsection

@section('body_class', 'home')

@inject('time', 'Eclipse\Services\Time')

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
			
			@foreach( $packages as $package )

				<div class="col s12 m4">
					<div class="card wow fadeInUp" data-wow-delay="0.{{$package->id}}s">
						<div class="card__container card__container--closed">
							<svg class="card__image" 
								xmlns="http://www.w3.org/2000/svg" 
								xmlns:xlink="http://www.w3.org/1999/xlink" 
								viewBox="0 0 1920 500" 
								preserveAspectRatio="xMidYMid slice"
							>
								<defs>
									<clipPath id="clipPath{{ $package->id }}">
										<!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
										<circle class="clip" cx="960" cy="250" r="992"></circle>
									</clipPath>
								</defs>
								<image clip-path="url(#clipPath{{ $package->id }})" 
										width="1920" 
										height="500" 
										xlink:href="{{ asset('images/card-expand-test-image.jpg') }}"
								></image>
							</svg>
							<div class="card__content">

								<i class="card__btn-close fa fa-times"></i>
							
								<div class="card__caption">
									<h2 class="card__title">{{ $package->name }}</h2>
									<p class="card__subtitle">{{ $package->subtitle }}</p>
								</div>

								<div class="card__copy">
									<div class="col m12 s12">
										<div class="package">
											<h1 class="package__title wow fadeInLeft">{{ $package->name }}</h1>

											<div class="row">
												<div class="col m9 s12 wow fadeInLeft">
												
													<div class="owl-carousel">
														{!! displayAll($package->photos, 'img-rounded') !!}
													</div>

													<div class="package__description">
														<h3>{{ $package->subtitle }}</h3>
														{!! $package->description !!}
													</div>
												</div>

												<div class="col m3 s12 wow fadeInRight">
													<h3 class="package__price">
														{!! convertedAmountWithCurrency($package->adult_price) !!}
													</h3>

													<ul class="collection">
														<li class="collection-item">
															<strong>Departs:</strong> {{ $package->departs }}
														</li>
														<li class="collection-item">
															<strong>Returns:</strong> {{ $package->returns }}
														</li>								
														<li class="collection-item">
															<strong>Duration:</strong> {{ $package->duration }}
														</li>
														<li class="collection-item">
															<strong>Adult:</strong> {!! convertedAmountWithCurrency($package->adult_price) !!}
														</li>
														<li class="collection-item">
															<strong>Child:</strong> {!! convertedAmountWithCurrency($package->child_price) !!}
														</li>
														@if( $package->confirm_availability )
															<li class="collection-item">
																Subject for Availability
															</li>								
														@endif	
													</ul>

													<div class="book-a-package-form">

														<h3 class="book-a-package-form__title">Book this package</h3>

														@include('errors.forms')
														
														@if( $package->confirm_availability )
															<form method="POST" action="{{ route('booking.store') }}">
														@else
															<form method="POST" action="{{ route('cart.store') }}">
														@endif 
														
															{!! csrf_field() !!}

															<input type="hidden" name="package_id" value="{{ $package->id }}" />

															<div class="row">
																<div class="col m12 mb-0">
																	<div class="form-group">
																		<label for="date">Preferred Date:</label>
																		<div class="input-group">
																			<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																			<input type="text" name="date" id="date" class="form-control datepicker" required />
																		</div>
																	</div>
																</div>

																@if( $package->has_time_options )
																	<div class="col m12 mb-0">
																		<div class="form-group">
																			<label for="time">Preferred Time:</label>
																			<select name="time" class="form-control" required>
																				<option value="" disabled selected>Choose your option</option>
																				@foreach($time->get() as $value) 
																					<option value="{{ $value }}">{{ $value }}</option>
																				@endforeach
																			</select>
																		</div>
																	</div>	
																@endif									

																<div class="col m12 s12">
																	<div class="row">
																		<div class="col m6 s6 mb-0">
																			<div class="form-group">
																				<label for="adult">Adult</label>
																				<select name="quantity" id="adult" class="form-control">
																					@foreach( range(1,20) as $count )
																						<option value="{{ $count }}">{{ $count }}</option>
																					@endforeach	
																				</select>

																				<input type="hidden" name="price" value="{{ $package->adult_price }}" />
																			</div>
																		</div>

																		<div class="col m6 s6 mb-0">
																			<div class="form-group">
																				<label for="child">Child</label>
																				<select name="child_quantity" id="child" class="form-control">
																					@foreach( range(0,20) as $count )
																						<option value="{{ $count }}">{{ $count }}</option>
																					@endforeach	
																				</select>
																				<input type="hidden" name="child_price" value="{{ $package->child_price }}" />
																			</div>
																		</div>
																	</div>
																</div>

																<div class="col m12 s12">
																	<div class="form-group">
																		<button type="submit" class="btn btn-large waves-effect waves-light full-width">
																			Book now
																		</button>
																	</div>
																</div>
															</div>
														</form>

													</div>

													<div class="share-package">

														<h6>Share this package</h6>

													</div>
												</div>
											</div>	
										</div><!-- .package -->
									</div>		
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