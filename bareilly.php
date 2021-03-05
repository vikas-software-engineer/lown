<?php
$con = mysqli_connect("localhost","root","","spn");
?>




<?php require('top.php')?>

<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
    <div class="about-inner blog ">
        <div class="container">   
        <div class="breadcrumbs-sub">
            <ul class="breadcrumbs-custom-path">
                <li class="right-side "><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
                <li class="active ">Bareilly</li>
            </ul>
            </div>
</div>
</div>
</section>
<!-- breadcrumbs //-->

<!-- blog block -->
<section class="w3l-services-6">
  <div class="services-layout ">
    <div class="container">
      <div class="main-titles-head">
        <h3 class="header-name ">
          shahjahnpur  Lowns
        </h3>
        <p class="tiltle-para  ">"an average marriage lawn not bad not too good just ok type".</p>
    </div>



  


    <?php
  $id = $_GET['id'];

$sql1 = "select * from awasvikas";
$rec = mysqli_query($con,$sql1);
?>





    <div class="blog-grids row">
      
  <?php
  while ($row = mysqli_fetch_assoc($rec)) {?>


      <div class="col-lg-4 col-md-6 col-sm-6 blog-grid" id="zoomIn">
          <a href="fahamlown.php">
              <figure><img src="<?php echo 'avasvikas/image'.$row['image']?>"></figure>
          </a>
          <p class="pos-date"><?php echo $row['ratting']?></p>
          <div class="blog-info">
              <h3><a href="fahamlown.php"><?php echo $row['des']?></a> </h3>
              <p class="para mt-3">Neque illo maiores assumenda alias nesciunt eaque inventore.</p>
          </div>
      </div>

      

<?php
  
}?>
  </div>
  <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center mt-sm-5 mt-4 mb-0">
          <li class="page-item disabled">
              <a class="page-link page-prev" href="#previous" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link page-number" href="#1">1</a></li>
          <li class="page-item active"><a class="page-link page-number" href="#2">2</a></li>
          <li class="page-item"><a class="page-link page-number" href="#3">3</a></li>
          <li class="page-item"><a class="page-link page-next" href="#next">→</a></li>
      </ul>
  </nav>
    </div>
  </div>
</section>
<!-- //blog block -->
<?php require('footer.php')?>