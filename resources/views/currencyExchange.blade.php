
      @include('core.pagesHeaders')

        <!-- page content -->
        <br>
        <div class="right_col" role="main">
        <br>
          <div class="w3-panel w3-pink">
         <h1 class="w3-opacity">
        <b>Currency Excahnge  Rates.....</b></h1>
     </div>
     <hr>
     <div class="x_content">
     <p>  <i>To Start and get the Curencies Exchange Rates , Follow thes steps : </i>
       <br><hr>
        1- get the code of the currencies you want from here :  <strong><a href="currencyEncoding">currencies Code</a></strong>
       <br><hr>
       2- you can enter any number of currencies code sperated by (,) and <strong>at least one code</strong> .
       <br><hr>
       3- <strong>Exmaple : AUD,CHF,EUR or Just  AUD </strong><br>
     </p>
     </div>
    <p> <strong> #From : USD >>> #To : </strong></p>
     <form>
     <div class="form-row align-items-center">
       <div class="col-auto">
         <div class="input-group mb-2">
           <div class="input-group-prepend">
           </div>
           <input type="text" name="currencies" class="form-control" id="inlineFormInputGroup" placeholder="ex :AUD,CHF,EUR ">

         </div>
       </div>

       <div class="col-auto">
         <button type="submit" class="btn btn-primary mb-2">Exachange</button>
       </div>
     </div>
   </form>
   <hr>
   <table class="w3-table-all">
    <thead>
      <tr class="w3-red">
        <th>Currency Pairs Exchange</th>
        <th> Exchange Rate</th>
      </tr>
    </thead>
    <tr>
      <td>USDAUD</td>
      <td>1.278384</td>
    </tr>

  </table>
</div>
        </div>

        <!-- /page content -->
      @include('core.pagesFooter')
