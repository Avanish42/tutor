<!-- PROFILE -->
    
    <section class="profile" style="margin-top: 50px">
        <div class="container">
            <h3 class="md black">Application Form</h3>
            <div class="row">
                <div class="col-md-12 ">
             <?php  error_reporting(0);
     $msg = message();
   if(!empty($msg)){ ?>
       <?php echo message(); ?>
    <?php } ?>
                    <div class="avatar-acount">
                        <div class="changes-avatar">
                            <div class="img-acount ">
                              <?php if(empty(json_decode($profile))) { ?>
                                <img src="<?php echo base_url(); ?>assets/images/no-image.png"  alt="">
                                <?php } ?>
                                <img src="<?php echo base_url(); ?>assets/uploads/<?php echo json_decode($profile)[0]; ?>"  alt="">
                            </div>
                            <div class="choses-file up-file">
                                <input type="file" form="profile" name="profile[]" >
                                <input type="hidden">
                                <a href="#" class="mc-btn btn-style-6">Changes image</a>
                            </div>
                        </div>   
                        <div class="info-acount">
                          
                            
                            <div class="row security" style="border-top:0">
                            
                            
                            
                            <form method="post" id="profile" enctype="multipart/form-data" action="">
                              <div class="row">
    <div class="col-md-12">
                          <div class="col-md-6"><div class="form-group">
      <label for="fisrt name">First Name:</label>
      <input type="text" class="form-control" id="First Name" placeholder="First Name" name="fname" value="<?php echo ($fname); ?>" >
    </div></div>  
                          <div class="col-md-6"><div class="form-group">
      <label for="last name">Last Name:</label>
      <input type="text" class="form-control" id="Last Name" placeholder="Last Name" name="lname"  value="<?php echo ($lname); ?>" >
    </div></div>

  

    <div class="col-md-6"><div class="form-group">
      <label for="last name">Email:</label>
      <input type="email" class="form-control" disabled  name="email" value="<?php echo $email?>"   placeholder="Email">
    </div></div>

   
     <div class="col-md-6"><div class="form-group">
      <label for="gender">Gender</label>
    <select class="form-control" id="gender" name="gender">
    <option <?php selected($gender,"Male") ?> value="Male">Male</option>
    <option <?php selected($gender,"Female") ?> value="Female">Female</option>
    </select>
    </div></div>  
                           <div class="col-md-6"><div class="form-group">
      <label for="last name">D.O.B.</label>
     <input type="date"  class="form-control datepicker" name="dob" value="<?php echo ($dob); ?>" placeholder="D.O.B.(DD/MM/YYYY/)">
    </div></div>
    
    </div></div>
    
    
      <div class="row">
    <div class="col-md-12">
    
    <div class="col-md-12"><div class="form-group">
      <label for="address">Address</label>
    <?php $address = json_decode($address); ?>
   <input type="text" class="form-control" value="<?php echo $address[0]; ?>"  id="add" placeholder="Address1" name="address[]">
    </div></div> 
     
     <div class="col-md-8"><div class="form-group">
     <!-- <label for="address">Address</label>-->
   <input type="text" class="form-control" value="<?php echo $address[1]; ?>"  id="add" placeholder="Address2" name="address[]">
    </div></div> 
     <div class="col-md-4"><div class="form-group">
     <!-- <label for="last name">Contact No.</label>-->
       <input type="text" class="form-control" id="contact" value="<?php echo ($mobile); ?>" placeholder="Mobile Number" name="mobile">
    </div></div>
    
    </div></div>
    
    
    
    <div class="row">
    <div class="col-md-12">
    <div class="col-md-4"><div class="form-group">
      <label for="address">Bachelor Degree</label>
    <?php $bachelor = json_decode($bachelor);  ?>
  <input type="text" class="form-control" value="<?php echo $bachelor[0]; ?>" id="college" placeholder="college Name" name="bachelor[]">
    </div></div>
    
    
     <div class="col-md-4"><div class="form-group">
      <label for="address">Year of Joining</label>
    <input type="text" id="#" class="form-control datepicker" value="<?php echo $bachelor[1]; ?>" name="bachelor[]"  placeholder="Year of Joining">
    </div></div>
    
     <div class="col-md-4"><div class="form-group">
      <label for="address">Year of Passing </label>
   <input type="text" class="form-control datepicker" value="<?php echo $bachelor[2]; ?>" name="bachelor[]" placeholder="Year of Passing if he Passed">
    </div></div>
    
 </div></div>
  <div class="row">
    <div class="col-md-12">
    <div class="col-md-4"><div class="form-group">
      <label for="address">Master Degree</label>
    <?php $master = json_decode($master);  ?>
  <input type="text" class="form-control" id="college" value="<?php echo $master[0]; ?>"  name="master[]" placeholder="college Name" name="college">
    </div></div>
    
    
     <div class="col-md-4"><div class="form-group">
      <label for="address">Year of Joining</label>
    <input type="text"  class="form-control datepicker" value="<?php echo $master[1]; ?>"  name="master[]" placeholder="Year of Joining">
    </div></div>
    
     <div class="col-md-4"><div class="form-group">
      <label for="address">Year of Passing </label>
   <input type="text"  class="form-control datepicker" value="<?php echo $master[2]; ?>"  name="master[]" placeholder="Year of Passing if he Passed">
    </div></div>
    
    </div></div>
    
     <div class="row">
    <div class="col-md-12">
    
    <div class="col-md-6"><div class="form-group">
      <label >Upload Latest Passed Semester's Grade Sheet</label>

      <input type="file" class="form-control" id="file" multiple name="grade[]" placeholder="Upload latest passed semester's grad sheet" >
      <?php $grade = json_decode($grade); if(!empty($grade)) {
        ?>
        <p><small>Files :-
        <?php 
        foreach($grade as $grade) :
        ?>  

       <a style="color:#900;" href="<?php echo base_url(); ?>assets/uploads/<?php echo $grade; ?>" ><?php echo $grade; ?>,</a>

      <?php endforeach; ?> </small></p> <?php   } ?>

    
    </div></div>
    <div class="col-md-6"><div class="form-group">
    <label >Upload Latest Gate/ IES/ Other Exams Scorecard</label>
      <input type="file" class="form-control" name="gate[]" multiple id="file" placeholder="Latest Gate/ IES/ Other Exams Scorecard" >
        <?php $gate = json_decode($gate); if(!empty($gate)) {
        ?>
        <p><small>Files :-
        <?php 
        foreach($gate as $gate) :
        ?>  

       <a style="color:#900;" href="<?php echo base_url(); ?>assets/uploads/<?php echo $gate; ?>" ><?php echo $gate; ?>,</a>

      <?php endforeach; ?> </small></p> <?php   } ?>
    
    </div></div>
   
    
    
    </div></div>
    
    
    <div class="row">
    <div class="col-md-12">
    
    <div class="col-md-12"><div class="form-group">
   
<label >Major Apartment</label>
      <input type="text"  class="form-control" id="college" placeholder="Major Apartment" value="<?php echo ($apartament); ?>"  name="apartament">
    
    </div></div>
    <div class="col-md-12"><div class="form-group">
    <label >About You</label>
       <textarea class="form-control" rows="4" id="comment" name="about" placeholder="About You"><?php echo ($about); ?></textarea>
    
    </div></div>
    
    
    
    </div></div>
    
    <div class="row">
    <div class="col-md-12 ">
    <div class="" style="margin-left:15px;">
    
    <button type="submit" class="btn btn-lg btn-success">Submit</button>
    </div>
    
    </div></div>
    
    
    
    
    
    
    
    
    

                            
                            </form>
                               
                            
                            </div>
                            
                            
                            
                            
                            
                            
                        </div>
                        
                    </div>    
                </div>
                
            </div>
        </div>
    </section>