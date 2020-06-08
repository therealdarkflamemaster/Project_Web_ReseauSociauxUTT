<div id="html"></div>

<script>
    const HttpHTML = new XMLHttpRequest();
    const urlHTML="https://api.openweathermap.org/data/2.5/weather?id=2971548&appid=a18189e2a9f309ca13fee53dd431d2a9&mode=html&lang=fr";
    HttpHTML.open("GET",urlHTML);
    HttpHTML.send();
    HttpHTML.onreadystatechange=(e)=> {

        if(HttpHTML.readyState == 4 && HttpHTML.status == 200){
            var textHTML=HttpHTML.responseText;
            console.log(textHTML);
            document.getElementById("html").innerHTML = textHTML;
        }

    }
</script>