<!DOCTYPE html>
<html lang="en">
  @include('partials._header')

  <body style="font-family: 'Overlock', cursive; font-weight: bolder;font-size: 16px;
        background-image: url({{asset('img/back3.gif')}});">
      @include('partials._navigation')       

      @include('partials._jumbotron')  

      <div class="container">
          @include('partials._messages')
        	@yield('content')
      </div>

      @include('partials._footer') 
      
      @include('partials._scripts')  
    
  </body>
</html>
