# Revize Calendar Template
Mini calendars are set up a very specific way and include event properties that get passed. Below I will explain how to access such methods and what needs to be kept vs changed.

To access variables we are going to be using doT.js
Variables are accessed through a tagging system: `{{=event.property}}`

---

## Examples
Example snippets are going to be listed below. There are certain practices that will need to be learned. An example would be wrapping loops with a length conditional which will be covered below.

**Accessable Data:**
This data is accessable through the event property. For example, using `{{=event.title}}` will output the following:
>Economic and Tests

Here is an example of the data being sent:

```
{
    "title": "Economic and Tests",
    "desc": "Lorem ipsum dolor sit amet, consectetur adipiscing elit...",
    "image": "<img src=\"/revize/ricecountyks/test/news-1.jpg\" alt=\"Revize update image\"/>",
    "color": "#0883e3",
    "loaded": "mini-list-loaded",
    "i": 5,
    "calendar_name": "Economic Development",
    "start": {
        "date": "2019-12-28T20:00:00.000Z",
        "month": {
            "num": "12",
            "numPadded": "12",
            "ord": "12th",
            "short": "Dec",
            "long": "December"
        },
        "day": {
            "num": "28",
            "ord": "28th",
            "numPadded": "28"
        },
        "year": {
            "short": "19",
            "long": "2019"
        }
    },
    "end": {
        "date": "2019-12-28T21:30:00.000Z",
        "month": {
            "num": "12",
            "numPadded": "12",
            "ord": "12th",
            "short": "Dec","long": "December"
        },
        "day": {
            "num": "28",
            "ord": "28th",
            "numPadded": "28"
        },
        "year": {
            "short": "19",
            "long": "2019"
        }
    }
}
```

**Conditionals:** 

To start and end an if statement you need a `{{?}}` tag. Using 2 question marks generates an else statement, you can also attatch conditionals to the else to create an 'if else'.
```
{{?it.length}}
    ...
{{?}}
```
This is the same as, it being the data passed, which is the events array.
```
if(eventsArray.length){
    ...
}
```
You can also add custom conditions for your own purposes like this:

```
{{?events.name.indexOf('meeting') >= 0}}
    <strong>{{=event.name}}</strong>
{{??}}
    <span>{{=event.name}}</span>
{{?}}
```

The above outputs to this:
```
if(events.name.indexOf('meeting') >= 0){
    //output a bold event name
} else {
    // output a normal font-weight event name
}
```

---

**Loops**

To start a loop you need an opening and closing `{{~}}` tag. Loops should be wrapped with a length conditional as stated above like so:
```
{{?it.length}}
{{~it :event:index}}
    <h1>{{=event.name}}</h1>
{{~}}
{{?}}
```

`it` tags are the default data set that is being sent over. After aliasing the array with `event` we can access event properties through the `event` object.

The above checks to see if data exists inside the array, if it does it starts the loop. An example in javascript would be as shown below:
```
var htmlString = "";
var it = [
    {
        name: 'Weekly Meeting'
    },{ 
        name: 'Monthly Event'
    }
];

if(it.length){
    // loop
    it.forEach(function(event){
        htmlString += '<h1>'+event.name+'</h1>
    });

    // Output
    $('body').append(htmlString);
}
```

---