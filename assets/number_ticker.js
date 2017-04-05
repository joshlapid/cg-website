var tickerStop = 0;
var tickerStop2 = 0;
$(window).scroll(function() {

  var offsetTop = $('.ticker-number').offset().top - window.innerHeight;
  if (tickerStop == 0 && $(window).scrollTop() > offsetTop) {
    $('.ticker-number').each(function() {
      var $this = $(this),
      // var tickerStop = 1;
        countTo = $this.attr('data-counter');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {
          duration: 6000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
            tickerStop = 1;

          },
          complete: function() {
            $this.text(this.countNum);
          }

        });
    });
  }

  if(tickerStop == 1 && $(window).scrollTop() < offsetTop) {
    $('.ticker-number').each(function() {
      var $this = $(this);
      $this.text(0);
    });
    tickerStop = 0;
  }
});
