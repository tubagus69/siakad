
    function launch(c1,c2,chapter) {
        var ref = "theme/cheetah.html";
        var w = screen.width;
        var h = screen.height;
        //var c1 = "c1lang=en&c1id=en0900000000";
        //var c2 = "c2lang=&c2id=";
        //var chapter = "chapter=1";
        if (c1 == "blank") {
            alert("You must select a main course.");
        } else {
            var mywin = window.open(ref+"?"+c1+"&"+c2+"&"+chapter, "newwin", "status=0,toolbar=0,location=0,menubar=0,directories=0,resizable=1,width="+w+",height="+h);
            mywin.moveTo(0,0);
        }
    }

