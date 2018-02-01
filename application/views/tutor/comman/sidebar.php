
<aside>
  <nav class="navbar navbar-inverse sidebar navbar-fixed-top" role="navigation">
   <div class="nav-side-menu">
    <div class="brand"><h4>Departments</h4></div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">
        <?php $sidebar_data=side_bar_data();
       //   print_r($sidebar_data);
        ?>

            <ul id="menu-content" class="menu-content collapse out">

                    <?php foreach($sidebar_data as $k =>$v) { ?>
                 <li  data-toggle="collapse" data-target="<?php echo "#".$v."1"; ?>" class="collapsed active">
                  <a href="#"><i class="fa fa-book fa-lg"></i> <?php echo $v;  ?> <span class="arrow"></span> </a>
                </li>
                 <ul class="sub-menu collapse" id="<?php echo $v."1"; ?>">
                    <li class="active"><a href="#">Subject1</a></li>
                    <li><a href="#">Subject2</a></li>
                    <li><a href="#">Subject3</a></li>
                    <li><a href="#">Subject4</a></li>

                </ul>
                    <?php  }   ?>

                <!-- <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#"><i class="fa fa-book fa-lg"></i> Course1 <span class="arrow"></span> </a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class="active"><a href="#">Subject1</a></li>
                    <li><a href="#">Subject2</a></li>
                    <li><a href="#">Subject3</a></li>
                    <li><a href="#">Subject4</a></li>

                </ul>


                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-book fa-lg"></i> Course2 <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="service">
                  <li>Subject1</li>
                  <li>Subject2</li>
                  <li>Subject3</li>
                </ul>


                <li data-toggle="collapse" data-target="#Course3" class="collapsed">
                  <a href="#"><i class="fa fa-book fa-lg"></i> Course3 <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="Course3">
                  <li>Subject1</li>
                  <li>Subject2</li>
                  <li>Subject3</li>
                </ul>

                <li data-toggle="collapse" data-target="#Course4" class="collapsed">
                  <a href="#"><i class="fa fa-book fa-lg"></i> Course4 <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="Course4">
                  <li>Subject1</li>
                  <li>Subject2</li>
                  <li>Subject3</li>
                </ul>

 -->



                 <!--<li>
                  <a href="#">
                  <i class="fa fa-user fa-lg"></i> Profile
                  </a>
                  </li>-->

                 <!--<li>
                  <a href="#">
                  <i class="fa fa-users fa-lg"></i> Users
                  </a>
                </li>-->
            </ul>
     </div>
</div>
  </nav>

</aside>
