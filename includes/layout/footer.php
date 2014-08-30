<?php
class Footer{
	private $footer;
	private $rootRelHref;
	private $JS;

	public function Footer(){
		
	}

	public function generateFooter(){
		$this->footer = $this->getFooter();
	}

	/*

	<li class="share"><a class="facebook" href="https://www.facebook.com/UEABC" title="Click to view us on Facebook" target="_blank"><img src="'.$this->rootRelHref.'images/share/facebook2.png" alt="Share on Facebook" /></a><div class="borderLeft"></div></li>
	<li class="share"><a href="https://twitter.com/ueabc" title="Follow Us On Twitter!" target="_blank"><img class="twitter" src="'.$this->rootRelHref.'images/share/twitter2.png" alt="Share on Twitter" /></a></li>
	<li class="share"><a href="https://www.youtube.com/user/UEABC" title="Click to view our youtube channel!" target="_blank"><img class="youtube" src="'.$this->rootRelHref.'images/share/you_tube2.png" alt="Watch on youtube" /></a></li>
	<li><a href="/sitemap.php" title="site map">site map</a></li>
	<li><a>last updated: 18/06/2013</a></li>
	*/
	public function getFooter(){
		$foot = '<footer class="mainFooter"> 
					<ul>  
						<li class="britishRowing"><a href="http://www.britishrowing.org" title="British Rowing" target="_blank"><img src="'.$this->rootRelHref.'images/share/brlogo.png" alt="British Rowing" /></a></li>
						<li class="union"><a href="http://ueastudent.com" title="UEA Union" target="_blank"><img src="'.$this->rootRelHref.'images/share/union-logo.png" alt="UEA Union" /></a></li>
						<li class="whitlingham"><a href="http://www.whitlinghamboathouses.co.uk" title="Whitlingham Boat Houses" target="_blank"><img src="'.$this->rootRelHref.'images/share/WhitlinghamBH-logo.png" alt="Whitlingham Boat Houses" /></a></li>
						<li class="facebook"><a href="https://www.facebook.com/UEABC" title="Click to view us on Facebook" target="_blank"><img src="'.$this->rootRelHref.'images/share/facebook2.png" alt="Share on Facebook" /></a></li>
						<li class="twitter"><a href="https://twitter.com/ueabc" title="Follow Us On Twitter!" target="_blank"><img class="twitter" src="'.$this->rootRelHref.'images/share/twitter2.png" alt="Share on Twitter" /></a></li>
						<li class="youtube"><a href="https://www.youtube.com/user/UEABC" title="Click to view our youtube channel!" target="_blank"><img class="youtube" src="'.$this->rootRelHref.'images/share/you_tube2.png" alt="Watch on youtube" /></a></li>
						<li class="copyright">Copyright &copy; 2014 UEABC<br>Website created by <a href="https://www.tom-wilkins.co.uk">Tom Wilkins</a><br><a href="/sitemap.php" title="site map">site map</a></li>

			    	</ul>
				</footer>
				</div><!-- END OF MAIN WRAPPER -->
				<script>
				  (function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,"script","//www.google-analytics.com/analytics.js","ga");

				  ga("create", "UA-44076979-1", "ueabc.co.uk");
				  ga("send", "pageview");

				</script>
				' . $this->JS .'
			</body><!-- END OF BODY -->

		</html>';
		return $foot;
	}

	public function getRoot(){
		return $this->rootRelHref;
	}

	public function setFooterJS($js){$this->JS=$js;}

	public function setRoot($root){
		$this->rootRelHref = $root;
	}
    
	public function printFooter(){
		$this->generateFooter();
		echo $this->footer;
	}
}
?>

