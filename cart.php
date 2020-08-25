
    
    <div class="container-fluid container-part3">
       <div class="row row-in">
        <div class="row-up" >
           <div><p><span class="badge badge-pill badge-secondary" >2</span>  سبد خرید </p></div>
           </div>
         <div class="row-product" >
           <div class="row-product-in">


            <?php foreach($this->cart->contents() as $items): ?>
               <div class="row-box">
             <div class="btn-close">
               <button class="close">&times;</button>
                 
               
               </div>
               
               <div class="product-img"><img src="110204720.jpg" ></div>
               <div class="product-detail">
               <h5 class="text-info"><?php echo $items['name']; ?></h5>
               
                  
                   
                   
               </div>
               
               <div class="number-product">
               <p>:تعداد</p>
                   <input type="number" name="" value="<?php echo $items['qty']; ?>">
               
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
                 
                 <div class="price-button">
                 <button type="button" class="btn btn-info">ادامه فرایند پرداخت</button>
                 
                 </div>
             
             </div>
             
             
             
             
           
           </div>
        
        </div>
        
    
    </div>
    <br/>
    
     <br/>
     <br/>

