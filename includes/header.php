<header id="header">
    <!-- Phone Number -->
    <div class="top-bar mr-4">
      <div class="email-top-bar mr-4 pl-4"><a href="mailto:info@h2oplumbingandgas.co.uk">info@h2oplumbingandgas.co.uk</a></div>
      <button class="btn phone-number"><a class="phone-number-landline" href="tel: 01623 422 151"><i class="fas fa-phone mr-2"></i>01623 422 151</a><a class="phone-number-mobile" href="tel: 07904 3888 50"><i class="fas fa-mobile ml-4 mr-2"></i>07904 3888 50</a></button>
    </div>
    <!-- Nav -->
    <nav id="main-nav" class="navbar navbar-expand-lg navbar-light mb-4">
        <a class="navbar-brand" href="/"><div class="logo"><img src="img/H20 Logo.svg" alt="" srcset=""></div></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item <?php if ($page == 'home') { echo 'active'; } ?>">
            <a class="nav-link pt-2 pb-2 pr-4" href="home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown <?php if ($page == 'service') { echo 'active'; } ?>">
            <a class="nav-link dropdown-toggle pt-2 pb-2 pr-4" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Services
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="plumbing">Plumbing</a>
              <a class="dropdown-item" href="bathrooms">Bathrooms</a>
              <a class="dropdown-item" href="heating">Heating</a>
              <a class="dropdown-item" href="gas">Gas</a>
              <a class="dropdown-item" href="electrical">Electrical</a>
              <a class="dropdown-item" href="landlords">Landlords</a>
            </div>
          </li>
          <li class="nav-item <?php if ($page == 'emergencies') { echo 'active'; } ?>">
            <a class="nav-link  pt-2 pb-2 pr-4" href="emergencies">Emergencies</a>
          </li>
          <li class="nav-item <?php if ($page == 'about') { echo 'active'; } ?>">
            <a class="nav-link  pt-2 pb-2 pr-4" href="about">About</a>
          </li>
          <li class="nav-item <?php if ($page == 'contact') { echo 'active'; } ?>">
            <a class="nav-link  pt-2 pb-2 pr-4" href="contact">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>