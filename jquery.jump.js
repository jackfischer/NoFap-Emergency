$(emergency).click(function() {
	  $.get("director.php", { cat:"emergency" }, function(data) {
		      window.location.href = data;
		        });
});
$(depression).click(function() {
	  $.get("director.php", { cat:"depression" }, function(data) {
		      window.location.href = data;
		        });
});
$(rejection).click(function() {
	  $.get("director.php", { cat:"rejection" }, function(data) {
		      window.location.href = data;
		        });
});
$(relapsed).click(function() {
	  $.get("director.php", { cat:"relapsed" }, function(data) {
		      window.location.href = data;
		        });
});
$(about).click(function() {
	window.location.href="about.html";
});

