var titles= new Array();
var messages= new Array();
var photos= new Array();
var videos= new Array();
var PicFiles = new Array();
var preLoad = new Array();
var redstart=255, bluestart=255, greenstart=255;
var stepcount=40, stepdelay=30;
var curstep=0;
var fadeobject;
var scrollerwidth="600px";
var scrollerheight="200px";
var scrollerspeed=1;
var scrollercontent= '';
var pauseit=1;
var index=0;

scrollerspeed=(document.all)? scrollerspeed : Math.max(1, scrollerspeed-1);
var copyspeed=scrollerspeed;
var iedom=document.all||document.getElementById;
var actualheight=''; 
var cross_scroller, ns_scroller;
var pausespeed=(pauseit==0)? copyspeed: 0;
var pictureIndex = -1;

function getObject(id) {
		return document.getElementById? document.getElementById(id) : document.all.namedItem(id);
	}

	function fadeText(){ 
		fadeobject.style.color = calculateColor(curstep);
		curstep = curstep + 1;
		if (curstep < stepcount) setTimeout("fadeText()",stepdelay); 
	}
	
	function calculateColor(step) {
		redend = 255 - Math.round(((255 - redstart) / stepcount) * step);
		blueend = 255 - Math.round(((255 - bluestart) / stepcount) * step);
		greenend = 255 - Math.round(((255 - greenstart) / stepcount) * step);
		return ("rgb(" + redend + ", " + greenend + ", " + blueend + ")");
	}
	
	function startFadeEffect(sred,sgreen,sblue,fadeelement,infoelement,photoelement,videoelement,infohtml,photoalbum,videoalbum) {
		redstart = sred;
		greenstart = sgreen;
		bluestart = sblue;
		curstep = 0;
		fadeobject = getObject(fadeelement);
		fadeobject.style.color = "rgb(255,255,255)";
		infoobject = getObject(infoelement);
		infoobject.innerHTML = infohtml;
		photoobject = getObject(photoelement);
		videoobject = getObject(videoelement);
		if (photoalbum > 0) {
			photoobject.style.visibility = "visible";
			photoobject.innerHTML = '<a href="photos.php?albumid=' + photoalbum + '" target="_self">Photos</a>';
		}
		else {
			photoobject.style.visibility = "hidden";
			photoobject.innerHTML = '';
		}
		if (videoalbum > 0) {
			videoobject.style.visibility = "visible";
			videoobject.innerHTML = '<a href="videos.php?albumid=' + videoalbum + '" target="_self">Videos</a>';
		}
		else {
			videoobject.style.visibility = "hidden";
			videoobject.innerHTML = '';
		}
		fadeText();
	}

	function setScrollContent() {
		if (iedom){ 
			cross_scroller.innerHTML=scrollercontent;
			actualheight=cross_scroller.offsetHeight;
		} 
		else if (document.layers){ 
			ns_scroller.document.write(scrollercontent);
			ns_scroller.document.close();
			actualheight=ns_scroller.document.height;
		} 
	}

	function populate() { 
		if (iedom){ 
			cross_scroller=getObject("iescroller");
			cross_scroller.style.top=parseInt(scrollerheight)+8+"px";
			setScrollContent();
		} 
		else if (document.layers){ 
			ns_scroller=document.ns_scroller.document.ns_scroller2;
			ns_scroller.top=parseInt(scrollerheight)+8;
			setScrollContent();
		} 
		setInterval("scrollscroller()",40);
	} 
	
	function scrollscroller(){ 
		if (iedom){ 
			if (parseInt(cross_scroller.style.top)>(actualheight*(-1)+8)) {
				cross_scroller.style.top=parseInt(cross_scroller.style.top)-copyspeed+"px";
			}
			else {
				cross_scroller.style.top=parseInt(scrollerheight)+8+"px";
				index = index + 1;
				if (index >= messages.length) index = 0;
				scrollercontent = messages[index];
				setScrollContent();
				setTimeout("startFadeEffect(102,133,204,'newsinfostrip','newstitle','newsphotos','newsvideos',titles[index],photos[index],videos[index])",100); //0,128,200
			}
		} 
		else if (document.layers){ 
			if (ns_scroller.top>(actualheight*(-1)+8)) {
				ns_scroller.top-=copyspeed;
			}
			else {
				ns_scroller.top=parseInt(scrollerheight)+8;
				index = index + 1;
				if (index >= messages.length) index = 0;
				scrollercontent = messages[index];
				setScrollContent();
				setTimeout("startFadeEffect(102,133,204,'newsinfostrip','newstitle','newsphotos','newsvideos',titles[index],photos[index],videos[index])",100);
			}
		}
	} 
	
	function opacity(id, opacStart, opacEnd, millisec) { 
	    var speed = Math.round(millisec / 100);
    	var timer = 0;

	    if(opacStart > opacEnd) { 
    	    for(i = opacStart; i >= opacEnd; i--) { 
        	    setTimeout("changeOpac(" + i + ",'" + id + "')",(timer * speed));
            	timer++;
	        } 
    	} 
		else if(opacStart < opacEnd) { 
        	for(i = opacStart; i <= opacEnd; i++) { 
	            setTimeout("changeOpac(" + i + ",'" + id + "')",(timer * speed));
    	        timer++;
        	} 
	    } 
	} 

	function changeOpac(opacity, id) { 
    	var object = getObject(id);
		if (object) {
			object = object.style;
			object.opacity = (opacity / 100);
			object.MozOpacity = (opacity / 100);
			object.KhtmlOpacity = (opacity / 100);
			object.filter = "alpha(opacity=" + opacity + ")";
		}
	}
	
	function increaseOpacity() {
		opacity("slideshow",0,100,1000);
		setTimeout("decreaseOpacity()",4000);
	}
	
	function decreaseOpacity() {
		opacity("slideshow",100,0,1000);
		setTimeout("startSlideShow()",1000);
	}

	function startSlideShow() {
		if (preLoad.length > 0) {
			document.getElementById("slideLoadProgress").innerHTML = '';
			pictureIndex = pictureIndex + 1;
			if (pictureIndex >= preLoad.length) pictureIndex = 0;
			changeOpac(0,"slideshow");
			getObject("slideshowimages").src = preLoad[pictureIndex].src;
			increaseOpacity();
		}
	}

	function initializePage()
	{
		scrollercontent = (messages.length > 0) ? messages[0] : '';
		initilizeSlideShow();
		initializeNews();
		populate();
		if (titles.length > 0)
			setTimeout("startFadeEffect(102,133,204,'newsinfostrip','newstitle','newsphotos','newsvideos',titles[0],photos[0],videos[0])",100);
		else
			setTimeout("startFadeEffect(102,133,204,'newsinfostrip','newstitle','newsphotos','newsvideos','',0,0)",100);
	}
	
	function initializeNews() {
		if (iedom||document.layers){ 
			with (document){ 
				if (iedom){ 
					getObject('newsscroller').innerHTML = '<div style="position:relative;width:'+scrollerwidth+';height:'+scrollerheight+';overflow:hidden" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=scrollerspeed">' +
						'<div id="iescroller" style="position:absolute;left:0px;top:0px;width:100%;"></div></div>';
				} 
				else if (document.layers){ 
					getObject('newsscroller').innerHTML = '<ilayer width='+scrollerwidth+' height='+scrollerheight+' name="ns_scroller">' +
						'<layer name="ns_scroller2" width='+scrollerwidth+' height='+scrollerheight+'left=0 top=0 onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=scrollerspeed"></layer></ilayer>';
				} 
			} 
		}
	}

	function initilizeSlideShow() {
		for (i = 0; i < PicFiles.length; i++) {
			preLoad[i] = new Image();
			preLoad[i].src = PicFiles[i];
		}
		startSlideShow();
	}
