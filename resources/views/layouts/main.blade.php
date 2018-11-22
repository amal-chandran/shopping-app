<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Basic') }}</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <link href="{{ asset('css/sm-core-css.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sm-simple/sm-simple.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sm-mint/sm-mint.css') }}" rel="stylesheet">
    <link href="{{ asset('css/smart_wizard.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/smart_wizard_theme_arrows.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/jquery.smartmenus.bootstrap-4.css') }}" rel="stylesheet">
</head>

<body>
    @include('components.main-nav')
    @include('components.sub-nav')

    <div class="container pb-2">
        @yield("content")
    </div>

    <div class="px-4">
        @yield("content2")
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.1.14.3.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.smartmenus.min.js') }}"></script>
    <script src="{{ asset('js/jquery.smartWizard.min.js') }}"></script>
    <script src="{{ asset('js/jquery.smartmenus.bootstrap-4.min.js') }}"></script>


    <script>
        $(function() {
  $('#main-menu').smartmenus();
});
    </script>
    @if (request()->session()->exists('complete'))
    <script type="text/javascript">
        $(document).ready(function(){
          $('#smartwizard').smartWizard({backButtonSupport:false,
          
          disabledSteps:[0,1,2],selected: 3,useURLhash: false,
          
          });
        });
    </script>
    @else
    <script type="text/javascript">
        $(document).ready(function(){
          $('#smartwizard').smartWizard({backButtonSupport:false,
          
          disabledSteps:[3]
          
          });
        });
    </script>
    @endif
</body>

</html>