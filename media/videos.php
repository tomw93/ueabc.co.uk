<?php

    /* ========== VIDEOS PAGE media/videos.php ==
    ============= Tom Wilkins 12/08/13 ===== */
    include_once ('layout/page.php');

    $page = new Page();
    $page->setTitle("media - videos");
    $page->setRoot("../");
    $page->setDescription("Videos of UEABC both at races and in training. They are all from our YouTube Channel.");

    $body = '<article class="videos">
        <content>
            <a class="title">Videos</a><br>';
        
                $sql = mysql_query("SELECT * FROM `videos` ORDER BY `dateAdded` DESC") or die("MySQL Error - Failed to Select videos");
              
                while ($results = mysql_fetch_array($sql)){
                    $name = $results["name"];
                    $videoUrl = $results["url"];
                    $body.= "<div class=\"video2\">".$name."<br/><iframe src=\"".$videoUrl."\" frameborder=\"0\" allowfullscreen></iframe><br /><br /></div>";    
                } 
    $body .= '</content>
    </article>';

    $page->setBody($body);
    $page->printPage();
?>
