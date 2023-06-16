
<?php
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost; dbname=uiadb;",$username,$password);

if(isset($_GET['btn-search'])){
  $Search=$database->prepare("SELECT * FROM uia_student WHERE StudentName LIKE :value");
  $search_value="%".$_GET['search']."%";
  $Search->bindParam("value",$search_value);
  $Search->execute();

//   if(isset($Search)){
//    echo "location:Trining Courses.php";
//   }
  foreach($Search AS $data ){
   echo "location:Trining Courses.php";
  }
}

?>

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