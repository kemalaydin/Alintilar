<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Alıntılar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    {{ HTML::style('assets/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::script('https://code.jquery.com/jquery.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}

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

      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="{{ asset('img/quote.png') }}" /> Alıntılar Sistemi </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{ url('/') }}">Ana Sayfa</a></li>
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
    <div class="alert alert-warning text-center">Alıntılar sistemi henüz test aşamasındadır</div>

    
      <!-- Example row of columns -->
      <div class="row">
        
          @yield('content')
       
      
      </div>


    </div> <!-- /container -->

   <hr>

      <footer class="text-center">
        <p>&copy; Alıntılar.com 2013</p>
      </footer>
  </body>
</html>
