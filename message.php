<?php include('header.php'); ?>

<h2>Send SSM</h2>

<p>First time here? Read the <a href="faq.php">faq</a> to learn how to send an SSM</p>

<form action="send.php" method="post">
	<label>Public PGP key:</label>
	<textarea name="pgp_key" rows="10"></textarea>

	<label>Encrypted message:</label>
	<textarea name="message" rows="10"></textarea>
	<input type="submit" value="Forever Send">

</form>



<?php include('footer.php'); ?>