//API call to fetch Slider
var home = {

  getSlider: function () {
    var maxLenght = 100;
    fns.ajaxGet('holidaymate/api/slider/id/')
      .done(function (response) {
        if (response.status === 401) {
          alert(response.message)
        } else if (response.status === 200) {
          $.map(response.data, function (item, index) {
            //Populate slider list
            var slider = `<div class="carousel-item banner-inner">
					<img class="img-fluid" src="${item.url }" alt="Los Angeles">
        </div>`;

            $("#demo .banner-inner").first().addClass("active");

            if (index <= (maxLenght - 1)) {
              $('.banner-carousel-inner').append(slider);
            }
          })
        }
      })
      .fail(function (response) {
        alert("API failed, check Token");
      })
  },

  generatenavigation: function () {
    fns.ajaxGet('holidaymate/api/navigation')
      .done(function (res) {
        if (res.status === 200) {
          $('.navigation .sub-menu').find('.sub-menu-item-list').html("");
          $('.navigation .sub-menu').find('.sub-item-desc-holder').html("");
          $.map(res.data, function (item) {
            //Dumping Regions
            var nav_item = `<div class="sub-menu-item">
            <span data-region="${ item.region.toLowerCase() }">
              ${item.region }
            </span>
          </div>`;
            $('.navigation .sub-menu').find('.sub-menu-item-list').append(nav_item);

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
              return '<li><a href="">' + country + '</a></li>';
            }).join('') }
              </ul>
            </div>
          </div>`;
            $('.navigation .sub-menu').find('.sub-item-desc-holder').append(nav_desc);
          });
        }
      })
      .always(function () {
        home.navigationItemHover()
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
      })
  },

  navigationItemHover: function () {
    $('.sub-menu-item').on('mouseover', function (e) {
      var target = $(e.target).attr("data-region");
      $('.sub-menu-item-list').find('.sub-menu-item').removeClass('active');
      $(this).addClass('active');
      $('.sub-item-desc-holder').find('.sub-item-desc').css("display", "none");
      $('.sub-item-desc-holder').find('[data-region="' + target + '"]').css("display", "flex");
    })
  }

};
home.getSlider();
home.generatenavigation();
home.navigationHover();
