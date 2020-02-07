
    
<div class="container-fluid container-part2">
    <br class="brr"/>


    <?php foreach ($product as $pro ): ?>
    <div class="product-box row" >
    <div class="col-3" >
        <br>
        <div class="pric">
            <h6 class="pric-detail">قیمت محصول:<?php echo $pro->good_price ?>   </h6>
             <hr class="hr-p">
            
            <a href="#" > <p class="foroshgah"><span class="fa fa-angle-left angle"></span>فروشنده:نام فروشنده </p></a>
                <hr class="hr-p">
             <a href="#" > <p class="delivery">ارسال تا دوساعت بعد از سفارش </p></a>
                <hr class="hr-p">
            
            <button class="btn btn-shop" >افزودن به سبد خرید <span class="fa fa-shopping-basket"></span></button>
           
         
           
           
        
        </div>
        
        
        </div>
        
        <div class="col-5" >
           <div class="row rowy" ><h4>   <?php echo $pro->good_name; ?>                             </h4>
           <p> برند <a href="#">                  <?php echo $pro->brand_name; ?>    </a></p>
               <p>دسته بندی<a href="#"> <?php echo $pro->category_name; ?>                                      </a></p>
               
               <br>
               <br>
               
               <ul class="opt">
                   
                   
                   ویزگی های محصول

                   <li> <?php echo $pro->description; ?> </li>
                   
                   
                
               
               
               
               
               </ul>
            
            </div>
        
        
        </div>
        
        <div class="col-4"  style="border-left-width: 0.5px;border-left-style: solid;border-left-color:#E0D9DA">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
  
  <div class="carousel-inner" style="height:200px ">
    <div class="carousel-item active">
      <img src="2b.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="1b.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="2b.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
       <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol> 
        
</div>
        
        </div>
    
    </div>


  <?php endforeach; ?>
    
    <div class="row  row-tab" >
    <ul class="nav nav-tabs">
      <li class="nav-item"> <a class="nav-link " data-toggle="tab" href="#menu1">نظرات <em class="fas fa-comments"></em></a></li>
      <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#menu2">  مشخصات   <i class="far fa-list-alt"></i></a>
    </li>
  </ul>

  <!-- Tab panes -->
        
         <div class="tab-content">
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu2" class="container tab-pane active"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
        </div>
 
    
    
    </div>
    
  <div class="row">
    <div class="col-12">
<div class="carousel slide carousel2" id="carousel2" data-ride="carousel" data-interval="100000000" style="">
    <div class="carousel-header " >
        <div class="col-10"><h5>hgh</h5><hr/></div>
        <div class="col-2" ><h5>برگزیده ها </h5><hr style="margin-left: 20px"/></div>
        
    
    
    
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active"  >
            <div class="row" >
                <div class="col-1"></div>
            <div class="col-md clc" ><a href="#">
              <div class="thumb-wrapper">
                 <div class="img-box">
                    <img class="img-fluid " src="c.jpg">
                 </div>
                  
                  <div class="thumb-content">
                     <h6> گوشی  موبایل  سامسونگ  مدل   <br/>  دو سیم کارتهglaxy note 1 </h6>
                      <h4 class="text-danger">  2,224,000 تومان</h4>
                  
                  </div>
                </div></a>
            </div>
                
                  <div class="col-md clc" ><a href="#">
              <div class="thumb-wrapper">
                 <div class="img-box">
                    <img class="img-fluid " src="c.jpg">
                 </div>
                  
                  <div class="thumb-content">
                     <h6> گوشی  موبایل  سامسونگ  مدل   <br/>  دو سیم کارتهglaxy note 1 </h6>
                      <h4 class="text-danger">  2,224,000 تومان</h4>
                  
                  </div>
                      </div></a>
            </div>
                
                   <div class="col-md clc" ><a href="#">
              <div class="thumb-wrapper">
                 <div class="img-box">
                    <img class="img-fluid " src="c.jpg">
                 </div>
                  
                  <div class="thumb-content">
                     <h6> گوشی  موبایل  سامسونگ  مدل   <br/>  دو سیم کارتهglaxy note 1 </h6>
                      <h4 class="text-danger">  2,224,000 تومان</h4>
                  
                  </div>
                       </div></a>
            </div>
                    <div class="col-md clc" ><a  href="#">
              <div class="thumb-wrapper">
                 <div class="img-box">
                    <img class="img-fluid " src="c.jpg">
                 </div>
                  
                  <div class="thumb-content">
                     <h6> گوشی  موبایل  سامسونگ  مدل   <br/>  دو سیم کارتهglaxy note 1 </h6>
                      <h4 class="text-danger">  2,224,000 تومان</h4>
                  
                  </div>
                        </div></a>
            </div>
                
                    <div class="col-md clc" ><a href="#">
              <div class="thumb-wrapper">
                 <div class="img-box">
                    <img class="img-fluid " src="c.jpg">
                 </div>
                  
                  <div class="thumb-content">
                     <h6> گوشی  موبایل  سامسونگ  مدل   <br/>  دو سیم کارتهglaxy note 1 </h6>
                      <h4 class="text-danger">  2,224,000 تومان</h4>
                  
                  </div>
                        </div></a>
            </div>
                
                <div class="col-1"></div>
                 
                
                
                
                
                
                
                
                
                
                
                
            
                 
                
            </div>
        </div>
        <div class="carousel-item"  >
          <div class="row" >
           <div class="col-1"></div>
            <div class="col-md clc"  >
                <a href="#">
              <div class="thumb-wrapper">
                 <div class="img-box">
                    <img class="img-fluid " src="c.jpg">
                 </div>
                  
                  <div class="thumb-content">
                     <h6> گوشی  موبایل  سامسونگ  مدل   <br/>  دو سیم کارتهglaxy note 1 </h6>
                      <h4 class="text-danger">  2,224,000 تومان</h4>
                  
                  </div>
                    </div></a>
            </div>
                
                  <div class="col-md clc" ><a href="#">
              <div class="thumb-wrapper">
                 <div class="img-box">
                    <img class="img-fluid " src="c.jpg">
                 </div>
                  
                  <div class="thumb-content">
                     <h6> گوشی  موبایل  سامسونگ  مدل   <br/>  دو سیم کارتهglaxy note 1 </h6>
                      <h4 class="text-danger">  2,224,000 تومان</h4>
                  
                  </div>
            </div></a>
                      </div>
                
                   <div class="col-md clc" ><a href="#">
              <div class="thumb-wrapper">
                 <div class="img-box">
                    <img class="img-fluid " src="c.jpg">
                 </div>
                  
                  <div class="thumb-content">
                     <h6> گوشی  موبایل  سامسونگ  مدل   <br/>  دو سیم کارتهglaxy note 1 </h6>
                      <h4 class="text-danger">  2,224,000 تومان</h4>
                  
                  </div>
                       </div></a>
            </div>
                    <div class="col-md clc" ><a href="#">
              <div class="thumb-wrapper">
                 <div class="img-box">
                    <img class="img-fluid " src="c.jpg">
                 </div>
                  
                  <div class="thumb-content">
                     <h6> گوشی  موبایل  سامسونگ  مدل   <br/>  دو سیم کارتهglaxy note 1 </h6>
                      <h4 class="text-danger">  2,224,000 تومان</h4>
                  
                  </div>
                        </div></a>
            </div>
                
                    <div class="col-md clc" ><a href="#">
              <div class="thumb-wrapper">
                 <div class="img-box">
                    <img class="img-fluid " src="c.jpg">
                 </div>
                  
                  <div class="thumb-content">
                     <h6> گوشی  موبایل  سامسونگ  مدل   <br/>  دو سیم کارتهglaxy note 1 </h6>
                      <h4 class="text-danger">  2,224,000 تومان</h4>
                  
                  </div>
                        </div></a>
            </div>
                
                <div class="col-sm-1"></div>
                
            </div>
        
        </div>
        
    
    </div>
    
    <a class="carousel-control-prev carousel-prev-2" data-slide="prev" href="#carousel8" role="button">
    <i class="fas fa-angle-left ca-ic-pr" ></i>
    <span class="sr-only">Prev</span>    
    
    </a>
    <a class= "carousel-control-next carousel-next-2" data-slide="next" href="#carousel2" role="button">
    <i class="fas fa-angle-right ca-ic-ne" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
    
    </div>
        <br/>
        
    </div>
    </div>
    
   
    
    
    
    
    
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
  
    
    </div>    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


 
   




