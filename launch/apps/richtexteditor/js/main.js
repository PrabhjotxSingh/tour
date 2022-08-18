//loading
window.addEventListener("load", function(){
	var load_screen = document.getElementById("load_screen");
	document.body.removeChild(load_screen);
});
//loading END

$(document).ready(function() {
    $(".hidesavepopup").click(function(){
        $(".savepopup").hide();
    });
    $(".showsavepopup").click(function(){
        $(".savepopup").show();
    });
});

$(document).ready(function() {
    $(".hideloadpopup").click(function(){
        $(".loadpopup").hide();
    });
    $(".showloadpopup").click(function(){
        $(".loadpopup").show();
    });
});

if (localStorage["rtetour"])
{
    var rtetour = localStorage["rtetour"] ;
    document.getElementById("rtetour").value = rtetour ;
}
else
{
    document.getElementById("rtetour").placeholder = "Type anything here..." ;
}

document.getElementById("save").addEventListener("click", function ()
    {
        var rtetour = document.getElementById("rtetour").value ;
        localStorage.setItem("rtetour", rtetour) ;
    } , false);

document.getElementById("clear").addEventListener("click", function ()
    {
        var rtetour = "";
        localStorage.setItem("rtetour", rtetour) ;
				location.reload();
    } , false);




		if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
