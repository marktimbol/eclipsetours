@inject('categories', 'Eclipse\Repositories\Category\CategoryRepositoryInterface')

<header class="blue darken-1">
	<div class="row no-margin-bottom">
			<div class="navbar-fixed">
				<nav class="blue darken-1">
					<!-- Dropdown Structure -->
					<ul id="packages-dropdown" class="dropdown-content">
						@foreach( $categories->all() as $category )
							<li><a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a></li>
						@endforeach
					</ul>				
					<div class="nav-wrapper">
						<a href="{{ route('home') }}" class="brand-logo col m3">
							{{-- <img src="{{ asset('images/logo.png') }}" alt="Eclipse Tourism" title="Eclipse Tourism" class="responsive-img" /> --}}
							Eclipse Tourism
						</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
						
						<ul id="nav-mobile" class="right hide-on-med-and-down">
							 <li><a class="dropdown-button" href="{{ route('packages') }}" data-activates="packages-dropdown">Packages <i class="material-icons right">arrow_drop_down</i></a></li>
							<li><a href="{{ route('deals') }}">Deals</a></li>
							<li><a href="{{ route('tourist-information') }}">Tourist Info</a></li>
							<li><a href="{{ route('corporate') }}">Corporate</a></li>
							<li><a href="{{ route('about') }}">About Us</a></li>
							<li><a href="{{ route('contact') }}">Contact Us</a></li>
							<li class="search-icon">
								<a href="{{ route('cart.index') }}">
									<i class="material-icons left">shopping_cart</i>
									@if( Cart::count(false) > 0 )
										<span class="badge">{{ Cart::count(false) }}</span>
									@endif
								</a>
							</li>
						</ul>

						<ul class="side-nav" id="mobile-demo">
							<li><a href="{{ route('packages') }}">Packages</a></li>
							<li><a href="#">Deals</a></li>
							<li><a href="{{ route('tourist-information') }}">Tourist Info</a></li>
							<li><a href="{{ route('corporate') }}">Corporate</a></li>
							<li><a href="{{ route('about') }}">About Us</a></li>
							<li><a href="{{ route('contact') }}">Contact Us</a></li>
						</ul>							
					</div>
				</nav>
			</div>
	
	</div>
	
</header>