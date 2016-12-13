<div id="myCaurosel" class="carousel slide">
	<ol class="carousel-indicators">
		<li data-target="#myCaurosel" data-slide-to="0" class="active"></li>
		<li data-target="#myCaurosel" data-slide-to="1"></li>
		<li data-target="#myCaurosel" data-slide-to="2"></li>
		<li data-target="#myCaurosel" data-slide-to="3"></li>
		<li data-target="#myCaurosel" data-slide-to="4"></li>
		<li data-target="#myCaurosel" data-slide-to="5"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item active">
			<img src="{{asset('slide/movie.jpg')}}" alt="Movie" class="img-responsive">
			<div class="carousel-caption"><h2>Movie Reviews</h2></div>
		</div>
		<div class="item">
			<img src="{{asset('slide/music.jpg')}}" alt="Movie" class="img-responsive">
			<div class="carousel-caption"><h2>Music</h2></div>
		</div>
		<div class="item">
			<img src="{{asset('slide/cs.jpg')}}" alt="Movie" class="img-responsive">
			<div class="carousel-caption"><h2>Computer Science</h2></div>
		</div>
		<div class="item">
			<img src="{{asset('slide/phy.jpg')}}" alt="Movie" class="img-responsive">
			<div class="carousel-caption"><h2>Physics</h2></div>
		</div>
		<div class="item">
			<img src="{{asset('slide/lit.jpg')}}" alt="Movie" class="img-responsive">
			<div class="carousel-caption"><h2>Literature</h2></div>
		</div>
		<div class="item">
			<img src="{{asset('slide/astro.jpg')}}" alt="Movie" class="img-responsive">
			<div class="carousel-caption"><h2>Astronomy</h2></div>
		</div>
	</div>

	<a class="carousel-control left" href="#myCaurosel" data-slide="prev">
		<span class="icon-prev"></span>
	</a>
	<a class="carousel-control right" href="#myCaurosel" data-slide="next">
		<span class="icon-next"></span>
	</a>
</div>