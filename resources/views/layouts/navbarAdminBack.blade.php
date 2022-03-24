@yield('navbackadmin')
<section id="nav-section">
    <nav class="navbar navbar-expand-lg dlor-navbar position-relative">
      <div class="container-fluid ">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="leaf-img">
            <img width="75%" src="{{asset('/assets/daun.png')}}" alt="nav-leaf">
            <img class="monyet-img" width="17%" src="{{asset('/assets/monyet.png')}}" alt="nav-monk">
          </li>
        </ul>
        <div class="dlor-navright ">
          <ul class="navbar-nav dlor-navright position-fixed end-0 top-0 me-lg-4 mt-lg-4" id="dlor-toggler">
            <li class="nav-item-login">
              <a style="font-weight: 400;" class="nav-link text-center" href="/logoutAdmin" tabindex="-1" aria-disabled="true">LOGOUT</a>
            </li>
          </ul>
        </div>
    </nav>
  </section>
<!-- <section id="nav-section">
    <nav class="navbar navbar-expand-lg dlor-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href=""><img src="{{asset('/assets/dlor.png')}}" alt="logo" class="dlor-logonav"></a>
          <div class="dlor-navright" id="dlor-toggler">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-center" href="/adminHome" tabindex="-1" aria-disabled="true"><img src="{{ asset('/assets/back-icon-admin.png') }}" alt="icon" width="40px" height="40px"></a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
</section> -->