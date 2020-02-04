//API call to fetch terms
var mail = {
  //-------------------------------------- Code to load table on page-load ----------------------------------------------------------------------------------------------------


  addNewMail: function () {
    $('.createmail').on('submit', function (e) {
      e.preventDefault();
      fns.ajaxPostFile(
          'holidaymate/api/mail/new',
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

mail.addNewMail();