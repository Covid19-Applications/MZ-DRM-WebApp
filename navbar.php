

  <header role="banner" id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <a href="index.php" ><img class="responsive" src="img/logo1.png" style="width: 100%; max-height: 100%;" ></a>
      <!--    Uncomment below if you prefer to use an image logo 
        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">HOME</a></li>
          <li class="drop-down"><a href="">DASHBOARDS</a>
            <ul>
              <li><a href="covid.php">Covid19 Dashboard</a></li>
          <li><a href="weather.php">Weather Dashboard</a></li>
        </ul>
      </li>

       <li><a href="contact.php">CONTACT</a></li>
        <!--   <li><a href="#services">SERVICES</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="#team">Team</a></li> -->
          <li class="drop-down"><a href="">SERVICES</a>
            <ul>
            
              <li class="drop-down"><a href="#">Disaster Management</a>
                <ul>
                  <li><a href="ecommerce.php">MSME Covid19 Products</a></li>
                  <li><a href="Blog/index.php">Additional Services</a></li>
                  <li><a href="clusters.php">Cluster Geofencing</a></li>
                  <li><a href="funds.php">Collection of Funds</a></li>
                  <li><a href="rfood.php">Collection of Relief Materials Food</a></li>
                  <li><a href="govt.php">Government Services</a></li>
                   
                    <li><a href="firstres.php">First Responders</a></li>
                     <li><a href="tollfree.php">Toll Free</a></li>
                      <li><a href="orphans.php">Support to Orphans & Vulnerable Category</a></li>
                       <li><a href="pass.php">Movement Passes</a></li>


                </ul>
              </li>
               <li class="drop-down"><a href="#">HealthCare</a>
                <ul>
                  <li><a href="publiccare.php">Public Healthcare Locations For COVID19</a></li>
                  <li><a href="medical.php">Medical Stores</a></li>
                  <li><a href="labs.php">Labs For Testing & Results</a></li>
                  <li><a href="mentalbot.php">Counselling For Patients & Family</a></li>
                  <li><a href="check.php">Check For Symptoms</a></li>
                  <li><a href="appointment/cover.php">Online Doctor's Appointments</a></li>
                  <li><a href="home.php">Home Treatment &amp; Alarm Systems </a></li>
                  <li><a href="hospital.php">Hospital Admissions</a></li>
                </ul>
              </li>
               <li class="drop-down"><a href="#">Education & Skilling</a>
                <ul>
                  <li><a href="courses.php">Vocational Online Training</a></li>
                  <li><a href="volunteer.php">Volunteers Registrations</a></li>
                  <li><a href="NEWS/index.html">News Dashboard</a></li>
                  
                </ul>
              </li>
              
            </ul>
          </li>
         
           <li >
            <a href="logout.php">
                  <form action="logout.php" method="POST">
                <button class="nav-link btn btn-dark " name="logout_btn" >LOGOUT</button>
                </form></a>
              </li>
       
        </ul>
      </nav>

    </div>
  </header>




  <!-- <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark " >
        <div class="container">
        


          <a class="navbar-brand" href="index.php"><img  class="responsive" src="img/logo1.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link " href="index.php">HOME</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DASHBOARDS</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="covid.php">Covid19 Dashboard</a>
                    <a class="dropdown-item" href="weather.php">Weather Dashboard </a>

                </div>
              </li>
               
                 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HEALTHCARE</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="publiccare.php">Public Healthcare Locations For COVID19</a>
                  <a class="dropdown-item" href="medical.php">Medical Stores</a>
                   <a class="dropdown-item" href="labs.php">Labs For Testing & Results</a>
                  <a class="dropdown-item" href="mentalbot.php">Counselling For Patients & Family</a>
                  <a class="dropdown-item" href="check.php">Check For Symptoms</a>
                  <a class="dropdown-item" href="appointment/cover.php">Online Doctor's Appointments</a>
                  <a class="dropdown-item" href="home.php">Home Treatment &amp; Alarm Systems </a>
                  <a class="dropdown-item" href="hospital.php">Hospital Admissions </a>
               

                </div>
              </li>




               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DISASTER </a>
                <div class="dropdown-menu" >
                   <a class="dropdown-item" href="ecommerce.php">MSME Covid19 Products</a>
                   <a class="dropdown-item" href="clusters.php">Cluster Geofencing</a>
                    <a class="dropdown-item" href="funds.php">Collection of Funds</a>
                  <a class="dropdown-item" href="rfood.php">Collection of Relief Materials Food</a>
                  <a class="dropdown-item" href="govt.php">Government Services</a>
                  <a class="dropdown-item" href="Blog/index.php">Food Supply to Isolated Patients</a>
                  <a class="dropdown-item" href="firstres.php">First Responders</a>
                  <a class="dropdown-item" href="tollfree.php">Toll Free </a>
                  <div class="dropdown-menu " style="align-items: right" >
                  <a class="dropdown-item" href="orphans.php">Support to Orphans & Vulnerable Category</a>
                  <a class="dropdown-item" href="pass.php">Essential Service Transport Pass</a>

                  </div>
                 
                   <a class="dropdown-item" href="orphans.php">Support to Orphans & Vulnerable Category</a>
                  <a class="dropdown-item" href="pass.php">Essential Service Transport Pass</a>
                  <a class="dropdown-item" href="pass.php">Personal Pass Service Request</a>
                  <a class="dropdown-item" href="pass.php">Movement Pass Service Request</a>
                
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="Blog/index.php">SERVICES</a>
              </li>
              
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EDUCATION</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="courses.php">Vocational Online Training</a>
                  <a class="dropdown-item" href="volunteer.php">Volunteers Registrations</a>
                  <a class="dropdown-item" href="NEWS/index.html">News Dashboard</a>
                 
                </div>
              </li> -->

<!--                <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
              
               <li class="nav-item">
                <a class="nav-link" href="contact.php">CONTACT US</a>
              </li>
                 
                 
            </ul>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                  <form action="logout.php" method="POST">
                <button class="nav-link" name="logout_btn" id="mapsbtn">LOGOUT</button>
                </form>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header> --> 

