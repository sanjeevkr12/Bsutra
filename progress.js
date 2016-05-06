addEvent(window, 'load', setupSlider, false);

function setupSlider()
{
	var objDropdown = document.getElementById('dropdown');
	var objContainer = document.createElement('div');
	var objAnchor = document.createElement('a');
	var objThumb = document.createElement('input');
	var objLabel = document.createElement('label');
	var objSpan = document.createElement('span');
	var objHeader = document.createElement('h2');
	var objPara = document.createElement('p');
	var objList = document.createElement('dl');
	var objTerm = document.createElement('dt');
	var objKey = document.createElement('kbd');
	var objDefinition = document.createElement('dd');

	objContainer.appendChild(objAnchor);
	objDropdown.parentNode.insertBefore(objContainer, objDropdown);

	objContainer = document.createElement('div');
	objDropdown.parentNode.removeChild(objDropdown);

	objContainer.className = 'slider';
	objThumb.setAttribute('type', 'image');
	objThumb.setAttribute('src', 'thumb.gif');
	objThumb.setAttribute('alt', 'Effectiveness');
	objThumb.setAttribute('id', 'thumb');
	objThumb.setAttribute('title', 'Effectiveness, between 0 and 500');

	if (typeof document.documentElement.setAttributeNS != 'undefined')
	{
		objThumb.setAttribute('role', 'wairole:slider');
		objThumb.setAttributeNS('http://www.w3.org/2005/07/aaa', 'valuemin', 0);
		objThumb.setAttributeNS('http://www.w3.org/2005/07/aaa', 'valuemax', 500);
		objThumb.setAttributeNS('http://www.w3.org/2005/07/aaa', 'valuenow', 0);
		objThumb.setAttributeNS('http://www.w3.org/2005/07/aaa', 'labelledby', 'lbl');
	}
	else
	{
		objThumb.setAttribute('x:role', 'wairole:slider');
		objThumb.setAttribute('aaa:valuemin', 0);
		objThumb.setAttribute('aaa:valuemax', 500);
		objThumb.setAttribute('aaa:valuenow', 0);
		objThumb.setAttribute('aaa:labelledby', 'lbl');
	}

	addEvent(objThumb, 'keydown', objSlider.moveSlider, false);
	addEvent(objThumb, 'focus', objSlider.highlightThumb, false);
	addEvent(objThumb, 'blur', objSlider.highlightThumb, false);
	addEvent(objContainer, 'mouseup', objSlider.moveSlider, false);

	objContainer.appendChild(objThumb);

	objLabel.setAttribute('for', 'thumb');
	objLabel.setAttribute('id', 'lbl');
	objLabel.appendChild(document.createTextNode('Effectiveness\u00a0'));

	objSpan.setAttribute('id', 'result');
	objSpan.appendChild(document.createTextNode('0'));
	objLabel.appendChild(objSpan);
	objContainer.appendChild(objLabel);
	document.body.appendChild(objContainer);

	objHeader.appendChild(document.createTextNode('Keyboard Instructions'));
	document.body.appendChild(objHeader);

	objPara.appendChild(document.createTextNode('Tab to the slider control, then use the following keys.'));
	document.body.appendChild(objPara);

	objKey.appendChild(document.createTextNode('Right Arrow'));
	objTerm.appendChild(objKey);
	objList.appendChild(objTerm);

	objDefinition.appendChild(document.createTextNode('Increases the slider value by 1'));
	objList.appendChild(objDefinition);

	objKey = document.createElement('kbd');
	objTerm = document.createElement('dt');
	objDefinition = document.createElement('dd');
	objKey.appendChild(document.createTextNode('Left Arrow'));
	objTerm.appendChild(objKey);
	objList.appendChild(objTerm);

	objDefinition.appendChild(document.createTextNode('Decreases the slider value by 1'));
	objList.appendChild(objDefinition);

	objKey = document.createElement('kbd');
	objTerm = document.createElement('dt');
	objDefinition = document.createElement('dd');
	objKey.appendChild(document.createTextNode('Page Down'));
	objTerm.appendChild(objKey);
	objList.appendChild(objTerm);

	objDefinition.appendChild(document.createTextNode('Increases the slider value by 50'));
	objList.appendChild(objDefinition);

	objKey = document.createElement('kbd');
	objTerm = document.createElement('dt');
	objDefinition = document.createElement('dd');
	objKey.appendChild(document.createTextNode('Page Up'));
	objTerm.appendChild(objKey);
	objList.appendChild(objTerm);

	objDefinition.appendChild(document.createTextNode('Decreases the slider value by 50'));
	objList.appendChild(objDefinition);

	objKey = document.createElement('kbd');
	objTerm = document.createElement('dt');
	objDefinition = document.createElement('dd');
	objKey.appendChild(document.createTextNode('Home'));
	objTerm.appendChild(objKey);
	objList.appendChild(objTerm);

	objDefinition.appendChild(document.createTextNode('Sets the slider value to 0'));
	objList.appendChild(objDefinition);

	objKey = document.createElement('kbd');
	objTerm = document.createElement('dt');
	objDefinition = document.createElement('dd');
	objKey.appendChild(document.createTextNode('End'));
	objTerm.appendChild(objKey);
	objList.appendChild(objTerm);

	objDefinition.appendChild(document.createTextNode('Sets the slider value to 500'));
	objList.appendChild(objDefinition);
	document.body.appendChild(objList);

	objDrag.setupDrag(objThumb);

	return true;
}

function addEvent(objElement, strEventType, objFunction, bCapture)
{
	var bResult;

	if (objElement.addEventListener)
	{
		objElement.addEventListener(strEventType, objFunction, bCapture);
		return true;
	}
	else if (objElement.attachEvent)
	{
		bResult = objElement.attachEvent('on' + strEventType, objFunction);
		return bResult;
	}
	else
	{
		objElement['on' + strEventType] = objFunction;
	}

	return false;
}

function removeEvent(objElement, strEventType, objFunction, bCapture)
{
	var bResult;

	if (objElement.removeEventListener)
	{
		objElement.removeEventListener(strEventType, objFunction, bCapture);
		return true;
	}
	else if (objElement.detachEvent)
	{
		bResult = objElement.detachEvent('on' + strEventType, objFunction);
		return bResult;
	}
	else
	{
		objElement['on' + strEventType] = null;
	}

	return false;
}

function getCookie(strName)
{
	var arCookies = document.cookie.split(';');
	var objCookie;

	strName += '=';

	for(var iCounter=0; iCounter<arCookies.length; iCounter++)
	{
		objCookie = arCookies[iCounter].replace(/^\s*|\s*$/g, '');

		if (objCookie.indexOf(strName) === 0)
		{
			return objCookie.substring(strName.length, objCookie.length);
		}
	}

	return null;
}