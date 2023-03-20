<?php
//these a's create and fill an array named "a"
$a[] = "The Light We Carry";
$a[] = "1984";
$a[] = "Brave New World";
$a[] = "Maus";
$a[] = "The Glass Castle";
$a[] = "Nickel and Dimed";
$a[] = "Stacked Deck";
$a[] = "The Lion the Witch and the Wardrobe";
$a[] = "James and the Giant Peach";
$a[] = "Beloved";
$a[] = "April Rising";
$a[] = "The Grapes of Wrath";
$a[] = "Catch 22";
$a[] = "Where the Wild Things Are";
$a[] = "Crossing the Threshold of Hope";
$a[] = "Becoming";
$a[] = "Your Drug May Be Your Problem";
$a[] = "Anatomy of and Epidemic";
$a[] = "By Any Means Necessary";
$a[] = "Quodlibet";
$a[] = "Maid: Hard Work, Low Pay, and a Mother's Willingness to Survive";
$a[] = "Charlotte's Web";
$a[] = "The Hitchhiker's Guide to the Galaxy";
$a[] = "The Holy Bible";
$a[] = "Why Christianity Must Change or Die";
$a[] = "Triple No. 20";
$a[] = "The Presence of the Past";



$q = $_GET["q"]; /*this gets the appended parameter "q" that was appended to title_hints.php 
in the JavaScript code, which is equal to whatever the user types into the input box */
if (strlen($q) > 0)/*this sets up an if/else that will execute if the user types in at 
least one character */
{
	$hint = ""; //this creates and initializes the $hint variable
	for($i =  0; $i < count($a); $i++)/*this sets it up loop through all of the possible
	elements in the array according to the index number*/
	{
		if (strtolower($q) == strtolower(substr($a[$i], 0, strlen($q)))) /* This regularizes
		the input and the array items to all be read by the computer as lowercase, so that
		whatever the user types in does not have to be the same case as the elements
		and the correct book titles will be suggested anyway. */
		{
			if ($hint == "")
			{
				$hint = $a[$i];
			}
			else 
			{ 
				$hint = $hint." ; ".$a[$i];  /*this redefines the $hint variable to include
				all matching "hints," i.e., suggestions from the array with a space, a 
				semi-colon, and another space in between and concatenates them. */
			}
		}
	}

if ($hint == "")  
{
	$response = "no matching books"; /*This creates the $response variable and stores
	"no matching books" in the case that the user enters a character or characters that
	do not match anything in the array. */
}
else
{
	$response = $hint; /*this stores in the response variable whatever book titles from
	the array match what the user enters. */
}
echo $response; /*this prints the variable $response to the screen*/
}
?>