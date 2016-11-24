            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"><i class="fa fa-institution"></i> <span> Al-kautsar </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
               <?php
                  if(empty(Auth::user()->pic)){
                    $foto = asset("img/avatar.png");
                  } else {
                    $foto = '/img/'.Auth::user()->pic ;
                  }
          ?>
                <img src="{{$foto}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->username}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
          

            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Admin Manage<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: block;">
                      <!-- <li><a href="{{ URL('read')}}"> Admin </a></li> -->
                      <li><a href="{{URL('data_guru')}}"> Data Guru</a></li>
                      <li class="sub_menu" ><a href="{{URL('read_santri')}}">Data santri </a> </li>
                      <li class="sub_menu"><a href="{{URL('pembayaran')}}">Pembayaran</a></li>
                      <li><a href="{{ URL('logout')}}">Sign Out</a></li>
                    </ul>
                  </li>
               </ul>
             </div>
            </div>
            <!-- /sidebar menu -->