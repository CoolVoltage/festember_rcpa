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
    // echo htmlentities($CONTENT);
    // exit();

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

            <h2 class="content-subhead">Now Let's Speak Some Latin</h2>
            <?php echo $INFOSTRING; ?>
            <?php echo $WARNINGSTRING;?>
            <?php echo $ERRORSTRING; ?>
            <?php echo $CONTENT; ?>

            <!--<div class="pure-g">
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="./index_files/9069037713_1752f5daeb.jpg" alt="Peyto Lake">
                </div>
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="./index_files/9069585985_80da8db54f.jpg" alt="Train">
                </div>
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="./index_files/9121446012_c1640e42d0.jpg" alt="T-Shirt Store">
                </div>
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="./index_files/9086701425_fda3024927.jpg" alt="Mountain">
                </div>
            </div>-->

        </div>
    </div>
</div>
    <table id="bottomLinks" cellspacing="10">
    	<tr>
    		<td class="bottomLink"><a href="">Login</a></td>
    		<td class="bottomLink"><a href="">Register</a></td>
    	</tr>
    </table>




<script src="<?php echo $TEMPLATEBROWSERPATH; ?>/jquery-2.1.4.min.js"></script>
<script src="<?php echo $TEMPLATEBROWSERPATH; ?>/main.js"></script>



</body></html>