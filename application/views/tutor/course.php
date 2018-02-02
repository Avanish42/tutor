 <!-- ABOUT SECTION -->
    <section id="mc-section-3" class="mc-section-3 section" >
        <div class="container">
            <!-- FEATURE -->
            <?php //pr($result); ?>
      
               <!--  <h1 class="title-box text-capitalize" style="font-size:24px;"><span style="color:#1195e6;">Academic</span>Bro </h1> -->
   
                <div class="row">
                <div class="col-md-12" style="margin-top: 50px">
                 
                    <?php if(!empty($result))  { ?>

                     <h1 class="title-box text-capitalize" style="font-size:24px;"><span style="color:#1195e6;"><?php echo $result->name; ?>

<a href="<?php echo base_url() ?>course/test/<?php echo $result->id; ?>" class="btn btn-success pull-right">TAKE A TEST</a>
                     </h1>

                    <?php echo $result->description; ?>

                   <?php }else {echo "No result found";} ?>


                </div>
                </div>
           
            <!-- END / FEATURE -->
        </div>
    </section>
    <!-- END / ABOUT SECTION  -->
    
    
        
      <!-- SUBJECT PRICE SECTION -->
      
    
                        

                        

                        

                        

                        

                        

                        


                        

                        

                        

                        

                        

           
            <!-- END / FEATURE -->
        </div>
    </section>
    <!-- END / SUBJECT PRICE  SECTION  -->
    