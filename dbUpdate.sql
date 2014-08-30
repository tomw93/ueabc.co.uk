CREATE TABLE IF NOT EXISTS `news` (
  `newsID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `contents` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`newsID`)
);

INSERT INTO `news` (`newsID`, `date`, `title`, `contents`) VALUES
(1, '2013-01-26', 'Snowed in!', 'The trailer couldnt make it out of the boat club because of all the snow and ice meaning Quintin Head was cancelled for UEABC.'),
(2, '2013-02-17', 'BUCs Head', 'The race venue was changed from Peterborough to Boston last minute due to dangerous water levels.<br/><p>The mens squad had a fantastic weekend of results, kicking it off with the beginner crew coming 14th /41, beating Universities such as; Imperial, Edinburgh, Cardiff, Bath and lots more! <a href="http://c1593.r93.cf3.rackcdn.com/M_Beg_8o_Prov_Results.pdf" target="_blank">http://c1593.r93.cf3.rackcdn.com/M_Beg_8o_Prov_Results.pdf</a></p><br/><p>On the Sunday it was the seniors turn to impress, and they did, the 4 coming 2nd only to Newcastle and winning silver BUCs medals. <a href="http://c1593.r93.cf3.rackcdn.com/BUCS_Sunday_Div_1.pdf" target="_blank">http://c1593.r93.cf3.rackcdn.com/BUCS_Sunday_Div_1.pdf</a></p><br/><p>The senior 8 came 6th, gaining instant qualification for BUCs regatta later in the year (so did the 4). <a href="http://c1593.r93.cf3.rackcdn.com/BUCS_Sunday_Div_2.pdf" target="_blank">http://c1593.r93.cf3.rackcdn.com/BUCS_Sunday_Div_2.pdf</a></p>'),
(3, '2013-02-25', '100k Row', 'Tom Pedelty and Mitch Johnson row 100k tandem, raising money for Whitlingham Boathouse. They completed it in 6hrs 12 mins and raised over &pound;1000. <a href="http://ipatter.com/wbf/over-1000-raised-by-mitch-and-tom-on-their-sponsored-erg-29282/comments#patter" target="_blank">http://ipatter.com/wbf/over-1000-raised-by-mitch-and-tom-on-their-sponsored-erg-29282/comments#patter</a>'),
(4, '2013-03-02', 'Norwich Head', 'Mens squad IM2 8+ win Norwich Head by a minute (17:00), resulting in UEABC being engraved on the solid silver teapot trophy! A strong result for the novice mens 8, coming 3rd in there category and 5th overall, as well as the womens IM2 8 coming 3rd in there category and novice womens 8 coming 3rd in there category.</p><br/>
		    <p>Full results can be found here: <a href="http://www.norwichrowingclub.co.uk/public/results_2013.pdf" target="_blank">http://www.norwichrowingclub.co.uk/public/results_2013.pdf</a>'),
(5, '2013-03-05', 'BUCS Head Article', 'Matt Everetts article on BUCS Head is published in Concrete (UEA paper), <a href="http://www.concrete-online.co.uk/uea-boat-club-2/" target="_blank">http://www.concrete-online.co.uk/uea-boat-club-2/</a>'),
(6, '2013-03-23', 'HoRR Cancelled', 'HoRR Cancelled due to severe weather forecasted in London, <a href="http://www.britishrowing.org/news/2013/march/22/head-river-and-vets-head-cancelled" target="_blank">http://www.britishrowing.org/news/2013/march/22/head-river-and-vets-head-cancelled</a>'),
(7, '2013-03-27', 'Training Camp', 'Mens Squad Training Camp was a brilliant success, down at Dorney Lake. It was a cold few days, but the rowing and atmosphere made up for it!'),
(8, '2013-04-24', 'Committee Elections', 'The UEABC elections have just taken place! The new committee for 2013/14 is: President - Caroline Busby. Vice President - Laura Watson. Treasurer - Dan Pumfrett. Secretary - Tom Wilkins. Mens Captain - Charlie Beech. Womens Captain - Olivia Cook. Fundraising and sponsorship officers - Molly and Izzy. Operations manager - Andrew Waring. Social Sec - Andy Hamilton.<br/>
		    <br/>Congratulations Everyone!'),
(9, '2013-05-07', 'BUCS Regatta', 'Saturday<br/>
			- Men&#39;s Beginner 4+ came 2nd in the G final, finishing 38th out of 48 boats<br/>
			- Men&#39;s Intermediate 8+ came 3rd in the D final, finishing 21st out of 24 boats<br/><br/>

			Sunday<br/>
			- Men&#39;s Intermediate 4+ made it through to the B Final, ending up 11th out of all the 41 Boats entered<br/><br/>

			Monday<br/>
			- Spookily the Women&#39;s Beginner 8+ shared the same result as the m.Int.4+ making it through to the B Final and finishing 11th out of the 41 boats entered.<br/><br/>

			Great results and a promising start to the regatta season!'),
(10, '2013-05-14', 'Bedford Regatta', 'A good day of rowing, rain and rampage!<br/><br/>

			- The Mens Nov 8+ made it through to the semi finals of the plate.<br/>

			- The Mens Nov 4+ won the plate! Leaving with some shiny medals!<br/>

			- The Womens Nov 4+ made it through to the semi finals.<br/>

			- The Mens IM3 4+ had a fantastic row, and lost by 4 feet!<br/><br/>

			All of the crews can be seen rowing at: <a href="https://www.youtube.com/user/UEABC/videos">https://www.youtube.com/user/UEABC/videos</a><br/>
			Leave a like and subscribe for more videos!'),
(11, '2013-06-02', 'Peterborough Regatta', 'At Peterborough the womens novice 4 gave a very strong performance, winning their heat, and 3rd in the semi final, narrowly missing out on the final.
			Both the womens novice 8, and mens IM3 8 showed top form with both coming 2nd in there respected finals.'),
(12, '2013-06-02', 'Metroplitan Regatta', 'At Metroplitan Regatta the senior 4 gave a fantastic performance, winning their 1st heat, coming 2nd in the semi final, and 4th in their final, all with under 7 minute 2k times!! - Henley Hopefulls'),
(13, '2013-06-10', 'Star Regatta', 'The men&#39;s novice 4+ put in a rousing performance in their category today but unfortunately lost by a cover in the final to Bedford School in a time of 4:14, 13 seconds faster than their time at Bedford Regatta a month ago.'),
(14, '2013-06-24', 'Women&#39;s Henley Regatta', 'The women&#39;s four had a strong performance in the qualifiers and got through! Unfortunately lost in the 1st round against a Cambridge crew who had potential &#39;blue boaters&#39;. The girls lost by 2 lengths and gave a fantastic effort to try and beat them, doing UEABC proud!'),
(15, '2013-09-29', 'Learn to row', 'We had a fantastic turn out this weekend for the learn to row taster days. The new members have now been selected and the learn to row course will soon be under way!'),
(16, '2013-11-02', 'Norfolk Sculls', 'The men&#39;s beginner four came 3rd in there division. <br>
		The first senior four came 2nd in theres, having beat the top Norwich boat by 20 seconds and the second senior four came 5th in theres.<br>
		An overall strong performance for the first race of the season!'),
(17, '2013-11-16', 'Cambridge Winter Head', 'The first head race outside of Norwich this season proved to be an exciting and dramatic one! Read all about it in this article: <a href="http://www.concrete-online.co.uk/rowing-club-season/">http://www.concrete-online.co.uk/rowing-club-season/</a><br>
		Full results can be found here: <a href="http://www.cantabsrowing.org.uk/?page_id=74">http://www.cantabsrowing.org.uk/?page_id=74</a>'),
(18, '2013-12-15', 'Carrow Cup', 'All crews did not disappoint for the 200th anniversary of the Carrow Cup yesterday. Both the Women&#39;s first senior four and Men&#39;s novice four won there categories, full results and more information can be found out on Norwich Rowing clubs website: <a href="http://www.norwichrowingclub.co.uk">http://www.norwichrowingclub.co.uk'),
(19, '', '', ''),
(20, '', '', ''),

