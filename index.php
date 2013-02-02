<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="ASSETS/css/2012.css" rel="stylesheet" type="text/css">
<link href="ASSETS/css/imports_css.css" rel="stylesheet" type="text/css">
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->



</head>
<body onLoad="displayItem()">

<div class="gridContainer clearfix">
  
  <div id="header">
  	<div class="beta">Beta 1.5</div><img src="ASSETS/logo/Android_notepad-download-letter11_12.png"></div>
   		
           <div id="test" style="display:none;" class="test">
                <!-- loader -->
                <div class="loader" id="loader"><img src="ASSETS/loader/ajax-loader.gif" alt="loading logo"><br/>Loading...</div>
                
          </div>
  	<div id="ho">
  	<div id="largeImage"><img style="display:none;" id="smallImage" src="" /></div>
	<div id="a"><a href="#"><img src="ASSETS/icons/SEARCH_18.png"></a><br/><br/>SEARCH INVENTORY</div>
 	<div id="b"><a href="tel:619-316-9904"><img src="ASSETS/icons/CALL.png"></a><br/><br/>CALL SALECARRO</div>
  	<div id="c"><a href="#" onClick="getPage('users.php', 'test'); return false"><img src="ASSETS/icons/Android_notepad-download-letter_21.png"></a><br/><br/>LOG-IN</div>
  	<div id="d"><a href="#" onClick="getPage('app_car_dealer_list.php', 'test')"><img src="ASSETS/icons/Android_notepad-download-letter_32.png"></a><br/><br/>CAR DEALERS</div>
  
  
  	<div id="f"><a href="#" onClick="getPage('more-info-on-app.html', 'test')";><img src="ASSETS/icons/info.png" width="80" height="89"></a><br/><br/>MORE INFO</div>
  	<div id="g"><a href="#" id="photoButton" onClick="capturePhoto();"><img src="ASSETS/icons/add.png" width="80" height="89"></a><br/><br/>ADD CAR</div>
  	
	</div>
<div id="content"></div>
  <div id="footer">
    <h3>SaleCarro 2012 | <a href="#" onClick="clearCookie('userId')">log-Out</a></h3>
    
  </div>
</div>

<script src="respond.min.js"></script>
<script type="text/javascript" charset="utf-8" src="phonegap.js"> </script>
<script type="text/javascript" src="javascript/master_copy.js"> </script>

</body>
</html>
