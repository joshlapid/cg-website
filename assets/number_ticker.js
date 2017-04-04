var tickerStop = 0;
$(window).scroll(function() {

  var offsetTop = $('.ticker-number').offset().top - window.innerHeight;
  if (tickerStop == 0 && $(window).scrollTop() > offsetTop) {
    $('.ticker-number').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-counter');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {
          duration: 4000,
          easing: 'linear',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
          }

        });
    });
    tickerStop = 1;
  }

});
