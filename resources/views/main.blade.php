<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
    <title>@yield('htmlheader_title', 'Teste Laravel')</title>
  </head>
  <body>
    <div id="app">
		@include('menu')

		@yield('content')

	</div>

    <!-- Optional JavaScript -->
    <script src="{{ asset('/js/app.js') }}"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{ asset('/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    @if (session('response'))
        <script type="text/javascript">
            $(function() {
                swal({
                    title: '{{ session('response.title') }}',
                    text: '{{ session('response.msg') }}',
                    type: '{{ session('response.status') }}'
                });
            });
        </script>
    @endif
    @yield('scripts')
  </body>
</html>