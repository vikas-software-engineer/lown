<?php

require('connection.php')

?>


<?php require('top.php')?>


<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	

<h1 class="text-center" style="font-weight: bold;font-style: italic;">Ghanta ghar marriage lown</h1>

<div class="container-fluid">
	<a href="addghantaghar.php"><button style="background-color: brown;color:white;">Add lowns</button></a>
  
</div>
<br><br>

<div class="container-fluid col-sm-12 col-lg-12 " style="height: 400px; width: 100%;overflow: scroll; ">

<br><br>
<?php

$sql1 = "select * from ghantaghar";
$rec = mysqli_query($con,$sql1);
?>


<table class="table" style="background-color: #660000;color: white;">
  <tr style="background-color:#330000; ">
    <th style="color: white;">sno</th>
    <th style="color: white;">Images</th>
     <th style="color: white;">Ratting</th>
     <th style="color: white;">Description</th>
    <th style="color: white;">Delete/Edit</th>
  </tr>


  <?php
  $i = 1;
  while ($row = mysqli_fetch_assoc($rec)) {?>

  <tr >
    <th style="color: white;"><?php echo $i?></th>
    <th style="color: white;"><img src="<?php echo '../ghantaghar/image'.$row['image']?>" width = 50px height= 50px>
    </th>
    <th style="color: white;"><?php echo $row['ratting']?></th>
     <th style="color: white;"><?php echo $row['des']?></th>
      
    <th>
      <a href="deleteawasvikas.php?id=<?php echo $row['sno']?>" style="color: white; ">Delete /</a>
      <a href="editawasvikas.php?id=<?php echo $row['sno']?>" style="color: white; ">Edit</a>
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
