//jQuery at last => imply the jQuery object, symbol $ is used to signal the sign, can be replaced by any name
(function($){
	// Extends the jQuery object to validate date strings
	$.validDate = function(date, options)
	{
		// Sets up default values for the method
		var defaults = {
			"pattern" : /^\d{4}-\d{2}-\d{2}\s\d{2}:\d{2}:\d{2}$/
		},

		// Extends the defaults with user-supplied options
		// If options available, it will replace defaults. $.extend() ~ merge
			opts = jQuery.extend(defaults, options);
		
		// Returns true if a match is found, false otherwise
		return date.match(opts.pattern)!=null;
	
	};
})(jQuery);