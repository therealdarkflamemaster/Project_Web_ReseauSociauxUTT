<script>
    const Http = new XMLHttpRequest();
    const url="https://api.openweathermap.org/data/2.5/weather?id=2971548&appid=a18189e2a9f309ca13fee53dd431d2a9";
    Http.open("GET",url);
    Http.send();

    Http.onreadystatechange=(e)=> {
        //var text = Http.responseText;
        var text = JSON.parse(JSON.stringify(Http.responseText));
        // try {
        //     var obj =JSON.parse(text);
        // } catch (d) {}
        var obj = JSON.parse(text);
        var num_icon = obj.weather[0].icon;
        var temperature = obj.main.temp - 273.15; // the orginal return value is in the format of k
        // console.log(num_icon);
        // console.log(temperature);
        var img_src = "../../public/images/" + num_icon + ".png";
        var image = new String("<img src='" + img_src + "'>")
        var tem = new String("Température de Troyes est " + temperature.toFixed(2) + " ℃ aujourd'hui.");
        var tem_pp = document.getElementById("tem");
        tem_pp.innerHTML = tem;
        var img = document.getElementById("img");
        img.innerHTML = image;
    }
</script>