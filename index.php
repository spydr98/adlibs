<?php
$adj = file ("adjectives.txt");
$adv = file ("adverbs.txt");
$colors = file ("colors.txt");
$nouns = file ("nouns.txt");
$persons = file ("persons.txt");
$rooms = file ("rooms.txt");
$verbs = file ("verbs.txt");

$adjline = $adj[rand(0,count($adj)-1)];
$advline = $adv[rand(0,count($adv)-1)];
$colorline = $colors[rand(0,count($colors)-1)];
$nounline = $nouns[rand(0,count($nouns)-1)];
$personline = $persons[rand(0,count($persons)-1)];
$roomline = $rooms[rand(0,count($rooms)-1)];
$verbline = $verbs[rand(0,count($verbs)-1)];

print '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Ad Libs at The Tethered</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
</head>
<body style="background-image:url(\'/images/snowflake.png\'); color:#000066; margin:50px;" >
<div style="background-color:#ccf; padding:20px;">
<h2 style="text-align:center;">Welcome to &quot;<abbr title="Ad libitum is Latin for &quot;at [one\'s] pleasure&quot;; it is often shortened to &quot;ad lib&quot; or &quot;ad-lib&quot;">Ad Libs</abbr>&quot; at The Tethered</h2>
';
print'
<p>Not all of these entries will used on every &quot;ad lib&quot;.  We have filled in the entries but you can replace any word you like.</p>
';
print'
<form method="post" action="adlib.php">
	<ul style="list-style-type:none; padding:10px;">
		<li style="padding:10px;">
			A noun is a person, place, or thing.<br />
			<label>First noun:</label>
			<input name="noun1" type="text" maxlength="50" value="'.$nouns[rand(0,count($nouns)-1)].'" /><br />
			<label>Second noun:</label>
			<input name="noun2" type="text" maxlength="50" value="'.$nouns[rand(0,count($nouns)-1)].'" /><br />
			<label>Third noun:</label>
			<input name="noun3" type="text" maxlength="50" value="'.$nouns[rand(0,count($nouns)-1)].'" /><br />
			<label>Fourth noun:</label>
			<input name="noun4" type="text" maxlength="50" value="'.$nouns[rand(0,count($nouns)-1)].'" /><br />';
print'
		</li>
		<li style="padding:10px;">
			A verb is a word such as `sing\', `feel\', or `die\' which is used with a subject to say what someone or something does or what happens to them.<br />
			<label>First verb:</label>
			<input name="verb1" type="text" maxlength="50" value="'.$verbs[rand(0,count($verbs)-1)].'" /><br />
			<label>Second verb:</label>
			<input name="verb2" type="text" maxlength="50" value="'.$verbs[rand(0,count($verbs)-1)].'" /><br />
			<label>Third verb:</label>
			<input name="verb3" type="text" maxlength="50" value="'.$verbs[rand(0,count($verbs)-1)].'" /><br />
			<label>Fourth verb:</label>
			<input name="verb4" type="text" maxlength="50" value="'.$verbs[rand(0,count($verbs)-1)].'" /><br />';
print'
		</li>
		<li style="padding:10px;">
			An adjective is a word such as `big\', `dead\', or `financial\' that describes a person or thing, or gives extra information about them.<br />
			<label>First adjective:</label>
			<input name="adj1" type="text" maxlength="50" value="'.$adj[rand(0,count($adj)-1)].'" /><br />
			<label>Second adjective:</label>
			<input name="adj2" type="text" maxlength="50" value="'.$adj[rand(0,count($adj)-1)].'" /><br />
			<label>Third adjective:</label>
			<input name="adj3" type="text" maxlength="50" value="'.$adj[rand(0,count($adj)-1)].'" /><br />
			<label>Fourth adjective:</label>
			<input name="adj4" type="text" maxlength="50" value="'.$adj[rand(0,count($adj)-1)].'" /><br />';
print'
		</li>
		<li style="padding:10px;">
			An adverb is a word such as `slowly\', `now\', `very\', `politically\', or `fortunately\' which adds information about the action, event, or situation mentioned in a clause.<br />
			<label>First adverb:</label>
			<input name="adv1" type="text" maxlength="50" value="'.$adv[rand(0,count($adv)-1)].'" /><br />
			<label>Second adverb:</label>
			<input name="adv2" type="text" maxlength="50" value="'.$adv[rand(0,count($adv)-1)].'" /><br />
			<label>Third adverb:</label>
			<input name="adv3" type="text" maxlength="50" value="'.$adv[rand(0,count($adv)-1)].'" /><br />
			<label>Fourth adverb:</label>
			<input name="adv4" type="text" maxlength="50" value="'.$adv[rand(0,count($adv)-1)].'" /><br />';
print'
		</li>
		<li style="padding:10px;">
			Colors (red, blue, chartreuse, fuchsia, etc..)<br />
			<label>First color:</label>
			<input name="color1" type="text" maxlength="50" value="'.$colors[rand(0,count($colors)-1)].'" /><br />
			<label>Second color:</label>
			<input name="color2" type="text" maxlength="50" value="'.$colors[rand(0,count($colors)-1)].'" /><br />
			<label>Third color:</label>
			<input name="color3" type="text" maxlength="50" value="'.$colors[rand(0,count($colors)-1)].'" /><br />
			<label>Fourth color:</label>
			<input name="color4" type="text" maxlength="50" value="'.$colors[rand(0,count($colors)-1)].'" /><br />';
print'
		</li>
		<li style="padding:10px;">
			Rooms (bedroom, kitchen, dinning, library, etc..)<br />
			<label>First room:</label>
			<input name="room1" type="text" maxlength="50" value="'.$rooms[rand(0,count($rooms)-1)].'" /><br />
			<label>Second room:</label>
			<input name="room2" type="text" maxlength="50" value="'.$rooms[rand(0,count($rooms)-1)].'" /><br />
			<label>Third room:</label>
			<input name="room3" type="text" maxlength="50" value="'.$rooms[rand(0,count($rooms)-1)].'" /><br />
			<label>Fourth room:</label>
			<input name="room4" type="text" maxlength="50" value="'.$rooms[rand(0,count($rooms)-1)].'" /><br />';
print'
		</li>
		<li style="padding:10px;">
			Person (mom, brother, grandma, guy, lady, dude, etc..)<br />
			<label>First person:</label>
			<input name="person1" type="text" maxlength="50" value="'.$persons[rand(0,count($persons)-1)].'" /><br />
			<label>Second person:</label>
			<input name="person2" type="text" maxlength="50" value="'.$persons[rand(0,count($persons)-1)].'" /><br />
			<label>Third person:</label>
			<input name="person3" type="text" maxlength="50" value="'.$persons[rand(0,count($persons)-1)].'" /><br />
			<label>Fourth person:</label>
			<input name="person4" type="text" maxlength="50" value="'.$persons[rand(0,count($persons)-1)].'" /><br />';
print'
		</li>
		<li style="padding:10px;">
			Select a story to use.<br />
			<select name="story">'."\n";

$storypath = '/var/www/html/adlibs/stories/';

if ($fh = opendir ($storypath)) {
	$num = 0;
	while (false !== ($file = readdir($fh))) {
		if ($file != "." && $file != "..") {
			$num++;
			print'<option value="'.$file.'">'.ucwords(str_replace("_", " ", rtrim($file, ".php"))).'</option>'."\n";
		}
	}
	closedir($fh);
}
print'			</select><br />
			There are currently '.$num.' stories to choose from.
			</li>
		<li style="padding:10px;"><input type="submit" name="submit" value="Go!" /></li>
	</ul>
</form>
';

print'</div>
</body>
</html>
';

?>
