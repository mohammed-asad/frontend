//API to send mail
var mail = {
  //-------------------------------------- Code to add / send mail -----------------------------------------------------------


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
          alert(response.mail)
        })
        .always(function (res) {
          console.log(res.message);
          window.location.reload();
        })
    })
  }
};

mail.addNewMail();