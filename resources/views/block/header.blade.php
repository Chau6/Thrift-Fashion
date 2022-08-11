{{-- @yeild('master') --}}

<div class="full-header">
    <div class="header-left">
       <div id="logo"><a href="{{route('client.homeindex')}}"><img src="" title="Your Store" alt="Your Store" class="img-responsive" /></a> </div>
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
    <div class="header-top-left">
       <div class="header-left-cms">
          <aside id="header-left">
             <div class="main-category-list">
                <div class="TT-panel-heading">
                   <span>menu</span>
                   <span class="icon"><i class="material-icons icon-menu">menu</i></span>
                </div>
                <div class="tt-menu horizontal-menu tt-menu-bar" id="tt-menu-9478">
                   <ul class="ul-top-items">
                      <li class="li-top-item ">
                         <a class="a-top-link" href="{{route('client.homeindex')}}">
                         <span>Home</span>
                         </a>
                      </li>
                      
                      {{-- Peluntse --}}
                      <li class="li-top-item mega-menu">
                        <a class="a-top-link" href="{{route('client.product.petuntse',['id'=>'all_petuntse'])}}">
                        <span>Petuntse</span>
                        </a>
                        <div class="mega-menu-container sub-menu-container ">
                           <div class="col-sm-2 sub-item2-content" data-cols="2">
                              <a class="a-mega-second-link" href="{{route('client.product.nilesilt',['id'=>'all_petuntse_1'])}}">
                                 <h4><strong>Nile silt</strong></h4>
                              </a>
                              <div class="sub_item3-content">
                                 <a class="a-mega-third-link" href="{{route('client.product.geopolymer',['id'=>'all_petuntse_2'])}}">
                                    <h5>Geopolymer</h5>
                                 </a>
                                 <a class="a-mega-third-link" href="{{route('client.product.lumicera',['id'=>'all_petuntse_3'])}}">
                                    <h5>Lumicera</h5>
                                 </a>
                                 <a class="a-mega-third-link" href="{{route('client.product.sea_pottery',['id'=>'all_petuntse_4'])}}">
                                    <h5>Sea pottery</h5>
                                 </a>
                              </div>
                           </div>
                           <div class="col-sm-2 sub-item2-content" data-cols="2">
                              <a class="a-mega-second-link" href="{{route('client.product.jesmonite',['id'=>'all_jesmonite'])}}">
                                 <h4><strong>Jesmonite</strong></h4>
                              </a>
                              <div class="sub_item3-content">
                                 <a class="a-mega-third-link" href="{{route('client.product.nilesilt',['id'=>'all_jesmonite_1'])}}">
                                    <h5>Nile silt</h5>
                                 </a>
                                 <a class="a-mega-third-link" href="{{route('client.product.petuntse',['id'=>'all_jesmonite_2'])}}">
                                    <h5>Petuntse</h5>
                                 </a>
                                 <a class="a-mega-third-link" href="{{route('client.product.pitchers',['id'=>'all_jesmonite_3'])}}">
                                    <h5>Pitchers</h5>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </li>

                      {{-- Jean --}}
                      <li class="li-top-item mega-menu">
                        <a class="a-top-link" href="{{route('client.product.jeans',['id'=>"all"])}}">
                        <span>Jeans</span>
                        </a>
                        <div class="flyout-menu-container sub-menu-container">
                           <ul class="ul-second-items">
                              <li class="li-second-items">
                                <a  href="{{route('client.product.jeans',['id'=>"geopolymer"])}}" class="a-second-link a-item">
                                 <span class="a-second-title">Geopolymer</span>
                                 </a>
                              </li>
                              <li class="li-second-items">
                                <a href="{{route('client.product.jeans',['id'=>"petuntse"])}}" class="a-second-link a-item">
                                 <span class="a-second-title">Petuntse</span>
                                 </a>
                              </li>
                              <li class="li-second-items">
                                <a href="{{route('client.product.jeans',['id'=>"gilrs"])}}" class="a-second-link a-item">
                                 <span class="a-second-title">Gilrs</span>
                                 </a>
                              </li>
                              <li class="li-second-items">
                                <a href="{{route('client.product.jeans',['id'=>"kurti"])}}" class="a-second-link a-item">
                                 <span class="a-second-title">Kurti</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>

                      {{-- Dress --}}
                      <li class="li-top-item">
                         <a class="a-top-link" href="{{route('client.product.carrier',['id'=>'all'])}}">
                         <span>Carrier Bag</span>
                         </a>
                      </li>
                   </ul>
                </div>
             </div>
          </aside>
       </div>
    </div>
 </div>