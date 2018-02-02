
    <section id="featured-request-teacher" class="featured-request-teacher section" style="padding-top: 140px" >
        <div class="awe-parallax bg-featured-request-teacher"></div>
        <div class="awe-overlay overlay-color-1"></div>
        <div class="container">

    

            <div class="">
                <h1 class="text-center" style="color: #fff" id="clock"></h1>
            </div>  
            
            <div id="accordion" class="panel-group">
            
              
                <!-- PANEL -->
                <div class="panel panel-default">
                    
                       
                        
                        <h2 style="color:#900;padding: 0 15px;margin-bottom: 0;margin-top: 10px;padding-top: 50px;font-size:20px"> <?php echo $result->question; ?>  </h2>
                           
                       
                
                    <div  class="panel-collapse  collapse in">
                       

                       <form style="padding: 20px" method="post" action="<?php echo base_url(); ?>course/submit_answer">
                            <textarea rows="6" required="" class="form-control textArea" name="answer" placeholder="Enter your answer here"></textarea><br>
                            <input type="hidden" name="question_id" value="<?php echo $result->id; ?>">
                            <input type="hidden" name="user_id" value="<?php echo $this->session->id; ?>">
                            <input type="hidden" name="material_id" value="<?php echo $material_id; ?>">

                            <button type="submit" class="btn btn-danger btn-lg" >Submit your answer</button>
                       </form>
                      <script>var myTime = 10000;</script>
                    </div>
                </div>
                <!-- END / PANEL -->


            
            </div>
        </div>
    </section>

    
        
      <!-- SUBJECT PRICE SECTION -->
      
    
                        

   

                        

                        

                        

                        

                        


                        

                        

           