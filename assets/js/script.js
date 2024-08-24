// search filter

$(document).ready(function () {
	$("#myInput").on("keyup", function () {
		var value = $(this).val().toLowerCase();
		$("#myTable tr").filter(function () {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
		});
	});
});

// show search button on mobile
$(document).ready(function () {
	$("#searchIcon").click(function () {
		$("#searchArea").toggle();
	});
});

// Sticky nav
$(document).ready(function () {
	// $(window).resize(function () {
	var x = window.matchMedia("(min-width: 768px)");
	if (x.matches) {
		var lastScrollTop = 0;
		$(window).scroll(function () {
			var st = $(window).scrollTop();

			if (st > lastScrollTop) {
				$("#headerTop").css({
					transform: "translateY(-35px)",
					transition: "0.6s",
				});
				$("#headerMid").css({
					transform: "translateY(-35px)",
					transition: "0.6s",
				});
				$("#headerBtm").css({
					transform: "translateY(-85px)",
					transition: "0.6s",
				});
			} else {
				$("#headerTop").css({
					transform: "translateY(0px)",
					transition: "0.6",
				});
				$("#headerMid").css({
					transform: "translateY(0px)",
					transition: "0.6",
				});
				$("#headerBtm").css({
					transform: "translateY(0px)",
					transition: "0.6",
				});
				$("#allData").css("margin-top", 110);
			}

			lastScrollTop = st;
		});
	}

	// })
});
