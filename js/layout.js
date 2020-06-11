
window.onload = function(){
    p();
}
function p(){
    var w = document.documentElement.offsetWidth;
    var k=w/1519*1*100;
    document.getElementById("mytext").style.fontSize=20+"%";
}
window.onresize=function(){
    laceholderPic();
}
