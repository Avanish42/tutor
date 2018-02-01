<?php $sidebar_data=side_bar_data();
       //pr($sidebar_data);
        ?>
<aside>
  <nav class="navbar navbar-inverse sidebar navbar-fixed-top" role="navigation">
   <div class="nav-side-menu">
    <div class="brand"><h4>Departments</h4></div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">
        

            <ul id="menu-content" class="menu-content collapse out">

                    <?php 
                   
                    foreach($sidebar_data as $k =>$v) {  ?>
                 <li  data-toggle="collapse" data-target="<?php echo "#".$v['id']; ?>" class="collapsed active">
                  <a href="#"><i class="fa fa-book fa-lg"></i> <?php echo $v['name'] ; ?> <span class="arrow"></span> </a>
                </li>
                 <ul class="sub-menu collapse" id="<?php echo $v['id']; ?>">
                   
                   <?php if(!empty($v['course'])) { foreach($v['course'] as $course){ ?>
                    <li><a href="<?php echo base_url(); ?>course/course_details/<?php echo $course['id'] ?>"><?php echo $course['name'] ?></a></li>

                    <?php }} ?>
                    

                </ul>
                    <?php  }  ?>

             
            </ul>
     </div>
</div>
  </nav>

</aside>
