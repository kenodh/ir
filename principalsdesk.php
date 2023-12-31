<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" /> 
			<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
			<head>
				<meta http-equiv="Keywords" name="keywords" content="royal,schools,colombo,college,colleges,sri lanka,royal college,student information system,school news,exam results,attendance,education,sports" /> 
				<meta http-equiv="Description" name="description" content="Official web site of the Royal College Colmbo, Sri Lanka which contains news, photo albums, school diary, sports information and student information" />
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
				<link rel="SHORTCUT ICON" href="images/favicon.ico" /> 
			    <title>Principal's Desk</title>
		    	<link rel="stylesheet" media="screen,projection" type="text/css" href="styles/main.css" /> 
		    	<link rel="stylesheet" media="screen,projection" type="text/css" href="styles/template.css" /> 
			</head>
<script type="text/javascript" src="scripts/livepage.js"></script>
<script type="text/javascript">
	var xmlHttp = null;

	function viewNews(year,month) {
		document.frmNews.data1.value = year;
		document.frmNews.data2.value = month;
		document.frmNews.submit();
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
	
	function onStateChanged() { 
		if (xmlHttp.readyState == 4) { 
			var result = xmlHttp.responseText;
			document.getElementById("searchresults").innerHTML = result;
		}
	}

	function onSearchClick() {
		if (document.frmSearch.txtSearchKey.value != '') {
			xmlHttp = GetXmlHttpObject();
			if (xmlHttp == null) {
				alert ("Your browser does not support AJAX technology");
				return;
			}
			url = 'principalsdesksearch.php?key=' + document.frmSearch.txtSearchKey.value;
			document.getElementById("searchresults").innerHTML = '<br>Please wait. Search in progress';
			xmlHttp.onreadystatechange = onStateChanged;
			xmlHttp.open("GET",url,true);
			xmlHttp.send(null);
		}
		else alert('Please enter a valid search key');
	}
	
	function openSearch() {
		document.frmMode.mode.value = 1;
		document.frmMode.submit();
	}
</script>

	<form name="frmNews" method="post" class="nodisplay">
		<input type="hidden" name="data1">
		<input type="hidden" name="data2">
	</form>

	<form name="frmMode" method="post" class="nodisplay">
		<input type="hidden" name="mode">
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
<li><a href="index.php">Home<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="photos.php">Photos<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="videos.php">Videos<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="diary.php">Diary<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="academic.php">Academic<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="sports.php">Sports<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="societies.php">Societies<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="comments.php">Comments<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="sitemap.php">Site Map<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="faq.php">FAQ<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="support.php">Support<span class="tab-l"></span><span class="tab-r"></span></a></li>				</ul>
				<hr class="noscreen">
			</div> <!-- /tabs -->
		    <div id="page" class="box">
    			<div id="page-in" class="box">
					<div id="strip" class="box noprint">
						<p id="rss"><a href="contactus.php" target="_self">Contact Us</a></p>
						<hr class="noscreen">
						<p id="currentPosition">You are here: <strong>Principal's Desk</strong></p>
						<hr class="noscreen">
					</div> <!-- /strip -->
					<div id="content">
						<div class="article">
<h2><span>Principal's Desk</span></h2><p class="info noprint">
							                    <span class="newstitle">Gymnastic - All Island School Games 2011</span>&emsp;
												<span class="date">2011-09-30</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints">Held at Sugathadasa Indoor Stadium, Colombo on 17th, 18th and 19th September 2011, finishing as the Runner up in the overall standings.<br />
<br />
T. Sahan Thejana Peiris was adjudged as under 15 &quot;Best Player&quot;, for his feat of winning Six Gold medals in Rings, Floor, Vault, Phommel Horse, High Bar and Parallel Bar respectively.<br />
<br />
Pasan M. Balasinghe won a Bronze medal by securing 3rd place in under 17 &quot;Rings&quot; event.</span></p><p class="info noprint">
							                    <span class="newstitle">Junior Rugby  - Super 16 Tournament </span>&emsp;
												<span class="date">2011-09-28</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints">At Royal Grounds<br />
<br />
<u><strong>Under 12</strong></u><br />
<br />
<strong>Cup - Semi Finals</strong><br />
Royal Blue Vs. Wesley (26 - 0)<br />
<br />
<strong>Finals</strong><br />
Isipathana Vs. Royal Blue (7 - 14)<br />
<br />
<strong>***Royal Blue emerged Cup Championship</strong><br />
<br />
<br />
<strong>Bowl - Semi Finals<br />
</strong>Royal Orange Vs. Royal Gold (0-21)<br />
<br />
<strong>Finals</strong><br />
S.P.C. Vs. Royal Gold (7-14)<br />
<br />
<strong>*** Royal Gold emerged Ball Championship</strong><br />
<br />
<br />
<u><strong>Under 10</strong></u><br />
<br />
<strong>Semi Finals</strong><br />
Royal Blue Vs. Zahira College (10-5)<br />
<br />
<strong>Finals<br />
</strong>S. Peters College Vs. Royal Blue (0-10)<br />
<br />
<strong>*** Royal Blue emerged Cup Championship</strong></span></p><p class="info noprint">
							                    <span class="newstitle">Basketball - Carlton Tournament 2011</span>&emsp;
												<span class="date">2011-09-28</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints"><table border="0" cellspacing="0" cellpadding="0" width="406" style="width: 406px; height: 94px">
    <tbody>
        <tr>
            <td><u><strong>Date</strong></u></td>
            <td><u><strong>Match</strong></u></td>
            <td><u><strong>Score</strong></u></td>
            <td><u><strong>Result</strong></u></td>
        </tr>
        <tr>
            <td>24.09.2011</td>
            <td>Vs. St. Sebastian College, Moratuwa</td>
            <td>24-10</td>
            <td>Won</td>
        </tr>
        <tr>
            <td>25.09.2011</td>
            <td>Vs. S. Thomas College, Mt. Lavinia</td>
            <td>10-16</td>
            <td>Lost</td>
        </tr>
    </tbody>
</table></span></p><p class="info noprint">
							                    <span class="newstitle">Young Computer Scientists Competition 2011</span>&emsp;
												<span class="date">2011-09-23</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints">Conducted by Federation of IT Industry Sri Lanka &amp; ICT Branch of the Ministry of Education.<br />
<br />
<u><strong>Senior Category</strong></u><br />
Western Province - 1st place<br />
All Island 2nd place - National Level School ICT Championship 2011<br />
<br />
Project :- Wind Master (Wind Power Calculator)<br />
<br />
1. Gayan Jeewantha - 13 M6<br />
2. Milan Nuwantha - 13 M7<br />
3. Kanchana Ruwanpathirana - 13 M7<br />
4. Jayath Senevirathne - 12 ME<br />
<br />
Supported by - Mr. Saman Perera<br />
<br />
<u><strong>Junior Category</strong></u><br />
<br />
<strong>Western Province - 1st place</strong><br />
<br />
Project Name :- Creative Networks<br />
<br />
1. Sachith Varun<br />
2. Moveen Ronush<br />
3. Nadula Asela<br />
4. Sadeep Darshana<br />
<br />
Supported by - Mrs. M. Manage</span></p><p class="info noprint">
							                    <span class="newstitle">Athletics - John Tarbet Championship 2011</span>&emsp;
												<span class="date">2011-09-23</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints"><p>Held in Kandy 2011 September 12, 13, 14, 15</p>
<table border="0" cellspacing="0" cellpadding="0" width="297" style="width: 297px; height: 539px">
    <tbody>
        <tr>
            <td><u><strong>Event</strong></u></td>
            <td><u><strong>Name</strong></u></td>
            <td><u><strong>Place</strong></u></td>
        </tr>
        <tr>
            <td><u><strong>Under 12</strong></u></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>100 m</td>
            <td>Nuwan Liyanage</td>
            <td>3rd</td>
        </tr>
        <tr>
            <td>100 m</td>
            <td>Pawan Kawishka</td>
            <td>6th</td>
        </tr>
        <tr>
            <td>80 m</td>
            <td>Nuwan Liyanage</td>
            <td>6th</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><u><strong>Under 13</strong></u></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>100 m</td>
            <td>M. Sabith Feroze</td>
            <td>3rd</td>
        </tr>
        <tr>
            <td>200 m</td>
            <td>M. Sabith Feroze</td>
            <td>4th</td>
        </tr>
        <tr>
            <td>High Jump</td>
            <td>Nadula Wirange</td>
            <td>5th</td>
        </tr>
        <tr>
            <td>100x4 Relay</td>
            <td>K.D.S. Perera</td>
            <td>4th</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>C. Karunarathne</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>M. Sabith Feroze</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Shimalka Mendis</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><u><strong>Under 14</strong></u></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Shotputt</td>
            <td>L.Z. Athnan</td>
            <td>1st</td>
        </tr>
        <tr>
            <td>Discuss</td>
            <td>Rahal Sirimanna</td>
            <td>2nd</td>
        </tr>
        <tr>
            <td>Javelin</td>
            <td>L.Z. Athnan</td>
            <td>2nd</td>
        </tr>
        <tr>
            <td>Shotputt</td>
            <td>Kashapa Jayawardana</td>
            <td>5th</td>
        </tr>
        <tr>
            <td>Discuss</td>
            <td>Kashapa Jayawardana</td>
            <td>5th</td>
        </tr>
        <tr>
            <td>200 m</td>
            <td>Yeshan Manamperi</td>
            <td>3rd</td>
        </tr>
        <tr>
            <td>100 m</td>
            <td>Yeshan Manamperi</td>
            <td>4th</td>
        </tr>
        <tr>
            <td>100x4 Relay</td>
            <td>Yeshan Manamperi</td>
            <td>2nd</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Kashapa Jayawardana</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Chamaka Edirisinghe</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Deelaka Thaminda</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><u><strong>Under 15</strong></u></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>100 m</td>
            <td>Gawtham Sellasamy</td>
            <td>6th</td>
        </tr>
        <tr>
            <td>Discuss</td>
            <td>Kaweesha Subasinghe</td>
            <td>6th</td>
        </tr>
        <tr>
            <td>100x4 Relay</td>
            <td>Gawtham Sellasamy</td>
            <td>5th</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Chathura Akalanka</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>O.B. Jayawardana</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>S. Siriwardana</td>
            <td>&nbsp;</td>
        </tr>
    </tbody>
</table>
<br />
<strong>Under 14 Boys - Championship - 42 Points<br />
Relay All Round - 3rd - 12 Points<br />
All Round - Championship 3rd - 64 Points</strong></span></p><p class="info noprint">
							                    <span class="newstitle">Cricket - U 15 A - Vs. Dharmapala College</span>&emsp;
												<span class="date">2011-09-23</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints"><table border="0" cellspacing="0" cellpadding="4" width="421" style="width: 421px; height: 142px">
    <tbody>
        <tr>
            <td colspan="2"><strong>Royal 86 all out</strong></td>
        </tr>
        <tr>
            <td>Geeshath Panditharathne</td>
            <td>28&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2"><strong>Dharmapala 50 all out </strong></td>
        </tr>
        <tr>
            <td>Buddhika Arsakularathne</td>
            <td>3 for 10</td>
        </tr>
        <tr>
            <td>Lasith Embuldeniya</td>
            <td>4 for 12</td>
        </tr>
        <tr>
            <td>Hasitha Samarasinghe</td>
            <td>3 for 11</td>
        </tr>
    </tbody>
</table>
<p>&nbsp;***<strong> Royal won by&nbsp;36 runs</strong></p></span></p><p class="info noprint">
							                    <span class="newstitle">Chess - National School Games 2011</span>&emsp;
												<span class="date">2011-09-20</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints"><div>Date &nbsp;&nbsp; : - 7th, 8th &amp; 9th September 2011</div>
<div>Venue&nbsp;:- Badulla M.M.V</div>
<div>&nbsp;</div>
<div><b><u>Royal College U &ndash; 19 Team Results</u></b></div>
<div>&nbsp;</div>
<table border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td valign="top" width="80">
            <div><b>Round</b></div>
            </td>
            <td valign="top" width="176">
            <div><b>School</b></div>
            </td>
            <td valign="top" width="64">
            <div><b>Points</b></div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="80">
            <div>1</div>
            </td>
            <td valign="top" width="176">
            <div>Zahira College</div>
            </td>
            <td valign="top" width="64">
            <div>6</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="80">
            <div>2</div>
            </td>
            <td valign="top" width="176">
            <div>Richmond College</div>
            </td>
            <td valign="top" width="64">
            <div>4.5</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="80">
            <div>3</div>
            </td>
            <td valign="top" width="176">
            <div>Ananda College</div>
            </td>
            <td valign="top" width="64">
            <div>3</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="80">
            <div>4</div>
            </td>
            <td valign="top" width="176">
            <div>Maliyadeva College</div>
            </td>
            <td valign="top" width="64">
            <div>4</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="80">
            <div>5</div>
            </td>
            <td valign="top" width="176">
            <div>Devapathiraja College</div>
            </td>
            <td valign="top" width="64">
            <div>3</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="80">
            <div>6</div>
            </td>
            <td valign="top" width="176">
            <div>Sylvester&rsquo;s College</div>
            </td>
            <td valign="top" width="64">
            <div>5</div>
            </td>
        </tr>
    </tbody>
</table>
<div>&nbsp;</div>
<div><b>Total Points &ndash; 24.5</b></div>
<div><b>Overall Place &ndash; Champions</b></div>
<div>&nbsp;</div>
<div>1st Runner up - Devapathiraja College</div>
<div>2nd Runner up &ndash; Dharmaraja College</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div><b>Individual Scores</b></div>
<div>&nbsp;</div>
<table border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td valign="top" width="24">
            <div>1</div>
            </td>
            <td valign="top" width="176">
            <div>K.H. Amarasena</div>
            </td>
            <td valign="top" width="216">
            <div>5/6</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="24">
            <div>2</div>
            </td>
            <td valign="top" width="176">
            <div>S.W. Ediriweera</div>
            </td>
            <td valign="top" width="216">
            <div>4/6</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="24">
            <div>3</div>
            </td>
            <td valign="top" width="176">
            <div>K.O.V. Kottahachchy&nbsp;</div>
            </td>
            <td valign="top" width="216">
            <div>4.5/6</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="24">
            <div>4</div>
            </td>
            <td valign="top" width="176">
            <div>D.D. Elvitigala</div>
            </td>
            <td valign="top" width="216">
            <div>0/0</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="24">
            <div>5</div>
            </td>
            <td valign="top" width="176">
            <div>Y.K. Kuruwitage</div>
            </td>
            <td valign="top" width="216">
            <div>3/6</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="24">
            <div>6</div>
            </td>
            <td valign="top" width="176">
            <div>U.P. Madurapperuma</div>
            </td>
            <td valign="top" width="216">
            <div>3.5/6</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="24">
            <div>7</div>
            </td>
            <td valign="top" width="176">
            <div>U.L Samarakone</div>
            </td>
            <td valign="top" width="216">
            <div>5.5/6 &nbsp;&nbsp; (Board Prize Winner)</div>
            </td>
        </tr>
    </tbody>
</table>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div><b><u>Royal College U &ndash; 15 Team Results</u></b></div>
<div>&nbsp;</div>
<table border="0" cellspacing="0" cellpadding="0" align="left">
    <tbody>
        <tr>
            <td valign="top" width="61">
            <div><b>Round</b></div>
            </td>
            <td valign="top" width="218">
            <div><b>School</b></div>
            </td>
            <td valign="top" width="136">
            <div><b>Points</b></div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="61">
            <div>1</div>
            </td>
            <td valign="top" width="218">
            <div>Eheliyagoda College</div>
            </td>
            <td valign="top" width="136">
            <div>6</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="61">
            <div>2</div>
            </td>
            <td valign="top" width="218">
            <div>Kingswood College</div>
            </td>
            <td valign="top" width="136">
            <div>3.5</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="61">
            <div>3</div>
            </td>
            <td valign="top" width="218">
            <div>Vidyartha College</div>
            </td>
            <td valign="top" width="136">
            <div>2</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="61">
            <div>4</div>
            </td>
            <td valign="top" width="218">
            <div>Jaffna Hindu College</div>
            </td>
            <td valign="top" width="136">
            <div>5.5</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="61">
            <div>5</div>
            </td>
            <td valign="top" width="218">
            <div>Dhamashoka College</div>
            </td>
            <td valign="top" width="136">
            <div>2.5</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="61">
            <div>6</div>
            </td>
            <td valign="top" width="218">
            <div>Sumangala College</div>
            </td>
            <td valign="top" width="136">
            <div>5</div>
            </td>
        </tr>
    </tbody>
</table>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
<div><b><br />
Total Points &ndash; 24.5</b></div>
<div><b>Overall Place &ndash; 1st Runner up</b></div>
<div>&nbsp;</div>
<div>Champions - Vidyartha College</div>
<div>2nd Runner up &ndash; Richmond College</div>
<div>&nbsp;</div>
<div><b>Individual Scores</b></div>
<div>&nbsp;</div>
<table border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td valign="top" width="24">
            <div>1</div>
            </td>
            <td valign="top" width="216">
            <div>V.B. Wijekoon</div>
            </td>
            <td valign="top" width="216">
            <div>4/6</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="24">
            <div>2</div>
            </td>
            <td valign="top" width="216">
            <div>H.K.K. Helanga</div>
            </td>
            <td valign="top" width="216">
            <div>0.5/2</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="24">
            <div>3</div>
            </td>
            <td valign="top" width="216">
            <div>D.T. De Alwis</div>
            </td>
            <td valign="top" width="216">
            <div>5/6</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="24">
            <div>4</div>
            </td>
            <td valign="top" width="216">
            <div>Y. Vithanage</div>
            </td>
            <td valign="top" width="216">
            <div>4.5/6</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="24">
            <div>5</div>
            </td>
            <td valign="top" width="216">
            <div>D.M.S.N. Dayarathne</div>
            </td>
            <td valign="top" width="216">
            <div>2/5</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="24">
            <div>6</div>
            </td>
            <td valign="top" width="216">
            <div>C.V. Bataduwaarachchi</div>
            </td>
            <td valign="top" width="216">
            <div>5.5/6 (Board Prize Winner)</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="24">
            <div>7</div>
            </td>
            <td valign="top" width="216">
            <div>T.G. Amarasena</div>
            </td>
            <td valign="top" width="216">
            <div>3/5</div>
            </td>
        </tr>
    </tbody>
</table>
<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></span></p><p class="info noprint">
							                    <span class="newstitle">Hockey - National School Games 2011</span>&emsp;
												<span class="date">2011-09-20</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints"><div>Vs. Maris Stella, Negombo - 1st Round (5 &ndash; 0)</div>
<div>&nbsp;</div>
<div>Vs. Trinity, Kandy - 2nd Round (3 &ndash; 0)</div>
<div>&nbsp;</div>
<div>Vs. Vijaya, Matale - Quarter Finals (2 &ndash; 0)</div>
<div>&nbsp;</div>
<div>Vs. Nalanda, Colombo - Semi Finals&nbsp;(2 &ndash; 0)</div>
<div>&nbsp;</div>
<div>Vs. S. Thomas, Matale -&nbsp;Final (2 &ndash; 0)<br />
&nbsp;</div>
<div>&nbsp;</div>
<div>Royal College emerged as Champions at the National School Games 2011.</div>
<div>&nbsp;</div>
<div>Shahin Ahamed was adjudged the most outstanding player at the National School Games Hockey - 2011</div></span></p><p class="info noprint">
							                    <span class="newstitle">Water Polo - Public Schools Championship</span>&emsp;
												<span class="date">2011-09-20</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints"><u><strong>Results </strong></u><br />
<br />
<u><strong>U 19</strong><br />
</u>RC beat STC 5-3 (Semi Final)<br />
scorers : Wasim Marikkabawa, Shan Lakshitha, Visal Poornaka<br />
<br />
RC beat ANANDA 4-2 (Finals)<br />
scorers : Wasim Marikkabawa, Shan Lakshitha, Kanishka Fernando<br />
<br />
<u><strong>U 15</strong></u><br />
RC Lost to STC 4-5 (Semi Final)<br />
Scorers : Rifat Uwais, Sahasra Rathnayake<br />
<br />
RC beat YOSHIDA INTERNATIONAL (3rd place) 13-1<br />
Sahasra Rathnayake, Rifat Uwais, Kisal Asalaarachchie, Chandula Fernando, Yahiya Jaffer<br />
<br />
<strong>Royal College under 19 team emerged champions </strong></span></p><p class="info noprint">
							                    <span class="newstitle">Tennis - All Island Schools Games 2011</span>&emsp;
												<span class="date">2011-09-20</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints">M. Shaakir defeated Chehan Fernando at St. Peter's College by 6-4<br />
Sharmal Dissanayake defeated Aritha Weerasinghe St. Peter's&nbsp; 5-1<br />
<br />
<strong>Royal College became the All Island Schools Games 2011 Tennis Champions.</strong></span></p><p class="info noprint">
							                    <span class="newstitle">Soccer - U 15 -  All Island Tournament</span>&emsp;
												<span class="date">2011-09-16</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints">Vs. Nalanda College (1-0) Won<br />
Vs. Sivali Maha Vidyalaya Walkover<br />
<br />
<strong>Royal College were Group Champions</strong></span></p><p class="info noprint">
							                    <span class="newstitle">Cricket - U 15 A - Vs. Richmond College</span>&emsp;
												<span class="date">2011-09-16</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints"><table border="0" cellspacing="0" cellpadding="4" width="421" style="width: 421px; height: 142px">
    <tbody>
        <tr>
            <td colspan="2"><strong>Royal&nbsp;141 all out&nbsp;in&nbsp;43.3 overs</strong></td>
        </tr>
        <tr>
            <td>Thiran Dhanapala</td>
            <td>56</td>
        </tr>
        <tr>
            <td>Chamika Karunarathne</td>
            <td>17</td>
        </tr>
        <tr>
            <td colspan="2">Richmond 4 for no loss in 0.4 overs, match suspended due to rain<strong><br />
            <br />
            Target 128 of 36 overs</strong></td>
        </tr>
        <tr>
            <td colspan="2"><strong>Richmond 126 for 7 in 36 overs</strong></td>
        </tr>
        <tr>
            <td>Chamika Karunarathne</td>
            <td>2 for 26</td>
        </tr>
        <tr>
            <td>Buddhika Arsakularthne</td>
            <td>2 for 18</td>
        </tr>
    </tbody>
</table>
<p>&nbsp;***<strong> Royal won 2 runs by D/L system.</strong></p></span></p><p class="info noprint">
							                    <span class="newstitle">Basketball - U 15A - Division Championship</span>&emsp;
												<span class="date">2011-09-14</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints">Venue - Asian International School<br />
Date - from 24 to 28 August 2011<br />
<br />
<table border="0" cellspacing="0" cellpadding="0" width="375" style="width: 375px; height: 64px">
    <tbody>
        <tr>
            <td><u><strong>Match</strong></u></td>
            <td><u><strong>Score</strong></u></td>
            <td><u><strong>Result</strong></u></td>
        </tr>
        <tr>
            <td>Vs. Asian International School</td>
            <td>48-57</td>
            <td>Lost</td>
        </tr>
        <tr>
            <td>Vs. Marestela College</td>
            <td>55-49</td>
            <td>Won</td>
        </tr>
        <tr>
            <td>Vs. S. Thomas College</td>
            <td>60-45</td>
            <td>Won</td>
        </tr>
        <tr>
            <td>Vs. Colombo International School</td>
            <td>48-51</td>
            <td>Lost</td>
        </tr>
        <tr>
            <td>Vs. St. Anthony's College</td>
            <td colspan="2">Walk over</td>
        </tr>
        <tr>
            <td>Vs. Colombo International School</td>
            <td>78-83</td>
            <td>Lost</td>
        </tr>
    </tbody>
</table></span></p><p class="info noprint">
							                    <span class="newstitle">Rowing - Achievements - Annual Moratuwa University Regatta 2011</span>&emsp;
												<span class="date">2011-09-12</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints"><div>
<div>The above regatta was held on the 2nd,3rd and 4th of September 2011 at the Bolgoda Lake.<br />
<br />
The teams that Contested for this&nbsp; Regatta&nbsp;&nbsp;are as follows:<br />
<br />
1. Colombo University Rowing Club<br />
2. Asian International School Rowing Team<br />
3. Colombo Rowing Club<br />
4. St.Thomas Rowing Team<br />
5. Royal College Rowing Club&nbsp;<br />
6. University of Moratuwa Rowing Team&nbsp;</div>
</div>
<div>7. Ananda College</div>
<div>8. Sri Lanka Army Rowing Team</div>
<div>9. Sri Lanka Navy Rowing Team</div>
<div>10. Sri Lanka Air Force Rowing Team</div>
<div>11. Kothalawala Defence Acadamy Rowing Team<br />
<br />
The Distance Rowed was 2&nbsp; kilo meters with Four Lane Racing.<br />
<br />
The Royal College Rowing club team won the following overall Trophies:</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div><b>Under 13 - Overall Trophy</b></div>
<div>&nbsp;</div>
<div><b>Under 16 - Overall Trophy</b></div>
<div>&nbsp;</div>
<div>The events&nbsp;Rowed and the respective names of the winners&nbsp;are as follows:<br />
<br />
<table border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td valign="top" width="129">
            <div><b>AGE GROUP</b></div>
            </td>
            <td valign="top" width="204">
            <div><b>EVENT</b></div>
            </td>
            <td valign="top" width="204">
            <div><b>NAME</b></div>
            </td>
            <td valign="top" width="128">
            <div><b>MEDAL</b></div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="129">
            <div>U 13</div>
            </td>
            <td valign="top" width="204">
            <div>SCULLS(1X)</div>
            </td>
            <td valign="top" width="204">
            <div>Kaveen Rajapakse</div>
            <div>Hashen Hettigoda</div>
            </td>
            <td valign="top" width="128">
            <div>Gold Medal</div>
            <div>Silver Medal</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="129">
            <div>U 13</div>
            </td>
            <td valign="top" width="204">
            <div>PAIRS (2-)</div>
            </td>
            <td valign="top" width="204">
            <div>Kaveen Rajapakse&nbsp;</div>
            <div>Hashen Hettigoda</div>
            </td>
            <td valign="top" width="128">
            <div>Gold Medal</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="129">
            <div>U 13</div>
            </td>
            <td valign="top" width="204">
            <div>DOUBLE SCULLS (2x)</div>
            </td>
            <td valign="top" width="204">
            <div>Ishira Rambukwale</div>
            <div>Hashen Hettigoda</div>
            <div>Kaveen Rajapakse</div>
            <div>Revata Karunasundara</div>
            </td>
            <td valign="top" width="128">
            <div>Gold Medal&nbsp;</div>
            <div>&nbsp;</div>
            <div>Silver Medal</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="129">
            <div>U 16</div>
            </td>
            <td valign="top" width="204">
            <div>SCULLS (1x)</div>
            </td>
            <td valign="top" width="204">
            <div>Keshan Ranasinghe</div>
            </td>
            <td valign="top" width="128">
            <div>Bronze Medal</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="129">
            <div>U 16</div>
            </td>
            <td valign="top" width="204">
            <div>PAIRS&nbsp;&nbsp; (2-)</div>
            </td>
            <td valign="top" width="204">
            <div>Chamal Gomes</div>
            <div>Amrith Fernando</div>
            </td>
            <td valign="top" width="128">
            <div>Gold Medal</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="129">
            <div>U 16</div>
            </td>
            <td valign="top" width="204">
            <div>DOUBLE SCULLS(2x)</div>
            </td>
            <td valign="top" width="204">
            <div>Chamal Gomes</div>
            <div>Amrith Fernando</div>
            </td>
            <td valign="top" width="128">
            <div>Silver Medal</div>
            </td>
        </tr>
        <tr>
            <td valign="top" width="129">
            <div>U 19 2</div>
            </td>
            <td valign="top" width="204">
            <div>DOUBLE SCULLS (2x)</div>
            </td>
            <td valign="top" width="204">
            <div>Chirath Karunanayake&nbsp;</div>
            <div>Jehan Samarasekara</div>
            </td>
            <td valign="top" width="128">
            <div>Gold Medal</div>
            </td>
        </tr>
    </tbody>
</table>
</div></span></p><p class="info noprint">
							                    <span class="newstitle">Cricket - U 17 - Vs. Royal College, Panadura</span>&emsp;
												<span class="date">2011-09-12</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints"><table border="0" cellspacing="0" cellpadding="4" width="421" style="width: 421px; height: 142px">
    <tbody>
        <tr>
            <td colspan="2"><strong>Royal&nbsp;College 1st innings&nbsp;273 all out&nbsp;in&nbsp;49.5 overs</strong></td>
        </tr>
        <tr>
            <td>Sampath De Silva</td>
            <td>101</td>
        </tr>
        <tr>
            <td>Imal Liyanage</td>
            <td>46</td>
        </tr>
        <tr>
            <td>Gaurav Deva</td>
            <td>28</td>
        </tr>
        <tr>
            <td>Isuru Gunathilake</td>
            <td>18</td>
        </tr>
        <tr>
            <td>Poorna Aluthge</td>
            <td>17</td>
        </tr>
        <tr>
            <td colspan="2"><strong>Royal Panadura&nbsp;156 all out in&nbsp;39.5&nbsp;overs</strong></td>
        </tr>
        <tr>
            <td>Harith Samarasinghe</td>
            <td>4&nbsp;for&nbsp;25&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr>
            <td>Devinda Pathmanathan</td>
            <td>4&nbsp;for 32</td>
        </tr>
    </tbody>
</table>
<p>&nbsp;***<strong> Royal won by 117 runs.</strong></p></span></p><p class="info noprint">
							                    <span class="newstitle">Cricket - Vs. St. Peters College</span>&emsp;
												<span class="date">2011-09-12</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints"><table border="0" cellspacing="0" cellpadding="4" width="421" style="width: 421px; height: 142px">
    <tbody>
        <tr>
            <td colspan="2"><strong>St. Peters 174 all&nbsp;out&nbsp;in&nbsp;47.4 overs</strong></td>
        </tr>
        <tr>
            <td>Lasith Embuldeniya</td>
            <td>4 for 21</td>
        </tr>
        <tr>
            <td>Chamika Karunarathne</td>
            <td>2 for 39</td>
        </tr>
        <tr>
            <td>Minura Punchihewa</td>
            <td>2&nbsp;for&nbsp;51&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2"><strong>Royal College&nbsp;177&nbsp;for&nbsp;4 in&nbsp;41&nbsp;overs</strong></td>
        </tr>
        <tr>
            <td>Geeshath Panditharathne</td>
            <td>56*</td>
        </tr>
        <tr>
            <td>Thiran Dhanapala</td>
            <td>42*</td>
        </tr>
    </tbody>
</table>
<p>&nbsp;***<strong> Royal won by&nbsp;6&nbsp;wickets</strong></p></span></p><p class="info noprint">
							                    <span class="newstitle">Cricket - U 15 B - Vs. Devapathiraja College, Rathgama</span>&emsp;
												<span class="date">2011-09-12</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints"><table border="0" cellspacing="0" cellpadding="4" width="421" style="width: 421px; height: 142px">
    <tbody>
        <tr>
            <td colspan="2"><strong>Royal&nbsp;207 all out&nbsp;in&nbsp;46.5 overs</strong></td>
        </tr>
        <tr>
            <td>Shashen Fernando</td>
            <td>81</td>
        </tr>
        <tr>
            <td>Himesh Ramanayake</td>
            <td>38</td>
        </tr>
        <tr>
            <td>Aroshana Herath</td>
            <td>27</td>
        </tr>
        <tr>
            <td colspan="2"><strong>Devapathiraja&nbsp;104 all out in 30.4&nbsp;overs</strong></td>
        </tr>
        <tr>
            <td>Shan Thennakoon</td>
            <td>4&nbsp;for&nbsp;28&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr>
            <td>Gavin Karunarathne</td>
            <td>2 for 26</td>
        </tr>
        <tr>
            <td>Aroshana Herath</td>
            <td>2 for 16</td>
        </tr>
    </tbody>
</table>
<p>&nbsp;***<strong> Royal won by 103 runs.</strong></p></span></p><p class="info noprint">
							                    <span class="newstitle">Cricket - U 15 C - Vs. Malwattawala National School</span>&emsp;
												<span class="date">2011-09-12</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints"><table border="0" cellspacing="0" cellpadding="4" width="421" style="width: 421px; height: 142px">
    <tbody>
        <tr>
            <td colspan="2"><strong>Malwattawala National School&nbsp;82 all out&nbsp;in&nbsp;28 overs</strong></td>
        </tr>
        <tr>
            <td>Charuka Hatarasinghe</td>
            <td>5 for 23</td>
        </tr>
        <tr>
            <td>Danindu Rathnayake</td>
            <td>2&nbsp;for&nbsp;26&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2"><strong>Royal College&nbsp;83&nbsp;for&nbsp;6 in&nbsp;24.5&nbsp;overs</strong></td>
        </tr>
        <tr>
            <td>Kulith Samarakoon</td>
            <td>14</td>
        </tr>
        <tr>
            <td>Nivenka Rathnayake</td>
            <td>14</td>
        </tr>
        <tr>
            <td>Kavinda Rajapakshe</td>
            <td>26*</td>
        </tr>
    </tbody>
</table>
<p>&nbsp;***<strong> Royal won by 4&nbsp;wickets</strong></p></span></p><p class="info noprint">
							                    <span class="newstitle">Reopening of the School</span>&emsp;
												<span class="date">2011-09-02</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints">School reopens for the 3rd term on 12th September 2011.</span></p><p class="info noprint">
							                    <span class="newstitle">Cricket - U 15 C - Vs. Maharagama Central College</span>&emsp;
												<span class="date">2011-09-01</span>&emsp;&emsp;
												<span class="noscreen">&nbsp;</span>
						       		        </p>
											<p><span id="deskpoints"><table border="0" cellspacing="0" cellpadding="4" width="421" style="width: 421px; height: 142px">
    <tbody>
        <tr>
            <td colspan="2"><strong>Maharagama Central 90 all out&nbsp;in&nbsp;27.5 overs</strong></td>
        </tr>
        <tr>
            <td>Kavindu Rajapakshe</td>
            <td>5 for 15</td>
        </tr>
        <tr>
            <td>Charuka Hatarasinghe</td>
            <td>3&nbsp;for 32&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2"><strong>Royal 91&nbsp;for 3 in&nbsp;16.5&nbsp;overs</strong></td>
        </tr>
        <tr>
            <td>Umindu Wijesinghe</td>
            <td>50*</td>
        </tr>
    </tbody>
</table>
<p>&nbsp;***<strong> Royal won by&nbsp;7 wickets</strong></p></span></p>								
						</div>
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
									<li><a href="javascript:openSearch();">Search</a></li>
								</ul>
							<hr class="noscreen" />
							<h3><span>Recent News</span></h3>
							<ul id="archive">
<li id="archive-active"><a href="javascript:viewNews(2011,9)" target="_self">September 2011</a></li><li ><a href="javascript:viewNews(2011,8)" target="_self">August 2011</a></li><li ><a href="javascript:viewNews(2011,7)" target="_self">July 2011</a></li><li ><a href="javascript:viewNews(2011,6)" target="_self">June 2011</a></li></ul><hr class="noscreen"><h3><span>News Archive</span></h3><ul id="archive"><li><select id="cmbNewsArchive" name="cmbNewsArchive" style="width: 180px" onchange="onNewsArchiveChange()"><option>Select month...</option><option value="20115" >2011 May</option><option value="20114" >2011 April</option><option value="20113" >2011 March</option><option value="20112" >2011 February</option><option value="20111" >2011 January</option><option value="201012" >2010 December</option><option value="201011" >2010 November</option><option value="201010" >2010 October</option><option value="20109" >2010 September</option><option value="20108" >2010 August</option><option value="20107" >2010 July</option><option value="20106" >2010 June</option><option value="20105" >2010 May</option><option value="20104" >2010 April</option><option value="20031" >2003 January</option><option value="20103" >2010 March</option><option value="20102" >2010 February</option><option value="20101" >2010 January</option><option value="200912" >2009 December</option><option value="200911" >2009 November</option><option value="200910" >2009 October</option><option value="20099" >2009 September</option><option value="20098" >2009 August</option><option value="20097" >2009 July</option><option value="20096" >2009 June</option><option value="20095" >2009 May</option><option value="20094" >2009 April</option><option value="20093" >2009 March</option><option value="20092" >2009 February</option><option value="20091" >2009 January</option><option value="200812" >2008 December</option><option value="200811" >2008 November</option><option value="200810" >2008 October</option><option value="20089" >2008 September</option><option value="20088" >2008 August</option><option value="20087" >2008 July</option><option value="20086" >2008 June</option><option value="20085" >2008 May</option><option value="20084" >2008 April</option><option value="20083" >2008 March</option><option value="20082" >2008 February</option><option value="20081" >2008 January</option><option value="200712" >2007 December</option><option value="200711" >2007 November</option><option value="200710" >2007 October</option><option value="20079" >2007 September</option><option value="20078" >2007 August</option><option value="20077" >2007 July</option><option value="20076" >2007 June</option><option value="20071" >2007 January</option><option value="20075" >2007 May</option><option value="20073" >2007 March</option><option value="20072" >2007 February</option><option value="20074" >2007 April</option></select></li>							</ul><hr class="noscreen">
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
