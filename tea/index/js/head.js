window.onload=function () {
    //导航
    let navi= document.getElementsByClassName("main-navi")[0];
    let col= navi.getElementsByTagName("li");
    for(let i=0;i<col.length;i++){
        col[i].onclick=function () {
            col[i].style.fontcolor='red';
        }
    }
}