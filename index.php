<?php
    // MENUBAR preprocessing 
    $MENUBAR = str_replace("<div class='cms-menuitem'>", "", $MENUBAR);
    $MENUBAR = str_replace("</div>", " ", $MENUBAR);
    $MENUBAR = str_replace("</ul>", "", $MENUBAR);
    $li_list = array_slice(explode('<li', $MENUBAR),  1,100);
    $new_menubar = "";
    foreach ($li_list as $key => $value) {
        $new = explode("<a", $value)[1];
        $new = ' <a class="pure-menu-link" ' . $new;
        $new = '<li class="pure-menu-item">' . $new;
        $new_menubar .= $new;
    }
    $MENUBAR = $new_menubar;  
?>

<?php
    // CONTENT preprocessing 
    //echo htmlentities($CONTENT);
    //exit();

?>

<?php
if(!defined('__PRAGYAN_CMS'))
{ 
    header($_SERVER['SERVER_PROTOCOL'].' 403 Forbidden');
    echo "<h1>403 Forbidden<h1><h4>You are not authorized to access the page.</h4>";
    echo '<hr/>'.$_SERVER['SERVER_SIGNATURE'];
    exit(1);
}
?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php $cmstitle=$TITLE;echo $cmstitle; ?></title>
<meta name="description" content="<?php echo $SITEDESCRIPTION ?>" />
<meta name="keywords" content="<?php echo $SITEKEYWORDS.', '.$PAGEKEYWORDS ?>" /> 
<?php global $urlRequestRoot;   global $PAGELASTUPDATED;
    if($PAGELASTUPDATED!="")
        echo '<meta http-equiv="Last-Update" content="'.substr($PAGELASTUPDATED,0,10).'" />'."\n";
?>

<link rel="stylesheet" href="<?php echo $TEMPLATEBROWSERPATH; ?>/pure-min.css">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="/combo/1.18.13?/css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $TEMPLATEBROWSERPATH; ?>/main.css">
    <!--<![endif]-->
<!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
<![endif]-->
<!--[if lte IE 8]>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $TEMPLATEBROWSERPATH; ?>/grids-responsive-min.css">
	<!--<![endif]-->

</script>
<script language="javascript" type="text/javascript" src="<?php echo  $TEMPLATEBROWSERPATH; ?>/jquery-latest.js" ></script>
<script type="text/javascript" src="<?php echo $TEMPLATEBROWSERPATH; ?>/script.js"></script>
<script language="javascript" type="text/javascript">
    //defined here for use in javascript
    var templateBrowserPath = "<?php echo $TEMPLATEBROWSERPATH ?>";
    var urlRequestRoot = "<?php echo $urlRequestRoot?>";
</script>
</head>
<body onload="<?php echo $STARTSCRIPTS; ?>">

<div class="header">
	<h1>Inner</h1>
</div>
<img id="topPillar" src="<?php echo $TEMPLATEBROWSERPATH; ?>/topPillar.png">
<img id="bottomPillar" src="<?php echo $TEMPLATEBROWSERPATH; ?>/bottomPillar.png">
<div id="pillarPng"></div>
<div id="menuShadow"></div>
<div id="layout">
    <!-- Menu toggle -->
    <a href="http://purecss.io/layouts/side-menu/#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

	<div id="menu">
        <div class="pure-menu">
<!--            <a class="pure-menu-heading" href="http://purecss.io/layouts/side-menu/#">Pormaboku</a> -->

            <ul class="pure-menu-list animated slideInLeft">
                <?php echo $MENUBAR; ?>
                
            </ul>
        </div>
    </div>

    <div id="main">

        <div class="content cms-content">

            <?php echo $INFOSTRING; ?>
            <?php echo $WARNINGSTRING;?>
            <?php echo $ERRORSTRING; ?>
            <?php echo $CONTENT; ?>
		<p>Lorem ipsum dolor sit amet, facilisis in per purus augue, turpis dolor habitasse dui orci feugiat porta, dis sed adipiscing est id nulla. Felis in mi lectus nibh sed mi, leo commodo, curabitur in justo aliquam lacinia a dictum, nunc wisi mollis. Lacus donec fusce non, scelerisque curabitur vel volutpat libero, arcu blandit, suspendisse hymenaeos porro dolor leo, nonummy eu ut. Velit platea eget mauris massa. Hymenaeos nam volutpat orci id, vel sollicitudin, id ut sodales. Suscipit in tempor neque porta, adipiscing morbi, sed praesent nulla molestie dictumst leo sodales.</p>
		<p>Risus id venenatis fringilla, scelerisque hendrerit, eu venenatis arcu lacus suscipit eros. Tincidunt a morbi, ultrices per quis, iaculis orci. In pellentesque scelerisque integer vivamus, lacus parturient, nisl phasellus cras. Aut eget id cras non suspendisse, est vitae fames hendrerit ipsum laboriosam quam, vivamus faucibus, ut ultricies ut libero, vitae erat sit convallis vitae nulla. Mauris velit nulla, bibendum hymenaeos, diam tempus integer aliquam turpis. Metus egestas netus et sed et cubilia, lacus nec, velit maecenas tellus pellentesque ipsum, pulvinar vivamus litora. Et maecenas mi nullam, cras ac. Dignissim ultricies id dolor, amet eros sed nibh sodales tristique, vivamus eos, ut ridiculus torquent sapien natoque dolor vel, faucibus et a penatibus libero. Felis arcu sed, amet volutpat pede nunc. Malesuada morbi, mi bibendum vestibulum integer ullam quis, consectetuer praesent consectetuer erat.</p>
		<p>Iaculis nam, massa ipsum in neque, viverra ornare in sollicitudin augue tristique id, at in metus odio tortor et curabitur. Purus nulla et viverra aliquet, vitae amet nibh quam sollicitudin eu, et a maecenas diam enim sem consectetuer, imperdiet in nec. Condimentum dignissim nibh nam orci, amet at in, eu odio porta convallis velit, facilisis rutrum sed ullamcorper. Elit vulputate, diam enim a enim, sem mauris integer enim, lorem mus velit turpis nascetur scelerisque magna, in ante dapibus. Tempor habitant sed senectus, pede lorem, elit in et	</p>
        </div>
    </div>
</div>
    <table id="bottomLinks" cellspacing="10">
    	<tr>
            <?php
                global $userId;
                if($userId!=0){
                    echo '<td class="bottomLink"><a href="./+profile">Festember ID:'.$userId.'</a></td>';
                    echo '<td class="bottomLink"><a href="./+logout">Logout</a></td>';
                }
                else{
                    echo '<td class="bottomLink"><a href="./+login">Login</a></td>';
                    echo '<td class="bottomLink"><a href="./+login&subaction=register">Register</a></td>';
                }
            ?>
    	</tr>
    </table>




<script src="<?php echo $TEMPLATEBROWSERPATH; ?>/jquery-2.1.4.min.js"></script>
<script src="<?php echo $TEMPLATEBROWSERPATH; ?>/main.js"></script>



</body></html>
