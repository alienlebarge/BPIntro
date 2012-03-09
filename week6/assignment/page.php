<?php
/*
* This script has been written by Alex Pot of SmartScripts (www.smartscripts.nl)
* The detection of $_GET['m'] and $_COOKIE['m'] is an adapted version of a script by Phil Archer (http://philarcher.org/diary/2011/mobilecontentandstyle/)
* The lightweight class for detection of mobile browsers can be found here: http://code.google.com/p/php-mobile-detect/
* You are free to adapt and use this script for your own projects, on the one condition that you keep these credits intact
*/

//if your files are in the rootfolder of your site, $subdir has no value written between the quotation marks, like this ''; else you name the subdir, like so: '/namesubdir' (note it has a slash at the start, BUT NOT AT THE END!). This sample suggests to name the folder 'switch', this is the value used below. This is correct as long as the folder is placed in the root and not in a subfolder; else the value should be '/namesubfolder/switch'.
$subdir = '/BPIntro/week6/assignment'; //change this according to the name of the folder your files are in (see also instruction above)
$cookie_lifetime = 60*60*24*30; //you may change the numbers: sec x min x hrs x days = how long (in seconds) must the cookie with the user preference persist?
$maxage = 60; //this is the value (in seconds) for the max-age header that the switcher-script sends. This time will determine how long the version op the page in your browser cache will stay unrefreshed. Note: changes in the user preference for the lay-out will only become definitive after this number of seconds.

//==================== DON'T CHANGE PHP VARIABLES BELOW THIS LINE ==========================

$root = $_SERVER['DOCUMENT_ROOT'] . $subdir;
$file = __FILE__;

//include required by the mobile-desktop switch script:
include($root . '/inc/switcher.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title><?php echoSwitch('Desktop Page', 'Mobile Page'); ?></title>
    <link rel="canonical" href="<?php echo $full_path; ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echoSwitch('screen_styles', 'mobile_styles'); ?>.css" />
    <?php
    // add script if browser older than IE9
    echoSwitch('<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script><![endif]-->','');
    ?>
</head>
<body>
<p id="mob_switch"><a href="<?php echo $current_file['basename']; ?>?m=<?php echoSwitch('1', '0'); ?>"><?php echoSwitch('Mobile View', 'Desktop View'); ?></a> (changes will become definitive after a delay of <?php echo $maxage; ?> seconds or a reload of the page)</p>

<?php
echoSwitch(
<<<DESKTOP
<h1>C&eacute;dric Aellen's profil</h1>

<figure>
    <img src="assets/img/portrait.jpg" width="600" height="435" alt="A portrait of Cedric"/>
    <figcaption>This portrait of C&eacute;dric was taken in Qu&eacute;bec</figcaption>
</figure>

<h2>Experiences</h2>

<h3>Typo3 Administrator</h3>

<dl>
    <dt>Company</dt>
    <dd>&Etat de Vaud</dd>
    <dt>Date</dt>
    <dd>from January 2009 to present</dd>
    <dt>Jop description</dt>
    <dd>Project managment, Technological monitoring, Administration of websites, Development of extension.</dd>
</dl>

<h3>Technical Manager</h3>

<dl>
    <dt>Company</dt>
    <dd>Pixit SA</dd>
    <dt>Date</dt>
    <dd>from february 2008 to december 2008</dd>
    <dt>Jop description</dt>
    <dd>Project managment, Technological monitoring, Administration of websites, Development of extension, Head of IT
        assets.
    </dd>
</dl>

<h3>Project Manager</h3>

<dl>
    <dt>Company</dt>
    <dd>Paul Vaucher SA</dd>
    <dt>Date</dt>
    <dd>from june 2004 to january 2008</dd>
    <dt>Jop description</dt>
    <dd>Project managment for home automation</dd>
</dl>

<h2>Studies</h2>

<dl>
    <dt>School</dt>
    <dd>Universit&eacute; de Savoie</dd>
    <dt>Diplom</dt>
    <dd>Additional formation at T3FRUNI10, Typo3</dd>
    <dt>Date</dt>
    <dd>2010</dd>
</dl>

<dl>
    <dt>School</dt>
    <dd>Universit&eacute; de Savoie</dd>
    <dt>Diplom</dt>
    <dd>Additional formation at T3FRUNI10, Typo3</dd>
    <dt>Date</dt>
    <dd>2009</dd>
</dl>

<dl>
    <dt>School</dt>
    <dd>HEIG-VD - School of Business and Engineering, Vaud</dd>
    <dt>Diplom</dt>
    <dd>Bachelor, Interactive media</dd>
    <dt>Date</dt>
    <dd>2000-2004</dd>
</dl>

<dl>
    <dt>School</dt>
    <dd>Hochschule für Technik, Wirtschaft und Kultur Leipzig (FH)</dd>
    <dt>Diplom</dt>
    <dd>Erasmus, Medientechnick</dd>
    <dt>Date</dt>
    <dd>2002</dd>
</dl>

<h2>Language</h2>
<dl>
    <dt>French</dt>
    <dd>Native or bilingual proficiency</dd>
    <dt>English</dt>
    <dd>Professional working proficiency</dd>
    <dt>German</dt>
    <dd>Professional working proficiency</dd>
</dl>

<h2>Contact</h2>

<div>
    <adress class="vcard">
        <span class="fn">C&eacute;dric Aellen</span>
        <a class="url large button" href="http://www.alienlebarge.ch/" title="Go to alienlebarge.ch">visit my blog</a>
        <span class="street-address">Chemin des Fleurs de Lys 38</span>
        <span class="region">Canton de Vaud</span>
        <span class="postal-code">1350</span> <span class="locality">Orbe</span>
        <span class="country-name">Switzerland</span>
        <span class="tel">+ 41 (0) 24 123 45 67</span>
        <a class="email large button" href="mailto:cedric.aellen@alienlebarge.ch">send me an email</a>
    </adress>
</div>

DESKTOP

,
<<<MOBILE
<h1>C&eacute;dric Aellen's profil</h1>

<h2>Experiences</h2>
<ul>
    <li>Typo3 Administrator</li>
    <li>Technical Manager</li>
    <li>Project Manager</li>
</ul>

<h2>Studies</h2>

<ul>
    <li>2010 - Universit&eacute; de Savoie</li>
    <li>2009 - Universit&eacute; de Savoie</li>
    <li>2000-2004 - HEIG-VD - School of Business and Engineering, Vaud</li>
    <li>2002 - Hochschule für Technik, Wirtschaft und Kultur Leipzig (FH)</li>
</ul>

<h2>Language</h2>
<ul>
    <li>French</li>
    <li>English</li>
    <li>German</li>
</ul>

<h2>Contact</h2>

<div>
    <adress class="vcard">
        <span class="fn">C&eacute;dric Aellen</span>
        <a class="url large button" href="http://www.alienlebarge.ch/" title="Go to alienlebarge.ch">visit my blog</a>
        <span class="street-address">Chemin des Fleurs de Lys 38</span>
        <span class="region">Canton de Vaud</span>
        <span class="postal-code">1350</span> <span class="locality">Orbe</span>
        <span class="country-name">Switzerland</span>
        <span class="tel">+ 41 (0) 24 123 45 67</span>
        <a class="email large button" href="mailto:cedric.aellen@alienlebarge.ch">send me an email</a>
    </adress>
</div>
MOBILE

);
?>


<!-- Read this comment about placing content with quotation marks:

Take a look above at for instance in line 26 where is written 'Desktop Page' and 'Mobile Page'. The text Desktop Page will be presented on desktop and the text Mobile Page on mobile. If you replace that text with a larger block of content, then that is the content that wil be presented instead. If that contant contains single quotation marks, you are in trouble: the browser will read these as PHP instead of the HTML you mean it to be.

If content has been placed via the PHP HEREDOC-notation (see the section above with the header 'Content with quotation marks'), then that way quotation marks in the content won't pose a problem anymore. As you can see in that section, that does contain these single quotation marks.

The HEREDOC-notation is done by replacing the start quotation marks with what is written instead at line 36 and at the end at line 43.

It is not impossible to place content in PHP code that uses single quotation marks like in the sample at line 26. All you need to do is place one backslash before any single quotation mark inside the content like this Tim\'s. This will make the browser present the content correctly. It may be clear that using HEREDOC-notation instead for larger pieces of content, is safer.

Note that PHP may use double quotation marks instead of single ones. In that case an HTML attribute like an ID or a class may cause similar problems. You can solve this with a backslash before the double quotaton marks like this id=\"test\".

By the way: you may use the same HEREDOC notations as many times as you like in one page. So DESKTOP and MOBILE as markers don't need to be unique. You may also use just D instead of DESKTOP and just M instead of MOBILE, or another variation, that's up to you, just keep the syntax similar.

End of comment -->

</body>
</html>