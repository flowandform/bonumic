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
    $(".js-headroom").headroom();

    var copyText = $($(".right-list__permalink").get(0)).text();

    $(".copy-link").on("click", function (event) {
      event.preventDefault();
      copyTextToClipboard(copyText);
    });

    $(".burger-menu__icon").on("click", function () {
      $(".burger-menu").toggleClass("burger-menu--opened");
      $(".icon__line--second").toggleClass("icon__line--opened");
      $(".content-overlay").toggleClass("content-overlay--on");
    });

    $(".content-overlay").on("click", function () {
      $(".content-overlay").removeClass("content-overlay--on");
      $(".burger-menu").removeClass("burger-menu--opened");
    });
  });
})(jQuery);
