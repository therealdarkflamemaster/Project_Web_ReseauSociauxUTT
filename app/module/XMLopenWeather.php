<div id='img'></div>
<div id='tem' style="color:black"></div>
<script>

    const HttpXML = new XMLHttpRequest();
    const urlXML = "https://api.openweathermap.org/data/2.5/weather?id=2971548&mode=xml&appid=a18189e2a9f309ca13fee53dd431d2a9";
    HttpXML.open("GET",urlXML);
    HttpXML.send();
    HttpXML.onreadystatechange=(e)=> {

        if(HttpXML.readyState == 4 && HttpXML.status == 200){
            var xmlDoc=HttpXML.responseXML;
            var tempratureTag = xmlDoc.getElementsByTagName("temperature")[0];
            var temp = tempratureTag.getAttribute('value') - 273.15; // the orginal return value is in the format of k
            console.log(temp);

            var weatherTag = xmlDoc.getElementsByTagName("weather")[0];
            var icon = weatherTag.getAttribute('icon');
            console.log(icon);
            var img_src = "../../public/images/" + icon + ".png";
            var image = new String("<img src='" + img_src + "'>")
            var tem = new String("Température de Troyes est " + temp.toFixed(2) + " ℃ aujourd'hui.");
            var tem_pp = document.getElementById("tem");
            tem_pp.innerHTML = tem;
            var img = document.getElementById("img");
            img.innerHTML = image;
        }

    }

</script>