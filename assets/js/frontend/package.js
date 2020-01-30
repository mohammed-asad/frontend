//API call to fetch country
var package = {
	//-------------------------------------- Code to load home package  ----------------------------------------------------------------------------------------------------

	getPackage: function () {
		var maxLenght = 100;
		var i = 0;
		var id = 1;
		fns.ajaxGet('holidaymate/api/packages/id/' + id).
		done(function (response) {
				if (response.status === 401) {
					alert(response.message)
				} else if (response.status === 200) {
					$.map(response.data, function (item, index) {
						i += 1;
						//var stat;
						var base_url = $('#base').val();
						var url = base_url + 'packageoverview';
						var newpackage = `<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
						<a href="${url}">
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
						</a>
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
						var newpackagebannerimage = `<div id="countryid${item.package_name}" class="boredercls"></div>
						<div class="row">
						<div class="col-xl-5 offset-xl-1 col-lg-6 col-md-6 col-sm-6">
						<div class="pack-column">
							<h3>${item.package_name}</h3>
							<p class="m-0">Tour to Stunning ${item.package_name}</p>
							<p><span class="package-rating"></span> <img class="img-fluid star" src="${base_url}assets/images/icons/star.svg"></p>
						</div>
						</div>
						<div class="col-xl-5 col-lg-6 col-md-6 col-sm-6 cst-text-r">
						<div class="pack-column">
							<div class="d-inline-block"><span class="mont-book"> Starting From </span>
								<h2 class="d-inline-block ml-2"> <i class="fa fa-inr" aria-hidden="true"></i> ${item.price}</h2>
							</div>
							<p> Per Person on twin sharing</p>
						</div>
						</div>
					</div>`;

						if (index <= (maxLenght - 1)) {

							$('.pakage-bannerblock').append(newpackagebannerimage);
							$('.packages').append(newpackage);
							$('.hotel-overview').append(newpackageoverview);
							$('.hotel-included').append(newpackageinclude);
							$('.hotel-excluded').append(newpackageexclude);
						}
						package.getPackageImages(item.package_name);

					});

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
