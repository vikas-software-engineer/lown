<?php
$con = mysqli_connect("localhost","root","","spn");
?>

<?php require('top.php') ?>
<section class="w3l-hero-headers-9">
  <div class="slide text-center header11" data-selector="header11">
      <div class="container">
          <div class="banner-text ">
              <h5 class=" ">Wedding Lawn Area <br> & <br>Rental Service</h5>
              <p class=" ">With the continuous support and sincere efforts put by our experienced professionals, we have been able to provide our clients the best quality Wedding Lawn Area Rental Service.</p>
              <a href="#S1" class=""></a>
              <a href="#s1" class="btn logo-button top-margin">View Our Lowns</a>
            
          </div>
      </div>

  </div>
</section>
<section class="w3l-teams-15" >
	<div class="team-single-main ">
		<div class="container">

		<div  class="row">
				<div class="column2 image-text col-lg-6">
					<div class="nature-row ">
						<h5><a href="blog.html" >
							Enjoy Our Delicious Food</a></h5>
					<p class="para  text ">
						Mollitia placeat modi explicabo voluptatum corporis unde Dicta, provident
						Rem adipisci Mollitia placeat modi.</p>
					</div>
					<div class="nature-row ">
						<h5><a href="blog.html">
							All Different Types </a></h5>
					<p class="para  text ">
						Mollitia placeat modi explicabo voluptatum corporis unde Dicta, provident
						Rem adipisci Mollitia placeat modi.</p>
					</div>
					<div class="nature-row ">
						<h5><a href="blog.html">Experience new flavors</a></h5>
					<p class="para  text ">
						Mollitia placeat modi explicabo voluptatum corporis unde Dicta, provident
						Rem adipisci Mollitia placeat modi.</p>
					</div>
				</div>
			<div class="column2 image-text col-lg-6">
				<img src="assets/images/img1.jpg" alt="product" class="img-responsive ">
			</div>
		</div>
		</div>
		</div>
	</div>
</section>

<section class="w3l-specification-6" >
    <div class="specification-layout ">
        <div class="container">
            <div class="main-titles-head ">
                <h3 class="header-name " id="s1">
					     Wellcome our Shahjahanpur
                </h3>
                <p class="tiltle-para  ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic fuga sit illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
            </div>






<?php

$sql = "select * from cities";
$rec = mysqli_query($con,$sql);
?>






         


                  <div class="call-grids-w3 d-grid">

         

         <?php

  while ($row = mysqli_fetch_assoc($rec)) {?>

      
                      
  
                        <div class="grids-1  grids-effect-2">



                               
                            <div class="color-white">
                                <span class="fa fa-snowflake-o"></span>
                                
                            <h4><a href="bareilly.php?id=<?php echo $row['sno']?>" style="color: black; font-weight:bold"> <?php echo $row['name']?></a></h4>
                            <p class="para"><?php echo $row['des']?></p>

                        </div>


                    </div>
                                                                           
<?php  
}?>


                      </div>


  


 









                  </div>
        </div>
</section>

<section class="w3l-call-to-action_9">
    <div class="call-w3">
        <div class="container text-center">
            <div class="title-head">
            <h3>Make For Best <br>
                Relationship</h3>
            <p > its a opportunity to raise your spiritual levels to new heights , its a experience which makes your Soul pure </p>
        </div>
          
              </div>
        </div>
    </div>
</section>

<section class="w3l-covers-18">
        <div class="covers-main ">
            <div class="container">
              <div class="main-titles-head ">
                <h3 class="header-name ">
                  Our Services
                </h3>
                <p class="tiltle-para  ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic fuga sit illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
            </div>
                <div class="gallery-image row">
                  <div class="img-box col-lg-4 col-md-6 col-sm-6">
                    <img src="assets/images/cat1.jpg" alt="product" class="img-responsive ">
                    <h5 class="my-2"><a href="about.html">Wedding Caterers</a></h5>
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p>
                  </div>
                  <div class="img-box col-lg-4 col-md-6 col-sm-6">
                    <img src="assets/images/ph3.png" alt="product" class="img-responsive ">
                    <h5 class="my-2"><a href="about.html">Wedding Photofraphers</a></h5>
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p>
                  </div>
                  <div class="img-box col-lg-4 col-md-6 col-sm-6">
                    <img src="assets/images/card1.jpg" alt="product" class="img-responsive ">
                    <h5 class="my-2"><a href="about.html">Wedding Cards</a></h5>
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p>
                    </div>
                    <div class="img-box col-lg-4 col-md-6 col-sm-6">
                      <img src="assets/images/dj1.jpg" alt="product" class="img-responsive ">
                      <h5 class="my-2"><a href="about.html">wedding Dj</a></h5>
                      <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p>
                    </div>
                    <div class="img-box col-lg-4 col-md-6 col-sm-6">
                      <img src="assets/images/je1.jpg" alt="product" class="img-responsive ">
                      <h5 class="my-2"><a href="about.html">Wedding Jewellery </a></h5>
                      <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p>
                    </div>
                    <div class="img-box col-lg-4 col-md-6 col-sm-6">
                      <img src="assets/images/pandit.png" alt="product" class="img-responsive ">
                      <h5 class="my-2"><a href="about.html">pandit</a></h5>
                      <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

<section class="w3l-clients" id="client">
    <div class="main-w3 text-center">
        <div class="container">
            <div class="form-right-inf"> 
                <div class="form-inner-cont">
                  <div class="main-titles-head ">
                    <h3 class="header-name white ">
                       Book your Marriadge Lown
                    </h3>
                    <p class="tiltle-para  "> its a opportunity to raise your spiritual levels to new heights , its a experience which makes your Soul pure </p>
                </div>
                    <form action="https://demo.w3layouts.com/demos_new/template_demo/30-04-2020/cutlery-libearty-demo_Free/492116884/web/search-results.html" method="post" class="signin-form">	
                        <div class="row book-form">
                            <div class="form-input col-lg-6 col-md-6">
                                <input type="text" name="" placeholder="Enter Your Name" required="">
                            </div>
                            <div class="form-input col-lg-6 col-md-6 mt-md-0 mt-3">
                               <input type="email" name="" placeholder="Email" required="">
                                 
                           </div>
                           <div class="form-input col-md-4 mt-3">
                               <input type="date" name="" placeholder="Date" required="">
                           </div>
                           <div class="form-input col-md-4 mt-3">
                            <select class="selectpicker">
                                <option>Time</option>
                                <option>9:00 AM</option>
                                <option>10:00 AM</option>
                                <option>11:00 AM</option>
                                <option>12:00 PM</option>
                                <option>1:00 PM</option>
                                <option>2:00 PM</option>
                                <option>3:00 PM</option>
                                <option>4:00 PM</option>
                                <option>5:00 PM</option>
                                <option>6:00 PM</option>
                                <option>7:00 PM</option>
                                <option>8:00 PM</option>
                              </select>
                              
                                 
                           </div>
                            <div class="form-input col-md-4  mt-3">
                               <select class="selectpicker">
                                   <option>Adults</option>
                                   <option>01</option>
                                   <option>02</option>
                                   <option>03</option>
                                   <option>04</option>
                                 </select>
                                 
                            </div><!-- 
                            <div class="form-input col-md-4 mt-3">
                               <select class="selectpicker">
                                   <option>Children</option>
                                   <option>01</option>
                                   <option>02</option>
                                   <option>03</option>
                                   <option>04</option>
                                 </select>
                                 
                            </div> -->
                            <div class="form-input col-md-4  mt-3">
                                <select class="selectpicker">
                                    <option>Table</option>
                                    <option>Table 1</option>
                                    <option>Table 2</option>
                                    <option>Table 3</option>
                                    <option>Table 4</option>
                                    <option>Table 5</option>
                                    <option>Table 6</option>
                                    <option>Table 7</option>
                                    <option>Table 8</option>
                                    <option>Table 9</option>
                                    <option>Table 10</option>
                                  </select>
                                  
                           </div> 
                           <div class="bottom-btn col-md-4  mt-3">
                           <button class="btn">Check Availability</button>
                           </div>
                        </div>
                       
                       
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require('footer.php')?>