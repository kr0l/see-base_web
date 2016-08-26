var ipDesignOptions = {
  bodyBackgroundColor: function(value) {
    'use strict';
    $('body').css('background-color', value);
  }
  h1Color: function(value) {
    'use strict';
    $('#siteheader').css('color', value);
  }
  navColor: function(value) {
    'use strict';
    $('#nav').css('background-color', value);
  }
  borderColor: function(value) {
    'use strict';
    $('#nav ul li, aside, footer').css('border-color', value);
  }
  textColor: function(value) {
    'use strict';
    $('body').css('color', value);
  }
  footerColor: function(value) {
    'use strict';
    $('footer').css('background-color', value);
  }
  asidePosition: function(value) {
    'use strict';
    $('main').css('order', value);
  }
};
