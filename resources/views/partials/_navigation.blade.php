<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/" style="font-size: 30px;" onMouseOver="this.style.color='#16A085'"
   onMouseOut="this.style.color='#99A3A4'">ideaHUNT.net</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        	<ul class="nav navbar-nav">
		        <li @yield('homeButt')><a href="/idea">All Posts</a></li>		        
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="{{url('/category/CS')}}">Computer Science</a></li>
		            <li><a href="{{url('/category/Physics')}}">Physics</a></li>
		            <li><a href="{{url('/category/Astronomy')}}">Astronomy</a></li>		            
		            <li><a href="{{url('/category/Literature')}}">Literature</a></li>		            
		            <li><a href="{{url('/category/Music_Movie')}}">Music & Movie</a></li>
		            <li><a href="{{url('/category/Miscellanious')}}">Miscellanious</a></li>
		    	</ul>
		    </li>
		    <li @yield('aboutButt')><a href="/about">About</a></li>
		    <li @yield('contactButt')><a href="/contact">Contact</a></li>
          </ul>
          <div class="nav navbar-nav navbar-right">       		
	        <ul class="nav navbar-nav">	
	        @if(Auth::check())
	        	<li style="color:#99A3A4;margin-top:8px;border:2px solid white;border-radius: 5px;padding:5px">
	        	Hello, {{Auth::user()->name}}</li>
	        	<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="{{route('posts.index')}}">My Posts</a></li>
			            <li><a href="{{route('profile')}}">Profile</a></li>
			            <li><a href="{{route('tags.index')}}">Tags</a></li>
			            <li><a href="{{url('/auth/logout')}}">Sign Out</a></li>				            
			    	</ul>
			    </li>
			@else
				<li>
		      		<form class="navbar-form navbar-right">          			
		      			<a href="{{url('/auth/register')}}" type="button" class="btn btn-success" 
		      			style="margin-right: 20px; margin-left: 20px;">Sign Up</a>
		      			<a href="{{url('/auth/login')}}" type="button" class="btn btn-success" style="margin-right: 20px;">Sign In</a>
		      		</form>
	      		</li>  
	        @endif       		         
	            
		  </ul>
          </div>          
        </div><!--/.navbar-collapse -->
      </div>
    </nav>