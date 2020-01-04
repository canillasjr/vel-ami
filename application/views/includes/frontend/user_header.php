<meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/frontend/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url();?>assets/frontend/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url();?>assets/frontend/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/frontend/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/frontend/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/frontend/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/frontend/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/frontend/lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="<?php echo base_url();?>assets/frontend/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url();?>assets/frontend/css/style.css" rel="stylesheet">
   <link href="<?php echo base_url();?>assets/frontend/css/velami.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="<?php echo base_url();?>assets/frontend/css/responsive.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/bootstrap-tagsinput/tagsinput.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/fontawesome/css/all.min.css" type="text/css" media="all" />

  <link href="<?= base_url(); ?>assets/dropzone/dropzone.min.css" rel="stylesheet">

  <?php if($this->router->fetch_method()=='index'): ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
  <?php endif;?>


</head>

<body data-spy="scroll" data-target="#navbar-example" base-url="<?= base_url() ?>">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="<?php echo base_url(); ?>">
                  <h1><span>VEL</span> ami</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
               <?php if(
                        $this->router->fetch_method() == 'get_myshop' ||
                        $this->router->fetch_method() == 'get_message' ||
                        $this->router->fetch_method() == 'get_profile' ||
                         $this->router->fetch_method() == 'get_add_products'
                        ){ ?>
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                      <a href="<?php echo base_url('dashboard/message'); ?>"><i class="fa fa-envelope"></i> <span class="badge badge-danger">3</span></a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#">
                      <img src="<?php echo base_url();?>assets/frontend/img/profile.jpg" class="vel-profile">
                      <?=$profile[0]->firstname?> <?=$profile[0]->lastname?>
                      </a>
                    </li>
                    <li>
                      <!-- Single button -->
                        <div class="btn-group">
                          <a href="#" class=" dropdown-toggle velcarret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url('dashboard/profile'); ?>"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="<?php echo base_url('dashboard/myshop'); ?>"><i class="fa fa-shopping-cart"></i> Myshop</a></li>
                            <li><a href="<?php echo base_url('dashboard/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                          </ul>
                        </div>
                    </li>
                  </ul>
                <?php }else{ ?>
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                      <a class="page-scroll" href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <?php if (count($profile) > 0): ?>
                      <li><a class="page-scroll" href="#">
                      <img src="<?php echo base_url();?>assets/frontend/img/profile.jpg" class="vel-profile">
                      <?=$profile[0]->firstname?> <?=$profile[0]->lastname?>
                      </a></li>
                    <li> <div class="btn-group">
                          <a href="#" class=" dropdown-toggle velcarret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url('dashboard/profile'); ?>"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="<?php echo base_url('dashboard/myshop'); ?>"><i class="fa fa-shopping-cart"></i> Myshop</a></li>
                            <li><a href="<?php echo base_url('dashboard/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                          </ul>
                        </div></li>
                        <?php else: ?>

                    <li>
                      <a class="page-scroll" href="#" data-toggle="modal" data-target="#signupmodal">Sign Up</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#" data-toggle="modal" data-target="#loginmodal">Login</a>
                    </li>
                     <?php endif ?>
                  </ul>
                <?php } ?>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->