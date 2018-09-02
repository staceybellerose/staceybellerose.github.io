<?php

define('PHRASE_LENGTH', 6);
define('PHRASE_COUNT', 20);

$data = file_get_contents('6of12.txt');
$words = explode("\n", $data);
unset($data); // free up memory

$wordCount = count($words);

$phrases = array();

for ( $i = 0; $i < PHRASE_COUNT; $i++ ) {
	$phrase = '';
	for ( $j = 0; $j < PHRASE_LENGTH; $j++ ) {
		$random = mt_rand( 0, $wordCount );
		$word = $words[ $random ];
		$phrase .= $word . " ";
	}
	$phrases[] = $phrase;
}

?>
<!doctype html>
<html lang="en">
<head>
	<title>Random Phrases</title>
</head>
<body>
	<h1>a few random phrases</h1>
	<h2>from a modified <a href="http://wordlist.sourceforge.net/12dicts-readme.html">6of12 list</a> containing 28,000+ words</h2>
	<p>
<?php
foreach ( $phrases as $phrase ) {
	echo $phrase . "<br />\n";
}
?>
	</p>
</body>
</html>