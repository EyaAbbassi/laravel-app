@extends('master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div id="sg-carousel" class="carousel slide carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1" class=""></li>
				<li data-target="#carousel" data-slide-to="2" class=""></li>
			</ol>
			<!-- Carousel items -->
			<div class="carousel-inner carousel-zoom">
				<div class="item active"><img class="img-responsive" src="{{ asset('images/mall2.jpg') }}" alt="">
				  <div class="carousel-caption  animated slideInLeft ">
					<h1  data-animation="animated zoomInLeft" class="cap-txt ">We are amazing</h1>
					<p data-animation="animated bounceInDown">learn more about us by just click the botton below !</p>
				  </div>
				</div>
			   <div class="item"><img class="img-responsive" src="{{ asset('images/Mall1.jpg') }}" alt="">
				  <div class="carousel-caption" >
						<h1 data-animation="animated zoomInLeft" class="cap-txt">We are innovative</h1>
					<p data-animation="animated bounceInDown">Join us to start your digital marketing right now, right here !</p>
				  </div>
				</div>
				<div class="item"><img class="img-responsive" src="{{ asset('images/mall3.jpg') }}" alt="">
				  <div class="carousel-caption animated slideInLeft">
					<h1 data-animation="animated zoomInLeft" class="cap-txt">You are welcomed</h1>
					<p data-animation="animated bounceInDown">Contact us for more details</p>
				  </div>
				</div>
			<!-- Carousel nav -->
			<a class="carousel-control left" href="#sg-carousel" data-slide="prev">‹</a>
			<a class="carousel-control right" href="#sg-carousel" data-slide="next">›</a>
		</div> 
	</div>
 <section class="search-sec">
    <div class="container">
        <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-5 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Enter Mall name">
                        </div>
                       
                        <div class="col-lg-5 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Select location</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                            <button type="button" class="btn wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
</div>
<!-- -->
<div class="wrapper">
        <div class="card">
            <input type="checkbox" id="card1" class="more" aria-hidden="true">
            <div class="content">
                <div class="front" style="background-image: url('{{ asset('images/stax.jpg') }}')">
                    <div class="inner">
                        <h2>Stax coffee</h2>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            
                        </div>
                        <div> <i class="fa fa-map-marker" aria-hidden="true"></i> Saudi Arabia</div>

                        <label for="card1" class="button" aria-hidden="true">
                            Details
                        </label>
                    </div>
                </div>
                <div class="back">
                    <div class="inner">
                      
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, accusamus.</p>
                         
                        </div>
                        <div class="location">
                        <i class="fa fa-map-marker" aria-hidden="true"></i> Saudi Arabia</div>
                       
                        <label for="card1" class="button return" aria-hidden="true">
                            <i class="fas fa-arrow-left"></i>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <input type="checkbox" id="card2" class="more">
            <div class="content">
                <div class="front" style="background-image: url('{{ asset('images/restaurant.jpg') }}')">
                    <div class="inner">
                        <h2>Restaurant</h2>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div> <i class="fa fa-map-marker" aria-hidden="true"></i> Saudi Arabia</div>

                        <label for="card2" class="button" aria-hidden="true">
                            Details
                        </label>
                    </div>
                </div>
                <div class="back">
                 <div class="inner">
                      
                      <div class="description">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, accusamus.</p>
                       
                      </div>
                      <div class="location">
                      <i class="fa fa-map-marker" aria-hidden="true"></i> Saudi Arabia</div>
                     
                      <label for="card2" class="button return" aria-hidden="true">
                          <i class="fas fa-arrow-left"></i>
                      </label>
                  </div>
                </div>
            </div>
        </div>
        <div class="card">
            <input type="checkbox" id="card3" class="more">
            <div class="content">
                <div class="front" style="background-image: url('{{ asset('images/shop.jpg') }}')">
                    <div class="inner">
                        <h2>Shop</h2>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div> <i class="fa fa-map-marker" aria-hidden="true"></i> Saudi Arabia</div>

                        <label for="card3" class="button" aria-hidden="true">
                            Details
                        </label>
                    </div>
                </div>
                <div class="back">
                <div class="inner">
                      
                      <div class="description">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, accusamus.</p>
                       
                      </div>
                      <div class="location">
                      <i class="fa fa-map-marker" aria-hidden="true"></i> Saudi Arabia</div>
                     
                      <label for="card3" class="button return" aria-hidden="true">
                          <i class="fas fa-arrow-left"></i>
                      </label>
                  </div>
                </div>
            </div>
        </div>
        <div class="card">
            <input type="checkbox" id="card4" class="more">
            <div class="content">
                <div class="front" style="background-image: url('{{ asset('images/kids.jpg') }}')">
                    <div class="inner">
                        <h2>Kids park</h2>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div> <i class="fa fa-map-marker" aria-hidden="true"></i> Saudi Arabia</div>

                        <label for="card4" class="button" aria-hidden="true">
                            Details
                        </label>
                    </div>
                </div>
                <div class="back">
                <div class="inner">
                      
                      <div class="description">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, accusamus.</p>
                       
                      </div>
                      <div class="location">
                      <i class="fa fa-map-marker" aria-hidden="true"></i> Saudi Arabia</div>
                     
                      <label for="card4" class="button return" aria-hidden="true">
                          <i class="fas fa-arrow-left"></i>
                      </label>
                  </div>
                  </div>
            </div>
        </div>
    </div>
<style>
#sg-carousel {
    position: relative;
    height: 85vh;
}
#sg-carousel .carousel-inner .item {
    height: 85vh;
}
.carousel-caption{top:50%;}
.carousel-caption h1 {
    font-size: 6em;
    font-weight: bold;
    margin: 0;
    padding: 0;
}
#sg-carousel .carousel-control.left {
    top: 48%;
}
#sg-carousel .carousel-control.right {
    top: 48%;
}
.uppr-txt {
    text-transform: uppercase;
    color: #fff;
    font-size: 35px;
}
#sg-carousel .carousel-control.left,
#sg-carousel .carousel-control.right {
    background-image: none;
    background-repeat: no-repeat;
    opacity: 0;
    text-shadow: none;
    transition: all 0.8s ease 0s;
}
.carousel-control {
    bottom: 0;
    color: #fff;
    font-size: 20px;
    left: 0;
    opacity: 0;
    position: absolute;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
    top: 0;
    width: auto;
    transition: all 0.8s ease 0s;
}
.carousel-inner {
    box-shadow: 2px 6px 21px;
   }
.fa-angle-right,
.fa-angle-left {
    font-size: 80px;
}
#sg-carousel:hover .carousel-control.left {
    left: 38px;
    transition: all .2s ease 0;
}
#sg-carousel:hover .carousel-control.right {
    right: 38px;
    transition: all .2s ease 0;
}
#sg-carousel:hover .carousel-control.left,
#sg-carousel:hover .carousel-control.right {
    opacity: 1;
}
.carousel-inner > .item > a > img,
.carousel-inner > .item > img,
.img-responsive,
.thumbnail a > img,
.thumbnail > img {
 opacity: 0.7;
    display: block;
    height: auto;
    max-width: 100%;
    width: 100%;
}
.item.active img {
    transition: transform 5000ms linear 0s;
    transform: scale(1.05, 1.05);
}
.carousel-fade .carousel-inner .active {
    opacity: 1;
}
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
    opacity: 1;
}
.carousel-fade .carousel-control {
    z-index: 2;
    font-size: 80px;
}
.carousel-caption {
    left: 60%;
    padding-bottom: 5%;
    right: 0;
    text-align: left;
}

.carousel-caption h1 {
    font-family: raavi;
    font-size: 60px;
    font-weight: 600;
    line-height: 18px;
}
.carousel-caption > p {
    font-size: 30px;
    color: #fff;
}
.carousel-caption > a {
    text-transform: uppercase;
    color: #fff;
    background: #2A9D8F;
    padding: 6px 12px;
}

.carousel-indicators li {
    background-color: #2A9D8F;
    border-radius: 10px;
    cursor: pointer;
    display: inline-block;
    height: 12px;
    margin: 1px;
    text-indent: -999px;
    width: 12px;
    border: 0;
}
.carousel-indicators .active {
    background-color: #041132;
    height: 12px;
    margin: 0;
    width: 12px;
    border: 0;
}
#sg-carousel h1 {
    animation-delay: 1s;
	margin-bottom:25px;
}
#sg-carousel p {
    animation-delay: 2s;
}
#sg-carousel button {
    animation-delay: 3s;
	margin-top:25px;
}
@media all and (transform-3d),
(-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
        opacity: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
        opacity: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}

/*search box css start here*/
.search-sec{
    padding: 2rem;
}
.search-slt{
    display: block;
    width: 100%;
    font-size: 0.875rem;
    line-height: 1.5;
    color: rgb(244, 162, 97);
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
.wrn-btn{
    width: 100%;
    font-size: 16px;
    font-weight: 400;
    text-transform: capitalize;
    height: calc(3rem + 2px) !important;
    border-radius:0;
    background : rgb(244, 162, 97);

}

@media (min-width: 992px){
    .search-sec{
        position: relative;
        top: -114px;
        background: rgba(233, 196, 106, 0.51);
    }
}

@media (max-width: 992px){
    .search-sec{
        background: #1A4668;
    }
}
/** */
* {
	 box-sizing: border-box;
}

 .wrapper {
	 display: flex;
	 flex-flow: row wrap;
	 justify-content: center;
}
 .card {
	 width: 420px;
	 height: 340px;
	 margin: 1em;
	 perspective: 1500px;
}
 .card .content {
	 position: relative;
	 width: 100%;
	 height: 100%;
	 transform-style: preserve-3d;
	 transition: transform 0.8s cubic-bezier(0.75, 0, 0.85, 1);
}
 .more {
	 display: none;
}
 .more:checked ~ .content {
	 transform: rotateY(180deg);
}
 .front, .back {
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 backface-visibility: hidden;
	 transform-style: preserve-3d;
	 border-radius: 6px;
}
 .front .inner, .back .inner {
	 height: 100%;
	 display: grid;
	 padding: 1.5em;
	 transform: translateZ(80px) scale(0.94);
}
 .front {
	 background-color: #fff;
	 background-size: cover;
	 background-position: center center;
}
 .front:after {
	 content: '';
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 display: block;
	 border-radius: 6px;
	 backface-visibility: hidden;
	 background: linear-gradient(40deg, rgba(67, 138, 243, 0.7), rgba(255, 242, 166, 0.7));
}
 .front .inner {
	 grid-template-rows: 5fr 1fr 1fr 2fr 1fr;
	 justify-items: center;
}
 .front h2 {
	 grid-row: 2;
	 margin-bottom: 0.3em;
	 text-transform: uppercase;
	 letter-spacing: 3px;
	 color: #fff;
	 font-weight: 500;
	 text-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
}
 .front .rating {
	 grid-row: 3;
	 color: rgba(255, 255, 255, 0.8);
	 font-size: 14px;
	 display: flex;
	 flex-flow: row nowrap;
}
 .front .rating i {
	 margin: 0 1px;
}
 .back {
	 transform: rotateY(180deg);
	 background-color: #fff;
	 border: 2px solid #f0f0f0;
}
 .back .inner {
	 grid-template-rows: 1fr 2fr 1fr 2fr 14fr 1fr 1fr;
	 grid-template-columns: repeat(4, auto);
	 grid-column-gap: 0.8em;
	 justify-items: center;
}
 .back .info {
	 position: relative;
	 display: flex;
	 align-items: center;
	 color: #355cc9;
	 grid-row: 3;
}
 .back .info:not(:first-of-type):before {
	 content: '';
	 position: absolute;
	 left: -0.9em;
	 height: 18px;
	 width: 1px;
	 background-color: #ccc;
}
 .back .info span {
	 font-size: 2em;
	 font-weight: 700;
}
 .back .info i {
	 font-size: 1.2em;
}
 .back .info i:before {
	 background: linear-gradient(40deg, #355cc9, #438af3);
	 -webkit-text-fill-color: transparent;
	 -webkit-background-clip: text;
}
 .back .info .icon {
	 margin-left: 0.3em;
}
 .back .info .icon span {
	 display: block;
	 margin-top: -0.25em;
	 font-size: 0.8em;
	 font-weight: 600;
	 white-space: nowrap;
}
 .back .description {
	 grid-row: 5;
	 grid-column: -1;
	 font-size: 0.86em;
	 border-radius: 5px;
	 font-weight: 600;
	 line-height: 1.4em;
	 overflow: auto;
	 color: #355cc9;
	 padding-right: 10px;
}
 .back .location, .back .price {
	 font-weight: 600;
	 color: #355cc9;
	 grid-row: 1;
	 font-size: 0.86em;
}
 .back .location {
	 grid-column: 0.3333333333;
	 justify-self: left;
}
 .back .price {
	 grid-column: -3;
	 justify-self: right;
}
 .back .button {
	 grid-column: -1;
	 justify-self: center;
}
 .button {
	 grid-row: -1;
	 text-transform: uppercase;
	 letter-spacing: 1px;
	 font-weight: 600;
	 cursor: pointer;
	 display: block;
	 padding: 0 1.5em;
	 height: 3em;
	 line-height: 2.9em;
	 min-width: 3em;
	 background-color: transparent;
	 border: solid 2px #fff;
	 color: #fff;
	 border-radius: 4px;
	 text-align: center;
	 left: 50%;
	 backface-visibility: hidden;
	 transition: 0.3s ease-in-out;
	 text-shadow: 0 0 6px rgba(0, 0, 0, 0.3);
}
 .button:hover {
	 background-color: #fff;
	 box-shadow: 0 0 50px rgba(0, 0, 0, 0.5);
	 text-shadow: none;
	 color: #355cc9;
}
 .button.return {
	 line-height: 3em;
	 color: #355cc9;
	 border-color: #355cc9;
	 text-shadow: none;
}
 .button.return:hover {
	 background-color: #355cc9;
	 color: #fff;
	 box-shadow: none;
}
 ::-webkit-scrollbar {
	 width: 5px;
}
 ::-webkit-scrollbar-track {
	 background: #f1f1f1;
}
 ::-webkit-scrollbar-thumb {
	 background: #859ddf;
}
 ::-webkit-scrollbar-thumb:hover {
	 background: #355cc9;
}
 

</style>
<script>
(function( $ ) {

//Function to animate slider captions 
function doAnimations( elems ) {
//Cache the animationend event in a variable
var animEndEv = 'webkitAnimationEnd animationend';

elems.each(function () {
var $this = $(this),
$animationType = $this.data('animation');
$this.addClass($animationType).one(animEndEv, function () {
$this.removeClass($animationType);
});
});
}

//Variables on page load 
var $myCarousel = $('#sg-carousel'),
$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

//Initialize carousel 
$myCarousel.carousel();

//Animate captions in first slide on page load 
doAnimations($firstAnimatingElems);

//Pause carousel  
$myCarousel.carousel('pause');
//Other slides to be animated on carousel slide event 
$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});  
   
	
})(jQuery);	

</script>
@endsection 