<script type="text/javascript">
$(document).ready(function(){
  $(".remove_cart").click(function(){
    var row_id=$(this).attr("id");
    $.ajax({
         url:"<?php echo base_url(); ?>Cart/remove",
         method:"POST",
         data:{row_id:row_id},
         success:function(data){
          location.reload();
         }


    });

  });

});  


  

</script>
    









    <div class="container-fluid container-part3">


       <div class="row row-in">
        <?php $totalqty=0; ?>
        <?php foreach($this->cart->contents() as $items): ?>
          <?php $totalqty+=$items['qty']; ?>
        <?php endforeach; ?>  

      <?php if($totalqty==0): ?>
        <h6>سبد خالی است !موردی برای نمایش وجود ندارد</h6>
        <?php else: ?>
        <div class="row-up" >
           <div><p><span class="badge badge-pill badge-secondary" ><?php echo $totalqty; ?></span>  سبد خرید </p></div>
           </div>
         <div class="row-product" >
           <div class="row-product-in">


            <?php foreach($this->cart->contents() as $items): ?>
               <div class="row-box">
             <div class="btn-close">
               <button class="close remove_cart" id="<?php echo $items['rowid']; ?>">&times;</button>
                 
               
               </div>
               
               <div class="product-img1"><img src="<?php echo base_url(); ?>assets/img/meigo.jpg" ></div>
               <div>
               <div class="product-detail">
               <h5 class="text-info" title="<?php echo $items['name']; ?>" data-placement="bottom" data-toggle="tooltip"><?php echo substr($items['name'],0,50) ; ?></h5>
               
                  
                   
                   
               </div>
               
               <div class="number-product">
               <p>:تعداد</p>
                   <input type="number" class="form-control" style="width: 100px;"name="" value="<?php echo $items['qty']; ?>">
               
               </div>
             </div>
               
               <div class="price-detail">
               <p class="text-secondary"><del>قیمت : <?php echo $items['price']; ?>تومان  </del></p>
                   
                   <p class="text-dark">مبلغ قابل پرداخت :<?php echo $items['subtotal']; ?> تومان </p>
               </div>
             
             
             
             </div>
             
              <?php endforeach; ?>      
               
                  
               
               
             </div>
             <div style="display: flex;flex-grow: 0.3; background: #DCDCDC;"></div>
             <div class="price-process" style="">
             <div class="whole-price" >
              <div class="dp1">   <p class="p1" >قیمت کل</p></div>
                <div class="dp2"> <p class="p2"><?php echo $this->cart->format_number($this->cart->total()); ?>تومان</p></div>
                 </div>
                 <div class="delivery-price">
                    <div class="dp1"> <p class="p1">هزینه ارسال</p></div>
                <div class="dp2">    <p class="p2">رایگان</p></div>
                 
                 </div>
                 <div class="price-pay">
                     <h5 class="text-secondary">مبلغ قابل پرداخت</h5>
                     <h5 class="text-danger"><?php echo $this->cart->format_number($this->cart->total()); ?>  تومان</h5>
                 </div>
                 <form action="<?php echo base_url(); ?>Order/orderPage" method="post">
                 <div class="price-button">
                 <button type="button" name="nextorder" class="nextorder btn btn-info">ادامه فرایند پرداخت</button>
                 
                 </div></form>
             
             </div>

             <script type="text/javascript">
               $(document).ready(function(){
                 $(".nextorder").click(function(){
                  $.ajax({
                    url:"<?php echo base_url(); ?>Order/orderPage",
                    method:"POST",
                    data:{},
                    success:function(data){
                     location.replace("<?php echo base_url(); ?>Order");
                    }
                    

                  });
                 });

               });

             </script>

             
             
             
             
           
           </div>

         <?php endif; ?>
        
        </div>
        
    
    </div>
    <br/>
    
     <br/>
     <br/>

