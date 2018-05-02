# inView.js
## By Alec Armstrong


### JQuery module to keep navigation menus on screen.
**Works for the following navigation menus:**
* Dropdown menus on top navs
* Flyout menus that extend from dropdowns from top navs
* Flyout menus that extend from side navigations
* inView arguments include: `'top','flyout', or 'side'`

---

## Directions


1. Download the inView.js code.
2. Include the inView.js script in your html file via `<script src="[path]/inView.js"></script>`
3. Call on the function in your scripts.js file on the hovering elements child ul and pass a type.

**Example code:**
```javascript
$('li.level0:has(ul)').hover(function(){
	$(this).find('ul').inView('top');// Can pass top, flyout, side
});
```
