<?php

    /* ========== NEWS PAGE media/news.php ==
    ============= Tom Wilkins 12/08/13 ===== */
  	include_once ('layout/page.php');

  	$page = new Page();
  	$page->setTitle("media - news");
  	$page->setRoot("../");
  	$page->setDescription("The latest news from UEABC, summary of each race and any other news.");

  	$body = '<article class="about">
	    		<content>
	    	<a class="title">News</a><br>
		    <br /></p> ';
		   
	$sql = mysql_query("SELECT * FROM `news` ORDER BY `date` DESC") or die("MySQL Error - Failed to Select news");
	while ($results = mysql_fetch_array($sql)){
	  	$date = $results['date'];
	  	$month = substr($date, 5,2);
    	$day = substr($date, 8,2);
    	$year = substr($date, 0, 4);
    	
    	$jd = gregoriantojd(intval($month), intval($day), intval($year));
	  	$monthText = jdmonthname( $jd , 1);
        $title = $results['title'];
        $content = $results['contents'];

        $body.='<p><b>'.$day.' '.$monthText.' '.$year.':</b> '.$title.'<br><br>
        		'.$content.'</p><br><hr>';
	}
	$body.= '</contents>
	</article>';
  	$page->setBody($body);
  	$page->printPage();

?>
