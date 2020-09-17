 
  
 



<div class="container-fluid container-part1" >



<div class="row" >
<div class="col-10">
<div id="carouselExampleIndicators" class="carousel slide  " data-ride="carousel" data-interval="1000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active"><a href="#">
      <img src="<?php echo base_url();?>assets/img/14.jpg" class="d-block w-100" alt="..."></a><?php echo base_url(); ?>assets/img/
    </div>
    <div class="carousel-item">
	<a href="#">
      <img src="<?php echo base_url();?>assets/img/12.jpg" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item"><a href="#">
      <img src="<?php echo base_url();?>assets/img/13.jpg" class="d-block w-100" alt="..."></a>
    </div>
  </div>
  <a class="carousel-control-prev carousel-control-prev1" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next carousel-control-next1" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div>

<div class="col-2" >
<div style="width: 230px;height: 400px;background: grey;margin-top: 25px;margin-left: -12px;border-radius: 10px">




</div>

<div style="width: 230px;height: 400px;background: grey;margin-top: 25px;margin-left: -12px;border-radius: 10px">




</div>

</div>


</div>


    
    
    <div class="row brand"  >
    
        <div class="col-6">
            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/1b.jpg">
        </div>
        
        <div class="col-6">
        <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/1b.jpg" >
        
        </div>
        
        
        
    
    
    
    </div>
    
    
    
    <div class="carousel-container">
    <div class="carousel-inner">
      <div class="track">
      
      <?php foreach ($heavy_result as $ch): ?>
        <div class="card-container">
          <div class="card">
            <div class="img img-box">
              <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/<?php echo $ch->good_img; ?>">
            </div>
          
            <div class="info">
             <?php echo $ch->good_name; ?>
            </div>
          </div>
        </div>
     <?php endforeach; ?>

        
      </div>
    </div>
    <div class="nav">
      <button class="prev">
        <i class="material-icons">
        keyboard_arrow_left
        </i>
      </button>
      <button class="next">
        <i class="material-icons">
        keyboard_arrow_right
        </i>
      </button>
    </div>
  </div>

  <br/>
  <br/>



  <div class="carousel-container1">
    <div class="carousel-inner1">
      <div class="track1">
      
      <?php foreach ($cheap_result as $ch): ?>
        <div class="card-container1">
          <div class="card1">
            <div class="img-box img1">
              <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/<?php echo $ch->good_img; ?>">
            </div>
          
            <div class="info1">
             <?php echo $ch->good_name; ?>
            </div>
          </div>
        </div>
     <?php endforeach; ?>

        
      </div>
    </div>
    <div class=" nav1">
      <button class="prev1">
        <i class="material-icons">
        keyboard_arrow_left
        </i>
      </button>
      <button class="next1">
        <i class="material-icons">
        keyboard_arrow_right
        </i>
      </button>
    </div>
  </div>
    
 <style>

@import url('https://fonts.googleapis.com/icon?family=Material+Icons');
.carousel-container {
  width: 1280px;
  margin: 50px auto;
  min-height: 200px;
  position: relative;
}
@media screen and (max-width: 768px) {
  .carousel-container {
    width: 80%;
  }
}
@media screen and (max-width: 1024px) {
  .carousel-container {
    width: 85%;
  }
}
.carousel-container .carousel-inner {
  overflow: hidden;
}
.carousel-container .track {
  display: inline-flex;
  transition: transform 0.5s;
}
.carousel-container .card-container {
  width: 259px;
  flex-shrink: 0;
  height: 300px;
  padding-right: 15px;
  box-sizing: border-box;
}
.carousel-container .card-container .card {
  width: 100%;
  height: 100%;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 10px;
  display: flex;
  flex-direction: column;
}
.nav button {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  border: 1px solid #aaa;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
}
.nav .prev {
  left: -30px;
  display: none;
}
.nav .prev.show {
  display: block;
}
.nav .next {
  right: -30px;
}
.nav .next.hide {
  display: none;
}

.card > * {
  flex: 1;
}
.card .img {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 30px;
}
.card .info {
  flex-basis: 40px;
  background: #fff;
  color: #000;
  flex-grow: 0;
  padding: 10px;
  box-sizing: border-box;
}


  </style>

  <style>

@import url('https://fonts.googleapis.com/icon?family=Material+Icons');
.carousel-container1 {
  width: 1280px;
  margin: 50px auto;
  min-height: 200px;
  position: relative;
}
@media screen and (max-width: 768px) {
  .carousel-container1 {
    width: 80%;
  }
}
@media screen and (max-width: 1024px) {
  .carousel-container1 {
    width: 85%;
  }
}
.carousel-container1 .carousel-inner1 {
  overflow: hidden;
}
.carousel-container1 .track1 {
  display: inline-flex;
  transition: transform 0.5s;
}
.carousel-container1 .card-container1 {
  width: 259px;
  flex-shrink: 0;
  height: 300px;
  padding-right: 15px;
  box-sizing: border-box;
}
.carousel-container1 .card-container1 .card1{
  width: 100%;
  height: 100%;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 10px;
  display: flex;
  flex-direction: column;
}
.nav1 button {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  border: 1px solid #aaa;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
}
.nav1 .prev1 {
  left: -30px;
  display: none;
}
.nav1 .prev1 .show1{
  display: block;
}
.nav1 .next1 {
  right: -30px;
}
.nav1 .next1 .hide1 {
  display: none;
}

.card1 > * {
  flex: 1;
}
.card1 .img1 {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 30px;
}
.card1 .info1 {
  flex-basis: 40px;
  background: #fff;
  color: #000;
  flex-grow: 0;
  padding: 10px;
  box-sizing: border-box;
}


  </style>

  <script type="text/javascript">
    
const prev  = document.querySelector('.prev');
const next = document.querySelector('.next');

const track = document.querySelector('.track');

let carouselWidth = document.querySelector('.carousel-container').offsetWidth;

window.addEventListener('resize', () => {
  carouselWidth = document.querySelector('.carousel-container').offsetWidth;
})

let index = 0;

next.addEventListener('click', () => {
  index++;
  prev.classList.add('show');
  track.style.transform = `translateX(-${index * carouselWidth}px)`;
  
  if (track.offsetWidth - (index * carouselWidth) < carouselWidth) {
    next.classList.add('hide');
  }
})

prev.addEventListener('click', () => {
  index--;
  next.classList.remove('hide');
  if (index === 0) {
    prev.classList.remove('show');
  }
  track.style.transform = `translateX(-${index * carouselWidth}px)`;
})



  </script>

<script type="text/javascript">
    
const prev1  = document.querySelector('.prev1');
const next1 = document.querySelector('.next1');

const track1 = document.querySelector('.track1');

let carouselWidth1 = document.querySelector('.carousel-container1').offsetWidth;

window.addEventListener('resize', () => {
  carouselWidth1 = document.querySelector('.carousel-container1').offsetWidth;
})

let index1 = 0;

next1.addEventListener('click', () => {
  index1++;
  prev1.classList.add('show1');
  track1.style.transform = `translateX(-${index1 * carouselWidth1}px)`;
  
  if (track1.offsetWidth - (index1 * carouselWidth1) < carouselWidth1) {
    next1.classList.add('hide1');
  }
})

prev1.addEventListener('click', () => {
  index1--;
  next1.classList.remove('hide');
  if (index1 === 0) {
    prev1.classList.remove('show');
  }
  track1.style.transform = `translateX(-${index1 * carouselWidth1}px)`;
})



  </script>

</div>

<br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/>



