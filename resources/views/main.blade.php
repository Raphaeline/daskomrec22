<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Explore the Jungle with Daskom</title>
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/favicon/favicon-16x16.png') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/navbar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/landing.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/reqruitment.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/about.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/footer.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Fira+Code:wght@400&display=swap" rel="stylesheet">

</head>

<body style="background-color: #2c4d16">
  <section id="nav-section">
    <nav class="navbar navbar-expand-lg dlor-navbar position-relative">
      <div class="container-fluid ">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="mobile-hide leaf-img">
            <img width="75%" src="{{asset('/assets/daun.png')}}" alt="nav-leaf">
            <img class="monyet-img" width="17%" src="{{asset('/assets/monyet.png')}}" alt="nav-monk">
          </li>
        </ul>
        <div class="dlor-navright ">
          <ul class="navbar-nav dlor-navright position-fixed end-0 top-0 me-lg-4 mt-lg-4" id="dlor-toggler">
            <li class="nav-item-login">
              <a style="font-weight: 400;" class="nav-link text-center" href="/login" tabindex="-1" aria-disabled="true">LOGIN</a>
            </li>
          </ul>
        </div>
    </nav>
  </section>

  <section id="landing-section" class="px-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg car-img">
          <img class="img-fluid car-img" src="{{asset('/assets/car-sd.png')}}" alt="logo">
        </div>
        <div class="col-lg">
          <div class="landing-text-p text-end px-lg-5 mx-lg-2">
            <div class="font-weight-bold c-text-land-1">
              <div class="text-land-1">RECRUITMENT</div>
              <div class="text-land-1">DASKOM</div>
              <div class="text-land-1">2022</div>
            </div>
            <span class="text-land-2"></span>
          </div> -->
            <div class="c-text-land-2">
              <div class="text-land-2 tagline"> #ExploreTheJungle</div>
              <div class="text-land-2 tagline"> #FindYourPathNeverBeAfraid</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  @include('layouts/about')
  @section('aboutdaskom')
  @endsection

  @include('layouts/footer')
  @section('footer')
  @endsection

</body>

</html>