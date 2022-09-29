
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Trusted Affordable Dentist in New York ---Implant, Invisalign, Pinhole Gum Rejuvenation</title>
<link href="<?php echo css_path?>subpages.css" rel="stylesheet" type="text/css"/>
<?php
	if ('eng' == $currLang) {
?>
<link href="<?php echo css_path?>eng.css" rel="stylesheet" type="text/css"/>
<?php
	}
?>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo js_path; ?>jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo js_path; ?>init.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
  	var currMonthTplId		=	'month_tpl_<?php echo $currMonthName?>';
  	var currMonthTplTabId	=	'month_tpl_tab_<?php echo $currMonthName?>';
  	
  	$(".officeHoursTpls").hide();
  	$("#" + currMonthTplId).show();
  	
  	$(".officeHoursTab").click(function() {
  		$(".officeHoursTpls").hide();
  		
//  		alert($(this).attr('id'));
//			alert("#" + $(this).attr('id').replace('_tab', ''));
  		$("#" + $(this).attr('id').replace('_tab', '')).show();
  		$(".officeHoursTab").removeClass('current');
  		$("#" + $(this).attr('id')).addClass('current');
  	}); 

	});
	
</script>
<?php
	if ('eng' == $currLang) {
?>
<style type="text/css">
#wrapper .contents .officehours .calendar .month{ border:1px solid #ccc;width:100%; margin:20px auto;}
</style>
<?php
	}
	else {
?>
<style type="text/css">
#wrapper .contents .officehours .calendar .month{ border:1px solid #ccc;width:99%;margin:20px auto;}
</style>
<?php
	}
?>
</head>

<body>
<div id="wrapper">
	<?php
		require_once('_frontTpls/header.php');
	?>
    <div class="middle">
        <div class="contents">
        	<div class="banner">
            <div class="container">
            	<img class="img-responsive"  src="<?php echo app_image_path . $bannerToUse?>" height="260" width="100%"/>
            </div>
            </div>
            <div class="breadcrumbs">
              <div class="container">
                <a href="<?php echo Proj_createUrl(homePage)?>"><?php echo Proj_getTranslatedText($currLang,'Home') ?></a>&nbsp; &gt; &nbsp;
                <a class="bold" href="<?php echo Proj_createUrl(officeHoursPage)?>"><?php echo Proj_getTranslatedText($currLang,'Office Hours') ?></a>
              </div>
            </div>
            <div class="contents-part">
              <div class="container">
              <div class="officehours">
                <div class="title">
                  <h2><?php echo Proj_getTranslatedText($currLang,'Office Hours') ?></h2>
                </div>
                <div class="hours">
                	<ul class="tags">	
                  	<!--<li><a class="current" href="#">July</a></li>
                    <li><a href="#">August</a></li>
                    <li><a href="#">September</a></li>
                    <li><a href="#">October</a></li>
                    <li><a href="#">November</a></li>-->
                		<?php
                			foreach ($monthNameList as $v) {
												list(, $monthVal)	=	explode('-', $v);
                				$monthName	=	date("F", mktime(0, 0, 0, $monthVal, 10));
                				$tabIdName	=	'month_tpl_tab_' . $monthName;
                				if ($currMonthName == $monthName) {
                					echo '<li><a class="current officeHoursTab" id="' . $tabIdName . '">' . Proj_getTranslatedText($currLang, $monthName) . '</a></li>';
                				}
                				else {
                					echo '<li><a class="officeHoursTab" id="' . $tabIdName . '">' . Proj_getTranslatedText($currLang, $monthName) . '</a></li>';
                				}
                			}
                    ?>
                  </ul>
                  <div class="clear"></div>
									<?php
              			foreach ($monthNameList as $v) {
											list($yearNo, $monthVal)	=	explode('-', $v);
              				$monthName	=	date("F", mktime(0, 0, 0, $monthVal, 10));
                      echo '<div class="calendar officeHoursTpls" id="month_tpl_' . $monthName . '">';
                      echo '<h4>' . $yearNo . ' ' . Proj_getTranslatedText($currLang, $monthName) . ' ' .  Proj_getTranslatedText($currLang, 'Office Hours') . '</h4>';
											echo Proj_drawCalendar($monthVal, $yearNo, $calendarData["$monthVal"], $currLang);
											echo '</div><div class="clear"></div>';
              			}
                  ?>
                </div>
              </div>
              <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
		<?php
			require_once('_frontTpls/footer.php');
		?>
  </div>
<!--Begin SiteStats Code Sep 24, 2012-->
<STYLE TYPE='TEXT/CSS'>#ivanI13485349932744{position:absolute;visibility:hidden !important;} #TopWrap { display:none; }</STYLE>
<DIV CLASS=ivanC13485349932744 ID=ivanI13485349932744><A HREF='http://sitetracker.com' CLASS=ivanL_SI TARGET=_blank>FREE counter and Web statistics from sitetracker.com</A></DIV>
<script language='JavaScript' type='text/javascript' src='http://reforder.sitetracker.com/cgi-bin/sitestats.gif/script/13485349932744'></script>
<noscript><a href='http://reforder.sitetracker.com/cgi-bin/sitestats.gif/map'><img src='http://reforder.sitetracker.com/cgi-bin/sitestats.gif/img' alt=sitestats border=0></a></noscript>
<!--End SiteStats Code-->
</div>

</body>
</html>
<?php } else { ?>



<!--[if IE 9 ]><html class="ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="" lang="en"><!--<![endif]-->
<head>
    <script type="text/javascript" async="" src="https://st1.dialogtech.com/st/?_stk=e4a19193651babae78e8c6a6f7a79aed9e94dabe&amp;dr=https%3A%2F%2Fwww.centredent.com%2Fcontents%2Fnew-patients%2Fpatient-forms&amp;dl=https%3A%2F%2Fwww.centredent.com%2Fcontents%2Fnew-patients%2Four-philosophy&amp;dt=Our%20Philosophy%20-%20Chinatown%20New%20York%2C%20NY%3A%20Centre%20Dental&amp;vp=1349x586&amp;sr=1366x768&amp;ua=UA-87438114-49&amp;uac=41724933.1532408828&amp;cb=1532409624370&amp;stv=33"></script><script type="text/javascript" async="" src="//assets.pinterest.com/js/pinit_main.js?0.02810163746854588"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name="google-site-verification" content="RXUX6EOVy7YRONh7mCfq5I-eYi4UP2-gxsjUtQaAnh0">
    <meta property="og:url" content="https://www.centredent.com/practice_content_page_child/new-patients/our-philosophy">
	  <meta property="og:title" content="Our Philosophy">
    <link rel="canonical" href="https://www.centredent.com/contents/new-patients/our-philosophy">
    <link rel="shortcut icon" href="https://sa1s3optim.patientpop.com/assets/images/patientpop/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://sa1s3optim.patientpop.com/assets/images/patientpop/favicon.ico" type="image/x-icon">
    <title>Office Hours - Chinatown New York, NY: Centre Dental</title>
    <meta name="description" content="Trusted General &amp; Cosmetic Dentistry serving Chinatown New York, NY. Contact us at 212-925-7066 or visit us at 139 Centre Street, Suite 306, New York, NY 10013: Centre Dental">
		<link href="css/normalize.css" rel="stylesheet">
		<link href="css/subpages.css" rel="stylesheet" type="text/css"/>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo js_path; ?>jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="<?php echo js_path; ?>init.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				var currMonthTplId		=	'month_tpl_<?php echo $currMonthName?>';
				var currMonthTplTabId	=	'month_tpl_tab_<?php echo $currMonthName?>';
				
				$(".officeHoursTpls").hide();
				$("#" + currMonthTplId).show();
				
				$(".officeHoursTab").click(function() {
					$(".officeHoursTpls").hide();
					
		//  		alert($(this).attr('id'));
		//			alert("#" + $(this).attr('id').replace('_tab', ''));
					$("#" + $(this).attr('id').replace('_tab', '')).show();
					$(".officeHoursTab").removeClass('current');
					$("#" + $(this).attr('id')).addClass('current');
				}); 
			});
		</script>
		<?php if ('eng' == $currLang) { ?>
		<style type="text/css">
		#wrapper .contents .officehours .calendar .month{ border:1px solid #ccc;width:100%; margin:20px auto;}
		</style>
		<?php } else { ?>
		<style type="text/css">
		#wrapper .contents .officehours .calendar .month{ border:1px solid #ccc;width:99%; margin:20px auto;}
		</style>
		<?php } ?>
</head>

<body class="ATOMIC" id="wrapper">
  <header class="header header-1  ">
  <div class="wrap a-backgroundcolor0">
    <div class="nav-header a-maxwidth1120px">

      <div class="cta fill-3">
        <a href="tel:2129257066" class="header-cta cta-call-us a-backgroundcolor1 a-color3 a-bordercolor3">
          <span class="mm-phone-number">212-925-7066</span>
        </a>
                  
        <a class="header-cta cta-book-online ppop_bookonline_action a-backgroundcolor1 a-color3 a-bordercolor3" href="https://www.centredent.com/"><span>Request Appointment</span></a>
        
        <a href="http://www.drshi.com/index.php?lang=chi" class="header-custom-cta a-backgroundcolor1 a-color3 a-bordercolor3"><span>中文</span></a>
      </div>

      <div class="brand">      
                  <a href="https://www.centredent.com/" class="logo">
                          <img class="a-height56px a-margintopmarginbottom10px a-marginleft10px" src="https://sa1s3optim.patientpop.com/assets/images/provider/photos/1774718.png">
                      </a>
        
        <button class="nav-toggle" data-target="nav-list">
          <span class="a-backgroundcolor1"></span>
          <span class="a-backgroundcolor1"></span>
          <span class="a-backgroundcolor1"></span>
        </button>

      </div>

    </div>

  </div>

  <nav class="nav1 a-backgroundcolor3">
    <ul class="nav-list nav-hb a-bordercolor1 a-maxwidth1120px">
      <li class="a-backgroundcolor3">
        <a id="home" href="https://www.centredent.com/" class="clickable" target="_self">
          <span class=" a-color0">Home</span>
        </a>
      </li>
                  <li class="drop">
        <a id="about" href="https://www.centredent.com/about" class="clickable" target="_self">
          <span class=" a-color0">About Practice</span>
        </a>
        <i id="drop-minus-125576" class="fa fa-minus a-color0" data-partner="#drop-plus-125576" data-drop=".dropdownContain"></i>
        <i id="drop-plus-125576" class="fa fa-plus active a-color0" data-partner="#drop-minus-125576" data-drop=".dropdownContain"></i>
        <div class="dropdownContain a-backgroundcolor0">
          <div class="dropOut">
            <ul>
                                                                              <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/contents/about/meet-the-team" class=" child-link clickable" id="About Practice_Meet The Team" target="">
                      <span class=" a-color3">Meet The Team</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="http://www.drshi.com/officehours.php?lang=eng" class=" child-link clickable" id="About Practice_Office Tour" target="">
                      <span class=" a-color3">Office Tour</span>
                    </a>
                  </li>
                                                        </ul>
          </div>
        </div>
      </li>
                  <li class="a-backgroundcolor3">
        <a id="providers" href="https://www.centredent.com/provider" class="clickable" target="_self">
          <span class=" a-color0">Providers</span>
        </a>
      </li>
                  <li class="drop">
        <a id="services" href="https://www.centredent.com/services" class="clickable" target="_self">
          <span class=" a-color0">Services</span>
        </a>
        <i id="drop-minus-125575" class="fa fa-minus a-color0" data-partner="#drop-plus-125575" data-drop=".dropdownContain"></i>
        <i id="drop-plus-125575" class="fa fa-plus active a-color0" data-partner="#drop-minus-125575" data-drop=".dropdownContain"></i>
        <div class="dropdownContain a-backgroundcolor0">
          <div class="dropOut">
            <ul>
                                                                              <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/services/root-canal" class=" child-link clickable" id="Services_Root Canal " target="_self">
                      <span class=" a-color3">Root Canal </span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/services/dental-implants" class=" child-link clickable" id="Services_Dental Implants" target="_self">
                      <span class=" a-color3">Dental Implants</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/services/full-mouth-reconstruction" class=" child-link clickable" id="Services_Full Mouth Reconstruction" target="_self">
                      <span class=" a-color3">Full Mouth Reconstruction</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/services/teeth-whitening" class=" child-link clickable" id="Services_Teeth Whitening" target="_self">
                      <span class=" a-color3">Teeth Whitening</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/services/veneers" class=" child-link clickable" id="Services_Veneers" target="_self">
                      <span class=" a-color3">Veneers</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/services/invisalign" class=" child-link clickable" id="Services_Invisalign" target="_self">
                      <span class=" a-color3">Invisalign</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/services/wisdom-teeth" class=" child-link clickable" id="Services_Wisdom Teeth" target="_self">
                      <span class=" a-color3">Wisdom Teeth</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/services/pinhole-gum-rejuvenation" class=" child-link clickable" id="Services_Pinhole Gum Rejuvenation" target="_self">
                      <span class=" a-color3">Pinhole Gum Rejuvenation</span>
                    </a>
                  </li>
                                                        </ul>
          </div>
        </div>
      </li>
                    <li class="drop">
        <a id="new-patients" href="javascript:void(0);" class="" target="">
          <span class=" a-color0">New Patients</span>
        </a>
        <i id="drop-minus-128849" class="fa fa-minus a-color0" data-partner="#drop-plus-128849" data-drop=".dropdownContain"></i>
        <i id="drop-plus-128849" class="fa fa-plus active a-color0" data-partner="#drop-minus-128849" data-drop=".dropdownContain"></i>
        <div class="dropdownContain a-backgroundcolor0">
          <div class="dropOut">
            <ul>
                                                                              <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/contents/new-patients/patient-forms" class=" child-link clickable" id="New Patients_Patient Forms" target="">
                      <span class=" a-color3">Patient Forms</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/contents/new-patients/our-philosophy" class=" child-link clickable" id="New Patients_Our Philosophy" target="">
                      <span class=" a-color3">Our Philosophy</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="javascript:void(0);" class=" child-link " id="New Patients_First Visit" target="">
                      <span class=" a-color3">First Visit</span>
                    </a>
                  </li>
                                                        </ul>
          </div>
        </div>
      </li>
                  <li class="a-backgroundcolor3">
        <a id="office-hours" href="http://www.drshi.com/officehours.php?lang=eng" class="clickable" target="_blank">
          <span class=" a-color0">Office Hours</span>
        </a>
      </li>
                  <li class="drop">
        <a id="patient-education" href="javascript:void(0);" class="" target="">
          <span class=" a-color0">Patient Education</span>
        </a>
        <i id="drop-minus-128850" class="fa fa-minus a-color0" data-partner="#drop-plus-128850" data-drop=".dropdownContain"></i>
        <i id="drop-plus-128850" class="fa fa-plus active a-color0" data-partner="#drop-minus-128850" data-drop=".dropdownContain"></i>
        <div class="dropdownContain a-backgroundcolor0">
          <div class="dropOut">
            <ul>
                                                                              <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/contents/patient-education/tooth-extractions" class=" child-link clickable" id="Patient Education_Tooth Extractions" target="">
                      <span class=" a-color3">Tooth Extractions</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/contents/patient-education/bone-graftimplant-surgery" class=" child-link clickable" id="Patient Education_Bone Graft/Implant Surgery" target="">
                      <span class=" a-color3">Bone Graft/Implant Surgery</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/contents/patient-education/root-canal-therapy" class=" child-link clickable" id="Patient Education_Root Canal Therapy" target="">
                      <span class=" a-color3">Root Canal Therapy</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/contents/patient-education/pinhole-gum-rejuvenation-pst" class=" child-link clickable" id="Patient Education_Pinhole Gum Rejuvenation (PST)" target="">
                      <span class=" a-color3">Pinhole Gum Rejuvenation (PST)</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/contents/patient-education/other-dental-procedures" class=" child-link clickable" id="Patient Education_Other Dental Procedures" target="">
                      <span class=" a-color3">Other Dental Procedures</span>
                    </a>
                  </li>
                                                        </ul>
          </div>
        </div>
      </li>
                  <li class="a-backgroundcolor3">
        <a id="testimonials" href="https://www.centredent.com/testimonials" class="clickable" target="_self">
          <span class=" a-color0">Testimonials</span>
        </a>
      </li>
                  <li class="a-backgroundcolor3">
        <a id="contact" href="https://www.centredent.com/contactus" class="clickable" target="_self">
          <span class=" a-color0">Contact</span>
        </a>
      </li>
          </ul>
  </nav>

</header>


                <section class="herosub herosub-1 a-backgroundcolor0">
    <div class="hero ">
    <div id="hero-cloak" class="cloak a-backgroundcolor2
                a-opacity2"></div>
    <div id="hero-titles" class="hero-titles a-maxwidth940px
                a-paddingtop60px
                a-paddingbottom60px">
      <div id="hero-titles-inner" class="hero-titles-inner">
        <h1 class="main-text 
                    primary-font                              text-shadow                    a-fontsize26px
                   a-textaligncenter
                   a-color3" id="sub-primary-title">Office Hours</h1>
              </div>
    </div>
  </div>
</section>
                <section class="content-page-content pinstripe">
        <div class="row">

          <div class="span12">
  <div class="breadcrumb">
          <a href="http://www.centredent.com">
        Centre Dental
      </a>
              <i class="fa fa-angle-right"></i>
                
              
                
              
                <a href="http://www.drshi.com/officehours.php?lang=eng">
        Office Hours
      </a>
            </div>
</div>
          <div class="span12">
            
            <div class="content-body">


                    <div class="middle">
                            <div class="contents">
                                <div class="contents-part">
                                  <div class="container">
                                  <div class="officehours">
                                    <div class="hours">
                                        <ul class="tags">	
                                          <!--<li><a class="current" href="#">July</a></li>
                                        <li><a href="#">August</a></li>
                                        <li><a href="#">September</a></li>
                                        <li><a href="#">October</a></li>
                                        <li><a href="#">November</a></li>-->
                                            <?php
                                                foreach ($monthNameList as $v) {
                                                                    list(, $monthVal)	=	explode('-', $v);
                                                    $monthName	=	date("F", mktime(0, 0, 0, $monthVal, 10));
                                                    $tabIdName	=	'month_tpl_tab_' . $monthName;
                                                    if ($currMonthName == $monthName) {
                                                        echo '<li><a class="current officeHoursTab" id="' . $tabIdName . '">' . Proj_getTranslatedText($currLang, $monthName) . '</a></li>';
                                                    }
                                                    else {
                                                        echo '<li><a class="officeHoursTab" id="' . $tabIdName . '">' . Proj_getTranslatedText($currLang, $monthName) . '</a></li>';
                                                    }
                                                }
                                        ?>
                                      </ul>
                                      <div class="clear"></div>
                                                        <?php
                                              foreach ($monthNameList as $v) {
                                                                list($yearNo, $monthVal)	=	explode('-', $v);
                                                  $monthName	=	date("F", mktime(0, 0, 0, $monthVal, 10));
                                          echo '<div class="calendar officeHoursTpls" id="month_tpl_' . $monthName . '">';
                                          echo '<h4>' . $yearNo . ' ' . Proj_getTranslatedText($currLang, $monthName) . ' ' .  Proj_getTranslatedText($currLang, 'Office Hours') . '</h4>';
                                                                echo Proj_drawCalendar($monthVal, $yearNo, $calendarData["$monthVal"], $currLang);
                                                                echo '</div><div class="clear"></div>';
                                              }
                                      ?>
                                    </div>
                                  </div>
                                  <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>




                <div class="clear"></div>
    
            </div>
          </div>
        </div>
      </section>

                <footer>
  <div class="row">
    <div class="span12">
      <ul>
        <li>
                                    <div class="copy"><p><span class="nofollow" data-element="26636f70793b20436f707972696768742032303138203c696d67207372633d222f70636f70794032782e706e672220616c743d22223e"></span></p></div>
                              </li>
        <li>
          <a href="https://www.centredent.com/your-privacy" rel="nofollow">Privacy Policy</a>
        </li>
        <li>
          <a href="https://www.centredent.com/our-terms" rel="nofollow">Terms &amp; Conditions</a>
        </li>
                  <li><a href="https://www.centredent.com/contactus">Contact Us</a></li>
      </ul>
    </div>

                  <div class="span12">
          <div class="nap">
            <div class="fn org"> Centre Dental, New York, NY</div>
            Phone (appointments): <span class="tel mm-phone-number" content="2129257066">212-925-7066</span>
                          <span class="divider">|</span>
              Phone (general inquiries): (212) 925-7066
                        <div class="adr">
              Address: <span class="street-address">139 Centre Street, Suite 306, </span>
              <span class="locality">New York</span>, <span class="region">NY</span> <span>10013</span>
            </div>
          </div>
        </div>
              <div class="span12">
          </div>
          <div class="span12 powered-by"><p><span class="nofollow" data-element="3c696d67207372633d222f7062704032782e706e672220616c743d22223e"></span></p></div>
      </div>
</footer>
                                <script async="" src="//www.google-analytics.com/analytics.js"></script><script src="https://legacy.patientpop.com/widgets/bookonline/b673eb8892ba58309eb9b81428a5a5495904ae3e"></script><script type="application/ld+json">
    {"@context":"http:\/\/schema.org","@type":"Dentist","@id":"http:\/\/www.centredent.com\/b2a7d5934acd96f72ddd59958d5f50ce93d5de43","url":"http:\/\/www.centredent.com","brand":{"name":["Centre Dental"]},"name":["John Shi, DDS","Wen Huang DMD, DDS"],"image":"https:\/\/sa1s3optim.patientpop.com\/assets\/images\/provider\/photos\/1774783.png","sameAs":[],"potentialAction":{"@type":"ReserveAction","target":{"@type":"EntryPoint","urlTemplate":"http:\/\/www.centredent.com\/schedule?utm_medium=markup","inLanguage":"en-US","actionPlatform":["http:\/\/schema.org\/DesktopWebPlatform","http:\/\/schema.org\/IOSPlatform","http:\/\/schema.org\/AndroidPlatform"]},"result":{"@type":"Reservation","name":"Request Appointment"}},"telephone":"+1 212-925-7066","openingHours":["SUN 10:00:00-19:00:00","MON 10:00:00-19:00:00","TUE 10:00:00-19:00:00","WED 10:00:00-19:00:00","THU 10:00:00-19:00:00","FRI 10:00:00-19:00:00","SAT 10:00:00-19:00:00"],"contactPoint":[{"@type":"ContactPoint","telephone":"+1 212-925-7066","contactType":"reservations"},{"@type":"ContactPoint","telephone":"+1 212-925-7066","contactType":"customer service"}],"address":{"@type":"PostalAddress","streetAddress":"139 Centre Street Suite 306","addressLocality":"New York","addressRegion":"NY","postalCode":"10013","addressCountry":"USA"}}
</script>
      
    <div class="yt-player">
      <div class="inner">
        <button type="button" class="close-yt-player">×</button>
        <iframe width="680" height="377" src=""></iframe>
      </div>
    </div>

    <script>
      var recaptcha_public_key = '6LddTCATAAAAAM-a7vQeVo-dsj-65gNlSKmin7F3';
    </script>

     <script src="https://sa1co.patientpop.com/assetsV/practice.application.js/v/b673eb8892ba58309eb9b81428a5a5495904ae3e" defer="1" async="1"></script>

     
    <script>
      window.onload = function () {
          $('.nav-toggle').click(function(){
  $(this).toggleClass('expanded');
  var nav = '.' + $(this).data('target');
  $(nav).slideToggle('fast');
});

$('.nav-slider').click(function(){
  $(this).toggleClass('expanded');
  $('body').toggleClass('nav-open');
  var nav = '.' + $(this).data('target');
  $(nav).toggleClass('expanded');
});
$('.header-backdrop').click(function(){
  $('.nav-slider').click();
});


                // JS Hero 2

//console.warn('TODO: Move $.animateTransform to main library');
(function($){
  $.fn.animateTransform = function(/* [start,] end [, duration] [, callback] */){
    var start = null, end = null, duration = 400, callback = function(){};
    for(var i=0; i<arguments.length; i++){
      if(typeof(arguments[i]) == 'string'){
        if(!start) start = arguments[i];
        else end = arguments[i];
      } else if(typeof(arguments[i]) == 'number'){
        duration = arguments[i];
      } else if(typeof(arguments[i]) == 'function'){
        callback = arguments[i];
      }
    }
    if(start && !end){
      end = start;
      start = null;
    }
    if(!end) return;
    if(start){
      this.css("transform", start);
    }
    if(duration < 16) duration = 16;
    var transitionB4 = this.css('transition');
    this.css('transition', 'transform ' + duration + 'ms');
    this.css('transform', end);
    var $el = this;
    setTimeout(function(){
      $el.css('transition', transitionB4 || '');
      $el.css('transform', end);
      callback();
    }, duration);
  };
})(jQuery);

(function($){
  $.fn.swipeHandler = function(options) {
    var $container = this;
    var swipeThreshold = options.swipeThreshold || null;
    var onSwipeLeft = options.onSwipeLeft || null;
    var onSwipeRight = options.onSwipeRight || null;
    $container.on('touchstart', function(event) {
      var previousSwipeX = event.originalEvent.touches[0].clientX;
      $container.on('touchend', removeSwipeListeners);
      $container.on('touchcancel', removeSwipeListeners);
      $container.on('touchmove', function(event) {
        currentSwipeX = event.originalEvent.touches[0].clientX;
        if(currentSwipeX-swipeThreshold > previousSwipeX){
          removeSwipeListeners();
          if ( onSwipeRight ){
            event.preventDefault();
            onSwipeRight(event);
          }
        }else if(currentSwipeX+swipeThreshold < previousSwipeX){
          removeSwipeListeners();
          if ( onSwipeLeft ){
            event.preventDefault();
            onSwipeLeft(event);
          }
        }
        previousSwipeX = currentSwipeX;
      });
    });
    function removeSwipeListeners() {
      $container.off('touchmove');
      $container.off('touchend');
      $container.off('touchcancel');
    }
  };
})(jQuery);


//console.warn('TODO: Move $.smartresize to main library');
(function($,sr){
  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;
      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };
          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);
          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };
})(jQuery,'smartresize');


(function($){
  $.fn.heroCarousel = function( options ){

    var settings = $.extend({
      transitionType: 'fade-over',
      transitionSpeedFactor: 1,
      transitionDelay: 4000,
    }, options);

    var $container    = $(this);
    var $list         = $(this).find('ul.carousel-items').eq(0);
    var $slides       = $list.find('li.carousel-item');
    var $navBar       = $container.find('ol.carousel-nav');
    var totalSlides   = $slides.length;
    var sliding       = false;
    var currentSlide  = settings.openingSlideIndex > -1 ? settings.openingSlideIndex : 0;
    var traverse      = null;
    var defaultColorClass = 'a-'+$navBar.data('default-color-class');
    var activeColorClass  = 'a-'+$navBar.data('active-color-class');
      
    function slide(isRewinding) {
      if(!sliding){
        $container.find('iframe[src*="www.youtube.com/embed/"]').each(function(i) {
          this.contentWindow.postMessage( JSON.stringify({ event:'command', func: 'pauseVideo', args:'' }), '*');
        });
        $container.find('ol li.bullet')
          .removeClass('active')
          .removeClass(activeColorClass)
          .addClass(defaultColorClass);
        $container.find('ol li.bullet').eq(currentSlide)
          .addClass('active')
          .removeClass(defaultColorClass)
          .addClass(activeColorClass);
        sliding = true;
        setCurrentBgUrl( $( $container.find('li.carousel-item').eq(currentSlide) ) );
        preloadNextImage(isRewinding);
        switch(settings.transitionType) {
          case 'slide': doTransitionSlide(false, isRewinding); break;
          case 'slide-over': doTransitionSlide(true, isRewinding); break;
          case 'slide-reveal': doTransitionSlideReveal(false, isRewinding); break;
          case 'slide-over-reveal':
          case 'slide-reveal-over': doTransitionSlideReveal(true, isRewinding); break;
          case 'fade-reveal': doTransitionFadeReveal(); break;
          case 'fade-over': doTransitionFadeOver(); break;
          case 'fade' : 
          default: doTransitionFade(); break;
        }
      }
    }

    function preloadNextImage(isRewinding) {
      var slide;
      if ( isRewinding ) {
        slide = (currentSlide-1+totalSlides) % totalSlides;
      } else {
        slide = (currentSlide+1) % totalSlides;
      }
      setCurrentBgUrl( $( $container.find('li.carousel-item').eq(slide) ) );
    }

    function setCurrentBgUrl($el) {
      var bgUrl = $el.css('background-image');
      bgUrl = bgUrl.replace('url(','').replace(')','').replace(/\"/gi, '');
      var dataSrc = $el.data('src');
      if ( dataSrc != bgUrl ) {
        $el.css( 'background-image', 'url("'+dataSrc+'")');
      }
    }

    function doTransitionFade() {
      var speed = 500 * settings.transitionSpeedFactor;
      $slides.removeClass('active')
      $slides.eq(currentSlide).addClass('active')  
      $list.animate({
        opacity : 0
      }, speed,function(){
        $slides.hide();
        $slides.eq(currentSlide).show();    
        $list.animate({opacity : 1}, speed, function(){
          $container.find('li.carousel-item').eq(currentSlide).find('.overlay').slideDown();
          afterTransition();
        });
      });
    }
    
    function doTransitionFadeOver() {
      var speed = 500 * settings.transitionSpeedFactor;
      $slides.removeClass('active');
      $slides.eq(currentSlide).addClass('active');
      $slides.css('zIndex', 1);
      $slides.eq(currentSlide).css({'z-index': 2, opacity: 0}).show().animate({opacity: 1}, speed, function(){
        $slides.not('.active').hide();
        afterTransition();
      });
    }

    function doTransitionSlideReveal(isOver, isRewinding) {
      var slideSpeed = window.innerWidth / 2.5 * settings.transitionSpeedFactor; // adjust speed per size screen
      if ( !isOver ) {
        $list.find('li.carousel-item.active').animateTransform('translate('+(isRewinding?100:-100)+'%)', slideSpeed);
      }
      var speed = 500 * settings.transitionSpeedFactor;
      $slides.removeClass('active');
      $slides.eq(currentSlide).addClass('active');
      $slides.css('zIndex', 1);
      var $new = $slides.eq(currentSlide);
      $new.find('.reveal-element').each(function(index){ $(this).data('opacity', $(this).css('opacity')).css('cssText', 'transition:none; opacity:0 !important;'); });
      $new.css({ zIndex: 2, opacity: 1, transform: 'translate('+(isRewinding?-100:100)+'%)'}).show().animateTransform('translate(0%)', slideSpeed, function(){
        $new.find('.reveal-element').each(function(index){ 
          $(this).css('cssText', 'transition:opacity '+speed+'ms linear '+(index*speed*.7)+'ms; opacity:'+$(this).data('opacity')+' !important;'); 
        });
        var $old = $slides.not('.active');
        $old.hide();
        afterTransition();
      });
    }
    
    function doTransitionFadeReveal() {
      var speed = 500 * settings.transitionSpeedFactor;
      $slides.removeClass('active');
      $slides.eq(currentSlide).addClass('active');
      $slides.css('zIndex', 1);
      var $new = $slides.eq(currentSlide);
      $new.find('.reveal-element').each(function(index){ $(this).data('opacity', $(this).css('opacity')).css('cssText', 'transition:none; opacity:0 !important;'); });
      $new.css({ zIndex: 2, opacity: 0}).show().animate({opacity: 1}, speed, function(){
        $new.find('.reveal-element').each(function(index){ 
          $(this).css('cssText', 'transition:opacity '+speed+'ms linear '+(index*speed*.7)+'ms; opacity:'+$(this).data('opacity')+' !important;'); 
        });
        var $old = $slides.not('.active');
        $old.hide();
        afterTransition();
      });
    }

    function doTransitionSlide(isOver, isRewinding) {
      var speed = window.innerWidth / 2.5 * settings.transitionSpeedFactor; // adjust speed per size screen
      $slides.css('zIndex', 1);
      if ( !isOver ) {
        $list.find('li.carousel-item.active').animateTransform('translate('+(isRewinding?100:-100)+'%)', speed);
      }
      $slides.removeClass('active');
      $slides.eq(currentSlide).addClass('active');
      $slides.eq(currentSlide).css({ zIndex: 2, opacity: 1, transform: 'translate('+(isRewinding?-100:100)+'%)'}).show().animateTransform('translate(0%)', speed, function(){
        $slides.not('.active').hide();
        afterTransition();
      });
    }

    function afterTransition () {
      sliding = false;
      if($container.find('li.carousel-item').eq(currentSlide).find('iframe').length > 0){
        window.clearInterval(traverse);
      }
    }

    function slideNext() {
      if(!sliding){
        currentSlide = ++currentSlide % totalSlides;
        slide(false);
      }
    }

    function slidePrevious() {
      if(!sliding){
        currentSlide = (--currentSlide+totalSlides) % totalSlides;
        slide(true);
      }
    }

    function handleResize(){
      var height = 0;
      $slides.each(function(){
        height = Math.max(height, $(this).height())
      })
      $container.outerHeight(height);
      $slides.each(function() {
        $(this).outerHeight( height );
        $(this).find('.margin-wrapper').outerHeight( height );
      });
    }

    function resetTransitionInterval() {
      window.clearInterval(traverse);
      traverse = setInterval(slideNext, settings.transitionDelay);
    }

    function initialize() { 

      setCurrentBgUrl( $( $container.find('li.carousel-item').eq(currentSlide) ) );

      var height = 0;
      $slides.each(function(){
        height = Math.max(height, $(this).height())
      })
      $container.animate( { 'height': height + 'px' }, 500 );
      $slides.each(function() {
        $(this).outerHeight( height );
        $(this).find('.margin-wrapper').outerHeight( height );
      });

      // change slides CSS properties to enable animations
      $slides.each(function(){
        $(this).css({
          position: 'absolute',
          overflow: 'hidden',
          top: 0,
          left: 0,
          width: '100%',
        }).outerHeight(height);
      });

      $list.addClass('transition-'+settings.transitionType)

      
      // preload next image
      preloadNextImage(false);

      // bind navigation events:
      if($container.find('li.bullet').length > 1){
        $container.find('li.bullet').eq(currentSlide)
          .addClass('active')
          .removeClass(defaultColorClass)
          .addClass(activeColorClass);
        $container.on('click', 'ol li.bullet', function() {
          currentSlide=$container.find('ol li.bullet').index(this);
          var previousIndex = $container.find('li.carousel-item.active').index();
          if(!sliding && currentSlide != previousIndex){
            slide(currentSlide < previousIndex);
          }
        });
      }

      /* HIDE ALL BUT FIRST ONE */
      $container.find('li.carousel-item:gt('+currentSlide+')').hide();

      $container.on('click', '.carousel-left-btn', slidePrevious);
      $container.on('click', '.carousel-right-btn', slideNext);

      $container.on('mouseenter',function(){
        window.clearInterval(traverse);
      });
      $container.on('mouseleave',function(){
        resetTransitionInterval()
      });
      resetTransitionInterval();

      /* SHOW FIRST ONE */
      $list.find('li.carousel-item').eq(currentSlide).show().addClass('active');

      $container.swipeHandler({
        swipeThreshold: 20,
        onSwipeLeft: slideNext,
        onSwipeRight: slidePrevious
      });

      $(window).smartresize(handleResize);

    }
    
    // exit if no more than one slide
    if ( totalSlides > 1 ) initialize()
   
  }
})(jQuery);

$(function(){

  var openingSlideIndex = -1;
  var chunks = window.location.href.split('?')
  if ( chunks.length > 1 ) {
    var vars = chunks[1].split('&')
    for ( var i=0,l=vars.length; i<l; i++ ) {
      // set slide lock flag
      if ( vars[i].substr(0, 10) == 'slideLock=' ) {
        openingSlideIndex = parseInt(vars[i].split('=')[1])
      }
    }
  }
  
  var $carousel = $('.carousel');
  if ( $carousel && $('ul.carousel-items li.carousel-item').length ) {
    var options = {
      transitionType: $carousel.data('transition-type'),
      transitionSpeedFactor: $carousel.data('transition-speed-factor'),
      transitionDelay: parseFloat($carousel.data('transition-delay')) * 1000,
    }
    if ( openingSlideIndex > -1 ) {
      options.openingSlideIndex = openingSlideIndex;
      options.transitionSpeedFactor = 1
      options.transitionDelay = 100000000
    }
    $carousel.heroCarousel(options);
  }

});

        pop.csrf = '4lhwQhgBAavNPwDfAOLrtJ3gKTN8KOQ2NXRIpET0';
                  (function(d){
  var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
  p.type = 'text/javascript';
  p.async = true;
  p.src = '//assets.pinterest.com/js/pinit.js';
  f.parentNode.insertBefore(p, f);
  }(document));

  $( document ).ready(function() {
  $('section.content-page-content ol, section.content-page-content ul').addClass('part-of-content-page');
  });

        pop.googleMapsApiKey = "AIzaSyB9d9ajLaVDcBiRGxav2Eq46SqVI6zWms4";

        
        PPoppracticeId = 14094;
        (function(f,c,o,g,n,a,t){f[n]={'d': 1*new Date()};a=c.createElement(o),t=c.getElementsByTagName(o)[0];a.async=0;a.src=g;t.parentNode.insertBefore(a,t)})(window,document,'script','https://legacy.patientpop.com/widgets/bookonline/b673eb8892ba58309eb9b81428a5a5495904ae3e','PPop');

        if($("div[id^='recaptcha']").length) {
          (function (f, c, o, g, n, a, t) {
            f[n] = {'d': 1 * new Date()};
            a = c.createElement(o), t = c.getElementsByTagName(o)[0];
            a.async = 0;
            a.src = g;
            t.parentNode.insertBefore(a, t)
          })(window, document, 'script', 'https://www.google.com/recaptcha/api.js?onload=recaptchaCallback&render=explicit');
        }

              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-87438114-49', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
        };
            callTrackingEnabled = true;
    _stk = "e4a19193651babae78e8c6a6f7a79aed9e94dabe";
      </script>
   
 
<script src="https://d31y97ze264gaa.cloudfront.net/assets/st/js/st.js"></script><div id="pp_booking">
  <div class="modal hide" id="book-online" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="bookAppointmentLabel">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="bookAppointmentLabel">Calendar</h4>
        </div>

        <div class="modal-body loading">
          <i class="fa fa-cog fa-spin"></i> Loading calendar. Please wait.
        </div>

        <div class="modal-body selectdoc provider-blocks" style="display:none;"></div>
        <div id="calDocTemplate" style="display:none;">
          <div class="provider-block doc-modal">
            <div class="provider-pic" data-env="production">
              <img src="https://sa1s3.patientpop.com/assets/images/provider/photos/photo.jpg" width="180" height="180" alt="" class="doc-photo">
            </div>
            <div class="provider-info">
              <div class="provider-details">
                <h6></h6>
                <label class="spec"></label>
              </div>
            </div>
            <div class="doc-select-hover" data-docid=""></div>
            <a href="#" class="doc-select link primary-bg" data-docid="">select</a>
          </div>
        </div>

        <div class="modal-body selectloc location-blocks" style="display:none;"></div>
        <div id="calLocTemplate" style="display:none;">

          <div class="location-block loc-modal" data-locid="LOCID">
            <div class="location-name">LOCNAME</div>
            <div class="location-address">LOCADDRESS</div>
            <div class="location-map" id="location-LOCID" data-latitude="LOCLATITUDE" data-longitude="LOCLONGITUDE" data-address="LOCADDRESS" data-mapsize="bookonline"></div>
            <div class="call-to-actions primary-border">
              <button class="btn-book-online ppop_bookonline_action primary-bg primary-border">SELECT</button>
            </div>
          </div>
        </div>

        <div class="caldetails" style="display:none;">
          <form method="POST" action="https://legacy.patientpop.com/widgets/bookonline/template/b673eb8892ba58309eb9b81428a5a5495904ae3e" accept-charset="UTF-8" id="patient-form" data-toggle="validator" role="form"><input name="_token" type="hidden" value="VPlMvcSsKtaXjUMj9Uvzbaj6Iy398qjZWlcaITWD">
          <div class="modal-body">
            <input name="calendar_id" type="hidden" value="">
            <input id="block-id" name="calendar_block_id" type="hidden" value="">
            <input name="doctor_id" type="hidden" value="">
            <input name="location_id" type="hidden" value="">

            <div class="left">
              <div id="newpatient-section-1">
                <div class="label" id="newpatient-label">New Patient?</div>
                <ul>
                  <li><input id="new-patient-yes" name="newpatient" type="radio" value="yes">
                    <label for="new-patient-yes">Yes</label></li>
                  <li><input id="new-patient-no" name="newpatient" type="radio" value="no">
                    <label for="new-patient-no">No</label></li>
                </ul>
              </div>

              <div id="reason-section-1">
                <div class="label reason-label">Reason</div>
                <input class="txt-input" placeholder="e.g. annual checkup, follow-up, ..." maxlength="150" name="reason" type="text" value="">
                <select class="txt-input" name="reason"></select>
              </div>

              <div id="name-section-1">
                <div class="label" id="name-label">Name</div>
                <input class="txt-input inline-input" placeholder="First" name="firstname" type="text" value="">
                <input class="txt-input inline-input" placeholder="Last" name="lastname" type="text" value="">
              </div>

              <div id="email-section-1">
                <div class="label" id="email-label">Email address</div>
                <input class="txt-input" name="email" type="email" value="">
              </div>

              <div id="phone-section-1">
                <div class="label" id="phone-label">Mobile Phone Number</div>
                <input class="txt-input" id="appointment-phone" name="phone" type="tel" value="">
              </div>

              <div id="date_of_birth-section-1">
                <div class="label" id="date_of_birth-label">Date of Birth</div>
                <input class="txt-input" placeholder="mm/dd/yyyy" maxlength="10" name="date_of_birth" type="text" value="">
              </div>

              <div id="age_verification-section-1" class="age-verify">
                <div class="label" id="age_verification-label">Are you the patient?</div>
                <ul>
                  <li><input id="age_verification-yes" name="age_verification" type="radio" value="yes">
                    <label for="age_verification-yes">Yes</label></li>
                  <li><input id="age_verification-no" name="age_verification" type="radio" value="no">
                    <label for="age_verification-no">No</label></li>
                </ul>
              </div>

              <div id="sex-section-1">
                <div class="label" id="sex-label">Gender</div>
                <select class="txt-input" name="sex"><option value="" selected="selected">- Select One -</option><option value="undisclosed">Do not wish to disclose</option><option value="male">Male</option><option value="female">Female</option><option value="other">Other</option></select>
              </div>

              <div id="insurance_provider_id-section-1">
                <div class="label add-insurance-dropdown" id="insurance_provider_id-label">Insurance</div>
                <select class="txt-input add-info-insurance-select-dropdown" name="insurance_provider_id" style="display: none;"></select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 250px;" title=""><a class="chosen-single chosen-default" tabindex="-1"><span>Select an Option</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chosen-results"></ul></div></div>
              </div>

              <div id="insurance_id_number-section-1">
                <div class="label hide insurance-selected" id="insurance_id_number-label">Insurance ID #</div>
                <input class="txt-input hide insurance-selected" id="appointment-insurance-id-number" name="insurance_id_number" type="text" value="">
              </div>

              <div id="insurance_group_number-section-1">
                <div class="label hide insurance-selected" id="insurance_group_number-label">Insurance Group #</div>
                <input class="txt-input hide insurance-selected" id="appointment-insurance-group-number" name="insurance_group_number" type="text" value="">
              </div>

              <div id="insurance_phone-section-1">
                <div class="label hide insurance-selected" id="insurance_phone-label">Insurance Phone #</div>
                <input class="txt-input hide insurance-selected" id="appointment-insurance-phone-number" name="insurance_phone" type="text" value="">
              </div>
            </div>

            <div class="right">
              <div id="calendar-block">
                <button class="schedule-prev secondary-fg" type="button"><i class="fa fa-chevron-circle-left fa-2x"></i></button>
                <div id="grid-block"></div>
                <button class="schedule-next secondary-fg" type="button"><i class="fa fa-chevron-circle-right fa-2x"></i></button>
              </div>
              <div id="calendar-block-select-newpatient">
                <i class="fa fa-arrow-left"></i> Please select whether you are a new or existing patient.
              </div>
              <div id="calendar-block-select-reason">
                <i class="fa fa-arrow-left"></i> Please select an appointment reason.
              </div>
              <div id="calendar-block-loading">
                <i class="fa fa-cog fa-spin"></i> Loading calendar ...
              </div>
              <div id="calendar-select">
                <div class="label">Date - Time</div>
                <select id="calendar-time" class="form-control"></select>
              </div>
              <div id="terms_confirm">
                <input type="checkbox">
                I have read and agreed to the <a href="/your-privacy" target="_blank">Privacy Policy</a> and <a href="/our-terms" target="_blank">Terms of Use</a>
              </div>
            </div>

            <div class="clear-both"></div>
            <div class="book-online-message"></div>
          </div>

          <div class="modal-footer">
            <button class="btn-cancel" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn-book-now primary-bg primary-border" type="button">Book Now</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal hide" id="booked-additional-info" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="bookAppointmentLabel">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="bookedAppointmentLabel">Appointment Requested</h4>
        </div>

        <div class="additional-questions">
          <form method="POST" action="https://legacy.patientpop.com/widgets/appointment/update" accept-charset="UTF-8" id="patient-additional-info-form" data-toggle="validator" role="form"><input name="_token" type="hidden" value="VPlMvcSsKtaXjUMj9Uvzbaj6Iy398qjZWlcaITWD">
          <div class="modal-body">
            <p class="type-wrapper">Thank you for your appointment request. We will contact you shortly to confirm your request.<br>Please call our office <span class="apt-conf-phone">at </span> if you have any questions.</p>
            <span class="apt-conf-formlinks apt-conf-formlinks1"></span>
            <h4>Additional Information</h4>
            <input name="id" type="hidden" value="">

            <div class="left">
              <div id="name-section-2">
                <div class="label" id="name-label">Name</div>
                <input class="txt-input inline-input" placeholder="First" name="firstname" type="text" value="">
                <input class="txt-input inline-input" placeholder="Last" name="lastname" type="text" value="">
              </div>

              <div id="email-section-2">
                <div class="label" id="email-label">Email address</div>
                <input class="txt-input" name="email" type="email" value="">
              </div>

              <div id="phone-section-2">
                <div class="label" id="phone-label">Mobile Phone Number</div>
                <input class="txt-input" id="appointment-phone" name="phone" type="tel" value="">
              </div>

              <div id="reason-section-2">
                <div class="label reason-label">Reason</div>
                <input class="txt-input" placeholder="e.g. annual checkup, follow-up, ..." maxlength="150" name="reason" type="text" value="">
                <select class="txt-input" name="reason"></select>
              </div>

              <div id="date_of_birth-section-2">
                <div class="label" id="date_of_birth-label">Date of Birth</div>
                <input class="txt-input" placeholder="mm/dd/yyyy" maxlength="10" name="date_of_birth" type="text" value="">
              </div>

              <div id="sex-section-2">
                <div class="label" id="sex-label">Gender</div>
                <select class="txt-input" name="sex"><option value="" selected="selected">- Select One -</option><option value="undisclosed">Do not wish to disclose</option><option value="male">Male</option><option value="female">Female</option><option value="other">Other</option></select>
              </div>

              <div id="insurance_provider_id-section-2">
                <div class="label add-insurance-dropdown" id="insurance_provider_id-label">Insurance</div>
                <select class="txt-input add-info-insurance-select-dropdown" name="insurance_provider_id" style="display: none;"></select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 250px;" title=""><a class="chosen-single chosen-default" tabindex="-1"><span>Select an Option</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chosen-results"></ul></div></div>
              </div>

              <div id="insurance_id_number-section-2">
                <div class="label hide insurance-selected" id="insurance_id_number-label">Insurance ID #</div>
                <input class="txt-input hide insurance-selected" id="appointment-insurance-id-number" name="insurance_id_number" type="text" value="">
              </div>

              <div id="insurance_group_number-section-2">
                <div class="label hide insurance-selected" id="insurance_group_number-label">Insurance Group #</div>
                <input class="txt-input hide insurance-selected" id="appointment-insurance-group-number" name="insurance_group_number" type="text" value="">
              </div>

              <div id="insurance_phone-section-2">
                <div class="label hide insurance-selected" id="insurance_phone-label">Insurance Phone #</div>
                <input class="txt-input hide insurance-selected" id="appointment-insurance-phone-number" name="insurance_phone" type="text" value="">
              </div>

            </div>

            <div class="right">
              <div id="comment-section-2">
                <div class="label" id="comment-label">Comment</div>
                <textarea class="txtarea-input" placeholder="Is there anything you would like us to know before your appointment?" maxlength="250" rows="4" name="comment" cols="50"></textarea>
              </div>
            </div>

            <div class="clear-both"></div>
          </div>

          <div class="modal-footer">
            <button class="btn-skip" type="button" data-dismiss="modal">Skip</button>
            <button class="btn-book-additional-submit primary-bg primary-border" type="button">Submit</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="booked-online" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="appointmentRequestLabel">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="appointmentRequestLabel">Thank You</h4>
        </div>

        <div class="modal-body">
          <p class="type-wrapper">Thank you for your appointment request. We will contact you shortly to confirm your request. Please call our office <span class="apt-conf-phone">at </span> if you have any questions.</p>
          <span class="apt-conf-formlinks apt-conf-formlinks2"></span>
        </div>

      </div>
    </div>
  </div>

  <div class="modal" id="booking-screened" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="appointmentRequestLabel">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="appointmentRequestLabel">Please call our office</h4>
        </div>

        <div class="modal-body">
          <p>We unfortunately can't schedule this type of appointment online. Please call our office <span class="apt-conf-phone">at </span> to make your appointment.</p>
        </div>

      </div>
    </div>
  </div>

  <div class="modal" id="booking-error" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="errorLabel">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="errorLabel"></h4>
        </div>

        <div class="modal-body">
          <p></p>
        </div>

        <div class="modal-footer">
          <button class="btn-cancel" type="button" data-dismiss="modal">Cancel</button>
          <button type="button" id="reload-book-online" class="btn-reload-book-online ppop_bookonline_action primary-bg primary-border" style="display: none;">Book Online</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script id="PIN_1532409624383.f.callback[0]" type="text/javascript" charset="utf-8" src="https://log.pinterest.com/?guid=oyrW0cw0t_Xw&amp;tv=2018050702&amp;type=pidget&amp;sub=www&amp;button_count=0&amp;follow_count=0&amp;pin_count=0&amp;profile_count=0&amp;board_count=0&amp;section_count=0&amp;lang=en&amp;via=https%3A%2F%2Fwww.centredent.com%2Fcontents%2Fnew-patients%2Four-philosophy&amp;callback=PIN_1532409624383.f.callback[0]"></script></body></html>

<?php } ?>
<?php
  require_once('cfg.php');
  require_once('init.php');
  
  $currMonthVal = date('n');
  $currYearVal  = date('Y');
  
  $currMonthName  = date("F", mktime(0, 0, 0, $currMonthVal, 10));

  foreach (range($currMonthVal, $currMonthVal + 5) as $v) {
    $monthVal = date("n", mktime(0, 0, 0, $v, 10, $currYearVal));
    $yearVal  = date("Y", mktime(0, 0, 0, $v, 10, $currYearVal));
    
    $monthNameList[]  = $yearVal . '-' . $monthVal;
  }
  
  $res  = getDBData_noCond($dbh, 'office_hours');
  
  foreach ($res as $v) {
    $dayVal         = $v['day'];
    $yearVal        = $v['year'];
    $monthVal       = $v['month'];
    $statusVal      = $v['status'];
    $openingTimeVal = $v['opening_time'];
    $note = $v['note'];
    $note_chi = $v['note_chi'];
    
    if (in_array($yearVal . '-' . $monthVal, $monthNameList)) {
      $calendarData["$monthVal"]["$dayVal"]['status']       = $statusVal;
      $calendarData["$monthVal"]["$dayVal"]['opening_time'] = $openingTimeVal;
      $calendarData["$monthVal"]["$dayVal"]['note'] = $note;
      $calendarData["$monthVal"]["$dayVal"]['note_chi'] = $note_chi;
    }
  }
?>
<?php
  if ('chi' == $currLang) {
?>
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Trusted Affordable Dentist in New York ---Implant, Invisalign, Pinhole Gum Rejuvenation</title>
<link href="<?php echo css_path?>subpages.css" rel="stylesheet" type="text/css"/>
<?php
  if ('eng' == $currLang) {
?>
<link href="<?php echo css_path?>eng.css" rel="stylesheet" type="text/css"/>
<?php
  }
?>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo js_path; ?>jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo js_path; ?>init.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    var currMonthTplId    = 'month_tpl_<?php echo $currMonthName?>';
    var currMonthTplTabId = 'month_tpl_tab_<?php echo $currMonthName?>';
    
    $(".officeHoursTpls").hide();
    $("#" + currMonthTplId).show();
    
    $(".officeHoursTab").click(function() {
      $(".officeHoursTpls").hide();
      
//      alert($(this).attr('id'));
//      alert("#" + $(this).attr('id').replace('_tab', ''));
      $("#" + $(this).attr('id').replace('_tab', '')).show();
      $(".officeHoursTab").removeClass('current');
      $("#" + $(this).attr('id')).addClass('current');
    }); 

  });
  
</script>
<?php
  if ('eng' == $currLang) {
?>
<style type="text/css">
#wrapper .contents .officehours .calendar .month{ border:1px solid #ccc;width:100%; margin:20px auto;}
</style>
<?php
  }
  else {
?>
<style type="text/css">
#wrapper .contents .officehours .calendar .month{ border:1px solid #ccc;width:99%;margin:20px auto;}
</style>
<?php
  }
?>
</head>

<body>
<div id="wrapper">
  <?php
    require_once('_frontTpls/header.php');
  ?>
    <div class="middle">
        <div class="contents">
          <div class="banner">
            <div class="container">
              <img class="img-responsive"  src="<?php echo app_image_path . $bannerToUse?>" height="260" width="100%"/>
            </div>
            </div>
            <div class="breadcrumbs">
              <div class="container">
                <a href="<?php echo Proj_createUrl(homePage)?>"><?php echo Proj_getTranslatedText($currLang,'Home') ?></a>&nbsp; &gt; &nbsp;
                <a class="bold" href="<?php echo Proj_createUrl(officeHoursPage)?>"><?php echo Proj_getTranslatedText($currLang,'Office Hours') ?></a>
              </div>
            </div>
            <div class="contents-part">
              <div class="container">
              <div class="officehours">
                <div class="title">
                  <h2><?php echo Proj_getTranslatedText($currLang,'Office Hours') ?></h2>
                </div>
                <div class="hours">
                  <ul class="tags"> 
                    <!--<li><a class="current" href="#">July</a></li>
                    <li><a href="#">August</a></li>
                    <li><a href="#">September</a></li>
                    <li><a href="#">October</a></li>
                    <li><a href="#">November</a></li>-->
                    <?php
                      foreach ($monthNameList as $v) {
                        list(, $monthVal) = explode('-', $v);
                        $monthName  = date("F", mktime(0, 0, 0, $monthVal, 10));
                        $tabIdName  = 'month_tpl_tab_' . $monthName;
                        if ($currMonthName == $monthName) {
                          echo '<li><a class="current officeHoursTab" id="' . $tabIdName . '">' . Proj_getTranslatedText($currLang, $monthName) . '</a></li>';
                        }
                        else {
                          echo '<li><a class="officeHoursTab" id="' . $tabIdName . '">' . Proj_getTranslatedText($currLang, $monthName) . '</a></li>';
                        }
                      }
                    ?>
                  </ul>
                  <div class="clear"></div>
                  <?php
                    foreach ($monthNameList as $v) {
                      list($yearNo, $monthVal)  = explode('-', $v);
                      $monthName  = date("F", mktime(0, 0, 0, $monthVal, 10));
                      echo '<div class="calendar officeHoursTpls" id="month_tpl_' . $monthName . '">';
                      echo '<h4>' . $yearNo . ' ' . Proj_getTranslatedText($currLang, $monthName) . ' ' .  Proj_getTranslatedText($currLang, 'Office Hours') . '</h4>';
                      echo Proj_drawCalendar($monthVal, $yearNo, $calendarData["$monthVal"], $currLang);
                      echo '</div><div class="clear"></div>';
                    }
                  ?>
                </div>
              </div>
              <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <?php
      require_once('_frontTpls/footer.php');
    ?>
  </div>
<!--Begin SiteStats Code Sep 24, 2012-->
<STYLE TYPE='TEXT/CSS'>#ivanI13485349932744{position:absolute;visibility:hidden !important;} #TopWrap { display:none; }</STYLE>
<DIV CLASS=ivanC13485349932744 ID=ivanI13485349932744><A HREF='http://sitetracker.com' CLASS=ivanL_SI TARGET=_blank>FREE counter and Web statistics from sitetracker.com</A></DIV>
<script language='JavaScript' type='text/javascript' src='http://reforder.sitetracker.com/cgi-bin/sitestats.gif/script/13485349932744'></script>
<noscript><a href='http://reforder.sitetracker.com/cgi-bin/sitestats.gif/map'><img src='http://reforder.sitetracker.com/cgi-bin/sitestats.gif/img' alt=sitestats border=0></a></noscript>
<!--End SiteStats Code-->
</div>

</body>
</html>
<?php } else { ?>



<!--[if IE 9 ]><html class="ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="" lang="en"><!--<![endif]-->
<head>
    <script type="text/javascript" async="" src="https://st1.dialogtech.com/st/?_stk=e4a19193651babae78e8c6a6f7a79aed9e94dabe&amp;dr=https%3A%2F%2Fwww.centredent.com%2Fcontents%2Fnew-patients%2Fpatient-forms&amp;dl=https%3A%2F%2Fwww.centredent.com%2Fcontents%2Fnew-patients%2Four-philosophy&amp;dt=Our%20Philosophy%20-%20Chinatown%20New%20York%2C%20NY%3A%20Centre%20Dental&amp;vp=1349x586&amp;sr=1366x768&amp;ua=UA-87438114-49&amp;uac=41724933.1532408828&amp;cb=1532409624370&amp;stv=33"></script><script type="text/javascript" async="" src="//assets.pinterest.com/js/pinit_main.js?0.02810163746854588"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name="google-site-verification" content="RXUX6EOVy7YRONh7mCfq5I-eYi4UP2-gxsjUtQaAnh0">
    <meta property="og:url" content="https://www.centredent.com/practice_content_page_child/new-patients/our-philosophy">
    <meta property="og:title" content="Our Philosophy">
    <link rel="canonical" href="https://www.centredent.com/contents/new-patients/our-philosophy">
    <link rel="shortcut icon" href="https://sa1s3optim.patientpop.com/assets/images/patientpop/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://sa1s3optim.patientpop.com/assets/images/patientpop/favicon.ico" type="image/x-icon">
    <title>Office Hours - Chinatown New York, NY: Centre Dental</title>
    <meta name="description" content="Trusted General &amp; Cosmetic Dentistry serving Chinatown New York, NY. Contact us at 212-925-7066 or visit us at 139 Centre Street, Suite 306, New York, NY 10013: Centre Dental">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/subpages.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo js_path; ?>jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="<?php echo js_path; ?>init.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        var currMonthTplId    = 'month_tpl_<?php echo $currMonthName?>';
        var currMonthTplTabId = 'month_tpl_tab_<?php echo $currMonthName?>';
        
        $(".officeHoursTpls").hide();
        $("#" + currMonthTplId).show();
        
        $(".officeHoursTab").click(function() {
          $(".officeHoursTpls").hide();
          
    //      alert($(this).attr('id'));
    //      alert("#" + $(this).attr('id').replace('_tab', ''));
          $("#" + $(this).attr('id').replace('_tab', '')).show();
          $(".officeHoursTab").removeClass('current');
          $("#" + $(this).attr('id')).addClass('current');
        }); 
      });
    </script>
    <?php if ('eng' == $currLang) { ?>
    <style type="text/css">
    #wrapper .contents .officehours .calendar .month{ border:1px solid #ccc;width:100%; margin:20px auto;}
    </style>
    <?php } else { ?>
    <style type="text/css">
    #wrapper .contents .officehours .calendar .month{ border:1px solid #ccc;width:99%; margin:20px auto;}
    </style>
    <?php } ?>
</head>

<body class="ATOMIC" id="wrapper">
  <header class="header header-1  ">
  <div class="wrap a-backgroundcolor0">
    <div class="nav-header a-maxwidth1120px">

      <div class="cta fill-3">
        <a href="tel:2129257066" class="header-cta cta-call-us a-backgroundcolor1 a-color3 a-bordercolor3">
          <span class="mm-phone-number">212-925-7066</span>
        </a>
                  
        <a class="header-cta cta-book-online ppop_bookonline_action a-backgroundcolor1 a-color3 a-bordercolor3" href="https://www.centredent.com/"><span>Request Appointment</span></a>
        
        <a href="http://www.drshi.com/index.php?lang=chi" class="header-custom-cta a-backgroundcolor1 a-color3 a-bordercolor3"><span>中文</span></a>
      </div>

      <div class="brand">      
                  <a href="https://www.centredent.com/" class="logo">
                          <img class="a-height56px a-margintopmarginbottom10px a-marginleft10px" src="https://sa1s3optim.patientpop.com/assets/images/provider/photos/1774718.png">
                      </a>
        
        <button class="nav-toggle" data-target="nav-list">
          <span class="a-backgroundcolor1"></span>
          <span class="a-backgroundcolor1"></span>
          <span class="a-backgroundcolor1"></span>
        </button>

      </div>

    </div>

  </div>

  <nav class="nav1 a-backgroundcolor3">
    <ul class="nav-list nav-hb a-bordercolor1 a-maxwidth1120px">
      <li class="a-backgroundcolor3">
        <a id="home" href="https://www.centredent.com/" class="clickable" target="_self">
          <span class=" a-color0">Home</span>
        </a>
      </li>
                  <li class="drop">
        <a id="about" href="https://www.centredent.com/about" class="clickable" target="_self">
          <span class=" a-color0">About Practice</span>
        </a>
        <i id="drop-minus-125576" class="fa fa-minus a-color0" data-partner="#drop-plus-125576" data-drop=".dropdownContain"></i>
        <i id="drop-plus-125576" class="fa fa-plus active a-color0" data-partner="#drop-minus-125576" data-drop=".dropdownContain"></i>
        <div class="dropdownContain a-backgroundcolor0">
          <div class="dropOut">
            <ul>
                                                                              <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/contents/about/meet-the-team" class=" child-link clickable" id="About Practice_Meet The Team" target="">
                      <span class=" a-color3">Meet The Team</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="http://www.drshi.com/officehours.php?lang=eng" class=" child-link clickable" id="About Practice_Office Tour" target="">
                      <span class=" a-color3">Office Tour</span>
                    </a>
                  </li>
                                                        </ul>
          </div>
        </div>
      </li>
                  <li class="a-backgroundcolor3">
        <a id="providers" href="https://www.centredent.com/provider" class="clickable" target="_self">
          <span class=" a-color0">Providers</span>
        </a>
      </li>
                  <li class="drop">
        <a id="services" href="https://www.centredent.com/services" class="clickable" target="_self">
          <span class=" a-color0">Services</span>
        </a>
        <i id="drop-minus-125575" class="fa fa-minus a-color0" data-partner="#drop-plus-125575" data-drop=".dropdownContain"></i>
        <i id="drop-plus-125575" class="fa fa-plus active a-color0" data-partner="#drop-minus-125575" data-drop=".dropdownContain"></i>
        <div class="dropdownContain a-backgroundcolor0">
          <div class="dropOut">
            <ul>
                                                                              <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/services/root-canal" class=" child-link clickable" id="Services_Root Canal " target="_self">
                      <span class=" a-color3">Root Canal </span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/services/dental-implants" class=" child-link clickable" id="Services_Dental Implants" target="_self">
                      <span class=" a-color3">Dental Implants</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/services/full-mouth-reconstruction" class=" child-link clickable" id="Services_Full Mouth Reconstruction" target="_self">
                      <span class=" a-color3">Full Mouth Reconstruction</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/services/teeth-whitening" class=" child-link clickable" id="Services_Teeth Whitening" target="_self">
                      <span class=" a-color3">Teeth Whitening</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/services/veneers" class=" child-link clickable" id="Services_Veneers" target="_self">
                      <span class=" a-color3">Veneers</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/services/invisalign" class=" child-link clickable" id="Services_Invisalign" target="_self">
                      <span class=" a-color3">Invisalign</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/services/wisdom-teeth" class=" child-link clickable" id="Services_Wisdom Teeth" target="_self">
                      <span class=" a-color3">Wisdom Teeth</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/services/pinhole-gum-rejuvenation" class=" child-link clickable" id="Services_Pinhole Gum Rejuvenation" target="_self">
                      <span class=" a-color3">Pinhole Gum Rejuvenation</span>
                    </a>
                  </li>
                                                        </ul>
          </div>
        </div>
      </li>
                    <li class="drop">
        <a id="new-patients" href="javascript:void(0);" class="" target="">
          <span class=" a-color0">New Patients</span>
        </a>
        <i id="drop-minus-128849" class="fa fa-minus a-color0" data-partner="#drop-plus-128849" data-drop=".dropdownContain"></i>
        <i id="drop-plus-128849" class="fa fa-plus active a-color0" data-partner="#drop-minus-128849" data-drop=".dropdownContain"></i>
        <div class="dropdownContain a-backgroundcolor0">
          <div class="dropOut">
            <ul>
                                                                              <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/contents/new-patients/patient-forms" class=" child-link clickable" id="New Patients_Patient Forms" target="">
                      <span class=" a-color3">Patient Forms</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/contents/new-patients/our-philosophy" class=" child-link clickable" id="New Patients_Our Philosophy" target="">
                      <span class=" a-color3">Our Philosophy</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="javascript:void(0);" class=" child-link " id="New Patients_First Visit" target="">
                      <span class=" a-color3">First Visit</span>
                    </a>
                  </li>
                                                        </ul>
          </div>
        </div>
      </li>
                  <li class="a-backgroundcolor3">
        <a id="office-hours" href="http://www.drshi.com/officehours.php?lang=eng" class="clickable" target="_blank">
          <span class=" a-color0">Office Hours</span>
        </a>
      </li>
                  <li class="drop">
        <a id="patient-education" href="javascript:void(0);" class="" target="">
          <span class=" a-color0">Patient Education</span>
        </a>
        <i id="drop-minus-128850" class="fa fa-minus a-color0" data-partner="#drop-plus-128850" data-drop=".dropdownContain"></i>
        <i id="drop-plus-128850" class="fa fa-plus active a-color0" data-partner="#drop-minus-128850" data-drop=".dropdownContain"></i>
        <div class="dropdownContain a-backgroundcolor0">
          <div class="dropOut">
            <ul>
                                                                              <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/contents/patient-education/tooth-extractions" class=" child-link clickable" id="Patient Education_Tooth Extractions" target="">
                      <span class=" a-color3">Tooth Extractions</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/contents/patient-education/bone-graftimplant-surgery" class=" child-link clickable" id="Patient Education_Bone Graft/Implant Surgery" target="">
                      <span class=" a-color3">Bone Graft/Implant Surgery</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/contents/patient-education/root-canal-therapy" class=" child-link clickable" id="Patient Education_Root Canal Therapy" target="">
                      <span class=" a-color3">Root Canal Therapy</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/contents/patient-education/pinhole-gum-rejuvenation-pst" class=" child-link clickable" id="Patient Education_Pinhole Gum Rejuvenation (PST)" target="">
                      <span class=" a-color3">Pinhole Gum Rejuvenation (PST)</span>
                    </a>
                  </li>
                                                                                <li class="sideNav a-backgroundcolor0">
                    <a href="https://www.centredent.com/contents/patient-education/other-dental-procedures" class=" child-link clickable" id="Patient Education_Other Dental Procedures" target="">
                      <span class=" a-color3">Other Dental Procedures</span>
                    </a>
                  </li>
                                                        </ul>
          </div>
        </div>
      </li>
                  <li class="a-backgroundcolor3">
        <a id="testimonials" href="https://www.centredent.com/testimonials" class="clickable" target="_self">
          <span class=" a-color0">Testimonials</span>
        </a>
      </li>
                  <li class="a-backgroundcolor3">
        <a id="contact" href="https://www.centredent.com/contactus" class="clickable" target="_self">
          <span class=" a-color0">Contact</span>
        </a>
      </li>
          </ul>
  </nav>

</header>


                <section class="herosub herosub-1 a-backgroundcolor0">
    <div class="hero ">
    <div id="hero-cloak" class="cloak a-backgroundcolor2
                a-opacity2"></div>
    <div id="hero-titles" class="hero-titles a-maxwidth940px
                a-paddingtop60px
                a-paddingbottom60px">
      <div id="hero-titles-inner" class="hero-titles-inner">
        <h1 class="main-text 
                    primary-font                              text-shadow                    a-fontsize26px
                   a-textaligncenter
                   a-color3" id="sub-primary-title">Office Hours</h1>
              </div>
    </div>
  </div>
</section>
                <section class="content-page-content pinstripe">
        <div class="row">

          <div class="span12">
  <div class="breadcrumb">
          <a href="http://www.centredent.com">
        Centre Dental
      </a>
              <i class="fa fa-angle-right"></i>
                
              
                
              
                <a href="http://www.drshi.com/officehours.php?lang=eng">
        Office Hours
      </a>
            </div>
</div>
          <div class="span12">
            
            <div class="content-body">


                    <div class="middle">
                            <div class="contents">
                                <div class="contents-part">
                                  <div class="container">
                                  <div class="officehours">
                                    <div class="hours">
                                        <ul class="tags"> 
                                          <!--<li><a class="current" href="#">July</a></li>
                                        <li><a href="#">August</a></li>
                                        <li><a href="#">September</a></li>
                                        <li><a href="#">October</a></li>
                                        <li><a href="#">November</a></li>-->
                                            <?php
                                                foreach ($monthNameList as $v) {
                                                                    list(, $monthVal) = explode('-', $v);
                                                    $monthName  = date("F", mktime(0, 0, 0, $monthVal, 10));
                                                    $tabIdName  = 'month_tpl_tab_' . $monthName;
                                                    if ($currMonthName == $monthName) {
                                                        echo '<li><a class="current officeHoursTab" id="' . $tabIdName . '">' . Proj_getTranslatedText($currLang, $monthName) . '</a></li>';
                                                    }
                                                    else {
                                                        echo '<li><a class="officeHoursTab" id="' . $tabIdName . '">' . Proj_getTranslatedText($currLang, $monthName) . '</a></li>';
                                                    }
                                                }
                                        ?>
                                      </ul>
                                      <div class="clear"></div>
                                                        <?php
                                              foreach ($monthNameList as $v) {
                                                                list($yearNo, $monthVal)  = explode('-', $v);
                                                  $monthName  = date("F", mktime(0, 0, 0, $monthVal, 10));
                                          echo '<div class="calendar officeHoursTpls" id="month_tpl_' . $monthName . '">';
                                          echo '<h4>' . $yearNo . ' ' . Proj_getTranslatedText($currLang, $monthName) . ' ' .  Proj_getTranslatedText($currLang, 'Office Hours') . '</h4>';
                                                                echo Proj_drawCalendar($monthVal, $yearNo, $calendarData["$monthVal"], $currLang);
                                                                echo '</div><div class="clear"></div>';
                                              }
                                      ?>
                                    </div>
                                  </div>
                                  <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>




                <div class="clear"></div>
    
            </div>
          </div>
        </div>
      </section>

                <footer>
  <div class="row">
    <div class="span12">
      <ul>
        <li>
                                    <div class="copy"><p><span class="nofollow" data-element="26636f70793b20436f707972696768742032303138203c696d67207372633d222f70636f70794032782e706e672220616c743d22223e"></span></p></div>
                              </li>
        <li>
          <a href="https://www.centredent.com/your-privacy" rel="nofollow">Privacy Policy</a>
        </li>
        <li>
          <a href="https://www.centredent.com/our-terms" rel="nofollow">Terms &amp; Conditions</a>
        </li>
                  <li><a href="https://www.centredent.com/contactus">Contact Us</a></li>
      </ul>
    </div>

                  <div class="span12">
          <div class="nap">
            <div class="fn org"> Centre Dental, New York, NY</div>
            Phone (appointments): <span class="tel mm-phone-number" content="2129257066">212-925-7066</span>
                          <span class="divider">|</span>
              Phone (general inquiries): (212) 925-7066
                        <div class="adr">
              Address: <span class="street-address">139 Centre Street, Suite 306, </span>
              <span class="locality">New York</span>, <span class="region">NY</span> <span>10013</span>
            </div>
          </div>
        </div>
              <div class="span12">
          </div>
          <div class="span12 powered-by"><p><span class="nofollow" data-element="3c696d67207372633d222f7062704032782e706e672220616c743d22223e"></span></p></div>
      </div>
</footer>
                                <script async="" src="//www.google-analytics.com/analytics.js"></script><script src="https://legacy.patientpop.com/widgets/bookonline/b673eb8892ba58309eb9b81428a5a5495904ae3e"></script><script type="application/ld+json">
    {"@context":"http:\/\/schema.org","@type":"Dentist","@id":"http:\/\/www.centredent.com\/b2a7d5934acd96f72ddd59958d5f50ce93d5de43","url":"http:\/\/www.centredent.com","brand":{"name":["Centre Dental"]},"name":["John Shi, DDS","Wen Huang DMD, DDS"],"image":"https:\/\/sa1s3optim.patientpop.com\/assets\/images\/provider\/photos\/1774783.png","sameAs":[],"potentialAction":{"@type":"ReserveAction","target":{"@type":"EntryPoint","urlTemplate":"http:\/\/www.centredent.com\/schedule?utm_medium=markup","inLanguage":"en-US","actionPlatform":["http:\/\/schema.org\/DesktopWebPlatform","http:\/\/schema.org\/IOSPlatform","http:\/\/schema.org\/AndroidPlatform"]},"result":{"@type":"Reservation","name":"Request Appointment"}},"telephone":"+1 212-925-7066","openingHours":["SUN 10:00:00-19:00:00","MON 10:00:00-19:00:00","TUE 10:00:00-19:00:00","WED 10:00:00-19:00:00","THU 10:00:00-19:00:00","FRI 10:00:00-19:00:00","SAT 10:00:00-19:00:00"],"contactPoint":[{"@type":"ContactPoint","telephone":"+1 212-925-7066","contactType":"reservations"},{"@type":"ContactPoint","telephone":"+1 212-925-7066","contactType":"customer service"}],"address":{"@type":"PostalAddress","streetAddress":"139 Centre Street Suite 306","addressLocality":"New York","addressRegion":"NY","postalCode":"10013","addressCountry":"USA"}}
</script>
      
    <div class="yt-player">
      <div class="inner">
        <button type="button" class="close-yt-player">×</button>
        <iframe width="680" height="377" src=""></iframe>
      </div>
    </div>

    <script>
      var recaptcha_public_key = '6LddTCATAAAAAM-a7vQeVo-dsj-65gNlSKmin7F3';
    </script>

     <script src="https://sa1co.patientpop.com/assetsV/practice.application.js/v/b673eb8892ba58309eb9b81428a5a5495904ae3e" defer="1" async="1"></script>

     
    <script>
      window.onload = function () {
          $('.nav-toggle').click(function(){
  $(this).toggleClass('expanded');
  var nav = '.' + $(this).data('target');
  $(nav).slideToggle('fast');
});

$('.nav-slider').click(function(){
  $(this).toggleClass('expanded');
  $('body').toggleClass('nav-open');
  var nav = '.' + $(this).data('target');
  $(nav).toggleClass('expanded');
});
$('.header-backdrop').click(function(){
  $('.nav-slider').click();
});


                // JS Hero 2

//console.warn('TODO: Move $.animateTransform to main library');
(function($){
  $.fn.animateTransform = function(/* [start,] end [, duration] [, callback] */){
    var start = null, end = null, duration = 400, callback = function(){};
    for(var i=0; i<arguments.length; i++){
      if(typeof(arguments[i]) == 'string'){
        if(!start) start = arguments[i];
        else end = arguments[i];
      } else if(typeof(arguments[i]) == 'number'){
        duration = arguments[i];
      } else if(typeof(arguments[i]) == 'function'){
        callback = arguments[i];
      }
    }
    if(start && !end){
      end = start;
      start = null;
    }
    if(!end) return;
    if(start){
      this.css("transform", start);
    }
    if(duration < 16) duration = 16;
    var transitionB4 = this.css('transition');
    this.css('transition', 'transform ' + duration + 'ms');
    this.css('transform', end);
    var $el = this;
    setTimeout(function(){
      $el.css('transition', transitionB4 || '');
      $el.css('transform', end);
      callback();
    }, duration);
  };
})(jQuery);

(function($){
  $.fn.swipeHandler = function(options) {
    var $container = this;
    var swipeThreshold = options.swipeThreshold || null;
    var onSwipeLeft = options.onSwipeLeft || null;
    var onSwipeRight = options.onSwipeRight || null;
    $container.on('touchstart', function(event) {
      var previousSwipeX = event.originalEvent.touches[0].clientX;
      $container.on('touchend', removeSwipeListeners);
      $container.on('touchcancel', removeSwipeListeners);
      $container.on('touchmove', function(event) {
        currentSwipeX = event.originalEvent.touches[0].clientX;
        if(currentSwipeX-swipeThreshold > previousSwipeX){
          removeSwipeListeners();
          if ( onSwipeRight ){
            event.preventDefault();
            onSwipeRight(event);
          }
        }else if(currentSwipeX+swipeThreshold < previousSwipeX){
          removeSwipeListeners();
          if ( onSwipeLeft ){
            event.preventDefault();
            onSwipeLeft(event);
          }
        }
        previousSwipeX = currentSwipeX;
      });
    });
    function removeSwipeListeners() {
      $container.off('touchmove');
      $container.off('touchend');
      $container.off('touchcancel');
    }
  };
})(jQuery);


//console.warn('TODO: Move $.smartresize to main library');
(function($,sr){
  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;
      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };
          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);
          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };
})(jQuery,'smartresize');


(function($){
  $.fn.heroCarousel = function( options ){

    var settings = $.extend({
      transitionType: 'fade-over',
      transitionSpeedFactor: 1,
      transitionDelay: 4000,
    }, options);

    var $container    = $(this);
    var $list         = $(this).find('ul.carousel-items').eq(0);
    var $slides       = $list.find('li.carousel-item');
    var $navBar       = $container.find('ol.carousel-nav');
    var totalSlides   = $slides.length;
    var sliding       = false;
    var currentSlide  = settings.openingSlideIndex > -1 ? settings.openingSlideIndex : 0;
    var traverse      = null;
    var defaultColorClass = 'a-'+$navBar.data('default-color-class');
    var activeColorClass  = 'a-'+$navBar.data('active-color-class');
      
    function slide(isRewinding) {
      if(!sliding){
        $container.find('iframe[src*="www.youtube.com/embed/"]').each(function(i) {
          this.contentWindow.postMessage( JSON.stringify({ event:'command', func: 'pauseVideo', args:'' }), '*');
        });
        $container.find('ol li.bullet')
          .removeClass('active')
          .removeClass(activeColorClass)
          .addClass(defaultColorClass);
        $container.find('ol li.bullet').eq(currentSlide)
          .addClass('active')
          .removeClass(defaultColorClass)
          .addClass(activeColorClass);
        sliding = true;
        setCurrentBgUrl( $( $container.find('li.carousel-item').eq(currentSlide) ) );
        preloadNextImage(isRewinding);
        switch(settings.transitionType) {
          case 'slide': doTransitionSlide(false, isRewinding); break;
          case 'slide-over': doTransitionSlide(true, isRewinding); break;
          case 'slide-reveal': doTransitionSlideReveal(false, isRewinding); break;
          case 'slide-over-reveal':
          case 'slide-reveal-over': doTransitionSlideReveal(true, isRewinding); break;
          case 'fade-reveal': doTransitionFadeReveal(); break;
          case 'fade-over': doTransitionFadeOver(); break;
          case 'fade' : 
          default: doTransitionFade(); break;
        }
      }
    }

    function preloadNextImage(isRewinding) {
      var slide;
      if ( isRewinding ) {
        slide = (currentSlide-1+totalSlides) % totalSlides;
      } else {
        slide = (currentSlide+1) % totalSlides;
      }
      setCurrentBgUrl( $( $container.find('li.carousel-item').eq(slide) ) );
    }

    function setCurrentBgUrl($el) {
      var bgUrl = $el.css('background-image');
      bgUrl = bgUrl.replace('url(','').replace(')','').replace(/\"/gi, '');
      var dataSrc = $el.data('src');
      if ( dataSrc != bgUrl ) {
        $el.css( 'background-image', 'url("'+dataSrc+'")');
      }
    }

    function doTransitionFade() {
      var speed = 500 * settings.transitionSpeedFactor;
      $slides.removeClass('active')
      $slides.eq(currentSlide).addClass('active')  
      $list.animate({
        opacity : 0
      }, speed,function(){
        $slides.hide();
        $slides.eq(currentSlide).show();    
        $list.animate({opacity : 1}, speed, function(){
          $container.find('li.carousel-item').eq(currentSlide).find('.overlay').slideDown();
          afterTransition();
        });
      });
    }
    
    function doTransitionFadeOver() {
      var speed = 500 * settings.transitionSpeedFactor;
      $slides.removeClass('active');
      $slides.eq(currentSlide).addClass('active');
      $slides.css('zIndex', 1);
      $slides.eq(currentSlide).css({'z-index': 2, opacity: 0}).show().animate({opacity: 1}, speed, function(){
        $slides.not('.active').hide();
        afterTransition();
      });
    }

    function doTransitionSlideReveal(isOver, isRewinding) {
      var slideSpeed = window.innerWidth / 2.5 * settings.transitionSpeedFactor; // adjust speed per size screen
      if ( !isOver ) {
        $list.find('li.carousel-item.active').animateTransform('translate('+(isRewinding?100:-100)+'%)', slideSpeed);
      }
      var speed = 500 * settings.transitionSpeedFactor;
      $slides.removeClass('active');
      $slides.eq(currentSlide).addClass('active');
      $slides.css('zIndex', 1);
      var $new = $slides.eq(currentSlide);
      $new.find('.reveal-element').each(function(index){ $(this).data('opacity', $(this).css('opacity')).css('cssText', 'transition:none; opacity:0 !important;'); });
      $new.css({ zIndex: 2, opacity: 1, transform: 'translate('+(isRewinding?-100:100)+'%)'}).show().animateTransform('translate(0%)', slideSpeed, function(){
        $new.find('.reveal-element').each(function(index){ 
          $(this).css('cssText', 'transition:opacity '+speed+'ms linear '+(index*speed*.7)+'ms; opacity:'+$(this).data('opacity')+' !important;'); 
        });
        var $old = $slides.not('.active');
        $old.hide();
        afterTransition();
      });
    }
    
    function doTransitionFadeReveal() {
      var speed = 500 * settings.transitionSpeedFactor;
      $slides.removeClass('active');
      $slides.eq(currentSlide).addClass('active');
      $slides.css('zIndex', 1);
      var $new = $slides.eq(currentSlide);
      $new.find('.reveal-element').each(function(index){ $(this).data('opacity', $(this).css('opacity')).css('cssText', 'transition:none; opacity:0 !important;'); });
      $new.css({ zIndex: 2, opacity: 0}).show().animate({opacity: 1}, speed, function(){
        $new.find('.reveal-element').each(function(index){ 
          $(this).css('cssText', 'transition:opacity '+speed+'ms linear '+(index*speed*.7)+'ms; opacity:'+$(this).data('opacity')+' !important;'); 
        });
        var $old = $slides.not('.active');
        $old.hide();
        afterTransition();
      });
    }

    function doTransitionSlide(isOver, isRewinding) {
      var speed = window.innerWidth / 2.5 * settings.transitionSpeedFactor; // adjust speed per size screen
      $slides.css('zIndex', 1);
      if ( !isOver ) {
        $list.find('li.carousel-item.active').animateTransform('translate('+(isRewinding?100:-100)+'%)', speed);
      }
      $slides.removeClass('active');
      $slides.eq(currentSlide).addClass('active');
      $slides.eq(currentSlide).css({ zIndex: 2, opacity: 1, transform: 'translate('+(isRewinding?-100:100)+'%)'}).show().animateTransform('translate(0%)', speed, function(){
        $slides.not('.active').hide();
        afterTransition();
      });
    }

    function afterTransition () {
      sliding = false;
      if($container.find('li.carousel-item').eq(currentSlide).find('iframe').length > 0){
        window.clearInterval(traverse);
      }
    }

    function slideNext() {
      if(!sliding){
        currentSlide = ++currentSlide % totalSlides;
        slide(false);
      }
    }

    function slidePrevious() {
      if(!sliding){
        currentSlide = (--currentSlide+totalSlides) % totalSlides;
        slide(true);
      }
    }

    function handleResize(){
      var height = 0;
      $slides.each(function(){
        height = Math.max(height, $(this).height())
      })
      $container.outerHeight(height);
      $slides.each(function() {
        $(this).outerHeight( height );
        $(this).find('.margin-wrapper').outerHeight( height );
      });
    }

    function resetTransitionInterval() {
      window.clearInterval(traverse);
      traverse = setInterval(slideNext, settings.transitionDelay);
    }

    function initialize() { 

      setCurrentBgUrl( $( $container.find('li.carousel-item').eq(currentSlide) ) );

      var height = 0;
      $slides.each(function(){
        height = Math.max(height, $(this).height())
      })
      $container.animate( { 'height': height + 'px' }, 500 );
      $slides.each(function() {
        $(this).outerHeight( height );
        $(this).find('.margin-wrapper').outerHeight( height );
      });

      // change slides CSS properties to enable animations
      $slides.each(function(){
        $(this).css({
          position: 'absolute',
          overflow: 'hidden',
          top: 0,
          left: 0,
          width: '100%',
        }).outerHeight(height);
      });

      $list.addClass('transition-'+settings.transitionType)

      
      // preload next image
      preloadNextImage(false);

      // bind navigation events:
      if($container.find('li.bullet').length > 1){
        $container.find('li.bullet').eq(currentSlide)
          .addClass('active')
          .removeClass(defaultColorClass)
          .addClass(activeColorClass);
        $container.on('click', 'ol li.bullet', function() {
          currentSlide=$container.find('ol li.bullet').index(this);
          var previousIndex = $container.find('li.carousel-item.active').index();
          if(!sliding && currentSlide != previousIndex){
            slide(currentSlide < previousIndex);
          }
        });
      }

      /* HIDE ALL BUT FIRST ONE */
      $container.find('li.carousel-item:gt('+currentSlide+')').hide();

      $container.on('click', '.carousel-left-btn', slidePrevious);
      $container.on('click', '.carousel-right-btn', slideNext);

      $container.on('mouseenter',function(){
        window.clearInterval(traverse);
      });
      $container.on('mouseleave',function(){
        resetTransitionInterval()
      });
      resetTransitionInterval();

      /* SHOW FIRST ONE */
      $list.find('li.carousel-item').eq(currentSlide).show().addClass('active');

      $container.swipeHandler({
        swipeThreshold: 20,
        onSwipeLeft: slideNext,
        onSwipeRight: slidePrevious
      });

      $(window).smartresize(handleResize);

    }
    
    // exit if no more than one slide
    if ( totalSlides > 1 ) initialize()
   
  }
})(jQuery);

$(function(){

  var openingSlideIndex = -1;
  var chunks = window.location.href.split('?')
  if ( chunks.length > 1 ) {
    var vars = chunks[1].split('&')
    for ( var i=0,l=vars.length; i<l; i++ ) {
      // set slide lock flag
      if ( vars[i].substr(0, 10) == 'slideLock=' ) {
        openingSlideIndex = parseInt(vars[i].split('=')[1])
      }
    }
  }
  
  var $carousel = $('.carousel');
  if ( $carousel && $('ul.carousel-items li.carousel-item').length ) {
    var options = {
      transitionType: $carousel.data('transition-type'),
      transitionSpeedFactor: $carousel.data('transition-speed-factor'),
      transitionDelay: parseFloat($carousel.data('transition-delay')) * 1000,
    }
    if ( openingSlideIndex > -1 ) {
      options.openingSlideIndex = openingSlideIndex;
      options.transitionSpeedFactor = 1
      options.transitionDelay = 100000000
    }
    $carousel.heroCarousel(options);
  }

});

        pop.csrf = '4lhwQhgBAavNPwDfAOLrtJ3gKTN8KOQ2NXRIpET0';
                  (function(d){
  var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
  p.type = 'text/javascript';
  p.async = true;
  p.src = '//assets.pinterest.com/js/pinit.js';
  f.parentNode.insertBefore(p, f);
  }(document));

  $( document ).ready(function() {
  $('section.content-page-content ol, section.content-page-content ul').addClass('part-of-content-page');
  });

        pop.googleMapsApiKey = "AIzaSyB9d9ajLaVDcBiRGxav2Eq46SqVI6zWms4";

        
        PPoppracticeId = 14094;
        (function(f,c,o,g,n,a,t){f[n]={'d': 1*new Date()};a=c.createElement(o),t=c.getElementsByTagName(o)[0];a.async=0;a.src=g;t.parentNode.insertBefore(a,t)})(window,document,'script','https://legacy.patientpop.com/widgets/bookonline/b673eb8892ba58309eb9b81428a5a5495904ae3e','PPop');

        if($("div[id^='recaptcha']").length) {
          (function (f, c, o, g, n, a, t) {
            f[n] = {'d': 1 * new Date()};
            a = c.createElement(o), t = c.getElementsByTagName(o)[0];
            a.async = 0;
            a.src = g;
            t.parentNode.insertBefore(a, t)
          })(window, document, 'script', 'https://www.google.com/recaptcha/api.js?onload=recaptchaCallback&render=explicit');
        }

              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-87438114-49', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
        };
            callTrackingEnabled = true;
    _stk = "e4a19193651babae78e8c6a6f7a79aed9e94dabe";
      </script>
   
 
<script src="https://d31y97ze264gaa.cloudfront.net/assets/st/js/st.js"></script><div id="pp_booking">
  <div class="modal hide" id="book-online" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="bookAppointmentLabel">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="bookAppointmentLabel">Calendar</h4>
        </div>

        <div class="modal-body loading">
          <i class="fa fa-cog fa-spin"></i> Loading calendar. Please wait.
        </div>

        <div class="modal-body selectdoc provider-blocks" style="display:none;"></div>
        <div id="calDocTemplate" style="display:none;">
          <div class="provider-block doc-modal">
            <div class="provider-pic" data-env="production">
              <img src="https://sa1s3.patientpop.com/assets/images/provider/photos/photo.jpg" width="180" height="180" alt="" class="doc-photo">
            </div>
            <div class="provider-info">
              <div class="provider-details">
                <h6></h6>
                <label class="spec"></label>
              </div>
            </div>
            <div class="doc-select-hover" data-docid=""></div>
            <a href="#" class="doc-select link primary-bg" data-docid="">select</a>
          </div>
        </div>

        <div class="modal-body selectloc location-blocks" style="display:none;"></div>
        <div id="calLocTemplate" style="display:none;">

          <div class="location-block loc-modal" data-locid="LOCID">
            <div class="location-name">LOCNAME</div>
            <div class="location-address">LOCADDRESS</div>
            <div class="location-map" id="location-LOCID" data-latitude="LOCLATITUDE" data-longitude="LOCLONGITUDE" data-address="LOCADDRESS" data-mapsize="bookonline"></div>
            <div class="call-to-actions primary-border">
              <button class="btn-book-online ppop_bookonline_action primary-bg primary-border">SELECT</button>
            </div>
          </div>
        </div>

        <div class="caldetails" style="display:none;">
          <form method="POST" action="https://legacy.patientpop.com/widgets/bookonline/template/b673eb8892ba58309eb9b81428a5a5495904ae3e" accept-charset="UTF-8" id="patient-form" data-toggle="validator" role="form"><input name="_token" type="hidden" value="VPlMvcSsKtaXjUMj9Uvzbaj6Iy398qjZWlcaITWD">
          <div class="modal-body">
            <input name="calendar_id" type="hidden" value="">
            <input id="block-id" name="calendar_block_id" type="hidden" value="">
            <input name="doctor_id" type="hidden" value="">
            <input name="location_id" type="hidden" value="">

            <div class="left">
              <div id="newpatient-section-1">
                <div class="label" id="newpatient-label">New Patient?</div>
                <ul>
                  <li><input id="new-patient-yes" name="newpatient" type="radio" value="yes">
                    <label for="new-patient-yes">Yes</label></li>
                  <li><input id="new-patient-no" name="newpatient" type="radio" value="no">
                    <label for="new-patient-no">No</label></li>
                </ul>
              </div>

              <div id="reason-section-1">
                <div class="label reason-label">Reason</div>
                <input class="txt-input" placeholder="e.g. annual checkup, follow-up, ..." maxlength="150" name="reason" type="text" value="">
                <select class="txt-input" name="reason"></select>
              </div>

              <div id="name-section-1">
                <div class="label" id="name-label">Name</div>
                <input class="txt-input inline-input" placeholder="First" name="firstname" type="text" value="">
                <input class="txt-input inline-input" placeholder="Last" name="lastname" type="text" value="">
              </div>

              <div id="email-section-1">
                <div class="label" id="email-label">Email address</div>
                <input class="txt-input" name="email" type="email" value="">
              </div>

              <div id="phone-section-1">
                <div class="label" id="phone-label">Mobile Phone Number</div>
                <input class="txt-input" id="appointment-phone" name="phone" type="tel" value="">
              </div>

              <div id="date_of_birth-section-1">
                <div class="label" id="date_of_birth-label">Date of Birth</div>
                <input class="txt-input" placeholder="mm/dd/yyyy" maxlength="10" name="date_of_birth" type="text" value="">
              </div>

              <div id="age_verification-section-1" class="age-verify">
                <div class="label" id="age_verification-label">Are you the patient?</div>
                <ul>
                  <li><input id="age_verification-yes" name="age_verification" type="radio" value="yes">
                    <label for="age_verification-yes">Yes</label></li>
                  <li><input id="age_verification-no" name="age_verification" type="radio" value="no">
                    <label for="age_verification-no">No</label></li>
                </ul>
              </div>

              <div id="sex-section-1">
                <div class="label" id="sex-label">Gender</div>
                <select class="txt-input" name="sex"><option value="" selected="selected">- Select One -</option><option value="undisclosed">Do not wish to disclose</option><option value="male">Male</option><option value="female">Female</option><option value="other">Other</option></select>
              </div>

              <div id="insurance_provider_id-section-1">
                <div class="label add-insurance-dropdown" id="insurance_provider_id-label">Insurance</div>
                <select class="txt-input add-info-insurance-select-dropdown" name="insurance_provider_id" style="display: none;"></select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 250px;" title=""><a class="chosen-single chosen-default" tabindex="-1"><span>Select an Option</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chosen-results"></ul></div></div>
              </div>

              <div id="insurance_id_number-section-1">
                <div class="label hide insurance-selected" id="insurance_id_number-label">Insurance ID #</div>
                <input class="txt-input hide insurance-selected" id="appointment-insurance-id-number" name="insurance_id_number" type="text" value="">
              </div>

              <div id="insurance_group_number-section-1">
                <div class="label hide insurance-selected" id="insurance_group_number-label">Insurance Group #</div>
                <input class="txt-input hide insurance-selected" id="appointment-insurance-group-number" name="insurance_group_number" type="text" value="">
              </div>

              <div id="insurance_phone-section-1">
                <div class="label hide insurance-selected" id="insurance_phone-label">Insurance Phone #</div>
                <input class="txt-input hide insurance-selected" id="appointment-insurance-phone-number" name="insurance_phone" type="text" value="">
              </div>
            </div>

            <div class="right">
              <div id="calendar-block">
                <button class="schedule-prev secondary-fg" type="button"><i class="fa fa-chevron-circle-left fa-2x"></i></button>
                <div id="grid-block"></div>
                <button class="schedule-next secondary-fg" type="button"><i class="fa fa-chevron-circle-right fa-2x"></i></button>
              </div>
              <div id="calendar-block-select-newpatient">
                <i class="fa fa-arrow-left"></i> Please select whether you are a new or existing patient.
              </div>
              <div id="calendar-block-select-reason">
                <i class="fa fa-arrow-left"></i> Please select an appointment reason.
              </div>
              <div id="calendar-block-loading">
                <i class="fa fa-cog fa-spin"></i> Loading calendar ...
              </div>
              <div id="calendar-select">
                <div class="label">Date - Time</div>
                <select id="calendar-time" class="form-control"></select>
              </div>
              <div id="terms_confirm">
                <input type="checkbox">
                I have read and agreed to the <a href="/your-privacy" target="_blank">Privacy Policy</a> and <a href="/our-terms" target="_blank">Terms of Use</a>
              </div>
            </div>

            <div class="clear-both"></div>
            <div class="book-online-message"></div>
          </div>

          <div class="modal-footer">
            <button class="btn-cancel" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn-book-now primary-bg primary-border" type="button">Book Now</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal hide" id="booked-additional-info" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="bookAppointmentLabel">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="bookedAppointmentLabel">Appointment Requested</h4>
        </div>

        <div class="additional-questions">
          <form method="POST" action="https://legacy.patientpop.com/widgets/appointment/update" accept-charset="UTF-8" id="patient-additional-info-form" data-toggle="validator" role="form"><input name="_token" type="hidden" value="VPlMvcSsKtaXjUMj9Uvzbaj6Iy398qjZWlcaITWD">
          <div class="modal-body">
            <p class="type-wrapper">Thank you for your appointment request. We will contact you shortly to confirm your request.<br>Please call our office <span class="apt-conf-phone">at </span> if you have any questions.</p>
            <span class="apt-conf-formlinks apt-conf-formlinks1"></span>
            <h4>Additional Information</h4>
            <input name="id" type="hidden" value="">

            <div class="left">
              <div id="name-section-2">
                <div class="label" id="name-label">Name</div>
                <input class="txt-input inline-input" placeholder="First" name="firstname" type="text" value="">
                <input class="txt-input inline-input" placeholder="Last" name="lastname" type="text" value="">
              </div>

              <div id="email-section-2">
                <div class="label" id="email-label">Email address</div>
                <input class="txt-input" name="email" type="email" value="">
              </div>

              <div id="phone-section-2">
                <div class="label" id="phone-label">Mobile Phone Number</div>
                <input class="txt-input" id="appointment-phone" name="phone" type="tel" value="">
              </div>

              <div id="reason-section-2">
                <div class="label reason-label">Reason</div>
                <input class="txt-input" placeholder="e.g. annual checkup, follow-up, ..." maxlength="150" name="reason" type="text" value="">
                <select class="txt-input" name="reason"></select>
              </div>

              <div id="date_of_birth-section-2">
                <div class="label" id="date_of_birth-label">Date of Birth</div>
                <input class="txt-input" placeholder="mm/dd/yyyy" maxlength="10" name="date_of_birth" type="text" value="">
              </div>

              <div id="sex-section-2">
                <div class="label" id="sex-label">Gender</div>
                <select class="txt-input" name="sex"><option value="" selected="selected">- Select One -</option><option value="undisclosed">Do not wish to disclose</option><option value="male">Male</option><option value="female">Female</option><option value="other">Other</option></select>
              </div>

              <div id="insurance_provider_id-section-2">
                <div class="label add-insurance-dropdown" id="insurance_provider_id-label">Insurance</div>
                <select class="txt-input add-info-insurance-select-dropdown" name="insurance_provider_id" style="display: none;"></select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 250px;" title=""><a class="chosen-single chosen-default" tabindex="-1"><span>Select an Option</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chosen-results"></ul></div></div>
              </div>

              <div id="insurance_id_number-section-2">
                <div class="label hide insurance-selected" id="insurance_id_number-label">Insurance ID #</div>
                <input class="txt-input hide insurance-selected" id="appointment-insurance-id-number" name="insurance_id_number" type="text" value="">
              </div>

              <div id="insurance_group_number-section-2">
                <div class="label hide insurance-selected" id="insurance_group_number-label">Insurance Group #</div>
                <input class="txt-input hide insurance-selected" id="appointment-insurance-group-number" name="insurance_group_number" type="text" value="">
              </div>

              <div id="insurance_phone-section-2">
                <div class="label hide insurance-selected" id="insurance_phone-label">Insurance Phone #</div>
                <input class="txt-input hide insurance-selected" id="appointment-insurance-phone-number" name="insurance_phone" type="text" value="">
              </div>

            </div>

            <div class="right">
              <div id="comment-section-2">
                <div class="label" id="comment-label">Comment</div>
                <textarea class="txtarea-input" placeholder="Is there anything you would like us to know before your appointment?" maxlength="250" rows="4" name="comment" cols="50"></textarea>
              </div>
            </div>

            <div class="clear-both"></div>
          </div>

          <div class="modal-footer">
            <button class="btn-skip" type="button" data-dismiss="modal">Skip</button>
            <button class="btn-book-additional-submit primary-bg primary-border" type="button">Submit</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="booked-online" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="appointmentRequestLabel">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="appointmentRequestLabel">Thank You</h4>
        </div>

        <div class="modal-body">
          <p class="type-wrapper">Thank you for your appointment request. We will contact you shortly to confirm your request. Please call our office <span class="apt-conf-phone">at </span> if you have any questions.</p>
          <span class="apt-conf-formlinks apt-conf-formlinks2"></span>
        </div>

      </div>
    </div>
  </div>

  <div class="modal" id="booking-screened" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="appointmentRequestLabel">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="appointmentRequestLabel">Please call our office</h4>
        </div>

        <div class="modal-body">
          <p>We unfortunately can't schedule this type of appointment online. Please call our office <span class="apt-conf-phone">at </span> to make your appointment.</p>
        </div>

      </div>
    </div>
  </div>

  <div class="modal" id="booking-error" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="errorLabel">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="errorLabel"></h4>
        </div>

        <div class="modal-body">
          <p></p>
        </div>

        <div class="modal-footer">
          <button class="btn-cancel" type="button" data-dismiss="modal">Cancel</button>
          <button type="button" id="reload-book-online" class="btn-reload-book-online ppop_bookonline_action primary-bg primary-border" style="display: none;">Book Online</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script id="PIN_1532409624383.f.callback[0]" type="text/javascript" charset="utf-8" src="https://log.pinterest.com/?guid=oyrW0cw0t_Xw&amp;tv=2018050702&amp;type=pidget&amp;sub=www&amp;button_count=0&amp;follow_count=0&amp;pin_count=0&amp;profile_count=0&amp;board_count=0&amp;section_count=0&amp;lang=en&amp;via=https%3A%2F%2Fwww.centredent.com%2Fcontents%2Fnew-patients%2Four-philosophy&amp;callback=PIN_1532409624383.f.callback[0]"></script></body></html>

<?php } ?>
