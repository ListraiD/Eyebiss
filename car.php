<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
  </head>
  <body>
<div class="container text-center my-3 col-7 mx-auto">
    <h2>Bootstrap 4 Carousel из 3х слайдов в ряду</h2>
     <div id="carousel-1" class="carousel slide multi-carousel" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-1" data-slide-to="1"></li>
        <li data-target="#carousel-1" data-slide-to="2"></li>
        <li data-target="#carousel-1" data-slide-to="3"></li>
        <li data-target="#carousel-1" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="item-third w-100 img-car"><a href="input.php"><img src="img/car1.svg" alt="#"></a></div>
        </div>
        <div class="carousel-item">
          <div class="item-third w-100 img-car"><img src="img/car2.svg" alt="#"></div>
        </div>
        <div class="carousel-item">
          <div class="item-third w-100 img-car"><img src="img/car3.svg" alt="#"></div>
        </div>
        <div class="carousel-item">
          <div class="item-third w-100 img-car"><img src="img/car4.svg" alt="#"></div>
        </div>
        <div class="carousel-item">
          <div class="item-third w-100 img-car"><img src="img/car5.svg" alt="#"></div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Предыдущий</span>
      </a>
      <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Cледующий</span>
      </a>
    </div>
</div>
<style>
body{background-color:#f0f1f3} 
img{max-width:100%;height:auto}  
.carousel-inner .carousel-item.active,.carousel-inner .carousel-item-next,.carousel-inner .carousel-item-prev{display:flex}
.carousel-inner .carousel-item-right.active,.carousel-inner .carousel-item-next{transform:translateX(25%)}
.carousel-inner .carousel-item-left.active,.carousel-inner .carousel-item-prev{transform:translateX(-25%)}
.carousel-inner .carousel-item-right,.carousel-inner .carousel-item-left{transform:translateX(0)}
</style>
<style>
.multi-carousel{overflow:hidden}
.multi-carousel .carousel-control-prev,.multi-carousel .carousel-control-next{background:rgba(255,255,255,0.5);width:5%}
.multi-carousel .carousel-inner{width:310%;left:-80%}
.carousel-inner .carousel-item-right.active,.carousel-inner .carousel-item-next{transform:translateX(75%)}
.carousel-inner .carousel-item-left.active,.carousel-inner .carousel-item-prev{transform:translateX(-75%)}
.carousel-inner .carousel-item-right,.carousel-inner .carousel-item-left{transform:translateX(0)}
.item-third{float:left;width:25%;background-size:cover;height:auto}
</style>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<script>$('#multiCarousel').carousel({
  interval: 10000
})
$('.carousel .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<2;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});
</script>
 <script>$('.multi-carousel .carousel-item').each(function() {
  var next = $(this).next();
  if (!next.length) next = $(this).siblings(':first');
  next.children(':first-child').clone().appendTo($(this));
});
$('.multi-carousel .carousel-item').each(function() {
  var prev = $(this).prev();
  if (!prev.length) prev = $(this).siblings(':last');
  prev.children(':nth-last-child(2)').clone().prependTo($(this));
});</script>
  </body>
</html>