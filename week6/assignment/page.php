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
    <link rel="stylesheet" type="text/css" href="<?php echoSwitch('assets/css/screen_styles', 'assets/css/mobile_styles'); ?>.css" />
    <?php
    // add script if browser older than IE9
    echoSwitch('<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script><![endif]-->','');
    ?>
</head>
<body>
<!--container-->
<div class="container">
<div class="alert alert-info">
<p id="mob_switch"><a class="btn" href="<?php echo $current_file['basename']; ?>?m=<?php echoSwitch('1', '0'); ?>"><?php echoSwitch('Mobile View', 'Desktop View'); ?></a> (changes will become definitive after a delay of <?php echo $maxage; ?> seconds or a reload of the page)</p>
</div>

<?php
echoSwitch(
<<<DESKTOP
    <h1>C&eacute;dric Aellen's profil</h1>

    <h2>Bio</h2>

    <!-- row -->
    <div class="row">
        <div class="span6">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero lectus, consectetur id congue a, sagittis quis lacus. Maecenas semper felis ac lorem tincidunt pellentesque. Fusce ac magna tempus purus auctor scelerisque. Vivamus mauris dolor, ultricies sit amet ornare sit amet, condimentum ut ipsum. Cras imperdiet est nisl. Integer in condimentum mauris. Suspendisse potenti. Curabitur mi magna, fringilla eget dignissim quis, porta ut augue. Pellentesque nunc dolor, lacinia id eleifend non, faucibus in quam. Curabitur faucibus sapien in eros adipiscing at congue justo aliquet. Nullam iaculis erat sed augue tempor pellentesque.</p>

            <p>In vel nulla ante, ac feugiat metus. Praesent a est turpis, id rhoncus sem. Cras viverra dapibus quam sed pellentesque. Duis quis ipsum lorem, ut scelerisque sapien. Nulla facilisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur vel libero risus. Fusce consectetur, eros quis commodo dictum, magna eros semper felis, quis laoreet erat neque at tortor. Donec ipsum turpis, sodales sit amet interdum commodo, accumsan ac urna. Proin nec lectus a sem gravida placerat et lacinia est. Ut sollicitudin, odio nec malesuada interdum, elit nisi porta est, et pretium erat lectus eget lorem. Nunc eget felis a nunc viverra facilisis a sit amet tellus. Vivamus quis felis enim, vel eleifend tellus. Maecenas et eros quis enim bibendum suscipit. Maecenas sed nulla quis dolor tristique interdum. Pellentesque iaculis metus vitae ipsum auctor vitae mattis magna aliquet.</p>
        </div>
        <div class="span6">
            <figure class="pull-right">
                <img src="assets/img/portrait.jpg" width="500" height="363" alt="A portrait of Cedric"/>
                <figcaption>This portrait of C&eacute;dric was taken in Qu&eacute;bec</figcaption>
            </figure>
        </div>
    </div><!-- /row -->

    <!-- row -->
    <div class="row">
        <!-- span6 -->
        <div class="span6">
            <h2>Experiences</h2>

            <h3>Typo3 Administrator</h3>

            <dl>
                <div class="row">
                    <dt class="span2">Company</dt>
                    <dd class="span4">&Eacute;tat de Vaud</dd>
                </div>
                <div class="row">
                    <dt class="span2">Date</dt>
                    <dd class="span4">from January 2009 to present</dd>
                </div>
                <div class="row">
                    <dt class="span2">Jop description</dt>
                    <dd class="span4">Project managment, Technological monitoring, Administration of websites, Development of extension.</dd>
                </div>
            </dl>

            <h3>Technical Manager</h3>

            <dl>
                <div class="row">
                    <dt class="span2">Company</dt>
                    <dd class="span4">Pixit SA</dd>
                </div>
                <div class="row">
                    <dt class="span2">Date</dt>
                    <dd class="span4">from february 2008 to december 2008</dd>
                </div>
                <div class="row">
                    <dt class="span2">Jop description</dt>
                    <dd class="span4">Project managment, Technological monitoring, Administration of websites, Development of extension, Head of IT
                        assets.</dd>
                </div>
            </dl>

            <h3>Project Manager</h3>

            <dl>
                <div class="row">
                    <dt class="span2">Company</dt>
                    <dd class="span4">Paul Vaucher SA</dd>
                </div>
                <div class="row">
                    <dt class="span2">Date</dt>
                    <dd class="span4">from june 2004 to january 2008</dd>
                </div>
                <div class="row">
                    <dt class="span2">Jop description</dt>
                    <dd class="span4">Project managment for home automation</dd>
                </div>
            </dl>
        </div><!-- /span6 -->
        <!-- span6 -->
        <div class="span6">
            <h2>Studies</h2>

            <dl>
                <div class="row">
                    <dt class="span2">School</dt>
                    <dd class="span4">Universit&eacute; de Savoie</dd>
                </div>
                <div class="row">
                    <dt class="span2">Diplom</dt>
                    <dd class="span4">Additional formation at T3FRUNI10, Typo3</dd>
                </div>
                <div class="row">
                    <dt class="span2">Date</dt>
                    <dd class="span4">2010</dd>
                </div>
            </dl>

            <dl>
                <div class="row">
                    <dt class="span2">School</dt>
                    <dd class="span4">Universit&eacute; de Savoie</dd>
                </div>
                <div class="row">
                    <dt class="span2">Diplom</dt>
                    <dd class="span4">Additional formation at T3FRUNI10, Typo3</dd>
                </div>
                <div class="row">
                    <dt class="span2">Date</dt>
                    <dd class="span4">2009</dd>
                </div>
            </dl>

            <dl>
                <div class="row">
                    <dt class="span2">School</dt>
                    <dd class="span4">HEIG-VD - School of Business and Engineering, Vaud</dd>
                </div>
                <div class="row">
                    <dt class="span2">Diplom</dt>
                    <dd class="span4">Bachelor, Interactive media</dd>
                </div>
                <div class="row">
                    <dt class="span2">Date</dt>
                    <dd class="span4">2000-2004</dd>
                </div>
            </dl>

            <dl>
                <div class="row">
                    <dt class="span2">School</dt>
                    <dd class="span4">Hochschule für Technik, Wirtschaft und Kultur Leipzig (FH)</dd>
                </div>
                <div class="row">
                    <dt class="span2">Diplom</dt>
                    <dd class="span4">Erasmus, Medientechnick</dd>
                </div>
                <div class="row">
                    <dt class="span2">Date</dt>
                    <dd class="span4">2002</dd>
                </div>
            </dl>
        </div><!-- /span6 -->
    </div><!-- /row -->

    <!-- row -->
    <div class="row">
        <!-- span6 -->
        <div class="span6">
            <h2>Language</h2>
            <dl>
                <div class="row">
                    <dt class="span2">French</dt>
                    <dd class="span4">Native or bilingual proficiency</dd>
                </div>
                <div class="row">
                    <dt class="span2">English</dt>
                    <dd class="span4">Professional working proficiency</dd>
                </div>
                <div class="row">
                    <dt class="span2">German</dt>
                    <dd class="span4">Professional working proficiency</dd>
                </div>
            </dl>
        </div><!-- /span6 -->
        <!-- span6 -->
        <div class="span6">
            <h2>Contact</h2>
            <div>
                <adress class="vcard">
                    <span class="fn"><span class="given-name">C&eacute;dric</span> <span class="family-name">Aellen</span></span><br />
                    <a class="url" href="http://www.alienlebarge.ch/" title="Go to alienlebarge.ch">visit my blog</a><br />
                    <span class="street-address">Chemin des Fleurs de Lys 38</span><br />
                    <span class="region">Canton de Vaud</span><br />
                    <span class="postal-code">1350</span> <span class="locality">Orbe</span><br />
                    <span class="country-name">Switzerland</span><br />
                    <span class="tel">+ 41 (0) 24 123 45 67</span><br />
                    <a class="email large button" href="mailto:cedric.aellen@alienlebarge.ch">send me an email</a>
                </adress>
            </div>
        </div><!-- /span6 -->
    </div><!-- /row -->


    <div class="alert alert-info">
        <p>
            Due to the fact that no imagination was required for this assignment, I used <a href="http://twitter.github.com/bootstrap/" title="Bootstrap porject on Github">bootstrap's CSS framework</a>.
        </p>
    </div>
DESKTOP


,
<<<MOBILE
    <h1>C&eacute;dric Aellen's profil</h1>

    <h2>Bio</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero lectus, consectetur id congue a, sagittis quis lacus. Maecenas semper felis ac lorem tincidunt pellentesque. Fusce ac magna tempus purus auctor scelerisque. Vivamus mauris dolor, ultricies sit amet ornare sit amet, condimentum ut ipsum. Cras imperdiet est nisl. Integer in condimentum mauris. Suspendisse potenti. Curabitur mi magna, fringilla eget dignissim quis, porta ut augue. Pellentesque nunc dolor, lacinia id eleifend non, faucibus in quam. Curabitur faucibus sapien in eros adipiscing at congue justo aliquet. Nullam iaculis erat sed augue tempor pellentesque.</p>

    <h2>Experience</h2>
    <dl>
        <dt>Typo3 Administrator</dd>
        <dd>Since 2009</dd>
    </dl>
    <dl>
        <dt>Technical Manager</dd>
        <dd>1 year</dd>
    </dl>
    <dl>
        <dt>Project Manager</dd>
        <dd>4 years</dd>
    </dl>

    <h2>Studies</h2>
    <dl>
        <dt>Université de Savoie</dd>
        <dd>Additional formation at T3FRUNI10, Typo3</dd>
    </dl>
    <dl>
        <dt>Université de Savoie</dd>
        <dd>Additional formation at T3FRUNI10, Typo3</dd>
    </dl>
    <dl>
        <dt>HEIG-VD - School of Business and Engineering, Vaud</dd>
        <dd>Bachelor, Interactive media</dd>
    </dl>
    <dl>
        <dt>Hochschule für Technik, Wirtschaft und Kultur Leipzig (FH)</dd>
        <dd>Erasmus, Medientechnick</dd>
    </dl>

    <h2>Language</h2>
    <ul>
        <li>French</li>
        <li>English</li>
        <li>German</li>
    </ul>

    <h2>Contact</h2>
    <p>
    <a class="btn" href="#">Save in contact</a>
    <a class="btn" href="#">Call</a>
    <a class="btn" href="#">Send an email</a>
    </p>

    <footer>
        <a class="btn" href="#">Back to top</a>
    </footer>
MOBILE
);
?>
</div><!-- /container -->
</body>
</html>