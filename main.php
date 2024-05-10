<?php

$path='envirocare/';


function getHeadTitle($arrVal='')
{

	$ValArray = array("index" => 'Join our green community today', "enviro-intro" => 'Enviro Intro', "conserve-nature" => 'Conserve Nature', "enviro-ambassadors" => 'Enviro Ambassadors', "is-everyone-a-climate-changer" => 'Is Everyone a Climate Changer?', "going-netzero" => 'Going NetZero', "around-the-globe-sustainability" => 'Around the Globe - Sustainability', "veganism-a-climate-changer" => 'Veganism: a climate changer?', "are-you-really-a-responsible-consumer" => 'Are you really a responsible consumer?', "7rs-of-sustainability" => '7Rs Of Sustainability', "empowering-youth-for-a-sustainable-future" => 'Empowering Youth for a Sustainable Future', "conserve-energy-conserve-the-planet" =>  'Conserve Energy, Conserve the Planet', "how-medical-waste-is-wreaking-hovoc-on-the-environment" => 'How medical waste is wreaking havoc on the environment', "enviro-connect" => 'Enviro Connect', "enviro-album" => 'Enviro Album', "enviro-now" => 'Enviro Now', "enviro-bloopers" => 'Enviro Bloopers', "enviro-bloomers" => 'Enviro Bloomers', "manage-e-waste" => 'Manage E-Waste', "unraveling-cognitive-behavior" => 'Unraveling Cognitive Behavior', "privacy-policy" => 'Privacy Policy', "sitemap" => 'Sitemap', "sustainable-lifestyle" => 'Sustainable Lifestyle', "take-action" => 'Take Action', "track-carbon-footprint" => 'Track Carbon Footprints');
	if ($ValArray[$arrVal] != '') {
		return $ValArray[$arrVal];
	} else {
		return 'Home';
	}
}

if(isset($_GET['page'])){
	$page=$_GET['page'];
}else{
	$page='index';
}


	  include('header.php');

	  if (file_exists($path.$page.'.php') && $page!='index'){
		require_once($page.'.php');
	  }else{
		require_once('default.php');
	  }
	  

	  include('footer.php');
	
	exit;
