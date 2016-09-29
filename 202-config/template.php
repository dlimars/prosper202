<?php  
ob_start();

function template_top($title = 'Prosper202 ClickServer') { global $navigation; global $version; global $userObj;
	$user_data = get_user_data_feedback($_SESSION['user_id']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>

<title><?php echo $title; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="description" />
<meta name="keywords" content="keywords"/>
<meta name="copyright" content="Prosper202, Inc" />
<meta name="author" content="Prosper202, Inc" />
<meta name="MSSmartTagsPreventParsing" content="TRUE"/>
<meta charset="utf-8"> 
<meta name="robots" content="noindex, nofollow" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="imagetoolbar" content="no"/>
<link rel="shortcut icon" href="<?php echo get_absolute_url();?>202-img/favicon.gif" type="image/ico"/> 
<!-- Loading Bootstrap -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<!-- Loading Flat UI -->
<link href="<?php echo get_absolute_url();?>202-css/css/flat-ui-pro.min.css" rel="stylesheet">
<!-- Loading Font Awesome -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Loading Tags Input CSS -->
<link href="<?php echo get_absolute_url();?>202-css/css/bootstrap-tokenfield.min.css" rel="stylesheet">
<link href="<?php echo get_absolute_url();?>202-css/css/tokenfield-typeahead.min.css" rel="stylesheet">
<?php if(($navigation[2] == "setup") AND ($navigation[3] == "aff_campaigns.php")) { ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.22.5/css/jquery.tablesorter.pager.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.22.5/css/theme.bootstrap.min.css" rel="stylesheet">
<?php } ?>
<link href="<?php echo get_absolute_url();?>202-css/css/select2.css" rel="stylesheet" />
<!-- Loading Custom CSS -->
<link href="<?php echo get_absolute_url();?>202-css/custom.css" rel="stylesheet">
<!--[if lt IE 9]>
      <script src="202-js/html5shiv.js"></script>
      <script src="202-js/respond.min.js"></script>
<![endif]-->
<!-- Load JS here -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_absolute_url();?>202-js/fileinput.js"></script>
<script type="text/javascript" src="<?php echo get_absolute_url();?>202-js/radiocheck.js"></script>
<script type="text/javascript" src="<?php echo get_absolute_url();?>202-js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo get_absolute_url();?>202-js/bootstrap-tokenfield.min.js"></script>
<script type="text/javascript" src="<?php echo get_absolute_url();?>202-js/typeahead.bundle.js"></script>
<script type="text/javascript" src="<?php echo get_absolute_url();?>202-js/tablesort.min.js"></script>
<script type="text/javascript" src="<?php echo get_absolute_url();?>202-js/iio-rum.min.js"></script>
<script type="text/javascript" src="<?php echo get_absolute_url();?>202-js/list.min.js"></script>	
<script type="text/javascript" src="<?php echo get_absolute_url();?>202-js/list.fuzzysearch.min.js"></script>
<?php switch ($navigation[1]) {
	
	case "tracking202": ?>
	<script type="text/javascript" src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript" src="<?php echo get_absolute_url();?>202-js/chart.theme.js"></script>
	<?php if(($navigation[2] == "setup") AND ($navigation[3] == "aff_campaigns.php")) { ?>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.22.5/js/jquery.tablesorter.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.22.5/js/jquery.tablesorter.widgets.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.22.5/js/extras/jquery.tablesorter.pager.min.js"></script>
	<script type="text/javascript" src="<?php echo get_absolute_url();?>202-js/dni.search.offers.tablesorter.php?ddlci=<?php echo $_GET['ddlci'];?>"></script>
	<?php } ?>
	<?php break;

case "202-account": ?>
<?php if(($navigation[1] == "202-account") AND !$navigation[2]) { ?>
<script type="text/javascript" src="<?php echo get_absolute_url();?>202-js/home.php"></script>
<?php } ?>

<script type="text/javascript" src="<?php echo get_absolute_url();?>202-js/account.php"></script>
<?php break; } ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1-rc.1/js/select2.min.js"></script>
<script type="text/javascript" src="<?php echo get_absolute_url();?>202-js/custom.php"></script>

</head>
<body>

<!-- START MAIN CONTAINER -->
<div class="container">
<div class="main_wrapper">
	<div class="row">
  		<div class="col-xs-12">
	  		<nav class="navbar navbar-default" role="navigation">
				<ul class="nav navbar-nav">
					<li <?php if (($navigation[1] == '202-account') AND !$navigation[2]) { echo 'class="active";'; } ?>><a href="<?php echo get_absolute_url();?>202-account/" id="HomePage">Home</a></li>			      
				    <li <?php if ($navigation[1] == 'tracking202') { echo 'class="active";'; } ?>><a href="<?php echo get_absolute_url();?>tracking202/" id="ClickServerPage">Prosper202 CS</a></li>
				    <li <?php if ($navigation[1] == '202-appstore') { echo 'class="active";'; } ?>><a href="<?php echo get_absolute_url();?>202-appstore/" id="AppStorePage" >App Store <span class="fui-star-2"></span></a> </li> 
				    <li <?php if ($navigation[1] == '202-resources') { echo 'class="active";'; } ?>><a href="<?php echo get_absolute_url();?>202-resources/" id="ResourcesPage">Featured Resources</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li id="account-dropdown" class="dropdown <?php if ($navigation[1] == '202-account' AND $navigation[2]) { echo 'active'; } ?>">
					    <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <?php if($user_data['vip_perks_status']) echo '<span class="label label-important" id="notification">1</span>';?><b class="caret"></b></a>
					    <span class="dropdown-arrow"></span>
					    <ul class="dropdown-menu">
					        <li <?php if ($navigation[2] == 'account.php') { echo 'class="active";'; } ?>><a href="<?php echo get_absolute_url();?>202-account/account.php" id="PersonalSettingsPage">Personal Settings</a></li>
					        <?php if ($userObj->hasPermission("access_to_vip_perks")) { ?><li <?php if ($navigation[2] == 'vip-perks.php') { echo 'class="active";'; } ?>><a href="<?php echo get_absolute_url();?>202-account/vip-perks.php" id="VIPPerksPage">VIP Perks Profile</a> <?php if($user_data['vip_perks_status']) echo '<span class="label label-important" id="notification-perks">1</span>';?></li><?php } ?>
					        <?php if ($userObj->hasPermission("access_to_clickservers")) { ?><li <?php if ($navigation[2] == 'clickservers.php') { echo 'class="active";'; } ?>><a href="<?php echo get_absolute_url();?>202-account/clickservers.php" id="ClickServerManagementPage">ClickServer Management</a></li><?php } ?>
					        <?php if ($userObj->hasPermission("access_to_api_integrations")) { ?><li <?php if ($navigation[2] == 'api-integrations.php') { echo 'class="active";'; } ?>><a href="<?php echo get_absolute_url();?>202-account/api-integrations.php" id="3rdPartyAPIPage">3rd Party API Integrations</a></li><?php } ?>
					        <li <?php if ($navigation[2] == 'conversion-logs.php') { echo 'class="active";'; } ?>><a href="<?php echo get_absolute_url();?>202-account/conversion-logs.php" id="ConversionLogsPage">Conversion Logs</a></li>
					        <?php if ($userObj->hasPermission("add_users")) { ?><li <?php if ($navigation[2] == 'user-management.php') { echo 'class="active";'; } ?>><a href="<?php echo get_absolute_url();?>202-account/user-management.php" id="UserManagementPage">User Management</a></li><?php } ?>
					        <?php if ($userObj->hasPermission("access_to_settings")) { ?><li <?php if ($navigation[2] == 'administration.php') { echo 'class="active";'; } ?>><a href="<?php echo get_absolute_url();?>202-account/administration.php" id="SettingsPage">Settings<span class="fui-gear icon-navbar"></span></a></li><?php } ?>
					        <li <?php if ($navigation[2] == 'help.php') { echo 'class="active";'; } ?>><a href="<?php echo get_absolute_url();?>202-account/help.php" id="HelpPage">Help<span class="fui-question icon-navbar"></span></a></li>
					    </ul>
					</li>		      
					<li><a href="<?php echo get_absolute_url();?>202-account/signout.php" id="SignoutPage">Sign Out<span class="fui-exit icon-navbar"></span></a></li>
				</ul>  		      	    
	       	</nav>
  		</div>
	</div>
	<div id="update_needed"></div>
	
	<?php if ($navigation[1] == 'tracking202') {  include_once(substr(dirname( __FILE__ ), 0,-10) . '/tracking202/_config/top.php'); } ?>
	<div class="main" <?php if ($navigation[2] == 'setup') { echo 'style="border-top-left-radius:0px;"'; } ?>>

			<?php if ($navigation[1] == 'tracking202') {
				if(($navigation[2] == 'setup') or ($navigation[2] == 'overview') or ($navigation[2] == 'analyze') or ($navigation[2] == 'update')){
					include_once(substr(dirname( __FILE__ ), 0,-10) . '/tracking202/_config/sub-menu.php');
				} 
			} ?>
		
	<?php } function template_bottom() { global $version; 
		$user_data = get_user_data_feedback($_SESSION['user_id']);?>
	</div>
	

	<div style="clear: both;"></div>
	<div class="row footer">
		<div class="col-xs-12">
		Thank you for marketing with <a href="http://prosper202.com" target="_blank">Prosper202</a>
		&middot; 
		<a href="../202-account/help.php">Help</a>
		&middot; 
		<a href="http://prosper202.com/apps/docs/" target="_blank">Documentation</a>
		&middot; 
		<a href="http://prosper202.com/apps/donate/" target="_blank">Donate</a>
		&middot; 
		<a href="http://support.tracking202.com" target="_blank">Forum</a>
		&middot; 
		
		<?php if ($_SESSION['update_needed'] == true) { ?>
		 	<strong>Your Prosper202 ClickServer <?php echo $version; ?> is out of date. <a href="<?php echo get_absolute_url();?>202-account/auto-upgrade.php">1-Click Upgrade</a> - <a href="http://my.tracking202.com/clickserver/download/latest/pro" target="_blank">Manual upgrade</a>.</strong>
		 <?php } else { ?>
		 	Your Prosper202 ClickServer <?php echo $version; ?> is up to date.
		 <?php } ?>
		 
		 <br><br>Local time: <?php echo date(DATE_RFC2822); ?>

		 <br><br><a rel="license" href="http://my.tracking202.com/license/" target="_blank">Copyright &copy; <?php echo date("Y") ?> Blue Terra LLC. All rights reserved</a>.
	</div>
	</div>
</div>
</div>

<!-- this is the prosper202 support widget -->
<?php
/* 	if(clickserver_api_key_validate($user_data['api_key'], 'get', 'auth', 'db')){
		$member_status = "Pro";
	} else {
		$member_status = "Not Pro";
	} */
	
	$member_status = "Not Pro";
?>

<?php if (!$user_data['modal_status']) { 
	$data = getSurveyData($user_data['install_hash']);?>

	<script type="text/javascript">
	  $(window).load(function(){
	    $('#survey-modal').modal({
	      backdrop: 'static',
	      show: true,
	  	})
	  });
	</script>

<!-- Start survey modal -->
      <div id="survey-modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Prosper202 VIP Perks</h4>
            </div>
            <div class="modal-body">
              <span class="infotext">Wouldn't you love to have new campaign opportunities, private campaigns, business relationships, discounts and special offers and more handed to you? Now you can with the Prosper202 VIP Perk program.<br></br>
                Fill out your profile information to customize your Prosper202 VIP Perks experience. The information will be used to uniquely match you up with coupons, discounts, and enhanced payouts or exclusive offers from top Affiliate Networks, Ad Networks, Tool and Hosting providers and more.</span>
               <span id="perks-error" class="small error" style="display:none; position:absolute; right: 23px; margin-top: 39px;"><span class="fui-alert"></span> Whoops! Looks like you forget to answer some questions.</span>
               
               <form class="form-horizontal" role="form" id="survey-form">
		            <?php $count_groups = array(); foreach ($data['questions'] as $question) {

		            	if (empty($question['answer'])) {
		            		if (!array_key_exists($question['group_id'], $count_groups)) { ?>
			            		<?php foreach ($data['question_groups'] as $group) {
			            			if ($group['id'] == $question['group_id']) {
			            				echo "<h6>".$group['title']."</h6>";
			            			}
			            		} ?>

					            <div class="row form_seperator">
					                <div class="col-xs-12"></div>
					            </div>
			            	<?php }

			            	$count_groups[$question['group_id']] = true;

			                	$highlighted = false;

			                	$answer = false;

			                	if ($question['highlighted']) {
				                    $highlighted = true;
				                }
			                ?>
			                    <div class="form-group">
			                    <label for="<?php echo $question['id'];?>" class="col-sm-8 control-label"><?php echo $question['name'];?> <?php if($highlighted) echo '<span class="label label-important">New!</span>'; ?></label>
			                    <div class="col-sm-4">
			                      <label class="radio radio-inline">
			                        <input type="radio" name="<?php echo $question['id'];?>" value="Yes" data-toggle="radio" required <?php if($answer == 'Yes') echo "checked"; ?>>
			                        Yes
			                      </label>
			                      <label class="radio radio-inline">
			                        <input type="radio" name="<?php echo $question['id'];?>" value="No" data-toggle="radio" <?php if($answer == 'No') echo "checked"; ?>>
			                        No
			                      </label>
			                    </div>
			                </div>
			             	   
		               <?php } ?>
		                
		            <?php } ?>

            </div>
            <div class="modal-footer">
              <img style="display:none;left: -25px; top: 12px;" id="perks-loading" src="<?php echo get_absolute_url();?>202-img/loader-small.gif">
              <a href="#" class="btn btn-link" id="survey-form-skip">Skip</a>
              <a href="#" class="btn btn-wide btn-p202" id="survey-form-submit">Submit answers</a>
            </div>
            </form>
          </div>
        </div>        
      </div>
<!-- End survey modal -->
<?php } ?>
<script type="text/javascript">
$(document).ready(function() {			                

  
});
  </script>
</body>
<?php } ?>
