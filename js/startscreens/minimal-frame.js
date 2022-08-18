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
    document.getElementById('currentTime').innerHTML = hour+":"+min ;
    setTimeout(clock, 1000);
  }
}
var d = new Date();
document.getElementById("date").innerHTML = d.toDateString();


//date and time end
