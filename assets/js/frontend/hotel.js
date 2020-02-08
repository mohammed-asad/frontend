//API call to fetch hotel
var hotel = {
  //******************************** CoCode to load table on page-load ***************************************//
  getHotel: function () {
    var maxLenght = 100;
    var i = 0;
    var id = fns.getURLSlugs();
    fns.ajaxGet('holidaymate/api/hotel/id/' + id, 'user')
      .done(function (response) {
        if (response.status === 401) {
          alert(response.message)
        } else if (response.status === 200) {
          $.map(response.data, function (item, index) {
            i += 1;
            var stat;
            if (item.status == 0) {
              stat = "Disabled";
            } else if (item.status == 1) {
              stat = "Enabled";
            } else {
              stat = "Undefined"
            }
            var base_url = $('#base').val();
            var rate = item.rating;
            var staricon = " ";
            for (var k = 1; k <= rate; k++) {
              staricon += `<img src =${base_url}assets/images/icons/star.svg alt = "star-icon" class ="ima-fluid mb-3 mt-2" >`;
            }

            var hotel_new = `<div id="hotel_id"></div>`;
            var hotel_name = `<h4 class="mt-3">${item.name }</h4>`;
            var hotel_content = `<p>${item.long_desc }</p>`;

            if (index <= (maxLenght - 1)) {
              $('.package-rating').append(rate);
              $('.hotel-description').append(hotel_new);
              $('.hotel-description').append(hotel_name);
              $('.hotel-description').append(staricon);
              $('.hotel-description').append(hotel_content);
            }

            //Get images for package
            var hotelName = item.name.replace(/ /g, "_");
            hotel.getHotelImages(hotelName, index);
          })
        }
      })
      .fail(function (response) {
        alert("API failed, check Token");
      })
  },

  getHotelByName: function (name) {
    var maxLenght = 100;
    var i = 0;
    fns.ajaxGet('holidaymate/api/hotel/name/' + name, 'user')
      .done(function (response) {
        if (response.status === 401) {
          alert(response.message)
        } else if (response.status === 200) {
          $.map(response.data, function (item, index) {
            i += 1;
            var stat;
            if (item.status == 0) {
              stat = "Disabled";
            } else if (item.status == 1) {
              stat = "Enabled";
            } else {
              stat = "Undefined"
            }
            var base_url = $('#base').val();
            var rate = item.rating;
            var staricon = " ";
            for (var k = 1; k <= rate; k++) {
              staricon += `<img src =${base_url}assets/images/icons/star.svg alt = "star-icon" class ="ima-fluid mb-3 mt-2" >`;
            }

            var hotel_new = `<div id="hotel_id"></div>`;
            var hotel_name = `<h4 class="mt-3">${item.name }</h4>`;
            var hotel_content = `<p>${item.long_desc }</p>`;

            if (index <= (maxLenght - 1)) {
              $('.package-rating').append(rate);
              $('.hotel-description').append(hotel_new);
              $('.hotel-description').append(hotel_name);
              $('.hotel-description').append(staricon);
              $('.hotel-description').append(hotel_content);

            }
            // var hotelName = item.name.replace(/ /g, "_");
            var hotelName = item.id;
            hotel.getHotelImages(hotelName, index);
            var hotelpolicytittle = item.id.replace(/ /g, "_");
            hotel.getPolicy(hotelpolicytittle, index);
            var hotelterms_n_condition = item.id.replace(/ /g, "_");
            hotel.getTerms(hotelterms_n_condition, index);
          })
        }
      })
      .fail(function (response) {
        alert("API failed, check Token");
      })
  },

  //******************************** Code to load Hotel Images ***************************************//

  getHotelImages: function (hotel) {
    //	console.log(hotel);
    var img = "";
    fns.ajaxGet('holidaymate/api/hotelimages/id/' + hotel, 'user').
    done(function (r) {
        if (r.status === 401) {
          alert(e.message)
        } else if (r.status === 200) {
          $.map(r.data, function (item1, index1) {
            img += `<div class="boredercls hotel-img"><img src="${item1.url}" class="img-fluid"></div>`;
          });
          $(`#hotel_id`).append(img);
        }
      })
      .fail(function (r) {
        alert(r.message);
      });
  },
  //-------------------------------------- Code to cancellation policy----------------------------------------------------------------------------------------------------

  getPolicy: function (hotel) {
    console.log(hotel);
    var maxLenght = 100;
    i = 0;
    fns.ajaxGet('holidaymate/api/policy/id/' + hotel, 'user').
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
  getTerms: function (hotel) {
    var maxLenght = 100;
    i = 0;
    fns.ajaxGet('holidaymate/api/terms/id/' + hotel, 'user').
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
  }
};