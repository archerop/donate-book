//用法: 
////要顯示: 呼叫darkBody("要顯示的文字"); 
////要取消: 呼叫lightBody() 
var darkBodyProceeding = false; 
function darkBody(msg) { 
	darkBodyNow(msg); 
	do { } while (darkBodyProceeding); 
} 
function darkBodyNow(msg) { 
	if (darkBodyProceeding) return; 
	darkBodyProceeding = true; 
	document.body.style.overflow = "hidden"; //捲軸關，關閉捲軸會造成firfox返回頁頂，請視自己的需求決定是否要關閉捲軸 
	var f; 
	var size = new DarkBodySize(); 
	if (document.all) {  //for ie only 
		f = document.createElement("iframe"); 
		f.setAttribute("id","deepdarkSelectBlocker"); 
		f.style.width = size.w; 
		f.style.height = size.h; 
		document.body.appendChild(f); 
	}	 
	var d = document.createElement("div"); 
	d.setAttribute("id","deepdark"); 
	d.style.width = size.w + 20; 
	d.style.height = size.h; 
	//if (document.all) {  //for ie & https連線 only，避免出現"在安全性連線顯示非安全性資料"的對話框 
		//f.src = "https://xxx.xxx.xxx.xxx/tmp.htm"; 
	//}	 
	document.body.appendChild(d); 
	var b = document.createElement("div"); 
	b.setAttribute("id","deepdarkBulletin"); 
	b.innerHTML = "<table><tr><td nowrap>" + msg + "</td></tr></table>"; 
	document.body.appendChild(b); 
	moveBulletin(); 
	b.style.width = b.firstChild.offsetWidth;  //for firefox 
	darkBodyProceeding = false; 
} 
function DarkBodySize() { 
	this.w = document.body.scrollWidth > document.body.clientWidth ? document.body.scrollWidth : document.body.clientWidth; 
	this.h = document.body.scrollHeight > document.body.clientHeight ? document.body.scrollHeight : document.body.clientHeight;	 
} 
function moveBulletin() { 
	var b = document.getElementById("deepdarkBulletin"); 
	if (b) { 
		b.style.left = (document.body.clientWidth - b.offsetWidth) / 2 + document.body.scrollLeft; 
		b.style.top = (document.body.clientHeight - b.offsetHeight) / 2 + document.body.scrollTop; 
	}	 
} 
function resizeDark() { 
	var d = document.getElementById("deepdark"); 
	if (d) { 
		var size = new DarkBodySize(); 
		d.style.width = size.w; 
		d.style.height = size.h; 
		if (document.all) {  //for ie only 
			var f = document.getElementById("deepdarkSelectBlocker"); 
			f.style.width = size.w; 
			f.style.height = size.h; 
		} 
		moveBulletin();	 
	} 
} 
function lightBody() { 
	if (document.all) document.body.removeChild(document.getElementById("deepdarkSelectBlocker")); 
	document.body.removeChild(document.getElementById("deepdark")); 
	document.body.removeChild(document.getElementById("deepdarkBulletin")); 
	document.body.style.overflow = "auto"; //捲軸開，如果上面沒有關閉捲軸，那不需要此句 
} 
window.onresize = resizeDark; 
window.onscroll = moveBulletin; 