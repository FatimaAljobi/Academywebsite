<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "uiadb";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $db);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  else{
    $name=$_POST['name'];
    $Age=$_POST['Age'];
    $Education=$_POST['Education'];
    $Gender=$_POST['Gender'];
    $Mobile=$_POST['Mobile'];
    $Job=$_POST['Job'];
    $Nationality=$_POST['Nationality'];
    $Country=$_POST['Country'];
    $Email=$_POST['Email'];
    if($Job==="Student"){
      $sql = "INSERT INTO uia_student (StudentName,Age, Education,Gender,PhoneNumber,Nationality,CountryOfResidence,Email)
      VALUES ('$name', '$Age', '$Education','$Gender','$Mobile','$Nationality','$Country','$Email')";
      
      if (mysqli_query($conn, $sql)) {
        $last_num=mysqli_insert_id($conn);
        if($last_num){
          $code = rand(1,1000);
          $id="UIA1".date("Y").date("m").$code.$last_num;
          $query= "UPDATE uia_student SET StudentID ='".$id."' WHERE StudentNum='".$last_num."' ";
          $res= mysqli_query($conn,$query);
        }
        header("location:Trining Courses.php");
      }
      else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      mysqli_close($conn);
    }
    elseif($Job==="Teacher"){
      $sql = "INSERT INTO uia_teacher (TeacherName,Age, Education,Gender,Phone_Number,Nationality,CountryOfResidence,Email)
      VALUES ('$name', '$Age', '$Education','$Gender','$Mobile','$Nationality','$Country','$Email')";
      if (mysqli_query($conn, $sql)) {
        $last_num1=mysqli_insert_id($conn);
        if($last_num1){
          $code = rand(1,1000);
          $id="UIA2".date("Y").date("m").$code.$last_num1;
          $query= "UPDATE uia_teacher SET TeacherID ='".$id."' WHERE TeacherNum='".$last_num1."' ";
          $res= mysqli_query($conn,$query);
        }
        //header("location:Teacher Page.php");
      } 
      else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      mysqli_close($conn);
    }
    else{
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
 

?>





<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Sign in</title>
    <link rel="icon" href="img/UIA Logo - No name1.png" sizes="32x32" type="image/png">
</head>

<body style= "background-color: #F1F1F4;" >

    <nav class="navbar navbar-expand-lg navbar-light sticky " style="position: -webkit-sticky;position: sticky;top: 0; z-index:1; background-color: #F1F1F4; box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%); border-bottom:1px solid #000000; box-sizing: inherit;" >
        <div class="container-fluid col-3 mx-auto">
          <a class="navbar-brand" href="Home.php">
            <img src="img/logo1.png"  width="70" height="90">
             <img src="img/name.png"  width="220" height="40" >
          </a>
        </div>
    </nav>

    <div class="container w-50 mt-5">
        <form style="border: 2px solid rgb(102, 99, 99); border-radius: 20px; padding:30px;" action="" method="post">
          <h2 style="text-align: center; font-weight: bold;  font-family: Georgia, Times, serif; color: rgb(218, 11, 11); margin-bottom: 30px;"> Sign in</h2>
          <div class="row">
            <div class="form-group col-lg-7">
                <label  style="font-weight: bold;  font-family: Georgia, Times, serif;" >Name</label>
                <input placeholder="الأسم" class="form-control" type="text" name="name" required>
                <small class="form-text text-muted"> Enter your full name / ادخل إسمك الرباعي</small>
            </div>

            <div class="form-group col-md-5">
              <label  style="font-weight: bold;  font-family: Georgia, Times, serif;">Age</label>
              <input placeholder="العمر"  class="form-control" type="date" name="Age" required>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-7">
            <label  style="font-weight: bold;  font-family: Georgia, Times, serif; margin:0%;" >Education</label>
            <select class="form-control" name="Education" required >
              <option style="font-family: Georgia, Times, serif;" value="Primary School">Primary School/ إبتدائي</option>
              <option style="font-family: Georgia, Times, serif;" value="Middle School">Middle School / متوسط</option>
              <option style="font-family: Georgia, Times, serif;" value="High School">High School / ثانوي</option>
              <option style="font-family: Georgia, Times, serif;" value="Academic">Academic / جامعي</option>
             
            </select>
        </div>
          <div class="form-group col-md-5" >
            <label  style="font-weight: bold;  font-family: Georgia, Times, serif; margin-bottom:0%"> Gender</label>
            <div>
              <select class="form-control" name="Gender"required>
                <option style="font-family: Georgia, Times, serif;" value="Male">Male / ذكر</option>
                <option style="font-family: Georgia, Times, serif;" value="Female">Female / أنثى</option>
              </select>
            </div>
        </div>
      </div>
      
      <div class="row">
        <div class="form-group col-lg-7 ">
          <label  style="font-weight: bold;  font-family: Georgia, Times, serif;">Mobile Number </label>
          <input placeholder="رقم الهاتف"  class="form-control" type="tel" name="Mobile" required>
      </div>
      <div class="form-group col-md-5 ">
        <label class="form-check-label" style="font-weight: bold;  font-family: Georgia, Times, serif;"> Job </label>
      <div>
        <select class="form-control" name="Job" required>
          <option style="font-family: Georgia, Times, serif;" value="Student">Student / طالب</option>
          <option style="font-family: Georgia, Times, serif;" value="Teacher">Teacher / معلم</option>
        </select>
      </div>
    </div>
    </div>

    <div class="row">
            <div class="form-group col-lg-6">
              <label  style="font-weight: bold;  font-family: Georgia, Times, serif;">Nationality</label>
              <input placeholder="الجنسية" class="form-control" name="Nationality" type="text" required>
          </div>
          <div class="form-group col-md-6">
            <label  style="font-weight: bold;  font-family: Georgia, Times, serif;">Country of Residence</label>
            <input placeholder="بلد الإقامة" class="form-control" name="Country" type="text" required>
        </div>
       </div>

        <div class="form-group">
          <label  style="font-weight: bold;  font-family: Georgia, Times, serif;">Email</label>
          <input placeholder="الإيميل" class="form-control" name="Email" type="email" required>
      </div>

        <br/>
        <div class="d-grid gap-2 col-8 mx-auto" style="font-weight: bold; font-family: Georgia, Times, serif;">
          <a class="link-light" href="Home.php">
            <button name="Sign in" type="submit" class="btn" style="width:100%; background: #050569; color:#FFFFFF; border:2px solid #aa9b9b; border-radius: 20px; padding: 10px; ">
             Sign in 
            </button>
          </a>
        </div>
            
        </form>

        <span style=" font-family: Georgia, Times, serif;">Do you hava an account? <span style=" font-family: Georgia, Times, serif;"><a href="Login.php"> Login</a></span> </span>



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