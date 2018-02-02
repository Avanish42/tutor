
<!-- Load jQuery -->
        <script src="<?php echo  base_url('assets/tutor/js/jquery-1.11.0.min.js');?>  "></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/locale/af.js"></script>
        <script src="<?php echo  base_url('assets/tutor/js/bootstrap.min.js');?>  "></script>
        <script src="<?php echo  base_url('assets/tutor/js/jquery.owl.carousel.js');?>  "></script>
        <script src="<?php echo  base_url('assets/tutor/js/jquery.appear.min.js');?>  "></script>
        <script src="<?php echo  base_url('assets/tutor/js/perfect-scrollbar.min.js');?>  "></script>
        <script src="<?php echo  base_url('assets/tutor/js/jquery.easing.min.js');?>  "></script>
        <script src="<?php echo  base_url('assets/tutor/js/bootstrap-datetimepicker.js');?>  "></script>
        <script src="<?php echo  base_url('assets/tutor/js/scripts.js');?>  "></script>
        <script src="<?php echo  base_url('assets/tutor/js/jquery.countdown.js');?>"></script>
<!--
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.owl.carousel.js"></script>
<script type="text/javascript" src="js/jquery.appear.min.js"></script>
<script type="text/javascript" src="js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script> -->


<script type="text/javascript">
  $(function(){ 
    //http://hilios.github.io/jQuery.countdown/documentation.html#formatter

    function myFunc(){
         $('#clock').html('<span style="color:#900;">Sorry! Time up</span>');
         $('.textArea').attr('readonly',true);
    }

    $('.textArea').one('keyup',function(){
        $('.jumbotron').show(0);
    var fiveSeconds = new Date().getTime() + myTime;
    $('#clock').countdown(fiveSeconds, function(event) {
      var $this = $(this).html(event.strftime(''
       
        + '<span>%H</span> hr '
        + '<span>%M</span> min '
        + '<span>%S</span> sec'));
    }).on('finish.countdown', myFunc);

    });
   



  });
</script>                     


<script type="text/javascript">


    function htmlbodyHeightUpdate(){
        var height3 = $( window ).height()
        var height1 = $('.nav').height()+50
        height2 = $('.main').height()
        if(height2 > height3){
            $('html').height(Math.max(height1,height3,height2)+10);
            $('body').height(Math.max(height1,height3,height2)+10);
        }
        else
        {
            $('html').height(Math.max(height1,height3,height2));
            $('body').height(Math.max(height1,height3,height2));
        }

    }
    $(document).ready(function () {
    
    
        htmlbodyHeightUpdate()
        $( window ).resize(function() {
            htmlbodyHeightUpdate()
        });
        $( window ).scroll(function() {
            height2 = $('.main').height()
            htmlbodyHeightUpdate()
        });

     $('.datepicker').datepicker();
    });

</script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
        <script src="<?php echo  base_url('assets/tutor/js/jquery.dlmenu.js');?>  "></script>

        <script>
            $(function() {
                $( '#dl-menu' ).dlmenu();
            });
        </script>
