$(document).foundation()

function loadMore () {
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.getElementById("load").innerHTML = "Hello";
        }
    };
    xml.open("GET", "");
    xml.send();
}