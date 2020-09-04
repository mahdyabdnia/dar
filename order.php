<?php if(isset($_SESSION['logged_in'])):?>

	<?php $total= $this->cart->format_number($this->cart->total()); ?>
	<?php if($total==0): ?>
		<div class="col-md-12 alert alert-success" style="text-align : center;direction:rtl;">
			<p>سبد خرید خالی است . موردی برای پرداخت خرید نیست.</p>
		</div>	
	<?php  else: ?>	

		<div class="container-fluid ">
       <div class="row row-in ">
        
         <div class="row-product row-in-margin" >

           <div class="row-product-in">
             <div>
            <div class="form-group">
              <h6 style="text-align: right;"> آدرس تحویل سفارش</h6>
             <textarea class="form-control address form-input" placeholder="طفا آأرس را برای ارسال وارد نمایید."></textarea>

            </div>

            <div class="form-group">
             <h6>لطفا تاریخ مورد نظر برای دریافت را وارد نمایید.</h6>

             <input type="date" name="" class="form-control form-input date">

            </div>

            <div  class="form-group time-group">  
            <h6> محدوده زمانی برای دریافت را وارد کنید </h6>

            <div>
            <label dir="rtl" for="b1"> ازساعت  </label>
            <input type="time" name="b1" class="form-control time1" >
            
         <label dir="rtl" for="b2"> الی ساعت</label>
            <input type="time" name="b2" class="form-control time2">

              </div>

                </div>
                





               
               
                  
               
               
             </div>


            <hr style="width: 80%;height: 0.5%;border-bottom: none;border-top-color:#d1d1d1; "> 
      
            <div class="row-inner">
              <h5>لیست سفارشات</h5>

              <?php foreach ($this->cart->contents() as $items): ?>
              <div class="row-outer">
              <img src="<?php echo $items['img']; ?>
              ">
              <h6><?php echo $items['name']; ?></h6>

              </div>

            <?php endforeach; ?>



            


               

            </div>
           

           </div>
             <div style="display: flex;flex-grow: 0.5; "></div>
            <div style="display: flex;flex-grow:7.5;flex-direction: column;height: auto;">
              
          
            
              <div style="display: flex;flex-direction: column;height: 300px;background-color: #ffffff;position: sticky;position: -webkit-sticky;border-width: 1px;border-color:grey;border-style: solid;justify-content:flex-end;text-align: center;">

                <h5 style="margin: auto;">مبلغ کل</h5>
               
                <h6 style="margin: auto;"><?php echo $this->cart->format_number($this->cart->total()); ?></h6>

              
                
 <button class="btn btn-info add-order" name="add-order" style="width: 50%;margin-bottom: 30px;margin-left: auto;margin-right: auto;">ثبت نهایی </button>
 

              </div>

            </div>
             
             
             
             
             
           
           </div>
        
        </div>
        
    
    </div>




    
    <br/>
    
     <br/>
     <br/>


	<?php endif; ?>	

        <?php else: ?>
<?php if(isset($_SESSION['first_login'])): ?>
                <div class="col-md-12 alert alert-success" style="text-align : center;direction:rtl;">
                    <p><?php echo $_SESSION['first_login']; ?></p>  
                    <p><a href="<?php echo base_url(); ?>User">برای ثبت نام یا ورود کلیک  کنید.</a></p> 
                </div>
                <?php unset($_SESSION['first_login']); ?>
               <?php endif; ?> 
        <?php endif; ?>	




        <script type="text/javascript">
          
           $(document).ready(function(){
            $(".add-order").click(function(){
              var user_address=$('.address').val();
              var send_date=$('.date').val();
              var send_time1=$('.time1').val();
              var send_time2=$('.time2').val();
              $.ajax({

                url:"<?php echo base_url(); ?>Order/addOrder",
                method:"POST",
                data:{user_address:user_address,send_date:send_date,send_time1:send_time1,send_time2:send_time2},
                seuccess:function(data){
                  location.replace("<?php echo base_url(); ?>First");
                }




              });

            });
           });







        </script>