<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" /> 
			<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
			<head>
				<meta http-equiv="Keywords" name="keywords" content="royal,schools,colombo,college,colleges,sri lanka,royal college,student information system,school news,exam results,attendance,education,sports" /> 
				<meta http-equiv="Description" name="description" content="Official web site of the Royal College Colmbo, Sri Lanka which contains news, photo albums, school diary, sports information and student information" />
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
				<link rel="SHORTCUT ICON" href="images/favicon.ico" /> 
			    <title>Societies</title>
		    	<link rel="stylesheet" media="screen,projection" type="text/css" href="styles/main.css" /> 
		    	<link rel="stylesheet" media="screen,projection" type="text/css" href="styles/societies.css" /> 
		    	<link rel="stylesheet" media="screen,projection" type="text/css" href="styles/diary.css" /> 
			</head>
<script type="text/javascript" src="scripts/homepages.js"></script>
<script type="text/javascript">


	function viewSociety(id,year) {
		document.frmPage.mode.value = 1;
		document.frmPage.society.value = id;
		document.frmPage.societyyear.value = year;
		document.frmPage.submit();
	}

	function viewCommittee() {
		document.frmPage.mode.value = 2;
		document.frmPage.submit();
	}
	
	function viewDiary(year,month) {
		document.frmPage.mode.value = 3;
		document.frmPage.data1.value = year;
		document.frmPage.data2.value = month;
		document.frmPage.submit();
	}

	function viewNews(year,month) {
		document.frmPage.mode.value = 7;
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
			viewDiary(val.substr(0,4),val.substr(4));
		}
	}
	
	function viewAchievements(id) {
		document.frmPage.mode.value = 4;
		document.frmPage.society.value = id;
		document.frmPage.submit();
	}

	function viewProjects(id) {
		document.frmPage.mode.value = 5;
		document.frmPage.society.value = id;
		document.frmPage.submit();
	}

	function viewContacts(id) {
		document.frmPage.mode.value = 6;
		document.frmPage.society.value = id;
		document.frmPage.submit();
	}
	
	function onImageHover(id,opacity) {
		object = document.getElementById(id).style;
		object.opacity = (opacity / 100);
		object.MozOpacity = (opacity / 100);
		object.KhtmlOpacity = (opacity / 100);
		object.filter = "alpha(opacity=" + opacity + ")";
	}
</script>

	<form name="frmPage" method="post" class="nodisplay">
		<input type="hidden" name="mode">
		<input type="hidden" name="society" value="0">
		<input type="hidden" name="societyyear" value="0">
		<input type="hidden" name="data1">
		<input type="hidden" name="data2">
	</form>

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
<li><a href="index.php">Home<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="photos.php">Photos<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="videos.php">Videos<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="diary.php">Diary<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="academic.php">Academic<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="sports.php">Sports<span class="tab-l"></span><span class="tab-r"></span></a></li><li class="active"><a href="societies.php">Societies<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="comments.php">Comments<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="sitemap.php">Site Map<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="faq.php">FAQ<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="support.php">Support<span class="tab-l"></span><span class="tab-r"></span></a></li>				</ul>
				<hr class="noscreen">
			</div> <!-- /tabs -->
		    <div id="page" class="box">
    			<div id="page-in" class="box">
					<div id="strip" class="box noprint">
						<p id="rss"><a href="contactus.php" target="_self">Contact Us</a></p>
						<hr class="noscreen">
						<p id="currentPosition">You are here: <strong>Societies</strong></p>
						<hr class="noscreen">
					</div> <!-- /strip -->
					<div id="content">
						<div class="article">
<h2><span>Societies</span></h2><br><table border="0" cellpadding="5"><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(4,2001);">Adventure Club</a></span><br />
													<span><a href="javascript:viewSociety(4,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(4,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(4,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(5,2001);">Agriculture Society</a></span><br />
													<span><a href="javascript:viewSociety(5,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(5,2008);">2008</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(5,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(5,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(5,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(6,2001);">Archeological Society</a></span><br />
													<span><a href="javascript:viewSociety(6,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(6,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(7,2001);">Architects� Society</a></span><br />
													<span><a href="javascript:viewSociety(7,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(8,2001);">Art Circle</a></span><br />
													<span><a href="javascript:viewSociety(8,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(8,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(8,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(9);" onMouseOver="onImageHover('frame9',60)" onMouseOut="onImageHover('frame9',100)"><div id="frame9"><img src="data/societies/items/1271860026.3115.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(9,2001);">Astronomical Society</a></span><br />
													<span><a href="javascript:viewSociety(9,2008);">2008</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(9,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(9,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(9,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(10);" onMouseOver="onImageHover('frame10',60)" onMouseOut="onImageHover('frame10',100)"><div id="frame10"><img src="data/societies/items/1271403385.2275.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(10,2001);">Aviation Society</a></span><br />
													<span><a href="javascript:viewSociety(10,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(10,2008);">2008</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(10,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(10,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(10,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(72);" onMouseOver="onImageHover('frame72',60)" onMouseOut="onImageHover('frame72',100)"><div id="frame72"><img src="data/societies/items/1271661556.1879.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(72,2001);">Biology Association</a></span><br />
													<span><a href="javascript:viewSociety(72,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(72,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(72,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(11);" onMouseOver="onImageHover('frame11',60)" onMouseOut="onImageHover('frame11',100)"><div id="frame11"><img src="data/societies/items/1273591092.4068.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(11,2001);">Buddhist Brother Hood</a></span><br />
													<span><a href="javascript:viewSociety(11,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(11,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(11,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(12);" onMouseOver="onImageHover('frame12',60)" onMouseOut="onImageHover('frame12',100)"><div id="frame12"><img src="data/societies/items/1271861276.9653.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(12,2001);">Catholic Student Union </a></span><br />
													<span><a href="javascript:viewSociety(12,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(12,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(12,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(12,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(13);" onMouseOver="onImageHover('frame13',60)" onMouseOut="onImageHover('frame13',100)"><div id="frame13"><img src="data/societies/items/1271949476.3506.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(13,2001);">Chemistry Society</a></span><br />
													<span><a href="javascript:viewSociety(13,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(13,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(13,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(14,2001);">Commerce Society</a></span><br />
													<span><a href="javascript:viewSociety(14,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(15);" onMouseOver="onImageHover('frame15',60)" onMouseOut="onImageHover('frame15',100)"><div id="frame15"><img src="data/societies/items/1270046400.2927.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(15,2001);">Computer Society</a></span><br />
													<span><a href="javascript:viewSociety(15,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(15,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(15,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(16,2001);">Debaters Council</a></span><br />
													<span><a href="javascript:viewSociety(16,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(16,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(16,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(17,2001);">Discussion Forum</a></span><br />
													<span><a href="javascript:viewSociety(17,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(17,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(17,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(60,2001);">Drug Prevention Unit</a></span><br />
													<span><a href="javascript:viewSociety(60,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(60,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(18,2001);">English Drama Society</a></span><br />
													<span><a href="javascript:viewSociety(18,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(18,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(19);" onMouseOver="onImageHover('frame19',60)" onMouseOut="onImageHover('frame19',100)"><div id="frame19"><img src="data/societies/items/1271951479.3639.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(19,2001);">English Literary Association</a></span><br />
													<span><a href="javascript:viewSociety(19,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(19,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(19,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(20,2001);">Environmental Conservation</a></span><br />
													<span><a href="javascript:viewSociety(20,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(20,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(21,2001);">Film Society</a></span><br />
													<span><a href="javascript:viewSociety(21,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(21,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(21,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(21,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(71);" onMouseOver="onImageHover('frame71',60)" onMouseOut="onImageHover('frame71',100)"><div id="frame71"><img src="data/societies/items/1272207151.2879.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(71,2001);">Gavel Club</a></span><br />
													<span><a href="javascript:viewSociety(71,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(71,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(71,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(22,2001);">General Knowledge Club</a></span><br />
													<span><a href="javascript:viewSociety(22,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(22,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(22,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(22,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(23,2001);">Globe Family</a></span><br />
													<span><a href="javascript:viewSociety(23,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(26,2001);">Hatton National Bank </a></span><br />
													<span><a href="javascript:viewSociety(26,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(26,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(24,2001);">Hindu Student Union</a></span><br />
													<span><a href="javascript:viewSociety(24,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(25);" onMouseOver="onImageHover('frame25',60)" onMouseOut="onImageHover('frame25',100)"><div id="frame25"><img src="data/societies/items/1274025436.9151.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(25,2001);">History Society</a></span><br />
													<span><a href="javascript:viewSociety(25,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(25,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(25,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(27);" onMouseOver="onImageHover('frame27',60)" onMouseOut="onImageHover('frame27',100)"><div id="frame27"><img src="data/societies/items/1270049227.5149.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(27,2001);">I *earn</a></span><br />
													<span><a href="javascript:viewSociety(27,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(27,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(28,2001);">Insurance Society</a></span><br />
													<span><a href="javascript:viewSociety(28,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(28,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(29,2001);">Interact Club</a></span><br />
													<span><a href="javascript:viewSociety(29,2008);">2008</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(29,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(29,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(30,2001);">Islamic Society</a></span><br />
													<span><a href="javascript:viewSociety(30,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(30,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(31,2001);">Japanese Society</a></span><br />
													<span><a href="javascript:viewSociety(31,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(32,2001);">Junior Sinhala Literary Association</a></span><br />
													<span><a href="javascript:viewSociety(32,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(32,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(33,2001);">Kandiyan Dancing Society</a></span><br />
													<span><a href="javascript:viewSociety(33,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(34,2001);">Leo Club </a></span><br />
													<span><a href="javascript:viewSociety(34,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(35,2001);">Library Readers Association</a></span><br />
													<span><a href="javascript:viewSociety(35,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(35,2008);">2008</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(35,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(35,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(37,2001);">Mathematics Society</a></span><br />
													<span><a href="javascript:viewSociety(37,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(37,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(36);" onMouseOver="onImageHover('frame36',60)" onMouseOut="onImageHover('frame36',100)"><div id="frame36"><img src="data/societies/items/1270047882.1368.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(36,2001);">Media Unit</a></span><br />
													<span><a href="javascript:viewSociety(36,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(36,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(36,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(38,2001);">National Savings Bank</a></span><br />
													<span><a href="javascript:viewSociety(38,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(39,2001);">Oriental Music Society</a></span><br />
													<span><a href="javascript:viewSociety(39,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(40,2001);">People�s Bank</a></span><br />
													<span><a href="javascript:viewSociety(40,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(40,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(41);" onMouseOver="onImageHover('frame41',60)" onMouseOut="onImageHover('frame41',100)"><div id="frame41"><img src="data/societies/items/1271776028.1021.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(41,2001);">Philatelic Club</a></span><br />
													<span><a href="javascript:viewSociety(41,2008);">2008</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(41,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(41,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(41,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(42);" onMouseOver="onImageHover('frame42',60)" onMouseOut="onImageHover('frame42',100)"><div id="frame42"><img src="data/societies/items/1271774719.3118.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(42,2001);">Photographic Society</a></span><br />
													<span><a href="javascript:viewSociety(42,2008);">2008</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(42,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(42,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(42,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(43,2001);">Political Science Society</a></span><br />
													<span><a href="javascript:viewSociety(43,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(44,2001);">Radio Club</a></span><br />
													<span><a href="javascript:viewSociety(44,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(44,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(44,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(45,2001);">Red Cross Society</a></span><br />
													<span><a href="javascript:viewSociety(45,2008);">2008</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(45,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(45,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(46);" onMouseOver="onImageHover('frame46',60)" onMouseOut="onImageHover('frame46',100)"><div id="frame46"><img src="data/societies/items/1271770682.9878.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(46,2001);">Science Association</a></span><br />
													<span><a href="javascript:viewSociety(46,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(46,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(46,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(47,2001);">Scrabble Club</a></span><br />
													<span><a href="javascript:viewSociety(47,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(47,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(47,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(48,2001);">Senior Sinhala Debaters Association</a></span><br />
													<span><a href="javascript:viewSociety(48,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(49,2001);">Seylan Bank</a></span><br />
													<span><a href="javascript:viewSociety(49,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(49,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(50,2001);">Sinhala Drama Society</a></span><br />
													<span><a href="javascript:viewSociety(50,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(50,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(51);" onMouseOver="onImageHover('frame51',60)" onMouseOut="onImageHover('frame51',100)"><div id="frame51"><img src="data/societies/items/1271852885.8573.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(51,2001);">Sinhala Language And Literary Unit</a></span><br />
													<span><a href="javascript:viewSociety(51,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(51,2008);">2008</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(51,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(51,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(52);" onMouseOver="onImageHover('frame52',60)" onMouseOut="onImageHover('frame52',100)"><div id="frame52"><img src="data/societies/items/1271859857.1552.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(52,2001);">Sinhala Oratory And Debating Society</a></span><br />
													<span><a href="javascript:viewSociety(52,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(52,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(52,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(53,2001);">Sipsa</a></span><br />
													<span><a href="javascript:viewSociety(53,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(53,2008);">2008</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(53,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(53,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(54,2001);">Social Services League</a></span><br />
													<span><a href="javascript:viewSociety(54,2008);">2008</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(54,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(54,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(54,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(55);" onMouseOver="onImageHover('frame55',60)" onMouseOut="onImageHover('frame55',100)"><div id="frame55"><img src="data/societies/items/1271851453.2289.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(55,2001);">Student Christian Movement</a></span><br />
													<span><a href="javascript:viewSociety(55,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(55,2008);">2008</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(55,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(55,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(56,2001);">Tamil Debaters</a></span><br />
													<span><a href="javascript:viewSociety(56,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(56,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(56,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(57,2001);">Tamil Dramatic Society</a></span><br />
													<span><a href="javascript:viewSociety(57,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(57,2008);">2008</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(57,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(57,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(58,2001);">Tamil Karanatic</a></span><br />
													<span><a href="javascript:viewSociety(58,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(59,2001);">Tamil Literary Association</a></span><br />
													<span><a href="javascript:viewSociety(59,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(59,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(59,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(61);" onMouseOver="onImageHover('frame61',60)" onMouseOut="onImageHover('frame61',100)"><div id="frame61"><img src="data/societies/items/1272292915.9719.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(61,2001);">United Nation Club</a></span><br />
													<span><a href="javascript:viewSociety(61,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(61,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(61,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(70,2001);">United Student Circle</a></span><br />
													<span><a href="javascript:viewSociety(70,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(70,2008);">2008</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(70,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(70,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(62,2001);">Western Music Society</a></span><br />
													<span><a href="javascript:viewSociety(62,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(62,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(62,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(62,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(63,2001);">Wild Life Protection Society</a></span><br />
													<span><a href="javascript:viewSociety(63,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(63,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(64,2001);">Yoga</a></span><br />
													<span><a href="javascript:viewSociety(64,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(64,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(64,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(65,2001);">Young Biologist Association</a></span><br />
													<span><a href="javascript:viewSociety(65,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(66,2001);">Young Inventors Club</a></span><br />
													<span><a href="javascript:viewSociety(66,2009);">2009</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(66,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"><a href="javascript:viewSociety(67);" onMouseOver="onImageHover('frame67',60)" onMouseOut="onImageHover('frame67',100)"><div id="frame67"><img src="data/societies/items/1271776916.1661.jpg" width="200px" height="150px"></div></a></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(67,2001);">Young Zoologist Association</a></span><br />
													<span><a href="javascript:viewSociety(67,2007);">2007</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(67,2008);">2008</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(67,2010);">2010</a>&nbsp;&nbsp;&nbsp;<a href="javascript:viewSociety(67,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
												</td>
											</tr><tr>
												<td class="imageframe"></td>
												<td class="imagedescription">
													<span class="societyname"><a href="javascript:viewSociety(68,2001);">Youth Services Association</a></span><br />
													<span><a href="javascript:viewSociety(68,2001);">2001</a>&nbsp;&nbsp;&nbsp;</span><br />&nbsp;
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
	</body>

</html>
