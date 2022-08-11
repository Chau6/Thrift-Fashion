<div class="container bottom-to-top hb-animate-element">
    <div class="footer-column footer-left-cms col-xs-3">
       <aside id="footer-left">
          <div class="html-content">
             <div class="box-content">
                <div id="ttcmsfooter">
                   <div class="ttfooter-logo"><a href="#"><img src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/catalog/demo/banners/footer-logo.png" alt="footer-logo"></a></div>
                   <div class="ttfooter-desc">At vero eos et accusamus et iusto odio dignissimos ducimus, duis faucibus enim vitae</div>
                </div>
             </div>
          </div>
       </aside>
    </div>
    <div class="col-sm-3 footer-column footer-my-account">
       <h5>My Account</h5>
       <ul class="list-unstyled">
          <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/account">My Account</a></li>
          <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/wishlist">Wish List</a></li>
          <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/voucher">Gift Certificates</a></li>
          <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/return/add">Returns</a></li>
          <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/special">Specials</a></li>
       </ul>
    </div>
    <div class="col-xs-3 footer-column footer-extras">
       <h5>Extras</h5>
       <ul class="list-unstyled">
          <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=information/information&amp;information_id=4">About Us</a></li>
          <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=information/information&amp;information_id=6">Delivery Information</a></li>
          <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=information/information&amp;information_id=3">Privacy Policy</a></li>
          <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>
          <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=information/contact">Contact Us</a></li>
       </ul>
    </div>
    <div class="footer-column footer-right-cms col-sm-3">
       <aside id="footer-right">
          <div class="html-content">
             <div class="box-content">
                <div class="contact-us">
                   <h5 class="">Store Information</h5>
                   <ul class="list-unstyled" style="display: block;">
                      <li class="contact-detail col-sm-4">
                         <div class="data address">
                            <i class="material-icons">location_on</i>
                            <div class="contact-title"><span>our location</span></div>
                            <span class="contact-address">Demo Store <br> United States</span>
                         </div>
                      </li>
                      <li class="contact col-sm-4">
                         <div class="data contact">
                            <i class="material-icons">local_phone</i>
                            <div class="contact-title"><span>call us</span></div>
                            <span class="phone">
                            <a href="#">0123456789</a>
                            </span>
                         </div>
                      </li>
                      <li class="fax">
                         <div class="data fax">
                            <i class="material-icons">present_to_all</i>
                            <span class="fax-address">
                            <a href="#">0123-456-7890</a>
                            </span>
                         </div>
                      </li>
                      <li class="email col-sm-4">
                         <div class="data email">
                            <i class="material-icons">mail_outline</i>
                            <div class="contact-title"><span>e-mail</span></div>
                            <span class="email-address">
                            <a href="mailTo:phamphucloi460@gmail.com">phamphucloi460@gmail.com</a>
                            </span>
                         </div>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
       </aside>
    </div>
    <div class="footer-top-cms">
       <aside id="footer-top">
          <div class="newletter-subscribe col-sm-12 hb-animate-element right-to-left hb-in-viewport">
             <div id="newletter-boxes" class="newletter-container">
                <div id="dialog-normal" class="window">
                   <div class="box">
                      <div class="newletter-title col-sm-6">
                         <h2 class="tt-title">Sign Up For Newsletter</h2>
                         <span class="newletter-desc">Sign up with us and get latest deals, offers & updates about store.</span>
                      </div>
                      <div class="box-content newleter-content col-sm-6">
                         <label></label>
                         <div id="form_subscribe">
                            <form name="subscribe" id="subscribe">
                               <input type="text" placeholder="Your email address" value="" name="subscribe_email" id="subscribe_email">
                               <input type="hidden" value="" name="subscribe_name" id="subscribe_name" />
                               <a class="button btn btn-primary" onclick="email_subscribe()"><span>subscribe</span><i class='material-icons'>send</i></a>
                            </form>
                         </div>
                         <div id="notification-normal"></div>
                      </div>
                   </div>
                </div>
             </div>
             <script data-cfasync="false" src="https://opencart.templatetrip.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
                function email_subscribe(){
                    $.ajax({
                            type: 'post',
                            url: 'index.php?route=extension/module/ttnewslettersubscribe/subscribe',
                            dataType: 'html',
                            data:$("#subscribe").serialize(),
                            success: function (html) {
                            try {
                            
                                eval(html);
                            
                            } catch (e) {
                            }
                                
                            }}); 
                    
                    
                }
                function email_unsubscribe(){
                    $.ajax({
                            type: 'post',
                            url: 'index.php?route=extension/module/ttnewslettersubscribe/unsubscribe',
                            dataType: 'html',
                            data:$("#subscribe").serialize(),
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
                $('#subscribe_email').keypress(function(e) {
                        if(e.which == 13) {
                            e.preventDefault();
                            email_subscribe();
                        }
                var name= $(this).val();
                    $('#subscribe_name').val(name);
                    });
                $('#subscribe_email').change(function() {
                var name= $(this).val();
                        $('#subscribe_name').val(name);
                });
                
                });
             </script>
          </div>
       </aside>
    </div>
 </div>