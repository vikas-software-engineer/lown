<?php

require('connection.php')

?>
<?php


if(isset($_POST['submit'])){


  
  $name = $_POST['name'];

  $des = $_POST['des'];




  $sql = "insert into cities (name,des) VALUES ('$name','$des')";
 mysqli_query($con,$sql);
header('location:cities.php');
die();
}



 ?>


<?php require('top.php')?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	
<h1 class="text-center">Our City</h1>
<br><br>
<div class="container">
	


<form method="post">
  
  <br>
  <div class="mb-3">
    <!-- <label for="exampleInputPassword1" class="form-label">Description</label> -->
    <input type="text" class="form-control"  value="Enter New city" name="name" autocomplete="off">
  </div>
   <br>
  <div class="mb-3">
    <!-- <label for="exampleInputPassword1" class="form-label">Description</label> -->
    <input type="text" class="form-control"  value="Enter new city Details" name="des" autocomplete="off">
  </div>

<br>


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>



</div>

<br><br>



	
</div>
</section>
 <!-- footer -->
      <div class="footer">
      <div class="wthree-copyright">
        <p>© 2017 Visitors. All rights reserved | Design by <a href="http://webinnovation.co.in">Wecbinnovation</a></p>
      </div>
      </div>
  <!-- / footer -->
</section>

<!--main content end-->
</section>





<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- gallery -->



<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	</body>

<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/30-05-2017/visitors-demo_Free/217035454/web/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Feb 2021 10:42:19 GMT -->
</html>
