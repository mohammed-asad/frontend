//API call to fetch country
var destination = {
	//-------------------------------------- Code to load table on page-load ----------------------------------------------------------------------------------------------------

	getDestination: function () {
		var maxLenght = 100;
		var i = 0;
		var id = 3;
		fns.ajaxGet('holidaymate/api/destination/id/' + id).
		done(function (response) {
				if (response.status === 401) {
					alert(response.message)
				} else if (response.status === 200) {
					$.map(response.data, function (item, index) {
						//Populate country list
						i += 1;
						var stat;
						// Assingning values for enable and disable 
						if (item.status == 0) {
							stat = "Disabled";
						} else if (item.status == 1) {
							stat = "Enabled";
						} else {
							stat = "Undefined"
						}

						var c = `<div id="destinationid${item.destination_name}"></div>`;
						var region_content = `<h1 class="text-center">${item.destination_name}</h1>
            <p class="text-center">${item.description}</p>`;
						if (index <= (maxLenght - 1)) {
							$('.region-banner').append(c);
							$('.region-content').append(region_content);
						}
						destination.getDestinationImages(item.destination_name);
					})
				}
			})
			.fail(function (response) {
				alert("API failed, check Token");
			})
	},
	//-------------------------------------- Code to country images ----------------------------------------------------------------------------------------------------

	getDestinationImages: function (destination) {
		fns.ajaxGet('holidaymate/api/destinationimages/images/' + destination).
		done(function (r) {
				if (r.status === 401) {
					alert(e.message)
				} else if (r.status === 200) {
					$.map(r.data, function (item1, index1) {
						img = `<div><img src="${item1.url}" width="50" height="50" ></div>`;
						$(`#destinationid${destination}`).append(img);
						console.log(img);
					});

				}
			})
			.fail(function (r) {
				alert(r.message);
			});
	}
};
destination.getDestination();
