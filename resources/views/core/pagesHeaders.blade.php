@include('core.header')
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <!-- menu profile quick info -->
          @include('core.menuprofile')
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          @include('core.sidebar')
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
            @include('core.footerButton')
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      @include('core.topNavigation')
     <!-- /top navigation -->
