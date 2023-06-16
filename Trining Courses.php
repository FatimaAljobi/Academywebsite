<?php
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost; dbname=uiadb;",$username,$password);

if(isset($_GET['btn-search'])){
  $Search=$database->prepare("SELECT * FROM uia_student WHERE StudentName LIKE :value");
  $search_value="%".$_GET['search']."%";
  $Search->bindParam("value",$search_value);
  $Search->execute();

  // if(isset($Search)){
  //   header("location:Home.php");
  // }
  foreach($Search AS $data ){
    header("location:Home.php");
  }
}

?>



<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Trining Courses</title>
    <link rel="icon" href="img/UIA Logo - No name1.png" sizes="32x32" type="image/png">
</head>

<body style= "background-color: #F1F1F4;" >

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
                  <a class="nav-link " aria-current="page" href="Home.php" style="color:#050569;">Home</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="Trining Courses.php " style="color:#050569;">Training Courses</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="Services.php" style="color:#050569;">Language & Translation Services</a>
                </li>

                 
                <li class="nav-item">
                  <a class="nav-link" href="Common Questions.php" style="color:#050569;"> FAQ</a>

                </li>

                <li class="nav-item">
                  <a class="nav-link" href="Contests & Events.php" style="color:#050569;">Contests & Events</a>

                </li>
              </ul>
              <!-- Search button -->
              <form class="mb-3 col-2"  style="margin-left:140px; margin-top:15px; height: 39px;"  method="GET">
                  <div class="input-group  ">
                    <div class="input-group-prepend">
                      <button name="btn-search" class="btn btn-outline-secondary" type="submit" id="button-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg></button>
                    </div>
                    <input type="text" placeholder="Search..." name="search" class="form-control" aria-label="Example text with button addon" aria-describedby="button-addon1">
                  </div>
              </form>

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

  <div style="border-top: 1px solid #dee2e6; padding-top: 20px; padding-bottom: 20px; margin-top:1.5rem !important; margin-right:0%;  margin-left:0%;  background-color: #050569;">
    <h2 style=" text-align: center; font-weight: bold; font-family:Muslimah; font-size: 30px; color:white;">Language Developent Program  </h2>
  </div>


  <div style="border-top: 1px solid #dee2e6; padding-top: 10px; padding-bottom: 10px;  margin-top:4rem ;margin-bottom:1.5rem;  !important; background-color: #d42929; margin-left:300px; margin-right:300px; border-radius:20px;">
    <h2 style=" text-align: center; font-weight: bold; font-family:Muslimah; font-size: 24px; color:white;">English Language</h2>
  </div>
  
  <div class="row">

    <div class="row row-cols-1 row-cols-md-2 g-4 " style="padding-left: 20px; padding-right: 20px; padding-top: 20px; margin-right: 10px; margin-left: 30px; ">
          
      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/a.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language (A*)</h5>
            <p class="card-text">The first level in the English language course.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/AA1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language (AA)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px; font-family:Comic Sans MS;  width:30%; background: #FFFFFF; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  font-family:Comic Sans MS; border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/AB1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language (AB)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; font-family:Comic Sans MS; background: #FFFFFF; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  font-family:Comic Sans MS; border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/ba1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language (BA)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px; font-family:Comic Sans MS;  width:30%; background: #FFFFFF; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%; font-family:Comic Sans MS;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/bb1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language (BB)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px; font-family:Comic Sans MS;  width:30%; background: #FFFFFF; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%; font-family:Comic Sans MS;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; " > Register</button></a>    
        </div>
      </div>
            
    </div>
          
    <div class="row row-cols-1 row-cols-md-2 g-4 " style="padding-left: 20px; padding-right: 20px; padding-top: 20px; margin-right: 10px; margin-left: 30px">
            

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/1A.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language (1A)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px; font-family:Comic Sans MS;  width:30%; background: #FFFFFF; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%; font-family:Comic Sans MS;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/1B1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language (1B)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px; font-family:Comic Sans MS; width:30%; background: #FFFFFF; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style=" font-family:Comic Sans MS; width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/2a.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language (2A)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px; font-family:Comic Sans MS; width:30%; background: #FFFFFF; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%; font-family:Comic Sans MS;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/2b.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language (2B)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px; font-family:Comic Sans MS;  width:30%; background: #FFFFFF; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%; font-family:Comic Sans MS; border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/2c.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language (2C)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4 " style="padding-left: 20px; padding-right: 20px; padding-top: 20px; margin-right: 10px; margin-left: 30px">
    
    
      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/2d.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language (2D)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/3a.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language (3A)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/3b.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language (3B)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/4a.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language (4A)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/4b.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language (4B)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>
              
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4 " style="padding-left: 20px; padding-right: 20px; padding-top: 20px; margin-right: 10px; margin-left: 30px ">
      
      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/5a.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language (5A)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/5b.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language (5B)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/6a.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto; ">
          <div class="card-body"style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language (6A)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/6b.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language (6B)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>
      <div class="col-md mx-auto ">

      </div>

    </div>
        
  </div>

  <div style="border-top: 1px solid #dee2e6; padding-top: 10px; padding-bottom: 10px;  margin-top:4rem ;margin-bottom:1.5rem;  !important; background-color: #d42929; margin-left:300px; margin-right:300px; border-radius:20px;">
    <h2 style=" text-align: center; font-weight: bold; font-family:Muslimah; font-size: 24px; color:white;">French Language</h2>
  </div>
  <div class="row">

    <div class="row row-cols-1 row-cols-md-2 g-4 " style="padding-left: 20px;  padding-right: 20px; padding-top: 20px; margin-right: 10px; margin-left: 30px; ">
          
      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/a.png" class="card-img-top" style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Language (A*)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/AA1.png" class="card-img-top" style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Language (AA)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/AB1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Language (AB)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/ba1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Language (BA)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/bb1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Language (BB)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>
            
    </div>
          
    <div class="row row-cols-1 row-cols-md-2 g-4 " style="padding-left: 20px; padding-right: 20px; padding-top: 20px; margin-right: 10px; margin-left: 30px">
            

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/1A.png" class="card-img-top" style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Language (1A)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/1B1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Language (1B)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/2a.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Language (2A)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/2b.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Language (2B)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/2c.png" class="card-img-top" style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Language (2C)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4 " style="padding-left: 20px; padding-right: 20px; padding-top: 20px; margin-right: 10px; margin-left: 30px">
    
    
      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/2d.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Language (2D)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/3a.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Language (3A)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/3b.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Language (3B)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
      </div>

      <div class="col-md mx-auto " >
      </div>
              
    </div>
        
  </div>


  <div style="border-top: 1px solid #dee2e6; padding-top: 20px;  padding-bottom: 20px;  margin-right:0%;  margin-left:0%;  margin-top:4rem; margin-bottom:1.5rem !important; background-color: #050569;">
    <h2 style=" text-align: center; font-weight: bold; font-family:Muslimah; font-size: 30px; color:white;">Conversation Skills Program </h2>
  </div>

  <div style="border-top: 1px solid #dee2e6; padding-top: 10px; padding-bottom: 10px;  margin-top:4rem ;margin-bottom:1.5rem;  !important; background-color: #d42929; margin-left:300px; margin-right:300px; border-radius:20px;">
    <h2 style=" text-align: center; font-weight: bold; font-family:Muslimah; font-size: 24px; color:white;">English Conversation Skills  </h2>
  </div>

  <div class="row">
    <div class="row row-cols-1 row-cols-md-3 g-4 " style="padding-left: 20px; padding-right: 20px; padding-top: 20px; margin-right: 10px; margin-left: 30px ">
      
      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/conA1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Conversation Skills (A)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/conB.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Conversation Skills (B)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/conC.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Conversation Skills (C)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/conD.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Conversation Skills (D)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>
    </div>
  </div>

  <div style="border-top: 1px solid #dee2e6; padding-top: 10px; padding-bottom: 10px;  margin-top:4rem ;margin-bottom:1.5rem;  !important; background-color: #d42929; margin-left:300px; margin-right:300px; border-radius:20px;">
    <h2 style=" text-align: center; font-weight: bold; font-family:Muslimah; font-size: 24px; color:white;">French Conversation Skills </h2>
  </div>

  <div class="row">
    <div class="row row-cols-1 row-cols-md-3 g-4 " style="padding-left: 20px; padding-right: 20px; padding-top: 20px; margin-right: 10px; margin-left: 30px ">
      
      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/conA1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Conversation Skills (A)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/conB.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Conversation Skills (B)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/conC.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Conversation Skills (C)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/conD.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Conversation Skills (D)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>
    </div>
  </div>
    

  <div style="border-top: 1px solid #dee2e6; padding-top: 20px;  padding-bottom: 20px;  margin-right:0%;  margin-left:0%;  margin-top:4rem; margin-bottom:1.5rem !important; background-color: #050569;">
    <h2 style=" text-align: center; font-weight: bold; font-family:Muslimah; font-size: 30px; color:white;">Writing Skills Program </h2>
  </div>

  <div style="border-top: 1px solid #dee2e6; padding-top: 10px; padding-bottom: 10px;  margin-top:1rem; margin-bottom:1.5rem; !important; background-color: #d42929; margin-left:300px; margin-right:300px; border-radius:20px;">
    <h2 style=" text-align: center; font-weight: bold; font-family:Muslimah; font-size: 24px; color:white;">English Writing Skills </h2>
  </div>
      
  <div class="row">
    <div class="row row-cols-1 row-cols-md-3 g-4 " style="padding-left: 20px; padding-right: 20px; padding-top: 20px; margin-right: 10px; margin-left: 30px">
      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/wA.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Writing Skills (A)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/wB.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Writing Skills (B)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/wC.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Writing Skills (C)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/wD.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Writing Skills (D)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>
    </div>
  </div>

  <div style="border-top: 1px solid #dee2e6; padding-top: 10px; padding-bottom: 10px;  margin-top:4rem ;margin-bottom:1.5rem;  !important; background-color: #d42929; margin-left:300px; margin-right:300px; border-radius:20px;">
    <h2 style=" text-align: center; font-weight: bold; font-family:Muslimah; font-size: 24px; color:white;">French Writing Skills </h2>
  </div>
      
  <div class="row">
    <div class="row row-cols-1 row-cols-md-3 g-4 " style="padding-left: 20px; padding-right: 20px; padding-top: 20px; margin-right: 10px; margin-left: 30px">
      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/wA.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Writing Skills (A)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/wB.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Writing Skills (B)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/wC.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Writing Skills (C)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/wD.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">French Writing Skills (D)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>
    </div>
  </div>


  <div style="border-top: 1px solid #dee2e6; padding-top: 20px; margin-top:4.5rem !important; padding-bottom: 20px;  margin-right:0%;  margin-left:0%;  margin-top:1.5rem; margin-bottom:1.5rem !important; background-color: #050569;">
    <h2 style=" text-align: center; font-weight: bold; font-family:Muslimah; font-size: 30px; color:white;">Grammar Dev Program </h2>
  </div>
      
  <div class="row">
    <div class="row row-cols-1 row-cols-md-3 g-4 " style="padding-left: 20px; padding-right: 20px; padding-top: 20px; margin-right: 10px; margin-left: 30px">
      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/GramA1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Grammar Dev (A)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/GramB1.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Grammar Dev (B)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/GramC1.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Grammar Dev (C)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/GramD1.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Grammar Dev (D)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>
    </div>
  </div>

  <div style="border-top: 1px solid #dee2e6; padding-top: 20px; margin-top:4.5rem !important; padding-bottom: 20px;  margin-right:0%;  margin-left:0%;  margin-top:1.5rem; margin-bottom:1.5rem !important; background-color: #050569;">
    <h2 style=" text-align: center; font-weight: bold; font-family:Muslimah; font-size: 30px; color:white;">TOEFL Prep Program </h2>
  </div>
      
  <div class="row">
    <div class="row row-cols-1 row-cols-md-3 g-4 " style="padding-left: 20px; padding-right: 20px; padding-top: 20px; margin-right: 10px; margin-left: 30px">
      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/toeflA1.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/toeflB1.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/toeflC1.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/toeflD1.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English Language</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>
    </div>
  </div>

  <div style="border-top: 1px solid #dee2e6; padding-top: 20px; margin-top:4.5rem !important; padding-bottom: 20px;  margin-right:0%;  margin-left:0%;  margin-top:1.5rem; margin-bottom:1.5rem !important; background-color: #050569;">
    <h2 style=" text-align: center; font-weight: bold; font-family:Muslimah; font-size: 30px; color:white;">Business Comm Program </h2>
  </div>
      
  <div class="row">
    <div class="row row-cols-1 row-cols-md-3 g-4 " style="padding-left: 20px; padding-right: 20px; padding-top: 20px; margin-right: 10px; margin-left: 30px">
      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/BusinessA1.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">Business Comm (A)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/BusinessB1.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">Business Comm (B)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/BusinessC1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">Business Comm (C)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/BusinessD1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">Business Comm (D)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>
    </div>
  </div>
   
  <div style="border-top: 1px solid #dee2e6; padding-top: 20px; margin-top:4.5rem !important; padding-bottom: 20px;  margin-right:0%;  margin-left:0%;  margin-top:1.5rem; margin-bottom:1.5rem !important; background-color: #050569;">
    <h2 style=" text-align: center; font-weight: bold; font-family:Muslimah; font-size: 30px; color:white;">Translation Program </h2>
  </div>
      
  <div class="row">
    <div class="row row-cols-1 row-cols-md-3 g-4 " style="padding-left: 20px; padding-right: 20px; padding-top: 20px; margin-right: 10px; margin-left: 30px">
      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/TranA1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">Translation (A)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/TranB1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">Translation (B)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/TranC1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">Translation (C)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/TranD1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">Translation (D)</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>
    </div>
  </div>
   
       

  <div style="border-top: 1px solid #dee2e6; padding-top: 20px; margin-top:4.5rem !important; padding-bottom: 20px;  margin-right:0%;  margin-left:0%;  margin-top:1.5rem; margin-bottom:1.5rem !important; background-color: #050569;">
    <h2 style=" text-align: center; font-weight: bold; font-family:Muslimah; font-size: 30px; color:white;">Microsoft office Applications Program </h2>
  </div>
      
  <div class="row">
    <div class="row row-cols-1 row-cols-md-3 g-4 " style="padding-left: 20px; padding-right: 20px; padding-top: 20px; margin-right: 10px; margin-left: 30px">
      <div class="col-md ">
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/word1.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">Word</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md">
        <div class="card h-100" style="border-radius: 20px;">
          <img src="course img/excel1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">Excel</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الفرنسيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الفرنسيه.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md" >
        <div class="card h-100" style="border-radius: 20px;">
          <img src="course img/power1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">PowerPoint</h5>
            <p class="card-text">تقدم الاكاديميه كورس خاص بالتصوير بكفاءه عاليه.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md">
        <div class="card h-100" style="border-radius: 20px;">
          <img src="course img/access1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">Access</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md">
        <div class="card h-100" style="border-radius: 20px;">
          <img src="course img/outlook1.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">OutLook</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>
        
    </div>
  </div>
    


                  
      <div style="border-top: 1px solid #dee2e6; padding-top: 20px; margin-top:4.5rem !important; padding-bottom: 20px;  margin-right:0%;  margin-left:0%;  margin-top:1.5rem; margin-bottom:1.5rem !important; background-color: #050569;">
        <h2 style=" text-align: center; font-weight: bold; font-family:Muslimah; font-size: 30px; color:white;">Photography Program </h2>
      </div>
    
  <div class="row">
    <div class="row row-cols-1 row-cols-md-3 g-4 " style="padding-left: 20px; padding-right: 20px; padding-top: 20px; margin-right: 10px; margin-left: 30px">
      
      <div class="col-md">
      </div>
    
      <div class="col-md ">
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/PhotoFB1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">Photography For Beginners</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md">
        <div class="card h-100" style="border-radius: 20px;">
          <img src="course img/PhotoEFB1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">photo Editing For Beginners</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الفرنسيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الفرنسيه.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md" >
        <div class="card h-100" style="border-radius: 20px;">
          <img src="course img/APA1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">APA Style Editing</h5>
            <p class="card-text">تقدم الاكاديميه كورس خاص بالتصوير بكفاءه عاليه.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md">
      </div>
        
    </div>
  </div>

  <div style="border-top: 1px solid #dee2e6; padding-top: 20px; margin-top:4.5rem !important; padding-bottom: 20px;  margin-right:0%;  margin-left:0%;  margin-top:1.5rem; margin-bottom:1.5rem !important; background-color: #050569;">
        <h2 style=" text-align: center; font-weight: bold; font-family:Muslimah; font-size: 30px; color:white;">Professional Developent Courses For Companies & Individuals </h2>
      </div>
    
  <div class="row">
    <div class="row row-cols-1 row-cols-md-3 g-4 " style="padding-left: 20px; padding-right: 20px; padding-top: 20px; margin-right: 10px; margin-left: 30px">
      
      <div class="col-md">
      </div>
    
      <div class="col-md ">
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/ICS1.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">Interpersonal Communication Skills</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md">
        <div class="card h-100" style="border-radius: 20px;">
          <img src="course img/CV1.png" class="card-img-top"  style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">CV writing and basic Business Communication</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الفرنسيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الفرنسيه.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <!-- <div class="col-md" >
        
      </div> -->

     
        
    </div>
  </div>


  <div style="border-top: 1px solid #dee2e6; padding-top: 20px; margin-top:4.5rem !important; padding-bottom: 20px;  margin-right:0%;  margin-left:0%;  margin-top:1.5rem; margin-bottom:1.5rem !important; background-color: #050569;">
    <h2 style=" text-align: center; font-weight: bold; font-family:Muslimah; font-size: 30px; color:white;">English For </h2>
  </div>
      
  <div class="row">
    <div class="row row-cols-1 row-cols-md-3 g-4 " style="padding-left: 20px; padding-right: 20px; padding-top: 20px; margin-right: 10px; margin-left: 30px">
      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/EFE1.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English For Engineering</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/EFM1.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English For Medicine</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/EFB1.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English For Business</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/EFL1.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English For Law</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>


      <div class="col-md mx-auto " >
        <div class="card h-100 " style="border-radius: 20px;">
          <img src="course img/EFBaF1.png" class="card-img-top"   style=" margin-top:30px; width:80%; border:2px dashed grey; border-radius: 50%; display: block; margin-left: auto;  margin-right: auto;">
          <div class="card-body" style="color:#050569; font-family:Comic Sans MS;">
            <h5 class="card-title">English For Banking and Finance</h5>
            <p class="card-text">تقدم الاكاديميه كورس اللغه الانجليزيه بكفاءه عاليه ولكي تصل الى اعلى المستويات باللغه الانجليزي.</p>
          </div>
          <span>
            <button style="font-size: 12px; margin-bottom:10px;  width:30%; background: #FFFFFF; font-family:Comic Sans MS; color:#d42929; border:2px solid #d42929; border-radius: 50px; display: block; margin-left: auto;  margin-right: auto; padding:2px; "> 150 RS</button>
          </span>
          <a href="Register.php"><button class="btn btn-secondary" style="  width:100%;  border:2px solid #FFFFFF; border-radius: 20px; padding: 10px; font-family:Comic Sans MS; " > Register</button></a>    
        </div>
      </div>

    </div>
  </div>









      <div class="b-example-divider"></div>
        <div class="container  sticky">
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-lg-6 d-flex align-items-center">
              <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
              </a>
              <span class="text-muted" style="position: absolute; font-size:70%;" >© 2021 All Rights Reserved ULTIMATE INTERNATIONAL ACADEMY</span>
            </div>
            <ul class="nav col-lg-6 justify-content-end list-unstyled d-flex " >
              
              <li class="ms-3" style=" margin-left:8px; "><a style="color:#071485;" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg></a></li>
              <li class="ms-3" style=" margin-left:8px;"><a style="color:#0062f5;"href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
              </svg></a></li>
              <li class="ms-3"style=" margin-left:8px;"><a style="color:#1c9911;"href="https://wa.me/qr/H6FBZOX42GVHH1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
              </svg></a></li>
              <li class="ms-3"style=" margin-left:8px;"><a style="color:#d44c75;" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
              </svg></a></li>
              <li class="ms-3"style=" margin-left:8px;"><a style="color:#ce1818;" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
              </svg></a></li>
            </ul>
          </footer>
        </div>
        <div class="b-example-divider"></div>
   
    
   
















    
        <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>