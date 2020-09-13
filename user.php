<!DOCTYPE html>
<html>
<head> 
	<title></title>   
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/custom.css">


</head>
<body>

<div class="container" >
    
<?php if(isset($_SESSION['registered'])):?>
                <div class="col-md-12 alert alert-success" style="text-align : center;direction:rtl;">
                    <p><?php echo $_SESSION['registered']; ?></p>   
                </div>
                <?php unset($_SESSION['registered']); ?>
        <?php endif; ?>
        <?php if(isset($_SESSION['alredy_registered'])):?>
                <div class="col-md-12 alert alert-danger" style="text-align : center;direction:rtl;">
                    <p><?php echo $_SESSION['alredy_registered']; ?></p>    
                </div>
                <?php unset($_SESSION['alredy_registered']); ?>
        <?php endif; ?>	



        <?php if(isset($_SESSION['login_success'])):?>
                <div class="col-md-12 alert alert-success" style="text-align : center;direction:rtl;">
                    <p><?php echo $_SESSION['login_success']; ?></p>   
                     
                </div>
               
        <?php endif; ?>
        <?php if(isset($_SESSION['login_failed'])):?>
                <div class="col-md-12 alert alert-danger" style="text-align : center;direction:rtl;">
                    <p><?php echo $_SESSION['login_failed']; ?></p> 
                </div>
                <?php unset($_SESSION['login_failed']); ?>
        <?php endif; ?>
<div class="row" >
	
<div class="sign-form" style="margin-left: auto;vertical-align: baseline; display: block;margin-top:10%;margin-right: auto;margin-bottom: 20%; border:solid grey 0.5px; width: 400px;height: auto;padding-right: 40px;padding-left: 40px;padding-top:60px;border-radius: 5px; "  >
	
<div class="tab-panel">
    <button class="btn btn-dark btn-up">ثبت نام</button>
        <button class="btn btn-dark btn-in">ورود</button>
    </div>
    
    <script>
        
        $(document).ready(function(){
            $(".btn-up").click(function(){
                $(".sign-in").hide();
                $(".sign-up").show();
               // $(".sign-form").css({"margin-top":"9%","margin-bottom:9%"});
            });
        });
        
    </script>
     <script>
        
        $(document).ready(function(){
            $(".btn-in").click(function(){
                $(".sign-in").show();
                $(".sign-up").hide();
               // $(".sign-form").css({"margin-top":"20%","margin-bottom:20%"});
            });
        });
        
    </script>
    
    <div class="tab-cont" style="text-align: right;">
        <div  class="sign-in" style="">
        <form method="post" action="<?php  echo base_url();?>User/login">
            
            <div class="form-group" >
            <label align="right" for="name">نام کاربری</label>
                <input align="right" class="form-control" id="name" type="text" name="username">
            </div>
            
            <div class="form-group">
            <label  align="right">پسورد</label>
                <input align="right"  class="form-control form-input" type="password" name="password">
            </div>
            
            
            <div class="form-group">
            <button class="form-control btn btn-success" name="login_button">ورود</button>
            </div>
            
            
            </form>
            <?php if(isset($_SESSION['login_success'])):?>
                <div 
                 style="text-align : center;direction:rtl;">
                    <p><a onclick="goback()">برگشت به صفحه قبل</a></p>    
                </div>


                <?php unset($_SESSION['login_success']); ?>
        <?php endif; ?>

         <script type="text/javascript">
              function goback(){
                window.history.go(-2);
              }


         </script>

        </div>
        
        <div class="sign-up" style="display: none">

        	<form action="<?php echo base_url(); ?>user/register" method="post"> 
        <div class="form-group">
            <label align="right">ایمیل</label>
            <input class="form-control" align="right" type="email" name="email">
            
            
            
            <div class="form-group">
            <label align="right">نام کاربری</label>
            <input class="form-control" type="text" align="right" name="username">
            
            </div>
            
            <div class="form-group">
            <label align="right">گذر واژه  </label>
            <input class="form-control" type="password" align="right" name="password">
            
            </div>
            
            <div class="form-group">
            <label align="right">نام و نام خوانوادگی</label>
            <input class="form-control" type="text" align="right" name="orginal_name" >
            
            </div>
        
            
            
            <div class="form-group">
            <button class="form-control btn btn-success" name="reg_button">ثبت نام</button>
            </div>
        
        
        </div>
    </form>
    
    </div>












</div>








</div>







</div>










</body>
</html>