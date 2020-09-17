 
  
 



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


        <div class="card-container">
          <div class="card">
            <div class="img img-box">
              <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/c.jpg">
            </div>
          
            <div class="info">
              Title 1
            </div>
          </div>
        </div>


        <div class="card-container">
          <div class="card">
            <div class="img img-box"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/c.jpg"></div>
            <div class="info">
              Title 2
            </div>
          </div>
        </div>


        <div class="card-container">
          <div class="card">
            <div class="img img-box"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/c.jpg"></div>
            <div class="info">
              Title 3
            </div>
          </div>
        </div>


        <div class="card-container">
          <div class="card">
            <div class="img img-box"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/c.jpg"></div>
            <div class="info">
              Title 1
            </div>
          </div>
        </div>


        <div class="card-container">
          <div class="card">
            <div class="img img-box"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/c.jpg"></div>
            <div class="info">
              Title 1
            </div>
          </div>
        </div>


     
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



