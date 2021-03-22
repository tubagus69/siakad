/* logic.js */

function getBrowser() {
    c = navigator.appName+"\n";
    if (c.indexOf("Microsoft") > -1) {
        c = "IE";
    } else {
        c = "other";
    }
    return c;
}


function writeFlash() {
    // check url for chapter
    var url = new String(window.location);
    if (url.indexOf("c1lang=") > 0) {
        var c1lang = url.substr(url.indexOf("c1lang=")+7, 2);
    } else {
        var c1lang = "en";
    }
    if (url.indexOf("c1id=") > 0) {
        var c1id = url.substr(url.indexOf("c1id=")+5, 12);
    } else {
        var c1id = "en0100000000";
    }
    lang1 = c1lang+"="+c1id;
    if (url.indexOf("c2lang=") > 0) {
        var c2lang = url.substr(url.indexOf("c2lang=")+7, 2);
    } else {
        var c2lang = "en";
    }
    if (url.indexOf("c2id=") > 0) {
        var c2id = url.substr(url.indexOf("c2id=")+5, 12);
    } else {
        var c2id = "en0100000000";
    }
    lang2 = c2lang+"="+c2id;
    
    if (url.indexOf("chapter=") > 0) {
        var ch = url.substr(url.indexOf("chapter="), url.length);
    } else {
        var ch = "chapter=1";
    }

    var f = '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="100%" height="100%" id="cheetah" align="top">';
    f += '<param name="allowScriptAccess" value="sameDomain" />';
    f += '<param name="movie" value="../swf/cheetah.swf?'+lang1+'&'+lang2+'&'+ch+'" />';
    f += '<param name="menu" value="false" />';
    f += '<param name="quality" value="high" />';
    f += '<param name="bgcolor" value="#FFFFFF" />';
    f += '<embed src="../swf/cheetah.swf?'+lang1+'&'+lang2+'&'+ch+'" menu="false" quality="high" bgcolor="#FFFFFF" width="100%" height="100%" name="cheetah" align="top" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />';
    f += '</object>';
    
    document.write(f);
}


function openGlobalTool(ref) {
    var w = 800;
    var h = 600;
    var gtwin = window.open(ref, "gtwin", "status=0,toolbar=0,location=0,menubar=0,directories=0,resizable=1,width="+w+",height="+h);
}

function openActivity(ref, path) {
    var w = 800;
    var h = 470;
    var eawin = window.open(ref+"?path="+path, "eawin", "status=0,toolbar=0,location=0,menubar=0,directories=0,resizable=1,width="+w+",height="+h);
}

function openDocument(ref) {
    var w = 800;
    var h = 600;
    var docwin = window.open(ref, "docwin", "status=0,toolbar=0,location=0,menubar=0,directories=0,resizable=1,scrollbars=1,width="+w+",height="+h);
}

function openExternal(ref) {
    var w = 800;
    var h = 600;
    var docwin = window.open(ref, "docwin", "status=0,toolbar=0,location=1,menubar=0,address=1,directories=0,resizable=1,scrollbars=1,width="+w+",height="+h);
}

function openELAB(ref) {
    var w = 800;
    var h = 600;
    var docwin = window.open(ref, "docwin", "status=0,toolbar=0,location=1,menubar=0,address=1,directories=0,resizable=1,scrollbars=1,width="+w+",height="+h);
}

function openPT(ref) {
    var browser = getBrowser();
    var w = 300;
    var h = 150;
    if (browser == "IE") {
        var ptwin = window.open("../pt.html?pt="+ref, "ptwin", "status=0,toolbar=0,location=0,menubar=0,directories=0,resizable=1,width="+w+",height="+h);
    } else {
        var ptwin = window.open(ref, "ptwin", "status=0,toolbar=0,location=0,menubar=0,directories=0,resizable=1,width="+w+",height="+h);
    }
}
function openQuiz(ref, path) {
    var w = 740;
    var h = 460;
    var ptwin = window.open(ref+"?path="+path, "quizwin", "status=0,toolbar=0,location=0,menubar=0,directories=0,scrollbars=0,resizable=1,width="+w+",height="+h);
}
    

function showCourseMenu() {
    window.opener.focus();
}
