<div>Par HTML</div>
<div id="html"></div>

<script>
    const Http = new XMLHttpRequest();
    const url="https://api.openweathermap.org/data/2.5/weather?id=2971548&appid=a18189e2a9f309ca13fee53dd431d2a9&mode=html";
    Http.open("GET",url);
    Http.send();
    Http.onreadystatechange=(e)=> {

        if(Http.readyState == 4 && Http.status == 200){
            var textHTML=Http.responseText;
            console.log(textHTML);
            document.getElementById("html").innerHTML = textHTML;
        }

    }
</script>