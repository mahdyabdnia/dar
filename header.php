 <!DOCTYPE html>
<html>
<head>
    <title></title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/custom.css">

    

    
    
</head>
<body>
<header>
<div>
<a class="logo-link" href="#"><img src="Untit-5.jpg" width="200" height="80" class="img-fluid" alt=""></a>

<input type="text" class="search-bar" placeholder="نام برند و کالا را وارد کنید " >
<button class="search-btn btn btn-dark"><i class="fa fa-search"></i></button>

<button type="button" class="btn btn-outline-dark shop-btn"><span class="badge badge-pill badge-dark" style="font-size: 12px">0</span> <span class="shop-text">سبد خرید</span> <em class="fa fa-shopping-cart shop-icon" style="font-size: 23px"></em></button>
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