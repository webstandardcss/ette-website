// clicks.js
// 
// Load this script on the page where you want to collect stats

// Assign unique ids to all links on the page using a data element
// Set a click handler to fire every time a link is clicked
// It gathers the unique id of the clicked link and builds a URL to call

	var anchors = document.getElementsByTagName("a");
	for (var i = 0; i < anchors.length; i++) {
		anchors[i].setAttribute("data-click", i);
		anchors[i].onclick = function() {
			confirm(i);
			var hacky = document.createElement('iframe');
			hacky.setAttribute('id', 'hacky-hack');
			hacky.setAttribute('src', 'http://URL/clickstats/' + i);
			hacky.setAttribute('style', 'visibility:hidden;');
			document.body.appendChild(hacky);
		};
	}