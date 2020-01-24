//API call to fetch terms
var terms = {
	//-------------------------------------- Code to load table on page-load ----------------------------------------------------------------------------------------------------

	getTerms: function () {
		var maxLenght = 100;
		i = 0;
		fns.ajaxGet('holidaymate/api/terms/id/').
		done(function (response) {
				if (response.status === 401) {
					alert(response.message)
				} else if (response.status === 200) {
					$.map(response.data, function (item, index) {
						i += 1;
						//Populate Terms list
						var terms = `<div id="home" class="container tab-pane term-tab active mt-3"><p>${item.description}</p></div>`;
						if (index <= (maxLenght - 1)) {
							$('.terms').append(terms);
						}
					})
				}
			})
			.fail(function (response) {
				alert("API failed, check Token");
			})
	},






};
terms.getTerms();
