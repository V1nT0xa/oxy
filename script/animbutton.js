$(document).ready(function() {
  $(".container").click(function() {
    $(".button").toggleClass(function () {
      return $(this).is('.open, .close') ? 'open close' : 'open';
    });
  });
});

$(document).ready(function() {
  $(".container-filter").click(function() {
    $(".button-filter").toggleClass(function () {
      return $(this).is('.open, .close') ? 'open close' : 'open';
    });
  });
});
