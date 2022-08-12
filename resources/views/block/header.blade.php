<div class="full-header">
    <div class="header-left">
       <div id="logo"><a href="{{route('client.homeindex')}}"><img src="{{asset('images/logo.png')}}" title="Your Store" alt="Your Store" class="img-responsive" style="height: 500px; width:200px; object-fit: cover" /></a> </div>
    </div>
    <div class="header-top-right">
       <div id="top-links" class="nav pull-right">
          <ul class="list-inline">
             <li class="account-nav dropdown header_user_info">
                <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/account" title="Account" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons user">perm_identity</i><span class="ttuserheading">Account</span><i class="material-icons expand-more">expand_more</i></a>
                <ul class="dropdown-menu dropdown-menu-right account-link-toggle">
                   <li><a href="{{route('client.notification')}}"><i class='material-icons ma-user'>perm_identity</i>Register</a></li>
                   <li><a href="{{route('client.news')}}"><i class="material-icons">lock_outline</i>Login</a></li>
                   <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/wishlist" id="wishlist-total" title="Wish List (0)"><i class="material-icons icon-wishlist">favorite_border</i><span class="hidden-sm hidden-md">Wish List (0)</span></a></li>
                </ul>
             </li>
             <li class="ttsearch">
                <div id="search" class="input-group">
                   <span class="ttsearch_button">
                   <i class="material-icons icon-search">search</i>
                   <i class="material-icons icon-close">clear</i>
                   </span>
                   <div class="ttsearchtoggle">
                      <input type="text" name="search" value="" placeholder="Search" class="form-control input-lg" />
                      <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-lg"><i class="material-icons icon-search">search</i></button>
                      </span>
                   </div>
                </div>
             </li>
             <li class="ttcart">
                <div id="cart" class="btn-group">
                   <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="material-icons shopping-cart">shopping_cart</i>
                   <span id="cart-total">0</span>
                   </button>
                   <ul class="dropdown-menu pull-right header-cart-toggle">
                      <li class="cart-btn">
                         <i class="material-icons">close</i>
                      </li>
                      <li>
                         <p class="text-center">Your shopping cart is empty!</p>
                      </li>
                   </ul>
                </div>
             </li>
          </ul>
       </div>
    </div>
    @include('block.menu')
 </div>