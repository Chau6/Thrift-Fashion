@extends('master')

@section('content')
<div class="header-content-title">
    <div style="background-image: url({{asset('images/breadcrumb-parallax.jpg')}}); background-position: 50% 78.1106%;" data-source-url="image/catalog/demo/banners/breadcrumb-parallax.jpg" class="parallex"></div>
 </div>
 <div class="content-top">
    @include('block.content-top')
 </div>
 <div class="tt-home">
    <div id="content" class="col-sm-12">
       <div class="html-content">
          @include('block.html-content')
       </div>
       {{-- <div class="html-content">
          <div class="box-content">
             <div id="ttcmsservices">
                <div class="container">
                   <div class="ttcmstopservice-content">
                      <div class="ttsupport service">
                         <div class="service-icon-background">
                            <div class="ttsupport_img service-icon"></div>
                         </div>
                         <div class="service-content">
                            <div class="service-title">Worldwide Delivery</div>
                            <div class="service-desc">Lorem Ipsum Dolor Sit co.</div>
                         </div>
                      </div>
                      <div class="ttshare service">
                         <div class="service-icon-background">
                            <div class="ttshare_img service-icon"></div>
                         </div>
                         <div class="service-content">
                            <div class="service-title">Gift Vouchers</div>
                            <div class="service-desc">Lorem Ipsum Dolor Sit co.</div>
                         </div>
                      </div>
                      <div class="ttsaving service">
                         <div class="service-icon-background">
                            <div class="ttsaving_img service-icon"></div>
                         </div>
                         <div class="service-content">
                            <div class="service-title">24*7 Support</div>
                            <div class="service-desc">Lorem Ipsum Dolor Sit co.</div>
                         </div>
                      </div>
                      <div class="ttsupport service">
                         <div class="service-icon-background">
                            <div class="ttgreat_img service-icon"></div>
                         </div>
                         <div class="service-content">
                            <div class="service-title">Great Savings</div>
                            <div class="service-desc">Lorem Ipsum Dolor Sit co.</div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div> --}}
       <div class="ttproduct-main bottom-to-top hb-animate-element">
          <div class="container">
             <div class="row main-tab">
                <div class="TTProduct-Tab TT-product-carousel products-list">
                   <div class="box-heading tthometab-title">
                      <h3>Trending Products</h3>
                   </div>
                   <div id="TTPTab-0" class="tab-box-heading">
                      <ul class="nav nav-tabs">
                         <li>
                            <a href="#tab-featured-0" data-toggle="tab">
                               <h3 class="tab-title">Featured</h3>
                            </a>
                         </li>
                         <li>
                            <a href="#tab-latest-0" data-toggle="tab">
                               <h3 class="tab-title">Latest</h3>
                            </a>
                         </li>
                         <li>
                            <a href="#tab-bestseller-0" data-toggle="tab">
                               <h3 class="tab-title">Bestseller</h3>
                            </a>
                         </li>
                      </ul>
                   </div>
                   <div class="tab-content">
                      <div id="tab-featured-0" class="tab-pane">
                         <div id="owl1" class="products-carousel">
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="image">
                                     <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=42"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/01-380x494.jpg" title="aliquam quaerat voluptatem" alt="aliquam quaerat voluptatem" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/01--380x494.jpg" title="aliquam quaerat voluptatem" alt="aliquam quaerat voluptatem" /> </a>
                                     <div class="rating">
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=42">aliquam quaerat voluptatem</a></h4>
                                        <div class="price"> $122.00
                                           <span class="price-tax">Without tax: $100.00</span> 
                                        </div>
                                        <div class="ttproducthover">
                                           <div class="ttcart">
                                              <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('42')">
                                              <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                              </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                           </div>
                                           <div class="button-group">
                                              <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('42');"><i class="material-icons icon-wishlist">favorite</i>
                                              <span title="Add to wishlist">Add to wishlist</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-compare" title="Add to Compare" onclick="compare.add('42');"><i class="material-icons icon-exchange">equalizer</i>
                                              <span title="Add to Compare">Add to Compare</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=42')"><i class="material-icons quick_view_icon">visibility</i>
                                              <span title=""></span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="image">
                                     <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=28"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/04-380x494.jpg" title="aspetur autodit autfugit" alt="aspetur autodit autfugit" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/04--380x494.jpg" title="aspetur autodit autfugit" alt="aspetur autodit autfugit" /> </a> 
                                     <div class="sale-icon">Sale</div>
                                     <span class="percent">-80%</span>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=28">aspetur autodit autfugit</a></h4>
                                        <div class="price"> <span class="price-new">$26.00</span> <span class="price-old">$122.00</span>
                                           <span class="price-tax">Without tax: $20.00</span> 
                                        </div>
                                        <div class="ttproducthover">
                                           <div class="ttcart">
                                              <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('28')">
                                              <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                              </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                           </div>
                                           <div class="button-group">
                                              <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('28');"><i class="material-icons icon-wishlist">favorite</i>
                                              <span title="Add to wishlist">Add to wishlist</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-compare" title="Add to Compare" onclick="compare.add('28');"><i class="material-icons icon-exchange">equalizer</i>
                                              <span title="Add to Compare">Add to Compare</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=28')"><i class="material-icons quick_view_icon">visibility</i>
                                              <span title=""></span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="image">
                                     <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=41"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/05-380x494.jpg" title="magni dolores eosquies" alt="magni dolores eosquies" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/05--380x494.jpg" title="magni dolores eosquies" alt="magni dolores eosquies" /> </a>
                                     <div class="rating">
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=41">magni dolores eosquies</a></h4>
                                        <div class="price"> $122.00
                                           <span class="price-tax">Without tax: $100.00</span> 
                                        </div>
                                        <div class="ttproducthover">
                                           <div class="ttcart">
                                              <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('41')">
                                              <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                              </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                           </div>
                                           <div class="button-group">
                                              <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('41');"><i class="material-icons icon-wishlist">favorite</i>
                                              <span title="Add to wishlist">Add to wishlist</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-compare" title="Add to Compare" onclick="compare.add('41');"><i class="material-icons icon-exchange">equalizer</i>
                                              <span title="Add to Compare">Add to Compare</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=41')"><i class="material-icons quick_view_icon">visibility</i>
                                              <span title=""></span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="image">
                                     <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=46"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/17-380x494.jpg" title="voluptas nulla pariatur" alt="voluptas nulla pariatur" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/17--380x494.jpg" title="voluptas nulla pariatur" alt="voluptas nulla pariatur" /> </a> 
                                     <div class="sale-icon">Sale</div>
                                     <span class="percent">-98%</span>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=46">voluptas nulla pariatur</a></h4>
                                        <div class="price"> <span class="price-new">$26.00</span> <span class="price-old">$1,202.00</span>
                                           <span class="price-tax">Without tax: $20.00</span> 
                                        </div>
                                        <div class="ttproducthover">
                                           <div class="ttcart">
                                              <button class="btn-cart disabled" type="button" title="Out Of Stock" onclick="">
                                              <i class="material-icons">add</i><span class="out of stock">Out Of Stock
                                              </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                           </div>
                                           <div class="button-group">
                                              <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('46');"><i class="material-icons icon-wishlist">favorite</i>
                                              <span title="Add to wishlist">Add to wishlist</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-compare" title="Add to Compare" onclick="compare.add('46');"><i class="material-icons icon-exchange">equalizer</i>
                                              <span title="Add to Compare">Add to Compare</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=46')"><i class="material-icons quick_view_icon">visibility</i>
                                              <span title=""></span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="image"> <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=40"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/19-380x494.jpg" title="voluptate velit esse" alt="voluptate velit esse" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/19--380x494.jpg" title="voluptate velit esse" alt="voluptate velit esse" /> </a></div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=40">voluptate velit esse</a></h4>
                                        <div class="price"> $123.20
                                           <span class="price-tax">Without tax: $101.00</span> 
                                        </div>
                                        <div class="ttproducthover">
                                           <div class="ttcart">
                                              <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('40')">
                                              <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                              </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                           </div>
                                           <div class="button-group">
                                              <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('40');"><i class="material-icons icon-wishlist">favorite</i>
                                              <span title="Add to wishlist">Add to wishlist</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-compare" title="Add to Compare" onclick="compare.add('40');"><i class="material-icons icon-exchange">equalizer</i>
                                              <span title="Add to Compare">Add to Compare</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=40')"><i class="material-icons quick_view_icon">visibility</i>
                                              <span title=""></span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div id="tab-latest-0" class="tab-pane">
                         <div id="owl2" class="products-carousel">
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="image"> <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=49"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/20-380x494.jpg" title="suscipit laboriosam nisi" alt="suscipit laboriosam nisi" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/20--380x494.jpg" title="suscipit laboriosam nisi" alt="suscipit laboriosam nisi" /> </a></div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=49">suscipit laboriosam nisi</a></h4>
                                        <div class="price"> $241.99
                                           <span class="price-tax">Without tax: $199.99</span> 
                                        </div>
                                        <div class="ttproducthover">
                                           <div class="ttcart">
                                              <button class="btn-cart disabled" type="button" title="Out Of Stock" onclick="">
                                              <i class="material-icons">add</i><span class="out of stock">Out Of Stock
                                              </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                           </div>
                                           <div class="button-group">
                                              <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('49');"><i class="material-icons icon-wishlist">favorite</i>
                                              <span title="Add to wishlist">Add to wishlist</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-compare" title="Add to Compare" onclick="compare.add('49');"><i class="material-icons icon-exchange">equalizer</i>
                                              <span title="Add to Compare">Add to Compare</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=49')"><i class="material-icons quick_view_icon">visibility</i>
                                              <span title=""></span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="image"> <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=48"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/18-380x494.jpg" title="voluptas sit aspernatur" alt="voluptas sit aspernatur" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/18--380x494.jpg" title="voluptas sit aspernatur" alt="voluptas sit aspernatur" /> </a></div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=48">voluptas sit aspernatur</a></h4>
                                        <div class="price"> $122.00
                                           <span class="price-tax">Without tax: $100.00</span> 
                                        </div>
                                        <div class="ttproducthover">
                                           <div class="ttcart">
                                              <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('48')">
                                              <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                              </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                           </div>
                                           <div class="button-group">
                                              <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('48');"><i class="material-icons icon-wishlist">favorite</i>
                                              <span title="Add to wishlist">Add to wishlist</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-compare" title="Add to Compare" onclick="compare.add('48');"><i class="material-icons icon-exchange">equalizer</i>
                                              <span title="Add to Compare">Add to Compare</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=48')"><i class="material-icons quick_view_icon">visibility</i>
                                              <span title=""></span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="image">
                                     <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=47"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/03-380x494.jpg" title="aliquam quat voluptatem" alt="aliquam quat voluptatem" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/03--380x494.jpg" title="aliquam quat voluptatem" alt="aliquam quat voluptatem" /> </a> 
                                     <div class="sale-icon">Sale</div>
                                     <span class="percent">-20%</span>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=47">aliquam quat voluptatem</a></h4>
                                        <div class="price"> <span class="price-new">$98.00</span> <span class="price-old">$122.00</span>
                                           <span class="price-tax">Without tax: $80.00</span> 
                                        </div>
                                        <div class="ttproducthover">
                                           <div class="ttcart">
                                              <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('47')">
                                              <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                              </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                           </div>
                                           <div class="button-group">
                                              <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('47');"><i class="material-icons icon-wishlist">favorite</i>
                                              <span title="Add to wishlist">Add to wishlist</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-compare" title="Add to Compare" onclick="compare.add('47');"><i class="material-icons icon-exchange">equalizer</i>
                                              <span title="Add to Compare">Add to Compare</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=47')"><i class="material-icons quick_view_icon">visibility</i>
                                              <span title=""></span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="image">
                                     <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=46"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/17-380x494.jpg" title="voluptas nulla pariatur" alt="voluptas nulla pariatur" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/17--380x494.jpg" title="voluptas nulla pariatur" alt="voluptas nulla pariatur" /> </a> 
                                     <div class="sale-icon">Sale</div>
                                     <span class="percent">-98%</span>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=46">voluptas nulla pariatur</a></h4>
                                        <div class="price"> <span class="price-new">$26.00</span> <span class="price-old">$1,202.00</span>
                                           <span class="price-tax">Without tax: $20.00</span> 
                                        </div>
                                        <div class="ttproducthover">
                                           <div class="ttcart">
                                              <button class="btn-cart disabled" type="button" title="Out Of Stock" onclick="">
                                              <i class="material-icons">add</i><span class="out of stock">Out Of Stock
                                              </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                           </div>
                                           <div class="button-group">
                                              <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('46');"><i class="material-icons icon-wishlist">favorite</i>
                                              <span title="Add to wishlist">Add to wishlist</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-compare" title="Add to Compare" onclick="compare.add('46');"><i class="material-icons icon-exchange">equalizer</i>
                                              <span title="Add to Compare">Add to Compare</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=46')"><i class="material-icons quick_view_icon">visibility</i>
                                              <span title=""></span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="image"> <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=45"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/11-380x494.jpg" title="quis autem veleuminium" alt="quis autem veleuminium" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/11--380x494.jpg" title="quis autem veleuminium" alt="quis autem veleuminium" /> </a></div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=45">quis autem veleuminium</a></h4>
                                        <div class="price"> $2,000.00
                                           <span class="price-tax">Without tax: $2,000.00</span> 
                                        </div>
                                        <div class="ttproducthover">
                                           <div class="ttcart">
                                              <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('45')">
                                              <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                              </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                           </div>
                                           <div class="button-group">
                                              <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('45');"><i class="material-icons icon-wishlist">favorite</i>
                                              <span title="Add to wishlist">Add to wishlist</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-compare" title="Add to Compare" onclick="compare.add('45');"><i class="material-icons icon-exchange">equalizer</i>
                                              <span title="Add to Compare">Add to Compare</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=45')"><i class="material-icons quick_view_icon">visibility</i>
                                              <span title=""></span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div id="tab-bestseller-0" class="tab-pane">
                         <div id="owl3" class="products-carousel">
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="image">
                                     <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=41"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/05-380x494.jpg" title="magni dolores eosquies" alt="magni dolores eosquies" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/05--380x494.jpg" title="magni dolores eosquies" alt="magni dolores eosquies" /> </a>
                                     <div class="rating">
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=41">magni dolores eosquies</a></h4>
                                        <div class="price"> $122.00
                                           <span class="price-tax">Without tax: $100.00</span> 
                                        </div>
                                        <div class="ttproducthover">
                                           <div class="ttcart">
                                              <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('41')">
                                              <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                              </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                           </div>
                                           <div class="button-group">
                                              <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('41');"><i class="material-icons icon-wishlist">favorite</i>
                                              <span title="Add to wishlist">Add to wishlist</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-compare" title="Add to Compare" onclick="compare.add('41');"><i class="material-icons icon-exchange">equalizer</i>
                                              <span title="Add to Compare">Add to Compare</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=41')"><i class="material-icons quick_view_icon">visibility</i>
                                              <span title=""></span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="image"> <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=40"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/19-380x494.jpg" title="voluptate velit esse" alt="voluptate velit esse" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/19--380x494.jpg" title="voluptate velit esse" alt="voluptate velit esse" /> </a></div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=40">voluptate velit esse</a></h4>
                                        <div class="price"> $123.20
                                           <span class="price-tax">Without tax: $101.00</span> 
                                        </div>
                                        <div class="ttproducthover">
                                           <div class="ttcart">
                                              <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('40')">
                                              <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                              </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                           </div>
                                           <div class="button-group">
                                              <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('40');"><i class="material-icons icon-wishlist">favorite</i>
                                              <span title="Add to wishlist">Add to wishlist</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-compare" title="Add to Compare" onclick="compare.add('40');"><i class="material-icons icon-exchange">equalizer</i>
                                              <span title="Add to Compare">Add to Compare</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=40')"><i class="material-icons quick_view_icon">visibility</i>
                                              <span title=""></span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="image">
                                     <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=28"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/04-380x494.jpg" title="aspetur autodit autfugit" alt="aspetur autodit autfugit" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/04--380x494.jpg" title="aspetur autodit autfugit" alt="aspetur autodit autfugit" /> </a>
                                     <div class="sale-icon">Sale</div>
                                     <span class="percent">-80%</span>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=28">aspetur autodit autfugit</a></h4>
                                        <div class="price"> <span class="price-new">$26.00</span> <span class="price-old">$122.00</span> <span class="price-tax">Without tax: $20.00</span> </div>
                                        <div class="ttproducthover">
                                           <div class="ttcart">
                                              <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('28')">
                                              <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                              </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                           </div>
                                           <div class="button-group">
                                              <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('28');"><i class="material-icons icon-wishlist">favorite</i>
                                              <span title="Add to wishlist">Add to wishlist</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-compare" title="Add to Compare" onclick="compare.add('28');"><i class="material-icons icon-exchange">equalizer</i>
                                              <span title="Add to Compare">Add to Compare</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=28')"><i class="material-icons quick_view_icon">visibility</i>
                                              <span title=""></span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="image">
                                     <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=42"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/01-380x494.jpg" title="aliquam quaerat voluptatem" alt="aliquam quaerat voluptatem" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/01--380x494.jpg" title="aliquam quaerat voluptatem" alt="aliquam quaerat voluptatem" /> </a>
                                     <div class="rating">
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=42">aliquam quaerat voluptatem</a></h4>
                                        <div class="price"> $122.00
                                           <span class="price-tax">Without tax: $100.00</span> 
                                        </div>
                                        <div class="ttproducthover">
                                           <div class="ttcart">
                                              <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('42')">
                                              <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                              </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                           </div>
                                           <div class="button-group">
                                              <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('42');"><i class="material-icons icon-wishlist">favorite</i>
                                              <span title="Add to wishlist">Add to wishlist</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-compare" title="Add to Compare" onclick="compare.add('42');"><i class="material-icons icon-exchange">equalizer</i>
                                              <span title="Add to Compare">Add to Compare</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=42')"><i class="material-icons quick_view_icon">visibility</i>
                                              <span title=""></span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="image"> <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=45"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/11-380x494.jpg" title="quis autem veleuminium" alt="quis autem veleuminium" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/11--380x494.jpg" title="quis autem veleuminium" alt="quis autem veleuminium" /> </a></div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=45">quis autem veleuminium</a></h4>
                                        <div class="price"> $2,000.00
                                           <span class="price-tax">Without tax: $2,000.00</span> 
                                        </div>
                                        <div class="ttproducthover">
                                           <div class="ttcart">
                                              <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('45')">
                                              <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                              </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                           </div>
                                           <div class="button-group">
                                              <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('45');"><i class="material-icons icon-wishlist">favorite</i>
                                              <span title="Add to wishlist">Add to wishlist</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-compare" title="Add to Compare" onclick="compare.add('45');"><i class="material-icons icon-exchange">equalizer</i>
                                              <span title="Add to Compare">Add to Compare</span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                              <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=45')"><i class="material-icons quick_view_icon">visibility</i>
                                              <span title=""></span>
                                              <span class="loading"><i class="material-icons">cached</i></span>
                                              </button>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="customNavigation">
                         <a class="btn prev customNavigation_prev">prev</a>
                         <a class="btn next customNavigation_next">next</a>
                      </div>
                      <script>
                         jQuery(document).ready(function($){
                         $(".item-countdown").each(function(){
                         var date = $(this).data('date');
                         $(this).lofCountDown({
                          TargetDate:date,
                          DisplayFormat:"<div>%%D%% <span>Days</span></div><div>%%H%% <span>Hours</span></div><div>%%M%% <span>Min</span></div><div>%%S%% <span>Sec</span></div>"
                         });
                         });
                         });   
                      </script>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <script>
          $('.TTProduct-Tab > .tab-box-heading > ul > li:first-child').addClass('active');
          $('.TTProduct-Tab > .tab-content > .tab-pane:first-child').addClass('active');
          var tttrendingproducts = $(".TTProduct-Tab .products-carousel.owl-carousel");
              tttrendingproducts.owlCarousel({
              items:4,
              itemsDesktop : [1170,4],
              itemsDesktopSmall : [991,4],
              itemsTablet: [767,2],
              itemsMobile : [480,1],
              navigation: true,
              pagination: false
              });
       </script>
       <div class="html-content">
          <div class="box-content">
             <div id="ttcmsparallax">
                <div class="parallex" data-source-url="image/catalog/demo/banners/parallax-bg.jpg" style="background-image:url('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/catalog/demo/banners/parallax-bg.jpg'); background-position: 50% 65.8718%;">
                   <div class="content-wrap">
                      <div class="parallex-content">
                         <div class="subtitle">exclusive collection</div>
                         <div class="title">get 25% off</div>
                         <div id="popup_toggle">
                            <div class="videoimg">
                               <div class="image-hover"></div>
                               <span class="play-icone"><i class="material-icons play"> play_arrow </i><i class="material-icons pause"> pause </i></span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="popup_overlay">
                   <div class="popup" id="popupVid">
                      <a class="popup_close">X</a>
                      <div class="wrapper_inner">
                         <video id="my-video">
                            <source src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/catalog/demo/banners/Video.mp4" type="video/mp4">
                            <source src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/catalog/demo/banners/Video.webm" type="video/webm">
                         </video>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="special-carousel products-list">
          <div class="container bottom-to-top hb-animate-element">
             <div class="row">
                <div class="box-heading">
                   <h3>Special Products</h3>
                </div>
                <div class="special-items products-carousel">
                   <div class="product-layouts">
                      <div class="product-thumb transition">
                         <div class="image">
                            <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=47"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/03-298x387.jpg" title="aliquam quat voluptatem" alt="aliquam quat voluptatem" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/03--298x387.jpg" title="aliquam quat voluptatem" alt="aliquam quat voluptatem" /> </a> 
                            <div class="sale-icon">Sale</div>
                            <span class="percent">-20%</span>
                         </div>
                         <div class="thumb-description">
                            <div class="caption">
                               <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=47">aliquam quat voluptatem</a></h4>
                               <div class="price"> <span class="price-new">$98.00</span> <span class="price-old">$122.00</span>
                                  <span class="price-tax">Ex Tax: $80.00</span> 
                               </div>
                               <div class="ttproducthover">
                                  <div class="ttcart">
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('47')">
                                     <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                  </div>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('47');"><i class="material-icons icon-wishlist">favorite</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare" onclick="compare.add('47');"><i class="material-icons icon-exchange">equalizer</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=47')"><i class="material-icons quick_view_icon">visibility</i>
                                     <span title=""></span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="product-layouts">
                      <div class="product-thumb transition">
                         <div class="image">
                            <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=28"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/04-298x387.jpg" title="aspetur autodit autfugit" alt="aspetur autodit autfugit" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/04--298x387.jpg" title="aspetur autodit autfugit" alt="aspetur autodit autfugit" /> </a> 
                            <div class="sale-icon">Sale</div>
                            <span class="percent">-80%</span>
                         </div>
                         <div class="thumb-description">
                            <div class="caption">
                               <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=28">aspetur autodit autfugit</a></h4>
                               <div class="price"> <span class="price-new">$26.00</span> <span class="price-old">$122.00</span>
                                  <span class="price-tax">Ex Tax: $20.00</span> 
                               </div>
                               <div class="ttproducthover">
                                  <div class="ttcart">
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('28')">
                                     <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                  </div>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('28');"><i class="material-icons icon-wishlist">favorite</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare" onclick="compare.add('28');"><i class="material-icons icon-exchange">equalizer</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=28')"><i class="material-icons quick_view_icon">visibility</i>
                                     <span title=""></span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="product-layouts">
                      <div class="product-thumb transition">
                         <div class="image">
                            <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=43"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/09-298x387.jpg" title="perspiciatis unde omnis" alt="perspiciatis unde omnis" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/09--298x387.jpg" title="perspiciatis unde omnis" alt="perspiciatis unde omnis" /> </a> 
                            <div class="sale-icon">Sale</div>
                            <span class="percent">-50%</span>
                         </div>
                         <div class="thumb-description">
                            <div class="caption">
                               <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=43">perspiciatis unde omnis</a></h4>
                               <div class="price"> <span class="price-new">$8.00</span> <span class="price-old">$14.00</span>
                                  <span class="price-tax">Ex Tax: $5.00</span> 
                               </div>
                               <div class="ttproducthover">
                                  <div class="ttcart">
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('43')">
                                     <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                  </div>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('43');"><i class="material-icons icon-wishlist">favorite</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare" onclick="compare.add('43');"><i class="material-icons icon-exchange">equalizer</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=43')"><i class="material-icons quick_view_icon">visibility</i>
                                     <span title=""></span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="product-layouts">
                      <div class="product-thumb transition">
                         <div class="image">
                            <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=33"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/16-298x387.jpg" title="tempora incidunt utlabore" alt="tempora incidunt utlabore" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/16--298x387.jpg" title="tempora incidunt utlabore" alt="tempora incidunt utlabore" /> </a> 
                            <div class="sale-icon">Sale</div>
                            <span class="percent">-90%</span>
                         </div>
                         <div class="thumb-description">
                            <div class="caption">
                               <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=33">tempora incidunt utlabore</a></h4>
                               <div class="price"> <span class="price-new">$26.00</span> <span class="price-old">$242.00</span>
                                  <span class="price-tax">Ex Tax: $20.00</span> 
                               </div>
                               <div class="ttproducthover">
                                  <div class="ttcart">
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('33')">
                                     <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                  </div>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('33');"><i class="material-icons icon-wishlist">favorite</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare" onclick="compare.add('33');"><i class="material-icons icon-exchange">equalizer</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=33')"><i class="material-icons quick_view_icon">visibility</i>
                                     <span title=""></span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="product-layouts">
                      <div class="product-thumb transition">
                         <div class="image">
                            <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=46"> <img class="image_thumb" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/17-298x387.jpg" title="voluptas nulla pariatur" alt="voluptas nulla pariatur" /> <img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/17--298x387.jpg" title="voluptas nulla pariatur" alt="voluptas nulla pariatur" /> </a> 
                            <div class="sale-icon">Sale</div>
                            <span class="percent">-98%</span>
                         </div>
                         <div class="thumb-description">
                            <div class="caption">
                               <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=46">voluptas nulla pariatur</a></h4>
                               <div class="price"> <span class="price-new">$26.00</span> <span class="price-old">$1,202.00</span>
                                  <span class="price-tax">Ex Tax: $20.00</span> 
                               </div>
                               <div class="ttproducthover">
                                  <div class="ttcart">
                                     <button class="btn-cart disabled" type="button" title="Out Of Stock" onclick="">
                                     <i class="material-icons">add</i><span class="out of stock">Out Of Stock
                                     </span><span class="loading"><i class="material-icons">cached</i></span></button>
                                  </div>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist" onclick="wishlist.add('46');"><i class="material-icons icon-wishlist">favorite</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare" onclick="compare.add('46');"><i class="material-icons icon-exchange">equalizer</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-quickview" type="button" title="" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=46')"><i class="material-icons quick_view_icon">visibility</i>
                                     <span title=""></span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <script>
          // product Carousel
          
            var ttspecialproduct = $('.special-items.products-carousel').owlCarousel({
                          items : 5, //1 items above 1000px browser width
                          nav :true,
                          dots : false,
                          loop: false,
                          autoplay:false,	
                          rtl:false,
                          responsive: {
                              0:{
                                  items:1
                              },
                              360:{
                                  items:2
                              },
                              768:{
                                  items:3
                              },
                              992:{
                                  items:4
                              },
                              1400:{
                                  items:5
                              }
                          }
                      });
          
       </script>
       <div class="html-content">
          <div class="box-content">
             <div class="subbanner-container">
                <div class="container">
                   <div class="row">
                      <div class="subbanner col-xs-6">
                         <a href="http://#">
                         <img src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/catalog/demo/banners/subbanner-1.jpg" alt="subbanner-1" width="630" height="390"></a>
                         <div class="description">
                            <div class="tt-desc">
                               <div class="ttinnerdesc">
                                  <div class="title">stylish shop</div>
                                  <div class="subtitle">sale flat 50% off</div>
                                  <div class="button"><a class="buy_now" href="#">shop now</a></div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="subbanner col-xs-6">
                         <a href="http://#">
                         <img src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/catalog/demo/banners/subbanner-2.jpg" alt="subbanner-2" width="630" height="390"></a>
                         <div class="description">
                            <div class="tt-desc">
                               <div class="ttinnerdesc">
                                  <div class="title">be stylus</div>
                                  <div class="subtitle">sale on big brands</div>
                                  <div class="button"><a class="buy_now" href="#">new trends</a></div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div id="blog_latest_new_home" class="bottom-to-top hb-animate-element">
          @include('block.blog_latest_new_home')
       </div>
       <div class="brand-carousel">
          @include('block.brand-carousel')
       </div>
       <script><!--
          $('#carousel0').swiper({
              mode: 'horizontal',
              autoplay: 3000,
              //pagination: '.carousel0',
              pagination: false,
              paginationClickable: false,
              prevButton: '.swiper-button-prev',
              nextButton: '.swiper-button-next',
              
              
           // Default parameters
            slidesPerView: 5,
            
            // Responsive breakpoints
            breakpoints: {
                  // when window width is <= 1200px
                  1199: {
                    slidesPerView: 4
                  },
                   // when window width is <= 991px
                  991: {
                    slidesPerView: 3
                  },
                   // when window width is <= 767px
                  767: {
                    slidesPerView: 3
                  },
                  // when window width is <= 480px
                  480: {
                    slidesPerView: 2
                  }
             }
          
          });
          -->
       </script>
       <script>
          var Tawk_API={},$_Tawk_LoadStart=new Date();
          (function(){
          var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
          s1.async=true;
          s1.src='https://embed.tawk.to/5fa664720a68960861bc9308/default';
          s1.charset='UTF-8';
          s1.setAttribute('crossorigin','*');
          s0.parentNode.insertBefore(s1,s0);
          })();
       </script>
    </div>
 </div>
@endsection