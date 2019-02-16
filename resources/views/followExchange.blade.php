
      @include('core.pagesHeaders')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="w3-container">
       <h2>Start Follow currancy Exchange Rate</h2>
      <p>Let's Start  : </p>
       </div>
       <?php if(isset($message)){ ?>
      <div class="w3-container">
      <div class="w3-panel w3-pale-red w3-leftbar w3-border-red">
      <p>{{$message}}</p>
      </div>
      </div>
      <?php } ?>

 <form method="post" action="follow">
   @csrf
<div class="w3-row-padding">
  <div class="w3-half">
    <label>Enter Number to notify you  when Rate it :</label>
    <input class="w3-input w3-border" name="notify_number" type="text" placeholder=" ex : 314.193041"  required>
  </div>
  <div class="w3-half">
    <label>Enter Number of hr : </label>
    <input class="w3-input w3-border" name="hr_trigger" type="text" placeholder="any number from :1-24" required>
  </div>

</div>
<hr>
<div>
<i class="fa fa-cut" style="font-size:35px;color:red"></i>
<strong style="color:red;">To Know more about currency code go to :</strong>
<a href="currencyEncoding" style="color:Blue;"> Currency Encoding</a>
</div>
<hr>
<div class="w3-row-padding">
  <div class="w3-half">
    <label>Select Currency Code To Follow :</label>
    @include('core.currencytoSELECT')
  </div>
  <div class="w3-half">
    <br>
    <button class="w3-button w3-block w3-teal" >follow</button>

  </div>
</div>
<hr>
<div class="w3-row-padding">
  <i class="fa fa-arrow-right" style="font-size:31px;color:orange"></i>
  <strong style="color:orange;">To Show Charting For Currency Exchange Rate Go to : </strong>
  <a href="charting" target="_blank" style="color:blue;"> Charting</a>
  </div>
</form>
        </div>
        <!-- /page content -->
      @include('core.pagesFooter')
