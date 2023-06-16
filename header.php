<nav class="navbar navbar-expand-lg navbar-light bg-ligh" style= "background-color: #dcdce0; ">
        <div class="container-fluid" style="padding: 0px;">
          <a class="navbar-brand" href="Home.php">
            <img src="img/logo1.png" alt="" width="40" height="95">
             <img src="img/name.png" alt=""  width="170" height="45" >
          </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav"style=" font-weight: bold;  font-family:Muslimah; font-size: 20px; margin-left:0px;">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="C:\xampp\htdocs\Web Project\Home.php" style="color:#050569;">Home</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="Trining Courses.php " style="color:#050569;">Training Courses</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="Services.php" style="color:#050569;">Language & Translation Services</a>
                </li>

                 <li class="nav-item">
                  <a class="nav-link" href="#About us" style="color:#050569;">About Us</a>

                </li>

                <li class="nav-item">
                  <a class="nav-link" href="Common Questions.php" style="color:#050569;"> FAQ</a>

                </li>

                <li class="nav-item">
                  <a class="nav-link" href="Contests & Events.php" style="color:#050569;">Contests & Events</a>

                </li>
              </ul>
              <form class="mb-3 col-2"  style="margin-left:60px; margin-top:15px; height: 39px;"  method="GET">
                  <div class="input-group  ">
                    <div class="input-group-prepend">
                      <button name="btn-search" class="btn btn-outline-secondary" type="submit" id="button-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg></button>
                    </div>
                    <input type="text" placeholder="Search..." name="search" class="form-control" aria-label="Example text with button addon" aria-describedby="button-addon1">
                  </div>
              </form>
              <!-- <form class="col-6 col-md-auto mb-3 mb-lg-0 me-lg-3" style="padding-left:50px" method="GET">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search" name="search">
                <button type="button" name="btn-search" class="btn" style="width:80px; height: 39px; background-color: #050569; text-decoration: none; color:white; font-weight: bold; font-family:Muslimah;font-size: 17px; "> Search</button>
              </form> -->

              <!-- Login button Dropdouwn -->
              <div class="dropdown" style="margin-right: 2px;">
                <button class="btn btn-danger dropdown-toggle" type="button" id="Login" data-toggle="dropdown" aria-expanded="false" style="text-decoration: none; color: rgb(255, 255, 255); font-weight: bold; font-family:Muslimah; font-size: 17px;">
                  Login
                </button>
                <ul class="dropdown-menu"  aria-labelledby="Login">
                  <li> <a class="dropdown-item" href="Student Portal.php">Student Portal</a></li>
                  <li> <a class="dropdown-item" href="Teacher Portal.php">Teacher Portal</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li> <a class="dropdown-item" href="Login1.php">Login</a></li>
                </ul>
              </div>
                <!-- Sign in button -->
              <div class="text-end">
                <button type="button" class="btn" style="width:80px; height: 39px; background-color: #050569; "> <a href="Sign in .php" style="text-decoration: none; color:white; font-weight: bold; font-family:Muslimah;font-size: 17px; ">Sign-in</a> </button>
              </div>

            </div>
        </div>
        
      </nav>