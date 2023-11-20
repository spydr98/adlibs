<?php
$storypath = 'stories/';
$textcolor = '<a name="adlib" style="color:#ff0000;">';
$end = '</a>';

if (isset($_POST['noun1'])) {
	$noun1 = $textcolor.preg_replace('/[^\w]+/i', '', $_POST['noun1']).$end;
}
if (isset($_POST['noun2'])) {
	$noun2 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['noun2']).$end;
}
if (isset($_POST['noun3'])) {
	$noun3 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['noun3']).$end;
}
if (isset($_POST['noun4'])) {
	$noun4 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['noun4']).$end;
}
if (isset($_POST['verb1'])) {
	$verb1 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['verb1']).$end;
}
if (isset($_POST['verb2'])) {
	$verb2 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['verb2']).$end;
}
if (isset($_POST['verb3'])) {
	$verb3 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['verb3']).$end;
}
if (isset($_POST['verb4'])) {
	$verb4 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['verb4']).$end;
}
if (isset($_POST['adj1'])) {
	$adj1 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['adj1']).$end;
}
if (isset($_POST['adj2'])) {
	$adj2 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['adj2']).$end;
}
if (isset($_POST['adj3'])) {
	$adj3 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['adj3']).$end;
}
if (isset($_POST['adj4'])) {
	$adj4 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['adj4']).$end;
}
if (isset($_POST['adv1'])) {
	$adv1 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['adv1']).$end;
}
if (isset($_POST['adv2'])) {
	$adv2 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['adv2']).$end;
}
if (isset($_POST['adv3'])) {
	$adv3 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['adv3']).$end;
}
if (isset($_POST['adv4'])) {
	$adv4 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['adv4']).$end;
}
if (isset($_POST['color1'])) {
	$color1 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['color1']).$end;
}
if (isset($_POST['color2'])) {
	$color2 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['color2']).$end;
}
if (isset($_POST['color3'])) {
	$color3 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['color3']).$end;
}
if (isset($_POST['color4'])) {
	$color4 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['color4']).$end;
}
if (isset($_POST['room1'])) {
	$room1 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['room1']).$end;
}
if (isset($_POST['room2'])) {
	$room2 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['room2']).$end;
}
if (isset($_POST['room3'])) {
	$room3 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['room3']).$end;
}
if (isset($_POST['room4'])) {
	$room4 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['room4']).$end;
}
if (isset($_POST['person1'])) {
	$person1 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['person1']).$end;
}
if (isset($_POST['person2'])) {
	$person2 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['person2']).$end;
}
if (isset($_POST['person3'])) {
	$person3 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['person3']).$end;
}
if (isset($_POST['person4'])) {
	$person4 = $textcolor.preg_replace('/[^a-z]+/i', '', $_POST['person4']).$end;
}


print '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Ad Libs at </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Adlibs!" />
<meta name="keywords" content="Adlibs" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
</head>
<body style="background-image:url(\'images/snowflake.png\'); color:#000066; margin:50px;" >
<div style="background-color:#ccf; text-align:center; padding:20px;">
<h2>Welcome to &quot;<abbr title="Ad libitum is Latin for &quot;at [one\'s] pleasure&quot;; it is often shortened to &quot;ad lib&quot; or &quot;ad-lib&quot;">Ad Libs</abbr>&quot; at </h2>
<div style="text-align:left;">
';
if (isset($_POST['story'])) {
	$story = preg_replace('/[^\w.]+/i', '', $_POST['story']);
	include $storypath.$story;
}
print'
<p style="padding:50px;"><a href="/adlibs/" style="text-decoration:none;">Do another, do another</a>.</p>
</div>
</div>
</body>
</html>
';

?>
