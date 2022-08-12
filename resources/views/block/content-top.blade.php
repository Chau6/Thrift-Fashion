<style>

::-webkit-scrollbar {
    width: 10px;
}
 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset -5px 0 10px rgba(0,0,0,0.5); 
    border-radius: 5px;
}
 
::-webkit-scrollbar-thumb {
    border-radius: 20px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
   .swiper-button-prev .material-icons:hover{
      transform: translateX(-20%) !important;
      /* color: white !important; */
      color: white !important;
   }

   .swiper-button-next .material-icons:hover{
      transform: translateX(20%) !important;
      /* color: white !important; */
      color: white !important;
   }

   .icon{
      font-size: 60px !important;
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
             <div class="swiper-button-prev" style="background: transparent"><i class="material-icons icon">chevron_left</i></div>
             <div class="swiper-button-next" style="background: transparent"><i class="material-icons icon">chevron_right</i></div>
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