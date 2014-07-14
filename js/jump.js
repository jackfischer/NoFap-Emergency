function getXMLHttp()
{
var xmlHttp

try
{
xmlHttp = new XMLHttpRequest();
}
catch(e)
{
try
{
xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
}
catch(e)
{
try
{
xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
}
catch(e)
{
alert("Your browser does not support AJAX!")
return false;
}
}
}
return xmlHttp;
}



function MakeRequest()
{
  var xmlHttp = getXMLHttp();

    xmlHttp.onreadystatechange = function()
      {
          if(xmlHttp.readyState == 4)
	      {
	            window.location.replace(xmlHttp.responseText);
	        }
	}

  xmlHttp.open("GET", "director.php", true); 
  xmlHttp.send(null);
}








