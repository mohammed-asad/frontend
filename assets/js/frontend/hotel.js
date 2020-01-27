//API call to fetch hotel
var hotel = {
	//******************************** CoCode to load table on page-load ***************************************//
	getHotel: function () {
		var maxLenght = 100;
		var i = 0;
		fns.ajaxGet('holidaymate/api/hotel/id/').
		done(function (response) {
				if (response.status === 401) {
					alert(response.message)
				} else if (response.status === 200) {
					$.map(response.data, function (item, index) {
						i += 1;
						var stat;
						if (item.status == 0) {
							stat = "Disabled";
						} else if (item.status == 1) {
							stat = "Enabled";
						} else {
							stat = "Undefined"
						}
						var hotel_new = `<div class="">
            <div id="hotel_id"${j}>
            <h2>${item.name }</h2>
            <p>${item.long_desc }</p>
            </div>
           </div>`;
						if (index <= (maxLenght - 1)) {
							$('.hotel-description').append(hotel_new);
						}
						hotel.getHotelImages(item.name, index);
					})
				}
			})
			.fail(function (response) {
				alert("API failed, check Token");
			})
	},

	//******************************** Code to load Hotel Images ***************************************//

	getHotelImages: function (hotel, j) {
		console.log(hotel);
		var img = "";
		fns.ajaxGet('holidaymate/api/hotelimages/images/' + hotel).
		done(function (r) {
				if (r.status === 401) {
					alert(e.message)
				} else if (r.status === 200) {
					$.map(r.data, function (item1, index1) {
						img += `<div><img src="${item1.url}" width="50" height="50" ></div>`;
					});
					$(`#hotel_id${j}`).append(img);
				}
			})
			.fail(function (r) {
				alert(r.message);
			});
	}
};



hotel.getHotel();
