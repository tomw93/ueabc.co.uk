<?php
include_once ('layout/head.php');
include_once ('layout/footer.php');
include_once ('layout/mainNavigation.php');
include_once ('databaseFunctions.php');
class Page{
	private $rootRelHref = "../../";
	private $head;
	private $mainNav;
	private $body;
	private $footer;

   	public function Page(){
   		$this->head = new Head();
   		$this->footer = new Footer();
   		$this->mainNav = new MainNav();
   	}

   	public function setBody($body){
   		$this->body = $body;
   	}

   	public function setTitle($title){
		$this->head->setTitle($title);
	}

	public function getRoot(){
		return $this->rootRelHref;
	}

	public function setDescription($description){
		$this->head->setMetaDescription($description);
	}

	public function setRoot($root){
		$this->footer->setRoot($root);
		$this->head->setRoot($root);
		$this->rootRelHref = $root;
	}

	public function setJS($js){
		$this->head->setJS($js);
	}

	public function setFooterJS($js){
		$this->footer->setFooterJS($js);
	}

	public function setCSS($css){
		$this->head->setCSS($css);
	}

   	public function printPage(){
   		echo $this->head->printHead(), $this->mainNav->printMainNav(), $this->body; $this->footer->printFooter();
   	}

   }
?>

