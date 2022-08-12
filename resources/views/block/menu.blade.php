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