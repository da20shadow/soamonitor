/* Live Search Ajax Start Here */
function showResult(str) {

    if (str.length === 0) {
        document.getElementById("live-search").innerHTML = "";
        document.getElementById("live-search").style.border = "0px";
        return;
    }

    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange=function() {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("live-search").innerHTML=this.responseText;
            document.getElementById("live-search").style.border="1px solid #A5ACB2";
        }
    }
    xmlHttp.open("GET","includes/live_search.php?q="+str,true);
    xmlHttp.send();
}