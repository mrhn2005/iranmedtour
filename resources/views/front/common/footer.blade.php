		<section class="footer-social">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="item">
							@include('front.common.social-networks')
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer Social End -->

		
		<!-- Footer Main Start -->
		<section class="footer-main">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-3 col-lg-3 footer-col">
						<h3>About HealthCube</h3>
						<p>
							{{setting(App::getLocale().'.about')}}
						</p>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3 footer-col">
						<h3>Latest News</h3>
						@foreach($latest_posts as $post)
						<div class="news-item">
							<div class="news-title"><a href="{{route('blog.show',[$post->id,$post->getTranslatedAttribute('slug')])}}"> {{$post->getTranslatedAttribute('excerpt')}}</a></div>
							<div class="news-date"><a href="{{route('blog.show',[$post->id,$post->getTranslatedAttribute('slug')])}}">{{$post->created_at->diffForHumans()}}</a></div>
						</div>
						@endforeach
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3 footer-col">
						<h3>Important Links</h3>
						<div class="row">
						    @foreach ($links->chunk(4) as $chunk)
							<div class="col-md-6">
								<ul>
								    @foreach($chunk as $link)
									<li><a href="{{$link->getTranslatedAttribute('link')}}">{{$link->getTranslatedAttribute('title')}}</a></li>
									@endforeach
								</ul>
							</div>
							@endforeach
							
						</div>						
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3 footer-col">
						<h3>Contact Us</h3>
						<div class="contact-item">
							<div class="icon"><i class="fa fa-map-marker"></i></div>
							<div class="text">{{setting(App::getLocale().'.address')}}</div>
						</div>
						<div class="contact-item">
							<div class="icon"><i class="fa fa-phone"></i></div>
							<div class="text">{{setting('site.phone')}}</div>
						</div>
						<!--<div class="contact-item">-->
						<!--	<div class="icon"><i class="fa fa-fax"></i></div>-->
						<!--	<div class="text"></div>-->
						<!--</div>-->
						<div class="contact-item">
							<div class="icon"><i class="fa fa-envelope-o"></i></div>
							<div class="text">{{setting('site.email')}}</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer Main End -->

		
		<!-- Footer Bottom Start -->
		<section class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-6 copyright">
						Copyright &copy; 2019, MedTourIran. All Rights Reserved.
					</div>
					<div class="col-md-6 footer-menu">
						<ul>
							<li><a href="#">Terms of Service</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>