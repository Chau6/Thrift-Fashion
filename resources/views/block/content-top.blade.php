<div class="slideshow-panel">
    <div class="ttloading-bg ttloader"></div>
    <div class="swiper-viewport">
       <div id="slideshow0" class="slideshow-main swiper-container">
          <div class="swiper-wrapper">
             <div class="swiper-slide text-center">
                <a href="#">
                <img src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/banners/slider-01-1903x980.jpg" alt="slider-01" class="img-responsive" />
                </a>
             </div>
             <div class="swiper-slide text-center">
                <a href="#">
                <img src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/banners/slider-02-1903x980.jpg" alt="slider-02" class="img-responsive" />
                </a>
             </div>
          </div>
          <div class="swiper-pagination slideshow0"></div>
          <div class="swiper-pager">
             <div class="swiper-button-prev"><i class="material-icons">chevron_left</i></div>
             <div class="swiper-button-next"><i class="material-icons">chevron_right</i></div>
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
 <div class="newletter-popup">
    <div class="ttpopupclose"></div>
    <div id="boxes" class="newletter-container">
       <div style="" id="dialog" class="window">
          <div id="popup2">
             <span class="b-close"><i class="material-icons icon-close">clear</i></span>
          </div>
          <div class="newslatter-img col-sm-6 col-xs-6"></div>
          <div class="box col-sm-6 col-xs-6">
             <div class="newletter-title">
                <h2>Newsletter</h2>
             </div>
             <div class="box-content newleter-content">
                <label></label>
                <div id="frm_subscribe">
                   <form name="subscribe" id="subscribe_popup">
                      <div class="newslatterpopup-content">
                         <span>Subscribe to our newsletters now and stay up to date with new collections, latest lookbooks and exclusive offers.</span>
                         <div id="notification"></div>
                         <input type="text" value="" name="subscribe_pemail" id="subscribe_pemail" placeholder="Your email address">
                         <input type="hidden" value="" name="subscribe_pname" id="subscribe_pname" />
                         <div class="popup-button">
                            <a class="button btn btn-primary" onclick="email_subscribepopup()"><span>subscribe</span></a>
                         </div>
                      </div>
                   </form>
                   <div class="subscribe-bottom">
                      <input type="checkbox" id="newsletter_popup_dont_show_again">
                      <label for="newsletter_popup_dont_show_again">Don't show this popup again</label>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <script>
          function email_subscribepopup(){
              $.ajax({
                      type: 'post',
                      url: 'index.php?route=extension/module/ttnewslettersubscribe/subscribepopup',
                      dataType: 'html',
                      data:$("#subscribe_popup").serialize(),
                      success: function (html) {
                          //$.cookie('shownewsletter', '1');
                              try {
                              
                                  eval(html);
                              
                              } catch (e) {
                              }
                      }}); 
              
              
          }
          function email_unsubscribepopup(){
              $.ajax({
                      type: 'post',
                      url: 'index.php?route=extension/module/ttnewslettersubscribe/unsubscribe',
                      dataType: 'html',
                      data:$("#subscribe_popup").serialize(),
                      success: function (html) {
                              try {
                      
                                  eval(html);
                              
                              } catch (e) {
                              }
                      }}); 
              $('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); 
              
          }
       </script>
       <script>
          $(document).ready(function() {
          
          if($.cookie('shownewsletter')==1) $('.newletter-popup').hide();
          $('#subscribe_pemail').keypress(function(e) {
                  if(e.which == 13) {
                      e.preventDefault();
                      email_subscribepopup();
                  }
          var name= $(this).val();
              $('#subscribe_pname').val(name);
              });
          $('#subscribe_pemail').change(function() {
          var name= $(this).val();
                  $('#subscribe_pname').val(name);
          });
          
          
              //transition effect
              if($.cookie("shownewsletter") != 1){
          $('.newletter-popup').bPopup();
            
              }
          
          
          $('#newsletter_popup_dont_show_again').on('change', function(){
          if($.cookie("shownewsletter") != 1){   
          $.cookie("shownewsletter",'1')
          }else{
          $.cookie("shownewsletter",'0')
          }
          }); 
          
          
          });
       </script>
    </div>
 </div>