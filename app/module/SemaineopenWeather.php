<div id="openweathermap-widget-11"></div>

<script src='//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script>
<script>
    window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];
    window.myWidgetParam.push({
        id: 11,
        cityid: '2971548',
        lang: 'fr',
        appid: 'a18189e2a9f309ca13fee53dd431d2a9',
        units: 'metric',
        containerid: 'openweathermap-widget-11',
    });
    (function() {
        var script = document.createElement('script');
        script.async = true;
        script.charset = "utf-8";
        script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(script, s);  })
    ();
</script>