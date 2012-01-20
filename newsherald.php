<?php   
	require_once('/web/onset/lib/libonset.php');
	require_once('adminConfig.php'); 
	  
	//get random number for oas
	$random = rand(1000000000, 9999999999);
	$p = new Poll("", $siteID);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en-us" />
	<title><?php echo $titleTagSuffix;?></title>
	<link rel="stylesheet" type="text/css" href="/common/tools/load.php?css=common_rev1/newspaper/newspaper,common_rev1/newspaper/nav,common_rev1/newspaper/buckets,common_rev1/newspaper/zvents,common_rev1/newspaper/skin,site" />
        <!--[if lt IE 8]>
            <link rel="stylesheet" type="text/css" href="/common/tools/load.php?css=common_rev1/newspaper/ie7-and-down" />
        <![endif]-->

        <!--[if IE 8]>
            <link rel="stylesheet" type="text/css" href="/common/tools/load.php?css=common_rev1/newspaper/ie8" />
        <![endif]-->
	<script type="text/javascript" src="/common/tools/load.php?js=common_tabBox"></script>
	<script type="text/javascript" src="/common/tools/load.php?js=common_jquery/jquery-min,common_jquery/jquery-ui,common_jquery/jquery.jcarousel.min,site"></script>
        <?php
            $adtags = new AdTags();
            echo $adtags->createTags(array("positions" => "Top,Middle,Middle1,Right,Frame1,Frame2,x40,250x90","taxonomy" => "homepage"));
        ?>
    </head>

    <body>
        <div id="stats">
		<script type="text/javascript" src="http://common.onset.freedom.com/fi/analytics/cms/?scode=<?php echo $siteID;?>&domain=<?php echo $analyticsDomain;?>&ctype=homepage&shier=homepage&ghier=homepage"></script>
	</div>
        <?php onSetInclude('/templates/ads_top.php'); ?>
        
        
        <div id="fi_wrapper">
            <div id="fi_header">
		<!-- start top header -->
		<?php
			onSetInclude("/templates/header.php");
		?>
		<!-- end .fi_header -->
            </div>
            
            <div align="center">
                <div id="abovenavad">
			<script type='text/javascript'>freedom.ad({position: 'x40'});</script>
                </div>
            </div>

            <div id="fi_content">
            <!-- start .fi_content -->
		<?php 
			$breakingNews = getOnsetOutput("/onset?cat=Breaking+News&start=0&max=1&template=rev1/redesign/breaking_news.html");
			if ($breakingNews != ""){
				echo $breakingNews; 
			}
		?>
                <div class="clearfloat"></div>
                <?php   
                        $eTimes = array(); 
                        $eTimes['buckets'] = microtime(true);
                        $params = array();
                        $params['list'] = 'homepage';
                        $params['custom'] = 1;
                        $params['cookie'] = 0;
                        $buckets = Buckets::getInstance(getOnSetSiteID());
                        echo $buckets->do_request($params);
                ?>	
            <!-- end .fi_content -->
            </div>
            
            
            <div id="fi_sidebar" class="floatRight">
                <div class="marginMidTop">
			<?php onsetInclude("/templates/rev1/redesign/sidebar_search.php");?>
		</div>  
                <!-- Funnel -->
		<div class="fi_sidebarItem marginLargeBottom">
			<?php onsetInclude("/templates/funnel.php"); ?>
		</div>
                
            </div>
        </div>
        
        
        
        <div id="bottomad">
		<script language="javascript">
			FI_OAS_RICH('x02')
		</script>
	</div>
    </body>
    
</html>
    
<SCRIPT LANGUAGE="JavaScript">var tcdacmd="dt";</SCRIPT>
<SCRIPT SRC="http://an.tacoda.net/an/15136/slf.js" LANGUAGE="JavaScript"></SCRIPT>

