var slider = {
  getSlider: function () {
    var maxLenght = 100;
    fns.ajaxGet('holidaymate/api/slider/id/', 'user')
      .done(function (response) {
        if (response.status === 401) {
          alert(response.message)
        } else if (response.status === 200) {
          $.map(response.data, function (item, index) {
            //Populate slider list
            var slider = `<img class="img-fluid" src="${ item.url }" alt="Los Angeles">`;
            if (index <= (maxLenght - 1)) {
              $('.header-banner').append(slider);

            }
          })
        }
      })
      .always(function () {
        $('.header-banner').slick({
          autoplay: true,
          arrows: true,
          autoplaySpeed: 2000,
          dots: true,
          adaptiveHeight: true
        });
      })
      .fail(function (response) {
        alert("API failed, check Token");
      })
  }
};
slider.getSlider();