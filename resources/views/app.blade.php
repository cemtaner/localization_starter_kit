<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
            @foreach ($pages as $page)
            <li class="nav-item">
              <a class="nav-link" href="{{ route('page', ['locale'=> $page->language, 'slug' => $page->slug]) }}">{{ $page->title }}</a> 
            </li>
            @endforeach
            
        </ul>
        <!--dil menüsü-->
        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            @foreach ($languages as $language)
              @if($language->code === $currentLocale)
                {{ $language->name }}
              @endif
            @endforeach
        </button>
        <ul class="dropdown-menu">
          @foreach ($languages as $language)
            <li><a class="dropdown-item" href="{{ route('lang', ['locale'=> $language->code]) }}">{{ $language->name }}</a></li>
          @endforeach
        </ul>
        </div>
        <!--#dil menüsü-->
        </div>
    </div>
    </nav>

    <div class="container">
    <div class="row">
        @yield('content')
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>