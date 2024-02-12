 var ajaxku;
    function getfasilitas(lok){
            ajaxku = createajax();
            var url="get_fasilitas.php";
            url=url+"?lok="+lok;
            url=url+"&sid="+Math.random();
            ajaxku.onreadystatechange=fasilitasChanged;
            ajaxku.open("GET",url,true);
            ajaxku.send(null);
        }
    function fasilitasChanged(){
            var data;
            document.getElementById("dvfasilitas").innerHTML= "Looading.......";
            if (ajaxku.readyState==4)
                {
                    data=ajaxku.responseText;
                    if(data.length>0)
                        {
                            document.getElementById("dvfasilitas").innerHTML = data
                        }
                    else
                        {
                            document.getElementById("dvfasilitas").innerHTML= "";
                        }
                }
            else
                {
                    document.getElementById("dvfasilitas").innerHTML= "Looding";
                }           
            }                                           
      
    function createajax(){
            if (window.XMLHttpRequest){
                    return new XMLHttpRequest();
                }
            if (window.ActiveXObject){
                return new ActiveXObject("Microsoft.XMLHTTP");
                }
            return null;
        }