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
                   {{-- <li class="ttlanguage">
                      <div class="pull-left">
                         <form action="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=common/language/language" method="post" enctype="multipart/form-data" id="form-language">
                            <div class="btn-group">
                               <button class="btn btn-link">
                               <img src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/catalog/language/en-gb/en-gb.png" alt="English" title="English">
                               <span class="hidden-xs hidden-sm hidden-md">Language</span></button>
                               <ul>
                                  <li>
                                     <button class="btn btn-link btn-block language-select" type="button" name="en-gb"><img src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/catalog/language/en-gb/en-gb.png" alt="English" title="English" /> English</button>
                                  </li>
                                  
                               </ul>
                            </div>
                            <input type="hidden" name="code" value="" />
                            <input type="hidden" name="redirect" value="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=common/home" />
                         </form>
                      </div>
                   </li>
                   <li class="ttcurrency">
                      <div class="pull-left">
                         <form action="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=common/currency/currency" method="post" enctype="multipart/form-data" id="form-currency">
                            <div class="btn-group">
                               <button class="btn btn-link"> <strong>$</strong> <span class="hidden-xs hidden-sm hidden-md">Currency</span></button>
                               <ul>
                                  <li>
                                     <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button>
                                  </li>
                                  <li>
                                     <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button>
                                  </li>
                                  <li>
                                     <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ US Dollar</button>
                                  </li>
                               </ul>
                            </div>
                            <input type="hidden" name="code" value="" />
                            <input type="hidden" name="redirect" value="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=common/home" />
                         </form>
                      </div>
                   </li> --}}
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
                        <a class="a-top-link" href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20">
                        <span>Petuntse</span>
                        </a>
                        <div class="mega-menu-container sub-menu-container ">
                           <div class="col-sm-2 sub-item2-content" data-cols="2">
                              <a class="a-mega-second-link" href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20_26">
                                 <h4><strong>Nile silt</strong></h4>
                              </a>
                              <div class="sub_item3-content">
                                 <a class="a-mega-third-link" href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20_26_85">
                                    <h5>Geopolymer</h5>
                                 </a>
                                 <a class="a-mega-third-link" href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20_26_60">
                                    <h5>Lumicera</h5>
                                 </a>
                                 <a class="a-mega-third-link" href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20_26_59">
                                    <h5>Petuntse</h5>
                                 </a>
                                 <a class="a-mega-third-link" href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20_26_61">
                                    <h5>Sea pottery</h5>
                                 </a>
                              </div>
                           </div>
                           <div class="col-sm-2 sub-item2-content" data-cols="2">
                              <a class="a-mega-second-link" href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20_92">
                                 <h4><strong>Jesmonite</strong></h4>
                              </a>
                              <div class="sub_item3-content">
                                 <a class="a-mega-third-link" href="{{route('client.nilestill')}}">
                                    <h5>Nile silt</h5>
                                 </a>
                                 <a class="a-mega-third-link" href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20_92_96">
                                    <h5>Petuntse</h5>
                                 </a>
                                 <a class="a-mega-third-link" href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20_92_93">
                                    <h5>Pitchers</h5>
                                 </a>
                                 <a class="a-mega-third-link" href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20_92_94">
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
                                 <i class="material-icons chevron-right">chevron_right</i>
                                 </a>
                                 <div class="flyout-third-items">
                                    <ul class="ul-third-items">
                                       <li class="li-third-items">
                                         <a href="{{route('client.product.jeans',['id'=>"bonechina"])}}" class="a-third-link">  <span class="a-third-title">Bone china</span></a>
                                       </li>
                                    </ul>
                                 </div>
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
                         <a class="a-top-link" href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=67">
                         <span>Dress</span>
                         </a>
                      </li>
                   </ul>
                </div>
             </div>
          </aside>
       </div>
    </div>
 </div>