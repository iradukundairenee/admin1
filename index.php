<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>ttc mururu</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/overwrite.css">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <!-- =======================================================
    Theme Name: Bikin
    Theme URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
          <a class="navbar-brand" href="#"><i>TTC MURURU</i></a>
        </div>
        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#header"><i>Home</i></a></li>
            <li><a href="#feature"><i>our mission</i></a></li>
            <li><a href="#gallery"><i>staff</i></a></li>
            <li><a href="#our-team"><i>about us</i></a></li>
            <li><a href="#contact"><i>Contact</i></a></li>
          </ul>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->
 <?php
  $conn=mysqli_connect("localhost","root","","ttcmururu")or die(mysqli_error($conn));
  $query=mysqli_query($conn," SELECT * FROM gallery ORDER by id desc")or die(mysqli_error($conn)); 
  ?>
  <div class="slider">
    <div id="about-slider" style="height: -40%; margin-top: -5%; width: 80%; margin-left: 10%;">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
             <?php
            $i= 0;
          foreach ($query as $row){
            $actives='';
             if ($i == 0) {
               $actives='active';
             } 
          ?>
          <li data-target="#carousel-slider" data-slide-to="<?= $i; ?>" class="<?=  $actives; ?>"></li>

          <?php $i++; } ?>
        </ol>
       
       <div class="carousel-inner" >
           
              <?php
            $i= 0;
          foreach ($query as $row){
            $actives='';
             if ($i == 0) {
               $actives='active';
             } 
          ?>
           <div class="item <?= $actives; ?>" >

            <img src="admin/<?= $row['name']; ?>" class="img-fluid" >
            <center>
            <h2><b><?php echo $row['comment']; ?></b></h2>
            </center>
          </div>
            <?php $i++; } ?>
        </div>
      <!-- left and right hand conttrols-->
        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>

        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
      </div>
      <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
  </div>
  <!--/#slider-->

  
 <div id="feature">
    <div class="container" style="margin-top: 10px;">
      <div class="row">
        <div class="text-center">
          <h3></h3>
          <p><br></p>
        </div>
        <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <div style=" height: 250px;">
              
              <h2></h2>
              <p><img src="img/capture1.png" class="img-fluid" alt=""></p>
            </div>

          </div>
        </div>
        <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <div style=" height: 250px;">
              
              <h2><b>school mission</b></h2>
              <p>to train the professional teacher with rwandan and christian values</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <div>
              
              <h2></h2>
              <p></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s" style="margin-top: 10px;">
          <div class="text-center">
          	 <h2><b>welcome  message</b></h2>
            <div style=" overflow: auto; height: 250px;">
              
             
             <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
         
      <div id="gallery">
        <?php 
        
$conn=mysqli_connect("localhost","root", "","ttcmururu")or die(mysqli_error($conn));
$query=mysqli_query($conn," SELECT * FROM staff")or die(mysqli_error($conn));
         ?>
    <div class="container-fluid">
     
      <div class="card-row justify-content-center">
      
        <figure class="effect-chico">
             <div class="text-center">
        <h3>staff</h3>
          <?php 
//$conn=mysqli_connect("localhost","root", "","ttcmururu")or die(mysqli_error($conn));
//$query=mysqli_query($conn," SELECT * FROM gallery")or die(mysqli_error($conn));
?>
      </div>
        <?php     
while ($row=mysqli_fetch_array($query)) {
?>
          <div class="col-md-3 " data-wow-offset="0" data-wow-delay="0.3s">
          <a href="admin/uploads/<?php echo $row['name'];?>" class="flipLightBox">
           <img src="admin/uploads/<?php echo $row['name'];?>" height="100px" width="100px">
              <h2><?php echo $row['firstname'];?></h2>
              <h4><?php echo $row['lastname'];?></h4>
            </a>
          
          </div>
    
                   <?php
}
  ?> 

        </figure> 
      </div>
    </div>
        
        </div>
    
       
 
  <!--/#gallery-->
          <div id="our-team">
    <div class="container">
     
      <div class="card-row ">
       <div class="card col-12 col-md-4 offset-md-2 col-lg-12 ">
                <div class="row">
             <div class="text-center">
        <h3>about us</h3>
      <div class="pricing-area text-center">
        <div class="row">
          <div class="col-sm-4 plan  fadeInDown" data-wow-offset="0" data-wow-delay="0.2s">
            
              <img src="img/Capture.png" height="200px;" width="350px;">

            <li><div style="overflow: auto;">
          <b>saint marcelin champagnant pray for us</b>
            </div>
        
        </div>
           <div class="col-sm-4 plan  fadeInDown" data-wow-offset="0" data-wow-delay="0.2s" ST>
            
               <li><div><b>HISTORY OF MARCELIN CHAMPAGNANT</b></div></li>
            <li><div style="height: 200px; overflow: auto;">
            Marcellin Joseph Benedict Champagnat (20 May 1789 – 6 June 1840), also known as Saint Marcellin Champagnat, was born in Le Rosey, village of Marlhes, near St. Etienne (Loire), France. He was the founder of the Marist Brothers, a religious congregation of brothers in the Catholic Church devoted to Mary and dedicated to education. His feast day is 6 June, his death anniversary.

Champagnat was ordained as a priest on 22 July 1816 and was part of a group led by Jean-Claude Colin, who founded the Society of Mary, a separate religious congregation to the Marist Brothers teaching order Champagnat founded later. Champagnat was born in the year of the storming of the Bastille, the start of the French Revolution. The religious, political, economic and social unrest of the times he lived influenced his priorities and life path.
  <b>seminary and ordination</b>
With money he earned from raising sheep, he went to the Minor Seminary at Verrières-en-Forez. He entered in October 1805.[1] Older than many of his classmates, at the age of 17, he failed his first year and was sent home. He was readmitted, through the efforts of his mother, his parish priest, and the superior of the seminary. [2]

Champagnat, who by this time had developed from being timid and shy into a gregarious young man, was known to frequent the local pubs. As a consequence, he was eventually regarded as a member of a group known as the “Happy Gang,” made up of seminarians who were a familiar sight in the taverns of the town during their free time.[3][4]

At the beginning of his second year, Champagnat settled down to a more sober life style. He continued to apply himself to his studies throughout his second year at the seminary. Two events, occurring during the summer following the second year, also helped to moderate his exuberant behavior. The first was the sudden death on 2 September 1807 of his friend, Denis Duplay. The second was a serious conversation with Father Linossier, who supervised the seminary, about improving Champagnat's general conduct[4] Champagnat left Verrières for St. Irenaeus, the major seminary near Lyons.

He then attended the major seminary at Saint Irenaeus in Lyon for his spiritual and theological formation as a priest. Among his companions were Jean-Marie Vianney and Jean-Claude Colin.[5] He was no natural scholar but through hard work and the support of his mother and aunt he was finally ordained.[6]

It was here that the idea for the Society of Mary was conceived and promoted by a group of seminarians, including Champagnat. He was ordained on 22 July 1816, at the age of twenty-seven, and the next day, travelled to the shrine of Our Lady of Fourviéres above Lyons with others interested in establishing a Society of Mary. The group of young men together dedicated themselves to Mary as "The Society of Mary".[6] From the start, he announced the Society should include teaching Brothers to work with children deprived of Christian education in remote rural areas because others were not going to them.
<b>Founding the Marist Brothers</b>
After his ordination, Champagnat was appointed pastor in La Valla, on the slopes of Mont Pilat. Champagnat was struck by the isolation in which people lived and the lack of education in the rural area. At the end of October 1816, after attending Jean-Baptist Montagne, a dying sixteen-year-old completely ignorant of basic Catholic teaching, Champagnat acted upon his conviction of the need for religious Brothers.[3]

After witnessing the poor treatment of a student by a teacher, his thoughts on education were shaken. He realised that not enough was being done to help the poor and illiterate in his society. His quote "To raise children properly, we should love them and love them equally" became the cornerstone of Marist education since.

On 2 January 1817, Champagnat encouraged two young men Jean-Marie Granjon and Jean-Baptiste Audras, to join him in forming the nucleus of the Marist Brothers. Others soon followed. La Valla thus became the birthplace of the Marist Brothers.[5] Between 1817 and 1824 he started a primary school at La Valla which became a teacher training centre for his young Brothers. The first Brothers were young country men, most of whom were between 15 and 18 years old. They were more used to hard work in the fields than to prayer, intellectual work and working with children and the uneducated.

Champagnat motivated these teenagers with his enthusiasm for teaching and spreading the gospel. He lived among them, like one of them. He taught them how to pray and to live in religious community as Brothers, and how to be teachers and religious educators themselves. Soon, he sent them into the most remote villages to teach the children, and sometimes the adults as well, the basics of religious knowledge, and of reading and writing.

In 1818 Champagnat opened the first Marist school whose timetable he designed in such a way to fit the farming needs of his parishioners (such as allowing children off school to help in the fields at planting and harvesting time). He set fees for the school at a level he knew most rural families could meet. In fact, if he knew the family was unable to afford anything, the tuition was free.[6] Champagnat had a great devotion to the Guardian angels, and directed that a picture of a Guardian Angel be placed in every classroom.[7]

Encouraged by the success of the school in La Valla, others were founded at Marlhes in 1819, in Saint-Sauveur-Street 1820, and in Bourg-Argental in 1822. But this success endangered the small congregation, which had little more than novices. In March 1822, eight applicants came from Haute-Loire, giving a new impetus to the institution, and allows the creation of new houses in Vanosc 1823, Saint-Symphorien-le-Chateau 1823, and Chavanay Charlieu 1824.

Champagnat decided to build a novitiate on land purchased from the hermitage at St. Chamond. One sign of both his trust in God and the huge success the Brothers had become was the building being designed to accommodate 150 people. The chapel was blessed on 13 August 1825. In 1837, Champagnat printed a Rule for his Brothers. Exhausted by his travels and his incessant efforts to gain recognition for his work with the authorities in Paris, and having been sick for a long time, Champagnat began preparing for his succession, and Brother Francis was elected as Champagnat's replacement, on 12 October 1838.
<b>Final years</b>
After a long-term illness, Champagnat died of cancer on 6 June 1840,[3] aged 51, at Our Lady of the Hermitage in the Gier River valley about 30 kilometres from where he had commenced his work. He was buried on 8 June. He left this message in his Spiritual Testament of 18 May 1840: "Let there be among you just one heart and one mind. Let it always be said of the Little Brothers of Mary as it was of the early Christians: See how they love one another!"[8] By that time there were 278 Brothers and 48 Marist schools in France and Oceania (South Pacific), and by 1856 there were 300 houses and more than 1500 Brothers.

The nascent order called themselves Les Petits Frères de Marie or Little Brothers of Mary. The Marist Brothers Institute was formally approved in 1863 by Pope Pius IX and were given the name Fratres Maristae a Scolis. Members of the order are identified by the initials "FMS."

            </div>
        
        </div>
           <div class="col-sm-4 plan  fadeInDown" data-wow-offset="0" data-wow-delay="0.2s" >
            
             
               <div><b>what some peaple say about us</b></div>
          <div class="slider" style="height: 100px;">
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="item active">
            <img src="admin/irenee 070.jpg" class="img-responsive" alt="" height="100px">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
          </div>
          <div class="item">
            <img src="img/Capture5.png" class="img-responsive" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
            </p>
              </div>
        </div>
      </div>
      <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
  </div>
            </div>
        
        </div>
      </div>
</div>
</div>
    
        
      </div>
    </div>
        
      
    <!--staff end-->

       
      </div>
    </div>
        
        </div>


  <!--/#our-team-->

  <footer>
    <div id="contact">
      <div class="container">
        <div class="text-center">
          <h3>Contact Us</h3>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">

            <h2>address</h2>
            <p>click below to view school location</p>
             

           <div class="col-md-4" data-wow-offset="0" data-wow-delay="0.3s">
          
          
            <p>  <a href="img/map.png" class="flipLightBox"><img src="img/map.png" height="170px" width="300px;"></a></p>
            	 
           
           

            <ul>
        
              <hr>
               <li>mururu P.O.box ....</li>>
              <li><i class="fa fa-phone fa-2x"></i>school phone here...</li>
              <hr>
              <li><i class="fa fa-envelope fa-2x"></i> here email </li>
            </ul>
            
          </div>	          
  </div>
         
          <div class="col-md-6 wow fadeInRight" >
           <form action="contact.php" method="POST">
           	<div class="form-group">
           	 <input type="text" name="name" class="form-control" required=""  placeholder="Your Name" />
           	 </div>
           	 <div class="form-group">
              <input type="email" name="email"  class="form-control" required="" placeholder="Your Email"/>
              </div>
              <div class="form-group">
              <textarea class="form-control"  name="message" class="form-control" placeholder="type your comment here"></textarea>
              </div>
              <input type="submit" class="btn btn-theme pull-left" name="submitt" value="send message">

           </form>
       </div>
        </div>
      </div>
    </div>
    <!--/#contact-->

    <div class="bg-primary">
   
    <div class="text-center ">
      <div class="copyright">
      
        &copy; ttc mururu. All Rights Reserved.
      
        <div class="credits">
          
          
          
       Designed by<p class="bg-theme ">iradukunda irenee</p>
        </div>
      </div>
    </div>
  </footer>
  <!--about-->

  
  <!--about-->
  <div class="bg-primary">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/fliplightbox.min.js"></script>
  <script src="js/functions.js"></script>
  <script src="contactform/contactform.js"></script>
</div>
</div>
</body>
</div>
</html>
