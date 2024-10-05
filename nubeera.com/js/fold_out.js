(function() {
	ExpandableBehaviour = function() {
		var
			publ     = this,
			priv     = {},
			window_width     = $(window).width();

		/**
		 * Initiates ExpandableBehaviour
		 * Called last
		 */
		priv.init = function() {
			priv.addEventListeners();
		}

		/**
		 * Add all events here
		 */
		priv.addEventListeners = function() {
			priv.expandOn();
			$(window).resize(priv.resizeHandler);
		}

		/**
		 * Check that window width has actually changed and it's not just iOS triggering a resize event on scroll
		 */
		priv.resizeHandler = function(){
			if ($(window).width() !== window_width) {
				priv.expandOn();
				window_width = $(window).width();
			}
		}

		/**
		 * Toggles .expander open / close
		 * Does not animate with class no-reposition in the HTML
		 *
		 * @param {element} $el to be expanded
		 */
		publ.expandContent = function($el) {
			var $content = $el.find('.expander');

			if($content.length < 1) {
				$content = $el.next('.expander');
			}

			var initHeight = $content.height();

			if($el.hasClass('is-open')) {
				priv.close($el, $content, initHeight);
			} else {

				if($el.hasClass('no-reposition')) {
					priv.open($el, $content, initHeight);
				} else {
					priv.animateElementToPosition($el, initHeight);
				}
			}
		}

		/**
		 * Closing function
		 *
		 * @param {element} $el trigger
		 * @param {element} $content to be closed
		 * @param int initHeight, default height of $content
		 */
		priv.close = function($el, $content, initHeight) {
			$content.height(initHeight);
			$el.removeClass('is-open');
			$content.height(0);

			//Change the CSS animation time if timer is changed ($multiple-cta-animation-speed)
			var timer = setTimeout(function() {
				$content.css('display', 'none');
				$content.height('auto');

				clearTimeout(timer);
			}, 300);
		}

		/**
		 * Opening function
		 *
		 * @param {element} $el trigger
		 * @param {element} $content to be opened
		 * @param int initHeight, default height of $content
		 */
		priv.open = function($el, $content, initHeight) {
			$content.height(0);
			$content.css('display', 'block');
			$el.addClass('is-open');
			$content.height(initHeight);
		}

		/**
		 * Loops through all .expandable elements
		 * Adds click event
		 *
		 * (Add class common-expandable to target both mobile and desktop in the HTML)
		 */
		priv.expandOn = function() {
			var $el = $('.expandable');
			if (!$el.length) return;

			$el.each(function() {
				var $this = $(this);

				if(!$this.hasClass('status-message')) {
					priv.expandReset($this);
				}

				//if(Modernizr.mq('(max-width: 768px)') || $this.hasClass('common-expandable')) {
					priv.setContentCss($this.find('.expander'), '', 'none');

					$this.on("click", function (e) {
						e.preventDefault();
						publ.expandContent($this);
					});
				//}
			});
		}

		/**
		 * Removes click event and is-open class
		 * Resets css attributes
		 *
		 * @param {element} $el to reset
		 */
		priv.expandReset = function($el) {
			$el.off("click");
			$el.removeClass('is-open');

			var $expander = $el.find('.expander');

			if($expander.length <= 0) {
				$expander = $el.next('.expander');
			}

			priv.setContentCss($expander, '', '');
		}

		/**
		 * Set css attributes to element
		 *
		 * @param {element} $content to add css to
		 * @param int cHeight css attribute
		 * @param string cDisplay css attribute
		 */
		priv.setContentCss = function($content, cHeight, cDisplay) {
			$content.css({
				height: cHeight,
				display: cDisplay
			});
		}

		/**
		 * Animates $el to position 50% of viewport
		 *
		 * @param {element} $el to animate
		 * @param int initHeight, default height of .expander
		 */
		priv.animateElementToPosition = function($el, initHeight) {
			if($el.hasClass('status-message')) return;

			var
				elementHeight   = $el.offset().top + $el.height(),
				targetPosition  = $(window).innerHeight() * 0.5,
				distance        = elementHeight - targetPosition,
				$content        = $el.find('.expander');

			if($content.length < 1) {
				$content = $el.next('.expander');
			}

			$('body').animate({ scrollTop: distance }, 200, function () {
				priv.open($el, $content, initHeight);
			});

		}

		priv.init();
	}
})();

ExpandableBehaviour();