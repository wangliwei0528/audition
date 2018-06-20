window.onload=function(){
	//自动轮播
	let bbox = document.getElementsByClassName('banner-box')[0];
	let imgs = bbox.getElementsByTagName('li');
	let t = setInterval(fn, 3000);
	let num=0;
	bbox.onmouseenter = function() {
		clearInterval(t);
	}
	bbox.onmouseleave = function() {
		t = setInterval(fn, 3000);
	}
	function fn() {
		num++;
		if (num == imgs.length) {
			num = 0;
		}
		for (let i = 0; i < imgs.length; i++) {
			imgs[i].style.display = 'none';
		}
		imgs[num].style.display = 'block';
	}


}