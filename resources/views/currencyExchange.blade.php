
      @include('core.pagesHeaders')

        <!-- page content -->
        <br>
        <div class="right_col" role="main">
        <br>
        <?php if(isset($err)){ ?>
          <div class="w3-panel w3-red">
            <p>{{$err}}</p>
             </div>
           <?php } ?>
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
     <form method="post" action="Exchange">
       @csrf
     <div class="form-row align-items-center">
       <div class="col-auto">
         <div class="input-group mb-2">
           <div class="input-group-prepend">
           </div>
           <input type="text" name="currencies" class="form-control" id="inlineFormInputGroup" placeholder="ex :AUD,CHF,EUR " required>

         </div>
       </div>

       <div class="col-auto">
         <button type="submit" class="btn btn-primary mb-2">Exachange</button>
       </div>
     </div>
   </form>
</div>
        </div>

        <!-- /page content -->
      @include('core.pagesFooter')
