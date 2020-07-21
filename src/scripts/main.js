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

    mapboxgl.accessToken =
      "pk.eyJ1IjoiaGFzZWxudXNzIiwiYSI6ImNrOXZyc2Y4ZzAxeWMzZXFzNHkyMmp0cjQifQ.QRQfmIBMs8CWBz3wuyaEZA";

    var { MapboxLayer, HexagonLayer } = deck;

    var map = new mapboxgl.Map({
      container: "map-1",
      style: "mapbox://styles/mapbox/dark-v10?optimize=true",
      center: [-1.4157, 52.2324],
      zoom: 6,
      pitch: 40.5,
      antialias: true,
    });

    // Get Data for visual
    var DATA_URL =
      "https://raw.githubusercontent.com/flowandform/bonumic/master/Centroid_long_lat_san_francisco.csv";

    //Create the deck.gl hexagon layer and style for the data
    var OPTIONS = ["radius", "coverage", "upperPercentile"];
    var COLOR_RANGE = [
      [1, 152, 189],
      [73, 227, 206],
      [216, 254, 181],
      [254, 237, 177],
      [254, 173, 84],
      [209, 55, 78],
    ];
    var LIGHT_SETTINGS = {
      lightsPosition: [-0.144528, 49.739968, 8000, -3.807751, 54.104682, 8000],
      ambientRatio: 0.4,
      diffuseRatio: 0.6,
      specularRatio: 0.2,
      lightsStrength: [0.8, 0.0, 0.8, 0.0],
      numberOfLights: 2,
    };

    var hexagonLayer;

    //Add the deck.gl Custom Layer to the map once the Mapbox map loads
    map.on("style.load", () => {
      hexagonLayer = new MapboxLayer({
        type: HexagonLayer,
        id: "heatmap",
        data: d3.csv(DATA_URL),
        radius: 100,
        coverage: 1,
        upperPercentile: 100,
        colorRange: COLOR_RANGE,
        elevationRange: [0, 50],
        elevationScale: 250,
        extruded: true,
        getPosition: (d) => [Number(d.lng), Number(d.lat)],
        lightSettings: LIGHT_SETTINGS,
        opacity: 1,
      });

      // Add the deck.gl hex layer below labels in the Mapbox map
      map.addLayer(hexagonLayer, "waterway-label");
    });

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
