<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" /> 
			<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
			<head>
				<meta http-equiv="Keywords" name="keywords" content="royal,schools,colombo,college,colleges,sri lanka,royal college,student information system,school news,exam results,attendance,education,sports" /> 
				<meta http-equiv="Description" name="description" content="Official web site of the Royal College Colmbo, Sri Lanka which contains news, photo albums, school diary, sports information and student information" />
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
				<link rel="SHORTCUT ICON" href="images/favicon.ico" /> 
			    <title>Photo Albums</title>
		    	<link rel="stylesheet" media="screen,projection" type="text/css" href="styles/main.css" /> 
		    	<link rel="stylesheet" media="screen,projection" type="text/css" href="styles/albums.css" /> 
			</head>
<script type="text/javascript">
	function viewAlbumList(year,month) {
		document.frmPhotoAlbum.data1.value = year;
		document.frmPhotoAlbum.data2.value = month;
		document.frmPhotoAlbum.submit();
	}
	
	function viewPhotoAlbum(id) {
		document.frmPhotos.albumid.value = id;
		document.frmPhotos.submit();
	}
	
	function onPhotosArchiveChange() {
		var selin = document.getElementById('cmbPhotosArchive').selectedIndex;
		if (selin > 0)
		{
			var val = document.getElementById('cmbPhotosArchive')[selin].value;
			viewAlbumList(val.substr(0,4),val.substr(4));
		}
	}
</script>

	<form name="frmPhotoAlbum" method="post" class="nodisplay">
		<input type="hidden" name="data2">
		<input type="hidden" name="data1">
	</form>

	<form name="frmPhotos" method="post" class="nodisplay">
		<input type="hidden" name="albumid">
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
<li><a href="index.php">Home<span class="tab-l"></span><span class="tab-r"></span></a></li><li class="active"><a href="photos.php">Photos<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="videos.php">Videos<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="diary.php">Diary<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="academic.php">Academic<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="sports.php">Sports<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="societies.php">Societies<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="comments.php">Comments<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="sitemap.php">Site Map<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="faq.php">FAQ<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="support.php">Support<span class="tab-l"></span><span class="tab-r"></span></a></li>				</ul>
				<hr class="noscreen">
			</div> <!-- /tabs -->
		    <div id="page" class="box">
    			<div id="page-in" class="box">
					<div id="strip" class="box noprint">
						<p id="rss"><a href="contactus.php" target="_self">Contact Us</a></p>
						<hr class="noscreen">
						<p id="currentPosition">You are here: <strong>Photos</strong></p>
						<hr class="noscreen">
					</div> <!-- /strip -->
					<div id="content">
						<div class="article">
							<h2><span>Photo Albums</span></h2>
										<p class="info noprint">
											<span class="title">Photo Albums published in March 2012</span>
											<span class="noscreen">&nbsp;</span>
										</p>
										<p><span id="deskpoints">

												<a href="javascript:viewPhotoAlbum(102)" target="_self"><strong>Big Match Preparations 2012</strong></a><br>
												<table style="margin-top: 10px" width="100%" cellpadding="3" cellspacing="0" border="0">
											<tr>
												<td rowspan="4" valign="top"><img style="margin-right: 20px" src="getimage.php?type=7&name=20120303091109.jpg&album=102"></td>
											</tr>
											<tr>
												<td valign="top"><span style="margin-right: 20px">Date</span></td>
												<td valign="top" width="100%">2012-03-03</td>
											</tr>
											<tr>
												<td valign="top"><span style="margin-right: 20px">Description</span></td>
												<td valign="top"></td>
											</tr>
											<tr>
												<td valign="top">&nbsp;</td>
												<td valign="top">23 Photo(s)</td>
											</tr>
											</table><br><br>
												<a href="javascript:viewPhotoAlbum(103)" target="_self"><strong>Inter House Athletics Meet 2012</strong></a><br>
												<table style="margin-top: 10px" width="100%" cellpadding="3" cellspacing="0" border="0">
											<tr>
												<td rowspan="4" valign="top"><img style="margin-right: 20px" src="getimage.php?type=7&name=20120303182339.jpg&album=103"></td>
											</tr>
											<tr>
												<td valign="top"><span style="margin-right: 20px">Date</span></td>
												<td valign="top" width="100%">2012-03-03</td>
											</tr>
											<tr>
												<td valign="top"><span style="margin-right: 20px">Description</span></td>
												<td valign="top"></td>
											</tr>
											<tr>
												<td valign="top">&nbsp;</td>
												<td valign="top">9 Photo(s)</td>
											</tr>
											</table><br><br>										</span></p>
						</div>
						<hr class="noscreen">
					</div>
					<div id="col" class="noprint">
						<div id="col-in">
							<h3><span>Quote of the day</span></h3>
							<div id="quoteofday">
								<p>	
The larger the island of knowledge, the longer the shoreline of wonder.					
								</p>
							</div>
							<hr class="noscreen" />
							<h3><span>Recent Photo Albums</span></h3>
							<ul id="archive">
<li id="archive-active"><a href="javascript:viewAlbumList(2012,3)" target="_self">March 2012</a></li><li ><a href="javascript:viewAlbumList(2012,2)" target="_self">February 2012</a></li><li ><a href="javascript:viewAlbumList(2011,12)" target="_self">December 2011</a></li><li ><a href="javascript:viewAlbumList(2011,11)" target="_self">November 2011</a></li></ul><hr class="noscreen"><h3><span>Photo Albums Archive</span></h3><ul id="archive"><li><select id="cmbPhotosArchive" name="cmbPhotosArchive" style="width: 180px" onchange="onPhotosArchiveChange()"><option>Select month...</option><option value="201110" >2011 October</option><option value="20118" >2011 August</option><option value="20114" >2011 April</option><option value="20111" >2011 January</option><option value="201011" >2010 November</option><option value="201010" >2010 October</option><option value="20109" >2010 September</option><option value="20108" >2010 August</option><option value="20107" >2010 July</option><option value="20106" >2010 June</option><option value="20098" >2009 August</option><option value="20097" >2009 July</option><option value="20096" >2009 June</option><option value="200812" >2008 December</option><option value="200810" >2008 October</option><option value="20089" >2008 September</option><option value="20085" >2008 May</option><option value="20081" >2008 January</option><option value="200712" >2007 December</option><option value="200711" >2007 November</option><option value="200710" >2007 October</option><option value="20079" >2007 September</option><option value="20078" >2007 August</option><option value="20077" >2007 July</option><option value="20076" >2007 June</option><option value="20075" >2007 May</option><option value="20074" >2007 April</option></select></li>							</ul>
							<hr class="noscreen">
						</div> <!-- /col-in -->
					</div> <!-- /col -->
				</div> <!-- /page-in -->
			</div> <!-- /page -->
		    <!-- Footer -->
    		<div id="footer">
        		<div id="top" class="noprint"><p><span class="noscreen">Back on top</span> <a href="#header" title="Back on top ^">^<span></span></a></p></div>
		        <hr class="noscreen">
    		    <p id="hits">165654 Hits Since 23-03-2007</p>
        		<p id="copyright">&copy; 2012 Royal College. Colombo 07.</p>
		    </div> 
    		<!-- /footer -->
		</div> <!-- /main -->
	</body>

</html>
