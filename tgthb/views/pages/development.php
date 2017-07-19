<?php
$title = "Development & Developers | Tales of Gods and Treachery: The Hunt for Bálbrandr";
$metaDesc = "About the developers and technical development details of Tales of Gods and Treachery: The Hunt for Bálbrandr.";
$pageSpecificJSONLD = <<<'ENDBLOCK'
"author": [
{
  "@type": "Organization",
  "name": "JLT@GAMES",
  "address": [
	{
	  "@type": "PostalAddress",
	  "addressCountry": "FI"
	}
  ],
  "member": [
	{
	  "@type": "Person",
	  "givenName": "Jose",
	  "familyName": "Uusitalo",
	  "gender": "Male",
	  "nationality": "FI"
	},
	{
	  "@type": "Person",
	  "givenName": "Léa",
	  "familyName": "Subrenat",
	  "gender": "Female",
	  "nationality": "FI"
	},
	{
	  "@type": "Person",
	  "givenName": "Tuomas",
	  "familyName": "Kuutti",
	  "gender": "Male",
	  "nationality": "FI"
	}
  ]
}
],
"locationCreated": [
{
  "address": [
	{
	  "addressCountry": "FI"
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
						<li class="spacer"><a id="link-page-about" href="about.php" title="Read more about the game">About the Game</a></li>
						<li>Development & Developers</li>
					</ol>
				</nav>
			</div>
		</div>
	</header>
	<main id="main" tabindex="-1" class="row">

		<section aria-labelledby="developers" class="col-xs-12 content-box">
			<header>
				<h2 id="developers">About the Developers</h2>
			</header>
			
			<div class="row">
				<div class="col-xs-12 col-sm-8">
					<div class="cols2">
						<p class="longtext">Tales of Gods and Treachery: The Hunt for <span lang="is">Bálbrandr</span> was made by three first-year
							<a id="link-ict" href="https://en.wikipedia.org/wiki/Information_and_communications_technology" title="Read more about Information and communications technology at Wikipedia"><abbr title="Information and communications technology">ICT</abbr></a> students as a final project for their game development course. All three
							study at <a id="link-metropolia" href="http://www.metropolia.fi/en/" title="Go to the university's home page">Metropolia University
							of Applied Sciences</a>. The development took <time datetime="P32D"> four and a half weeks</time> and consisted of three parts:
							story design, database development and coding.</p>

						<p class="longtext">The initial website for the game created as part of the game development course but the structure of the site was
							later significantly updated in <time datetime="2017-04">April of 2017</time> for practice in web development as well as in
							implementing accessibility features according to the <a id="link-wcag" href="https://www.w3.org/TR/WCAG20/" title="Go to the Web Content Accessibility Guidelines 2.0 home page"><abbr title="Web Content Accessibility Guidelines">WCAG</abbr> 2.0</a>. However the contents of this website (barring minor rewording and correcting
							of typos) have been kept the same for posterity as the developers currently do not have any plans to continue working on the game.
							</p>
					</div>
				</div>

				<div class="col-xs-12 col-sm-4">
					<p id="authordesc">The developers and their roles.</p>
					<ul id="authors" aria-labelledby="authordesc">
						<li>Lead Programmer:<span class="dev-name" lang="fi">Jose Uusitalo</span></li>
						<li>Lead Writer:<span id="dev-lea" class="dev-name" lang="fi">Léa Subrenat (<a id="link-lea-portfolio" href="https://leasubrenat-portfolio.herokuapp.com/"
						title="Go to Léa's portfolio" aria-labelledby="link-lea-portfolio dev-lea">portfolio</a>)</span></li> <li>Lead <abbr title="Quality Assurance">QA</abbr>
						& Database Management:<span class="dev-name" lang="fi">Tuomas Kuutti</span></li>
					</ul>
				</div>
			</div>
		</section>
		<section aria-labelledby="tools" class="col-xs-12 content-box">
			<header><h2 id="tools">Tools Used</h2></header>
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<ul>
						<li><a id="link-python" href="https://www.python.org/download/releases/3.3.5/" title="Go to Python 3.3.5 download page" aria-labelledby="tools link-python">Python 3.3.5</a></li>
						<li><a id="link-mysql" href="https://dev.mysql.com/downloads/mysql/5.6.html" title="Go to MySQL Community Server 5.6 download page" aria-labelledby="tools link-mysql">MySQL Community Server 5.6.21</a></li>
						<li><a id="link-connector" href="https://pypi.python.org/pypi/mysql-connector-python/1.2.3" title="Go to Python MySQL Connector download page" aria-labelledby="tools link-connector">MySQL Connector/Python 1.2.3</a></li>
						<li><a id="link-gedit" href="https://wiki.gnome.org/Apps/Gedit" title="Go to gedit home page" aria-labelledby="tools link-gedit">gedit</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6">
					<ul>
						<li><a id="link-notepadpp" href="https://notepad-plus-plus.org/" title="Go to Notepad++ home page" aria-labelledby="tools link-notepadpp">Notepad++</a></li>
						<li><a id="link-eclipse" href="http://www.eclipse.org/downloads/packages/eclipse-ide-java-developers/lunasr1" title="Go to Eclipse Luna download page" aria-labelledby="tools link-eclipse">Eclipse (Luna version)</a></li>
						<li><a id="link-pydev" href="http://www.pydev.org/download.html" title="Go to PyDev home page" aria-labelledby="tools link-pydev">PyDev Eclipse Add-On</a></li>
						<li><a id="link-lchart" href="https://www.lucidchart.com" title="Go to Lucid Chart home page" aria-labelledby="tools link-lchart">Lucid Chart</a></li>
					</ul>
				</div>
			</div>
		</section>
		<section aria-labelledby="problems" class="col-xs-12 content-box">
			<header><h2 id="problems">Problems Encountered</h2></header>
			<section aria-labelledby="errors">
				<header><h3 id="errors">MySQL Connector/Python Query Outputs</h3></header>
				<p>The Python MySQL Connector returns data from queries (when the function <code>cursor.fetchall()</code> is used) as follows:</p>

				<div class="indent"><p class="description">Database rows are represented as tuples:</p>
					<pre>( data, )</pre>
					<p class="description">Each database column is an item in a tuple:</p>
					<pre>( col1, col2, col3 )</pre>
					<p class="description">When multiple rows are returned, each is an item in a list:</p>
					<pre>[ (row1col1, row1col2) , (row2col1, row2col2) ]</pre>
					<p class="description">Tuples in Python are immutable (I'm not entirely sure what that means) but I do know lists are mutable and I realized
						that they are quite easy to work with. Here's how to convert various MySQL query outputs to lists with Python's convenient list
						comprehension. Output from single column from n rows:</p>
					<pre>Output: [ (row1col1, ) , (row2col1, ), (row3col1, ) ]
Python: output = [item[0] for item in cursor.fetchall()]
Printed: [row1col1, row2col1, row3col1]</pre>
					<p class="description">Output from n columns from n rows:</p>
					<pre>Output: [ (row1col1, row1col2) , (row2col1, row2col2) ]
Python: output = [list(item) for item in cursor.fetchall()]
Printed: [[row1col1, row1col2] ,[row2col1, row2col2]]</pre>
				</div>
			</section>
			<section aria-labelledby="tsv">
				<header><h3 id="tsv">Converting Tab Separated Values to MySQL Inserts</h3></header>
				<p>Regular expressions in Notepad++ were obviously the way to go but I noticed that you couldn't store over 10 values in memory. The trick? Use
					the $ sign. (Apparently only works in newer Notepad++ versions.) Here's an excerpt from the regular expressions I used to convert the <abbr
						title="Tab Separated Value">TSV</abbr> files to Python code.</p>
				<pre>Find: ^(.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?)\n
Replace: cursor.execute\(\"INSERT INTO inventory VALUES \('\1','\2','\3','\4','\5','\6','\7','\8','\9','$10','$11','$12'\);"\)\n</pre>
				<p>Note the escaped brackets for regular expressions.</p></section>
			<section aria-labelledby="escaping">
				<header><h3 id="escaping">Python/MySQL Character Escaping</h3></header>
				<pre>"SyntaxError: invalid syntax"
"mysql.connector.errors.ProgrammingError: 1064 (42000)"
"SyntaxError: (unicode error) 'unicodeescape'"</pre>
				<p>Familiar? You need to escape your special characters. Not only for Python but for MySQL as well. At the same time.</p>
				<ul>
					<li>Text fields in MySQL accept the <code>"</code> character but not the <code>'</code> character. In Python the reverse is true. Using
						<code>"</code> in a MySQL insert causes a Python syntax error, simply escape it with <code>\</code> like such: <code>\"</code></li>
					<li>It is standard to use the <code>'</code> character to signify strings in MySQL (even though the <code>"</code> character works) so in
						order to use the <code>'</code> character in strings you need to escape it with another <code>'</code>. For example the word <code>"John's"</code>
						in a MySQL insert would be: <code>John''s</code></li>
					<li>To insert a <code>NULL</code> value into MySQL you need to use <code>\N</code>. (And not surround it with <code>'</code> characters!)
						This causes a syntax error in Python and needs to be escaped with <code>\</code> as follows: <code>\\N</code></li>
					<li>The characters <code>“</code> and <code>’</code> work as is in both MySQL and Python.</li>
				</ul>
			</section>
			<section aria-labelledby="databases">
				<header><h3 id="databases">Creating MySQL Databases from Python</h3></header>
				<p>Not without access to the root user you don't. My solution was to make the player manually log in as the MySQL root user, create the game's
					database and user with the included MySQL script then populate it with tables through Python.</p></section>
		</section>
		<section aria-labelledby="tips" class="col-xs-12 content-box">
			<header><h2 id="tips">Tips for New Game Developers</h2></header>
			<div class="row">
				<div class="col-xs-12 col-sm-4"><h3>What to do</h3>
					<ul>
						<li>Leave enough time for coding.</li>
						<li>Try to sleep enough.</li>
						<li>Drink coffee.</li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-5"><h3>What to avoid</h3>
					<ul>
						<li>Mac OS X</li>
						<li>Getting carried away with the scope of the game.</li>
						<li>Social life.</li>
						<li>Sleep.</li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-3 txt-center"><a id="link-pooka-img" href="http://thepookapicks.wordpress.com/"><img src="img/coffee2.gif"
				alt="Cartoon animation of a girl chugging an endless mug of coffee."></a>
					<div class="imgsource"><a id="link-pooka-source" href="http://thepookapicks.wordpress.com/">Source: The Pooka Picks</a></div>
				</div>
			</div>
		</section>
	</main>
<?php include("../components/footer.php"); ?>