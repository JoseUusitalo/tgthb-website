<!DOCTYPE html>
<html lang="en" dir="ltr" prefix="og: http://ogp.me/ns#">
<head>
	<title><?php echo $title; ?></title>
	<meta charset="UTF-8">
	<meta name="description" content="<?php echo $metaDesc; ?>">
	<meta name="keywords" content="video game, interactive fiction, open source, history">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" id="viewport-meta">

	<meta property="og:title" content="Tales of Gods and Treachery: The Hunt for Bálbrandr"/>
	<meta property="og:type" content="website"/>
	<meta property="og:locale" content="en_US"/>

	<meta property="og:image" content="http://users.metropolia.fi/~joseu/tgthb/img/tgthb_logo.png"/>
	<meta property="og:image:secure_url" content="https://users.metropolia.fi/~joseu/tgthb/img/tgthb_logo.png"/>
	<meta property="og:image:type" content="image/png"/>
	<meta property="og:image:width" content="1042"/>
	<meta property="og:image:height" content="193"/>

	<script type="application/ld+json">
		{
		  "@context": "http://schema.org",
		  "@type": "VideoGame",
		  "applicationCategory": "Game",
		  "applicationSubCategory": "Video Game",
		  "datePublished": "2014-10-16",
		  "inLanguage": "en-US",
		  "isAccessibleForFree": "True",
		  "name": "Tales of Gods and Treachery: The Hunt for Bálbrandr",
		  "alternateName":"Tales of Gods and Treachery: The Hunt for Balbrand",
		  "description": "Tales of Gods and Treachery: The Hunt for Bálbrandr is an interactive fiction alternate history game set in 1950.",
		  "url": "https://users.metropolia.fi/~joseu/tgthb/",
		  "sameAs": "https://users.metropolia.fi/~joseu/tgthb/",
		  "image": "https://users.metropolia.fi/~joseu/tgthb/img/tgthb_cover.png",
		  "keywords": "video game,text adventure,interactive fiction,open source,history,low fantasy",
		  "license": "https://www.mozilla.org/en-US/MPL/2.0/",
		  "playMode": "SinglePlayer",
		  "numberOfPlayers": [
			{
			  "maxValue": "1"
			}
		  ],
		  "genre": [
			"Interactive Fiction",
			"Text Adventure"
		  ],
		  "operatingSystem": [
			"Windows",
			"Mac OS X",
			"Linux",
			"Unix"
		  ],
		  "accessMode": [
		    "textual",
		    "visual"
		  ],
		  "accessModeSufficient": "textual",
		  "accessibilityControl": "fullKeyboardControl",
		  "accessibilitySummary": "Manual creation of a MySQL database according to included instructions is required for play. All game interaction requires writing English commands. Includes large amounts of English text."<?php
		if ($pageSpecificJSONLD !== '')
		{
			echo ",\n";
			echo $pageSpecificJSONLD;
			echo "\n";
		}
		?>
	}
	</script>

	<script>
		function resizeText(multiplier) {
			if (document.body.style.fontSize === "") {
				document.body.style.fontSize = "1.0em";
			}

			var size = (parseFloat(document.body.style.fontSize) + (multiplier * 0.25) || 0.25);
			document.body.style.fontSize = (size > 4.0 ? 4.0 : size) + "em";

			if (size >= 2.0) {
				document.body.style.maxWidth = "100%";
				// TODO: Make browser use Bootstrap xs styles automatically. (Changing viewport size does nothing.)
			} else {
				document.body.style.maxWidth = "";
			}

			if (size >= 3.0) {
				var sheet = document.createElement('style');
				sheet.innerHTML = "p {text-align: left !important;}";
				sheet.id = "dynamic-stylesheet";
				document.body.appendChild(sheet);
			} else {
				var dsheet = document.getElementById('dynamic-stylesheet');
				if (dsheet) {
					dsheet.parentNode.removeChild(dsheet);
				}
			}
		}
	</script>

	<link rel="stylesheet" type="text/css" media="screen" href="styles/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" media="screen" href="styles/screen.css"/>
</head>