@inject('categories', 'Eclipse\Repositories\Category\CategoryRepositoryInterface')

<div class="fixed-action-btn mobile-menu">
	<button id="trigger-overlay" type="button" class="btn-floating btn-medium transparent">
		<i class="fa fa-bars"></i>
	</a>
</div>	

<header>
	<div class="row no-margin-bottom">
		<div class="navbar-fixed">
			<nav>
				<ul id="packages-dropdown" class="dropdown-content">
					@foreach( $categories->all() as $category )
						<li><a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a></li>
					@endforeach
				</ul>				
				<div class="nav-wrapper">
					
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

	@if( $showLogo )

		<div id="topLeftCorner" 
			style="background-image: url({{ asset('images/top-left-corner.png') }});"
			class="wow fadeInLeft" data-wow-delay="0.2s"
		>
		</div>		

		<div class="logo wow fadeInLeft" data-wow-delay="0.6s">
			<a href="{{ route('home') }}">
				{!! getPhoto('logo.png', 'Eclipse Tourism', '') !!}
			</a>
		</div>
	@endif	


</header>