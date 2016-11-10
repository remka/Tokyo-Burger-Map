<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="/css/app.css" rel="stylesheet"> -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <style>

      /* Move down content because we have a fixed navbar that is 50px tall */
      body {
        padding-top: 50px;
      }


      /*
       * Global add-ons
       */

      .sub-header {
        padding-bottom: 10px;
        border-bottom: 1px solid #eee;
      }

      /*
       * Top navigation
       * Hide default border to remove 1px line.
       */
      .navbar-fixed-top {
        border: 0;
      }

      /*
       * Sidebar
       */

      /* Hide for mobile, show later */
      .sidebar {
        display: none;
      }
      @media (min-width: 768px) {
        .sidebar {
          position: fixed;
          top: 51px;
          bottom: 0;
          left: 0;
          z-index: 1000;
          display: block;
          padding: 20px;
          overflow-x: hidden;
          overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
          background-color: #f5f5f5;
          border-right: 1px solid #eee;
        }
      }

      /* Sidebar navigation */
      .nav-sidebar {
        margin-right: -21px; /* 20px padding + 1px border */
        margin-bottom: 20px;
        margin-left: -20px;
      }
      .nav-sidebar > li > a {
        padding-right: 20px;
        padding-left: 20px;
      }
      .nav-sidebar > .active > a,
      .nav-sidebar > .active > a:hover,
      .nav-sidebar > .active > a:focus {
        color: #fff;
        background-color: #428bca;
      }


      /*
       * Main content
       */

      .main {
        padding: 20px;
      }
      @media (min-width: 768px) {
        .main {
          padding-right: 40px;
          padding-left: 40px;
        }
      }
      .main .page-header {
        margin-top: 0;
      }
    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('admin.index') }}">Administration</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <form class="navbar-form navbar-right">
          <input type="text" class="form-control" placeholder="Search...">
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Settings</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Help</a></li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')

  <!-- Scripts -->
  <script src="/js/app.js"></script>

</body>
</html>
