<?php
    $page = 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>

    <title>H20 Plumbing & Gas Ltd | Plumbing, Gas & Electrical Specialists</title>
</head>
<body>
  <!-- Header -->
  <?php include 'includes/header.php'; ?>

    <!-- Hero -->
    <?php include 'includes/parts/home-hero.php'; ?>

      <!-- Main CTA -->
      <?php include 'includes/main-cta.php'; ?>
      
      <!-- What We Do -->
      <section id="what-we-do">
        <div class="my-container">
          <div class="row">
            <div class="content-left col-lg-8 col-xl-8 col-sm-12">
              <div class="heading-container">
                <h3 class="blue-heading">What We Do</h3>
              </div>
              <p class="mt-4 pt-4">We are a local independent family run company that serves the Nottingham, Mansfield and Derbyshire Areas.
                <br><br>
                We pride ourselves on being able to offer our customers a prompt, punctual service that is personal to them. All our engineers continuously work for us (we do not sub contract work out).
                Our company is pleased to offer advice that is individual to each customer, and offer a free no obligation estimate.
                <br><br>
                H2O Plumbing and Gas Ltd work on the basis that we provide a competitive pricing structure, which is backed up by a manufactures guarantee and a 12 month workmanship guarantee.
                <br><br>
                H2O Plumbing and Gas Ltd pride it’s self on giving honest, professional advice to all our customers.</p>
            </div>
            <!-- Form -->
            <?php include 'includes/content-right-sidebar.php'; ?>

          </div>       
        </div>
      </section>

      <!-- Our Services -->
      <section id="our-services">
        <div class="my-container">
          <div class="heading-container">
            <h3 class="blue-heading">Our Services</h3>
          </div>
          
          <div class="card-deck">
            <div class="col-lg-3 col-sm-12 col-md-6 mt-4 mb-4">              
              <div class="card h-100">
                <img class="card-img-top" src="img/cards/plumbing.jpg" alt="Plumbing Services">
                <div class="card-body">
                  <h5 class="card-title">Plumbing</h5>
                  <p class="card-text">We offer a specialized service in all domestic and commercial plumbing, whether it a small repair to a full new installation.
                  </p>
                  <button class="btn btn-red"><a href="/plumbing.html">Read More</a></button>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-12 col-md-6 mt-4 mb-4">              
              <div class="card h-100">
                <img class="card-img-top" src="img/cards/bathrooms.jpg" alt="Bathroom Services">
                <div class="card-body">
                  <h5 class="card-title">Bathrooms</h5>
                  <p class="card-text">We pride ourselves on be able to offer our customers luxury bathrooms, shower rooms, or wet rooms that will meet all their requirements, with all budgets catered for.</p>
                  <button class="btn btn-red"><a href="/bathrooms.html">Read More</a></button>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-12 col-md-6 mt-4 mb-4">              
              <div class="card h-100">
                <img class="card-img-top" src="img/cards/heating.jpg" alt="Heating Services">
                <div class="card-body">
                  <h5 class="card-title">Heating</h5>
                  <p class="card-text">H2O plumbing and gas have been specializing in boiler break downs and fault diagnostics and pride our self on being prompt and efficient at diagnosing boiler problems.</p>
                  <button class="btn btn-red"><a href="/heating.html">Read More</a></button>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-12 col-md-6 mt-4 mb-4">
              <div class="card h-100">
                <img class="card-img-top" src="img/cards/gas.jpg" alt="Gas Services">
                <div class="card-body">
                  <h5 class="card-title">Gas</h5>
                  <p class="card-text">We are able to carry out gas work on domestic and commercial premises. Think you have a gas leak then give us a call, we will carry out a full gas inspection of the house and if there is a leak we will repair the problem.</p>
                  <button class="btn btn-red"><a href="/gas.html">Read More</a></button>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-6 mt-4 mb-4">
              <div class="card h-100">
                <img class="card-img-top" src="img/cards/electrical.jpg" alt="Electrical Services">
                <div class="card-body">
                  <h5 class="card-title">Electrical</h5>
                  <p class="card-text">We work in both domestic and commercial properties. All our work is carried out to the highest standards, and up to the British standards BS7671(IEE) and meets all the relevant safety regulations.</p>
                  <button class="btn btn-red"><a href="/electrical.html">Read More</a></button>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-6 mt-4 mb-4">
              <div class="card h-100">
                <img class="card-img-top" src="img/cards/landlords.jpg" alt="Landlords Services">
                <div class="card-body">
                  <h5 class="card-title">Landlords</h5>
                  <p class="card-text">Landlords have specific legal requirements to their tenants under the gas safety (installation and use) regulations 1998 and the electricity at work regulations 1989(to maintain systems and prevent danger arising).</p>
                  <button class="btn btn-red"><a href="/landlords.html">Read More</a></button>
                </div>
              </div>    
            </div>
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