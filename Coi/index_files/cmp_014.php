
(function (){
 var cval = "";
 try{cval = document.cookie;}catch(e){cval = "";}
 var l = ""; if("cmp_getlang" in window){ l = window.cmp_getlang().toLowerCase(); }
 var s = document.createElement("script");
 s.src = (window.cmp_proto||location.protocol)+"//eu-us.consentmanager.net/delivery/cmp.php?__cmpcc=1"+(cval.length>0?"&__cmpfcc=1":"")+"&id=86685&o=1780490404&h=file%3A%2F%2F%2FD%3A%2FOneDrive%2520-%2520Universidad%2520de%2520Castilla-La%2520Mancha%2F0_ALMACENAMIENTO%2FDavid%2FRol%2FPok%25C3%25A9mon%2FBulbapedia%2FMain_Coi4.htm&"+window.cmp_params+"&l="+l+"&odw=0&dlt=1&l=en&lp=EN&cmpdarkmode=1";
 s.type = "text/javascript";
 s.setAttribute("data-cmp-ab","1");
 s.async = true;
 var samesite = window !== top?"None":"Lax";
 if(cval.length==0){ try{ document.cookie = "__cmpcc=1; expires=" + (new Date((new Date()).getTime() + 395 * 86400 * 1000)).toUTCString() + "; path=/"+(location.protocol == "https:" ? ";SameSite="+samesite+";Secure" : ";SameSite=Lax");}catch(e){} }
 if(document.body){ document.body.appendChild(s);}
 else if(document.currentScript){ document.currentScript.parentElement.appendChild(s); }
 else{ document.write(s.outerHTML); }
 })();