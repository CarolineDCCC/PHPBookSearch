<!DOCTYPE html>
<html lang="en">
<head>

<title>Search for Books</title>
<meta charset="utf-8">

<link rel="stylesheet"
	href="css/booksearch.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script>
function showHint(str) /*this creates the showHint function that will execute "onkeyup"
in the <input> field on the browser*/
{
	if(str.lenght==0) /*this returns no output in the "Suggestions: " <span> when no
	characters are entered into the input field */
{
	document.getElementById("txtHint").innerHTML = "";
	return;
}
/*check for older browsers (which use active Object() )
*/
if(window.XMLHttpRequest)  //for most modern browsers
{
	var xmlhttp = new XMLHttpRequest();
}
else
{
	var xmlhttp =  new ActiveXObject("Microsoft.XMLHTTP");
}

xmlhttp.onreadystatechange = function()
{
	if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
	{
		document.getElementById("txtHint").innerHTML = xmlhttp.responseText; /* I'm not
		quite sure exactly what this does??? */
	}
}

xmlhttp.open("GET", "title_hints.php?q="+str, true);  /* the "GET" sets the method to GET.
 "title_hints.php?q=" gives the location of the server-side processing appended with the 
 parameter "q," which is equal to "str," which holds whatever was typed into the input
 box.  Asynch is set to true so that server-side processing continues after the send()
 method without waiting for a response. */
xmlhttp.send();  /*the send() method executes the request */
}

</script>
	
</head>
<body>
	<header>
	<h1>Book Search</h1>
	</header>
	
	<h2>Search for your favorite book!</h2>
	