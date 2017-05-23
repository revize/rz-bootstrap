/**
 * Alec Armstrong
 * https://www.github.com/itsalbow
 * 2017
 */

(function ($) {


	/**
 	 * Checks to see if the <ul> within the viewport
 	 * Use menu's parent li to call. eg $('li.level0.children').hover(function(){$(this).find('ul')inView('top')});
 	 * @param  {string} type top, flyout, or side
 	 * @return {void}	changes left or top value of <ul>
 	 */
	 $.fn.inView = function(menuType){

		/* <ul> variables */
 		var el = $(this).first(); 						// first <ul>
		var win = $(window); 							// window element
 		var width = el.outerWidth(); 					// <ul> width including padding
 		var height = el.outerHeight(); 				// <ul> height including padding
 		var pos = this.offset();						// <ul> position object
 		pos.bottom = pos.top + this.outerHeight();// <ul> botton position
 		pos.right = pos.left + this.outerWidth();	// <ul> right position
		var type, 	// top, side or flyout
			 diff;	// how many pixels does the element extend off screen


		/* Viewport object */
 		var view = {
 			top: win.scrollTop(),
 			left: win.scrollLeft()
 		}
 		view.right = view.left + win.width() - width;  // Amount outside on x axis
 		view.bottom = view.top + win.height() - height;// Amount outside on y axis


		/**
		 * Helper Functions
		 * @return true if offscreen, false if on screen
		 */
		var offScreenX = function(){// if offscreen x
			return view.right < pos.left || view.left > pos.right;
		}

		var offScreenY = function(){// if offscreen y
			return view.bottom < pos.top || view.top > pos.bottom;
		}

		var getOld = function(){// @return int old top or left value
			if(type === 'top'){// if top, get current "left" value
				return eval(el.css('left').replace('px',''));
			} else if (type === 'side'){// if side, get current "top" value
				return eval(el.css('top').replace('px',''));
			}
		}

		/*** end helper functions ***/


		/**
		 * Assign options if they were sent
		 * Assign default values if no string type was sent
		 */
 		if(menuType !== null && typeof menuType == 'string'){// if type passed
 			type = menuType;
			if(type !== 'top' && type !== 'side' && type !== 'flyout'){// error
				console.error('inView expected a menuType of "top", "flyout" or "side". You passed "' + type + '".');
			}// end inner if
 		} else {// type was not passed
 			type = 'top';
			console.log('inView expected a menuType. Defaulted to top');
 		}
		/*** end type assignment ***/


 		/**
 		 * Check which type of <ul>
 		 * @param  {String} type === 'top'			Position dropdown menu
 		 * @param  {String} type === 'flyout'		Position flyout menu
 		 * @param  {String} type === 'side'			Position side menu
 		 * @return {void}
 		 */

 		if(type === 'top'){// Top
 			if(offScreenX()){// Is off screen on x axis
 				diff = view.right - pos.left; // Find the difference
 				el.css('left',(getOld('top') + diff) + 'px'); // Change position
 			} else {// is on screen or went to bigger viewport
 				el.attr('style','');// Reset
 			}
 		}// End if top


		if(type === 'flyout'){// Flyout
			if(offScreenX()){// Is off screen on x axis
 				el.css('left','-100%'); // Flip to left side
 				el.find('li').css({
					'display': 'block',
					'clear': 'both'
				});
 			} else {// is on screen or went to bigger viewport
 				el.attr('style',''); // Reset
				el.find('li').attr('style','');// Reset
 			}
		}// End if Flyout


		if(type === 'side'){// Side
			if(offScreenY()){// Is off screen on y axis
				diff = view.bottom - pos.top; // Find the difference
 				el.css('top',(getOld('side') + diff) + 'px'); // Change position
			} else {// Reset
				el.attr('style','');
			}
		}// End if Side
		/*** End type checking and positioning ***/

 	}/******* End inView *******/


}(jQuery));
