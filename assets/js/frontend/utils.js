var baseURL = 'http://localhost/';

var fns = {

  //Defined functions for AJAX
  //baseURL: 'http://localhost/',
  ajaxPostFile: function (url, method, formData) {
    // console.log({ data })
    return $.ajax({
      url: baseURL + url,
      method: method,
      data: formData,
      contentType: false,
      cache: false,
      processData: false,
      headers: {
        'Authorization': localStorage.getItem("admin_token")
      }
    });
  },
  ajaxPost: function (url, method, data) {
    return $.ajax({
      url: baseURL + url,
      data: JSON.stringify(data),
      type: method,
      contentType: 'application/json',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': localStorage.getItem("token")
      }
    });
  },
  ajaxGet: function (url, type) {
    return $.ajax({
      url: baseURL + url,
      type: 'GET',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': localStorage.getItem("token"),
        'Type': type
      }
    });
  },
  getURLSlugs: function () {
    var url = window.location.href;
    url = url.split("/");
    return url[url.length - 1];
  }
}
