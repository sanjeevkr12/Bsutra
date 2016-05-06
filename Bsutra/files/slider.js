var objDrag = {
	objImage : null,

	setupDrag : function(objImage)
	{
		objSlider.iAdjust = objImage.offsetParent.offsetLeft;
		if (objImage.currentStyle)
		{
			objImage.style.left = objImage.currentStyle.left;
		}
		else
		{
			objImage.style.left = document.defaultView.getComputedStyle(objImage, '').getPropertyValue('left');
		}
		addEvent(objImage, 'mousedown', objDrag.startDrag, false);
		objSlider.iSliderOffset = parseInt(objImage.style.left, 10);
		objSlider.iMax = 500;
	},

	startDrag : function(objEvent)
	{
		objEvent = objEvent || event;

		objDrag.objImage = objEvent.target || objEvent.srcElement;
		objDrag.objImage.focus();

		addEvent(document, 'mousemove', objDrag.drag, false);
		addEvent(document, 'mouseup', objDrag.endDrag, false);

		return false;
	},

	drag : function(objEvent)
	{
		objEvent = objEvent || event;

		var iXPos = parseInt(objEvent.clientX, 10) - parseInt(objSlider.iSliderOffset, 10) - objSlider.iAdjust;

		if (iXPos > objSlider.iMax)
		{
			iXPos = objSlider.iMax;
		}
		else if (iXPos < objSlider.iMin)
		{
			iXPos = objSlider.iMin;
		}

		objDrag.objImage.style.left = iXPos  + parseInt(objSlider.iSliderOffset, 10) + 'px';
		var iValue = parseInt(iXPos, 10);
		document.getElementById('result').firstChild.data = iValue;
		objSlider.iCurrent = iXPos;
		if (typeof document.documentElement.setAttributeNS != 'undefined')
		{
			objDrag.objImage.setAttributeNS('http://www.w3.org/2005/07/aaa', 'valuenow', iValue);
		}
		else
		{
			objDrag.objImage.setAttribute('aaa:valuenow', iValue);
		}

		return false;
	},

	endDrag : function()
	{
		removeEvent(document, 'mousemove', objDrag.drag, false);
		removeEvent(document, 'mouseup', objDrag.endDrag, false);
		objDrag.objImage = null;
	}
};

var objSlider = {
	iMax : 0,
	iMin : 0,
	iCurrent : 0,
	iSliderOffset : 0,
	iAdjust : 11,
	iIncrement : 50,

	moveSlider : function(objEvent)
	{
		var iOffset;
		objEvent = objEvent || event;

		objTarget = document.getElementById('thumb');

		switch (objEvent.keyCode)
		{
			case 37:
				objSlider.iCurrent--;
				break;
			case 39:
				objSlider.iCurrent++;
				break;
			case 33:
				objSlider.iCurrent -= objSlider.iIncrement;
				break;
			case 34:
				objSlider.iCurrent += objSlider.iIncrement;
				break;
			case 36:
				objSlider.iCurrent = objSlider.iMin;
				break;
			case 35:
				objSlider.iCurrent = objSlider.iMax;
				break;
			default:
				iOffset = parseInt(objEvent.clientX, 10) - parseInt(objSlider.iSliderOffset, 10) - objSlider.iAdjust;
				if (objEvent.type != 'mouseup' || iOffset > 515)
				{
					return true;
				}
				else
				{
					objSlider.iCurrent = iOffset;
				}
		}

		if (objSlider.iCurrent < objSlider.iMin)
		{
			objSlider.iCurrent = objSlider.iMin;
		}
		else if (objSlider.iCurrent > objSlider.iMax)
		{
			objSlider.iCurrent = objSlider.iMax;
		}

		if (typeof document.documentElement.setAttributeNS != 'undefined')
		{
			objTarget.setAttributeNS('http://www.w3.org/2005/07/aaa', 'valuenow', objSlider.iCurrent);
		}
		else
		{
			objTarget.setAttribute('aaa:valuenow', objSlider.iCurrent);
		}

		objTarget.style.left = objSlider.iCurrent + parseInt(objSlider.iSliderOffset, 10) + 'px';
		document.getElementById('result').firstChild.data = objSlider.iCurrent;
		if (objEvent.type == 'mouseup')
		{
			objTarget.focus();
		}

		return false;
	},

	highlightThumb : function(objEvent)
	{
		objEvent = objEvent || event;

		var objTarget = objEvent.target || objEvent.srcElement;

		if (objEvent.type == 'focus')
		{
			objTarget.src = 'focusthumb.gif';
		}
		else
		{
			objTarget.src = 'thumb.gif';
		}
	}
};
