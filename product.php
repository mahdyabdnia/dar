<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="custom.css">
    <script src="cusom.js" ></script>
    
    <script>

$(document).ready(function(){
  $("#btn-modal").click(function(){
    $("#myModal").fadeIn();
  });
});

</script>

<script>
$(document).ready(function(){
  $("body").dblclick(function(){
   $("#myModal").fadeOut();

  });
});


</script>

<script>

$(document).ready(function(){
  $("#btn-modal2").click(function(){
    $("#myModal1").fadeIn();
  });
});

</script>

<script>
$(document).ready(function(){
$("body").dblclick(function(){
$("#myModal1").fadeOut();

});
});


</script>
    
</head>

<body>
    <header>
<div>
<a class="logo-link" href="#"><img src="Untit-5.jpg" width="200" height="80" class="img-fluid" alt=""></a>

<input type="text" class="search-bar" placeholder="نام برند و کالا را وارد کنید " >
<button class="search-btn btn btn-dark"><i class="fa fa-search"></i></button>

<button type="button" class="btn btn-outline-dark shop-btn"><span class="badge badge-pill badge-dark" style="font-size: 12px">0</span> <span class="shop-text">سبد خرید</span> <em class="fa fa-shopping-basket shop-icon" style="font-size: 23px"></em></button>
<button type="button" id="btn-modal" data-toggle="modal" data-target="#myModal" class="btn btn-link bt-app1">اپلیکیشن دور بازار</button>

<button class="btn btn-link bt-app2" id=tt>تولید کننده هستم</button>
<button class="btn btn-link bt-app3" id="btn-modal2" data-target="myModal1" data-toggle="modal">ثبت نام -ورود</button>

<script>

$(document).ready(function(){
  $("#btn-modal").click(function(){
    $("#myModal").fadeIn();
  });
});

</script>

<script>
$(document).ready(function(){
  $("body").dblclick(function(){
   $("#myModal").fadeOut();

  });
});


</script>

<script>

$(document).ready(function(){
  $("#btn-modal2").click(function(){
    $("#myModal1").fadeIn();
  });
});

</script>

<script>
$(document).ready(function(){
$("body").dblclick(function(){
$("#myModal1").fadeOut();

});
});


</script>

  
</div>

<div class="modal" id="myModal1" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">


</div>








</div>





</div>









<div class="modal " id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="float: right">
          
          <p>دریافت اپلیکیشن دور بازار</p>
        </div>
        <div class="modal-body">

          <a href="#" ><img src="google-play.png"></a>
          <a href="#" style="margin-left: 10px"><img  src="cafebazar.png"></a>
          
        </div>
        
      </div>
      
    </div>
  </div>
  



<br>
<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<ul class="navbar-nav ml-auto">
<li class="nav-item dropdown  " >
<a class="nav-link  " href="#" id="navbardrop" > <i id="span-dop" class="fa fa-caret-down"></i>    مواد غذایی</a>
 <ul class="dropdown-menu" id="dropdown" style="text-align: right ;background: #343A40">
      <li> <a class="dropdown-item" href="#"> <i class=" fa fa-angle-left"></i>  لینک1 </a></li> 
		
		
     <li> <a class="dropdown-item" href="#">لینک2 </a></li>  
     <li> <a class="dropdown-item" href="#">لینک3 </a></li>  
      </ul>
	  
	  <script>
	  $(document).ready(function(){
	  
	  $(".navbar ul li").hover(function(){
	  $(this).children("ul").stop(true).fadeToggle();
	  });
	  });
	  
	  
	  </script>
	  
	  

</li>



<li class="nav-item dropdown ">
<a class="nav-link  " href="#" id="navbardrop" > <i id="span-dop" class="fa fa-caret-down"></i>    مواد غذایی</a>
 <ul class="dropdown-menu" id="dropdown" style="text-align: right ;background: #343A40">
      <li> <a class="dropdown-item" href="#"> <i class=" fa fa-angle-left"></i>  لینک1 </a></li> 
		
		
     <li> <a class="dropdown-item" href="#">لینک2 </a></li>  
     <li> <a class="dropdown-item" href="#">لینک3 </a></li>  
      </ul>
</li>

<li class="nav-item dropdown ">
<a class="nav-link  " href="#" id="navbardrop" > <i id="span-dop" class="fa fa-caret-down"></i>    مواد غذایی</a>
 <ul class="dropdown-menu" id="dropdown" style="text-align: right ;background: #343A40">
      <li> <a class="dropdown-item" href="#"> <i class=" fa fa-angle-left"></i>  لینک1 </a></li> 
		
		
     <li> <a class="dropdown-item" href="#">لینک2 </a></li>  
     <li> <a class="dropdown-item" href="#">لینک3 </a></li>  
      </ul>
</li>

<li class="nav-item dropdown ">
<a class="nav-link  " href="#" id="navbardrop" > <i id="span-dop" class="fa fa-caret-down"></i>    مواد غذایی</a>
 <ul class="dropdown-menu" id="dropdown" style="text-align: right ;background: #343A40">
      <li> <a class="dropdown-item" href="#"> <i class=" fa fa-angle-left"></i>  لینک1 </a></li> 
		
		
     <li> <a class="dropdown-item" href="#">لینک2 </a></li>  
     <li> <a class="dropdown-item" href="#">لینک3 </a></li>  
      </ul>
</li>






</ul>

</nav>


</div></header>
    
<div class="container-fluid container-part2">
    <br class="brr"/>
    <div class="product-box row" >
    <div class="col-3" >
        <br>
        <div class="pric">
            <h6 class="pric-detail">قیمت محصول: 200000 ریال</h6>
             <hr class="hr-p">
            
            <a href="#" > <p class="foroshgah"><span class="fa fa-angle-left angle"></span>فروشنده:نام فروشنده </p></a>
                <hr class="hr-p">
             <a href="#" > <p class="delivery">ارسال تا دوساعت بعد از سفارش </p></a>
                <hr class="hr-p">
            
            <button class="btn btn-shop" >افزودن به سبد خرید <span class="fa fa-shopping-basket"></span></button>
           
         
           
           
        
        </div>
        
        
        </div>
        
        <div class="col-5" >
           <div class="row rowy" ><h4>نام جنس</h4>
           <p> برند <a href="#">نام برند</a></p>
               <p>دسته بندی<a href="#">نام دسته بندی</a></p>
               
               <br>
               <br>
               
               <ul class="opt">
                   
                   
                   ویزگی های محصول<li>ویژگی محصول</li>
                    <li>ویژگی محصول</li>
               
               
               
               
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
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>

 <script>
            $(document).ready(function(){
                $(".foroshgah").hover(function(){
                    $(".foroshgah").css("color","black");
                });
                 
            });
            
            </script>

        
            
              <script>
            $(document).ready(function(){
                $(".foroshgah").mouseleave(function(){
                    $(".foroshgah").css("color","#635D5D");
                });
                 
            });
            
            </script>
            
              <script>
            $(document).ready(function(){
                $(".btn-shop").hover(function(){
                    $(".btn-shop").css("opacity","1.0");
                });
                 
            });
            
            </script>
            
              <script>
            $(document).ready(function(){
                $(".btn-shop").mouseleave(function(){
                    $(".btn-shop").css("opacity","0.9");
                });
                 
            });
            
            </script>

   




