
/*FitText.js 1.2
 * Copyright 2011, Dave Rupert http://daverupert.com
 * Released under the WTFPL license
 * http://sam.zoy.org/wtfpl/
 */
 (function(e){e.fn.fitText=function(t,n){var r=t||1,i=e.extend({minFontSize:Number.NEGATIVE_INFINITY,maxFontSize:Number.POSITIVE_INFINITY},n);return this.each(function(){var t=e(this);var n=function(){t.css("font-size",Math.max(Math.min(t.width()/(r*10),parseFloat(i.maxFontSize)),parseFloat(i.minFontSize)))};n();e(window).on("resize.fittext orientationchange.fittext",n)})}})(jQuery)

const portrait = {"#emergency": .9, "#rejection": .9, "#depression": .9, "#relapsed": .9, "#suggest": 1.3};
const landscape = {"#emergency": 1.1, "#rejection": 2, "#depression": 1.7, "#relapsed": 2, "#suggest": 4};
function orient(values) {
  for (var key in values) {
   $(key).fitText(values[key]);
 }
}
function readDeviceOrientation() {
  if (Math.abs(window.orientation)===90){
    orient(landscape)
  } else {
    orient(portrait)
  }
}
window.onorientationchange = readDeviceOrientation;
readDeviceOrientation();

function api(cat) {
    $.get("director.php", {cat: cat, religious: religiousCheck}, function(url){
      window.location.href=url;
    })
    .fail(function(err){
      alert(err.responseText)
    })
}

$(bookmark).hover(function () {
  if ($(this).attr('class') === undefined) {
    $(this).attr('class', '');
  }
  if ($(this).is(":hover")) {
    $(this).addClass('hover');
    $(religious).addClass('bkhover');
  } else if (!$('#religious:hover').length) {
    $(this).removeClass('hover hovercomplete');
    $(religious).removeClass('bkhover');
  }
});
$(suggest).click(function(){window.location.href="suggestor.html"});
$(ios).click(function(){window.location.href="https://appsto.re/us/9vp26.i"});
$(android).click(function(){window.location.href="https://play.google.com/store/apps/details?id=org.nofap.emergency"});
$(nofap).click(function(){window.location.href="https://www.nofap.com"});

function getCookie(t) {
  for(var n=t+"=",r=document.cookie.split(";"),e=0;e<r.length;e++) {
    for(var i=r[e];" "==i.charAt(0);)
      i=i.substring(1);
    if(-1!=i.indexOf(n))
      return i.substring(n.length,i.length)
  }
  return ""
}

var religiousCheck = getCookie("religious");

function setCookie(pref) {
  document.cookie="religious=" + pref +";expires=Mon, 1 Jan 2028 12:00:00 UTC"
}
if (religiousCheck=="true") {
  $("#religious input, #mobilereligious input").iCheck("check")
} else {
  setCookie("false");
}

$("#religious input, #mobilereligious input").on("ifChecked", function(e){
  religiousCheck="true";
  setCookie("true");
});
$("#religious input, #mobilereligious input").on("ifUnchecked", function(e){ 
  religiousCheck="false";
  setCookie("false");
});
$("input[type=checkbox]").on("ifChecked ifUnchecked", function (e) {
  setTimeout(bkChange); // Run bkChange AFTER iCheck has changed the value
});

function bkChange() {
  var emergency = $("#bkemergency .icheckbox_line-grey.checked").length > 0;
  var rejection = $("#bkrejection .icheckbox_line-grey.checked").length > 0;
  var depression = $("#bkdepression .icheckbox_line-grey.checked").length > 0;
  var relapsed = $("#bkrelapsed .icheckbox_line-grey.checked").length > 0;

  var url = 'https://emergency.nofap.com/redirect?cat=';
  var num = 0;
  if (emergency) {
    num++;
    url += 'em';
  }
  if (rejection) {
    if (num++ > 0) url += '+';
    url += 'rej';
  }
  if (depression) {
    if (num++ > 0) url += '+';
    url += 'dep';
  }
  if (relapsed) {
    if (num++ > 0) url += '+';
    url += 'rel';
  }
  if (religiousCheck === "true") {
    url += '&religious=true';
  } else {
    url += '&religious=false';
  }
  if (num === 0) {
    url = "Please select at least 1 category";
  }
  $('#bklink input').val(url);
}

$(function() {
 $.smartbanner({title:"NoFap",author:"Official NoFap App",hideOnInstall:true})
})

$(document).ready(function () {
  $("input[type=checkbox]").each(function () { var e = $(this), t = e.next(), n = t.text(); t.remove(); e.iCheck({ checkboxClass: "icheckbox_line-grey", radioClass: "iradio_line-grey", insert: '<div class="icheck_line-icon"></div>' + n }) });

  $('.iCheck-helper').on('mouseleave', function (e) {
    $(bookmark).trigger(e.type);
  });

  bkChange();
});
