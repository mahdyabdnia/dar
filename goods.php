
    
    
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
      <input type="checkbox" class="custom-control-input" id="switch1" name="example">
      <label class="custom-control-label" for="switch1">اجناس موجود</label>
                
    </div>
            </div>
            
            
                  <div class="op-switch">
            <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="switch1" name="example">
      <label class="custom-control-label" for="switch1">کالاهای اماده ارسال</label>
                
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


            <?php foreach ($goods as $good ):?>
            <li>
                <div class="img" ><img class="img-fluid" src="<?php echo base_url();?>assets/img/mobile.jpg"></div>
                <div class="product-name"><a href="<?php echo base_url(); ?>Goods/productShow/<?php echo $good->good_id ?>" class="product-link"><p><?php echo $good->good_name; ?></p></a> </div>
                <div class="product-price">
                <h5 class="text-info"><b><?php echo $good->good_price; ?> </b></h5>
                </div>
                
                <div class="actions" >
                <button class=" btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="افزودن به سبد خرید"><i class="fas fa-shopping-cart" style="color: white;"></i></button>
                     <button class="btn btn-dark"><i class="fas fa-expand-arrows-alt" data-toggle="tooltip" data-placement="right" title="مشاهده نیم نگاه"></i></button>
                    
                                
                    
                    
                    
                </div>
                
                
                </li>
            
        
       <?php endforeach; ?>
            
                
            
            
               
            
            
                
            
            
            
            
           
            
            
            </ul>
            
            
        
        
        
            <?php echo $links; ?>
        </div>
        </div>
    </div>
    
    
    
