//loading
window.addEventListener("load", function(){
	var load_screen = document.getElementById("load_screen");
	document.body.removeChild(load_screen);
});
//loading END

$(document).ready(function() {
    $(".hidesave").click(function(){
        $(".savecontain").hide();
    });
    $(".showsave").click(function(){
        $(".savecontain").show();
    });
});


$(document).ready(function() {
    $(".hideload").click(function(){
        $(".loadcontain").hide();
    });
    $(".showload").click(function(){
        $(".loadcontain").show();
    });
});


$(document).ready(function() {
    $(".hidesavestat").click(function(){
        $(".savestatcontain").hide();
    });
    $(".showsavestat").click(function(){
        $(".savestatcontain").show();
    });
});



if (localStorage["notepadtour"])
{
    var notepadtour = localStorage["notepadtour"] ;
    document.getElementById("notepadtour").value = notepadtour ;
}
else
{
    document.getElementById("notepadtour").placeholder = "Type anything here..." ;
}

document.getElementById("save").addEventListener("click", function ()
    {
        var notepadtour = document.getElementById("notepadtour").value ;
        localStorage.setItem("notepadtour", notepadtour) ;
    } , false);

document.getElementById("clear").addEventListener("click", function ()
    {
        var notepadtour = "";
        localStorage.setItem("notepadtour", notepadtour) ;
				location.reload();
    } , false);




		if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
