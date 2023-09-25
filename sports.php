<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" /> 
			<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
			<head>
				<meta http-equiv="Keywords" name="keywords" content="royal,schools,colombo,college,colleges,sri lanka,royal college,student information system,school news,exam results,attendance,education,sports" /> 
				<meta http-equiv="Description" name="description" content="Official web site of the Royal College Colmbo, Sri Lanka which contains news, photo albums, school diary, sports information and student information" />
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
				<link rel="SHORTCUT ICON" href="images/favicon.ico" /> 
			    <title>Sports</title>
		    	<link rel="stylesheet" media="screen,projection" type="text/css" href="styles/main.css" /> 
		    	<link rel="stylesheet" media="screen,projection" type="text/css" href="styles/sports.css" /> 
		    	<link rel="stylesheet" media="screen,projection" type="text/css" href="styles/diary.css" /> 
		    	<link rel="stylesheet" media="screen,projection" type="text/css" href="styles/albums.css" /> 
			</head>
<script type="text/javascript" src="scripts/ElementUtils.js"></script>
<script type="text/javascript" src="scripts/homepages.js"></script>
<script type="text/javascript">


	function viewSport(id) {
		document.frmPage.mode.value = 1;
		document.frmPage.sport.value = id;
		document.frmPage.submit();
	}

	function viewTeams(year) {
		document.frmPage.mode.value = 2;
		document.frmPage.data1.value = year;
		document.frmPage.submit();
	}
	
	function viewScores() {
		document.frmPage.mode.value = 6;
		document.frmPage.submit();
	}

	function viewDiary(year,month) {
		document.frmPage.mode.value = 3;
		document.frmPage.data1.value = year;
		document.frmPage.data2.value = month;
		document.frmPage.submit();
	}

	function viewNews(year,month) {
		document.frmPage.mode.value = 5;
		document.frmPage.data1.value = year;
		document.frmPage.data2.value = month;
		document.frmPage.submit();
	}

	function onNewsArchiveChange()
	{
		var selin = document.getElementById('cmbNewsArchive').selectedIndex;
		if (selin > 0)
		{
			var val = document.getElementById('cmbNewsArchive')[selin].value;
			viewNews(val.substr(0,4),val.substr(4));
		}
	}
	
	function onDiaryArchiveChange()
	{
		var selin = document.getElementById('cmbDiaryArchive').selectedIndex;
		if (selin > 0)
		{
			var val = document.getElementById('cmbDiaryArchive')[selin].value;
			viewNews(val.substr(0,4),val.substr(4));
		}
	}
	
	function onAchievementsArchiveChange()
	{
		var selin = document.getElementById('cmbAchievementsArchive').selectedIndex;
		if (selin > 0)
		{
			var val = document.getElementById('cmbAchievementsArchive')[selin].value;
			viewNews(val.substr(0,4),val.substr(4));
		}
	}
	
	function onTeamsSquadsArchiveChange()
	{
		var selin = document.getElementById('cmbTeamsSquadsArchive').selectedIndex;
		if (selin > 0)
		{
			var val = document.getElementById('cmbTeamsSquadsArchive')[selin].value;
			viewTeams(val);
		}
	}
	
	function viewAchievements(year,month) {
		document.frmPage.mode.value = 4;
		document.frmPage.data1.value = year;
		document.frmPage.data2.value = month;
		document.frmPage.submit();
	}

	function onImageHover(id,opacity) {
		object = document.getElementById(id).style;
		object.opacity = (opacity / 100);
		object.MozOpacity = (opacity / 100);
		object.KhtmlOpacity = (opacity / 100);
		object.filter = "alpha(opacity=" + opacity + ")";
	}

	function changeYear()
	{
		//alert(document.getElementById("yearsHeader").style.height);
		document.getElementById("yearsMenu").style.left = getElementLeft("yearsHeader") + 'px';
		document.getElementById("yearsMenu").style.top = (getElementTop("yearsHeader") + getElementHeight("yearsHeader")) + 'px';
		document.getElementById("yearsMenu").style.display = "";
	}
	
	function onSelectionChange()
	{
		document.getElementById("yearsMenu").style.display = "none";
		document.frmPage.sportyear.value = document.getElementById("yearList").value;
		document.frmPage.submit();
	}
</script>

	<body id="inforoyal">
		<div id="main" class="box">
	    	<div id="header">
				<div id="logo"></div>
		        <h1 id="title">Info@Royal College (Updated by TK)</h1>
    		    <hr class="noscreen">          
	    	</div>
			<div id="tabs" class="noprint">
				<h3 class="noscreen">Navigation</h3>
				<ul class="box">
<li><a href="index.php">Home<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="photos.php">Photos<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="videos.php">Videos<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="diary.php">Diary<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="academic.php">Academic<span class="tab-l"></span><span class="tab-r"></span></a></li><li class="active"><a href="sports.php">Sports<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="societies.php">Societies<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="comments.php">Comments<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="sitemap.php">Site Map<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="faq.php">FAQ<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="support.php">Support<span class="tab-l"></span><span class="tab-r"></span></a></li>				</ul>
				<hr class="noscreen">
			</div> <!-- /tabs -->
		    <div id="page" class="box">
    			<div id="page-in" class="box">
					<div id="strip" class="box noprint">
						<p id="rss"><a href="contactus.php" target="_self">Contact Us</a></p>
						<hr class="noscreen">
						<p id="currentPosition">You are here: <strong>Sports</strong></p>
						<hr class="noscreen">
					</div> <!-- /strip -->
					<div id="content">
						<div class="article">
<h2><span>Sports</span></h2><br><table border="0" cellpadding="5"><tr>
												<td class="imageframe"><a href="javascript:viewSport(8);" onMouseOver="onImageHover('frame8',60)" onMouseOut="onImageHover('frame8',100)"><div id="frame8"><img src="data/sports/items/20071030105033.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(8);">Athletics</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(4);" onMouseOver="onImageHover('frame4',60)" onMouseOut="onImageHover('frame4',100)"><div id="frame4"><img src="data/sports/items/20071019124359.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(4);">Badminton</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(9);" onMouseOver="onImageHover('frame9',60)" onMouseOut="onImageHover('frame9',100)"><div id="frame9"><img src="data/sports/items/20071030124729.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(9);">Baseball</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(7);" onMouseOver="onImageHover('frame7',60)" onMouseOut="onImageHover('frame7',100)"><div id="frame7"><img src="data/sports/items/20071026104044.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(7);">Basketball</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(11);" onMouseOver="onImageHover('frame11',60)" onMouseOut="onImageHover('frame11',100)"><div id="frame11"><img src="data/sports/items/20071116112117.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(11);">Boxing</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(13);" onMouseOver="onImageHover('frame13',60)" onMouseOut="onImageHover('frame13',100)"><div id="frame13"><img src="data/sports/items/20080205115102.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(13);">Carrom</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(14);" onMouseOver="onImageHover('frame14',60)" onMouseOut="onImageHover('frame14',100)"><div id="frame14"><img src="data/sports/items/20080205115138.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(14);">Chess</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(3);" onMouseOver="onImageHover('frame3',60)" onMouseOut="onImageHover('frame3',100)"><div id="frame3"><img src="data/sports/items/20071018085248.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(3);">Cricket</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(26);" onMouseOver="onImageHover('frame26',60)" onMouseOut="onImageHover('frame26',100)"><div id="frame26"><img src="data/sports/items/1256021826.5792.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(26);">Diving</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(19);" onMouseOver="onImageHover('frame19',60)" onMouseOut="onImageHover('frame19',100)"><div id="frame19"><img src="data/sports/items/20080805101006.JPG" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(19);">Elle</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(25);" onMouseOver="onImageHover('frame25',60)" onMouseOut="onImageHover('frame25',100)"><div id="frame25"><img src="data/sports/items/20081022123324.JPG" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(25);">Gymnastic</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(10);" onMouseOver="onImageHover('frame10',60)" onMouseOut="onImageHover('frame10',100)"><div id="frame10"><img src="data/sports/items/20071101084426.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(10);">Hockey</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(23);" onMouseOver="onImageHover('frame23',60)" onMouseOut="onImageHover('frame23',100)"><div id="frame23"><img src="data/sports/items/20081021122358.JPG" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(23);">Karate</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(15);" onMouseOver="onImageHover('frame15',60)" onMouseOut="onImageHover('frame15',100)"><div id="frame15"><img src="data/sports/items/20080205115246.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(15);">Rowing</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(5);" onMouseOver="onImageHover('frame5',60)" onMouseOut="onImageHover('frame5',100)"><div id="frame5"><img src="data/sports/items/20071026090228.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(5);">Rugby</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(20);" onMouseOver="onImageHover('frame20',60)" onMouseOut="onImageHover('frame20',100)"><div id="frame20"><img src="data/sports/items/20080805134641.JPG" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(20);">Soccer</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(18);" onMouseOver="onImageHover('frame18',60)" onMouseOut="onImageHover('frame18',100)"><div id="frame18"><img src="data/sports/items/20080805092318.JPG" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(18);">Squash</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(21);" onMouseOver="onImageHover('frame21',60)" onMouseOut="onImageHover('frame21',100)"><div id="frame21"><img src="data/sports/items/20080805134706.JPG" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(21);">Swimming</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(22);" onMouseOver="onImageHover('frame22',60)" onMouseOut="onImageHover('frame22',100)"><div id="frame22"><img src="data/sports/items/20080911111350.JPG" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(22);">Table Tennis</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(6);" onMouseOver="onImageHover('frame6',60)" onMouseOut="onImageHover('frame6',100)"><div id="frame6"><img src="data/sports/items/20071026103529.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(6);">Tennis</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(12);" onMouseOver="onImageHover('frame12',60)" onMouseOut="onImageHover('frame12',100)"><div id="frame12"><img src="data/sports/items/20071116112956.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(12);">Volleyball</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(16);" onMouseOver="onImageHover('frame16',60)" onMouseOut="onImageHover('frame16',100)"><div id="frame16"><img src="data/sports/items/20080205115340.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(16);">Water Polo</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSport(24);" onMouseOver="onImageHover('frame24',60)" onMouseOut="onImageHover('frame24',100)"><div id="frame24"><img src="data/sports/items/1274011402.9369.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="sportname"><a href="javascript:viewSport(24);">Wushu</a></span>
													<span class="sportcaption"></span>
												</td>
											</tr></table>						</div>
						<hr class="noscreen">
						
					</div>
					<div id="col" class="noprint">
						<div id="col-in">
							<h3><span>Quote of the day</span></h3>
							<div id="quoteofday">
								<p>	
Kindness in words creates confidence. Kindness in thinking creates profoundness. Kindness in giving creates love.					
								</p>
							</div>
							<hr class="noscreen" />
							
						</div> <!-- /col-in -->
					</div> <!-- /col -->
				</div> <!-- /page-in -->
			</div> <!-- /page -->
		    <!-- Footer -->
    		<div id="footer">
        		<div id="top" class="noprint"><p><span class="noscreen">Back on top</span> <a href="#header" title="Back on top ^">^<span></span></a></p></div>
		        <hr class="noscreen">
    		    <p id="hits">130646 Hits Since 23-03-2007</p>
        		<p id="copyright">&copy; 2008 Royal College. Colombo 07.</p>
		    </div> 
    		<!-- /footer -->
		</div> <!-- /main -->
		<form name="frmPage" method="post" class="nodisplay">
			<input type="hidden" name="mode" value="0">
			<input type="hidden" name="sport" value="0">
			<input type="hidden" name="sportyear" value="0">
			<input type="hidden" name="data1">
			<input type="hidden" name="data2">
		</form>
	</body>

</html>
