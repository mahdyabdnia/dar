
      
    
    <div class="container-fluid container-part4">
    <div class="row row-in4">
        <div class="options"  style="">
            <div class="pro-type">
            <div><h6>دسته بندی نتایح</h6></div>
                <hr>
                <div><p><i class="fas fa-angle-left"></i>   کالای دیجیتال</p></div>
                <div><p class="p2"><i class="fas fa-angle-down"></i> گوشی</p></div>
                <div></div>
            
            </div>
              
            <div class="op-search" >
            <h6>جستجو در نتایج</h6>
                <div class="input-group">
                <div  class="input-group-prepend">
                 <span class="input-group-text">   <i class=" fas fa-search"></i></span>
                    </div>
                    <input class="" style="text-align: right" type="text">
                
                </div>
            </div>
            
            <div class="op-switch">
            <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="switch1" name="example" value="موجود">
      <label class="custom-control-label" for="switch1">اجناس موجود</label>
                
    </div>
            </div>
            
            
                  
            <div class="price-between" >
                <div><p> محدوده قیمت</p></div>
                <div>
            <p>از</p>
                <div><input class="form-control" type="number" min-length="10000"></div>
                    <p>تا</p>
                    <div><input class="form-control" type="number" min-length="10000"></div>
                
                </div>
                <div><button class="form-control btn btn-info">اعمال محدودیت</button></div>
            
            </div>
        
        
        
        
        
        </div>
        <div style="width: 1%;"> </div>
        <div class="goods" style="background: white">
        <ul>


            <?php foreach ($good_result as $good ):?>
            <li>
                <div class="img" ><img class="img-fluid" src="<?php echo base_url();?>assets/img/mobile.jpg"></div>
                <div class="product-name"><a href="<?php echo base_url(); ?>Product/index/<?php echo $good->good_id ?>" class="product-link"><p title="<?php echo $good->good_name; ?>" data-toggle="tooltip" data-placement="bottom"><?php echo substr($good->good_name, 0,40); ?></p></a> </div>
                <div class="product-price">
                <h5 class="text-info"><b><?php echo $good->good_price; ?> </b></h5>
                </div>
                
                <div class="actions" >
                  <input type="number" name="quantity" min="1" min="1000" class="form-control" class="quantity" id="<?php echo $good->good_id; ?>"  data-toggle="tooltip" value="1" >   
                <button data-goodid="<?php echo $good->good_id; ?>" data-goodprice="<?php echo $good->good_price; ?>" data-goodname="<?php echo $good->good_name; ?>" class="add_cart btn btn-dark" data-toggle="tooltip" name="add_cart" id="add_cart" data-placement="bottom" title="افزودن به سبد خرید"><i class="fas fa-shopping-cart" style="color: white;"></i></button>

                <button class="btn btn-dark"><i class="fas fa-expand-arrows-alt" data-toggle="tooltip" data-placement="right" title="مشاهده نیم نگاه"></i></button>
                
                     
                    
                                
                  
                    
                    
                </div>
                
                
                </li>
            
        
       <?php endforeach; ?>
       

       <script type="text/javascript">
     
           $(document).ready(function(){
            $(".add_cart").click(function(){
                var good_id=$(this).data("goodid");
                 var good_price=$(this).data("goodprice");
                 var good_name=$(this).data("goodname");
                 var quantity=$('#'+good_id).val();

               
                   $.ajax({
                    url:"<?php echo base_url(); ?>Cart/add",
                    method:"POST",
                    data:{good_id:good_id,good_name:good_name,good_price:good_price,quantity:quantity},
                    success:function(data){
                      location.reload();
                        }
                 });
                

            });

           });
    
         
       </script>
            
                
            
            
               
            
            
                
            
            
            
            
           
            
            
            </ul>
            
            
        
        
        
        </div>
        </div>
    </div>
    
    
    
