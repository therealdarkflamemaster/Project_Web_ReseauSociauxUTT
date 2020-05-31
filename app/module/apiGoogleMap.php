<script>

        var url ="http://localhost/ReseauSociauxUTT/app/module/map.html";
        openwindow(url,"Open in Google Map",1000,500);


    function openwindow(url,name,iWidth,iHeight){
        var url;
        var name;
        var iWidth;
        var iHeight;
        var iTop = (window.screen.availHeight-30-iHeight)/2 ;
        var iLeft = (window.screen.availWidth-10-iWidth)/2;
        window.open(url,name,'height='+iHeight+',,innerHeight='+iHeight+',width='+iWidth+',innerWidth='+iWidth+',top='+iTop+',left='+iLeft+',toolbar=no,menubar=no,scrollbars=auto,resizeable=no,location=no,status=no');
    }
</script>
