<?php

  /* ========== recruitment PAGE about/recruitment.php ==
  ============= Tom Wilkins 12/08/13 ===== */
  include_once ('layout/page.php');
  
  $page = new Page();
  $page->setTitle("about - recruitment");
  $page->setRoot("../");
  $page->setDescription("Recruitment process and information for Freshers and anyone else interested.");

  $body = '
  <article class="recruitment">
  <content>
     <a class="title">Recruitment</a><br>
     <img class="tasterImg" src="../images/tasterDay.jpg" alt="Taster Day" />
     <br><b>Fresher? 2nd/ 3rd Year? Interested in joining?</b><br>
     <br>On the 25th September you will find us at the SportsMart where you can sign up for a taster day.<br>
     <br>The taster days will take place the following weekend at the <a class="important" href="http://www.ueabc.co.uk/about/where-we-row">boathouse</a> where you will get to experience rowing in an Eight, you will then do a 1k erg (rowing machine) test.<br>
     <br>That week the captains will then talk with the rest of the squad and chose 16 people to go on the <a class="important" href="http://www.ueabc.co.uk/training/learn-to-row">learn to row</a> course (see link for more info).<br>
     <br>The <a class="important" href="http://www.ueabc.co.uk/training/learn-to-row">learn to row</a> course only has 32 places (16 men and 16 women) meaning it is very competitive; however don&#39;t let this put you off!<br>
     <br><b>Already have rowing/ sculling experience?</b><br>
     <br>If you have previously rowed and/or sculled then you will be fast-tracked through and train with the main squad.<br>
     <br>Questions? Get in touch <a class="important" href="http://www.ueabc.co.uk/contacts">here.</a>
    </content>
  </article>';
  $page->setBody($body);
  $page->printPage();
?>