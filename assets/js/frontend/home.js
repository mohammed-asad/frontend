//API call to fetch Slider
var home = {

  getSlider: function () {
    var maxLenght = 100;
    fns.ajaxGet('holidaymate/api/slider/id/').
      success(function (response) {
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

  navigationHover: function () {
    $('.navigation').find('.nav-item').hover(function (e) {
      var target = e.target;
      var blur = $(target).attr("data-bluritem");
      if (blur) {
        $(".other-container").addClass("blur");
      }
    },
      function () {
        // var target = e.target;
        // var blur = $(target).attr("data-bluritem");
        // console.log(blur);
        // if (blur === true) {
        $(".other-container").removeClass("blur");
        // }
      })
    // $('.navigation').find('.nav-item').mouseout('on', function () {
    //   // var target = e.target;
    //   // var blur = $(target).attr("data-bluritem");
    //   // console.log(blur);
    //   // if (blur === true) {
    //   $(".other-container").removeClass("blur");
    //   // }
    // })
  }

};
home.getSlider();
home.navigationHover();
