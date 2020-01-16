//API call to fetch Slider
var slider = {

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
					<img class="img-fluid" src="${item.url}" alt="Los Angeles">
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
  addNewSlider: function () {
    $('.slidercreate').click('on', function () {
      var url = $('.url').val(),
        type = $('.type').val();
      fns.ajaxPost(
        'holidaymate/api/slider/new',
        'POST',
        {
          "url": url,
          "type": type
        }
      )
        .done(function (response) {
          console.log(response);
        })
        .always(function (res) {
          console.log(res.response);
        })
    })
  }

};
slider.getSlider();
slider.addNewSlider();
