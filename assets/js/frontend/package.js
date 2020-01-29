//API call to fetch country
var package = {
	//-------------------------------------- Code to load home package  ----------------------------------------------------------------------------------------------------

	getPackage: function () {
		var maxLenght = 100;
		var i = 0;
		fns.ajaxGet('holidaymate/api/packages/id/').
		done(function (response) {
				if (response.status === 401) {
					alert(response.message)
				} else if (response.status === 200) {
					$.map(response.data, function (item, index) {
						i += 1;
						var stat;
						var newpackage = `<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
            <div class="card mt-3 mb-3">
             <div id="countryid${item.package_name}"></div>
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
                <button class="btn btn-lg small-btn-submit float-right">View Details</button>
              </div>
            </div>
					</div>`;
						var newpackageoverview = ` <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 section">
						<h1>Package Overview</h1>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 section">
						<p>${item.overview}</p>
					</div>`;
						var newpackageinclude = `<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
          <h1>What's included</h1>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
          <p>${item.include}</p>
				</div>`;
						var newpackageexclude = `<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
          <h1>What's exclude</h1>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
          <p>${item.exclude}</p>
        </div>`;
						if (index <= (maxLenght - 1)) {
							$('.packages').append(newpackage);
							$('.hotel-overview').append(newpackageoverview);
							$('.hotel-included').append(newpackageinclude);
							$('.hotel-excluded').append(newpackageexclude);
						}
						package.getPackageImages(item.package_name);

					})
				}
			})
			.fail(function (response) {
				alert("API failed, check Token");
			})
	},
	getPackageImages: function (package) {
		//console.log(country);
		var img = "";
		fns.ajaxGet('holidaymate/api/packageimages/images/' + package).
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
package.getPackage();
