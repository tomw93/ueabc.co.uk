<?php

    /* ========== 404 PAGE /404.php ==
    ============= Tom Wilkins 12/08/13 ===== */
	include_once ('layout/page.php');

    $page = new Page();
    $page->setTitle("404 error");
    $page->setRoot("");
    $body = '<article class="about">
		<content>
			<a class="title">Error</a><br>
			<br>The page that you have requested cannot be found. This may be because the page has been moved or deleted.<br><br>
			If this problem persists contact: <a href="mailto:tomwilkins93@hotmail.co.uk" title="email">tomwilkins93@hotmail.co.uk</a>
		</content>
	</article>';

    $page->setBody($body);
    $page->printPage();
?>
