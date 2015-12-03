/* Is mobile? */

var MYAPP = {};
MYAPP.isPageLoaded = false;
(function (a) { (jQuery.browser = jQuery.browser || {}).mobile = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od|ad)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p650|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4)) })(navigator.userAgent || navigator.vendor || window.opera);
MYAPP.isMobile = jQuery.browser.mobile;

/* Youtube videos */

(function() {
    var v = document.getElementsByClassName("youtube-player");
    for (var n = 0; n < v.length; n++) {
        var p = document.createElement("div");
        p.innerHTML = labnolThumb(v[n].dataset.id);
        p.onclick = labnolIframe;
        v[n].appendChild(p);
    }
})();
 
function labnolThumb(id) {
    return '<img class="youtube-thumb" src="//i.ytimg.com/vi/' + id + '/hqdefault.jpg">><div class="splash"></div><div class="play-button"</div>';
}
 
function labnolIframe() {
    var iframe = document.createElement("iframe");
    iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("id", "youtube-iframe");
    this.parentNode.replaceChild(iframe, this);
}

/* Recaptcha */

var recaptcha1;
var recaptcha2;
var recaptcha3;

var myCallBack = function() {
  //Render the recaptcha1 on the element with ID "recaptcha1"
  recaptcha1 = grecaptcha.render('recaptcha1', {
    'sitekey' : '6Ld0pw4TAAAAAEo2CaeT_HzrkwCufCp-VV1FNhG4', //Replace this with your Site key
    'theme' : 'light'
  });
  
  //Render the recaptcha2 on the element with ID "recaptcha2"
  recaptcha2 = grecaptcha.render('recaptcha2', {
    'sitekey' : '6Ld0pw4TAAAAAEo2CaeT_HzrkwCufCp-VV1FNhG4', //Replace this with your Site key
    'theme' : 'light'
  });

  recaptcha3 = grecaptcha.render('recaptcha3', {
    'sitekey' : '6Ld0pw4TAAAAAEo2CaeT_HzrkwCufCp-VV1FNhG4', //Replace this with your Site key
    'theme' : 'light'
  });
};

/* Popups */

$('#secure_open').click(function () {
  $('#secure').slideToggle();
  $('#splash').fadeIn();
});

$('.open_reg').click(function () {
  $('#splash, #popup').fadeIn();
  $('#popup .tabs li').toggleClass('active');
  $('#popup .form_block').toggleClass('active');
});

$('.open_popup').click(function () {
  $('#splash, #popup').fadeIn();
  if(($(window).height()/2 - $('#popup').height()/2) < 0 ) {
    $('#popup').css('position', 'absolute').css('top', '0');
    $('html, body').stop().animate({scrollTop: 0}, 1000);
  } else {  
    $('#popup').css("top", ($(window).height()/2 - $('#popup').height()/2) + "px");
  }
  $('.mobile_menu').fadeOut();
  return false;
});

$('.open_feedback, .feedback .button').click(function () {
  $('#splash, #feedback').fadeIn();
  if($(window).height() < $('#feedback').height()) {
   $('#feedback').css('position', 'absolute').css('top','0');
   $('html, body').stop().animate({scrollTop: $('body').offset().top}, 1000);
  }
  return false;
});

$('#splash, .popup .close, #secure .close').click(function () {
  $('#why_us li.active').removeClass('active');
  $('#why_us .info').removeClass('active');
  $('#splash, #secure, #popup, #feedback, .mobile_menu').fadeOut();
  return false;
});

$('#forgot_password').click(function () {
  if($('#login_form input[type=email]').val() == '') {
    $('#login_form input[type=email]').val('Введите email!').css('color', 'rgb(255, 147, 7)');
  }
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#image').attr('src', e.target.result);
            $('.upload-file-container-text').addClass('on_hover');
            $('.upload-file-container-text span').text('Edit photo');
        };
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imgInput").change(function(){
    readURL(this);
});

/* Forms sender */

$('.ajax_form').submit(function() {
    form = $(this);
    var str = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "../send.php",
        data: str,
        success: function(msg) {
          console.log('success - ' + str);
        },
        error: function(msg) {
          console.log('error - ' + str);
        }
    });
    return false;
});

window.Parsley.on('form:submit', function() {
  $(this).find('.g-recaptcha').fadeIn();
  return false;
});

/* Founders tabs */

$('#founders .tabs li').click(function () {
    $('#founders .tabs li').removeClass('active');
    $(this).addClass('active');
    $('#founders .tab').hide();
    $('#founders_' + $(this).attr('id')).show();
});

$('#popup .tabs li').click(function () {
    $('#popup .tabs li').toggleClass('active');
    $('#popup .form_block').toggleClass('active');
    if(($(window).height()/2 - $('#popup').height()/2) < 0 ) {
      $('#popup').css('position', 'absolute').css('top', '0');
      $('html, body').stop().animate({scrollTop: $('body').offset().top}, 1000);
    } else {  
      $('#popup').css("top", ($(window).height()/2 - $('#popup').height()/2) + "px");
    }
});

$('#popup input').click(function () {
  if(($(window).height()/2 - $('#popup').height()/2) < 0 ) {
    $('#popup').css('position', 'absolute').css('top', '0');
    $('html, body').stop().animate({scrollTop: $('body').offset().top}, 1000);
  } else {  
    $('#popup').css("top", ($(window).height()/2 - $('#popup').height()/2) + "px");
  }
});

$('#feedback input').click(function () {
  if(($(window).height()/2 - $('#feedback').height()/2) < 0 ) {
    $('#feedback').css('position', 'absolute').css('top', '0');
    $('html, body').stop().animate({scrollTop: $('body').offset().top}, 1000);
  } else {  
    $('#feedback').css("top", ($(window).height()/2 - $('#feedback').height()/2) + "px");
  }
});

/*$( window ).resize(function() {
  if(($(window).height()/2 - $('#popup').height()/2) < 0 ) {
    $('#popup').css('position', 'absolute').css('top', '0');
    $('html, body').stop().animate({scrollTop: $('body').offset().top}, 1000);
  } else {  
    $('#popup').css("top", ($(window).height()/2 - $('#popup').height()/2) + "px");
  }
  if($(window).height()/2 - $('#feedback').height()/2 < 0) {
   $('#feedback').css('position', 'absolute');
   $('html, body').stop().animate({
       scrollTop: $('body').offset().top
   }, 1000);
  } else {
    $('#feedback').css('position', 'fixed');
  }
});*/

$('#last .tabs li').click(function () {
    $('#last .tabs li').toggleClass('active');
    $('#last .tab').toggleClass('active');
});

/* Why us changer */

$('#why_us li').click(function () {
    if($(this).hasClass('active')) {
      $('#why_us .bg').css('opacity', '1');
      $('#why_us li.active').removeClass('active');
      $('#why_us .info.active').removeClass('active');
    } else {
      $('#why_us .bg').css('opacity', '0');
      $('#why_us li.active').removeClass('active');
      $(this).addClass('active');
      $('#why_us .info.active').removeClass('active');
      $('#' + $(this).attr('id') + '_content').addClass('active');
    }
});

$('#why_us .close').click(function () {
    $('#why_us li.active').removeClass('active');
    $(this).parent().removeClass('active');
});

$("#why_us").click(function (event){
      if( ! $( event.target).is('li, div.icon, svg, path') ) {
        $('#why_us .bg').css('opacity', '1');
        $('#why_us li.active').removeClass('active');
        $('#why_us .info.active').removeClass('active');
      }
      console.log($( event.target));
});

/* Clients changer */

$('#reviews .clients .client').click(function () {
    $('#reviews .clients .client.active').removeClass('active');
    $(this).addClass('active');
    $('#reviews .infos .info.active').removeClass('active');
    $('#' + $(this).attr('id') + '_info').addClass('active');
});

$('#reviews .infos .info .arrows .left, #reviews .infos .info .arrows .right').click(function () {
    id = $(this).parent().parent().attr('id');
    id = id.replace('_info', '');
    id = parseInt(id.substr(id.length - 1));
    if($(this).hasClass('left')) {
    	if(id == 1) {
    		new_id = 9
    	} else {
	        new_id = id - 1;
	    }
    } else {
    	if(id == 9) {
	    	new_id = 1;
	    } else {
	    	new_id = id + 1;
	    }
    }
    $('#reviews .clients .client.active').removeClass('active');
    $('#client' + new_id).trigger('click');
});

/* Scrolls */

$(window).scroll(function () {
  if ($(this).scrollTop() > ($(window).height() / 2)) {
      $('#go_up').fadeIn();
  } else {
      $('#go_up').fadeOut();
  }
});

$('#go_up, footer .logo').click(function () {
    $('html, body').stop().animate({
         scrollTop: $('body').offset().top
      }, 1000);
    return false;
});

$(document).ready(function(){
 $('a[href*=#]').bind("click", function(e){
    var anchor = $(this);
    if($(anchor.attr('href')).length > 0 ) {
      $('html, body').stop().animate({
         scrollTop: $(anchor.attr('href')).offset().top
      }, 1000);
    } else {
      window.location.href = "http://elyshev-dev.ru/exall/" + anchor.attr('href');
    }
    e.preventDefault();
 });
 return false;
});

