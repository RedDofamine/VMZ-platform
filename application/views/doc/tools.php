<?php
echo "<h1>Tools</h1>";
foreach ($vars['tools'] as $tool) {
	echo "<h3>" . $tool['Title'] . "</h3>";
	echo "<p>Cipher: " . $tool['Cipher'] . "</p>";
	echo "<p>Appointment: " . $tool['Appointment'] . "</p>";
	echo "<p>Description: " . $tool['Description'] . "</p></br>";
}
echo "<h1>Machines</h1>";
foreach ($vars['machines'] as $machine) {
	echo "<h3>" . $machine['Title'] . "</h3>";
	echo "<p>" . $machine['Turner_Holder'] . "</p>";
	echo "<p>" . $machine['Boring_Holder'] . "</p>";
	echo "<p>" . $machine['Description'] . "</p></br>";
}
