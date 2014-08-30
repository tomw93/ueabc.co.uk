<?php
    include_once ('layout/page.php');

  $page = new Page();
  $page->setTitle("about - donations");
  $page->setRoot("../");
  $page->setDescription("Donate towards the University Of East Anglia Boat Club and help us improve our rowing status as a university.");
  $body = '<article class="about">
        <content>
           <a class="title">Donations</a><br>
           <br>The club is Union funded, meaning we get a set amount of money every year to pay for all the clubs needs. This money is also topped up with the members subs.<br/>
           <br>The money is for coaching, training, boat repairs and maintenence, trailering to races, and other general rowing club needs. Money is tight. It&#39;s always a struggle every year to secure funding from the Union, which unfortunately directly influences training and racing.<br/>
           <br>We would be very grateful if you chose to <a class="important">donate to the club</a>, no matter how much, it all adds up. We currently do not have a donations page, however if you would like to donate, contact the club directly by email: <a class="important" href="mailto:secretary.ueabc@gmail.com">secretary.ueabc@gmail.com</a>
        </content>
      </article>';
  $page->setBody($body);
  $page->printPage();
?>