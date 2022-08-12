<style>
   .swiper-button-prev .material-icons:hover{
      transform: translateX(-20%) !important;
      /* color: white !important; */
      color: white !important;
      background: rgba(255, 255, 255,.5);
      width: 50px;
   }

   .swiper-button-next .material-icons:hover{
      transform: translateX(20%) !important;
      /* color: white !important; */
      color: white !important;
   }
</style>

<div class="slideshow-panel">
    <div class="ttloading-bg ttloader"></div>
    <div class="swiper-viewport">
       <div id="slideshow0" class="slideshow-main swiper-container">
          <div class="swiper-wrapper">
             <div class="swiper-slide text-center">
                <a href="">
                <img src="{{asset('images/breadcrumb-parallax.jpg')}}" alt="slider-01" class="img-responsive" style="background-size: cover; height: 1000px"/>
                </a>
             </div>
             <div class="swiper-slide text-center">
                <a href="">
                <img src="{{asset('images/summer.jpg')}}" alt="slider-02" class="img-responsive" style="background-size: cover; height: 1000px"/>
                </a>
             </div>
          </div>
          <div class="swiper-pagination slideshow0"></div>
          <div class="swiper-pager">
             <div class="swiper-button-prev" style="background: transparent"><i class="material-icons">chevron_left</i></div>
             <div class="swiper-button-next" style="background: transparent"><i class="material-icons">chevron_right</i></div>
          </div>
       </div>
    </div>
 </div>
 <script><!--
    $('#slideshow0').swiper({
        mode: 'horizontal',
        slidesPerView: 1,
        pagination: '.slideshow0',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 0,
        autoplay: 5000,
        autoplayDisableOnInteraction: true,
        loop: true
    });
    -->
 </script>