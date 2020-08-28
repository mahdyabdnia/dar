<?php if(isset($_SESSION['logged_in'])):?>

        <?php else: ?>
<?php if(isset($_SESSION['first_login'])): ?>
                <div class="col-md-12 alert alert-success" style="text-align : center;direction:rtl;">
                    <p><?php echo $_SESSION['first_login']; ?></p>  
                    <p><a href="<?php echo base_url(); ?>User">برای ثبت نام یا ورود کلیک  کنید.</a></p> 
                </div>
                <?php unset($_SESSION['first_login']); ?>
               <?php endif; ?> 
        <?php endif; ?>	