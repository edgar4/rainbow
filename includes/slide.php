   <script>
(function(k,l,f,j,a,h,y){$Jssor$=k.$Jssor$=k.$Jssor$||{};new(function(){});var s=function(){var b=this,a={};b.a=function(b,c){if(typeof c!="function")return;if(!a[b])a[b]=[];a[b].push(c)};b.b=function(e){var c=a[e],d=[];if(!c)return;for(var b=1;b<arguments.length;b++)d.push(arguments[b]);for(var b=0;b<c.length;b++)try{return c[b].apply(k,d)}catch(f){}}},m;(function(){m=function(a,b){this.x=typeof a=="number"?a:0;this.y=typeof b=="number"?b:0};})();var i={c:1,d:2,e:4,f:8,g:function(a){return(~a&3)+(a&12)},h:function(a){return(~a&12)+(a&3)},i:function(a){return(a&3)==1},j:function(a){return(a&3)==2},k:function(a){return(a&12)==4},l:function(a){return(a&12)==8},m:function(a){return(a&3)>0},n:function(a){return(a&12)>0}},n={o:0,p:1,q:2,r:3,s:4,t:5},q,b=new function(){var c=this,i=n.o,g=0,t=h;(function(){var c=navigator.appName,m=navigator.appVersion,a=navigator.userAgent;if(c=="Microsoft Internet Explorer"&&!!k.attachEvent&&!!k.ActiveXObject){var e=a.indexOf("MSIE");i=n.p;g=parseFloat(a.substring(e+5,a.indexOf(";",e)));var f=l.documentMode;if(typeof f!=="undefined")g=f}else if(c=="Netscape"&&!!k.addEventListener){var d=a.indexOf("Firefox"),b=a.indexOf("Safari"),h=a.indexOf("Chrome");if(d>=0){i=n.q;g=parseFloat(a.substring(d+8))}else if(b>=0){var j=a.substring(0,b).lastIndexOf("/");i=h>=0?n.s:n.r;g=parseFloat(a.substring(j+1,b))}}else if(c=="Opera"&&!!k.opera&&!!k.attachEvent){i=n.t;g=parseFloat(m)}t=i==n.p&&g<9||i==n.s&&g<2})();function z(a){return Object.prototype.toString.call(a)}var r;function o(a,c){if(z(a)=="[object Array]"){for(var b=0;b<a.length;b++)if(c(b,a[b],a))break}else for(var d in a)if(c(d,a[d],a))break}function C(){if(!r){r={};o(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(b,a){r["[object "+a+"]"]=a.toLowerCase()})}return r}function p(a){return a==j?String(a):C()[z(a)]||"object"}c.u=function(a){if(c.v(a))a=l.getElementById(a);return a};c.w=function(a){return a?a:k.event};c.x=function(a){a=c.w(a);var b=new m;if(a.type=="DOMMouseScroll"&&i==n.q&&g<3){b.x=a.screenX;b.y=a.screenY}else if(typeof a.pageX=="number"){b.x=a.pageX;b.y=a.pageY}else if(typeof a.clientX=="number"){b.x=a.clientX+l.body.scrollLeft+l.documentElement.scrollLeft;b.y=a.clientY+l.body.scrollTop+l.documentElement.scrollTop}return b};if(i==n.p){c.y=function(a){return/opacity=([^)]*)/.test(a.style.filter||"")?parseFloat(RegExp.A)/100:1};c.z=function(d,c,g){if(g&&t)c=f.round(c);var a=d.style.filter||"",l=new RegExp(/[\s]*alpha\(.*?\)[\s]*/g),b=l.exec(a);if(b!=j){var i=a.substr(0,b.index),k=a.substr(b.lastIndex+1,a.length-(b.lastIndex+1));a=i+k}d.style.filter=a;var e=f.round(100*c);if(e<100){var h=" alpha(opacity="+e+") ";d.style.filter+=h}}}else{c.y=function(a){return parseFloat(a.style.opacity||"1")};c.z=function(c,a,b){if(b&&t)a=f.round(a);c.style.opacity=a==1?"":a}}c.B=function(a,d,e,b){a=c.u(a);if(a.addEventListener){d=="mousewheel"&&a.addEventListener("DOMMouseScroll",e,b);a.addEventListener(d,e,b)}else if(a.attachEvent){a.attachEvent("on"+d,e);b&&a.setCapture&&a.setCapture()}};c.C=function(a,d,e,b){a=c.u(a);if(a.removeEventListener){d=="mousewheel"&&a.removeEventListener("DOMMouseScroll",e,b);a.removeEventListener(d,e,b)}else if(a.detachEvent){a.detachEvent("on"+d,e);b&&a.releaseCapture&&a.releaseCapture()}};c.D=function(b){b=c.w(b);b.preventDefault&&b.preventDefault();b.cancel=a;b.returnValue=h};c.E=function(b){b=c.w(b);b.stopPropagation&&b.stopPropagation();b.cancelBubble=a};c.F=function(d,c){for(var b=[],a=2;a<arguments.length;a++)b.push(arguments[a]);return function(){for(var e=b.concat([]),a=0;a<arguments.length;a++)e.push(arguments[a]);return c.apply(d,e)}};var s;c.G=function(a){if(!s)s=c.H();if(a){b.I(s,a);b.J(s)}};c.K=function(a,b){a.innerHTML=b};c.J=function(a){a.innerHTML=""};c.L=function(c){for(var b=[],a=c.firstChild;a;a=a.nextSibling)a.nodeType==1&&b.push(a);return b};c.M=function(a,d,b,f){if(!b)b="u";for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){if(a.getAttribute(b)==d)return a;if(f){var e=c.M(a,d,b,f);if(e)return e}}};c.N=function(a,e,b,g){if(!b)b="u";var d=[];for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){a.getAttribute(b)==e&&d.push(a);if(g){var f=c.M(a,e,b,g);if(f.length)d=d.concat(f)}}return d};c.O=function(a,d,e){for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==d)return a;if(e){var b=c.O(a,d,e);if(b)return b}}};c.P=function(b,f,g){var d=[];for(b=b?b.firstChild:j;b;b=b.nextSibling)if(b.nodeType==1){b.tagName==f&&d.push(b);if(g){var e=c.P(b,f,a);if(e.length)d=d.concat(e)}}return d};c.Q=function(c){for(var b=1;b<arguments.length;b++){var a=arguments[b];if(a)for(var d in a)c[d]=a[d]}return c};c.R=function(a){return p(a)=="undefined"};c.S=function(a){return p(a)=="function"};c.T=Array.isArray||function(a){return p(a)=="array"};c.v=function(a){return p(a)=="string"};c.U=function(a){return!isNaN(parseFloat(a))&&isFinite(a)};c.V=o;c.H=function(a){return c.W("DIV",a)};c.W=function(b,a){a=a||l;return a.createElement(b)};c.X=function(){};c.Y=function(a,b){return a.getAttribute(b)};c.Z=function(b,a){b.style.cursor=a};c.ab=function(a){return a.style.display};c.bb=function(b,a){b.style.display=a};c.cb=function(b,a){b.style.overflow=a};c.db=function(a){c.bb(a,"none")};c.eb=function(b){for(var a=0;a<b.length;a++)c.db(b[a])};c.fb=function(a,b){c.bb(a,b==h?"none":"")};c.gb=function(b,a){b.style.position=a};c.hb=function(a){return parseInt(a.style.top,10)};c.ib=function(a,b){a.style.top=b+"px"};c.jb=function(a){return parseInt(a.style.right,10)};c.kb=function(b,a){b.style.right=a+"px"};c.lb=function(a){return parseInt(a.style.bottom,10)};c.mb=function(b,a){b.style.bottom=a+"px"};c.nb=function(a){return parseInt(a.style.left,10)};c.ob=function(a,b){a.style.left=b+"px"};c.pb=function(a){return parseInt(a.style.width,10)};c.qb=function(b,a){b.style.width=f.max(a,0)+"px"};c.rb=function(a){return parseInt(a.style.height,10)};c.sb=function(b,a){b.style.height=f.max(a,0)+"px"};c.tb=function(b,a){b.style.cssText=a};c.ub=function(b,a){b.style.backgroundColor=a};c.vb=function(a){return a.style.backgroundImage};c.wb=function(b,a){b.style.clip="rect("+f.round(a.xb)+"px "+f.round(a.yb)+"px "+f.round(a.zb)+"px "+f.round(a.Ab)+"px)"};c.Bb=function(){return+new Date};c.I=function(b,a){b.appendChild(a)};c.Cb=function(b,a){var c=l.body;while(a&&b!=a&&c!=a)try{a=a.parentNode}catch(d){return h}return b==a};c.Db=function(c,b){var a=new Image;if(b)a.onload=function(){b(a)};a.src=c};var u={Eb:c.y,xb:c.hb,yb:c.jb,zb:c.lb,Ab:c.nb,Fb:c.pb,Gb:c.rb,Hb:c.ab},w={Eb:c.z,xb:c.ib,yb:c.kb,zb:c.mb,Ab:c.ob,Fb:c.qb,Gb:c.sb,Hb:c.bb,Ib:c.wb},e;function v(){if(!e){e={};e.Eb=e.Eb;e.xb=e.xb;e.Ab=e.Ab;e.zb=e.zb;e.yb=e.yb;e.Fb=e.Fb;e.Gb=e.Gb;e.Hb=e.Hb;e.Ib=e.Ib}}c.Jb=function(c,b){v();var a={};o(b,function(b){if(u[b])a[b]=u[b](c)});return a};c.Kb=function(b,a){v();o(a,function(c,a){w[c](b,a)})};function E(k,a,h,o,n,i){var g,p,l,e;if(b.S(i))e={Lb:i};else e=i||{};l=e.Lb||d.Mb;function m(s){var x=c.Bb();if(x>=p){c.Kb(k,s?a:h);n&&n()}else{var t=(x-g)/o;if(s)t=1-t;var v={};for(var i in a){var q=a[i],A=e[i]||l,y=A(t),d,z=h[i];if(w[i]==c.wb){d={};for(var r in q)d[r]=q[r]+(z[r]-q[r])*y}else{d=q+(z-q)*y;if(u[i]!=c.y)d=f.round(d)}v[i]=d}c.Kb(k,v);setTimeout(b.F(j,m,s),13)}}this.Nb=function(b){g=c.Bb();p=g+o;if(!a)a=c.Jb(k,h);m(b)}}q=E},d={Ob:function(a){return a},Mb:function(a){return-f.cos(a*f.PI)/2+.5},Pb:function(a){return a*a},Qb:function(a){return-a*(a-2)},Rb:function(a){return a*a*a},Sb:function(a){return a*a*a*a},Tb:function(a){var b=1.70158;return a*a*((b+1)*a-b)},Ub:function(a){return 1-d.Vb(1-a)},Vb:function(a){return a<1/2.75?7.5625*a*a:a<2/2.75?7.5625*(a-=1.5/2.75)*a+.75:a<2.5/2.75?7.5625*(a-=2.25/2.75)*a+.9375:7.5625*(a-=2.625/2.75)*a+.984375},Wb:function(a){a*=2;a=a-f.floor(a);return f.sin(a*f.PI*2)*.4},Xb:function(a){a*=3;a=a-f.floor(a);return(1-((a*=2)<1?(a=1-a)*a*a:(a-=1)*a*a))*.85},Yb:function(a){return(1-((a*=2)<1?(a=1-a)*a*a:(a-=1)*a*a))*.85},Zb:function(a){return.2*a}},o={ac:1,bc:2,cc:3};function p(c){var d=this;s.call(d);c=b.u(c);var h="lightblue",i="darkblue";isNaN(b.nb(c));isNaN(b.jb(c));var l,m,g,f,e=-1;function r(a,c){b.E(c);b.D(c);if(e!=a){var d=g[a];b.ub(d,"blue");if(e!=-1){var d=g[e];b.ub(d,f==e?i:h)}e=a}}function q(a){b.E(a);b.D(a);if(e!=-1){var c=g[e];b.ub(c,f==e?i:h);e=-1}}function p(a){b.E(a);b.D(a)}function n(a){b.E(a);b.D(a)}function t(a){d.b(o.ac,a)}d.dc=c;d.ec=function(a){if(a!=f){f!=-1&&b.ub(g[f],h);b.ub(g[a],i);f=a;d.b(o.bc,a)}};d.fc=function(a){b.fb(c,a)};var k;d.gc=function(i){l=i;m=18*i+6;f=-1;g=[];b.K(c,"");b.qb(c,m);for(var h=0;h<l;h++){var s="BORDER:white 1px solid;POSITION:absolute;BACKGROUND-COLOR:lightblue;top:5px;WIDTH:12px;HEIGHT:12px;cursor:pointer;overflow:hidden;",e=b.H();b.tb(e,s);b.ob(e,18*h+5);b.z(e,.5);b.I(c,e);g[h]=e;b.B(e,"click",b.F(j,t,h));b.B(e,"mouseover",b.F(j,r,h))}if(!k){k=a;b.B(c,"mouseout",b.F(j,q));b.B(c,"mouseover",b.F(j,p));b.B(c,"mousemove",b.F(j,n))}d.b(o.cc)}}function u(d,e){var a=this;p.call(a,d);var c;function f(b){a.b(o.ac,b)}a.ec=function(b){c=b;a.b(o.bc,b)};a.fc=function(a){b.fb(d,a);b.fb(e,a)};var g;a.gc=function(i){c=-1;if(!g){b.z(d,.7);b.z(e,.7);b.B(d,"click",function(){f(c-1)});b.B(e,"click",function(){f(c+1)})}a.b(o.cc)}}function v(g,e,c){var d=this;d.hc=b.pb(g);d.ic=b.rb(g);b.V(c.jc,function(e,d){c.jc[e]=b.Q({kc:400,lc:200,xb:h,yb:h,zb:h,Ab:h,mc:h,nc:h,oc:0,pc:j},d)});var f;d.qc=function(){if(!f){var a=[];b.V(e,function(g,f){var e,d=b.Y(f,"t");if(d){transitionIndex=parseInt(d,10);e=c.jc[transitionIndex]||c.jc[d]}e&&a.push({rc:f,sc:e})});f=a}return f};d.tc=function(){b.eb(e)};d.uc=0}function w(f,e,d){var c=this;v.call(c,f,e,d);c.vc=function(e){if(c.uc>1){e&&e();return}c.uc++;var g=c.qc(),f=0;function l(r,p){var e=p.sc,h=p.rc,g=b.pb(h)||0,f=b.rb(h)||0,j={},m=0,n=0,l={xb:0,yb:g,zb:f,Ab:0},d=b.Q({},l);if(e.xb&&e.zb)d.xb=d.zb=f/2;else if(e.xb)d.zb-=f;else if(e.zb)d.xb+=f;if(e.Ab&&e.yb)d.yb=d.Ab=g/2;else if(e.Ab)d.yb-=g;else if(e.yb)d.Ab+=g;if(e.nc){if(e.xb){n-=f;d.xb+=f;d.zb+=f}if(e.zb){n+=f;d.xb-=f;d.zb-=f}if(e.Ab){m-=g;d.yb+=g;d.Ab+=g}if(e.yb){m+=g;d.yb-=g;d.Ab-=g}}if(i.i(e.oc))m-=c.hc;else if(i.j(e.oc))m+=c.hc;if(i.k(e.oc))n-=c.ic;else if(i.l(e.oc))n+=c.ic;if(m)j.Ab=m+b.nb(h);if(n)j.xb=n+b.hb(h);var o=b.Jb(h,j);if(e.mc){j.Eb=0;o.Eb=1}if(d.xb!=l.xb||d.yb!=l.yb||d.zb!=l.zb||d.Ab!=l.Ab){j.Ib=d;o.Ib=l}b.Kb(h,j);b.fb(h);new q(h,o,j,e.kc,function(){k(r)},e.pc).Nb(a)}function k(){f--}function m(){f=g.length;var a=0;b.V(g,function(c,b){a+=b.sc.lc;setTimeout(function(){l(c,b)},a)});j()}function h(){if(c.uc>1)setTimeout(h,20);else m()}function n(){c.uc--;e&&e()}function j(){if(f>0)setTimeout(j,20);else n()}h()}}var t,g={},r;new function(){var n=0,e=1,w=2,v=3,I=1,H=2,J=4,G=8,N=256,P=512,M=1024,L=2048,z=L+I,y=L+H,E=P+I,C=P+H,D=N+J,A=N+G,B=M+J,F=M+G;function T(a){return(a&H)==H}function U(a){return(a&J)==J}g.wc=function(g){for(var e=g.xc,f=g.yc,k=g.zc,l=g.Ac,d={},a=0,b=0,i=e-1,j=f-1,h=l-1,c,b=0;b<f;b++)for(a=0;a<e;a++){c=b+","+a;switch(k){case z:d[c]=h-(a*f+(j-b));break;case B:d[c]=h-(b*e+(i-a));break;case E:d[c]=h-(a*f+b);case D:d[c]=h-(b*e+a);break;case y:d[c]=a*f+b;break;case A:d[c]=b*e+(i-a);break;case C:d[c]=a*f+(j-b);break;default:d[c]=b*e+a}}return d};g.Bc=function(d){var m=d.xc,o=d.yc,p=d.zc,l=d.Ac,i={},j=0,a=0,b=0,f=m-1,g=o-1,h,c,k=0;switch(p){case z:a=f;b=0;c=[w,e,v,n];break;case B:a=0;b=g;c=[n,v,e,w];break;case E:a=f;b=g;c=[v,e,w,n];break;case D:a=f;b=g;c=[e,v,n,w];break;case y:a=0;b=0;c=[w,n,v,e];break;case A:a=f;b=0;c=[e,w,n,v];break;case C:a=0;b=g;c=[v,n,w,e];break;default:a=0;b=0;c=[n,w,e,v]}j=0;while(j<l){h=b+","+a;if(a>=0&&a<m&&b>=0&&b<o&&typeof i[h]=="undefined")i[h]=j++;else switch(c[k++%c.length]){case n:a--;break;case w:b--;break;case e:a++;break;case v:b++}switch(c[k%c.length]){case n:a++;break;case w:b++;break;case e:a--;break;case v:b--}}return i};g.Cc=function(d){var m=d.xc,o=d.yc,p=d.zc,l=d.Ac,j={},k=0,a=0,b=0,f=m-1,g=o-1,i,c,h=0;switch(p){case z:a=f;b=0;c=[w,e,v,e];break;case B:a=0;b=g;c=[n,v,e,v];break;case E:a=f;b=g;c=[v,e,w,e];break;case D:a=f;b=g;c=[e,v,n,v];break;case y:a=0;b=0;c=[w,n,v,n];break;case A:a=f;b=0;c=[e,w,n,w];break;case C:a=0;b=g;c=[v,n,w,n];break;default:a=0;b=0;c=[n,w,e,w]}k=0;while(k<l){i=b+","+a;if(a>=0&&a<m&&b>=0&&b<o&&typeof j[i]=="undefined"){j[i]=k++;switch(c[h%c.length]){case n:a++;break;case w:b++;break;case e:a--;break;case v:b--}}else{switch(c[h++%c.length]){case n:a--;break;case w:b--;break;case e:a++;break;case v:b++}switch(c[h++%c.length]){case n:a++;break;case w:b++;break;case e:a--;break;case v:b--}}}return j};g.Dc=function(h){var m=h.xc,n=h.yc,e=h.zc,l=h.Ac,j={},k=0,c=0,d=0,f=m-1,g=n-1,o=l-1,i;switch(e){case z:case C:case E:case y:var a=0,b=0;break;case A:case B:case D:case F:var a=f,b=0;break;default:e=F;var a=f,b=0}c=a;d=b;while(k<l){i=d+","+c;if(U(e)||T(e))j[i]=o-k++;else j[i]=k++;switch(e){case z:case C:c--;d++;break;case E:case y:c++;d--;break;case A:case B:c--;d--;break;case F:case D:default:c++;d++}if(c<0||d<0||c>f||d>g){switch(e){case z:case C:a++;break;case A:case B:case E:case y:b++;break;case F:case D:default:a--}if(a<0||b<0||a>f||b>g){switch(e){case z:case C:a=f;b++;break;case E:case y:b=g;a++;break;case A:case B:b=g;a--;break;case F:case D:default:a=0;b++}if(b>g)b=g;else if(b<0)b=0;else if(a>f)a=f;else if(a<0)a=0}d=b;c=a}}return j};g.Ec=function(h){var a=h.xc||1,b=h.yc||1,i={},c,d,e,g,j;e=a<b?(b-a)/2:0;g=a>b?(a-b)/2:0;j=f.round(f.max(a/2,b/2))+1;for(c=0;c<a;c++)for(d=0;d<b;d++)i[d+","+c]=j-f.min(c+1+e,d+1+g,a-c+e,b-d+g);return i};g.Fc=function(e){var c=e.xc||1,d=e.yc||1,g={},a,b,h;h=f.round(f.min(c/2,d/2))+1;for(a=0;a<c;a++)for(b=0;b<d;b++)g[b+","+a]=h-f.min(a+1,b+1,c-a,d-b);return g};g.Gc=function(c){for(var g={},d=[],a,b,e=0;e<c.yc;e++)for(a=0;a<c.xc;a++)d.push({Hc:e+","+a,Ic:f.ceil(1e5*f.random())%13});d.sort(function(a,b){return a.Ic-b.Ic});for(var b=0;b<c.Ac;b++)g[d[b].Hc]=b;return g};g.Jc=function(c){for(var d=c.xc||1,e=c.yc||1,g={},a,h=d/2-.5,i=e/2-.5,b=0;b<d;b++)for(a=0;a<e;a++)g[a+","+b]=f.round(f.sqrt(f.pow(b-h,2)+f.pow(a-i,2)));return g};g.Kc=function(c){for(var d=c.xc||1,e=c.yc||1,g={},a,h=d/2-.5,i=e/2-.5,b=0;b<d;b++)for(a=0;a<e;a++)g[a+","+b]=f.round(f.min(f.abs(b-h),f.abs(a-i)));return g};g.Lc=function(e){for(var g=e.xc||1,h=e.yc||1,i={},a,c=g/2-.5,d=h/2-.5,j=f.max(c,d)+1,b=0;b<g;b++)for(a=0;a<h;a++)i[a+","+b]=f.round(j-f.max(c-f.abs(b-c),d-f.abs(a-d)))-1;return i};function Q(d){var e=0,h=d.Mc,c=[],a=h(d);if(d.Nc){b.V(a,function(b,a){e=f.max(e,a)});b.V(a,function(c,b){a[c]=e-b})}b.V(a,function(d,b){var a=c[b];if(!a){c[b]=a=[];a.Oc=b}a.push(d)});var g=[].concat(c);g.sort(function(a,b){return a.Oc-b.Oc});return{Pc:a,Qc:g}}var K=[];function S(b,c){b.onload=j;K[b.src]=a;c&&c(b)}function O(d,c){var a=new Image;if(K[d]){if(c){a.src=d;c(a)}}else{a.onload=b.F(j,S,a,c);a.src=d}}function R(a,b){return a.xb==b.xb&&a.yb==b.yb&&a.zb==b.zb&&a.Ab==b.Ab}r=function(M,W,w,P,d,O,B,A,cb,U){var z=this,s=P.Rc,u=d.Sc,l,e,D,y,X={},v={},F={},J={},q,g,I,k,p,m,o,n,x,K,r=j,H,C,E,T=[],G=a,t=h,Y=h,L=d.Uc.Tc||0,N=d.Uc.Vc||0;function eb(){if(O){s=P.rc;d.Wc=h}s=s.cloneNode(a);b.fb(s);k=d.Xc(B,A);K=Q(d);for(D=0;D<d.yc;D++)for(c=0;c<d.xc;c++){l=D+","+c;var z=h,G=h;if(L&&c%2){if(i.m(L))z=!z;if(i.n(L))G=!G}if(N&&D%2){if(i.m(N))z=!z;if(i.n(N))G=!G}if(G){p=d.zb;m=d.xb}else{p=d.xb;m=d.zb}if(z){o=d.yb;n=d.Ab}else{o=d.Ab;n=d.yb}g={xb:0,Ab:0,Eb:1,Fb:B,Gb:A};q=b.Q({},g);e=b.Q({},k[l]);if(d.mc)g.Eb=0;if(p&&m)e.xb=e.zb=(e.xb+e.zb)/2;else if(p)e.zb-=k.Gb;else if(m)e.xb+=k.Gb;if(o&&n)e.yb=e.Ab=(e.yb+e.Ab)/2;else if(o)e.yb-=k.Fb;else if(n)e.Ab+=k.Fb;if(d.Wc){g.Ab=k[l].Ab;g.xb=k[l].xb;if(o&&n)g.Ab+=k.Fb/2;else if(n)g.Ab+=k.Fb;else if(!o)g.Ab=0;if(p&&m)g.xb+=k.Gb/2;else if(m)g.xb+=k.Gb;else if(!p)g.xb=0;if(o||n)e.yb=e.Ab=0;if(p||m)e.xb=e.zb=0;g.Fb=o||n?0:B;g.Gb=p||m?0:A}if(d.nc){if(p){g.xb-=k.Gb;e.xb+=k.Gb;e.zb+=k.Gb}if(m){g.xb+=k.Gb;e.xb-=k.Gb;e.zb-=k.Gb}if(o){g.Ab-=k.Fb;e.yb+=k.Fb;e.Ab+=k.Fb}if(n){g.Ab+=k.Fb;e.yb-=k.Fb;e.Ab-=k.Fb}}if(d.oc){var t=d.oc;if(!z)t=i.g(t);if(!G)t=i.h(t);if(i.i(t))g.Ab+=B;else if(i.j(t))g.Ab-=B;if(i.k(t))g.xb+=A;else if(i.l(t))g.xb-=A}g.Ib=e;q.Ib=k[l];I={};b.V(g,function(d,c){if(b.U(c)){if(c!=q[d])I[d]=c-q[d];F[l]=a}else{var e=q[d];if(!R(c,e)){var f=I[d]={};b.V(e,function(a,b){f[a]=c[a]-b});F[l]=a}}});X[l]=u?q:g;v[l]=[];if(d.lc)for(var T=0;T<f.round(K.Pc[l]*d.lc/d.Yc);T++)v[l].push(j);if(!F[l])v[l].push({Hb:""});else for(x=1;x<=d.Zc;x++){var S={};if(x==d.Zc)S=u?g:q;else b.V(I,function(a,c){var f=d.ad[a]||d.ad.Lb,e=f[u?x:d.Zc-x+1];if(b.U(c))S[a]=q[a]+c*e;else{var g=S[a]={};b.V(c,function(b,c){g[b]=q[a][b]+c*e})}});v[l].push(S)}}if(u){if(w)if(O)r=w.rc;else r=w.Rc;if(!r){r=cb.cloneNode(a);b.fb(r)}}else{w&&M.bd(O?w.rc:w.Rc);r=s}H=K.Qc;if(u)H=[].concat(H).reverse();b.V(H,function(f,d){if(d)for(var e=0;e<d.length;e++){var c=d[e];y=r.cloneNode(a);b.Kb(y,X[c]);b.cb(y,"hidden");b.gb(y,"absolute");W.cd(y);J[c]=y;!F[c]&&b.db(J[c])}});u&&M.bd(s);C=b.Bb();E=1;b.V(v,function(b,a){E=f.max(a.length,E)})}function fb(){if(G&&!t){var c=f.ceil((b.Bb()-C)/d.Yc)-1;if(c>=E-1){!u&&M.bd(s);W.dd();G=h}else b.V(v,!G||t?b.X:function(f,e){var d=c>e.length-1?e.length-1:c;if(e[d]&&!T[f+","+d]){b.Kb(J[f],e[d]);T[f+","+d]=a}})}return G}function bb(b){function a(){if(!Y)if(t||fb())setTimeout(a,b);else db()}setTimeout(a,b)}var Z;function db(){if(!Z){Z=a;U&&U()}}z.ed=function(){bb(d.Yc)};z.fd=function(){eb()};var ab;z.gd=function(){if(!t){t=a;ab=b.Bb()-C}};z.hd=function(){Y=a;P.id()};z.jd=function(){if(t){C=b.Bb()-ab;t=h}}};function x(n,pb){;function Y(c){var a={Yc:40,kc:200,lc:0,xc:1,yc:1,xb:h,yb:h,zb:h,Ab:h,mc:h,Wc:h,nc:h,Sc:h,oc:0,Nc:h,Mc:g.Gc,zc:F,Uc:{Tc:0,Vc:0},pc:d.Mb,kd:[]};b.Q(a,c);a.Ac=a.xc*a.yc;if(b.S(a.pc))a.pc={Lb:a.pc};a.Zc=f.round(a.kc/a.Yc);a.ad=Db(a);a.Xc=function(c,b){c/=a.xc;b/=a.yc;var f=c+"x"+b;if(!a.kd[f]){a.kd[f]={Fb:c,Gb:b};for(var d=0;d<a.xc;d++)for(var e=0;e<a.yc;e++)a.kd[f][e+","+d]={xb:e*b,yb:d*c+c,zb:e*b+b,Ab:d*c}}return a.kd[f]};return a}function Db(f){var c=f.pc;if(!c.Lb)c.Lb=d.Mb;var a=f.Zc,e=c.ld;if(!e){e=c.ld={};b.V(c,function(f,c){if(b.S(c)){if(!b.T(c.ld))c.ld=[];if(!c.ld[a]){c.ld[a]=[];for(var d=1;d<=a;d++)c.ld[a][d]=c(d/a)}e[f]=c.ld[a]}})}return e}function wb(){var a=0;if(eb)a=fb%v.length;else a=f.floor(f.random()*v.length);fb++;return v[a]}function hb(){var d=this,c=b.H();b.Kb(c,z);b.gb(c,"absolute");b.cb(c,"hidden");d.dc=c;d.bd=function(f){var d=f.cloneNode(a);b.J(c);b.I(c,d)};d.cd=function(a){b.I(c,a)};d.dd=function(){b.J(c)}}function Cb(){var g=this;s.call(g);function db(b){if(H&&Q)if(!ib&&B){ib=a;Y=0}else Y=b||ub;else Y=6e8}function mb(d,b,c,a){U=p[b];if(c){if(k){u=h;k.jd()}}else{if(k){k.hd();u=h;F=h}g.b("parked",g,E[n]);db()}v=h;a&&a()}function xb(d,a){U=a;A(d);var c=p[3];p[3]=a;b.J(o[3]);b.I(o[3],a.md);b.fb(o[3]);c&&c.id();a.nd();db();u=h;F=h}function pb(){y&&y.ec(A(e));w&&w.ec(A(e))}function Db(c,a){if(!C&&!v&&!M){var d=b.F(j,xb,c,a);k=new B(S,T,U,a,wb(),Ab,J,R,x,d);k.fd();b.db(o[3]);g.gc(c);tb();k.ed()}else a.id()}function Cb(c){var a=new sb(P[A(c)]);a.Db(b.F(j,Db,c,a));pb()}function vb(){if(Q&&!C&&!v&&!M&&(!F||u)){Y-=60;if(Y<0&&(!yb||G))if(B){u=h;F=a;Cb(++e)}else eb(4)}setTimeout(vb,60)}function tb(){b.fb(L,!b.R(p[3].od)&&(ob>0&&!F||ob>1))}var Y=0,Q,F,u,v,M,C,lb,Z=0,cb,bb=0,jb=0,X,ab,n=3,i=N(),E=[],o=[],p=[],k,S=new hb,T=new hb,L=N();g.dc=i;g.nd=function(){p[3].nd()};g.fc=function(){b.fb(i)};g.pd=function(){b.db(i)};g.qd=function(a){if(a){tb();b.fb(o[3],e!=-1||!H||!B)}Q=a;db();S.dd();T.dd()};g.rd=function(c,b,a){if(Q&&!C&&!v){k&&k.gd();eb(c,b,a)}};g.sd=function(){M=!v&&n==3;return M};g.td=function(){M=h};g.gc=function(j,e,d){b.ob(i,t*-3);if(!e&&e!=0)e=j-1;if(!d&&d!=0)d=j+1;var u=e-1,v=e-2,r=d+1,s=d+2;E=[v,u,e,j,d,r,s];for(var k=[],m=p,c=0;c<7;c++){E[c]=A(E[c]);var f=m[c],g=new sb(P[E[c]]);g.ud();var q=g.md,l=o[c];k[c]=g;if(f){f.vd();f.id()}if(c!=3||!Q||!F){b.J(l);b.I(l,q)}}p=k;n=3;b.J(L);var a=p[3].od;if(a){a=a.cloneNode(h);b.B(a,"click",fb);b.Kb(a,z);b.bb(a,"block");b.z(a,0);b.ub(a,"#000");b.I(L,a)}};g.fd=function(){b.I(i,S.dc);b.I(i,T.dc);for(var c=0;c<7;c++){var a=N();b.I(i,a);o.push(a)}b.I(i,L);b.Z(i,"move");b.I(r,i);b.B(i,nb,Fb)};g.wd=function(){t=J+kb;var a=t*3;b.qb(i,t*7-kb);b.ob(i,-a);b.V(o.concat([S.dc,T.dc,L]),function(c,a){b.Kb(a,z)});b.ob(S.dc,a);b.ob(T.dc,a);b.ob(L,a);for(var c=0;c<o.length;c++)b.ob(o[c],t*c)};g.fd();g.wd();setTimeout(vb,60);function Fb(a){if(!v&&!M)Eb(a);else!I&&b.D(a)}function Eb(c){if(!C){lb=h;ab=h;C=a;if(k){k.gd();u=a}if(I){var e=c.touches[0];bb=e.clientX;jb=e.clientY}else{var d=b.x(c);bb=d.x;jb=d.y;b.D(c)}b.B(l,V,qb);b.B(l,W,rb);cb=X=0;Z=b.Bb()}return h}function qb(e){var c;if(I){if(!lb){var h=e.touches;if(h.length==1){c=h[0];if(f.abs(c.clientY-jb)>f.abs(c.clientX-bb)+3)lb=a;else c=new m(c.clientX,c.clientY)}}}else c=b.x(e);if(c){b.D(e);var d=c.x-bb;if(d>0&&!n)d=f.sqrt(d)*5;if(d<0&&n==6)d=-f.sqrt(-d)*5;b.ob(i,-t*n+d);X=d;var g=b.Bb();if(g-Z>350){Z=g;cb=d}}}function rb(){if(C){b.C(l,V,qb);b.C(l,W,rb);ab=X;if(ab){var a=f.max(40,b.Bb()-Z);f.abs(cb);a=(t-f.abs(X))*1.08*a/f.abs(cb);a=f.max(a,200);var d=n,e=X;if(f.abs(e)>=c.xd)if(e<0){if(d<6)d++}else if(d>0)d--;a=f.min(a,d==n?200:600);eb(d,0,a)}else if(k){u=h;k.jd()}C=h}}function fb(a){ab&&b.D(a)}function eb(f,k,o){v=a;var l=n==f;n=f;var h=e=E[f];pb();var g=o;if(!g)g=c.yd;if(b.nb(r)!=-n*t){var m=b.F(j,mb,h,f,l,k);new q(i,j,{Ab:-n*t},g,m,d.Mb).Nb()}else mb(h,f,l,k)}function sb(e){e=e.cloneNode(a);b.fb(e);var d=this,i,k,f;if(x)f=x.cloneNode(a);var o=b.P(e,"A",a);function p(a){f&&b.db(f);a&&a(d)}var g=b.M(e,"image"),n;if(g){if(g.tagName=="A"){n=g.cloneNode(h);g=b.O(g,"IMG");g.border=0}b.Kb(g,z)}d.Rc=g;d.od=n;if(c.zd&&c.zd.Ad){var m=b.N(e,"caption");if(m){i=new c.zd.Ad(r,m,c.zd);i.tc()}}function l(a){a&&a()}d.rc=e;d.nd=function(a){if(i)i.vc(b.F(j,l,a));else l(a)};d.Db=function(a){if(d.Rc){var c=d.Rc.src;if(!K[c]){f&&Bb&&b.fb(f);return O(c,b.F(j,p,a))}}a&&a(d)};d.vd=function(){b.V(o,function(c,a){b.C(a,"click",fb)})};d.ud=function(){b.V(o,function(c,a){b.B(a,"click",fb)})};d.id=function(){b.J(k);b.G(f)};d.md=k=N();b.I(k,e);f&&b.I(k,f);d.Db(b.X);}}var i=this,n=b.u(n),c={Bd:2,Cd:2,Dd:2,Ed:a,Fd:a,Hd:3e3,Id:h,Jd:h,Kd:a,yd:400,xd:20,Ld:10};b.Q(c,pb);if(c.zd);var r=b.M(n,"slides",j,a),x=b.M(n,"loading",j,a),db=b.M(n,"navigator",j,a),cb=b.M(n,"arrowleft",j,a),bb=b.M(n,"arrowright",j,a),J=b.pb(r),R=b.rb(r),z,P=b.L(r),ib,U,D=P.length,e=-1,kb=c.Ld,t,M=[],S=0,I,nb="mousedown",V="mousemove",W="mouseup";if("ontouchstart"in k){I=a;nb="touchstart";V="touchmove";W="touchend"}var y,w,jb=0,Z=0;if(c.Md)jb=c.Md.Cd;if(c.Nd)Z=c.Nd.Bd;var Bb=c.Ed,ob=c.Dd,H=c.Fd,yb=c.Jd,ub=c.Hd,Ab=c.Id,L=c.Od,B,eb,lb,fb=0,G=1;if(L){B=L.Pd;eb=L.Qd;lb=L.Rd}var v=[];b.V(lb,function(b,a){v[b]=Y(a)});function N(){var a=b.H();b.Kb(a,z);b.gb(a,"absolute");return a}function A(a){return(a+D*7)%D}function zb(){return M[(S+1)%2]}function C(){return M[S%2]}function Q(d){var c=C(),b=zb();b.gc(d);c.qd(h);S++;b.qd(a);b.fc();c.pd()}function E(a,f,d){if(A(a)!=A(e)){var b=C();if(b.sd()){var c=e,h,g;if(a>c)g=a;if(a<c)h=a;b.gc(c,h,g);if(a>c)b.rd(4,f,d);else b.rd(2,f,d);b.td()}}}function ab(a){E(a)}function sb(b,a){Q(a);C().nd()}function T(){y&&y.fc(jb>G);w&&w.fc(Z>G)}function rb(a){a=b.w(a);var c=a.target?a.target:a.srcElement,d=a.relatedTarget?a.relatedTarget:a.toElement;if(!b.Cb(n,c)||b.Cb(n,d))return;G=1;T()}function qb(){G=0;T()}function X(){z={Fb:J,Gb:R,xb:0,Ab:0};b.V(P,function(c,a){b.Kb(a,z);b.gb(a,"absolute");b.cb(a,"hidden");b.db(a)});if(x){var a=b.L(x);a.push(x);for(var c=0;c<a.length;c++)b.Kb(a[c],z)}}i.fd=function(){b.cb(r,"hidden");X();x&&b.fb(x,h);if(cb&&bb){w=new u(cb,bb);w.gc(D);w.ec(0);w.a(o.ac,ab)}if(db){y=new p(db);y.gc(D);y.ec(0);y.a(o.ac,ab)}b.B(n,"mouseout",rb);b.B(n,"mouseover",qb);T();c.Kd&&b.B(l,"keydown",function(a){if(a.keyCode==37)E(e-1);else a.keyCode==39&&E(e+1)});for(var d=0;d<2;d++){var a=new Cb;a.a("parked",sb);M.push(a)}Q(0);!B&&C().nd()};i.fd()}t=x};var x=[{kc:1e3,lc:500,oc:i.e,pc:d.Tb},{kc:1e3,oc:i.f,pc:d.Tb},{kc:1e3,lc:500,oc:i.c,pc:d.Tb},{kc:1e3,oc:i.d,pc:d.Tb},{kc:2e3,lc:1e3,oc:i.e+i.d,pc:d.Tb},{kc:2e3,oc:i.f+i.c,pc:d.Tb},{kc:2e3,oc:i.e+i.c,pc:d.Tb},{kc:2e3,oc:i.f+i.d,pc:d.Tb},{kc:3e3,mc:a,xb:a,zb:a,yb:a,Ab:a,pc:d.Ub},{kc:2e3,lc:150,oc:i.d+i.e,pc:{Ab:d.Ob,xb:d.Wb}},{kc:3e3,lc:100,oc:i.c+i.e,pc:{Ab:d.Ob,xb:d.Xb}},{kc:1e3,oc:i.e,pc:d.Ub},{kc:1e3,lc:0,oc:i.f,pc:d.Ub},{kc:1200,oc:i.f,pc:{xb:d.Yb}},{kc:1e3,lc:500,oc:i.e},{kc:1e3,oc:i.f},{kc:1e3,lc:500,oc:i.c},{kc:1e3,oc:i.d},{kc:2e3,lc:1e3,oc:i.e+i.d},{kc:2e3,oc:i.f+i.c},{kc:2e3,oc:i.e+i.c},{kc:2e3,oc:i.f+i.d}],e=[];e.push({kc:1200,lc:30,xc:8,yc:4,xb:a,yb:a,zb:a,Ab:a,mc:a,Sc:a,zc:2049,pc:d.Qb,Mc:g.Dc});e.push({kc:500,lc:50,xc:8,yc:4,xb:a,yb:a,zb:a,Ab:a,mc:a,Sc:a,pc:d.Qb,Mc:g.Bc});e.push({kc:1800,lc:600,xc:8,yc:4,xb:a,yb:a,zb:a,Ab:a,mc:a,Sc:a,pc:d.Qb,Mc:g.Ec});e.push({kc:1800,lc:600,xc:8,yc:4,xb:a,yb:a,zb:a,Ab:a,mc:a,Sc:a,pc:d.Qb,Mc:g.Lc});e.push({kc:1800,lc:800,xc:8,yc:4,xb:a,yb:a,zb:a,Ab:a,mc:a,Sc:a,pc:d.Qb,Mc:g.Fc});e.push({kc:1800,lc:600,xc:8,yc:4,xb:a,yb:a,zb:a,Ab:a,mc:a,Sc:a,pc:d.Qb,Mc:g.Kc});e.push({kc:1800,lc:800,xc:8,yc:4,xb:a,yb:a,zb:a,Ab:a,mc:a,Wc:a,Sc:a,zc:2049,Mc:g.Jc});e.push({kc:300,lc:60,xc:8,yc:4,xb:a,yb:a,zb:a,Ab:a,mc:a,Sc:a,pc:d.Qb,Mc:g.Cc});e.push({kc:1e3,lc:30,xc:8,yc:4,xb:a,yb:a,zb:a,Ab:a,mc:a,Wc:a,Sc:a,pc:d.Qb});e.push({kc:1e3,lc:30,xc:8,yc:4,mc:a,Sc:a,oc:2,zc:260,pc:{Ab:d.Sb,xb:d.Sb,Eb:d.Rb}});e.push({kc:1e3,lc:30,xc:8,yc:4,mc:a,Sc:a,oc:4,zc:260,pc:{Ab:d.Sb,xb:d.Sb,Eb:d.Pb}});e.push({kc:1e3,lc:30,xc:8,yc:4,mc:a,Sc:a,oc:6,zc:260,Uc:{Tc:3,Vc:12},pc:{Ab:d.Sb,xb:d.Sb,Eb:d.Rb}});e.push({kc:1e3,lc:100,xc:8,yc:4,mc:a,Sc:a,oc:2,zc:513,pc:d.Rb,Mc:g.Cc});e.push({kc:1e3,lc:100,xc:8,yc:4,mc:a,Sc:a,oc:4,pc:d.Rb,Mc:g.Cc});e.push({kc:1e3,lc:100,xc:8,yc:4,mc:a,Sc:a,oc:6,zc:1028,pc:d.Rb,Mc:g.Cc,Uc:{Tc:12,Vc:3}});e.push({kc:1e3,lc:100,xc:8,yc:4,mc:a,Sc:a,oc:2,Nc:a,zc:513,pc:d.Rb,Mc:g.Bc});e.push({kc:1e3,lc:100,xc:8,yc:4,mc:a,Sc:a,oc:4,Nc:a,zc:513,pc:d.Rb,Mc:g.Bc});e.push({kc:1e3,lc:100,xc:8,yc:4,mc:a,Sc:a,oc:6,Nc:a,zc:513,pc:d.Rb,Mc:g.Bc,Uc:{Tc:12,Vc:3}});e.push({kc:2e3,lc:30,xc:8,yc:4,mc:a,oc:1,pc:d.Ub});e.push({kc:1e3,lc:30,xc:8,yc:4,mc:a,oc:8,pc:d.Ub});e.push({kc:1800,lc:60,xc:8,yc:4,mc:a,oc:6,Uc:{Tc:3,Vc:12},pc:d.Ub});e.push({kc:1e3,lc:100,xc:8,yc:4,mc:a,oc:1,zc:513,pc:d.Rb,Mc:g.Cc});e.push({kc:1e3,lc:100,xc:8,yc:4,mc:a,oc:8,zc:264,pc:d.Rb,Mc:g.Cc});e.push({kc:1e3,lc:100,xc:8,yc:4,mc:a,oc:5,zc:1028,Mc:g.Cc,Uc:{Tc:3,Vc:12}});e.push({kc:1e3,lc:100,xc:8,yc:4,mc:a,oc:1,Nc:a,zc:513,pc:d.Rb,Mc:g.Bc});e.push({kc:1e3,lc:100,xc:8,yc:4,mc:a,oc:8,Nc:a,zc:2049,pc:d.Rb,Mc:g.Bc});e.push({kc:1e3,lc:100,xc:8,yc:4,mc:a,oc:8,Nc:a,zc:513,pc:d.Rb,Mc:g.Bc});e.push({kc:1200,lc:30,xc:8,yc:4,xb:a,yb:a,zb:a,Ab:a,mc:a,zc:2049,pc:d.Pb,Mc:g.Dc});e.push({kc:1e3,xc:3,yc:2,xb:a,yb:a,zb:a,Ab:a,mc:a,Mc:g.wc,pc:d.Ub});e.push({kc:300,lc:30,xc:8,yc:4,xb:a,yb:a,zb:a,Ab:a,mc:a,pc:d.Pb,Mc:g.Bc});e.push({kc:1800,lc:200,xc:8,yc:4,xb:a,yb:a,zb:a,Ab:a,mc:a,pc:d.Pb,Mc:g.Ec});e.push({kc:1800,lc:200,xc:8,yc:4,xb:a,yb:a,zb:a,Ab:a,mc:a,pc:d.Pb,Mc:g.Lc});e.push({kc:1800,lc:600,xc:8,yc:4,xb:a,yb:a,zb:a,Ab:a,mc:a,pc:d.Pb,Mc:g.Fc});e.push({kc:2500,lc:500,xc:8,yc:4,xb:a,yb:a,zb:a,Ab:a,mc:a,pc:d.Pb,Mc:g.Kc});e.push({kc:300,lc:60,xc:8,yc:4,xb:a,yb:a,zb:a,Ab:a,mc:a,pc:d.Pb,Mc:g.Cc});e.push({kc:1e3,lc:30,xc:8,yc:4,xb:a,yb:a,zb:a,Ab:a,mc:a,pc:d.Pb});e.push({xc:8,yc:4,lc:40,kc:800,mc:a,zc:513,Mc:g.Dc});e.push({kc:1800,lc:400,xc:8,yc:4,mc:a,Mc:g.Kc});e.push({kc:1800,lc:400,xc:8,yc:4,mc:a,Mc:g.Fc});e.push({Yc:40,kc:1e3,lc:60,xc:8,yc:4,mc:a,zc:1032,pc:d.Mb,Mc:g.Gc});e.push({kc:3e3,lc:500,xc:8,yc:4,mc:a,Mc:g.Jc});e.push({kc:1500,lc:80,xc:8,yc:4,mc:a,Mc:g.Bc});e.push({kc:800,lc:120,xc:8,yc:4,mc:a,zc:264,Mc:g.Cc});e.push({kc:5e3,lc:100,xc:8,yc:4,Sc:a,oc:6,Mc:g.wc,zc:260,pc:{Ab:d.Ob,xb:d.Wb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,Sc:a,oc:6,Mc:g.Bc,zc:260,pc:{xb:d.Wb,Ab:d.Ob,Eb:d.Ob}});e.push({kc:3e3,lc:100,xc:8,yc:4,mc:a,Sc:a,oc:6,Mc:g.Cc,zc:260,Uc:{Vc:3},pc:{Ab:d.Ob,xb:d.Wb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,mc:a,Sc:a,oc:6,Mc:g.Ec,zc:260,pc:{Ab:d.Ob,xb:d.Wb,Eb:d.Ob}});e.push({kc:5e3,lc:160,xc:8,yc:4,mc:a,Sc:a,oc:6,Mc:g.Fc,zc:260,pc:{Ab:d.Ob,xb:d.Wb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,mc:a,Sc:a,oc:6,Mc:g.Jc,zc:260,pc:{Ab:d.Ob,xb:d.Wb,Eb:d.Ob}});e.push({kc:5e3,lc:80,xc:8,yc:4,mc:a,Sc:a,oc:6,Mc:g.Kc,zc:260,pc:{Ab:d.Ob,xb:d.Wb,Eb:d.Ob}});e.push({kc:5e3,lc:80,xc:8,yc:4,mc:a,Sc:a,oc:6,Mc:g.Lc,zc:260,pc:{Ab:d.Ob,xb:d.Wb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,oc:6,Mc:g.wc,zc:260,pc:{Ab:d.Ob,xb:d.Wb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,oc:6,Mc:g.Bc,zc:260,pc:{xb:d.Wb,Ab:d.Ob,Eb:d.Ob}});e.push({kc:3e3,lc:100,xc:8,yc:4,mc:a,oc:6,Mc:g.Cc,zc:260,Uc:{Vc:3},pc:{Ab:d.Ob,xb:d.Wb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,mc:a,oc:6,Mc:g.Ec,zc:260,pc:{Ab:d.Ob,xb:d.Wb,Eb:d.Ob}});e.push({kc:5e3,lc:160,xc:8,yc:4,mc:a,oc:6,Mc:g.Fc,zc:260,pc:{Ab:d.Ob,xb:d.Wb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,mc:a,oc:6,Mc:g.Jc,zc:260,pc:{Ab:d.Ob,xb:d.Wb,Eb:d.Ob}});e.push({kc:5e3,lc:80,xc:8,yc:4,mc:a,oc:6,Mc:g.Kc,zc:260,pc:{Ab:d.Ob,xb:d.Wb,Eb:d.Ob}});e.push({kc:5e3,lc:80,xc:8,yc:4,mc:a,oc:6,Mc:g.Lc,zc:260,pc:{Ab:d.Ob,xb:d.Wb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,Sc:a,oc:6,Mc:g.wc,zc:260,pc:{Ab:d.Ob,xb:d.Xb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,Sc:a,oc:6,Mc:g.Bc,zc:260,pc:{Ab:d.Ob,xb:d.Xb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,Sc:a,oc:6,Mc:g.Cc,zc:260,Uc:{Vc:3},pc:{Ab:d.Ob,xb:d.Xb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,Sc:a,oc:6,Mc:g.Ec,zc:260,pc:{Ab:d.Ob,xb:d.Xb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,Sc:a,oc:6,Mc:g.Ec,zc:260,Uc:{Vc:3},pc:{Ab:d.Ob,xb:d.Xb,Eb:d.Ob}});e.push({kc:5e3,lc:800,xc:8,yc:4,Sc:a,oc:6,Nc:a,Mc:g.Fc,zc:260,pc:{Ab:d.Ob,xb:d.Xb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,Sc:a,oc:6,Mc:g.Jc,zc:260,pc:{Ab:d.Ob,xb:d.Xb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,Sc:a,oc:6,Mc:g.Lc,zc:260,pc:{Ab:d.Ob,xb:d.Xb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,oc:5,Mc:g.wc,zc:260,pc:{Ab:d.Ob,xb:d.Xb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,oc:5,Mc:g.Bc,zc:260,pc:{Ab:d.Ob,xb:d.Xb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,oc:5,Mc:g.Cc,zc:260,Uc:{Vc:3},pc:{Ab:d.Ob,xb:d.Xb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,oc:5,Mc:g.Ec,zc:260,pc:{Ab:d.Ob,xb:d.Xb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,oc:5,Mc:g.Ec,zc:260,Uc:{Vc:3},pc:{Ab:d.Ob,xb:d.Xb,Eb:d.Ob}});e.push({kc:5e3,lc:800,xc:8,yc:4,oc:5,Nc:a,Mc:g.Fc,zc:260,pc:{Ab:d.Ob,xb:d.Xb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,oc:5,Mc:g.Jc,zc:260,pc:{Ab:d.Ob,xb:d.Xb,Eb:d.Ob}});e.push({kc:5e3,lc:100,xc:8,yc:4,oc:5,Mc:g.Lc,zc:260,pc:{Ab:d.Ob,xb:d.Xb,Eb:d.Ob}});e.push({kc:600,lc:100,xc:8,yc:4,mc:a,Sc:a,oc:6,Mc:g.Bc,zc:264,pc:{Ab:d.Zb,xb:d.Sb,Eb:d.Ob}});e.push({kc:600,lc:60,xc:8,yc:4,mc:a,Sc:a,oc:6,Mc:g.Cc,zc:264,Uc:{Vc:3},pc:{Ab:d.Zb,xb:d.Sb,Eb:d.Ob}});e.push({kc:1200,lc:200,xc:8,yc:4,mc:a,Sc:a,oc:6,Mc:g.Ec,zc:264,pc:{Ab:d.Zb,xb:d.Sb,Eb:d.Ob}});e.push({kc:400,lc:100,yc:7,xb:a,mc:a,Wc:a,Mc:g.wc});e.push({kc:400,lc:100,xc:10,yb:a,mc:a,Wc:a,Mc:g.wc});e.push({kc:1500,yc:6,xb:a,mc:a});e.push({kc:1500,xc:8,Ab:a,mc:a});e.push({kc:1500,yc:6,xb:a,mc:a,nc:a});e.push({kc:1500,xc:8,Ab:a,mc:a,nc:a});e.push({kc:600,lc:200,yc:7,mc:a,Sc:a,Mc:g.wc});e.push({kc:600,lc:200,xc:14,mc:a,Sc:a,Mc:g.wc});e.push({kc:1200,lc:120,oc:2,yc:6,Ab:a,mc:a,Mc:g.wc});e.push({kc:1200,lc:120,oc:4,xc:12,zb:a,mc:a,zc:514,Mc:g.wc});e.push({kc:2e3,lc:0,yc:6,Ab:a,mc:a,Mc:g.wc,Uc:{Vc:3}});e.push({kc:2e3,lc:0,xc:12,xb:a,mc:a,Mc:g.wc,Uc:{Tc:12}});e.push({kc:600,lc:80,yc:6,mc:a,Sc:a});e.push({kc:600,lc:80,xc:12,mc:a,Sc:a});e.push({kc:800,lc:150,yc:5,zb:a,nc:a,zc:264,pc:d.Ub,Mc:g.Jc});e.push({kc:800,lc:150,xc:10,Ab:a,nc:a,zc:264,pc:d.Ub,Mc:g.Jc});e.push({kc:1e3,mc:a});e.push({kc:500,xb:a,mc:a,nc:a,pc:d.Pb});e.push({kc:400,Ab:a,mc:a,nc:a,pc:d.Pb});e.push({kc:1e3,xb:a,nc:a,pc:d.Ub});e.push({kc:1e3,Ab:a,nc:a,pc:d.Ub});geome_slideshow_starter=function(b){new t(b,{Dd:2,Ed:a,Fd:a,Hd:3e3,Id:h,Jd:h,Kd:a,yd:400,xd:20,Ld:10,Od:{Pd:r,Rd:e,Qd:1},zd:{Ad:w,jc:x},Md:{Cd:2}})}})(window,document,Math,null,true,false)
</script>