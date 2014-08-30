<?php
   	include_once ('layout/page.php');

	$page = new Page();
	$page->setTitle("home");
	$page->setRoot("");
	$page->setDescription("University Of East Anglia Boat Club - Competitive rowing club that caters for students of the University.");
	$page->setCSS('<link rel="stylesheet" href="'.$page->getRoot().'css/nivo-slider.css" media="screen">');
	$page->setFooterJS('<script src="'.$page->getRoot().'js/jquery.nivo.slider.pack.js"></script>
	<script>
	    $(window).load(function() {
	        $("#slider").nivoSlider({
	            directionNavHide: false,
	            captionOpacity: 1,
	            prevText: "<",
	            nextText: ">",
	            pauseTime:5000
	        });
			$(".addForm").hide();
			$(".userList").hide();
	    });
	</script>'
	);

	$body = '
	<div class="slider-wrapper">
		<div class="banner-item">
			<div id="slider" class="nivoSlider">
				<img src="images/slider/menRowing.jpg" title="Alumni Race">
				<img src="images/slider/womenRowing2.jpg" title="Carrow Cup">
				<img src="images/slider/womenRowing.jpg" title="Derby Day">
				<img src="images/slider/menRowing2.jpg" title="Henley">
				<img src="images/slider/menRowing3.jpg" title="Cambridge Winter Head">
				<img src="images/slider/cityRowing1.jpg" title="Rowing in the city">
			</div><!-- slider -->
		</div><!-- banner item-->
	</div><!-- slider wrapper -->
	<article class="pageText">
		<a class="title">UEABC</a>
		<content>
			<p>UEA Boat Club is a competitive rowing club in Norwich that caters for students of the University of East Anglia. We are a competitive club, training and racing throughout the year at events across the UK.</p>
			<p>We field men&#39;s and women&#39;s squads and cater for all levels of experience. See the &#39;About us&#39; the tab to find out more.</p>
		</content>
	</article>
	<article class="newsFeed">
		<a class="title">Lastest News</a>
		<script>
			function checkNews(id, long, short){
	        	var content;
	        	var width = $(window).width();
	        	if (width <= 800){
	        		$("li.newsContent .contents" + id).html(long + "...");
	        	}else{
	        		$("li.newsContent .contents" + id).html(short + "...");
	        	}
	        }
		</script>
		';
	$sql = mysql_query("SELECT * FROM `news` ORDER BY `date` DESC LIMIT 3") or die("MySQL Error - Failed to Select news");
	while ($results = mysql_fetch_array($sql)){

	  	$date = $results['date'];
	  	$month = substr($date, 5,2);
    	$day = substr($date, 8,2);
    	$year = substr($date, 0, 4);
    	
    	$jd = gregoriantojd(intval($month), intval($day), intval($year));
    	
	  	$monthText = jdmonthname( $jd , 0 );
        $title = $results['title'];
        $content = $results['contents'];
        $shortContents = substr($content, 0,40);
        $longContents = substr($content, 0,150);

        $body.= '
        <ul class="newsPost">
        <li class="newsDate">' . $day . '/' . $monthText . '</li>
        <li class="newsContent"><div class="newsTitle"><a href="http://www.ueabc.co.uk/media/news">' . $title . '</a></div>
        <div class="contents'.$results['newsID'].'"></div></li>

        </ul><!-- .newsPost -->
        <!-- SCRIPT dynamically checks news, helped with media queries -->
        <script>
        $(window).load(function() {

        	var id= "'.$results['newsID'].'";
    		var long = "'.strip_tags($longContents).'";
    		var short = "'.strip_tags($shortContents).'";

        	
	        checkNews(id, long, short);
    		$( window ).resize(function() {
    			
					checkNews(id, long, short);
				
    		});
		});
        </script>';

	}
	$body .= '</article><!-- newsFeed -->';
/*
	<div class="twitterWidget">
		<a class="twitter-timeline" href="https://twitter.com/UEABC" data-widget-id="346003335175868416">Tweets by @UEABC</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>*/

	$page->setBody($body);
	$page->printPage();
?>