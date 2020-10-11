# jQuery plugin for collecting elements
Plugin for animating elements with the random effect.

## Demo

* [default:](https://kotlyarov.us/jquery-mosaic-elements/?default=1) - options by default;
* [constant height](https://kotlyarov.us/jquery-mosaic-elements/?ch=1) - options with constant height and without masonry effect: 
* [crazy options](https://kotlyarov.us/jquery-mosaic-elements/?cp=1) - various settings.

## Options

```javascript
'container': '#mosaic', // attribute for the main container for the elements
'elements': '.mosaic-item', // attribute for the elements
'rotate_min': -180, // minimum of rotation from in degree
'rotate_max': 180, // maximum of rotation to in degree
'duration_min': 60, // minimum of duration from in px
'duration_max': 600, // maximum of duration to in px
'masonry': true, // masonry effect
'masonry_shift': 0 // correction for calculating the transition to the next column in the container
```

## Init

```html
<link rel="stylesheet" href="src/style.css"/>

<div id="mosaic">
    <div class="mosaic-item"></div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="src/jquery.mosaic-elements.js"></script>
<script>
$('body').mosaicElements({
    // options    
});
</script>
```
