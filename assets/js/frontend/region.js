//API call to fetch country
const regionname = fns.getURLSlugs();
var region = {
	//-------------------------------------- Code to load table on page-load ----------------------------------------------------------------------------------------------------
	getregion: function () {
		var maxLenght = 100;
		var i = 0;
		const regionname = fns.getURLSlugs();
		var mycountry = "india";
		var mycountry1 = "turkey";

		fns.ajaxGet('holidaymate/api/packages/pack_region/' + regionname, 'user').
		done(function (response) {
			if (response.status === 401) {
				alert(response.message)
			} else if (response.status === 200) {
				$.map(response.data, function (item, index) {
					console.log(response.data);
					//var newregion = `<div id="countryid${ item.country_name.replace(/ /g, "_") }"></div>`;
					//var region_content1 = `<p class="text-center">${item.description }</p>`;
					var url = "#";
					var newpackage = `<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
          <a href="#">
          <div class="card mt-3 mb-3">
           <div id="countryid${item.package_name.replace(/ /g, "_")}"></div>
            <div class="text-right mt-3">
            </div>
            <div class="card-block">
              <h4 class="card-title text-center">${item.package_name}</h4>
              <div class="card-text text-center">
                <small class="text-center"> ${item.short_desc}</small>
              </div>
            </div>
            <div class="card-footer">
              <p class="d-inline price-align">Price <span><i class="fa fa-inr" aria-hidden="true"></i> ${item.price}</span></p>
              <a href="#" class="btn btn-lg small-btn-submit float-right">View Details</a>
            </div>
          </div>
          </a>
        </div>`;

					if (index <= (maxLenght - 1)) {
						//region.getRegionName(item.region_name);
						// $('.region1-banner').append(newregion);
						$('.packages').append(newpackage);
					}
					region.getPackageImages(item.package_name.replace(/ /g, "_"));

				})
			}
		})
	},
	//-------------------------------------- Code to country images ----------------------------------------------------------------------------------------------------
	getCountryImages: function () {
		var c = ""
		if (regionname == 'Asia') {
			c = "India";
		}
		if (regionname == 'Europe') {
			c = "bhutan";
		}

		var img = "";
		fns.ajaxGet('holidaymate/api/country/images/' + c, 'user').
		done(function (r) {
				if (r.status === 401) {
					alert(e.message)
				} else if (r.status === 200) {
					$.map(r.data, function (item1, index1) {
						img += `<div class="boredercls"><img src="${item1.url}"  style="width:100%;"></div>`;
					});
					$('.region1-banner').html(img);
				}
			})
			.fail(function (r) {
				alert(r.message);
			});
	},
	getRegionName: function (rname) {
		var img = "";
		fns.ajaxGet('holidaymate/api/region/regionname/' + rname, 'user').
		done(function (r) {
				if (r.status === 401) {
					alert(e.message)
				} else if (r.status === 200) {
					$.map(r.data, function (item1, index1) {

						$('.regionname').append(`<h1 class="text-center">${item1.region_name}</h1>`);
						$('.region-content1').append(`<p class="text-center">${item1.description}</p>`);
					});
				}
			})
			.fail(function (r) {
				alert(r.message);
			});
	},
	getPackageImages: function (package) {
		//console.log(country);
		var img = "";
		fns.ajaxGet('holidaymate/api/packageimages/images/' + package, 'user').
		done(function (r) {
				if (r.status === 401) {
					alert(e.message)
				} else if (r.status === 200) {
					$.map(r.data, function (item1, index1) {
						img += `<img class="img-responsive card-img-top" src="${item1.url}">`;
					});
					$(`#countryid${package}`).append(img);
				}
			})
			.fail(function (r) {
				alert(r.message);
			});

	}
};
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------
region.getRegionName(regionname);
region.getCountryImages();
region.getregion();
