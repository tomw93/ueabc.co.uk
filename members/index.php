<?php
  include_once ('layout/page.php');
  include_once('databaseFunctions.php');
  $valid = false;
  // gets username and password in session
  print $_SESSION['username']);
 if(isset($_POST['Login'])){
      $username = $_POST['username'];
      $password = $_POST['userpassword'];
      $valid = validUser($username, $password);
  }else if(isset($_SESSION['username'])) {
      $username = $_SESSION['username'];
      $password = $_SESSION['userpassword'];
      $valid = validUser($username, $password);
  }

  $page = new Page();
  $page->setTitle("members");
  $page->setRoot("../");
  $page->setDescription("Members Area for the Squads.");
  $page->setJS('<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
                <script>$(function() {
                 $(".newsDate").datepicker();
                 $(".addForm").hide();$(".postNewsForm").hide();$(".userList").hide();$(".addVideo").hide();$(".addPhoto").hide();
                });</script>');
  $page->setCSS('<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">');

   // if the add user form is sent
  if(isset($_POST['addUser'])){
      // if the username has been entered
      if(isset($_POST['newName'])){
          $newName = $_POST['newName'];
          $newPassword = $_POST['newPassword'];
          $confirmNewPassword = $_POST['confirmNewPassword'];
          $type = $_POST['type'];
          // if the passwords match
          if($newPassword == $confirmNewPassword && !empty($newName) && !empty($newPassword) && !empty($confirmNewPassword)){
            
              addUser($newName, $newPassword, $type);
          }else{
              echo "<script>$(window).load(function() { alert('The new password and confirm new passwords do not match!') });</script>";
          }
      }else{
          echo "<script>$(window).load(function() { alert('No username entered!') });</script>";
      }
  }


  // if the user posts a news item
  if(isset($_POST['addNews'])){
    $newsTitle = $_POST['newsTitle'];
    $newsDate = $_POST['newsDate'];
    $newsContent = $_POST['newsContent'];

    // if all information has been entered post news item
     if(!empty($newsTitle) && !empty($newsDate) && !empty($newsContent)){
      postNews($newsDate, $newsTitle, $newsContent);
    }else{
      print "<script>$(window).load(function() { alert('Invalid data input!') });</script>";
    }
  }

  // if the user adds a new video
  if(isset($_POST['addVideo'])){
    $videoTitle = $_POST['videoTitle'];
    $videoURL = $_POST['videoURL'];
    $videoDate = $_POST['videoDate'];

    // if all information has been entered post news item
     if(!empty($videoTitle) && !empty($videoURL) && !empty($videoDate)){
      addVideo($videoTitle, $videoURL, $videoDate);
    }else{
      print "<script>$(window).load(function() { alert('Invalid data input!') });</script>";
    }
  }

    // if the user adds a new photo
  if(isset($_POST['addPhoto'])){
    $photoTitle = $_POST['photoTitle'];
    $photoDate = $_POST['photoDate'];
    $type = $_POST['photoType'];
    $user = $_SESSION['username'];

    // if all information has been entered post news item
     if(!empty($photoTitle) && !empty($photoDate) && !empty($type)){
      addPhoto($photoTitle, $photoDate, $type, $user);
    }else{
      print "<script>$(window).load(function() { alert('Invalid data input!') });</script>";
    }
  }

  // destorys session if user has logged out
  if(isset($_POST['logout'])){
    if (session_status() == PHP_SESSION_ACTIVE) {
      session_destroy();
    }
      unset($_SESSION['username']);
  }

  // checks if session has timed out
  if (session_status() == PHP_SESSION_ACTIVE) {
    if (isset($_SESSION['CREATED'])) {
        if (time() - $_SESSION['CREATED'] > 1800) {
            echo "<script>$(window).load(function() { alert('Session Expired'); });</script>";
            session_destroy();
            unset($_SESSION['username']);   
        }
    }
  }
  $body = '
  <article class="members">
    <content>
      <a class="title">Members</a><br><br>';

      // checks to see if a user has logged in or a username is set
      if(isset($_POST['Login']) || isset($_SESSION['username'])){

      
        // checks to see if the user is valid
        if ($valid){
            $body.= "<ul class=\"details\">
            <li><b>Welcome:</b> ".$_SESSION['username']."</li>
            <li><b>Account Type:</b> ".$_SESSION['userType']."</li>
            <li><form action=\"\" method=\"post\"><input type=\"hidden\" name=\"logout\" value=\"true\"><button class=\"logout\"type=\"submit\" >logout</button></form></li>";

            // shows admin tools
             if ($_SESSION['userType'] == "admin"){
                $body.= "<li><button onclick=\"$('.addForm').show(200)\" class=\"add\" >add new user...</button></li>";
                $body.= "<li><button onclick=\"$('.userList').show(200)\" class=\"list\" >view all users</button></li>";
                $body.= "<li><button onclick=\"$('.postNewsForm').show(200)\" class=\"list\" >create news post</button></li>";
                $body.= "<li><button onclick=\"$('.addVideo').show(200)\" class=\"list\" >add video</button></li>";
                $body.= "<li><button onclick=\"$('.addPhoto').show(200)\" class=\"list\" >add photo</button></li>";
             }
            $body.= "</ul>";

            // shows admin tool forms on click
            if ($_SESSION['userType'] == "admin"){

              // add user tool
             $body.= "<div class='addForm'><form action=\"\" method=\"post\">
                    <input type=\"hidden\" name=\"addUser\" value=\"true\">
                    <input class=\"name\" type=\"text\" name=\"newName\" placeholder=\"someone@ueabc...\">
                    <input class=\"pass\" type=\"password\" name=\"newPassword\" placeholder=\"enter a password...\">
                    <input class=\"pass\" type=\"password\" name=\"confirmNewPassword\" placeholder=\"confirm password...\">
                    <select required class=\"select\" name=\"type\">
                      <option value=\"admin\" selected>admin</option>
                      <option value=\"committee\">committee</option>
                      <option value=\"mens\">mens</option>
                      <option value=\"womens\">womens</option>
                    </select>
                    <button class=\"login\" type=\"submit\" name=\"Create\">Create</button>
                </form></div>";

                // show all user list tool
                $sql = mysql_query("SELECT `username` FROM `member`") or die("MySQL Error - Failed to Select users");
                $body .= "<div class='userList'><ul>";
                while ($results = mysql_fetch_array($sql)){
                    $body .= "<li> ".$results['username']."</li>";
                }
                $body .="</ul></div>";

                // add news post tool
                $body.= "<div class='postNewsForm'><form action=\"\" method=\"post\">
                        <input type=\"hidden\" name=\"addNews\" value=\"true\">
                        <input class=\"name\" type=\"text\" name=\"newsTitle\" placeholder=\"title\">
                        <input class='newsDate' name='newsDate' type=\"text\" placeholder='select date'>
                        <textarea class='newsContent' cols=\"40\" rows=\"5\" name=\"newsContent\" placeholder='add content (in HTML)'></textarea>
                        <button class=\"login\" type=\"submit\" name=\"submitNewsPost\">Create Post</button>
                    </form></div>";

                // add video tool
                $body.= "<div class='addVideo'><form action=\"\" method=\"post\">
                        <input type=\"hidden\" name=\"addVideo\" value=\"true\">
                        <input class=\"name\" type=\"text\" name=\"videoTitle\" placeholder=\"title\">
                        <input class=\"name\" type=\"text\" name=\"videoURL\" placeholder=\"URL\">
                        <input class='newsDate' name='videoDate' type=\"text\" placeholder='select date'>
                        <button class=\"login\" type=\"submit\" name=\"submitNewsPost\">Add Video</button>
                    </form></div>";

                  // add photo tool
                 $body.= "<div class='addPhoto'><form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
                        <input type=\"hidden\" name=\"addPhoto\" value=\"true\">
                        <input class=\"name\" type=\"text\" name=\"photoTitle\" placeholder=\"title\">
                        <div class=\"name\"><label for=\"file\">Choose file:</label>
                        <input type=\"file\" name=\"file\" id=\"file\"></div>
                        <input class='newsDate' name='photoDate' type=\"text\" placeholder='select date'>
                        <select required class=\"select\" name=\"photoType\">
                          <option value=\"race\" selected>race</option>
                          <option value=\"social\">social</option>
                          <option value=\"training\">training</option>
                        </select>
                        <button class=\"login\" type=\"submit\" name=\"Create\">Add Photo</button>
                    </form></div>";
                }

            // shows documents that user has access to
             $body.= "<div class=\"docs\"><b>Documents</b><br/><ul>";
             if ($_SESSION['userType'] == "mens" || $_SESSION['userType'] == "admin"){
                  $body.= "<li><a href=\"https://docs.google.com/spreadsheet/ccc?key=0AldUbOj2n_d3dDM4YUNSOVlUaW00blE5djhlcThhOUE \" target=\"_blank\">Training Log</a></li>
                        <li><a href=\"https://docs.google.com/document/d/11LGVIrxf-C8ixmaKlBpPbDqZqazbkFAR7f3XjPly-eU/edit \" target=\"_blank\">Training Schedule</a></li>
                        <li><a href=\"https://docs.google.com/document/d/1YTZehc_L01ekYOUTt54EVBQjswTnl3CUQJDxq6yc7e0/edit?usp=sharing\" target=\"_blank\">Squad Contact List</a></li>";
             } 
             if($_SESSION['userType'] == "womens" || $_SESSION['userType'] == "admin"){
                  $body.= "<li><a href=\"https://docs.google.com/document/d/1Aw9o8BmLujBHPvER91XxzoQQAKBVE5TEqzgc9uAbARY/edit?usp=sharing\" target=\"_blank\">Squad Contact List</a></li>
                        <li><a href=\"https://docs.google.com/spreadsheet/ccc?key=0ApRij4lBoRCOdEEtNl9IeTByQzgzdDZlclR1OGxtM1E\" target=\"_blank\">Spring Training Log</a></li>
                        <li><a href=\"https://docs.google.com/spreadsheet/ccc?key=0ApRij4lBoRCOdFdXOWYyN3FSbXVMc2FFN2x1dXpnMWc\" target=\"_blank\">Autumn Training Log</a></li>";
             }
             if($_SESSION['userType'] == "committee" || $_SESSION['userType'] == "admin"){
                  $body.= "<li><a href=\"https://docs.google.com/document/d/1Z7W6P08Y7opAvLhCrBSbkE0xBWtyINur-iq-oNIvNZc/edit?usp=sharing\" target=\"_blank\">Committee Emails</a></li>
                        <li><a href=\"https://docs.google.com/document/d/1yikglHHRHjz_9jrEnoTuNfMMJSvJSPY1aFA6An98x6k/edit?usp=sharing\" target=\"_blank\">Committee Contacts</a></li>";
                        
             }

          // Adds the google calendar
         $body.="</ul></div><div class=\"calendar\"><iframe src=\"https://www.google.com/calendar/embed?src=5pcfuv14b6iuj77ptbto35pu20%40group.calendar.google.com&ctz=Europe/London\"  frameborder=\"0\" scrolling=\"no\"></iframe></div>";
         }
         else{

            // user login
           $body.= "
                <form action=\"\" method=\"post\">
                  <input class=\"name\" type=\"text\" name=\"username\" placeholder=\"enter username...\">
                    <input class=\"pass\" type=\"password\" name=\"userpassword\" placeholder=\"enter password...\">
                    <button class=\"login\" type=\"submit\" name=\"Login\">Login</button>
                </form>";
             if($username != null){
                $body.="<script type='text/javascript'>\n
                   alert('Login Invalid!');\n
                   </script>";
             }
             if($username == null){
                $body.="<script type='text/javascript'>\n
                   alert('No details entered!');\n
                   </script>";
             }
        }
    }else{
        $body.= "
                <form action=\"\" method=\"post\">
                    <input class=\"name\" type=\"text\" name=\"username\" placeholder=\"enter username...\">
                    <input class=\"pass\" type=\"password\" name=\"userpassword\" placeholder=\"enter password...\">
                    <button class=\"login\" type=\"submit\" name=\"Login\">Login</button>
                </form>"; 
    } 
    $body.= '</content>
  </article>';

  $page->setBody($body);
  $page->printPage();
?>