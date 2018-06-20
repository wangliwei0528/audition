window.onload=function(){
    var oBtn=document.getElementById("btn");
    var timer=null;
    //申明一个变量看是否为系统还是用户滚动
    var sBys=true;
    window.onscroll= function(){
        if(!sBys){
            clearInterval(timer);
        }
        sBys=false;
    }
    oBtn.onclick=function(){
        timer = setInterval(function(){
            //获取scrollTop
            var scrollTop=document.documentElement.scrollTop||document.body.scrollTop;
            console.dir(scrollTop);
            //当点击按钮回到顶部时计算缓冲速度
            var ispeed=Math.floor(-scrollTop/8);
            if(scrollTop==0){
                clearInterval(timer)
            }
            sBys=true;
            document.documentElement.scrollTop=document.body.scrollTop=scrollTop+ispeed;
        },30)
    }
}