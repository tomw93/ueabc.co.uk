<?php

    /* ========== WHERE WE ROW PAGE about/where-we-row.php ==
    ============= Tom Wilkins 12/08/13 ===== */

    include_once ('layout/page.php');

    $page = new Page();
    $page->setTitle("about - where we row");
    $page->setRoot("../");
    $page->setDescription("Where abouts UEABC row in Norwich, explained with a map. Gives details on where we train both on and off the water.");

    $body='<article class="whereWeRow">
        <content>
            <a class="title">Where we row</a><br><br>
            Water sessions take place on the River Yare, starting from the Whitlingham boathouses on Whitlingham Lane, Trowse, NR14 8TS. This is a 15 minute drive or 20 minute cycle ride from campus. Generally rowers are responsible for making their own way to the river.<br>
            <br>We have about 30km of beautiful river accessible to us for training. You can row all the way to the sea if you have the time and stamina! There is relatively little river traffic compared with other popular rowing locations, and best of all it doesn&#39;t freeze until it gets below minus ten because of being slightly salty (it&#39;s also tidal), so we really can stay on the water all year round!<br>
            <br>Land training for the senior squads currently takes place at the Norwich School Gym on St Faith&#39;s Passage, beside the main cathedral in town, where we can use the ergs and weights on designated evenings</p>
        </content>
    </article>
    <aside class="map">
        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.uk/maps/ms?msa=0&amp;msid=211510590413499265187.0004aab732e3d97754cb5&amp;ie=UTF8&amp;ll=52.620305,1.322812&amp;spn=0,0&amp;t=h&amp;vpsrc=6&amp;output=embed"></iframe>
    </aside>';
    $page->setBody($body);
    $page->printPage();
?>
