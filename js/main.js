document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, {});

    var carouselelems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(carouselelems, {});

  });