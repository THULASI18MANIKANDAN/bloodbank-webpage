<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['send']))
  {
$name=$_POST['fullname'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$message=$_POST['message'];
$sql="INSERT INTO  tblcontactusquery(name,EmailId,ContactNumber,Message) VALUES(:name,:email,:contactno,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{

echo '<script>alert("Query Sent. We will contact you shortly.")</script>';
}
else 
{
echo "<script>alert('Something went wrong. Please try again.');</script>";  
}

}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>TMK Blood Bank  | Contact Us </title>
	<!-- Meta tag Keywords -->
	
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

	<!-- banner 2 -->
	<div class="inner-banner-w3ls">
		<div class="container">

		</div>
		<!-- //banner 2 -->
	</div>
	<!-- page details -->
	<div class="breadcrumb-agile">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->

	<!-- contact -->
	<div class="agileits-contact py-5">
		<div class="py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Contact Us</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p class="mt-2">Get in Touch:

We’d love to hear from you! Whether you have questions, need assistance, or want to learn more about our programs and services, please don’t hesitate to reach out. Your feedback and inquiries are important to us.

Contact Information:

Phone: 877016181
(Available Monday - Friday, 9 AM - 5 PM)

Email: thulasitmk181@gmail.com
We strive to respond to all emails within 24 hours.

Address:
5/192B TMK Blood Bank Agencies,
Dharapuram, Tamil Nadu

Connect with Us on Social Media:
Follow us on our social media platforms to stay updated on events, blood drives, and important information.

Facebook:TMKBLOODBANK
Twitter:TMK
Instagram:tmk_._agencies_._
LinkedIn:TMK BLOOD BANK
Visit Us:
Feel free to stop by our office for more information about blood donation and how you can get involved in our mission to save lives.


Your support and engagement are essential in our efforts to make a positive impact in our community. Together, we can save lives!.</p>
			</div>
			<div class="d-flex">
				<div class="col-lg-5 w3_agileits-contact-left">
				</div>
				<div class="col-lg-7 contact-right-w3l">
					<h5 class="title-w3 text-center mb-5">Get In Touch</h5>
					<form action="#" method="post">
						<div class="d-flex space-d-flex">
							<div class="form-group grid-inputs">
								 <input type="text" class="form-control" id="name" name="fullname" placeholder="Please enter your name.">
							</div>
							<div class="form-group grid-inputs">
								<input type="tel" class="form-control" id="phone" name="contactno"  placeholder="Please enter your phone number.">
							</div>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="email" name="email" required placeholder="Please enter your email address.">
						</div>
						

						<div class="form-group">
							<textarea rows="10" cols="100" class="form-control" id="message" name="message" placeholder="Please enter your message" maxlength="999" style="resize:none"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" name="send">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //contact -->

	


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