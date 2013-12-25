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
    {{ HTML::script('assets/js/jquery.nicescroll.min.js') }}

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
    {{ App::setLocale(Session::get('lang', 'tr')) }}
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/quote.png') }}" /> {{ trans('menu.Başlık') }} </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{ url('/') }}">{{ trans('menu.AnaSayfa') }}</a></li>
            <li><a href="{{ url('quote/create') }}">{{ trans('menu.AlıntıEkle') }}</a></li>
            <li class="dropdown">
              <a href="{{ url('/person') }}" class="dropdown-toggle" data-toggle="dropdown">{{ trans('menu.Kişiler') }} <b class="caret"></b></a>
              <ul class="dropdown-menu">
               <!--  <li><a href="../person/create">Kişi Ekle</a></li> -->
                <li><a href="{{ url('/person') }}">{{ trans('menu.KişilerListesi') }}</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">{{ trans('menu.Eklemeİşlem') }}</li>
                <li><a href="{{ url('person/create') }}">{{ trans('menu.KişilerEkle') }}</a></li>
              </ul>
            </li>
            <li><a href="{{ url('/quote') }}">{{ trans('menu.Sözler') }}</a></li>
            <li><a href="{{ url('/contact') }}">{{ trans('menu.İletişim') }}</a></li>

          </ul>

        <a href="{{ url('lang/tr') }}"> <img src="{{ asset('img/turkish.png') }}" title="Siteyi Türkçe Diline Çevir" /></a>
        <a href="{{ url('lang/en') }}"><img src="{{ asset('img/english.png') }}" title="Convert to English" /></a>

        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container">
    <div id="testasamasi" class="alert alert-warning text-center">Alıntılar sistemi henüz test aşamasındadır</div>

      <!-- Example row of columns -->
      <div class="row">
        
          @yield('content')
       
          @section('rightPanel')
            

          @show
      </div>


    </div> <!-- /container -->

   <hr>

      <footer class="text-center">
        <p>&copy; Alıntılar.com 2013</p>
      </footer>
  </body>
</html>
