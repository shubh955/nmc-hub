
              <?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$email = $_POST["email"];
$password = $_POST["password"];


$flag = 'true';
//$query = $mysqli->query("SELECT email, password from users");

$result = $mysqli->query('SELECT * from users order by username asc  ');

if($result === FALSE){
  die(mysql_error());
}

if($result){
  while($obj = $result->fetch_object()){
    if($obj->email === $_POST["email"] && $obj->password === $_POST["password"] ) {

      $_SESSION['username'] = $obj->username;
      $_SESSION['password'] = $obj->password;
      $_SESSION['retypepassword'] = $obj->retypepassword;
      $_SESSION['email'] = $obj->email;
	   $_SESSION['mobile'] = $obj->mobile;
	   
	  
	   $_SESSION['areasqft'] = $obj->areasqft;
      $_SESSION['taxnumber'] = $obj->taxnumber;
      $_SESSION['floornumber'] = $obj->floornumber;
	   $_SESSION['electricnumber'] = $obj->electricnumber;
	   $_SESSION['aadhar'] = $obj->aadhar;
	   $_SESSION['waternumber'] = $obj->waternumber;
      $_SESSION['address'] = $obj->address;
      $_SESSION['facing'] = $obj->facing;
	   
	   
	   
	   
	   
	   
	   
	   
	  if ("nmc@gmail.com"===$_POST["email"])
			{
			header("location:mapshape");
		    }
	     elseif($obj->email===$_POST["email"])
		{
			
		header("location:anku.php");
		}
		
		else{
				header("location:register.html");
		}
    } else {

        if($flag === 'true'){
          redirect();
          $flag = 'false';
        }
    }
  }
}

function redirect() {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 3; url=index.html");
}


?>
