//loading
window.addEventListener("load", function(){
	var load_screen = document.getElementById("load_screen");
	document.body.removeChild(load_screen);
});
//loading END

//date and timeout

window.onload = function() {
  clock();
    function clock() {
    var now = new Date();
    var TwentyFourHour = now.getHours();
    var hour = now.getHours();
    var min = now.getMinutes();
    var mid = ' PM';
    if (min < 10) {
      min = "0" + min;
    }
    if (hour > 12) {
      hour = hour - 12;
    }
    if(hour==0){
      hour=12;
    }
    if(TwentyFourHour < 12) {
       mid = ' AM';
    }
    document.getElementById('currentTime').innerHTML = hour+':'+min + mid ;
    setTimeout(clock, 1000);
  }
}
var d = new Date();
document.getElementById("date").innerHTML = d.toDateString();


//date and time end

//menu
$(document).ready(function(){
    $(".hidemenu").click(function(){
        $(".menuall").hide();
    });
    $("#showmenu").click(function(){
        $(".menuall").show();
    });
});

//menu end

//menu button dynamic

$(document).ready(function(){
    $(".hidemenu").click(function(){
        $(".menubar").show();
    });
    $("#showmenu").click(function(){
        $(".menubar").hide();
    });
});

//menu button dynamic end

//date and time and usermenu dynamic
$(document).ready(function(){
    $(".hidemenu").click(function(){
			  $("#currentTime").show();
			  $("#date").show();
				$(".usermenuall").show();
    });
    $("#showmenu").click(function(){
        $("#currentTime").hide();
				$("#date").hide();
				$(".usermenuall").hide();
    });
});

//date and time usermenu dynamic end

//recent show
$(document).ready(function(){
    $(".hiderecent").click(function(){
        $(".recentall").hide();
    });
    $("#showrecent").click(function(){
        $(".recentall").show();
    });
});

//recent show end

//first setup alerts
$(document).ready(function(){
    $("#hide-fs-alert").click(function(){
        $(".fs-alert").hide();
    });
    $("#show-fs-alert").click(function(){
        $(".fs-alert").show();
    });
});

function changefsiframe(url){
	document.getElementById("iframefsid").src = url;
}
//first setup alert end

//User menu
$(document).ready(function(){
  $("#usermenutoggle").click(function(){
    $(".usermenudisplay").toggle();
  });
});
//user menu end

//battery
navigator.getBattery()
  .then(function(battery) {
    //console.log(battery.level);
		battnodec = Math.trunc(battery.level*100);
		batterylevelper = "BATT: " + battnodec + "%";
		document.getElementById('batterlevelid').innerHTML = batterylevelper;
});
//battery
