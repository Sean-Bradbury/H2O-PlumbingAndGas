<?php
    $page = 'about';
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <?php include 'includes/head.php'; ?>

    <title>About Us | H2O Plumbing & Gas Ltd</title>
</head>
<body>  
  <!-- Header -->
  <?php include 'includes/header.php'; ?>

    <!-- Hero -->
    <?php include 'includes/parts/about-hero.php'; ?>

      <!-- Main CTA -->
      <?php include 'includes/main-cta.php'; ?>
      
      <!-- What We Do -->
      <section id="what-we-do">
        <div class="my-container">
          <div class="row">
            <div class="content-left col-lg-8 col-xl-8 col-sm-12">
              <div class="heading-container">
                <h1 class="blue-heading">About H2O Plumbing</h1>
              </div>

              <p class="mt-4 pt-4">H2O Plumbing and Gas was established in 1996 and became a limited company in 2010, we pride ourselves on providing honest professional advice, quality workmanship at a competitive prices which always includes the highest standard of customer care. All our engineers work for us (we do not sub contract work out).
                <br>
                <br>
                We are an independent family company based in Mansfield and cover the Nottingham, Mansfield and Derby areas.
                <br>
                <br>                
                Our company is pleased to offer advice that is individual to each customer, and offer a free no obligation estimate.
                <br>
                <br>              
                All our work is backed up by a manufacturer’s guarantee and a 12 month workmanship guarantee.
                <br>
                <br>                
                You can view our full terms and conditions here: Terms and Conditions
                <br>
                <div class="card-group mt-4">
                <div class="card mr-4">
                  <img src="img/harry.jpg" class="card-img-top" alt="harry h2o plumbing">
                </div>
                <div class="card mr-4">
                  <img src="img/fixing-boiler.jpg" class="card-img-top" alt="fixing a boiler">
                </div>
                <div class="card mr-4">
                  <img src="img/radiator.jpg" class="card-img-top" alt="fixing a radiator">
                </div>
                </div>

            </div>

            <!-- Form -->
            <?php include 'includes/content-right-sidebar.php'; ?>

          </div>       
        </div>
      </section>

      <!-- Why Choose Us -->
      <?php include 'includes/why-choose-us.php'; ?>

      <!-- Reviews -->
      <?php include 'includes/reviews.php'; ?>

      <!-- Footer -->
      <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>

</body>
</html>