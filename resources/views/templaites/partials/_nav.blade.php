      <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('root_path') }}">Laracarte</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{ route('root_path') }}">Home</a></li>
            <li><a href="{{ route('about_path') }}">About</a></li>
            <li><a href="#contact">Artisans</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="https://laravel.com/">laravel.com</a></li>
                <li><a href="https://laravel.io/">laravel.io</a></li>
                <li><a href="https://laracasts.com/">laracasts</a></li>
                <li><a href="https://larajobs.com/">larajobs</a></li>
                <li><a href="https://laravel-news.com/">laravel news</a></li>
                <li><a href="https://lara-chat.com/">larachat</a></li>
    
              </ul>
            </li>
            <li><a href="#about">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>