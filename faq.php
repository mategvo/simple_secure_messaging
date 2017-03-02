<?php include('header.php'); ?>
<h2>FAQ</h2>
<p>If you have no idea what blockchain is, if you don't understand what is encryption click here for thorough <a href="explanation.php">explanation</a>.</p>
<h3>How to send an SSM</h3>
<ul>
	<li>Get yourself a PGP client (<a href="https://gpgtools.org/">osx download</a>)</li>
	<li>Encrypt a message with public key you have received from your recepient</li>
	<li>Send the message via SSM</li>
	<li>Once recepient visits the SSM portal to check his inbox, he can copy your message and decrypt it with his private key.</li>
</ul>

<h3>How to receive an SSM</h3>
<ul>
	<li>Get yourself a PGP client (<a href="https://gpgtools.org/">osx download</a>)</li>
	<li>Create your private and public keys</li>
	<li>Share the public key with people from whom you want to receive messages (You can have multiple public keys for different purposes)</li>
	<li>Check the SSM portal for message(s)</li>
	<li>Copy and decrypt the messages with your private key</li>
</ul>

<h3>How secure are messages sent via SSM?</h3>
<p>SSM relays on PGP encryption. As long as PGP encryption is not broken (which is not likely, see next section). Nothing stands in the way of encrypting a message with different encryption methods before encrypting it with PGP and sending through SSM.</p>
<p>Make sure that you private key is safe. Most likely way for someone to read your messages would be to acquire your private key. Once you read your message, and don't need the private key, destroy it - leaving the messages forever encrypted.</p>

<h3>How secure is PGP encryption?</h3>
<p>It is very secure, there's no known methods of breaking it. A brute force (trying all possible keys) would take "10,000,000,000,000 years" (source PGP.net) to try.</p>
<p>Having said that, one day there will be technology to decrypt it, although we'll probably be dead.</p>

<?php include('footer.php'); ?>
