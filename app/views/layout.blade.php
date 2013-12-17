<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Alıntılar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Alıntılar.com</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="#">Ana Sayfa</a></li>
              <li><a href="../quote/create">+ Alıntı Ekle</a></li>
            <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">Kişiler <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="../person/create">Kişi ekle</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
              <li><a href="#contact">Sözler</a></li>
              <li><a href="#contact">İletişim</a></li>
            </ul>
           </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

    
      <!-- Example row of columns -->
      <div class="row">
        <div class="span12">
          @yield('content')
        </div>
        
      </div>

      <hr>

      <footer>
        <p>&copy; Alıntılar.com 2013</p>
      </footer>

    </div> <!-- /container -->


  </body>
</html>
