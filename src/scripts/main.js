function fallbackCopyTextToClipboard(text) {
  var textArea = document.createElement("textarea");
  textArea.value = text;

  // Avoid scrolling to bottom
  textArea.style.top = "0";
  textArea.style.left = "0";
  textArea.style.position = "fixed";

  document.body.appendChild(textArea);
  textArea.focus();
  textArea.select();
  document.execCommand("copy");
  document.body.removeChild(textArea);
}

function copyTextToClipboard(text) {
  if (!navigator.clipboard) {
    fallbackCopyTextToClipboard(text);
    return;
  }

  navigator.clipboard.writeText(text);
}

(function ($) {
  $(document).ready(function () {
    var options = {
      // vertical offset in px before element is first unpinned
      offset: 200,
    };

    $(".js-headroom").headroom(options);

    mapboxgl.accessToken =
      "pk.eyJ1IjoiaGFzZWxudXNzIiwiYSI6ImNrOXZyc2Y4ZzAxeWMzZXFzNHkyMmp0cjQifQ.QRQfmIBMs8CWBz3wuyaEZA";

    function drawMapbox(container, dataSource) {
      var map = new mapboxgl.Map({
        container: container,
        style: dataSource,
        zoom: 12,
        center: [-122.44, 37.73],
        pitch: 90,
      });
      if ($(window).width() < 767) {
        map.scrollZoom.disable();
      }
    }

    if ($(".bonumic-map").length) {
      $(".bonumic-map").each(function (index) {
        var container = $(this).attr("id");
        var dataSource = $(this).data("style") || "mapbox://styles/haselnuss/ckc4lpr400trl1jn413z9dbug";
        drawMapbox(container, dataSource);
      });
    }

    var copyText = $($(".right-list__permalink").get(0)).text();

    $(".copy-link").on("click", function (event) {
      event.preventDefault();
      copyTextToClipboard(copyText);
    });

    $(".burger-menu__icon").on("click", function () {
      $(".burger-menu").toggleClass("burger-menu--opened");
      $(".icon__line--second").toggleClass("icon__line--opened");
      $(".content-overlay").toggleClass("content-overlay--on");
      $("header").toggleClass("header--opened");
    });

    $(".content-overlay").on("click", function () {
      $(".content-overlay").removeClass("content-overlay--on");
      $(".icon__line--second").removeClass("icon__line--opened");
      $(".burger-menu").removeClass("burger-menu--opened");
      $("header").removeClass("header--opened");
    });

    $(window).scroll(function () {
      var scroll = $(window).scrollTop();

      if (scroll > 5 && scroll < 200) {
        $("header").addClass("header-start-scroll");
      } else {
        $("header").removeClass("header-start-scroll");
      }
    });
  });

  setTimeout(function () {
    var scriptTag = `  <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>
      (function($) {
        window.fnames = new Array();
        window.ftypes = new Array();
        fnames[0] = 'EMAIL';
        ftypes[0] = 'email';
      }(jQuery));
      var $mcj = jQuery.noConflict(true);
    </script>`;
    if ($("form#mc-embedded-subscribe-form").length) {
      $("body").append(scriptTag);
    }
  }, 1000);
})(jQuery);
