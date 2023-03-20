<?php include('include/header.php'); /*this puts the header.php at the top
of the index.php page */
?>

<main id="centeredForm">

<form>

<h3 id="bookLabel">Book Title: <input type="text" onkeyup = "showHint(this.value)" 
size = "20"></h3>

<h3 id="suggestions">Suggestions: <span id="txtHint"></span></h3>
</form>



</main>

<?php include('include/footer.php'); /*this puts the footer.php file at the bottom
of the index.php file */
?>