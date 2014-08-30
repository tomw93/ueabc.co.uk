<?php

    /* ========== SITE MAP PAGE /sitemap.php ==
    ============= Tom Wilkins 12/08/13 ===== */

	include_once ('layout/page.php');

    $page = new Page();
    $page->setTitle("sitemap");
    $page->setRoot("");
    $page->setDescription("A site map of the website, from here you can see and access all the pages.");

    $body = '<article class="siteMap">
	<content>
		<a class="title">UEABC.co.uk Site Map</a><br><br>

    <div id="cont">
        <h3><a href="http://www.ueabc.co.uk">Homepage</a>
            Last updated: 2013, December 22
        </h3>


        <table cellpadding="0" cellspacing="0" border="0" width="100%">

            <tr valign="top">
                <td class="lpart" colspan="100"><div class="lhead">/
                    <span class="lcount">3 pages</span></div>

                    <table cellpadding="0" cellspacing="0" border="0" width="100%">

                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/" title="UEABC Website (Home)">
                            UEABC Website (Home)
                        </a></td></tr>
                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/sitemap" title="Site Map">
                            Site Map
                        </a></td></tr>
                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/Contacts" title="UEABC Contacts">
                            UEABC Contacts
                        </a></td></tr>
                    </table>
                </td>
            </tr>

            <tr valign="top">
                <td class="lbullet">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="lpart" colspan="99"><div class="lhead">Results/
                    <span class="lcount">3 pages</span></div>

                    <table cellpadding="0" cellspacing="0" border="0" width="100%">

                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/Results/2012-13" title="2012/13 Results">
                            2012/13 Results
                        </a></td></tr>
                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/Results/2011-12" title="2011/12 Results">
                            2011/12 Results
                        </a></td></tr>
                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/Results/2010-11" title="2010/11 Results">
                            2010/11 Results
                        </a></td></tr>
                    </table>
                </td>
            </tr>
 
            <tr valign="top">
                <td class="lbullet">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="lpart" colspan="99"><div class="lhead">Media/
                    <span class="lcount">3 pages</span></div>
 
                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
 
 
                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/Media/index" title="Media - News">
                            News
                        </a></td></tr>
                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/Media/photos/" title="Media - photos">
                            Photos
                         <tr valign="top">
                <td class="lbullet">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="lpart" colspan="99"><div class="lhead">photos/
                <span class="lcount">3 pages</span></div>
                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                         <tr><td class="lpage"><a href="http://www.ueabc.co.uk/Media/photos/races" title="Media - photos - races">
                            Photos - races
                        </a></td></tr>
                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/Media/photos/training" title="Media - photos - training">
                            Photos - training
                        </a></td></tr>
                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/Media/photos/socialEvents" title="Media - photos - social events">
                            Photos - social events
                        </a></td></tr>
</table>
                      </td>
            </tr>

                        </a></td></tr> 
                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/Media/videos" title="Media - videos">
                            Videos
                        </a></td></tr>
                    </table>
                </td>
            </tr>
 
            <tr valign="top">
                <td class="lbullet">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="lpart" colspan="99"><div class="lhead">Members/
                    <span class="lcount">1 pages</span></div>
 
                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
 
 
                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/Members/index" title="Members">
                            Members
                        </a></td></tr>
 
                    </table>
                </td>
            </tr>
 
            <tr valign="top">
                <td class="lbullet">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="lpart" colspan="99"><div class="lhead">Training/
                    <span class="lcount">4 pages</span></div>
 
                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
 
                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/Training/index" title="The Boathouse">
                            The Boathouse
                        </a></td></tr>
                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/Training/boats" title="The Boats">
                            The Boats
                        </a></td></tr>
                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/Training/land-training" title="Land Training">
                            Land Training
                        </a></td></tr>
                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/Training/learn-to-row" title="Learn to Row">
                            Learn to Row
                        </a></td></tr>
                        
                    </table>
                </td>
            </tr>
 
            <tr valign="top">
                <td class="lbullet">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="lpart" colspan="99"><div class="lhead">about-us/
                    <span class="lcount">4 pages</span></div>
 
                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
 
                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/about-us/index" title="About UEABC">
                            About UEABC
                        </a></td></tr>
                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/about-us/Rowing" title="About Rowing">
                            About Rowing
                        </a></td></tr>
                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/about-us/where-we-row" title="Where we row">
                            Where we row
                        </a></td></tr>
                        <tr><td class="lpage"><a href="http://www.ueabc.co.uk/about-us/donations" title="Donations">
                            Donations
                        </a></td></tr>
                    </table>
                </td>
            </tr>
 
 
            <tr valign="top">
                <td class="lbullet">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="lbullet">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="lpart" colspan="98"><div class="lhead">The-Team/
                    <span class="lcount">5 pages</span></div>
 
                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
 
                    <tr><td class="lpage"><a href="http://www.ueabc.co.uk/about-us/The-Team/index" title="The Team">
                        The Team
                    </a></td></tr>
                    <tr><td class="lpage"><a href="http://www.ueabc.co.uk/about-us/The-Team/womens-squad" title="Womens Squad">
                        Womens Squad
                    </a></td></tr>
                    <tr><td class="lpage"><a href="http://www.ueabc.co.uk/about-us/The-Team/mens-squad" title="Mens Squad">
                        Mens Squad
                    </a></td></tr>
                    <tr><td class="lpage"><a href="http://www.ueabc.co.uk/about-us/The-Team/coxes" title="Coxswain">
                        Coxswain
                    </a></td></tr>
                    <tr><td class="lpage"><a href="http://www.ueabc.co.uk/about-us/The-Team/coaches" title="The Coaches">
                        The Coaches
                    </a></td></tr>
                    
                </table>
            </td>
        </tr>
 
    </table>
 
	</content>
</article>';

    $page->setBody($body);
    $page->printPage();
?>
