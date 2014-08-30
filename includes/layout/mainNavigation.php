<?php
class MainNav{
	
	private $navCode;

	public function MainNav(){
		$this->navCode = $this->getCode();
	}

    public function getCode(){
		$html ='
			<nav class="navigation"><ul class="flexnav" data-breakpoint="749">
				<li class="active"><a href="/" title="home">home</a></li>
				<li><a title="about us">about us</a>
					<ul>
					 	<li><a href="/about/us" title="About UEABC">about UEABC</a></li>
						<li><a href="/about/rowing" title="About Rowing">about rowing</a></li>
						<li><a href="/about/recruitment" title="recruitment">recruitment</a></li>
	   		                <li><a href="/about/where-we-row" title="Where We Row">where we row</a></li>
	    	                <li><a href="/about/donations" title="Donations">donations</a></li>
	    	                <li><a href="/about/the-team/" title="The Team">the team</a>
			             	<ul>
			                	<li><a href="/about/the-team/womens-squad.php" title="Womens Squad">womens squad</a></li>
			                	<li><a href="/about/the-team/mens-squad.php" title="Mens Squad">mens squad</a></li>
			                	<li><a href="/about/the-team/coxes.php" title="Coxes">coxes</a></li>
			                	<li><a href="/about/the-team/coaches.php" title="Coaches">coaches</a></li>
			           		</ul>
		           		</li>
	                </ul>
				</li>
				<li><a title="Training">training</a>
					<ul>
	                    <li><a href="/training/boathouses" title="Boathouse">boathouse</a></li>
	                    <li><a href="/training/boats" title="Boats">boats</a></li>
	                    <li><a href="/training/land" title="Land Training">land training</a></li>
	                    <li><a href="/training/learn-to-row" title="Learn to Row">learn to row</a></li>
	                    <li><a href="/training/camp" title="Training Camp">training camp</a></li>
	                </ul>
	            </li>
				<li><a title="Results">results</a>
					<ul class="results">
						<li><a href="/results/2013-14" title="Results 2013/14">results 2013/14</a></li>
		                <li><a href="/results/2012-13" title="Results 2012/13">results 2012/13</a></li>
		                <li><a href="/results/2011-12" title="Results 2011/12">results 2011/12</a></li>
		                <li><a href="/results/2010-11" title="Results 2010/11">results 2010/11</a></li>
					</ul>
	            </li>
				<li><a title="Media">media</a>
		            <ul>
		                <li><a href="/media/news" title="News">news</a></li>
		                <li><a href="/media/videos" title="Videos">videos</a></li>
		                <li><a href="/media/photos/" title="Photos">photos</a>
		                <ul>
		                    <li><a href="/media/photos/races" title="Races">races</a></li>
		                    <li><a href="/media/photos/training" title="Training">training</a></li>
		                    <li><a href="/media/photos/social-events" title="Social Events">social events</a></li>
		                </ul>
		                </li>
					</ul>
	        	</li>
			    <li><a href="/members/" title="Members">members</a></li>
			    <li><a href="/contacts" title="Contacts">contacts</a></li>
			</ul></nav>';
		return $html;
	}

	public function printMainNav(){
		echo $this->navCode;
	}
}
?>

