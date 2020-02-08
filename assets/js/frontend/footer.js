//API to send mail of subscriber
var footer = {
  //-------------------------------------- Code to load table on page-load ----------------------------------------------------------------------------------------------------


  addSubscriber: function () {
    $('.createsubscriber').on('submit', function (e) {
      e.preventDefault();
      fns.ajaxPostFile(
          'holidaymate/api/subscribers/new',
          'POST',
          new FormData(this)
        )
        .done(function (response) {
          console.log(response.message);
          alert(response.message)
        })
        .always(function (res) {
          console.log(res.message);
          window.location.reload();
        })
    })
  }
};