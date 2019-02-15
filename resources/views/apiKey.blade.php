
      @include('core.pagesHeaders')

        <!-- page content -->
        <br><br>
        <div class="right_col" role="main">
          <div class="w3-panel w3-blue">
      <h2 class="w3-opacity">Set API kEY ........</h2>
          </div>


           <?php if(isset($message)){ ?>
          <div class="w3-container">
          <div class="w3-panel w3-pale-red w3-leftbar w3-border-red">
          <p>{{$message}}</p>
          </div>
          </div>
          <?php } ?>

 <br>
    <form method="post" action="set_api">
        @csrf
  <label class="w3-text-yellow"><b>Set API Key Value : </b></label>
  <p><input class="w3-input w3-border"  name="key_value" type="text" placeholder="ex : 55a125555f5jgkgr"></p><br>

  <button class="w3-btn w3-yellow">set API</button>

  </form>

        </div>
        <!-- /page content -->
      @include('core.pagesFooter')
