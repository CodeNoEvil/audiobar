<?php
	// Only works when included as an external script.
	// Make sure it only gets loaded once.
function cache_for($days) {
  $seconds = $days * 86400;
  if (function_exists('header_remove')) {
    header_remove('Pragma');
  }
	header('Expires: ' . date('D, d M Y H:i:s',time()+$seconds) . ' GMT');
	header("Cache-Control: max-age=$seconds");
}
cache_for(10*365);
?>
// Documentation & updates available at: http://codecentre.eplica.is/js/eolasfix/test.htm
(function(a,b,c,d,e,f,g,h,x,i,y,z,j,k,l,m,n){if(b[a])return;b[a]=1;n=function(){while(g[++x]){y=0;while(j=c[d](g[x])[y++]){if(i){l='>';z=0;while(k=j.childNodes[z++])l+=k[e];m=c.createElement('i');j[f].insertBefore(m,j);m[e]=j[e].replace(/>/,l);j.style.display='none';y++;h[h.length]=j}else{j[e]=j[e]}}}};i&&!n()&&b.attachEvent('onload',function(){x=0;while(j=h[x++])j[f].removeChild(j)});b.opera&&c.addEventListener('DOMContentLoaded',n,0)})('__Eolas_Fixed',window,document,'getElementsByTagName','outerHTML','parentNode',['object','embed','applet'],[],-1/*@cc_on,1@*/);

