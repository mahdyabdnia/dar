      
     
<div class="container-fluid container-part2">
    <br class="brr"/>


    <?php foreach ($product_result as $pro ): ?>

    <div class="product-box row" >
    <div class="col-3" >
        <br>
        <div class="pric">
            <h6 class="pric-detail">قیمت محصول:<?php echo $pro->good_price ?>   </h6>
             <hr class="hr-p">
            
            <a href="#" > <p class="foroshgah"><span class="fa fa-angle-left angle"></span>نام فروشنده:<?php  echo $pro->seller_name;?> </p></a>
                <hr class="hr-p">
             <a href="#" > <p class="delivery">ارسال تا<?php echo $pro->del_time; ?> </p></a>
                <hr class="hr-p">
            
            <button class="btn btn-shop add_cart" id="add_cart" data-goodid="<?php echo $pro->good_id; ?>" data-goodprice="<?php $pro->good_price; ?>" data-goodname="<?php $pro->good_name; ?>" >افزودن به سبد خرید <span class="fa fa-shopping-basket"></span></button>
           
         
           
           
        
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


                  
                   <script type="text/javascript">
     
           $(document).ready(function(){
            $("#add_cart").click(function(){
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

                <h5 style="margin-right: 20px;">:تعداد </h5>
                <input type="number" name="quantity" id="<?php echo $pro->good_id; ?>" value="1" class="quantity form-input form-control" style="width: 50%;display:block;">
            
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


















    
    <div class="row row-tab " >
   

   <div class="tab-button" style="background-color: #e6e8e8;border-top-color: #a9abab;border-top-width: 2px;" >
     
     <button class="btn btn-default btn-lg open-desc"> مشخصات <i class="far fa-list-alt"></i> </button>
     <button class="btn btn-default btn-lg open-comment">نظرات  <em class="fas fa-comment"> </em></button>
   </div>   
 
   <div class="tab-cont">
     <div class="tab-comment container-fluid">
      <form>
        <h6>آیا  ار خرید این جنس رضایت داشته ایدد ؟</h6>
        <div class="form-group form-satis" >
        
        <label class="radio-inline" style="color: red;">نا راضی ام <input type="radio" name="satis" value="satisfy" checked></label>
        <label class="radio-inline" style="color: green;margin-right: 10px;">راضی ام  <input type="radio" name="desatis" value="desatisfy"></label>


      
   </div>


      <h6>لطفا نظر خود را در این قسمت بیان کنید </h6>
      <div class="form-group form-comment">
        <textarea placeholder="kjkgjfkjg" rows="6" class="form-control form-input" > </textarea>

      </div> 

      </form>
      
      
     </div>


     <div class="tab-desc  container-fluid">
       
       gfgfgfg
     </div>
     



   </div>
 
    
    
    </div>

    <script type="text/javascript">
  $(document).ready(function(){
    $(".open-comment").click(function(){
      $(this).css('background-color','white');
      $('.open-desc').css('background-color','#e6e8e8');
       $('.tab-comment').fadeIn();
       $('.tab-desc').fadeOut();
    });
  });     
 

    </script>


    <script type="text/javascript">
      $(document).ready(function(){
          $('.open-desc').click(function(){
           $(this).css('background-color','white');
           $('.open-comment').css('background-color','#e6e8e8');
           $('.tab-comment').fadeOut();
       $('.tab-desc').fadeIn();
          });
      });


    </script>
 































































    
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
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


 
   




