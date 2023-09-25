<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" /> 
			<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
			<head>
				<meta http-equiv="Keywords" name="keywords" content="royal,schools,colombo,college,colleges,sri lanka,royal college,student information system,school news,exam results,attendance,education,sports" /> 
				<meta http-equiv="Description" name="description" content="Official web site of the Royal College Colmbo, Sri Lanka which contains news, photo albums, school diary, sports information and student information" />
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
				<link rel="SHORTCUT ICON" href="images/favicon.ico" /> 
			    <title>Comments</title>
		    	<link rel="stylesheet" media="screen,projection" type="text/css" href="styles/main.css" /> 
		    	<link rel="stylesheet" media="screen,projection" type="text/css" href="styles/template.css" /> 
			</head>
<script type="text/javascript">
	function viewComments(year,month) {
		document.frmComment.data1.value = year;
		document.frmComment.data2.value = month;
		document.frmComment.data3.value = 0;
		document.frmComment.submit();
	}

	function onArchiveChange()
	{
		var selin = document.getElementById('cmbArchive').selectedIndex;
		if (selin > 0)
		{
			var val = document.getElementById('cmbArchive')[selin].value;
			viewComments(val.substr(0,4),val.substr(4));
		}
	}

	function writeComment() {
		document.frmComment.data3.value = 1;
		document.frmComment.submit();
	}
	
	function onSubmitClick() {
		document.frmComment.data3.value = 1;
		document.frmWriteComment.cmdSubmit.disabled = true;
		document.frmWriteComment.submit();
	}
</script>

	<form name="frmComment" method="post" class="nodisplay">
		<input type="hidden" name="data1" value="0">
		<input type="hidden" name="data2" value="0">
		<input type="hidden" name="data3" value="0">
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
<li><a href="index.php">Home<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="photos.php">Photos<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="videos.php">Videos<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="diary.php">Diary<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="academic.php">Academic<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="sports.php">Sports<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="societies.php">Societies<span class="tab-l"></span><span class="tab-r"></span></a></li><li class="active"><a href="comments.php">Comments<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="sitemap.php">Site Map<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="faq.php">FAQ<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="support.php">Support<span class="tab-l"></span><span class="tab-r"></span></a></li>				</ul>
				<hr class="noscreen">
			</div> <!-- /tabs -->
		    <div id="page" class="box">
    			<div id="page-in" class="box">
					<div id="strip" class="box noprint">
						<p id="rss"><a href="contactus.php" target="_self">Contact Us</a></p>
						<hr class="noscreen">
						<p id="currentPosition">You are here: <strong>Comments</strong></p>
						<hr class="noscreen">
					</div> <!-- /strip -->
					<div id="content">
						<div class="article">
								<h2><span>User Comments</span></h2>							
<p class="info noprint">
											<span class="date">2011-07-24 18:35:18</span>&emsp;
											<span class="user">janitha</span>
										</p>
										<p>there is nothing about the dancing society or the achievements..why is that? it used to be in the old colege website.....we have a pretty good kandian dancers and we have only 10 kandian dancers who became ves dancers in college history..sort it out guys! this is embarrassing  </p><br><p class="info noprint">
											<span class="date">2011-07-07 20:31:17</span>&emsp;
											<span class="user"></span>
										</p>
										<p>'advanced' is spelt wrong in the academic page! =P</p><br>						</div>
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
							<h3><span>Common Tasks</span></h3>
								<ul id="archive">
									<li><a href="javascript:writeComment();">Write a comment</a></li>
								</ul>
							<hr class="noscreen" />
							
							<h3><span>Recent Comments</span></h3>
							<ul id="archive">
<li id="archive-active"><a href="javascript:viewComments(2011,7)" target="_self">July 2011</a></li><li><a href="javascript:viewComments(2011,6)" target="_self">June 2011</a></li><li><a href="javascript:viewComments(2011,5)" target="_self">May 2011</a></li><li><a href="javascript:viewComments(2011,4)" target="_self">April 2011</a></li></ul><hr class="noscreen"><h3><span>Comments Archive</span></h3><ul id="archive"><li><select id="cmbArchive" name="cmbArchive" style="width: 180px" onchange="onArchiveChange()"><option>Select month...</option><option value="20111" >2011 January</option><option value="201012" >2010 December</option><option value="201011" >2010 November</option><option value="201010" >2010 October</option><option value="20109" >2010 September</option><option value="20108" >2010 August</option><option value="20107" >2010 July</option><option value="20106" >2010 June</option><option value="20105" >2010 May</option><option value="20104" >2010 April</option><option value="20103" >2010 March</option><option value="20102" >2010 February</option><option value="20101" >2010 January</option><option value="200912" >2009 December</option><option value="200911" >2009 November</option><option value="200910" >2009 October</option><option value="20099" >2009 September</option><option value="20098" >2009 August</option><option value="20097" >2009 July</option><option value="20096" >2009 June</option><option value="20095" >2009 May</option><option value="20094" >2009 April</option><option value="20093" >2009 March</option><option value="20092" >2009 February</option><option value="20091" >2009 January</option><option value="200812" >2008 December</option><option value="200811" >2008 November</option><option value="200810" >2008 October</option><option value="20089" >2008 September</option><option value="20088" >2008 August</option><option value="20087" >2008 July</option><option value="20086" >2008 June</option><option value="20085" >2008 May</option><option value="20084" >2008 April</option><option value="20083" >2008 March</option><option value="20082" >2008 February</option><option value="20081" >2008 January</option><option value="200712" >2007 December</option><option value="200711" >2007 November</option><option value="200710" >2007 October</option><option value="20079" >2007 September</option><option value="20078" >2007 August</option><option value="20077" >2007 July</option><option value="20076" >2007 June</option><option value="20075" >2007 May</option><option value="20074" >2007 April</option><option value="20073" >2007 March</option></select></li>											
							</ul>
							</ul><hr class="noscreen">


						</div> <!-- /col-in -->
					</div> <!-- /col -->
				</div> <!-- /page-in -->
			</div> <!-- /page -->
		    <!-- Footer -->
    		<div id="footer">
        		<div id="top" class="noprint"><p><span class="noscreen">Back on top</span> <a href="#header" title="Back on top ^">^<span></span></a></p></div>
		        <hr class="noscreen">
    		    <p id="hits">130646 Hits Since 23-03-2007</p>
        		<p id="copyright">&copy; 2023 Royal College. Colombo 07.</p>
		    </div> 
    		<!-- /footer -->
		</div> <!-- /main -->
	</body>

</html>
