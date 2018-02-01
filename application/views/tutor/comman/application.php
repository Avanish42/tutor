

    <section class="profile">
        <div class="container">
            <h3 class="md black">Application Form</h3>
                         <form method="post" action="<?php echo  base_url('TutorController/saveapplicationForm'); ?>"   enctype="multipart/form-data" >
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="avatar-acount">
                        <div class="changes-avatar">
                            <div class="img-acount ">
                                <img src="images/team-13.jpg"  alt="">
                            </div>
                            <div class="choses-file up-file">
                               <!-- <input type="file"> -->
                                <!-- <input type="hidden"> -->
                                <!-- <a href="#" class="mc-btn btn-style-6"> -->
                                    <!-- <input type="file" name="profile_pic"> -->
                                Changes image
                                <!-- </a> -->
                            </div>
                        </div>
                        <div class="info-acount">
                            <h3 class="md black">User Name</h3>
                            <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>-->


                          <!--  <p style="margin-bottom:100px;">&nbsp; </p>-->


                            <div class="row security">

                            <div class="col-md-12">



                          <input type="text" name="user_id" value="1" hidden>
                              <div class="row">
    <div class="col-md-12">
                          <div class="col-md-6"><div class="form-group">
      <label for="fisrt name">First Name:</label>
      <input type="text" class="form-control" id="First Name" placeholder="First Name" name="first_name">
    </div></div>
                          <div class="col-md-6"><div class="form-group">
      <label for="last name">Last Name:</label>
      <input type="text" class="form-control" id="Last Name" placeholder="Last Name" name="last_name">
    </div></div>

    </div></div>

                              <div class="row">
    <div class="col-md-12">
    <div class="col-md-4"><div class="form-group">
      <label for="last name">Email :</label>
      <input type="text" class="form-control" id="Last Name" placeholder="Email" name="email">
    </div></div>

    <div class="col-md-4"><div class="form-group">
      <label for="last name">Contact No. :</label>
      <input type="text" class="form-control" id="Last Name" placeholder="Contact No." name="contact_no">
    </div></div>

    <div class="col-md-4"><div class="form-group">
      <label for="last name">Whats App No. :</label>
      <input type="text" class="form-control" id="Last Name" placeholder="Whats App No." name="whatapp_no">
    </div></div>

    </div></div>

                              <div class="row">
    <div class="col-md-12">

    <div class="col-md-4"><div class="form-group">
      <label for="last name">Change Password :</label>
      <input type="text" class="form-control" id="Last Name" placeholder="Change Password" name="Change Password">
    </div></div>


    <div class="col-md-4"><div class="form-group" >
      <label for="gender">Gender</label>
    <select class="form-control" id="gender" name='gender'>
    <option valeu='male'>Male</option>
    <option value="female">Female</option>
    </select>
    </div></div>

    <div class="col-md-4"><div class="form-group">
      <label for="last name">D.O.B.</label>
     <input type="text"  class="form-control datepicker" placeholder="D.O.B.(DD/MM/YYYY/)" name='dob'>
    </div></div>



    </div></div>



      <div class="row">
    <div class="col-md-12">

    <div class="col-md-6"><div class="form-group">
      <label for="address">User Name</label>
   <input type="text" class="form-control" id="add" placeholder="User Name" name="user_name">
    </div></div>

     <div class="col-md-6"><div class="form-group">
     <label for="address">Job Timing</label>
   <input type="text" class="form-control" id="add" placeholder="Job Timing" name="job_timming">
    </div></div>


    </div></div>



    <div class="row">
    <div class="col-md-12">
    <div class="col-md-8"><div class="form-group">
      <label for="address">Account Number</label>
  <input type="text" class="form-control" id="college" placeholder="Account Number" name="account_no">
    </div></div>


     <div class="col-md-4"><div class="form-group">
      <label for="address">IFSC Code</label>
    <input type="text" id="#" class="form-control datepicker" placeholder="IFSC_code" name="IFSC_code">
    </div></div>



 </div></div>

 <div class="row">
    <div class="col-md-12">
    <div class="col-md-10"><div class="form-group">
      <label for="address">image</label>
      <!-- <input type='file' name='profile_img' > -->
      <input type="file" name="profile_img"  />

    </div>
    </div>







    <div class="row">
    <div class="col-md-12 ">
    <div class="pull-right" style="margin-right:15px;">
    <!-- <button type="submit" class="btn btn-danger ">Cancel</button> -->
    <button type="submit" class="btn btn-success">Submit</button>
    </div>



    </div></div>











                            </form>
                            </div>


                            </div>






                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- END / PROFILE -->


