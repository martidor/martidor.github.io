window.addEventListener("load", main);

function main() {

    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.open("GET","xml/ordliste.xml",true);
    xmlhttp.send();

    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            displayXML(xmlhttp.responseXML);
        }
    }
}

function displayXML(xml) {
    var text = document.getElementById("xml");	
    var textToDisplay = "";

    var ord = xml.getElementsByTagName("mange_ord")[0].getElementsByTagName("ord");
    textToDisplay += "<h2>Ord</h2>";
    for (i=0; i < ord.length; i++) {
        textToDisplay += ord[i].getElementsByTagName("norsk")[0].childNodes[0].nodeValue;
        textToDisplay += " - ";
        textToDisplay += ord[i].getElementsByTagName("trondersk")[0].childNodes[0].nodeValue;
        textToDisplay += "<br>";
    }

    var uttrykk = xml.getElementsByTagName("mange_uttrykk")[0].getElementsByTagName("uttrykket");
    textToDisplay += "<h2>Uttrykk</h2>";
    for (i=0; i < uttrykk.length; i++) { 
        textToDisplay += uttrykk[i].getElementsByTagName("uttrykk")[0].childNodes[0].nodeValue;
        textToDisplay += " - ";
        textToDisplay += uttrykk[i].getElementsByTagName("forklaringen")[0].childNodes[0].nodeValue;
        textToDisplay += "<br>";
    }

    var skjellsord = xml.getElementsByTagName("mange_skjellsord")[0].getElementsByTagName("skjellsord");
    textToDisplay += "<h2>Skjellsord</h2>";
    for (i=0; i < skjellsord.length; i++) { 
        textToDisplay += skjellsord[i].getElementsByTagName("ord")[0].childNodes[0].nodeValue;
        textToDisplay += " - ";
        textToDisplay += skjellsord[i].getElementsByTagName("forklaring")[0].childNodes[0].nodeValue;
        textToDisplay += "<br>";
    }

    text.innerHTML = textToDisplay;
}
