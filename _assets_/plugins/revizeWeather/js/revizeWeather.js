(function($) {
  'use strict';
  $.fn.extend({
    revizeWeather: function(options){
      options = $.extend({
        unit: 'f',
        zip: '',
        city_name: '',
        country_code: '',
        success: function(weather){},
        error: function(message){},
        pluginLocation: '_assets_/plugins/revizeWeather/main.php'
      }, options);

      var pluginLocation = options.pluginLocation,
        phpOptions = $.extend(true,{},options); // deep copy object
        delete phpOptions.pluginLocation;
        delete phpOptions.success;
        delete phpOptions.error;

      $.getJSON(
        encodeURI(pluginLocation),
        phpOptions
      ).done(function(data){
        console.log("DONE");
        console.log(data);
        if(data !== null && data !== undefined && data.error === undefined ) {
          options.success(data);
        } else {
          options.error("Error Retrieving data: "+data.error);
        }
      }).fail(function(data, textStatus, error){
        console.log("FAILED - status: "+textStatus+", error: "+ error);
      })
      // return this;
    }
  });
})(jQuery);