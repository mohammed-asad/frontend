var baseURL='http://localhost/';

var fns = {

  //Defined functions for AJAX
  baseURL: 'http://localhost/',
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
  ajaxGet: function (url) {
    return $.ajax({
      url: baseURL + url,
      type: 'GET',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': localStorage.getItem("token")
      }
    });
  },
  getURLSlugs: function(){
    var url = window.location.href;
    url = url.split("/");
    return url[url.length - 1];
  }
}