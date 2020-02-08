//API call to fetch Slider
var home = {
    generatenavigation: function () {
        fns.ajaxGet('holidaymate/api/navigation', 'user')
          .done(function (res) {
              if (res.status === 200) {
                $('.navigation .sub-menu').find('.sub-menu-item-list').html("");
                $('.navigation .sub-menu').find('.sub-item-desc-holder').html("");
                $.map(res.data, function (item, index) {
                      //Dumping Countries
                      var nav_desc = `<div class="sub-item-desc" data-region="${ item.region.toLowerCase() }">
            <div class="sub-item-item overview">
              <h4 >Overview</h4>
              <p>
              ${item.overview }
              </p>
            </div>
            <div class="sub-item-item countries">
              <h4 >Destinations</h4>
              <ul>
              ${item.countries.map(function (country) {
								var base_url = $('#base').val();
							var url = `${base_url}country_name/${country}`;
							return `<li><a href="${url}">${country}</a></li>`;
							//return '<li><a href="">' + country + '</a></li>';
						}).join('') }
              </ul>
						</div>
						<div class="sub-item-item slider">
						<!-- ${item.images.length > 0 ? '<img src="' + item.images[0] + '" class="placeholder-image" />' : '' } -->
							<div class="nav-slider">
							${item.images.map(function (image) {
							return '<img src = "' + image + '"/>'
						}).join('') }
							</div>
						</div>
          </div>`;
						//Dumping Regions
						var nav_item = `<div class="sub-menu-item ${ (index === 0 ? 'active' : '') }">
            <span data-region="${ item.region.toLowerCase() }">
              ${item.region }
            </span>
            ${ nav_desc }
          </div>`;
						$('.navigation .sub-menu').find('.sub-menu-item-list').append(nav_item);
						// $('.navigation .sub-menu').find('.sub-item-desc-holder').append(nav_desc);
					});
				}
			})
			.always(function () {
				home.navigationItemHover()
				$('.nav-slider').slick({
					autoplay: true,
					autoplaySpeed: 2000,
				});
			});
	},

	navigationHover: function () {
		$('.navigation').find('.nav-item').hover(function (e) {
				var target = e.target;
				var blur = $(target).attr("data-bluritem");
				if (blur) {
					$(".other-container").addClass("blur");
				}
			},
			function () {
				$(".other-container").removeClass("blur");
			});

		$('.navigation').find('.nav-item').on('click', function (e) {
			var target = e.target;
			var blur = $(target).attr("data-bluritem");
			if (blur) {
				$(".other-container").addClass("blur");
				$('.sub-menu').css("display", "block");
			}
		})
	},

	navigationItemHover: function () {
		$('.sub-menu-item').on('mouseover, click', function (e) {
			var target = $(e.target).attr("data-region");
			$('.sub-menu-item-list').find('.sub-menu-item').removeClass('active');
			$(this).addClass('active');
			$('.sub-item-desc-holder').find('.sub-item-desc').css("display", "none");
			$('.sub-item-desc-holder').find('[data-region="' + target + '"]').css("display", "flex");
		})
	},

	// Tab menu
	showTabMenu: function () {
		$('.hamburger-menu').click('on', function () {
			$('.nav-items-holder').toggleClass("active");
		})
	},
	closeTabMenu: function () {
		$('.close-hamburger-menu').click('on', function () {
			$('.nav-items-holder').removeClass("active");
		});
		$('.reset-menu').click('on', function () {
			$('.sub-menu').css("display", "none");
		});

	},
	// get country banner image and details
	getCountryByName: function () {
		var maxLenght = 100;
		const countryname = fns.getURLSlugs();
		fns.ajaxGet('holidaymate/api/country/country_name/' + countryname, 'user')
			.done(function (response) {
				if (response.status === 401) {
					alert(response.message)
				} else if (response.status === 200) {
					$.map(response.data, function (item, index) {

						console.log(item);
						var newcountry = `<div id="countryid${ item.country_name }"></div>`;
						var region_content = `<h1 class="text-center">${ item.country_name }</h1>
            <p class="text-center">${item.description }</p>`;
						if (index <= (maxLenght - 1)) {

							$('.region-banner').append(newcountry);
							$('.region-content').append(region_content);
						}
						home.getCountryImages(item.country_name);

					})
				}
			})
	},
	//-------------------------------------- Code to country images ----------------------------------------------------------------------------------------------------
	getCountryImages: function (country) {
		var img = "";
		fns.ajaxGet('holidaymate/api/country/images/' + country, 'user').
		done(function (r) {
				if (r.status === 401) {
					alert(e.message)
				} else if (r.status === 200) {
					$.map(r.data, function (item1, index1) {
						img += `<img src="${ item1.url }">`;
					});
					$(`#countryid${ country }`).append(img);
				}
			})
			.fail(function (r) {
				alert(r.message);
			});
	}

	//---------------------------------------------------------------------------------------------------------------------------------------------------------------------
};

home.generatenavigation();
home.navigationHover();
home.showTabMenu();
home.closeTabMenu();