<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" /> 
			<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
			<head>
				<meta http-equiv="Keywords" name="keywords" content="royal,schools,colombo,college,colleges,sri lanka,royal college,student information system,school news,exam results,attendance,education,sports" /> 
				<meta http-equiv="Description" name="description" content="Official web site of the Royal College Colmbo, Sri Lanka which contains news, photo albums, school diary, sports information and student information" />
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
				<link rel="SHORTCUT ICON" href="images/favicon.ico" /> 
			    <title>Technical Support</title>
		    	<link rel="stylesheet" media="screen,projection" type="text/css" href="styles/main.css" /> 
		    	<link rel="stylesheet" media="screen,projection" type="text/css" href="styles/template.css" /> 
			</head>
<script type="text/javascript">
	function onSubmitClick() {
		document.frmSupport.data1.value = 1;
		document.frmProblem.cmdSubmit.disabled = true;
		document.frmProblem.submit();
	}
</script>

	<form name="frmSupport" method="post" class="nodisplay">
		<input type="hidden" name="data1">
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
<li><a href="index.php">Home<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="photos.php">Photos<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="videos.php">Videos<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="diary.php">Diary<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="academic.php">Academic<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="sports.php">Sports<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="societies.php">Societies<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="comments.php">Comments<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="sitemap.php">Site Map<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="faq.php">FAQ<span class="tab-l"></span><span class="tab-r"></span></a></li><li class="active"><a href="support.php">Support<span class="tab-l"></span><span class="tab-r"></span></a></li>				</ul>
				<hr class="noscreen">
			</div> <!-- /tabs -->
		    <div id="page" class="box">
    			<div id="page-in" class="box">
					<div id="strip" class="box noprint">
						<p id="rss"><a href="contactus.php" target="_self">Contact Us</a></p>
						<hr class="noscreen">
						<p id="currentPosition">You are here: <strong>Support</strong></p>
						<hr class="noscreen">
					</div> <!-- /strip -->
					<div id="content">
						<div class="article">
							<h2><span>Technical Support</span></h2>
							<p class="info noprint">
								<span class="newstitle">Plaese report if you are having any trouble using this web site</span><span class="noscreen">&nbsp;</span>
							</p>
							<p><span id="deskpoints">
								Note : When writing the problem description please write it describing the situation where the problem occur. If system give you
								any error messages (They will be displayed in bold red color) please include them in your description.
							</span></p>
							<span id="deskpoints">
							<form name="frmProblem" onSubmit="return onProblemsSubmitClick()" method="post">
								<table width="100%"  border="0" cellspacing="0" cellpadding="5">
									<tr>
										<td width="25%">Name</td>
										<td><input type="text" name="txtName" size="40" maxlength="50" value=""> &emsp; (Optional)</td>
									</tr>
									<tr>
										<td width="25%">E Mail Address</td>
										<td><input type="text" name="txtEMail" size="40" maxlength="50" value=""> &emsp; (Optional)</td>
									</tr>
									<tr>
										<td width="25%">Operating System</td>
										<td>								
											<select name="cmbOperatingSystem" size="1">
												<option >Windows Vista</option>
												<option >Windows 2003 (Any Version)</option>
												<option >Windows XP</option>
												<option >Windows 2000</option>
												<option >Windows Millenium</option>
												<option >Windows 98 Second Edition</option>
												<option >Windows 98</option>
												<option >Linux</option>
												<option >Other</option>
											</select>
										</td>
									</tr>
									<tr>
										<td width="25%">Web Browser</td>
										<td>								
											<select name="cmbWebBrowser" size="1">
												<option >Internet Explorer 7</option>
												<option >Internet Explorer 6</option>
												<option >Internet Explorer Other</option>
												<option >Netscape Navigator 6</option>
												<option >Netscape Navigator 4</option>
												<option >Netscape Navigator Other</option>
												<option >Mozilla Firefox 3</option>
												<option >Mozilla Firefox 2</option>
												<option >Mozilla Firefox Other</option>
												<option >Opera</option>
												<option >Maxthon</option>
												<option >Safari</option>
												<option >Google Chrome</option>
												<option >Other</option>
											</select>
										</td>
									</tr>
									<tr>
										<td width="25%">Internet Connection</td>
										<td>								
											<select name="cmbConnectionType" size="1">
												<option >Modem</option>
												<option >ISDN</option>
												<option >265K DSL/Cable</option>
												<option >512K DSL/Cable</option>
												<option >768K DSL/Cable</option>
												<option >1M DSL/Cable</option>
												<option >1.5M DSL/Cable</option>
												<option >2M DSL/Cable</option>
												<option >Broadband Other</option>
											</select>
										</td>
									</tr>
									<tr>
										<td width="25%">Description</td>
										<td><textarea name="txtDescription" cols="50" rows="5"></textarea></td>
									</tr>
									<tr>
										<td width="150px" align="left">&nbsp;</td>
										<td align="left" valign="middle">Are you a human? &nbsp;&nbsp;&nbsp;<input type="text" name="txtImageVerify" class="datafields" size="17" maxlength="5">&nbsp;&nbsp;<img src="imgverify.php"></td>
									</tr>
								</table>
								<div class="WindowButtonCenter"><input name="cmdSubmit" type="button" value="    Submit    " onClick="onSubmitClick()"></div>
							</form>
							</span>
							<p><span>
						
							</span></p>
						</div>
						<hr class="noscreen">
					</div>
					<div id="col" class="noprint">
						<div id="col-in">
							<h3><span>Quote of the day</span></h3>
							<div id="quoteofday">
								<p>	
lf you are going to climb, you have to grab the branches not the branches.					
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
    		    <p id="hits">165914 Hits Since 23-03-2007</p>
        		<p id="copyright">&copy;  Royal College. Colombo 07.</p>
		    </div> 
    		<!-- /footer -->
		</div> <!-- /main -->
	</body>

</html>
