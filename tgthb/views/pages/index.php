<?php
$title = "Tales of Gods and Treachery: The Hunt for Bálbrandr";
$metaDesc = "Tales of Gods and Treachery: The Hunt for Bálbrandr is an interactive fiction alternate history game set in 1950.";
$pageSpecificJSONLD = <<<ENDBLOCK
"version":"1.0",
"downloadUrl":"https://users.metropolia.fi/~joseu/tgthb/files/TGTHB_v1_0.zip",
"fileSize":"75KiB",
"storageRequirements":"254KiB"
ENDBLOCK;
include("../components/header.php");
?>
				<nav class="col-xs-12">
					<ol>
						<li class="spacer">Home</li>
						<li class="spacer"><a id="link-page-about" href="about.php">About the Game</a></li>
						<li><a id="link-page-development" href="development.php">Development & Developers</a></li>
					</ol>
				</nav>
			</div>
		</div>
	</header>

	<main id="main" tabindex="-1">
		<div class="row">
			<section id="download" aria-labelledby="heading-downloads" class="col-xs-12 content-box txt-center">
				<!-- Icelandic is used because Old Norse is not a valid language value in HTML and probably never will be plus modern Icelandic is sort of close in terms of pronunciation. -->
				<header><h2 id="heading-downloads">Download Tales of Gods and Treachery: The Hunt for <span lang="is">Bálbrandr</span></h2></header>

				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="row">
							<div class="col-xs-12">
								<p class="release-date">Released: <time datetime="2014-10-16">2014-10-16</time> <span class="spacer-padded"></span> Size: 75
									<abbr title="Kibibyte">KiB</abbr></p>
							</div>
							<div class="col-xs-12">
								<a id="link-download-game" href="files/TGTHB_v1_0.zip" class="download-button">Download Version 1.0</a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<div class="row">
							<div class="col-xs-12">
								<p class="release-date pad-xs-top">Released: <time datetime="2017-04-06">2017-04-06</time> <span class="spacer-padded"></span>
									Size: 1.8 <abbr title="Mebibyte">MiB</abbr></p>
							</div>
							<div class="col-xs-12">
								<a id="link-download-dev" href="files/TGTHB_DEV_v1_2.zip" class="download-button">Download Development Files</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12"><p id="source-code"><a id="link-github" href="https://github.com/JoseUusitalo/tgthb">View source code and development
								files on GitHub.com</a></p></div>
				</div>
			</section>
		</div>

		<div class="row row-eq-height">
			<div class="col-xs-12 col-sm-6 left-box nopad-xs">
				<section aria-labelledby="cover" class="content-box full-height">
					<header><h2 id="cover">Box Art</h2></header>
					<div id="cover-container">
						<a id="link-cover"
						   href="img/tgthb_cover.png"
						   title="The fictional box cover for the Tales of Gods and Treachery: The Hunt for Bálbrandr reminiscent of old Infocom interactive fiction game box covers. The box art depicts a desolate snowy landscape at night with a prominent fiery yellow-green meteorite landing towards the center on the foreground with a second similar meteorite visible farther in the background on the left side. Additionally a small settlement can be seen in the background on the right side."><img
								src="img/tgthb_cover_small.png"
								alt="The fictional box cover for the Tales of Gods and Treachery: The Hunt for Bálbrandr."
								aria-label="The fictional box cover for the Tales of Gods and Treachery: The Hunt for Bálbrandr reminiscent of old
							Infocom interactive fiction game box covers. The box art depicts a desolate snowy landscape at night with a prominent fiery
							yellow-green meteorite landing towards the center on the foreground with a second similar meteorite visible farther in the
							background on the left side. Additionally a small settlement can be seen in the background on the right side."></a>
					</div>
				</section>
			</div>

			<div class="col-xs-12 col-sm-6 right-box nopad-xs">
				<section aria-labelledby="plot" class="content-box full-height">
					<header><h2 id="plot">Plot</h2></header>

					<p class="longtext">Tales of Gods and Treachery: The Hunt for <span lang="is">Bálbrandr</span> is an interactive fiction alternate history
						game set in <time datetime="1950">1950</time>. The game takes place in a multitude of countries across four continents. Some major
						locations include Greenland, Bulgaria, and Tibet.</p>

					<p class="longtext">You are a Spanish archeology student in the museum of <span lang="es">Bellas Artes</span> when you discover a message
						inside an ancient Bulgarian artifact. The message is written by an old Bulgarian historian called
						<span lang="bg">Zlatin Panayotov</span>, who is an expert on vikings. The letter describes mythological treasures, and <span lang="bg">Zlatin</span>
						claims to have one of them. You are intrigued, and with the help of your museum director, you launch on an exciting adventure to find
						the treasures, encountering numerous dangers and challenges on the way.</p>

					<p class="longtext">In order to advance in the game, you will have to research myths, listen carefully to locals, and beware of monsters.
						With two unique endings and six variants of the other, every decision matters so choose your actions wisely.</p></section>
			</div>
		</div>
		<div class="row">
			<section aria-labelledby="setting" class="col-xs-12 content-box">
				<header><h2 id="setting">Setting</h2></header>
				<div class="cols2">
					<p class="longtext">It is <time datetime="1950-10">October of 1950</time>. NATO has just been created, the first signs of apartheid can be
						seen in South Africa, and the Soviets were the first to successfully explore the North Pole. The political landscape of Europe is slowly
						calming down after the ending of the second world war just five years ago. The European economy is already rapidly recovering after the
						stress of war. Despite Allied forces dismantling almost the entire coal and steel industry of West Germany, the country is on the path
						to becoming the strongest economic power in Europe. In just a few years Queen Elizabeth II rises to power, Allied occupation of West
						Germany ends, and Mount Everest will be conquered. The world is listening to the tunes of Frank Sinatra, Nat King Cole, and Ella
						Fitzgerald. An exciting new genre called rock ’n' roll is slowly evolving and in <time datetime="1956">1956</time> America will be taken
						by a storm by the lewd moves of Elvis Presley.</p>

					<p class="longtext">Walt Disney's animated feature Cinderella becomes the highest grossing film in the US and actors such as Audrey Hepburn,
						Sean Connery, and Clint Eastwood are wildly popular on the silver screens at home although most of the world won't have color television
						for decades to come. The invention of the transistor by three American physicists in <time datetime="1947">1947</time> kick-started the
						development of modern electronics. The world is still struggling with polio but there is a spark of hope as a Polish virologist has just
						developed the first functional vaccine against the disease.</p>

					<p class="longtext">The monarchy of the Kingdom of Spain's is no more than a facade orchestrated by the dictator <span lang="es">Francisco Franco</span>
						who keeps the nation under a tight authoritarian military dictatorship. Established in <time datetime="1946">1946</time> the People's
						Republic of Bulgaria is a communist republic in close relations with the Soviet Union. Tibet is under the control of the Republic of
						China (modern Taiwan) and is being invaded by the People's Republic of China with <span lang="zh">Mao Zedong</span> as the head of
						government. Greenland is a
						colony of the Kingdom of Denmark and wouldn't become a sovereign state of Denmark for another three years. Still in the middle of a half
						a century long political instability where the government keeps switching from democracy to militarism, the Republic of Peru's the most
						recent president of <span lang="es">Manuel A. Odría</span> was officially elected in <time datetime="1950-06">June</time> although he
						originally gained power in <time datetime="1948">1948</time> via a coup d'état.</p>
				</div>
			</section>
		</div>
	</main>
<?php include("../components/footer.php"); ?>