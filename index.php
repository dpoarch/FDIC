<?php
   include("config.php");
   if(isset($_GET["category"])){
      $checkquery = mysqli_query($conn, "SELECT * FROM  `category` WHERE `category` = '".$_GET["category"]."'");
      $categorycount = mysqli_num_rows($checkquery);
      // if($categorycount == 0){
      //    header("Location: index.php");
      // }
   }
   ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/s.dtd">
<html lang="en">
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <meta charset="utf-8">
      <title>FDIC Live</title>
      <link rel="stylesheet" target="_blank" href="css/furtive.css" type='text/css'>
      <link rel="stylesheet" target="_blank" href="css/jquery-ui.css" type='text/css' >
      <link rel="stylesheet" target="_blank" href="css/agile_carousel.css" type='text/css'>
      <script src="https://jwpsrv.com/library/bzH+guAtEeKgexIxOQulpA.js"></script>
      <!-- Contact Form CSS files -->
      <link type='text/css' target="_blank" href='css/basic.css' rel='stylesheet' media='screen' />
      <link rel="stylesheet" type="text/css" target="_blank" href="css/responsive.css">
      <link rel="stylesheet" target="_blank" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" target="_blank" href="css/header_new.css">
      <!-- IE6 "fix" for the close png image -->
      <!--[if lt IE 7]>
      <link type='text/css' target="_blank" href='css/basic_ie.css' rel='stylesheet' media='screen' />
      <![endif]-->
      <style> 
         ul.menu {
         border:0px;
         width:190px;
         float:left;
         font-size: 14px;
         line-height:1.5em;
         }
         ul.menu a {
         text-decoration:none;
         }  
         .eventimg a .videoplay {
         background-image: url("images/videoplay.png");
         background-position: center center;
         background-repeat: no-repeat;
         height: 150px;
         width: 225px;
         border:2px solid gray;
         }
         .eventimg a:hover .videoplay {
         background-image: url("images/videoplay_over.png");
         background-position: center center;
         background-repeat: no-repeat;
         height: 150px;
         width: 225px;
         }
         .videoplay{
         	width:250px;
         	display:block;
         	background-image:url('images/videoplay.png');
         	background-position: center center;
         	background-repeat: no-repeat;
         	height:150px;
         	width:250px;
         	border:2px solid gray;
         }
         .videoplay:hover{
         	background-image:url('images/videoplay_over.png');
         }
      </style>
   </head>
   <body style="width:100%;">
      <!-- header -->
      <header>
         <div id="responsive_header">
            <div id="responsive_header-right_side">
               <ul id="responsive_header-links">
                  <!-- li id="responsive_header-itunes" title="Visit iTunes on FDIC"><a tabindex="1" target="_blank" href="https://www.fdic.gov/podcasts/index.html">iTunes on FDIC</a></li -->
                  <li id="responsive_header-twitter" title="Visit FDIC on Twitter"><a tabindex="1" target="_blank" href="https://www.fdic.gov/social.html?site=http://twitter.com/FDICgov" onclick="s_objectID=&quot;https://www.fdic.gov/social.html?site=http://twitter.com/FDICgov_1&quot;;return this.s_oc?this.s_oc(e):true">Visit FDIC on Twitter</a></li>
                  <li id="responsive_header-facebook" title="Visit FDIC on Facebook"><a tabindex="1" target="_blank" href="https://www.fdic.gov/social.html?site=http://www.facebook.com/FDICgov" onclick="s_objectID=&quot;https://www.fdic.gov/social.html?site=http://www.facebook.com/FDICgov_1&quot;;return this.s_oc?this.s_oc(e):true">Visit FDIC on Facebook</a></li>
                  <li id="responsive_header-fdicchannel" title="Visit FDIC on YouTube"><a tabindex="1" target="_blank" href="https://www.fdic.gov/social.html?site=http://www.youtube.com/user/FDICchannel" onclick="s_objectID=&quot;https://www.fdic.gov/social.html?site=http://www.youtube.com/user/FDICchannel_1&quot;;return this.s_oc?this.s_oc(e):true">Visit FDIC on YouTube</a></li>
                  <li id="responsive_header-rss" title="FDIC RSS Feed"><a tabindex="1" target="_blank" href="https://www.fdic.gov/rss.html" onclick="s_objectID=&quot;https://www.fdic.gov/rss.html_1&quot;;return this.s_oc?this.s_oc(e):true">FDIC RSS Feed</a></li>
                  <li id="responsive_header-subscribe" title="Subscribe to FDIC alerts"><a tabindex="1" target="_blank" href="http://service.govdelivery.com/service/multi_subscribe.html?code=USFDIC" onclick="s_objectID=&quot;http://service.govdelivery.com/service/multi_subscribe.html?code=USFDIC_1&quot;;return this.s_oc?this.s_oc(e):true">Subscribe to FDIC alerts</a></li>
               </ul>
               <div id="responsive_header-search">
                  <a target="_blank" href="https://www.fdic.gov/search/advanced.html" class="search" title="Advanced Search" onclick="s_objectID=&quot;https://www.fdic.gov/search/advanced.html_1&quot;;return this.s_oc?this.s_oc(e):true">Advanced Search</a>
                  <form id="googlesearch" action="https://search.fdic.gov/search" method="get" name="Search box for FDIC.gov">
                     <fieldset>
                        <div class="form">
                           <label for="newSearch">Search FDIC.gov</label>
                           <input tabindex="1" id="newSearch" name="q" class="field" type="text" style="outline: 0 none;" value="Search FDIC..." onblur="if(this.value == '') {this.value = 'Search FDIC...';}" onfocus="if(this.value == 'Search FDIC...') {this.value = '';}">
                           <label for="searchsubmit">Submit Search Request</label>
                           <input tabindex="1" id="searchsubmit" class="submit" title="Search Icon" type="submit" value="">
                           <input value="date:D:L:d1" name="sort" type="hidden">
                           <input value="xml_no_dtd" name="output" type="hidden">
                           <input value="UTF-8" name="ie" type="hidden">
                           <input value="UTF-8" name="oe" type="hidden">
                           <input value="wwwGOV" name="client" type="hidden">
                           <input value="wwwGOV" name="proxystylesheet" type="hidden">
                           <input value="default" name="site" type="hidden">
                        </div>
                     </fieldset>
                  </form>
               </div>
            </div>
            <!-- close right side --> 
            <a id="responsive_header-fdic_logo" target="_blank" href="https://www.fdic.gov/" title="FDIC Homepage" onclick="s_objectID=&quot;https://www.fdic.gov/_1&quot;;return this.s_oc?this.s_oc(e):true">FDIC Homepage</a>
            <h1>Federal Deposit<br>
               Insurance Corporation
            </h1>
            <h2>Each depositor insured to at least $250,000 per insured bank</h2>
            <div class="clear"></div>
            <div class="nav_container">
               <nav class="navbar navbar-inverse">
                  <div class="container-fluid">
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                        </button>
                        <div class="navbar-brand">Navigation</div>
                     </div>
                     <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                           <li class="active first dropdown">
                              <a target="_blank" href="https://www.fdic.gov/" onclick="s_objectID=&quot;https://www.fdic.gov/_2&quot;;return this.s_oc?this.s_oc(e):true">Home</a>
                              <button type="button" class="toggle-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="caret"></span>
                              <span class="sr-only"></span>
                              </button> 
                              <ul class="dropdown-menu">
                                 <li><a target="_blank" href="https://www.fdic.gov/about/policies" onclick="s_objectID=&quot;https://www.fdic.gov/about/policies_1&quot;;return this.s_oc?this.s_oc(e):true">Website Policies</a></li>
                                 <li><a target="_blank" href="https://www.fdic.gov/about/contact/ask/" onclick="s_objectID=&quot;https://www.fdic.gov/about/contact/ask/_1&quot;;return this.s_oc?this.s_oc(e):true">Contact Us</a></li>
                                 <li><a target="_blank" href="https://www.fdic.gov/quicklinks/spanish.html" onclick="s_objectID=&quot;https://www.fdic.gov/quicklinks/spanish.html_1&quot;;return this.s_oc?this.s_oc(e):true">En Español</a></li>
                                 <li><a target="_blank" href="https://www.fdic.gov/regulations/laws/forms/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/laws/forms/_1&quot;;return this.s_oc?this.s_oc(e):true">Forms</a></li>
                                 <li><a target="_blank" href="https://www.fdic.gov/about/diversity/FDICAccessibilityStatement.html" onclick="s_objectID=&quot;https://www.fdic.gov/about/diversity/FDICAccessibilityStatement.html_1&quot;;return this.s_oc?this.s_oc(e):true">Accessibility Statement</a></li>
                                 <li class="last_item"><a target="_blank" href="https://www.fdic.gov/help/" onclick="s_objectID=&quot;https://www.fdic.gov/help/_1&quot;;return this.s_oc?this.s_oc(e):true">Help for First Time Users</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a target="_blank" href="https://www.fdic.gov/deposit/" onclick="s_objectID=&quot;https://www.fdic.gov/deposit/_1&quot;;return this.s_oc?this.s_oc(e):true">Deposit Insurance</a>
                              <button type="button" class="toggle-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="caret"></span>
                              <span class="sr-only"></span>
                              </button> 
                              <ul class="dropdown-menu">
                                 <li>
                                    <a target="_blank" href="https://www.fdic.gov/edie/" onclick="s_objectID=&quot;https://www.fdic.gov/edie/_1&quot;;return this.s_oc?this.s_oc(e):true">EDIE Online Calculator </a><b class="caret-right"></b>
                                    <div class="dropdown_flyout">
                                       <span class="flyout_header">EDIE Online Calculator</span>
                                       <p>Online tool that helps how the insurance rules and limits apply to a depositor's specific group of deposit accounts—what's insured and what portion (if any) exceeds coverage limits at that bank.</p>
                                    </div>
                                 </li>
                                 <li>
                                    <a target="_blank" href="http://research.fdic.gov/bankfind" onclick="s_objectID=&quot;http://research.fdic.gov/bankfind_1&quot;;return this.s_oc?this.s_oc(e):true">BankFind </a><b class="caret-right"></b>
                                    <div class="dropdown_flyout">
                                       <span class="flyout_header">BankFind</span>
                                       <p>Learn if your bank is insured, view locations, track history, and more.</p>
                                    </div>
                                 </li>
                                 <li>
                                    <a target="_blank" href="https://www.fdic.gov/deposit/deposits/" onclick="s_objectID=&quot;https://www.fdic.gov/deposit/deposits/_1&quot;;return this.s_oc?this.s_oc(e):true">Understanding Deposit Insurance </a><b class="caret-right"></b>
                                    <ul>
                                       <li><a target="_blank" href="https://www.fdic.gov/deposit/deposits/video.html" onclick="s_objectID=&quot;https://www.fdic.gov/deposit/deposits/video.html_1&quot;;return this.s_oc?this.s_oc(e):true">Deposit Insurance Videos</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/deposit/deposits/faq.html" onclick="s_objectID=&quot;https://www.fdic.gov/deposit/deposits/faq.html_1&quot;;return this.s_oc?this.s_oc(e):true">Deposit Insurance FAQs</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/deposit/deposits/brochures.html" onclick="s_objectID=&quot;https://www.fdic.gov/deposit/deposits/brochures.html_1&quot;;return this.s_oc?this.s_oc(e):true">Deposit Insurance Brochures</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/deposit/insurance/history.html" onclick="s_objectID=&quot;https://www.fdic.gov/deposit/insurance/history.html_1&quot;;return this.s_oc?this.s_oc(e):true">Deposit Insurance History</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a target="_blank" href="https://www.fdic.gov/deposit/covered/" onclick="s_objectID=&quot;https://www.fdic.gov/deposit/covered/_1&quot;;return this.s_oc?this.s_oc(e):true">What's Covered? </a><b class="caret-right"></b>
                                    <ul>
                                       <li><a target="_blank" href="https://www.fdic.gov/deposit/covered/categories.html" onclick="s_objectID=&quot;https://www.fdic.gov/deposit/covered/categories.html_1&quot;;return this.s_oc?this.s_oc(e):true">How are My Deposit Accounts Insured by the FDIC?</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/deposit/covered/trust.html" onclick="s_objectID=&quot;https://www.fdic.gov/deposit/covered/trust.html_1&quot;;return this.s_oc?this.s_oc(e):true">Revocable and Irrevocable Trust Accounts</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/deposit/covered/insured.html" onclick="s_objectID=&quot;https://www.fdic.gov/deposit/covered/insured.html_1&quot;;return this.s_oc?this.s_oc(e):true">Accounts Covered by the FDIC</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/deposit/covered/notinsured.html" onclick="s_objectID=&quot;https://www.fdic.gov/deposit/covered/notinsured.html_1&quot;;return this.s_oc?this.s_oc(e):true">What's Not Insured</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a target="_blank" href="https://www.fdic.gov/bank/individual/failed/" onclick="s_objectID=&quot;https://www.fdic.gov/bank/individual/failed/_1&quot;;return this.s_oc?this.s_oc(e):true">Bank Failures </a><b class="caret-right"></b>
                                    <ul>
                                       <li><a target="_blank" href="https://www.fdic.gov/bank/individual/failed/banklist.html" onclick="s_objectID=&quot;https://www.fdic.gov/bank/individual/failed/banklist.html_1&quot;;return this.s_oc?this.s_oc(e):true">Failed Bank List</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/bank/historical/bank/" onclick="s_objectID=&quot;https://www.fdic.gov/bank/historical/bank/_1&quot;;return this.s_oc?this.s_oc(e):true">Bank Failures in Brief</a></li>
                                       <li><a target="_blank" href="http://www2.fdic.gov/hsob/SelectRpt.asp?EntryTyp=30" onclick="s_objectID=&quot;http://www2.fdic.gov/hsob/SelectRpt.asp?EntryTyp=30_1&quot;;return this.s_oc?this.s_oc(e):true">Historical Statistics on Banking - Failures and Assistance Transactions</a></li>
                                       <li><a target="_blank" href="https://www5.fdic.gov/drrip/afi/index.asp" onclick="s_objectID=&quot;https://www5.fdic.gov/drrip/afi/index.asp_1&quot;;return this.s_oc?this.s_oc(e):true">Is My Account Fully Insured?</a></li>
                                    </ul>
                                 </li>
                                 <li class="last_item" lang="es"><a target="_blank" href="https://www.fdic.gov/deposit/spanishlinks.html" onclick="s_objectID=&quot;https://www.fdic.gov/deposit/spanishlinks.html_1&quot;;return this.s_oc?this.s_oc(e):true">Recursos del seguro de depósito en español</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a target="_blank" href="https://www.fdic.gov/consumers/" onclick="s_objectID=&quot;https://www.fdic.gov/consumers/_1&quot;;return this.s_oc?this.s_oc(e):true">Consumer Protection</a>
                              <button type="button" class="toggle-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="caret"></span>
                              <span class="sr-only"></span>
                              </button> 
                              <ul class="dropdown-menu">
                                 <li>
                                    <a target="_blank" href="https://www.fdic.gov/consumers/assistance/" onclick="s_objectID=&quot;https://www.fdic.gov/consumers/assistance/_1&quot;;return this.s_oc?this.s_oc(e):true">Consumer Assistance &amp; Information </a><b class="caret-right"></b>
                                    <ul>
                                       <li><a target="_blank" href="https://www.fdic.gov/consumers/assistance/protection/index.html" onclick="s_objectID=&quot;https://www.fdic.gov/consumers/assistance/protection/index.html_1&quot;;return this.s_oc?this.s_oc(e):true">Consumer Protection Topics</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/consumers/assistance/resources.html" onclick="s_objectID=&quot;https://www.fdic.gov/consumers/assistance/resources.html_1&quot;;return this.s_oc?this.s_oc(e):true">Resources</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/consumers/assistance/filecomplaint.html" onclick="s_objectID=&quot;https://www.fdic.gov/consumers/assistance/filecomplaint.html_1&quot;;return this.s_oc?this.s_oc(e):true">Submit a Complaint</a></li>
                                       <li lang="es"><a target="_blank" href="https://www.fdic.gov/consumers/assistancesp/index.html" onclick="s_objectID=&quot;https://www.fdic.gov/consumers/assistancesp/index.html_1&quot;;return this.s_oc?this.s_oc(e):true">Temas sobre la protección al consumidor</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a target="_blank" href="https://www.fdic.gov/consumers/community/" onclick="s_objectID=&quot;https://www.fdic.gov/consumers/community/_1&quot;;return this.s_oc?this.s_oc(e):true">Community Affairs </a><b class="caret-right"></b>
                                    <ul>
                                       <li><a target="_blank" href="https://www.fdic.gov/consumers/community/program.html" onclick="s_objectID=&quot;https://www.fdic.gov/consumers/community/program.html_1&quot;;return this.s_oc?this.s_oc(e):true">Community Affairs Program</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/consumers/community/AEI/" onclick="s_objectID=&quot;https://www.fdic.gov/consumers/community/AEI/_1&quot;;return this.s_oc?this.s_oc(e):true">Alliance for Economic Inclusion</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/householdsurvey/" onclick="s_objectID=&quot;https://www.fdic.gov/householdsurvey/_1&quot;;return this.s_oc?this.s_oc(e):true">FDIC National Survey of Unbanked and Underbanked Households</a></li>
                                    </ul>
                                 </li>
                                 <li class="last_item">
                                    <a target="_blank" href="https://www.fdic.gov/consumers/education/" onclick="s_objectID=&quot;https://www.fdic.gov/consumers/education/_1&quot;;return this.s_oc?this.s_oc(e):true">Financial Education &amp; Literacy </a><b class="caret-right"></b>
                                    <ul>
                                       <li><a target="_blank" href="https://www.fdic.gov/consumers/consumer/moneysmart/" onclick="s_objectID=&quot;https://www.fdic.gov/consumers/consumer/moneysmart/_1&quot;;return this.s_oc?this.s_oc(e):true">Money Smart - A Financial Education Program</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/education/torc/index.html" onclick="s_objectID=&quot;https://www.fdic.gov/education/torc/index.html_1&quot;;return this.s_oc?this.s_oc(e):true">Teacher Online Resource Center</a></li>
                                       <li><a target="_blank" href="http://www.consumerfinance.gov/parents/" onclick="s_objectID=&quot;http://www.consumerfinance.gov/parents/_1&quot;;return this.s_oc?this.s_oc(e):true">Parents and Caregiver Resource Webpage</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/about/learn/learning/aboutfdic.html" onclick="s_objectID=&quot;https://www.fdic.gov/about/learn/learning/aboutfdic.html_1&quot;;return this.s_oc?this.s_oc(e):true">FDIC Learning Bank</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/consumers/consumer/news/index.html" onclick="s_objectID=&quot;https://www.fdic.gov/consumers/consumer/news/index.html_1&quot;;return this.s_oc?this.s_oc(e):true">FDIC Consumer News</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/consumers/assistance/protection/depaccounts/youthsavings/index.html" onclick="s_objectID=&quot;https://www.fdic.gov/consumers/assistance/protection/depaccounts/youthsavings/index.html_1&quot;;return this.s_oc?this.s_oc(e):true">FDIC Youth Savings Pilot Program</a></li>
                                       <li lang="es"><a target="_blank" href="https://www.fdic.gov/consumers/education/index_esp.html" onclick="s_objectID=&quot;https://www.fdic.gov/consumers/education/index_esp.html_1&quot;;return this.s_oc?this.s_oc(e):true">Alfabetización de Educación Financiera</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a target="_blank" href="https://www.fdic.gov/bank/" onclick="s_objectID=&quot;https://www.fdic.gov/bank/_1&quot;;return this.s_oc?this.s_oc(e):true">Industry Analysis</a>
                              <button type="button" class="toggle-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="caret"></span>
                              <span class="sr-only"></span>
                              </button>
                              <ul class="dropdown-menu">
                                 <li>
                                    <a target="_blank" href="https://www.fdic.gov/bank/statistical/" onclick="s_objectID=&quot;https://www.fdic.gov/bank/statistical/_1&quot;;return this.s_oc?this.s_oc(e):true">Bank Data &amp; Statistics </a><b class="caret-right"></b>
                                    <ul>
                                       <li><a target="_blank" href="https://www5.fdic.gov/idasp/advSearchLanding.asp" onclick="s_objectID=&quot;https://www5.fdic.gov/idasp/advSearchLanding.asp_1&quot;;return this.s_oc?this.s_oc(e):true">Institution Directory</a></li>
                                       <li><a target="_blank" href="https://cdr.ffiec.gov/public/" onclick="s_objectID=&quot;https://cdr.ffiec.gov/public/_1&quot;;return this.s_oc?this.s_oc(e):true">Central Data Repository (CDR)</a></li>
                                       <li><a target="_blank" href="http://www.ffiec.gov/UBPR.htm" onclick="s_objectID=&quot;http://www.ffiec.gov/UBPR.htm_1&quot;;return this.s_oc?this.s_oc(e):true">Uniform Bank Performance Reports (UBPR)</a></li>
                                       <li><a target="_blank" href="https://www5.fdic.gov/sod/sodInstBranch.asp?barItem=1" onclick="s_objectID=&quot;https://www5.fdic.gov/sod/sodInstBranch.asp?barItem=1_1&quot;;return this.s_oc?this.s_oc(e):true">Summary of Deposits</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/bank/analytical/stateprofile/" onclick="s_objectID=&quot;https://www.fdic.gov/bank/analytical/stateprofile/_1&quot;;return this.s_oc?this.s_oc(e):true">FDIC State Profiles</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/bank/statistical/stats/" onclick="s_objectID=&quot;https://www.fdic.gov/bank/statistical/stats/_1&quot;;return this.s_oc?this.s_oc(e):true">Statistics at a Glance</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a target="_blank" href="https://www.fdic.gov/bank/analytical/" onclick="s_objectID=&quot;https://www.fdic.gov/bank/analytical/_1&quot;;return this.s_oc?this.s_oc(e):true">Research &amp; Analysis </a><b class="caret-right"></b>
                                    <ul>
                                       <li><a target="_blank" href="https://www.fdic.gov/bank/analytical/qbp/" onclick="s_objectID=&quot;https://www.fdic.gov/bank/analytical/qbp/_1&quot;;return this.s_oc?this.s_oc(e):true">FDIC Quarterly Banking Profile</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/bank/analytical/cfr/" onclick="s_objectID=&quot;https://www.fdic.gov/bank/analytical/cfr/_1&quot;;return this.s_oc?this.s_oc(e):true">Center for Financial Research</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/regulations/resources/cbi/study.html" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/resources/cbi/study.html_1&quot;;return this.s_oc?this.s_oc(e):true">Community Banking Study</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a target="_blank" href="https://www.fdic.gov/bank/individual/failed/" onclick="s_objectID=&quot;https://www.fdic.gov/bank/individual/failed/_2&quot;;return this.s_oc?this.s_oc(e):true">Failed Banks </a><b class="caret-right"></b>
                                    <ul>
                                       <li><a target="_blank" href="https://www.fdic.gov/bank/individual/failed/banklist.html" onclick="s_objectID=&quot;https://www.fdic.gov/bank/individual/failed/banklist.html_2&quot;;return this.s_oc?this.s_oc(e):true">Failed Bank List</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/bank/historical/bank/" onclick="s_objectID=&quot;https://www.fdic.gov/bank/historical/bank/_2&quot;;return this.s_oc?this.s_oc(e):true">Bank Failures in Brief</a></li>
                                       <li><a target="_blank" href="https://www5.fdic.gov/hsob/SelectRpt.asp?EntryTyp=30" onclick="s_objectID=&quot;https://www5.fdic.gov/hsob/SelectRpt.asp?EntryTyp=30_1&quot;;return this.s_oc?this.s_oc(e):true">Historical Statistics on Banking - Failures and Assistance Transactions</a></li>
                                       <li><a target="_blank" href="https://www5.fdic.gov/drrip/afi/index.asp" onclick="s_objectID=&quot;https://www5.fdic.gov/drrip/afi/index.asp_2&quot;;return this.s_oc?this.s_oc(e):true">Is My Account Fully Insured?</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a target="_blank" href="https://www.fdic.gov/deposit/insurance/" onclick="s_objectID=&quot;https://www.fdic.gov/deposit/insurance/_1&quot;;return this.s_oc?this.s_oc(e):true">The Deposit Insurance Fund </a><b class="caret-right"></b>
                                    <ul>
                                       <li><a target="_blank" href="https://www.fdic.gov/deposit/insurance/calculator.html" onclick="s_objectID=&quot;https://www.fdic.gov/deposit/insurance/calculator.html_1&quot;;return this.s_oc?this.s_oc(e):true">Current Assessment Calculators</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a target="_blank" href="https://www.fdic.gov/deposit/deposits/international/" onclick="s_objectID=&quot;https://www.fdic.gov/deposit/deposits/international/_1&quot;;return this.s_oc?this.s_oc(e):true">International Deposit Insurance </a><b class="caret-right"></b>
                                    <ul>
                                       <li><a target="_blank" href="http://www.asba-supervision.org/" onclick="s_objectID=&quot;http://www.asba-supervision.org/_1&quot;;return this.s_oc?this.s_oc(e):true">Association of Supervisors of Banks of the Americas</a></li>
                                       <li><a target="_blank" href="http://www.bis.org/bcbs/" onclick="s_objectID=&quot;http://www.bis.org/bcbs/_1&quot;;return this.s_oc?this.s_oc(e):true">Basel Committee On Banking Supervision (www.bis.org)</a></li>
                                       <li><a target="_blank" href="http://www.iadi.org/" onclick="s_objectID=&quot;http://www.iadi.org/_1&quot;;return this.s_oc?this.s_oc(e):true">International Association of Deposit Insurers (www.iadi.org)</a></li>
                                    </ul>
                                 </li>
                                 <li class="last_item">
                                    <a target="_blank" href="https://www.fdic.gov/bank/analytical/cfr/" onclick="s_objectID=&quot;https://www.fdic.gov/bank/analytical/cfr/_2&quot;;return this.s_oc?this.s_oc(e):true">Center for Financial Research </a><b class="caret-right"></b>
                                    <ul>
                                       <li class="last_item"><a target="_blank" href="https://www.fdic.gov/bank/analytical/cfr/2015/wp_2015/workingpapers_2015.html" onclick="s_objectID=&quot;https://www.fdic.gov/bank/analytical/cfr/2015/wp_2015/workingpapers_2015.html_1&quot;;return this.s_oc?this.s_oc(e):true">Working Papers</a></li>
                                       <li class="last_item"><a target="_blank" href="https://www.fdic.gov/bank/analytical/cfr/research.html" onclick="s_objectID=&quot;https://www.fdic.gov/bank/analytical/cfr/research.html_1&quot;;return this.s_oc?this.s_oc(e):true">Research Programs</a></li>
                                       <li class="last_item"><a target="_blank" href="https://www.fdic.gov/bank/analytical/cfr/conf_sym.html" onclick="s_objectID=&quot;https://www.fdic.gov/bank/analytical/cfr/conf_sym.html_1&quot;;return this.s_oc?this.s_oc(e):true">Conferences &amp; Symposia</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a target="_blank" href="https://www.fdic.gov/regulations/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/_1&quot;;return this.s_oc?this.s_oc(e):true">Regulations &amp; Examinations</a>
                              <button type="button" class="toggle-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="caret"></span>
                              <span class="sr-only"></span>
                              </button> 
                              <ul class="dropdown-menu">
                                 <li>
                                    <a target="_blank" href="https://www.fdic.gov/regulations/examinations/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/examinations/_1&quot;;return this.s_oc?this.s_oc(e):true">Bank Examinations </a><b class="caret-right"></b>
                                    <ul>
                                       <li><a target="_blank" href="https://www.fdic.gov/regulations/examinations/supervisory/insights/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/examinations/supervisory/insights/_1&quot;;return this.s_oc?this.s_oc(e):true">Supervisory Insights</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/bank/individual/enforcement/" onclick="s_objectID=&quot;https://www.fdic.gov/bank/individual/enforcement/_1&quot;;return this.s_oc?this.s_oc(e):true">FDIC Enforcement Decisions &amp; Orders</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/regulations/safety/manual/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/safety/manual/_1&quot;;return this.s_oc?this.s_oc(e):true">Risk Management Manual of Examination Policies</a></li>
                                       <li><a target="_blank" href="http://www.ffiec.gov/bsa_aml_infobase/default.htm" onclick="s_objectID=&quot;http://www.ffiec.gov/bsa_aml_infobase/default.htm_1&quot;;return this.s_oc?this.s_oc(e):true">Bank Secrecy Act/Anti-Money Laundering Manual</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/regulations/trust/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/trust/_1&quot;;return this.s_oc?this.s_oc(e):true">Trust Examination Overview</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/regulations/information/information/FFIEC.html" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/information/information/FFIEC.html_1&quot;;return this.s_oc?this.s_oc(e):true">FFIEC Information Technology Examination Handbook</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/regulations/community/community/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/community/community/_1&quot;;return this.s_oc?this.s_oc(e):true">CRA Statute &amp; Tools</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/regulations/compliance/manual/index.html" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/compliance/manual/index.html_1&quot;;return this.s_oc?this.s_oc(e):true">Compliance Examination Manual</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a target="_blank" href="https://www.fdic.gov/regulations/laws/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/laws/_1&quot;;return this.s_oc?this.s_oc(e):true">Laws &amp; Regulations </a><b class="caret-right"></b>
                                    <ul>
                                       <li><a target="_blank" href="https://www.fdic.gov/regulations/laws/rules/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/laws/rules/_1&quot;;return this.s_oc?this.s_oc(e):true">FDIC Law, Regulations &amp; Related Acts</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/news/news/financial/current.html" onclick="s_objectID=&quot;https://www.fdic.gov/news/news/financial/current.html_1&quot;;return this.s_oc?this.s_oc(e):true">Financial Institution Letters</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/regulations/laws/federal/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/laws/federal/_1&quot;;return this.s_oc?this.s_oc(e):true">FDIC Federal Register Citations</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/regulations/reform/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/reform/_1&quot;;return this.s_oc?this.s_oc(e):true">FDIC and Financial Regulatory Reform</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a target="_blank" href="https://www.fdic.gov/regulations/resources/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/resources/_1&quot;;return this.s_oc?this.s_oc(e):true">Resources for Bank Officers &amp; Directors </a><b class="caret-right"></b>
                                    <ul>
                                       <li><a target="_blank" href="https://www.fdic.gov/regulations/resources/director/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/resources/director/_1&quot;;return this.s_oc?this.s_oc(e):true">Directors' Resource Center</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/regulations/resources/cbi/index.html" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/resources/cbi/index.html_1&quot;;return this.s_oc?this.s_oc(e):true">Community Banking Initiative</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/regulations/resources/rates/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/resources/rates/_1&quot;;return this.s_oc?this.s_oc(e):true">Weekly National Rates and Rate Caps</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/regulations/resources/signage/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/resources/signage/_1&quot;;return this.s_oc?this.s_oc(e):true">Ordering &amp; Using FDIC Signs &amp; Logos</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a target="_blank" href="https://www.fdic.gov/regulations/cra/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/cra/_1&quot;;return this.s_oc?this.s_oc(e):true">Community Reinvestment Act (CRA) </a><b class="caret-right"></b>
                                    <ul>
                                       <li><a target="_blank" href="https://www.fdic.gov/regulations/community/exam/index.html" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/community/exam/index.html_1&quot;;return this.s_oc?this.s_oc(e):true">Upcoming CRA Examination Schedule</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/regulations/community/monthly/index.html" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/community/monthly/index.html_1&quot;;return this.s_oc?this.s_oc(e):true">Monthly List of Banks Examined for CRA</a></li>
                                       <li><a target="_blank" href="http://www2.fdic.gov/crapes/" onclick="s_objectID=&quot;http://www2.fdic.gov/crapes/_1&quot;;return this.s_oc?this.s_oc(e):true">CRA Ratings &amp; Performance Evaluations</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a target="_blank" href="https://www2.fdicconnect.gov/" onclick="s_objectID=&quot;https://www2.fdicconnect.gov/_1&quot;;return this.s_oc?this.s_oc(e):true">FDICconnect </a><b class="caret-right"></b>
                                    <div class="dropdown_flyout">
                                       <span class="flyout_header">FDICconnect</span>
                                       <p>The secure Internet channel for FDIC-insured institutions to conduct business and exchange information with the FDIC.</p>
                                    </div>
                                 </li>
                                 <li><a target="_blank" href="https://www.fdic.gov/regulations/required/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/required/_1&quot;;return this.s_oc?this.s_oc(e):true">Bank Financial Reports</a>
                                 </li>
                                 <li class="last_item">
                                    <a target="_blank" href="https://www.fdic.gov/regulations/examiner/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/examiner/_1&quot;;return this.s_oc?this.s_oc(e):true">Examiner Training Programs </a><b class="caret-right"></b>
                                    <ul>
                                       <li class="last_item"><a target="_blank" href="https://www.fdic.gov/regulations/examiner/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/examiner/_2&quot;;return this.s_oc?this.s_oc(e):true">Risk Management Training Program</a></li>
                                       <li class="last_item"><a target="_blank" href="https://www.fdic.gov/regulations/examiner/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/examiner/_3&quot;;return this.s_oc?this.s_oc(e):true">Compliance Training Program</a></li>
                                       <li class="last_item"><a target="_blank" href="https://www.fdic.gov/regulations/examiner/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/examiner/_4&quot;;return this.s_oc?this.s_oc(e):true">Continuing IT Training Program</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li class="dropdown institution">
                              <a target="_blank" href="https://www.fdic.gov/buying/" onclick="s_objectID=&quot;https://www.fdic.gov/buying/_1&quot;;return this.s_oc?this.s_oc(e):true">Institution &amp; Asset Sales</a>
                              <button type="button" class="toggle-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="caret"></span>
                              <span class="sr-only"></span>
                              </button> 
                              <ul class="dropdown-menu">
                                 <li><a target="_blank" href="https://www.fdic.gov/buying/FranchiseMarketing/index.html" onclick="s_objectID=&quot;https://www.fdic.gov/buying/FranchiseMarketing/index.html_1&quot;;return this.s_oc?this.s_oc(e):true">Failing Bank Acquisitions</a></li>
                                 <li>
                                    <a target="_blank" href="https://www.fdic.gov/buying/owned/index.html" onclick="s_objectID=&quot;https://www.fdic.gov/buying/owned/index.html_1&quot;;return this.s_oc?this.s_oc(e):true">Real Estate and Property Marketplace </a><b class="caret-right"></b>
                                    <ul>
                                       <li><a target="_blank" href="https://www.fdic.gov/trusted.html?site=http://www.fdicrealestatelistings.com" onclick="s_objectID=&quot;https://www.fdic.gov/trusted.html?site=http://www.fdicrealestatelistings.com_1&quot;;return this.s_oc?this.s_oc(e):true">Search for Real Estate</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/buying/owned/real/real_est_sales_faq.html" onclick="s_objectID=&quot;https://www.fdic.gov/buying/owned/real/real_est_sales_faq.html_1&quot;;return this.s_oc?this.s_oc(e):true">Real Estate Sales Frequently Asked Questions</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/buying/owned/calendar/event-calendar-noicon.html" onclick="s_objectID=&quot;https://www.fdic.gov/buying/owned/calendar/event-calendar-noicon.html_1&quot;;return this.s_oc?this.s_oc(e):true">Calendar of Special Events</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/buying/owned/bargain/" onclick="s_objectID=&quot;https://www.fdic.gov/buying/owned/bargain/_1&quot;;return this.s_oc?this.s_oc(e):true">Bargain Properties</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a target="_blank" href="https://www.fdic.gov/buying/loan/index.html" onclick="s_objectID=&quot;https://www.fdic.gov/buying/loan/index.html_1&quot;;return this.s_oc?this.s_oc(e):true">Loan Sales </a><b class="caret-right"></b>
                                    <ul>
                                       <li><a target="_blank" href="https://www.fdic.gov/buying/loan/announcements.html" onclick="s_objectID=&quot;https://www.fdic.gov/buying/loan/announcements.html_1&quot;;return this.s_oc?this.s_oc(e):true">Loan Sales Announcements</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/buying/loan/loansales_faq.html" onclick="s_objectID=&quot;https://www.fdic.gov/buying/loan/loansales_faq.html_1&quot;;return this.s_oc?this.s_oc(e):true">Loan Sales FAQs</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a target="_blank" href="https://www.fdic.gov/buying/financial/index.html" onclick="s_objectID=&quot;https://www.fdic.gov/buying/financial/index.html_1&quot;;return this.s_oc?this.s_oc(e):true">Financial Asset Sales </a><b class="caret-right"></b>
                                    <ul>
                                       <!--
                                          <li><a target="_blank" href="https://www.fdic.gov/buying/financial/investormatchprogram.html">Investor Match Program</a></li>-->
                                       <li><a target="_blank" href="https://www.fdic.gov/buying/financial/qualification_process.html" onclick="s_objectID=&quot;https://www.fdic.gov/buying/financial/qualification_process.html_1&quot;;return this.s_oc?this.s_oc(e):true">Qualification Process</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/buying/financial/smallerpools.html" onclick="s_objectID=&quot;https://www.fdic.gov/buying/financial/smallerpools.html_1&quot;;return this.s_oc?this.s_oc(e):true">Smaller Dollar Structured Transactions</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/buying/financial/factsheet.html" onclick="s_objectID=&quot;https://www.fdic.gov/buying/financial/factsheet.html_1&quot;;return this.s_oc?this.s_oc(e):true">FDIC Structured Transaction Fact Sheet for Investors</a></li>
                                    </ul>
                                 </li>
                                 <li><a target="_blank" href="https://www.fdic.gov/buying/servicing/index.html" onclick="s_objectID=&quot;https://www.fdic.gov/buying/servicing/index.html_1&quot;;return this.s_oc?this.s_oc(e):true">Servicing Sales Announcements</a></li>
                                 <li>
                                    <a target="_blank" href="https://www.fdic.gov/buying/otherasset/failedbank/index.html" onclick="s_objectID=&quot;https://www.fdic.gov/buying/otherasset/failedbank/index.html_1&quot;;return this.s_oc?this.s_oc(e):true">Other Assets from Failed Banks</a><b class="caret-right"></b>
                                    <div class="dropdown_flyout">
                                       <span class="flyout_header">Other Assets from Failed Banks</span>
                                       <p>The inventory of other assets for sale -- including office furniture, fixtures, and equipment.</p>
                                    </div>
                                 </li>
                                 <li class="last_item">
                                    <a target="_blank" href="https://www.fdic.gov/buying/historical/index.html" onclick="s_objectID=&quot;https://www.fdic.gov/buying/historical/index.html_1&quot;;return this.s_oc?this.s_oc(e):true">Historical Sales </a><b class="caret-right"></b>
                                    <ul>
                                       <li><a target="_blank" href="https://sales.fdic.gov/closedsales/loanSales.asp" onclick="s_objectID=&quot;https://sales.fdic.gov/closedsales/loanSales.asp_1&quot;;return this.s_oc?this.s_oc(e):true">Closed Loan Sales</a></li>
                                       <li><a target="_blank" href="https://sales.fdic.gov/closedsales/oreSales.asp" onclick="s_objectID=&quot;https://sales.fdic.gov/closedsales/oreSales.asp_1&quot;;return this.s_oc?this.s_oc(e):true">Closed Real Estate Sales</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/buying/historical/loans/index.html" onclick="s_objectID=&quot;https://www.fdic.gov/buying/historical/loans/index.html_1&quot;;return this.s_oc?this.s_oc(e):true">Sales Summary 1990-2014</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/buying/historical/structured/index.html" onclick="s_objectID=&quot;https://www.fdic.gov/buying/historical/structured/index.html_1&quot;;return this.s_oc?this.s_oc(e):true">Structured Transaction Sales</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/buying/historical/mortgage_servicing_assets.html" onclick="s_objectID=&quot;https://www.fdic.gov/buying/historical/mortgage_servicing_assets.html_1&quot;;return this.s_oc?this.s_oc(e):true">Mortgage Servicing Asset Sales</a></li>
                                       <li><a target="_blank" href="https://www.fdic.gov/buying/historical/structured/oil_gas_sales/index.html" onclick="s_objectID=&quot;https://www.fdic.gov/buying/historical/structured/oil_gas_sales/index.html_1&quot;;return this.s_oc?this.s_oc(e):true">Sales of Oil and Gas Related Assets</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a target="_blank" href="https://www.fdic.gov/news/" onclick="s_objectID=&quot;https://www.fdic.gov/news/_1&quot;;return this.s_oc?this.s_oc(e):true">News &amp; Events</a>
                              <button type="button" class="toggle-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="caret"></span>
                              <span class="sr-only"></span>
                              </button> 
                              <ul class="dropdown-menu move-left">
                                 <li><a target="_blank" href="https://www.fdic.gov/news/news/press/current.html" onclick="s_objectID=&quot;https://www.fdic.gov/news/news/press/current.html_1&quot;;return this.s_oc?this.s_oc(e):true">Press Releases</a></li>
                                 <li><a target="_blank" href="https://www.fdic.gov/news/news/financial/current.html" onclick="s_objectID=&quot;https://www.fdic.gov/news/news/financial/current.html_2&quot;;return this.s_oc?this.s_oc(e):true">Financial Institution Letters </a></li>
                                 <li><a target="_blank" href="https://www.fdic.gov/news/conferences/" onclick="s_objectID=&quot;https://www.fdic.gov/news/conferences/_1&quot;;return this.s_oc?this.s_oc(e):true">Conferences &amp; Events</a></li>
                                 <li><a target="_blank" href="https://www.fdic.gov/news/news/speeches/" onclick="s_objectID=&quot;https://www.fdic.gov/news/news/speeches/_1&quot;;return this.s_oc?this.s_oc(e):true">Speeches &amp; Testimony</a></li>
                                 <li><a target="_blank" href="https://www.fdic.gov/news/letters/" onclick="s_objectID=&quot;https://www.fdic.gov/news/letters/_1&quot;;return this.s_oc?this.s_oc(e):true">Letters to the Editor/Opinion Editorials</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a target="_blank" href="https://www.fdic.gov/about/" onclick="s_objectID=&quot;https://www.fdic.gov/about/_1&quot;;return this.s_oc?this.s_oc(e):true">About FDIC</a>
                              <button type="button" class="toggle-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="caret"></span>
                              <span class="sr-only"></span>
                              </button>  
                              <ul class="dropdown-menu pull-right">
                                 <li><a target="_blank" href="https://www.fdic.gov/about/strategic/strategic/mission.html" onclick="s_objectID=&quot;https://www.fdic.gov/about/strategic/strategic/mission.html_1&quot;;return this.s_oc?this.s_oc(e):true">FDIC Mission, Vision, and Values</a></li>
                                 <li><a target="_blank" href="https://www.fdic.gov/about/history/" onclick="s_objectID=&quot;https://www.fdic.gov/about/history/_1&quot;;return this.s_oc?this.s_oc(e):true">History of the FDIC</a></li>
                                 <li><a target="_blank" href="https://www.fdic.gov/about/jobs/" onclick="s_objectID=&quot;https://www.fdic.gov/about/jobs/_1&quot;;return this.s_oc?this.s_oc(e):true">Careers at FDIC</a></li>
                                 <li><a target="_blank" href="https://www.fdic.gov/about/contact/directory/" onclick="s_objectID=&quot;https://www.fdic.gov/about/contact/directory/_1&quot;;return this.s_oc?this.s_oc(e):true">Organization Directory and Office Contacts</a></li>
                                 <li><a target="_blank" href="https://www.fdic.gov/regulations/resources/ombudsman/" onclick="s_objectID=&quot;https://www.fdic.gov/regulations/resources/ombudsman/_1&quot;;return this.s_oc?this.s_oc(e):true">Office of the Ombudsman</a></li>
                                 <li><a target="_blank" href="https://www.fdic.gov/buying/goods/" onclick="s_objectID=&quot;https://www.fdic.gov/buying/goods/_1&quot;;return this.s_oc?this.s_oc(e):true">Doing Business with the FDIC</a></li>
                                 <li class="last_item"><a target="_blank" href="https://www.fdic.gov/about/index.html#5" onclick="s_objectID=&quot;https://www.fdic.gov/about/index.html#5_1&quot;;return this.s_oc?this.s_oc(e):true">Plans &amp; Reports</a></li>
                                 <li><a target="_blank" href="https://www.fdic.gov/about/diversity/" onclick="s_objectID=&quot;https://www.fdic.gov/about/diversity/_1&quot;;return this.s_oc?this.s_oc(e):true">Diversity &amp; Inclusion</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </header>
      <!-- header -->
      <div class="bg--white measure">
         <div style="width:200px; float:left;display:block;margin-top:0px;">
            <form action="index.php" method="get" style="display:inline-block;margin-left:4px;margin-top: 11px; margin-bottom: 25px;">
            <input type="text" class="form-control" placeholder="Search across events.." name="search" style="height: 28px;padding: 0px 7px;font-size: 10px;">
            <input type="submit" style="position: absolute;top: 130px;margin-left: 120px;background-color: transparent;border: 0px;background-image: url('http://findicons.com/files/icons/1389/g5_system/32/toolbar_find.png'); background-repeat: no-repeat;background-size: contain; " value="">
            </form>
            <ul id="menu" class="menu  ui-menu ui-widget ui-widget-content" role="menu" tabindex="0" aria-activedescendant="ui-id-6">
            <li class="ui-menu-item" id="ui-id-4" tabindex="-1" role="menuitem"><a onclick="live()" href="javascript:void(0);"><span style="display:block;font-weight:bold;">Webcast List</span></a></li>
            <li class="ui-menu-item" id="ui-id-4" tabindex="-1" role="menuitem"><a onclick="archive()" href="javascript:void(0);"><span style="display:block;font-weight:bold;">Archive</span></a></li>

            <li class="ui-menu-item" style="font-size: 75%;padding-left:20px;" id="ui-id-2" tabindex="-1" role="menuitem"><a href="index.php?category=FDIC+Board+Meetings"><span style="display:block;font-weight:bold;">FDIC Board Meetings</span></a></li>
            <li class="ui-menu-item" style="font-size: 75%;padding-left:20px;" id="ui-id-2" tabindex="-1" role="menuitem"><a href="index.php?category=Quarterly+Banking+Profile"><span style="display:block;font-weight:bold;">Quarterly Banking Profile</span></a></li>
            <li class="ui-menu-item" style="font-size: 75%;padding-left:20px;" id="ui-id-2" tabindex="-1" role="menuitem"><a href="index.php?category=Advisory+Committee+on+Economic+Inclusion+%28Come-IN%29"><span style="display:block;font-weight:bold;">Advisory Committee on Economic Inclusion (Come-IN)</span></a></li>
            <li class="ui-menu-item" style="font-size: 75%;padding-left:20px;" id="ui-id-2" tabindex="-1" role="menuitem"><a href="index.php?category=Community+Banking+Advisory+Committee"><span style="display:block;font-weight:bold;">Community Banking Advisory Committee</span></a></li>
            <li class="ui-menu-item" style="font-size: 75%;padding-left:20px;" id="ui-id-2" tabindex="-1" role="menuitem"><a href="index.php?category=Systemic+Resolution+Advisory+Committee"><span style="display:block;font-weight:bold;">Systemic Resolution Advisory Committee</span></a></li>
            <li class="ui-menu-item" style="font-size: 75%;padding-left:20px;" id="ui-id-2" tabindex="-1" role="menuitem"><a href="index.php?category=Other+Events"><span style="display:block;font-weight:bold;">Other Events</span></a></li>
         
            </ul>
            <br><br><br><br>
         </div>
         <div style="width: 800px; float:right;">
            <section class="measure bg--white" id="welcomesection">
               <div class="grd-row p0 mx0 bg--white" style="display:block;">
                  <h5 class="m0 px1" style="font-size:18px;line-height:100%;margin-top:8px;display:inline-block;">FDIC WEBCAST</h5>
                  <p class="m0 px1" style="font-size:16px;line-height:100%;">
                  </p>
               </div>
               <!-- GENERAL SESSIONS SECTION -->  
               <div id="live" class="grd-row m0 px1 my1" style="<?php if(isset($_GET["category"])){ echo "display: none;"; }?>">
                  <h5 style="font-size:17px;" class="m0 p0">WebCast List</h5>
                  <?php 
                     $query = mysqli_query($conn, "SELECT * FROM  `webcasts` WHERE `flag` != 'Archive'  AND `visibility` = '0' ORDER BY `order` ASC, `datetime` ASC");
                     $item_count = mysqli_num_rows($query);
                     if($item_count != 0){
	                     $count = 0;
	                     $skip = 0;
	                     while($item_count > $count)
	                     {
	                     ?>
	                  <!-- FIRST ROW -->  
	                  <div style="display:inline-flex;width:100%;display: -ms-flexbox;">
	                     <?php 
	                        $webcastquery = mysqli_query($conn, "SELECT * FROM  `webcasts` WHERE `flag` != 'Archive' AND `visibility` = '0' ORDER BY  `order` ASC, `datetime` ASC LIMIT 3 OFFSET ".$count);
	                        while($row = mysqli_fetch_array($webcastquery)){
	                        ?>
	                     <!-- VIDEO1 -->  
	                     <div class="grd-row-col-2-6 media p0 m0" style="width:250px;display:inline-block;vertical-align:top;">
	                        <div class="media-figure eventimg" style="width:250px;display:inline-block;background-size: 250px 150px;margin-bottom:5px;background-image:url(<?php if($row["thumb"] == ""){ echo "images/default-thumb.png"; }else{ echo $row["thumb"]; } ?>)">
	                           <a target="_blank" href="<?php echo $row["url"]; ?>" class="videoplay">
	                           </a>
	                        </div>
	                        <div id="vid1" class="" style="width:250px;">
	                           <span class="m0 p0" style="font-size:13px;line-height:1.2;" id="title1"><b><?php echo $row["title"]; ?></b></span>
	                           <p style="line-height:1.2;font-size:12px;" class="m0 p0 small">
	                              <span id="desc1"><?php echo $row["type"]; ?></span><br>
	                              <span id="name1"><?php echo $row["flag"]; ?><br><?php echo $row["category"]; ?></span><br>
	                              <span id="date1">
	                                 <?php echo $row["datetime"]; ?>
	                              </span><br>
                                 <?php 
                                     $jsonarray = json_decode($row["download_links"]);
                                     foreach($jsonarray as $value){ 
                                          $array = explode('.', $value->url);
                                          $extension = end($array);
                                          $image = "genico.png";
                                          if($extension == "doc" || $extension == "docx"){ $image = "docico.png"; }
                                          if($extension == "pdf"){ $image = "pdfico.png"; }
                                          if($extension == "ppt" || $extension == "pptx"){ $image = "pptico.png"; }
                                          if($extension == "mp4" || $extension == "mpeg" || $extension == "avi" || $extension == "wmv" || $extension == "mkv" || $extension == "mov"){ $image = "vidico.png"; }

                                       ?>
                                       <a href="<?php echo $value->url; ?>"><span style="background-image: url('images/<?php echo $image; ?>');width:16px;height: 16px;display:inline-block;"></span><?php echo $value->desc; ?></a><br>
                                 <?php } ?>
	                           </p>
	                        </div>
	                     </div>
	                     <!-- END VIDEO1 -->  
	                     <?php } ?>
	                  </div>
	                  <!-- END FIRST ROW -->
	                  <?php
	                     $count = $count + 3;
	                     }
                     }
                     else{
                     	echo "<h4 style=\"margin-bottom: 40px; margin-top: 30px;\">There are no upcoming live webcasts scheduled at this time.  <a onclick='archive()'  href='javascript:void(0);'>Click here</a> to view archived meetings.</h4>";
                     } 
                     ?>
               </div>

               <div id="archive" class="grd-row m0 px1 my1" style="<?php if(isset($_GET["category"])){ echo "display: none;"; }?>">
                  <h5 style="font-size:17px;" class="m0 p0">Archive WebCast List</h5>
                  <?php 
                     $query = mysqli_query($conn, "SELECT * FROM  `webcasts` WHERE `flag` = 'Archive'  AND `visibility` = '0' ORDER BY `order` ASC, `datetime` DESC");
                     $item_count = mysqli_num_rows($query);
                     if($item_count != 0){
	                     $count = 0;
	                     $skip = 0;
	                     while($item_count > $count)
	                     {
	                     ?>
	                  <!-- FIRST ROW -->  
	                  <div style="display:inline-flex;width:100%;display: -ms-flexbox;">
	                     <?php 
	                        $webcastquery = mysqli_query($conn, "SELECT * FROM  `webcasts` WHERE `flag` = 'Archive'  AND `visibility` = '0' ORDER BY  `order` ASC, `datetime` DESC LIMIT 3 OFFSET ".$count);
	                        while($row = mysqli_fetch_array($webcastquery)){
	                        ?>
	                     <!-- VIDEO1 -->  
	                     <div class="grd-row-col-2-6 media p0 m0" style="width:250px;display:inline-block;vertical-align:top;">
	                        <div class="media-figure eventimg" style="width:250px;display:inline-block;background-size: 250px 150px;margin-bottom:5px;background-image:url(<?php if($row["thumb"] == ""){ echo "images/default-thumb.png"; }else{ echo $row["thumb"]; } ?>)">
	                           <a target="_blank" href="<?php echo $row["url"]; ?>" class="videoplay">
	                           </a>
	                        </div>
	                        <div id="vid1" class="" style="width:250px;">
	                           <span class="m0 p0" style="font-size:13px;line-height:1.2;" id="title1"><b><?php echo $row["title"]; ?></b></span>
	                           <p style="line-height:1.2;font-size:12px;" class="m0 p0 small">
	                              <span id="desc1"><?php echo $row["type"]; ?></span><br>
	                              <span id="name1"><?php echo $row["flag"]; ?><br><?php echo $row["category"]; ?></span><br>
	                              <span id="date1">
	                                 <?php echo date_format(date_create($row["datetime"]), "Y-m-d"); ?>
	                              </span><br>
                                 <?php 
                                     $jsonarray = json_decode($row["download_links"]);
                                     foreach($jsonarray as $value){ 
                                          $array = explode('.', $value->url);
                                          $extension = end($array);
                                          $image = "genico.png";
                                          if($extension == "doc" || $extension == "docx"){ $image = "docico.png"; }
                                          if($extension == "pdf"){ $image = "pdfico.png"; }
                                          if($extension == "ppt" || $extension == "pptx"){ $image = "pptico.png"; }
                                          if($extension == "mp4" || $extension == "mpeg" || $extension == "avi" || $extension == "wmv" || $extension == "mkv" || $extension == "mov"){ $image = "vidico.png"; }

                                       ?>
                                       <a href="<?php echo $value->url; ?>"><span style="background-image: url('images/<?php echo $image; ?>');width:16px;height: 16px;display:inline-block;"></span><?php echo $value->desc; ?></a><br>
                                 <?php } ?>
	                           </p>
	                        </div>
	                     </div>
	                     <!-- END VIDEO1 -->  
	                     <?php } ?>
	                  </div>
	                  <!-- END FIRST ROW -->
	                  <?php
	                     $count = $count + 3;
	                     }
                    }
					else{
						echo "<h4 style=\"margin-bottom: 40px; margin-top: 30px;\">There are no archived webcasts available!</h4>";
					}  
                     ?>
               </div>

               <?php 
                  if(isset($_GET["search"])){
               ?>
                  <!-- MAIN STAGE AFTERNOON SESSION -->
                  <div id="search" class="grd-row m0 px1 my1" style="">
                     <h5 style="font-size:17px;" class="m0 p0">Search Results</h5>
                     <?php 
                        $query = mysqli_query($conn, "SELECT * FROM  `webcasts` WHERE `flag` LIKE '%".$_GET["search"]."%' OR `title` LIKE '%".$_GET["search"]."%' OR `type` LIKE '%".$_GET["search"]."%'  OR `category` LIKE '%".$_GET["search"]."%'  OR `metadata` LIKE '%".$_GET["search"]."%'  AND `visibility` = '0'");
                        $item_count = mysqli_num_rows($query);
                        $count = 0;
                        $skip = 0;
                        while($item_count > $count)
                        {
                        ?>
                     <!-- FIRST ROW -->  
                     <div style="display:inline-flex;width:100%;display: -ms-flexbox;">
                        <?php 
                           $webcastquery = mysqli_query($conn, "SELECT * FROM  `webcasts` WHERE `flag` LIKE '%".$_GET["search"]."%' OR `title` LIKE '%".$_GET["search"]."%' OR `type` LIKE '%".$_GET["search"]."%'  OR `category` LIKE '%".$_GET["search"]."%'  OR `metadata` LIKE '%".$_GET["search"]."%'  AND `visibility` = '0' LIMIT 3 OFFSET ".$count);
                           while($row = mysqli_fetch_array($webcastquery)){
                           ?>
                        <!-- VIDEO1 -->  
                        <div class="grd-row-col-2-6 media p0 m0" style="width:250px;display:inline-block;vertical-align:top;">
                           <div class="media-figure eventimg" style="width:250px;display:inline-block;background-size: 250px 150px;background-image:url(<?php if($row["thumb"] == ""){ echo "images/default-thumb.png"; }else{ echo $row["thumb"]; } ?>)">
                              <a target="_blank" href="<?php echo $row["url"]; ?>">
                                 <div style="width:250px; display:block;" class="videoplay"></div>
                              </a>
                           </div>
                           <div id="vid1" class="" style="width:250px;">
                              <span class="m0 p0" style="font-size:13px;line-height:1.2;" id="title1"><b><?php echo $row["title"]; ?></b></span>
                              <p style="line-height:1.2;font-size:12px;" class="m0 p0 small">
                                 <span id="desc1"><?php echo $row["type"]; ?></span><br>
                                 <span id="name1"><?php echo $row["flag"]; ?></span><br>
                                 <span id="date1" style="display:inline-block;width:100px;">
                                    <!-- Date -->
                                 </span> 
                              </p>
                           </div>
                        </div>
                        <!-- END VIDEO1 -->  
                        <?php } ?>
                     </div>
                     <!-- END FIRST ROW -->
                     <?php
                        $count = $count + 3;
                        } 
                        ?>
                  </div>
                  <!-- MAIN STAGE AFTERNOON SESSION -->
               <?php
                  }
               ?>

               <?php 

                  if(isset($_GET["category"])){
                     
               ?>
                  <!-- MAIN STAGE AFTERNOON SESSION -->
                  <div id="category" class="grd-row m0 px1 my1" style="">
                     <h5 style="font-size:17px;" class="m0 p0"><?php echo $_GET["category"]; ?></h5>
                     <?php 
                        $query = mysqli_query($conn, "SELECT * FROM  `webcasts` WHERE `flag` = 'Archive' AND `category` LIKE '".$_GET["category"]."' AND `visibility` = '0' ORDER BY `datetime` DESC");
                        $item_count = mysqli_num_rows($query);
                        $count = 0;
                        $skip = 0;
                        while($item_count > $count)
                        {
                        ?>
                     <!-- FIRST ROW -->  
                     <div style="display:inline-flex;width:100%;display: -ms-flexbox;">
                        <?php 
                           $webcastquery = mysqli_query($conn, "SELECT * FROM  `webcasts` WHERE `flag` = 'Archive' AND `category` LIKE '".$_GET["category"]."' AND `visibility` = '0' ORDER BY `datetime` DESC LIMIT 3 OFFSET ".$count);
                           while($row = mysqli_fetch_array($webcastquery)){
                           ?>
                        <!-- VIDEO1 -->  
                        <div class="grd-row-col-2-6 media p0 m0" style="width:250px;display:inline-block;vertical-align:top;">
                           <div class="media-figure eventimg" style="width:250px;display:inline-block;background-size: 250px 150px;background-image:url(<?php if($row["thumb"] == ""){ echo "images/default-thumb.png"; }else{ echo $row["thumb"]; } ?>)">
                              <a target="_blank" href="<?php echo $row["url"]; ?>">
                                 <div style="width:250px; display:block;" class="videoplay"></div>
                              </a>
                           </div>
                           <div id="vid1" class="" style="width:250px;">
                              <span class="m0 p0" style="font-size:13px;line-height:1.2;" id="title1"><b><?php echo $row["title"]; ?></b></span>
                              <p style="line-height:1.2;font-size:12px;" class="m0 p0 small">
                                 <span id="desc1"><?php echo $row["type"]; ?></span><br>
                                 <span id="name1"><?php echo $row["flag"]; ?></span><br>
                                 <span id="date1" style="display:inline-block;width:100px;">
                                    <!-- Date -->
                                 </span> 
                              </p>
                           </div>
                        </div>
                        <!-- END VIDEO1 -->  
                        <?php } ?>
                     </div>
                     <!-- END FIRST ROW -->
                     <?php
                        $count = $count + 3;
                        } 
                        ?>
                  </div>
                  <!-- MAIN STAGE AFTERNOON SESSION -->
               <?php
                     }
               ?>

         </div>
         <!-- END MAIN STAGE -->  
         <!-- BREAKOUT SESSION1-->
         <p class="p0 m0" style="clear:both;">&nbsp;</p>
      </div>
      <footer style="clear:both;height:20px;font-weight:bold;" class="bg--light-gray small txt--center p0 m0">
         FDIC, Copyright 2016
      </footer>
      <script type="text/javascript" src="js/jquery.js"></script>
      <script>
         <?php 
         if(isset($_GET["search"])){ ?>
            $('#live').hide();
            $('#archive').hide();
            $('#search').show();
            $('#category').hide();
         <?php
         }elseif(isset($_GET["category"])){ ?>
            $('#live').hide();
            $('#archive').hide();
            $('#search').hide();
            $('#category').show();
         <?php
         }else{ ?>
            $('#live').show();
         <?php
         }
         ?>
         $('#archive').hide();
      </script>
      <script type="text/javascript" src="js/jquery-ui.js"></script>
      <script type="text/javascript" src="js/agile_carousel.alpha.js"></script>
      <script type="text/javascript" src="js/jquery.simplemodal.js"></script>
      <script>
         $( "#menu" ).menu();
         function live() {
             $('#live').show();
             $('#archive').hide();
             $('#search').hide();
             $('#category').hide();
         }
         function archive() {
            $('#archive').show();
             $('#live').hide();
             $('#search').hide();
             $('#category').hide();
         }
      </script>
   </body>
</html>