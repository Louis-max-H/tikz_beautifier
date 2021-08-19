<!DOCTYPE html>
<html>
    <?php include("header.php"); ?>

    <body>
		<h1>Tikz_beautifier</h1>
		<p>This project is a beautifier for <a href="https://en.wikipedia.org/wiki/PGF/TikZ">Tikz</a> code.
		Tikz code is a derivate of <a href="https://en.wikipedia.org/wiki/LaTeX">Latex</a>, it's used for geometry.<br />
		You can generate Tikz on <a href="https://www.geogebra.org/classic">Geogebra</a> if you go to the export options.<br />
		<img src="geogebra_to_tikz.png" alt="Geogebra to tikz" width="600"/>
	</p>
		<h1>Features :</h1>
		<ul>
			<li>Auto name colors</li>
			<li>Round float</li>
			<li>Sort drawn command line
			<ul>
				<li>by category </li>
				<li>by position </li>
			</ul>
		</ul>

		<p>Lightweight, only html, css and php !</p>

		<h1>How to use this beautifier :</h1>
		<h3>Online version :</h3>

		<p>The online version has all the feature of off-line beautifer, it's only limited to 4000 characters.</p>
		<h3>Web version offline :</h3>
		<p>If you want to install this site locally on your computer you can do :</p>
		<p>On windows :</p>
		<ul>
			<li>Install Linux (Ubuntu) : Half a day and you have peace of mind for life</li>
			<li>Run it thanks python : 20 minutes you can automize the converter</li>
			<li>Run it on the Linux terminal of Windows : 2h, not tested, only Windows 10</li>
			<li>Run it on Windows terminal : not tested</li>
		</ul>
		<br />
		<p>On Linux :</p>
		<pre>
			<code class="language-sh">
sudo apt install php git -y
git clone https://github.com/edelrine/tikz_beautifier.git
cd tikz_beautifier
php -S localhost:8000
			</code>
		</pre>
		<p>Now, in your web browser, you can go on <a href="http://localhost:8000/converter.php">http://localhost:8000/converter.php</a></p>

		<h3>Command line version :</h3>
		<p>You can use the command-line version if you want to automize this program:</p>
		<p>On linux :</p>
		<pre>
			<code class="language-sh">
sudo apt install git -y
git clone https://github.com/edelrine/tikz_beautifier.git
cd tikz_beautifier
cd python
python3 main.py example_tikz/tikz_hug
			</code>
		</pre>

		<p>Of course, you can replace example_tikz/tikz_hug by your file to convert.</p>
		<h5>Command-line options :</h5>
		<pre><code class="language-sh">
positional arguments:<br />
  path                  the path of the file to convert<br />
<br />
optional arguments:<br />
  -h, --help            show this help message and exit<br />
  -output OUTPUT, -o OUTPUT<br />
                        file to save, created if dont exist (default: None)<br />
<br />
Formatting:<br />
  -tab TAB              the tabulation you want (default: )<br />
  -tikz-only, -to       remove Latex default importation (default: False)<br />
  -no-strip, -ns        keep extra spaces (default: False)<br />
<br />
Clean up:<br />
  -round ROUND          round to ndigits precision after the decimal point, set -1 if you didn't want to round<br />
                        number (default: 3)<br />
  -no-color             dont gives a name to colors (default: False)<br />
<br />
Commande line settings:<br />
  -v                    level of debugging, -v to -vv (no output, infos, debug) (default: 0)<br />
  -no-save              dont saves in the same location as the source (default: False)<br />
  -hide-source, -hs     show source from input (default: False)<br />
  -hide-output, -ho     dont show the result in the terminal (default: False)<br />
<br />
Sorting:<br />
  -no-sort              dont sort \drawn (default: False)<br />
  -bytype               separates blocks by category (circle, line, rectangle, etc...) (default: False)<br />
  -ordinate-first, -of  sort the blocks by ordinate then by abscissa (default: False)<br />
  -decreasing-abscissa, -da<br />
                        sorted abscissa in decreasing order (default: False)<br />
  -decreasing-ordinate, -do<br />
                        sorted ordinate in decreasing order (default: False)<br />
<br />
Clipping (experimental):<br />
  -no-clip              dont set automatic clip (default: False)<br />
  -clip-fix CLIP_FIX    specifies a fixed margin (default: 1)<br />
  -clip-dyn CLIP_DYN    specifies a dynamic margin, in percent (default: 0.1)<br />
<br />
Enjoy !
		</code></pre>

		<h2>License</h2>
		<p>GPL-3.0 License </p>


    </body>

    <?php include("footer.php"); ?>
</html>


