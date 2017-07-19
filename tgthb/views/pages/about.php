<?php
$title = "About the Game | Tales of Gods and Treachery: The Hunt for Bálbrandr";
$metaDesc = "Information about the story and lore of Tales of Gods and Treachery: The Hunt for Bálbrandr.";
$pageSpecificJSONLD = <<<'ENDBLOCK'
"gameItem":[
{
  "@type":"Thing",
  "name":"Bálbrandr",
  "alternateName":[
	"Balbrandr",
	"Balbrand"
  ],
  "url":"https://users.metropolia.fi/~joseu/tgthb/about",
  "description":"The mythical sword of Hveðrungr. It grants immortality to the one who possesses it. In the hands of Hveðrungr the blade is said to be engulfed in flames."
},
{
  "@type":"Thing",
  "name":"Fjǫrsteinn",
  "alternateName":[
	"Fjörsteinn",
	"Fjorsteinn"
  ],
  "url":"https://users.metropolia.fi/~joseu/tgthb/about",
  "description":"Gem that grants immortality if placed within the hilt of Guðhjǫrr. On its own the gem merely makes the wearer have extraordinary health and protection from all diseases."
},
{
  "@type":"Thing",
  "name":"Guðhjǫrr",
  "alternateName":[
	"Guthjör",
	"Guthjor"
  ],
  "url":"https://users.metropolia.fi/~joseu/tgthb/about",
  "description":"Part of Hveðrungr's mythical sword. It has magical powers which give the person who possesses it invincibility."
}
],
"character":[
{
  "givenName":"Andrea",
  "familyName":"Álvarez",
  "gender":"Male",
  "nationality": "ES"
},
{
  "givenName":"Zlatin",
  "familyName":"Panayotov",
  "gender":"Male",
  "nationality": "ES"
},
{
  "givenName":"Gorka",
  "familyName":"Ibaiguren",
  "gender":"Male",
  "nationality": "ES"
},
{
  "givenName":"Jens",
  "gender":"Male",
  "nationality": "GL"
}
],
"gameLocation":[
{
  "@type":"Place",
  "name":"World",
  "hasMap":"http://users-metro/joseu/tgthb/img/tgthb_world_map_full_no_spoilers.png"
},
{
  "@type":"Museum",
  "name":"Bilbao Fine Arts Museum",
  "address":[
	{
	  "@type":"PostalAddress",
	  "addressCountry":"ES"
	}
  ]
}
]
ENDBLOCK;
include("../components/header.php");
?>
				<nav class="col-xs-12">
					<ol>
						<li class="spacer"><a id="link-page-index" href="index.php" title="Go to the home page">Home</a></li>
						<li class="spacer">About the Game</li>
						<li><a id="link-page-development" href="development.php" title="Read about the game's technical implementation details and the developers">Development & Developers</a></li>
					</ol>
				</nav>
			</div>
		</div>
	</header>

	<main id="main" tabindex="-1">
		<div class="row">
			<div class="col-xs-12 content-box txt-center">
				<section aria-labelledby="warning">
					<header><h2 id="warning">Warning!</h2></header>
						<p>This page contains major spoilers for Tales of Gods and Treachery: The Hunt for Bálbrandr! Except for one the maps in the section
						below.</p>
				</section>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 content-box">
				<section aria-labelledby="maps" class="txt-center">
					<header><h2 id="maps">Maps</h2></header>
					<div class="row">
						<div class="col-xs-12">
							<figure><a id="link-map" href="img/tgthb_world_map_no_spoilers.png"><img src="img/tgthb_world_map_no_spoilers_thumb.png" alt="A map of the game world depicting its locations without any spoilers."></a>
								<figcaption>A world map without spoilers. Only displays locations that are available soon after starting the game.</figcaption>
							</figure>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12"><a id="link-map-spoilers" href="img/tgthb_world_map_with_spoilers.png" title="View an image of the game world that contains story spoilers">Download World Map with Spoilers</a>
						</div>
					</div>
				</section>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 content-box">
				<section aria-labelledby="viking-myth">
					<header><h2 id="viking-myth">Viking Myth</h2></header>
					<div class="cols3">
						<p class="longtext">Erik the Red discovered a sword in the crater of a meteorite near <span lang="non">Maniitsoq</span>, Greenland, circa
							<time datetime="1000">1000</time>. According to the folk story, the sword was <span lang="non">Bálbrandr</span>, Loki's weapon that
							fell all the way to Earth during his fight with Thor. The god of thunder won and bound Loki, so the latter could not retrieve his
							sword.</p>

						<p class="longtext"><span lang="non">Bálbrandr</span> consisted of two parts: a metal blade that made its beholder invincible and a gem
							that prolonged life. When the amulet was placed in the sword's hilt, the owner became immortal. The sword and gem separated upon the
							weapon's fall to Earth. The gem was never seen again, and the sword became known as <span lang="non">Gu&#240;hj&#491;rr</span>.</p>

						<p class="longtext"><span lang="non">Gu&#240;hj&#491;rr</span> was passed onto Erik's son, <span lang="non">Leifr Eiríksson</span>, the
							first European to set foot on continental North America. <span lang="non">Leifr</span> is believed to have died between the years
							<time datetime="1019">1019</time> and <time datetime="1025">1025</time> - the conditions of his death are very unclear. During this
							time, the precious sword was lost and it disappeared from Norse mythology.</p>
					</div>
				</section>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 content-box">
				<section aria-labelledby="inca-myth">
					<header><h2 id="inca-myth">Inca Myth</h2></header>

					<div class="cols3">
						<!-- No language tags for any of the Inca languages, Spanish will have to do. -->
						<p class="longtext">Inca oral history mentions three caves as the origin of life: <span lang="es">Tambo Tocco, Maras Tocco</span> and
							<span lang="es">Sutic Tocco</span>. Out of <span lang="es">Tambo Tocco</span> stepped four brothers and sisters: <span lang="es">Ayar Manco, Ayar Cachi, Ayar Auca, Ayar Uchu, Mama Ocllo, Mama Raua, Mama Huaca,</span>
							and <span lang="es">Mama Cora</span>. They were to be the ancestors of all the clans of the Inca people.</p>

						<p class="longtext"><span lang="es">Ayar Manco</span> carried a magic staff made of the finest gold that would indicate the ideal place
							for Incas to live. After long travels, they reached Cusco where the staff sank into the ground. The people already living in Cusco
							fought hard to keep their land, but <span lang="es">Mama Huaca</span> was a fighter without a rival. When the people of Cusco
							attacked, she threw her bolas at a soldier killing him instantly. The other inhabitants, terrified, ran away.</p>

						<p class="longtext">Finally the Incas settled in Cusco. After that, <span lang="es">Ayar Manco</span> became known as <span lang="es">Manco Cápac</span>,
							the founder of the Inca. It is said that he and his sisters built the first Inca homes in the valley with their own hands. When it
							was time for him to pass away, <span lang="es">Manco Cápac</span> instead turned to stone and a shrine was built around him. His
							son, <span lang="es">Sinchi Roca</span>, became the second emperor of the Inca.</p>

						<p class="longtext"><span lang="es">Sinchi Roca</span> sacrificed humans on the steps of the shrine to honor his father. He used a
							special sword for this: it was called <span lang="es">Nina Khillaychuki</span> ("Fire Sword") due to its orange hue. When swung, it
							seemed as though the metal had just been heated in brazing coals.</p>
					</div>
				</section>
			</div>
		</div>

		<div class="row row-eq-height">
			<div class="col-xs-12 col-sm-6 left-box nopad-xs">
				<section aria-labelledby="items" class="content-box full-height">
					<header><h2 id="items">Central Items</h2></header>
					<h3 lang="non">Bálbrandr</h3>

					<p>The mythical sword of <span lang="non">Hve&#240;rungr</span>. It grants immortality to the one who possesses it. In the hands of <span
							lang="non">Hve&#240;rungr</span> the blade is said to be engulfed in flames.</p>

					<h3 lang="non">Fj&#491;rsteinn</h3>

					<p>Gem that grants immortality if placed within the hilt of <span lang="non">Gu&#240;hj&#491;rr</span>. On its own the gem merely makes the
						wearer have extraordinary health and protection from all diseases.</p>

					<h3 lang="non">Gu&#240;hj&#491;rr</h3>

					<p>Part of <span lang="non">Hve&#240;rungr</span>'s mythical sword. It has magical powers which give the person who possesses it
						invincibility.</p>
				</section>
			</div>

			<div class="col-xs-12 col-sm-6 right-box nopad-xs">
				<section aria-labelledby="characters" class="content-box full-height">
					<header><h2 id="characters">Main Characters</h2></header>
					<h3 lang="es">Andrea Álvarez</h3>

					<p>The player character is a young archeology student currently interning at the <span lang="es">Museo de las Bellas Artes</span>. </p>

					<h3 lang="es">Gorka Ibaiguren</h3>

					<p>Director of the <span lang="es">Museo de las Bellas Artes</span> in Spain.</p>

					<h3 lang="bg">Zlatin Panayotov</h3>

					<p>A 142 year old Bulgarian historian and adventurer living in a secluded monastery.</p>

					<h3 lang="non">Jens</h3>

					<p>A private collector of Viking artifacts living in <span lang="non">Jakobshavn</span>, Greenland.</p>
				</section>
			</div>
		</div>
	</main>
<?php include("../components/footer.php"); ?>