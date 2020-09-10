 <!DOCTYPE html>
<html>
<head>
    <title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/custom.css">

<script type="text/javascript" src="<?php echo base_url(); ?>assets/custom.js"></script>

    

    
    
</head>
<body>
<header>
<div>
<a class="logo-link" href="#"><img src="Untit-5.jpg" width="200" height="80" class="img-fluid" alt=""></a>

<input type="text" class="search-bar" placeholder="نام برند و کالا را وارد کنید " >
<button class="search-btn btn btn-dark"><i class="fa fa-search"></i></button>
<?php $totalqty=0; ?>
        <?php foreach($this->cart->contents() as $items): ?>
          <?php $totalqty+=$items['qty']; ?>
        <?php endforeach;?>
<button  type="button" class="btn btn-outline-dark shop-btn"><a class="shop-link"href="<?php echo base_url(); ?>Cart"><span class="badge badge-pill badge-dark" style="font-size: 12px"><?php echo $totalqty; ?></span> <span class="shop-text">سبد خرید</span> <em class="fa fa-shopping-cart shop-icon" style="font-size: 23px"></em></a></button>
<button type="button" id="btn-modal" data-toggle="modal" data-target="#myModal" class="btn btn-link bt-app1">اپلیکیشن دور بازار</button>

<button class="btn btn-link bt-app2" id=tt>تولید کننده هستم</button>
<?php if(isset($_SESSION['logged_in'])): ?>
<button class="btn btn-link bt-app3" id="btn-modal2" data-target="myModal1" data-toggle="modal" ><a class="header-link" href="<?php echo base_url() ?>user/logout ">خروج</a> </button>

<?php else: ?>  
<button class="btn btn-link bt-app3" id="btn-modal2" data-target="myModal1" data-toggle="modal" ><a class="header-link" href="<?php echo base_url() ?>user ">ثبت نام -ورود </a> </button>
<?php endif; ?>

<script>



</script>

<script>



</script>

<script>



</script>

<script>



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
  

      <script>
      $(document).ready(function(){
      
      $(".navbar ul li").hover(function(){
      $(this).children("ul").stop(true).fadeToggle();
      });
      });
      
      
      </script>


<br>
<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<ul class="navbar-nav ml-auto">

<?php foreach ($global_result as $globres ):?>

<li class="nav-item dropdown  " >
<a class="nav-link  " href="#" id="navbardrop" > <i id="span-dop" class="fa fa-caret-down"></i><?php echo $globres->global_category; ?></a>
 <ul class="dropdown-menu" id="dropdown" style="text-align: right ;background: #343A40">
  <?php foreach($branch_result as $bres): ?>
    <?php if($globres->global_category_id==$bres->global_category_id): ?>
      <li> <a class="dropdown-item" href="#"> <i class=" fa fa-angle-left"></i>  <?php echo $bres->branch_category; ?></a>
         
         <ul class="dropdown-menu submenu submenu-left" id="dropdown" style="text-align: right ;background: #343A40">
          <?php foreach($category_result as $catres) :?>
            <?php if($bres->branch_category_id==$catres->branch_category_id): ?>
            <li class=""><a class="dropdown-item" href=""><?php echo $catres->category_name; ?></a></li>
             <?php endif; ?>
          <?php endforeach; ?>   
         </ul>
       

      </li> 
     <?php endif; ?>

      

    
    
 <?php endforeach; ?>
  </ul>
   
</li>



<?php endforeach; ?>





</ul>

</nav>


</div></header>