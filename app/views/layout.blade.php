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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <script src="https://code.jquery.com/jquery.js"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    @yield('css')

    @yield('css')

    @yield('javascript')

    
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
  </head>

  <body>

      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Alıntılar</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Ana Sayfa</a></li>
            <li><a href="{{ url('quote/create') }}">+ Alıntı Ekle</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kişiler <b class="caret"></b></a>
              <ul class="dropdown-menu">
               <!--  <li><a href="../person/create">Kişi Ekle</a></li> -->
                <li><a href="#">Kişi Listesi</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Yönetici İşlemleri</li>
                <li><a href="{{ url('person/create') }}">Kişi Ekle</a></li>
              </ul>
            </li>
            <li><a href="#">Sözler</a></li>
            <li><a href="#">İletişim</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

    
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-sm-12">
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
