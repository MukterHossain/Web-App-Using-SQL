let formSub=document.getElementById("form-sub");
let showInfo=document.getElementById("show-info");
let formsec=document.getElementById("formsec");
let infoSec=document.getElementById("info-sec");

// formSub.addEventListener("onclick", showData(formsec,infoSec));
// showInfo.addEventListener("onclick", showData(infoSec,formsec));
function showData(x,y,z,u){
    x.style.display = 'block';
    y.style.display = 'none';
    z.setAttribute("class", "active-sub");
    u.setAttribute("class", "submenu");
}
