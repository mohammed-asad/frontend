//API call to fetch country
var country = {
	//-------------------------------------- Code to load table on page-load ----------------------------------------------------------------------------------------------------
	getCountry: function () {
		var maxLenght = 100;
		var i = 0;
		var id = 1;
		fns.ajaxGet('holidaymate/api/country/id/' + id).
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
						var newcountry = `<div id="countryid${item.country_name}"></div>`;
						var region_content = `<h1 class="text-center">${item.country_name}</h1>
            <p class="text-center">${item.description}</p>`;;
						if (index <= (maxLenght - 1)) {

							$('.region-banner').append(newcountry);
							$('.region-content').append(region_content);
						}
						country.getCountryImages(item.country_name);
					})
				}
			})
			.fail(function (response) {
				alert("API failed, check Token");
			})
	},
	//-------------------------------------- Code to country images ----------------------------------------------------------------------------------------------------
	getCountryImages: function (country) {
		var img = "";
		fns.ajaxGet('holidaymate/api/country/images/' + country).
		done(function (r) {
				if (r.status === 401) {
					alert(e.message)
				} else if (r.status === 200) {
					$.map(r.data, function (item1, index1) {
						img += `<div><img src="${item1.url}" width="50" height="50" ></div>`;
					});
					$(`#countryid${country}`).append(img);
				}
			})
			.fail(function (r) {
				alert(r.message);
			});
	}
};
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------
country.getCountry();
