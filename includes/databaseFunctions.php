<?php
include_once ('databaseConnection.php');

function userList(){
	$sql = mysql_query("SELECT `username` FROM `member`") or die("MySQL Error - Failed to Select users");
    $html = "<div class='userList'><ul>";
    while ($results = mysql_fetch_array($sql)){
        
        $html .= "<li> ".$results['username']."</li>";
    
    }
    $html .="</ul></div>";
    print $html;
}

function addVideo($title, $URL, $date){
    $day = substr($date, 8,2);
    $month = substr($date, 5,2);
    $year = substr($date, 0,4);
    $correctDate = $year . '-' . $month . '-' . $day;

    mysql_query("INSERT INTO videos (`name`, `url`, `dateAdded`) VALUES ('".$title."', '".$URL."', '".$correctDate."')") or die("MySQL Error - Failed to upload video");
    echo "<script>$(window).load(function() { alert('success!') });</script>";
}

function addPhoto($photoTitle, $photoDate, $type, $user){

    if(fileUpload($type)){
        $filename = $_FILES["file"]["name"];
        $approved = 1;
        $day = substr($photoDate, 8,2);
        $month = substr($photoDate, 5,2);
        $year = substr($photoDate, 0,4);
        $correctDate = $year . '-' . $month . '-' . $day;
        mysql_query("INSERT INTO photos (`username`, `name`, `url`, `dateTaken`, `type`, `approved`) VALUES ('".$user."', '".$photoTitle."', '".$filename."', '".$correctDate."','".$type."', '".$approved."')")or die("MySQL Error - Failed to upload photo");
        echo "<script>$(window).load(function() { alert('success!') });</script>";
    }else{
        echo "<script>$(window).load(function() { alert('problem uploading file!') });</script>";
    }
}

function fileUpload($type){

    $uploadTo;

    switch($type){
        case "race": $uploadTo = "racePhotos";break;
        case "social": $uploadTo = "socialEventPhotos";break;
        case "training": $uploadTo = "trainingPhotos";break;
    }

    echo $type . ' ' . $uploadTo;

    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);
    if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/pjpeg")
    || ($_FILES["file"]["type"] == "image/x-png")
    || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < 2000000)
    && in_array($extension, $allowedExts))
      {
      if ($_FILES["file"]["error"] > 0)
        {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
        return false;
        }
      else
        {
        echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        echo "Type: " . $_FILES["file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

        if (file_exists($uploadTo . "/" . $_FILES["file"]["name"]))
          {
          echo $_FILES["file"]["name"] . " already exists. ";
          return false;
          }
        else
          {
          move_uploaded_file($_FILES["file"]["tmp_name"],
          $uploadTo . "/" . $_FILES["file"]["name"]);
          echo "Stored in: " . $uploadTo . "/" . $_FILES["file"]["name"];
          return true;
          }
        }
      }
    else
      {
      echo "Invalid file";
      return false;
      }
}

function postNews($date, $title, $contents){
    $day = substr($date, 8,2);
    $month = substr($date, 5,2);
    $year = substr($date, 0,4);
    $correctDate = $year . '-' . $month . '-' . $day;

    mysql_query("INSERT INTO news (`date`, `title`, `contents`) VALUES ('".$correctDate."', '".$title."', '".$contents."')");
    echo "<script>$(window).load(function() { alert('success!') });</script>";
}

function addUser($username, $password, $type){

	$sql = mysql_query("SELECT * FROM `member` WHERE `username` = '".$username."'") or die("MySQL Error - Failed to Select users");
	$in = false;
	while ($results = mysql_fetch_array($sql)){
		$in = true;
	}
	if ($in){
		  echo "<script>$(window).load(function() { alert('User already in system!') });</script>";
	}else{
		$password = md5($password);
    	mysql_query("INSERT INTO member (username, userpassword, userType) VALUES ('".$username."', '".$password."', '".$type."')");
    	echo "<script>$(window).load(function() { alert('success!') });</script>";
	}
  
}

function validUser($username, $password){
        
    $realUsername = mysql_real_escape_string($username);
    $realPassword = mysql_real_escape_string($password);

    session_start();
    $_SESSION['CREATED'] = time();
    $valid = false;
    
    $hashedPassword = md5($realPassword);
    
    $sql = mysql_query("SELECT * FROM `member` WHERE '".$realUsername."' = `username` AND '".$hashedPassword."' = `userpassword`") or die("MySQL Error - Failed to Select users");
    
    while ($results = mysql_fetch_array($sql)){
        $_SESSION['username'] = $username;
        $_SESSION['userpassword'] = $password;
        $_SESSION['userType'] = $results['userType'];
        $valid = true;
    }
    if (!$valid){
    	session_destroy();
        return false;
    }else if($valid){

        return true;
    }
}

?>