$(function(){

	function fetchHtml(){

		var html = $(".html").val();
		return html
	}

	function fetchCss(){

		var css = $(".css").val();
		return css
	}

	function fetchJs(){

		var js = $(".js").val();
		return js
	}


	$(".innerbox").on("keyup", function(){

		var target = $("#live_update")[0].contentWindow.document;
		target.open();
		target.close();

		var html = fetchHtml();
		var css = fetchCss();
		var js = fetchJs();

		$("body", target).append(html);
		$("head", target).append("<style>" + css + "</style>");
		$("body", target).append("<script>" + js + "</script>");

	});

});
