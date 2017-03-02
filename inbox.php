<?php include('header.php'); ?>

<h2>SSM Inbox</h2>
<p>Enter the public key to find message(s)</p>
<form action="get.php" method="post">
	<label>Public PGP key:</label>
	<textarea name="pgp_key" rows="10"></textarea>
	<input type="submit" value="Find">	
</form>


<?php include('footer.php'); ?>