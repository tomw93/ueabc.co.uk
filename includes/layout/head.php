<?php
class Head{
	private $topHTML;
	private $title;
	private $js;
	private $css;
	private $bottomHTML;
	private $rootRelHref;
	private $metaDescription;

	public function Head(){
		
	}

	public function generateHead(){
		$this->topHTML = $this->topHead();
		$this->js;
		$this->css;
		$this->bottomHTML = $this->bottomHead();
	}

	public function setMetaDescription($description){
		$this->metaDescription = '<meta name="description" content="'.$description.'">';
	}

    public function topHead(){
		$html ='
		<!DOCTYPE html>
			<html lang="en">
				<head>
					'.$this->metaDescription.'
					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
					<link rel="stylesheet/less" type="text/css" href="'.$this->rootRelHref.'css/style.less" />
					<link rel="stylesheet/less" type="text/css" href="'.$this->rootRelHref.'css/flexnav.less" />  
					<script src="'.$this->rootRelHref.'js/less.js" type="text/javascript"></script>
					<script src="'.$this->rootRelHref.'js/jquery-1.7.2.min.js"></script>
					<script type="text/javascript" src="'.$this->rootRelHref.'js/jquery.flexnav.min.js"></script>

					<script>
						$(function() {
					    	$(".flexnav").flexNav();
					    	$(".mainHeader nav ol li").each(function(){
								var href = "/responsiveUEABC" + $(this).find("a").attr("href");

								if(href === window.location.pathname){
									$(this).addClass("active");
								}
							});

							var pull 		= $("#pull");
								menu 		= $("nav ol");
								menuHeight	= menu.height();

							$(pull).on("click", function(e) {
								e.preventDefault();
								menu.slideToggle();
							});

							$(window).resize(function(){
				        		var w = $(window).width();
				        		if(w > 320 && menu.is(":hidden")) {
				        			menu.removeAttr("style");
				        		}
				    		});
						});
					</script>
				';
		return $html;
	}

	public function getRoot(){
		return $this->rootRelHref;
	}

	public function setRoot($root){
		$this->rootRelHref = $root;
	}

	public function setTitle($title){
		$this->title = '<title>UEABC - ' . $title . '</title>';
	}

	protected function bottomHead(){
		$html = '</head>
				<body class="body">
					<div class="mainWrapper">
					<img class="UEABClogo" src="'.$this->rootRelHref.'images/youtubecrest.png">
					<div class="websiteTitle">UEA Boat Club</div>
					<div class="menu-button">menu<img src="'.$this->rootRelHref.'images/UEABC-Logo.png" alt="UEABC Logo" /></div>';
		return $html;
	}

	public function setJS($js){
		$this->js = $js;
	}

	public function setCSS($css){
		$this->css = $css;
	}

	public function printHead(){
		$this->generateHead();
		echo $this->topHTML, $this->title, $this->js, $this->css, $this->bottomHTML;
	}
}
?>

