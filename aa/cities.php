<?php

require('connection.php')

?>

<?php require('top.php')?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	
<h1 class="text-center">Our Cities</h1>
<br><br>


<div class="container">
	<a href="addcity.php"><button style="background-color: brown;color:white;">Add Cities</button></a>
</div>

<br><br>
<div>

<div class="container-fluid col-sm-12 col-lg-12  ">
  
<?php

$sql1 = "select * from cities";
$rec = mysqli_query($con,$sql1);
?>


<table class="table" style="background-color: #660000;color: white;position: relative;">
  <tr style="background-color:#330000; ">
    <th style="color: white;position: sticky;">sno</th>
     <th style="color: white;position: sticky;">Name</th>
       <th style="color: white;position: sticky;">Discreption</th>
    <th style="color: white;position: sticky;">Delete/Edit</th>
  </tr>


  <?php
  $i = 1;
  while ($row = mysqli_fetch_assoc($rec)) {?>
  <tr >
      <th style="color: white;"><?php echo $i?></th>
   <th style="color: white;"> <a href="deletecity.php?id=<?php echo $row['sno']?>" style="color: white;"> <?php echo $row['name']?> </a></th>
   

  
   <th style="color: white;"> <a href="deletecity.php?id=<?php echo $row['sno']?>" style="color: white;">  <?php echo $row['des']?> </a></th>

 
    
    
    <th>
      <a href="deletecity.php?id=<?php echo $row['sno']?>" style="color: white;">Delete /</a>
      <a href="editcity.php?id=<?php echo $row['sno']?>" style="color: white;">Edit</a>
    </th>
  </tr>
  <?php
  $i++;   
}?>
</table>





</div>



	
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
