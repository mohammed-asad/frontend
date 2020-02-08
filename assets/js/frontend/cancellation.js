//API call to fetch terms
var policy = {
  //-------------------------------------- Code to load table on page-load ----------------------------------------------------------------------------------------------------

  getPolicy: function () {
    var maxLenght = 100;
    i = 0;
    fns.ajaxGet('holidaymate/api/policy/id/', 'user').
    success(function (response) {
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
  }

};
policy.getPolicy();