<!--Google reCaptcha-->
var onSuccess = function(response) {
    document.getElementById("butdis").disabled = false;
};

$(".linkButton").click(function() {
    $( "input[name*='formInfo']" ).val($(this).attr( "title" ));
});

<!--Scroll to top-->
$(function() {
    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function() {
        $('body,html').animate({scrollTop:0},800);
    });
});

<!--Scroll to link menu-->
$(function () {
    $('#ourservice').click(function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#ourservicelink").offset().top
        }, 1000);
    });
    $('#kompany').click(function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#linkkompany").offset().top
        }, 1000);
    });
    $('#contact').click(function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#linkcontact").offset().top
        }, 1000);
    });
    $('#companyfooter').click(function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#linkkompany").offset().top
        }, 1000);
    });
    $('#ourservicefooter').click(function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#ourservicelink").offset().top
        }, 1000);
    });
});

<!--Cookies modal window-->
(function(){
    //Change these values
    var msg = "Мы используем файлы cookie. Продолжив работу с сайтом, вы соглашаетесь с Политикой обработки персональных данных. ";
    var closeBtnMsg = "Согласен(а)";
    var privacyBtnMsg = "Узнать больше";
    var privacyLink = "documents/politicks.pdf";
    //check cookies
    if(document.cookie){
        var cookieString = document.cookie;
        var cookieList = cookieString.split(";");
        // if cookie named OKCookie is found, return
        for(x = 0; x < cookieList.length; x++){
            if (cookieList[x].indexOf("OKCookie") != -1){return};
        }
    }
    var docRoot = document.body;
    var okC = document.createElement("div");
    okC.setAttribute("id", "okCookie");
    var okCp = document.createElement("p");
    var okcText = document.createTextNode(msg);
    //close button
    var okCclose = document.createElement("a");
    var okcCloseText = document.createTextNode(closeBtnMsg);
    okCclose.setAttribute("href", "#");
    okCclose.setAttribute("id", "okClose");
    okCclose.appendChild(okcCloseText);
    okCclose.addEventListener("click", closeCookie, false);
    //privacy button
    var okCprivacy = document.createElement("a");
    var okcPrivacyText = document.createTextNode(privacyBtnMsg);
    okCprivacy.setAttribute("href", privacyLink);
    okCprivacy.setAttribute("target", "_blank");
    okCprivacy.setAttribute("id", "okCprivacy");
    okCprivacy.appendChild(okcPrivacyText);
    //add to DOM
    okCp.appendChild(okcText);
    okC.appendChild(okCp);
    okC.appendChild(okCclose);
    okC.appendChild(okCprivacy);
    docRoot.appendChild(okC);
    okC.classList.add("okcBeginAnimate");
    function closeCookie(){
        var cookieExpire = new Date();
        cookieExpire.setFullYear(cookieExpire.getFullYear() +2);
        document.cookie="OKCookie=1; expires=" + cookieExpire.toGMTString() + ";";
        docRoot.removeChild(okC);
    }
})();

<!--Mask number phone modal window-->
$(document).ready(function() {
    $("#phone").mask("+7 (999) 999-99-99");
});