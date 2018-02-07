# SETUP
V1.0.1
Make sure to define the api key in config.php - http://support.revize.com/projects/smita/wiki/API_List
Example setup and usage can be found in revizeWeather/test/test.html

Raw php can be used as well but the JS method is preferred for its ease of error handling. To do this see the below example:

# Data
Data will differ by the API used. To see all the data options check the console after successfully fetching the data
or view test/test.html console output.

# JS options for Open Weather Map API

```
unit
Default: 'f'
```

```
zip
Default: ''
```

```
city_name
Default: ''
```

```
country_code
Defualt: 'us'
```

```
success
Anonymous function run after successfully fetching the data
Example of fetching temperature in this function: weather.temp
Default: function(weather){}
```

```
error
Anonymous function run after unsuccessfully fetching the data
Should typically hide the widget rather than display an error
Default: function(message){}
```

```
pluginLocation
Defines location of main.php script relative to the page using the js.
Most of the time this will not need to be changed.
Default: '_assets_/plugins/revizeWeather/main.php'
```

# PHP usage and notes - using JS this is not necessary.
```php
// Include the class
include_once __DIR__."\class\OpenWeatherMapWidget.php";

// Call  With Options
$weatherWidget = new OpenWeatherMapWidget({
	'RAW_PHP' => true,
	"appid" => "API_KEY_HERE",
	"zip" => "48326"
});

// Get the data and store in a variable
$response = $weatherWidget->getData();

// use the data. Object is stdClass so fetch data like $response->temp
// error checking would have to be done by hand
```

# Changes

## v1.0.1
- Fix thrown exception in main.php if API_KEY has not been defined in php. This should help developers remember to defnine the constant.
- Move JS instructions to to as they will be most helpful for users of the plugin. The php notes or for plugin devs.