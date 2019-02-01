<header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 logo">
				<a href="{{route('home')}}"><img src="{{Voyager::image(setting('site.logo'))}}" alt=""></a>
			</div>
			<div class="col-md-10 nav-wrapper">

				<!-- Nav Start -->
				<div class="nav">
				{!!	 Helper::menu()  !!}
				</div>
				<!-- Nav End -->

			</div>
		</div>
	</div>
</header>