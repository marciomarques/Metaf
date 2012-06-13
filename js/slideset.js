/*global jQuery*/
(function ($) {
	$.fn.slideSet = function (options) {
		var self, defaults;

		a = self = this;

		defaults = {
			selectors: {
				item: '.item'
			},
			itemsPerSet: 3,
			speed: 500,
			easing: null
		};

		self.init = function () {
			self.settings = defaults;
			$.extend(self.settings, options);

			// Add extra markup
			self.items = self.find(self.settings.selectors.item);
			self.slides = self.divideItems();
			self.wrapSlides();

			// Position elements
			self.setWrapperSize();
			self.spreadItems();

			self.currentSlide = 0;

			self.bindEvents();
		};

		/**
		 * Divide items in slides
		 * Returns a jquery object with slides
		 */
		self.divideItems = function () {
			var slides = self.items.toArray().splitBy(self.settings.itemsPerSet);

			$(slides).each(function () {
				var target = $('<div class="slide">');
				target.appendTo(self);
				$(this).appendTo(target);
			});

			return self.find(".slide");
		};

		/**
		 * Wrap slides into a mask and a wrapper
		 */
		self.wrapSlides = function () {
			self.mask = $('<div class="mask"></div>');
			self.wrapper = $('<div class="wrapper"></div>');
			self.wrapper.appendTo(self.mask);
			self.slides.appendTo(self.wrapper);
			self.mask.appendTo(self);
		};

		self.setWrapperSize = function () {
			self.slideWidth = 848;//self.slides.innerWidth();
			self.slideHeight = 400; //self.items.innerHeight();
			// floating changes the slides width
			self.slides.css({
				float: "left",
				width: self.slideWidth
			});
			self.wrapper.css({
				position: "relative",
				width: self.slideWidth * self.slides.length
			});
			self.mask.css({
  			position: "relative", // bugfix IE
				overflow: "hidden",
				width: self.slideWidth,
				height: self.slideHeight,
				marginLeft: "31px"
			});
		};

		self.spreadItems = function () {
			var emptySpace, marginLeft;
			emptySpace = self.slideWidth - (self.items.outerWidth() * self.settings.itemsPerSet);
			marginLeft = emptySpace / (self.settings.itemsPerSet + 1);
			self.items.css("margin-left", 0 /* marginLeft */);
		};

		self.goToSlide = function (index) {
			if (!self.slides[index]) {
				return false;
			}
			var x = self.slideWidth * index;
			self.wrapper.animate({
				left: -x
			}, self.settings.speed, self.settings.easing);
			self.currentSlide = index;
			return true;
		};

		self.nextSlide = function () {
			return self.goToSlide(self.currentSlide + 1);
		};

		self.prevSlide = function () {
			return self.goToSlide(self.currentSlide - 1);
		};

		self.bindEvents = function () {
			self.prevButton = self.find(".prev");
			self.nextButton = self.find(".next");

			self.prevButton.click(function (event) {
				event.preventDefault();
				self.prevSlide();
			});

			self.nextButton.click(function (event) {
				event.preventDefault();
				self.nextSlide();
			});
		};

		self.init();
	};
}(jQuery));


/**
 * Extends Array class
 * Split an array in many arrays with sliceSize length
 */
Array.prototype.splitBy = function (sliceSize) {
	var i = 0,
		result = [];
	while (i < this.length) {
		result.push( this.slice(i, i + sliceSize) );
		i += sliceSize;
	}
	return result;
};
