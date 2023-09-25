// JavaScript Document
	var ns4;
	var op5;
	var op6;
	var agt;
	var mac;
	var ie;
	var mac_ie;

	sniffBrowsers();
	
	function sniffBrowsers()
	{
		ns4 = document.layers;
		op5 = (navigator.userAgent.indexOf("Opera 5")!=-1) ||(navigator.userAgent.indexOf("Opera/5")!=-1);
		op6 = (navigator.userAgent.indexOf("Opera 6")!=-1) ||(navigator.userAgent.indexOf("Opera/6")!=-1);
		agt=navigator.userAgent.toLowerCase();
		mac = (agt.indexOf("mac")!=-1);
		ie = (agt.indexOf("msie") != -1); 
		mac_ie = mac && ie;
	}

	function getObjNN4(obj,name)
	{
		var x = obj.layers;
		var foundLayer;
		for (var i=0;i<x.length;i++)
		{
			if (x[i].id == name)
			 	foundLayer = x[i];
			else if (x[i].layers.length)
				var tmp = getObjNN4(x[i],name);
			if (tmp) foundLayer = tmp;
		}
		return foundLayer;
	}

	function getElementLeft(Elem)
	{
		if (ns4)
		{
			var elem = getObjNN4(document, Elem);
			return elem.pageX;
		}
		else
		{
			var elem;
			if(document.getElementById)
			{
				var elem = document.getElementById(Elem);
			}
			else if (document.all)
			{
				var elem = document.all[Elem];
			}
			xPos = elem.offsetLeft;
			tempEl = elem.offsetParent;
	  		while (tempEl != null)
			{
  				xPos += tempEl.offsetLeft;
		  		tempEl = tempEl.offsetParent;
  			}
			return xPos;
		}
	}

	function getElementTop(Elem)
	{
		if (ns4)
		{
			var elem = getObjNN4(document, Elem);
			return elem.pageY;
		}
		else
		{
			if(document.getElementById)
			{	
				var elem = document.getElementById(Elem);
			}
			else if (document.all)
			{
				var elem = document.all[Elem];
			}
			yPos = elem.offsetTop;
			tempEl = elem.offsetParent;
			while (tempEl != null)
			{
  				yPos += tempEl.offsetTop;
		  		tempEl = tempEl.offsetParent;
	  		}
			return yPos;
		}
	}

	function getElementHeight(Elem)
	{
		if (ns4)
		{
			var elem = getObjNN4(document, Elem);
			return elem.clip.height;
		}
		else
		{
			if(document.getElementById)
			{
				var elem = document.getElementById(Elem);
			}
			else if (document.all)
			{
				var elem = document.all[Elem];
			}
			if (op5)
			{ 
				xPos = elem.style.pixelHeight;
			}
			else
			{
				xPos = elem.offsetHeight;
			}
			return xPos;
		} 
	}

	function getElementWidth(Elem)
	{
		if (ns4)
		{
			var elem = getObjNN4(document, Elem);
			return elem.clip.width;
		}
		else
		{
			if(document.getElementById)
			{
				var elem = document.getElementById(Elem);
			}
			else if (document.all)
			{
				var elem = document.all[Elem];
			}
			if (op5)
			{
				xPos = elem.style.pixelWidth;
			}
			else
			{
				xPos = elem.offsetWidth;
			}
			return xPos;
		}
	}
