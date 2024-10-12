
<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>TMK Blood Bank  | Home Page</title>
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<?php include('includes/header.php');?>

	<!-- banner -->
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides callbacks callbacks1" id="slider4">
				<li>
					<div class="banner-top1">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>TMK Blood bank services 
									<span>LIVE AND LET LIVE</span>
								</h3>
								
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top2">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>When you donate blood, you are not just giving blood;
									<span> you are giving hope</span>
								</h3>
						
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top3">
						<div class="banner-info_agile_w3ls">
							<div class="container">
						<!-- 		<h3>"Sometimes money cannot save life
									<span>but donated blood can</span>
								</h3> -->
				
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- //banner -->
	<div class="clearfix"></div>

	<!-- banner bottom -->
	<div class="banner-bottom py-5">
		<div class="d-flex container py-xl-3 py-lg-3">
			<div class="banner-left-bottom-w3ls offset-lg-2 offset-md-1">
				<h3 class="text-white my-3">High professional doctors</h3>
				<p>At TMK Blood Bank , our team of expert doctors is dedicated to ensuring the health and safety of our donors and patients. 
					Our specialists in hematology, transfusion medicine, immunohematology, and pathology work tirelessly to provide the highest quality care.

Each doctor is committed to advancing research and improving practices in blood donation and transfusion. Together, we ensure that every donation is safe and effective.

For questions or consultations, please contact us at [Contact Information:tmkbloodbank@org].</p>
			</div>
			<div class="button">
				<a href="about.php" class="w3ls-button-agile">ABOUT US
					<i class="fas fa-hand-point-right"></i>
				</a>
			</div>
		</div>
	</div>
	<!-- //banner bottom -->
	<!-- blog -->
	<div class="blog-w3ls py-5" id="blog">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title text-white">Grateful Hearts: Recognizing Our Blood Donors</h3>
				<span>
					<i class="fas fa-user-md text-white"></i>
				</span>
			</div>
			<div class="row package-grids mt-5">
				<?php 
$status=1;
$sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 6";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
				<div class="col-md-4 pricing" style="margin-top:2%;">
					
					<div class="price-top">
					
							<img src="images/blood-donor.jpg" alt="" class="img-fluid" />
					
						<h3><?php echo htmlentities($result->FullName);?>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Gender: <?php echo htmlentities($result->Gender);?></h4>
						<p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>
						
						<a class="btn btn-primary" style="color:#fff" href="contact-blood.php?cid=<?php echo $result->id;?>">Request</a>
					</div>
				</div><?php }} ?>
			
			
			</div>
		</div>
	</div>
	<!-- //blog -->

	<!-- treatments -->
	<div class="screen-w3ls py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">"The Bloodline: Navigating the World of Blood Types"</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p class="mt-2">“Every individual’s blood type belongs to one of these essential groups:”</p>
			</div>
			<div class="row">
            <div class="col-lg-6">
               
                <ul>
                
<li>A1 positive or A1 negative.</li>               
<li>A positive or A negative</li>
<li>B positive or B negative</li>
<li>O positive or O negative</li>
<li>AB positive or AB negative.</li>
<li>A1B positive or A1B negative.</li>
<li>A2B positive or A2B negative.</li>

                </ul>
                <p>“Fuel Your Donation: A Healthy Diet for a Successful Blood Donation!
				Eating well not only boosts your well-being but also enhances your donation experience. 
				Here are some recommended foods to enjoy before you give the gift of life!”</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/blood-donor (1).jpg" alt="">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-8">
            <h4 style="padding-top: 30px;">UNIVERSAL DONORS AND RECIPIENTS</h4>
                <p>
				Universal Donor:
Blood Type O- (O Negative)
O- is known as the universal donor because it can be transfused to individuals of any blood type without the risk of an immune reaction. This makes O- blood especially valuable in emergency situations when there may not be time to determine a patient’s blood type.

Universal Recipient:
Blood Type AB+ (AB Positive)
AB+ is recognized as the universal recipient because individuals with this blood type can receive blood from any other blood type. This flexibility allows for more options in transfusion, ensuring that patients receive the necessary blood during critical times.

</p>
            </div>
            <div class="col-md-4" style="padding-top: 30px;"> 
    
                <a class="btn btn-lg btn-secondary btn-block login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3" data-toggle="modal" data-target="#exampleModalCenter1" href="#" data-toggle="modal" data-target="#exampleModalCenter1"> Become a Donar</a>
            </div>
        </div>
		</div>
	</div>
	<!-- //treatments -->

	<!-- footer -->
	<?php include('includes/footer.php');?>


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>