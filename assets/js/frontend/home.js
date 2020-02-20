//API call to fetch Slider
var home = {
	menuActive: false,
	isMobile: window.innerWidth <= 1024,
	generatenavigation: function () {
		fns.ajaxGet('holidaymate/api/navigation', 'user')
			.done(function (res) {
				if (res.status === 200) {
					$('.navigation .sub-menu.destinations').find('.sub-menu-item-list').html("");
					$('.navigation .sub-menu.destinations').find('.sub-item-desc-holder').html("");
					$.map(res.data, function (item, index) {
						//Dumping Countries
						var base_url = $('#base').val();
						var nav_desc = `<div class="sub-item-desc" data-panel="menu" data-region="${ item.region.toLowerCase() }">
            <div class="sub-item-item overview">
              <h4 >Overview</h4>
              <p>
							${item.overview }
							</p>
							 
							<a href="${base_url}region/${item.region.replace(/ /g, "_")}" class="regionnames">View all packages of ${item.region.toLowerCase()} </a>
            </div>
            <div class="sub-item-item countries">
              <h4 >Destinations</h4>
              <ul>
              ${item.countries.map(function (country) {
								var base_url = $('#base').val();
							var url = `${base_url}country_name/${country.replace(/ /g, "_")}`;
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
						var regiontitle = `<h1>${item.region}</h1>`;
						var reover = ` <p>	${item.overview }</p>`;
						var nav_item = `<div class="sub-menu-item ${ (index === 0 ? 'active' : '') }">
            <span data-region="${ item.region.toLowerCase() }" data-panel="menu">
							${item.region }
							 
            </span>
            ${ nav_desc }
          </div>`;
						$('.navigation .sub-menu.destinations').find('.sub-menu-item-list').append(nav_item);
						// $('.navigation .sub-menu').find('.sub-item-desc-holder').append(nav_desc);
						// $('.region-content1').append(reover);
						// $('.regionname').append(regiontitle);

					});
				}
			})
			.always(function () {
				home.navigationItemHover()
				$('.nav-slider').slick({
					autoplay: true,
					dots: true,
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
				home.menuActive = true;
			},
			function () {
				$(".other-container").removeClass("blur");
				home.menuActive = false;
			});

		$('.navigation').find('.nav-item').on('click', function (e) {
			var target = e.target;
			var blur = $(target).attr("data-bluritem");
			if (blur) {
				$(".other-container").addClass("blur");
				$('.sub-menu').css("display", "block");
			}
		});

		$(window).scroll(function (e) {
			if ($(window).scrollTop() > 50) {
				$('.navigation').addClass("fixed");
			} else {
				$('.navigation').removeClass("fixed");
			}
		})
	},

	navigationItemHover: function () {
		$('.sub-menu-item').on('mouseover, click', function (e) {
			var target = $(e.target).attr("data-region");
			var panel = $(e.target).attr("data-panel");
			$('.sub-menu-item-list[data-panel="' + panel + '"]').find('.sub-menu-item').removeClass('active');
			$(this).addClass('active');
		})
	},

	// Tab menu
	showTabMenu: function () {
		$('.hamburger-menu').click('on', function () {
			$('.nav-items-holder').toggleClass("active");
			$(this).hide();
			$('body').css("overflow", "hidden")
			home.menuActive = true;
		})
	},
	closeTabMenu: function () {
		$('.close-hamburger-menu').click('on', function () {
			$('.nav-items-holder').removeClass("active");
			$('.hamburger-menu').show();
			$('body').css("overflow", "visible");
			home.menuActive = false;
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
						var newcountry = `<div id="countryid${ item.country_name.replace(/ /g, "_") }"></div>`;
						var region_content = `<h1 class="text-center wow fadeInDown" data-wow-delay="0.1s" data-wow-duration="1500ms">${ item.country_name }</h1>
            <p class="text-center wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1500ms">${item.description }</p>`;
						if (index <= (maxLenght - 1)) {

							$('.region-banner').append(newcountry);
							$('.region-content').append(region_content);
						}
						home.getCountryImages(item.country_name.replace(/ /g, "_"));

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
	},

	getAverage: function (elements, number) {
		var sum = 0;
		var lastElements = elements.slice(Math.max(elements.length - number, 1));
		for (var i = 0; i < lastElements.length; i++) {
			sum = sum + lastElements[i];
		}
		return Math.ceil(sum / number);
	},

	scrollings: [],
	windowHeight: $(window).height(),
	scrollDetector: function (e) {

		var value = e.wheelDelta || -e.deltaY || -e.detail;
		var delta = Math.max(-1, Math.min(1, value));
		if (home.scrollings.length > 149) {
			home.scrollings.shift();
		}
		home.scrollings.push(Math.abs(value));

		var averageEnd = home.getAverage(home.scrollings, 10);
		var averageMiddle = home.getAverage(home.scrollings, 70);
		var isAccelerating = averageEnd >= averageMiddle;

		if (isAccelerating) {
			if (delta < 0 && home.menuActive !== true) {
				if ($(window).scrollTop() > parseInt(home.windowHeight / 1.8)) {
					$('.navigation').fadeOut(800);
				}
			} else {
				$('.navigation').fadeIn();
			}
		}
		return false;
	},
	scrollDetectorMobile: function (e) {
		var ts;
		$(document).bind('touchstart', function (e) {
			ts = e.originalEvent.touches[0].clientY;
		});

		$(document).bind('touchend', function (e) {
			var te = e.originalEvent.changedTouches[0].clientY;
			if (ts > te + 5 && !home.menuActive) {
				if ($(window).scrollTop() > parseInt(home.windowHeight / 2)) {
					$('.navigation').fadeOut();
				}
			} else if (ts < te - 5) {
				$('.navigation').fadeIn();
			}
		});
	}

};

home.generatenavigation();
home.navigationHover();
home.showTabMenu();
home.closeTabMenu();

document.querySelector('body').addEventListener("mousewheel", home.scrollDetector);
