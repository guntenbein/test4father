var isNC=false;
var isNC6=false;
var isOld=false;
var name_browser=navigator.appName;
if(name_browser=="Netscape") isNC=true;
                                              else    isIE=true;
var num_version=parseInt(navigator.appVersion.charAt(0));
if(isNC && num_version>=6) isNC6=true;
if(num_version<4) isOld=true;
