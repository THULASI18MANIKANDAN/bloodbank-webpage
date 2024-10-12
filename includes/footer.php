<footer>
    <div class="w3ls-footer-grids pt-sm-4 pt-3">
      <div class="container py-xl-5 py-lg-3">
        <div class="row">
          <div class="col-md-4 w3l-footer">
            <h2 class="mb-sm-3 mb-2">
              <a href="index.php" class="text-white font-italic font-weight-bold">
                <span>TMK AGENCIES & </span>BLOOD BANK
                <i class="fas fa-syringe ml-2"></i>
              </a>
            </h2>
            <p>Together, We Save Lives:

Join us in making a meaningful difference in our community. Your blood donation is more than just a simple act; it is a vital lifeline for patients in need. Every drop counts and can help save lives, whether it's a person undergoing surgery, a patient battling cancer, or an accident victim requiring emergency care. By choosing to donate, you are not only contributing to a healthier community but also inspiring others to take part in this noble cause. Together, we can create a powerful impact and ensure that everyone has access to the blood they need in times of crisis. Let’s unite in this mission and make a lasting difference!

.</p>
          </div>
          <div class="col-md-4 w3l-footer my-md-0 my-4">
            <h3 class="mb-sm-3 mb-2 text-white">Address</h3>
            <ul class="list-unstyled">
              <?php 
$pagetype="contactus";
$sql = "SELECT * from tblcontactusinfo";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
              <li>
                <i class="fas fa-location-arrow float-left"></i>
                <p class="ml-4">
                  <span><?php  echo $result->Address; ?>. </p>
                <div class="clearfix"></div>
              </li>
              <li class="my-3">
                <i class="fas fa-phone float-left"></i>
                <p class="ml-4"><?php  echo $result->ContactNo; ?></p>
                <div class="clearfix"></div>
              </li>
              <li>
                <i class="far fa-envelope-open float-left"></i>
                <a href="mailto:info@example.com" class="ml-3"><?php  echo $result->EmailId; ?></a>
                <div class="clearfix"></div>
              </li>
            <?php } } ?></ul>
          </div>
          <div class="col-md-4 w3l-footer">
            <h3 class="mb-sm-3 mb-2 text-white">Quick Links</h3>
            <div class="nav-w3-l">
              <ul class="list-unstyled">
                <li>
                  <a href="index.php">Home</a>
                </li>
                <li class="mt-2">
                  <a href="about.php">About Us</a>
                </li>
                <li class="mt-2">
                  <a href="contact.php">Contact Us</a>
                </li>
            
              </ul>
            </div>
          </div>
        </div>
        <div class="border-top mt-5 pt-lg-4 pt-3 pb-lg-0 pb-3 text-center">
          <p class="copy-right-grids mt-lg-1">©  TMK AGENCIES & BLOOD BANK
           
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- //footer -->