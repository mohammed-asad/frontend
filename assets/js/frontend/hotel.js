//API call to fetch hotel
var hotel = {
	//******************************** CoCode to load table on page-load ***************************************//
	getHotel: function () {
		var maxLenght = 100;
		var i = 0;
		var id = 3;
		fns.ajaxGet('holidaymate/api/hotel/id/' + id).
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
						var rate = item.rating;
						var staricon = " ";
						for (var k = 1; k <= rate; k++) {
							staricon += `<img src ="../assets/images/hotel/star.svg" alt = "" class ="ima-fluid mb-3 mt-2" >`;
						}

						var hotel_new = `<div class=""><div id="hotel_id"></div>`;
						var hotel_name = `<h4 class="mt-3">${item.name }</h4>`;
						var hotel_content = `<p>${item.long_desc }</p></div>`;

						if (index <= (maxLenght - 1)) {
							$('.hotel-description').append(hotel_new);
							$('.hotel-description').append(hotel_name);
							$('.hotel-description').append(staricon);
							$('.hotel-description').append(hotel_content);
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

	getHotelImages: function (hotel) {
		console.log(hotel);
		var img = "";
		fns.ajaxGet('holidaymate/api/hotelimages/images/' + hotel).
		done(function (r) {
				if (r.status === 401) {
					alert(e.message)
				} else if (r.status === 200) {
					$.map(r.data, function (item1, index1) {
						img += `<div class="boredercls hotel-img"><img src="${item1.url}" class="img-fluid"></div>`;
					});
					$(`#hotel_id`).append(img);
				}
			})
			.fail(function (r) {
				alert(r.message);
			});
	}
};



hotel.getHotel();