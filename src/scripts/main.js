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
      "pk.eyJ1IjoibWlsZS1mZiIsImEiOiJja2J0OWM3cW4wN3Q2MnVwY2dxbjM4Y3B0In0.X-ZKLHTLah0_hDDiussOQQ";

    if ($("#map").length) {
      var map = new mapboxgl.Map({
        container: "map",
        style: "mapbox://styles/mapbox/streets-v11",
        center: [-120, 50],
        zoom: 2,
      });

      map.on("load", function () {
        // Add a geojson point source.
        // Heatmap layers also work with a vector tile source.
        map.addSource("earthquakes", {
          type: "geojson",
          data:
            "https://docs.mapbox.com/mapbox-gl-js/assets/earthquakes.geojson",
        });

        map.addLayer(
          {
            id: "earthquakes-heat",
            type: "heatmap",
            source: "earthquakes",
            maxzoom: 9,
            paint: {
              // Increase the heatmap weight based on frequency and property magnitude
              "heatmap-weight": [
                "interpolate",
                ["linear"],
                ["get", "mag"],
                0,
                0,
                6,
                1,
              ],
              // Increase the heatmap color weight weight by zoom level
              // heatmap-intensity is a multiplier on top of heatmap-weight
              "heatmap-intensity": [
                "interpolate",
                ["linear"],
                ["zoom"],
                0,
                1,
                9,
                3,
              ],
              // Color ramp for heatmap.  Domain is 0 (low) to 1 (high).
              // Begin color ramp at 0-stop with a 0-transparancy color
              // to create a blur-like effect.
              "heatmap-color": [
                "interpolate",
                ["linear"],
                ["heatmap-density"],
                0,
                "rgba(33,102,172,0)",
                0.2,
                "rgb(103,169,207)",
                0.4,
                "rgb(209,229,240)",
                0.6,
                "rgb(253,219,199)",
                0.8,
                "rgb(239,138,98)",
                1,
                "rgb(178,24,43)",
              ],
              // Adjust the heatmap radius by zoom level
              "heatmap-radius": [
                "interpolate",
                ["linear"],
                ["zoom"],
                0,
                2,
                9,
                20,
              ],
              // Transition from heatmap to circle layer by zoom level
              "heatmap-opacity": [
                "interpolate",
                ["linear"],
                ["zoom"],
                7,
                1,
                9,
                0,
              ],
            },
          },
          "waterway-label"
        );

        map.addLayer(
          {
            id: "earthquakes-point",
            type: "circle",
            source: "earthquakes",
            minzoom: 7,
            paint: {
              // Size circle radius by earthquake magnitude and zoom level
              "circle-radius": [
                "interpolate",
                ["linear"],
                ["zoom"],
                7,
                ["interpolate", ["linear"], ["get", "mag"], 1, 1, 6, 4],
                16,
                ["interpolate", ["linear"], ["get", "mag"], 1, 5, 6, 50],
              ],
              // Color circle by earthquake magnitude
              "circle-color": [
                "interpolate",
                ["linear"],
                ["get", "mag"],
                1,
                "rgba(33,102,172,0)",
                2,
                "rgb(103,169,207)",
                3,
                "rgb(209,229,240)",
                4,
                "rgb(253,219,199)",
                5,
                "rgb(239,138,98)",
                6,
                "rgb(178,24,43)",
              ],
              "circle-stroke-color": "white",
              "circle-stroke-width": 1,
              // Transition from heatmap to circle layer by zoom level
              "circle-opacity": [
                "interpolate",
                ["linear"],
                ["zoom"],
                7,
                0,
                8,
                1,
              ],
            },
          },
          "waterway-label"
        );
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
    $("body").append(scriptTag);
  }, 1000);
})(jQuery);
