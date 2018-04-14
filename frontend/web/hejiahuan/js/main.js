
$(function () {
    $(".aboutmenu").click(function () {
        if ($(".aboutmenu ul").is(":visible")) {
            $(".aboutmenu").removeClass("menuclicks");
            $(".aboutmenu ul").hide();
        }
        else {
            $(".aboutmenu").addClass("menuclicks");
            $(".aboutmenu ul").show();
        }


    });

    $(window).scroll(function () {
        if ($(window).scrollTop() >= 100) {
            $(".backtop").fadeIn();
        } else {

            $(".backtop").fadeOut();
        }
    });


    $(".backtop").click(function (event) {
        $('html,body').animate({ scrollTop: 0 }, 500);
        return false;
    });
    
});


myVid = document.getElementById("media");
function videoshow_company() {
    $(".boxshade").show();
    myVid.autoplay = true;
    $("#media").load();
}
function closevideoplay() {
    $(".boxshade").hide();
    myVid.autoplay = false;
    $("#media").load();
}

myVid1 = document.getElementById("video1");
function loadvideo() {
    
    myVid1.autoplay = true;
    myVid1.play();
    $("#video1").load();
}

var flag = 0;
var isStart = 0, isStart2 = 0;
var rotate = 1, addFlag = 0, removeFlag = 0;
var v1;
//$('.rotate-box').UIMIX({
//        img: "images/rotate/",
//        suff: "png",
//        startIndex: 0, //图片从哪里开始计数
//        firstAnimate: true,
////                stopList: {0: 0}, //在第几针停止多久
//        callback1: function () {//动画播放完执行
//            rotate = 2;
//            v1.animate2(Math.round(1000 / 12))
//        },
//        callback2: function () {//动画播放完执行
//            rotate = 1;
//            v1.animate1("", Math.round(1000 / 12))
//        },
//        fullCallback: function (fullview) {//插件初始化执行
//            v1 = fullview;
//        },
//        comCallback: function () {//图片加载完执行
//            $(".rotate-loading").hide();
//            if (isStart2 == 2) {
//
//                v1.animate1("", Math.round(1000 / 12));
//            }
//            isStart = 1;
//        }
//    });
if (IsPC()) {
    
    
} else {
    if ($("html").width() / $("html").width() < 1) {
        if ($("html").width() < 415 && $("html").height() < 737) {
            $(".sdw-pc").remove();
        }
    } else {
        if ($("html").width() < 737 && $("html").height() < 415) {
            $(".sdw-pc").remove();
        }
    }
//    $(".sdw-pc").remove()
//    $('.sdw04_iphone img').eq(0).load(function(){
//        
//        $(".rotate-loading").hide();
//        $(".sdw04_iphone").show();
//        alert("加载完成!");
//    }).error(function(){
//        alert(2)
//    });
}


var old_w = 0;
$(function () {
    fontResize();
    $(window).resize(function () {
        fontResize();
    });
    $(".btn-sd").click(function(){
        if($("html").width() < 769){
//          var dataratio = $(".sdw-container7").attr("data-ratio",'')
          $(".ie8 .sdw-container1 .sdw1_iphone").css("top","auto");
          
        }
            var $this = $(this);
        $(this).parent(".sdw-container").next(".btn_sdw").slideToggle(1500);
        setTimeout (function(){
            console.log($this);
            $this.fadeOut();
            $this.siblings("a").fadeIn();
        },1300);
    });
    t = setInterval(change, 3000);
    $(".sdw-container10 .sdw10_pic .sdw10_pic2 .slide-dottle span").on("click",function(){
        var offset = -100;
        clearInterval(t);
        var index = $(this).index()
        $(".sdw10_pic .sdw10_pic2 .figure").animate({"left": offset * index + "%"}, 500);
        $(".sdw-container10 .sdw10_pic .sdw10_pic2 .slide-dottle span").eq(index).addClass("select").siblings().removeClass("select");
        t = setInterval(change, 3000);
    });
    $(".sdw-container10 .sdw10_pic .sdw10_pic2_m .slide-dottle span").on("click",function(){
        var offset = -100;
        clearInterval(t);
        var index = $(this).index()
        $(".sdw10_pic .sdw10_pic2_m .figure").animate({"left": offset * index + "%"}, 500);
        $(".sdw-container10 .sdw10_pic .sdw10_pic2_m .slide-dottle span").eq(index).addClass("select").siblings().removeClass("select");
        t = setInterval(change, 3000);
    });
});
var sdw_hw = new sdw_hw({
    mainObj: $("#sdw-wrap"),
    containerObj: $(".sdw-container"),
    animateObj: ".sdw-animate",
    easing: "easeIn",
    topHalf: 0.2,
    bottomHalf: 0.2,
    single: [],
    addEvent: function (self) {
        self.addClass("active");
    },
    removeEvent: function (self) {
        self.removeClass("active");
    },
    imgCompEvent: function () {
        sdw_hw.setHeight();

    }
});
function fontResize() {
    var sdw_width = $("html").width();
    if (old_w == sdw_width) {
        return;
    }
    var w = sdw_width / 1920;
    var fs = sdw_width / 1920;
    var title = 54;
    var ctx = 22;
    var ps = 14;
    if (fs < 0.4 && sdw_width > 768) {
        fs = 0.4;
    }

    if (sdw_width < 769) {
        fs = sdw_width / 750;
        title = 50;
        ctx = 28;
        hjhctx = 20;
        ps = 18.28;
        ctx = ctx * fs;
        hjhctx = hjhctx * fs;
        title =title * fs;
    } else {
        ctx = ((ctx * fs) < 14 ? 14 : (ctx * fs));
        title = ((title * fs) < 25 ? 25 : (title * fs));
    }
     

    $(".sdw-container").css({"font-size": 30 * (sdw_width < 769 ? (sdw_width / 750) : w) + "px"});
    //    公共样式

//    if (sdw_width > 1200) {
//        fs = 1;
//    }
    $(".title").css({"font-size": title + "px", "margin-bottom": 20 * w,"line-height": title * 1.5  + "px"});
    $(".title2").css({"font-size": title + "px", "margin-bottom": 80 * w,"line-height": title * 1.2  + "px"});
    $(".ps").css({"font-size": ps * fs + "px","line-height":ps*1.2 + "px"});
    $(".ps1").css({"font-size": 16 * fs + "px","line-height":1.35+"em"});
    $(".ps_m").css({"font-size": ps * fs + "px","line-height":ps * 0.08 + "em"});
    $(".sup").css({"font-size": ctx + "px"});
    $(".sup2").css({"font-size": ctx + "px"});
    $(".ctx").css({"font-size": ctx + "px", "margin-bottom": 50 * w, "line-height": ctx * 1.7 + "px"});
    $(".ctx2").css({"font-size": ctx + "px", "margin-bottom": 120 * w,"line-height": ctx * 1.5 + "px"});
    $(".ctx4").css({"font-size": ctx + "px", "margin-bottom": 50 * w, "line-height": ctx * 1.4 + "px"});
    $(".btn").css({"font-size": 18 * fs + "px"});
    $(".line").css({ "margin-bottom": 5 * w, "margin-top": 5 * w, "font-size": 45 * fs + "px" });
    $(".chanpintitle1").css({ "font-size": title + "px", "line-height": title * 1.2 + "px" });
    $(".chanpintitle2").css({ "font-size": ctx + "px", "margin-bottom": 120 * w, "line-height": ctx * 1.3 + "px" });
    $(".chanpin-container1 .chanpintitle1").css({ "font-size": title * 0.74 + "px", "line-height": title + "px" });
    $(".chanpin-container1 .chanpintitle2").css({ "font-size": ctx + "px", "margin-bottom": 120 * w, "line-height": ctx * 1.3 + "px" });
    $(".chanpintitle3").css({ "font-size": ctx + "px", "margin-bottom": 1 * w, "line-height": ctx * 1.5 + "px" });
    $(".jsnlmod").css({  "margin-top": 50 * fs + "px" });
    $(".jsnlmod2tit1").css({ "font-size": ctx * 1.1 + "px" });
    $(".jsnlmod2tit2").css({ "font-size": ctx * 0.8 + "px", "margin-top": 11 * fs + "px", "line-height": ctx * 1 + "px" });
    $(".helpsectiontit1").css({ "font-size": ctx * 2.1 + "px", "line-height": ctx * 2.2 + "px" });
    $(".helpsectiontit2").css({ "font-size": ctx * 1.4 + "px", "line-height": ctx * 1.9 + "px" });
    $(".helpsectiontit3").css({ "font-size": ctx * 1.1 + "px", "line-height": ctx * 1.4 + "px" });
    $(".hezuomod2 img").css({ "width": 43 * fs + "px" });
    $(".hezuomod2_0 img").css({ "width": 43 * fs + "px" });
    $(".hezuomod2_1").css({ "line-height": 44 * fs + "px" });
    $(".videotit1").css({ "font-size": title + "px" });
    $(".zxmod3tit2").css({ "font-size": ctx + "px", "line-height": ctx * 1.2 + "px" });
  //    $(".icons").css({"margin-bottom": 55 * w});
   

    $(".spec-css").each(function () {
        var _this = $(this);
        $(this).css("margin-bottom", _this.data("mb") * w + "px");
    });
}
function IsPC()
{
    var userAgentInfo = navigator.userAgent;
    var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "BlackBerry", "iPad", "iPod");
    var flag = true;
    for (var v = 0; v < Agents.length; v++) {
        if (userAgentInfo.indexOf(Agents[v]) > 0) {
            flag = false;
            break;
        }
    }
    return flag;
}

var t;
var index = 0; 
var t; 
var startX, endX;
var isSildemove = true;
var d = true;
function change() {  
    var offset = -100;
    if ($(".sdw10_pic .sdw10_pic2 .figure").is(":animated")) {
        return;
    }
    if ($(".sdw10_pic .sdw10_pic2_m .figure").is(":animated")) {
        return;
    }
    if (index == 0) {
        $(".sdw10_pic .sdw10_pic2 .figure").css("left", "0px");
        $(".sdw10_pic .sdw10_pic2_m .figure").css("left", "0px");
    }
    index++;
    $(".sdw10_pic .sdw10_pic2 .figure").animate({"left": offset * index + "%"}, 500, function () {
        if (index == 2) {
            $(".sdw10_pic .sdw10_pic2 .figure").css("left", "0px");
            index = 0;
        }
    });
    $(".sdw10_pic .sdw10_pic2_m .figure").animate({"left": offset * index + "%"}, 500, function () {
        if (index == 2) {
            $(".sdw10_pic .sdw10_pic2_m .figure").css("left", "0px");
            index = 0;
        }
    });
    if (index > 1) {
        $(".sdw-container10 .sdw10_pic .sdw10_pic2 .slide-dottle span").eq(index-2).addClass("select").siblings().removeClass("select");
        $(".sdw-container10 .sdw10_pic .sdw10_pic2_m .slide-dottle span").eq(index-2).addClass("select").siblings().removeClass("select");
    } else {
        $(".sdw-container10 .sdw10_pic .sdw10_pic2 .slide-dottle span").eq(index).addClass("select").siblings().removeClass("select");
        $(".sdw-container10 .sdw10_pic .sdw10_pic2_m .slide-dottle span").eq(index).addClass("select").siblings().removeClass("select");
    }
}
function left() {
    clearInterval(t);
    var offset = -100;
    if ($(".pic .figure").is(":animated")) {
        return;
    }
    if (index == 0) {
        index = 6;
        $(".pic .figure").css({"left": offset * index + "%"});
        $(".pic-btn ul li").eq(index).addClass("select").siblings().removeClass("select");
    }
    index--;
    $(".pic .figure").animate({"left": offset * index + "%"}, 500, function () {
        d = true;
    });
    $(".pic-btn ul li").eq(index).addClass("select").siblings().removeClass("select");
    t = setInterval(change, 3000);
}
function left2() {
    clearInterval(t);
    var offset = -100;
    if ($(".pic2 .figure").is(":animated")) {
        return;
    }
    if (index == 0) {
        index = 6;
        $(".pic2 .figure").css({"left": offset * index + "%"});
        $(".pic-btn2 ul li").eq(index).addClass("select").siblings().removeClass("select");
    }
    index--;
    $(".pic2 .figure").animate({"left": offset * index + "%"}, 500, function () {
        d = true;
    });
    $(".pic-btn2 ul li").eq(index).addClass("select").siblings().removeClass("select");
    t = setInterval(change, 3000);
}
  function right() {

        clearInterval(t);
        var offset = -100;
        if ($(".pic .figure").is(":animated")) {
            return;
        }
        if ($(".pic2 .figure").is(":animated")) {
            return;
        }
        index++;
        $(".pic .figure").animate({"left": offset * index + "%"}, 500, function () {
            d = true;
            if (index == 6) {
                $(".pic .figure").css("left", "0px");
                index = 0;
                $(".pic-btn ul li").eq(index).addClass("select").siblings().removeClass("select");
            }
        });
        $(".pic2 .figure").animate({"left": offset * index + "%"}, 500, function () {
            d = true;
            if (index == 6) {
                $(".pic2 .figure").css("left", "0px");
                index = 0;
                $(".pic-btn2 ul li").eq(index).addClass("select").siblings().removeClass("select");
            }
        });
        if (index > 5) {
            $(".pic-btn ul li").eq(index - 6).addClass("select").siblings().removeClass("select");
            $(".pic-btn2 ul li").eq(index - 6).addClass("select").siblings().removeClass("select");
        } else {
            $(".pic-btn ul li").eq(index).addClass("select").siblings().removeClass("select");
            $(".pic-btn2 ul li").eq(index).addClass("select").siblings().removeClass("select");
        }
        t = setInterval(change, 3000);
    }
    function right2() {

        clearInterval(t);
        var offset = -100;
        if ($(".pic2 .figure").is(":animated")) {
            return;
        }
        index++;
        $(".pic2 .figure").animate({"left": offset * index + "%"}, 500, function () {
            d = true;
            if (index == 6) {
                $(".pic2 .figure").css("left", "0px");
                index = 0;
                $(".pic-btn2 ul li").eq(index).addClass("select").siblings().removeClass("select");
            }
        });
        if (index > 5) {
            $(".pic-btn2 ul li").eq(index - 6).addClass("select").siblings().removeClass("select");
        } else {
            $(".pic-btn2 ul li").eq(index).addClass("select").siblings().removeClass("select");
        }
        t = setInterval(change, 3000);
    }


  