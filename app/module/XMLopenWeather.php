<script>

    const Http = new XMLHttpRequest();
    const url = "https://api.openweathermap.org/data/2.5/weather?id=2971548&mode=xml&appid=a18189e2a9f309ca13fee53dd431d2a9";
    Http.open("GET",url);
    Http.send();
    Http.onreadystatechange=(e)=> {

        if(Http.readyState == 4 && Http.status == 200){
            var xmlDoc=Http.responseXML;
            var tempratureTag = xmlDoc.getElementsByTagName("temperature")[0];
            var temp = tempratureTag.getAttribute('value') - 273.15; // the orginal return value is in the format of k
            console.log(temp);

            var weatherTag = xmlDoc.getElementsByTagName("weather")[0];
            var icon = weatherTag.getAttribute('icon');
            console.log(icon);
        }

    }

</script>