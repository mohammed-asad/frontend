//API call to fetch country
var package = {
	//-------------------------------------- Code to load home package  ----------------------------------------------------------------------------------------------------

	getPackageDetails: function () {
		var maxLenght = 100;
		var i = 0;
		// var id = 1;
		const id = fns.getURLSlugs();
		fns.ajaxGet('holidaymate/api/packages/id/' + id, 'user').
		done(function (response) {
				if (response.status === 401) {
					alert(response.message)
				} else if (response.status === 200) {
					$.map(response.data, function (item, index) {
						i += 1;
						//var stat;
						var base_url = $('#base').val();

						var newpackageoverview = ` <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 section">
						<h1>Package Overview</h1>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 section">
						<p class="cst-pst">${item.overview}</p>
					</div>`;
						var newpackagebannerimage = `<div id="countryid${item.package_name.replace(/ /g, "_")}" class="boredercls overview-img"></div>
						<div class="row">
						<div class="col-xl-5 offset-xl-1 col-lg-6 col-md-6 col-sm-6">
						<div class="pack-column">
							<h3>${item.package_name}</h3>
							<p class="m-0"> ${item.short_desc}</p>
							<p><span class="package-rating"></span> <img class="img-fluid star" src="${base_url}assets/images/icons/star.svg"></p>
						</div>
						</div>
						<div class="col-xl-5 col-lg-6 col-md-6 col-sm-6 cst-text-r">
						<div class="pack-column">
							<div class="d-inline-block"><span class="mont-book"> Starting From </span>
								<h2 class="d-inline-block ml-2"> <i class="fa fa-inr" aria-hidden="true"></i> ${item.price}</h2>
							</div>
							<p> ${item.price_desc}</p>
						</div>
						</div>
					</div>`;
						//----------------------------- form input value fetching ----------------------
						var inputpackage = `<input class="form-control package_name" name="package_name" required="" type="text" value="${item.package_name}" readonly>`
						//----------------------------- form input value fetching ----------------------
						var daynnight = `${item.duration_night} Nights & ${item.duration_day} Days`;
						var locationtxt = `${item.destination_name}`;
						var long_description = `${item.long_desc}`;
						if (index <= (maxLenght - 1)) {

							$('.pakage-bannerblock').append(newpackagebannerimage);
							$('#input-packagename').append(inputpackage);
							$('.daynnight').append(daynnight);
							$('.locationtxt').append(locationtxt);
							$('.hotel-overview').append(newpackageoverview);
							$('.long-description').append(long_description);

							//fetch hotel details from here by sending the Hotel name mentined in the Pacakge
							var hotelName = item.hotel_name.replace(/ /g, "_")
							hotel.getHotelByName(hotelName);
						}
						//Get images for package
						var packageName = item.package_name.replace(/ /g, "_");
						package.getPackageImages(packageName);
						// Get inclucded aminities
						var obj = JSON.parse(item.include);

						$.map(obj, function (item1, index1) {

							var aminitiesimagenvalue = `<li class="list-inline-item "><img class="img-fluid" src="${item1.image}">
							<p>${item1.title}</p>
							</li>`;
							var newpackageinclude = `<li><p>${item1.description}</p></li>`;
							$('.aminiteisvalue').append(aminitiesimagenvalue);
							$('.inlude-description').append(newpackageinclude);

						});
						// Get exclucded aminities
						var objexclude = JSON.parse(item.exclude);
						var count = Object.keys(objexclude).length;
						console.log(count);
						if (count === 0) {

							$('.hotel-excluded').addClass('empty');
						} else {
							$.map(objexclude, function (item2, index2) {
								var newpackageexclude = `<li><p>${item2.description}</p></li>`;
								$('.exclude-content').append(newpackageexclude);

							});
						}
						// GET ITINERARY
						var objiti = JSON.parse(item.itinerary);
						$.map(objiti, function (item1, index1) {
							var newday = `<p>${item1.day}</p><ul class="timeline  mb-3 list"></ul>`;
							$('.iti_items').append(newday);
							$.map(item1.activities, function (item2, index2) {
								console.log(item1.activities);
								var newtime = `${item2.time} `;
								var newactivity = `${item2.activity} `;
								var newitenaryimg = `${item2.url} `;
								var itinew =
									`<li>
										<div class="row">
											<div class="col-xl-2 col-lg-2 col-md-4 timeline-left">
												<span>${newtime}</span>
											</div>
											<div class="col-xl-10 col-lg-10 col-md-8 timeline-right">
												<div class="row">
													<div class="col-xl-1 col-lg-2 col-md-2 pr-0 text-center-md"><img src="${newitenaryimg}" class="img-fluid">
													</div>
													<div class="col-md-11 col-lg-10 col-md-10 custom-padding">
														<p class="custom-padding">${newactivity}</p>
													</div>
												</div>
											</div>
										</div>
									</li>`;
								$('.list').append(itinew);
							});
						});

						var packpolicytittle = item.c_policy_title.replace(/ /g, "_");
						package.getPolicy(packpolicytittle, index);
						var packpterms_n_condition = item.tnc_title.replace(/ /g, "_");
						package.getTerms(packpterms_n_condition, index);

					});

				}
			})
			.fail(function (response) {
				alert("API failed, check Token");
			})
	},

	getPolicy: function (policytitle) {
		console.log(hotel);
		var maxLenght = 100;
		i = 0;
		fns.ajaxGet('holidaymate/api/policy/policytitle/' + policytitle, 'user').
		done(function (response) {
				if (response.status === 401) {
					alert(response.message)
				} else if (response.status === 200) {
					$.map(response.data, function (item, index) {
						i += 1;
						//Populate Terms list
						var newcancellation = `<p>${item.description}</p>`;
						if (index <= (maxLenght - 1)) {
							$('.cancellation-tab').append(newcancellation);
						}
					})
				}
			})
			.fail(function (response) {
				alert("API failed, check Token");
			})
	},
	//-------------------------------------- Code to Terms and Conditions----------------------------------------------------------------------------------------------------
	getTerms: function (termstitle) {
		var maxLenght = 100;
		i = 0;
		fns.ajaxGet('holidaymate/api/terms/termbytitle/' + termstitle, 'user').
		done(function (response) {
				if (response.status === 401) {
					alert(response.message)
				} else if (response.status === 200) {
					$.map(response.data, function (item, index) {
						i += 1;
						//Populate Terms list
						var terms = `<p>${item.description}</p>`;
						if (index <= (maxLenght - 1)) {
							$('.term-tab').append(terms);
						}
					})
				}
			})
			.fail(function (response) {
				alert("API failed, check Token");
			})
	},

	getPackage: function () {
		fns.ajaxGet('holidaymate/api/packages/id/', 'user').
		done(function (response) {
				if (response.status === 401) {
					alert(response.message)
				} else if (response.status === 200) {
					$.map(response.data, function (item, index) {
						var base_url = $('#base').val();
						var url = `${base_url}packageoverview/${item.id}`;
						var newpackage = `<div class="col-sm-6 col-md-6 col-lg-3 mt-4 fadeInleft">
						<a href="${url}">
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
                <a href="${url}" class="btn btn-lg small-btn-submit float-right">View Details</a>
              </div>
						</div>
						</a>
					</div>`;

						if (item.home_page_status === 'true') {

							$('.packages').append(newpackage);
						}
						//Get images for package
						var packageName = item.package_name.replace(/ /g, "_");
						package.getPackageImages(packageName);

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

	},
	// get package by id in country details page
	getCountrypackage: function () {
		var maxLenght = 100;
		const countrypackage = fns.getURLSlugs();
		fns.ajaxGet('holidaymate/api/packages/pack_country/' + countrypackage, 'user').
		done(function (response) {
				if (response.status === 401) {
					alert(response.message)
				} else if (response.status === 200) {
					$.map(response.data, function (item, index) {
						var base_url = $('#base').val();
						var url = `${base_url}packageoverview/${item.id}`;
						var newpackage = `<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
						<a href="${url}">
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
                <a href="${url}" class="btn btn-lg small-btn-submit float-right">View Details</a>
              </div>
						</div>
						</a>
					</div>`;

						if (index <= (maxLenght - 1)) {

							$('.packages').append(newpackage);
						}
						//Get images for package
						var packageName = item.package_name.replace(/ /g, "_");
						package.getPackageImages(packageName);

					});

				}
			})
			.fail(function (response) {
				alert("API failed, check Token");
			})
	}
};
