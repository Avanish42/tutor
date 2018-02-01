
  <section class="profile">
        <div class="container">
            <h3 class="md black">Profile</h3>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="avatar-acount">
                        <div class="changes-avatar">
                            <div class="img-acount ">
                                <img src="images/team-13.jpg"  alt="">
                            </div>
                            <div class="choses-file up-file">
                                <input type="file">
                                <input type="hidden">
                                <a href="#" class="mc-btn btn-style-6">Changes image</a>
                            </div>
                        </div>
                        <div class="info-acount">
                            <h3 class="md black">User Name</h3>
                            <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>-->


                          <!--  <p style="margin-bottom:100px;">&nbsp; </p>-->


                            <div class="row security">

                            <div class="col-md-12">


                            <form method="post" action="<?php echo  base_url('TutorController/saveProfile'); ?>" >
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

                           <div class="col-md-6"><div class="form-group">
      <label for="gender">Gender</label>
    <select class="form-control" id="gender" name="gender">
    <option value="male">Male</option>
    <option value="female" >Female</option>
    </select>
    </div></div>
                           <div class="col-md-6"><div class="form-group">
      <label for="last name">D.O.B.</label>
     <input type="text"  name='dob' class="form-control datepicker" placeholder="D.O.B.(DD/MM/YYYY/)">
    </div></div>

    </div></div>


      <div class="row">
    <div class="col-md-12">

    <div class="col-md-12"><div class="form-group">
      <label for="address">Address</label>
   <input type="text" class="form-control" id="add" placeholder="Address1" name="address1">
    </div></div>

     <div class="col-md-8"><div class="form-group">
     <!-- <label for="address">Address</label>-->
   <input type="text" class="form-control" id="add" placeholder="Address2" name="address2">
    </div></div>
     <div class="col-md-4"><div class="form-group">
     <!-- <label for="last name">Contact No.</label>-->
       <input type="text" class="form-control" id="contact" placeholder="Mobile Number" name="mobile">
    </div></div>

    </div></div>



    <div class="row">
    <div class="col-md-12">
    <div class="col-md-4"><div class="form-group">
      <label for="address">Bachelor Degree</label>
  <input type="text" class="form-control" id="college" placeholder="bachelor_degree" name="bachelor_degree">
    </div></div>


     <div class="col-md-4"><div class="form-group">
      <label for="address">Year of Joining</label>
    <input type="text" id="#" class="form-control datepicker" placeholder="Year of Joining" name='bachelor_degree_year_join'>
    </div></div>

     <div class="col-md-4"><div class="form-group">
      <label for="address">Year of Passing </label>
   <input type="text" class="form-control datepicker" placeholder="Year of Passing if he Passed" name='bachelor_degree_year_pass'>
    </div></div>

 </div></div>
  <div class="row">
    <div class="col-md-12">
    <div class="col-md-4"><div class="form-group">
      <label for="address">Master Degree</label>
  <input type="text" class="form-control" id="college" placeholder="college Name" name="master_degree">
    </div></div>


     <div class="col-md-4"><div class="form-group">
      <label for="address">Year of Joining</label>
    <input type="text"  class="form-control datepicker" placeholder="master_degree_year_join">
    </div></div>

     <div class="col-md-4"><div class="form-group">
      <label for="address">Year of Passing </label>
   <input type="text"  class="form-control datepicker" placeholder="master_degree_year_pass">
    </div></div>

    </div></div>

     <div class="row">
    <div class="col-md-12">

    <div class="col-md-12"><div class="form-group">
      <label >Upload Latest Passed Semester's Grade Sheet</label>

      <input type="file" class="form-control" id="file" placeholder="Upload latest passed semester's grad sheet"  name="semister_grade_sheet">

    </div></div>
    <div class="col-md-10"><div class="form-group">
    <label >Upload Latest Gate/ IES/ Other Exams Scorecard</label>
      <input type="file" class="form-control" id="file" placeholder="Latest Gate/ IES/ Other Exams Scorecard"  name='other_scorecard'>

    </div></div>
    <div class="col-md-2"><div class="form-group">

 <label >&nbsp;</label>
      <!-- <button type="submit" class="btn btn-primary">Upload File</button> -->


    </div></div>


    </div></div>


    <div class="row">
    <div class="col-md-12">

    <div class="col-md-12"><div class="form-group">

<label >Major Apartment</label>
      <input type="text" class="form-control" id="college" placeholder="Major Apartment" name="major_apartment">

    </div></div>
    <div class="col-md-12"><div class="form-group">
    <label >About You</label>
       <textarea class="form-control" rows="4" id="comment" placeholder="About You" name="about_you"></textarea>

    </div></div>



    </div></div>

    <div class="row">
    <div class="col-md-12 ">
    <div class="pull-right" style="margin-right:15px;">
    <!-- <button type="cancle" class="btn btn-danger ">Cancel</button> -->
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

