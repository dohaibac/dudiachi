( function( api ) {

	// Extends our custom "example-1" section.
	api.sectionConstructor['ddchi_premium'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );
    
    var api_interlink = wp.customize;
    api_interlink.bind('ready', function() {
        $(['control', 'section', 'panel']).each(function(i, type) {
            $('a[rel="tc-'+type+'"]').click(function(e) {
                e.preventDefault();
                var id = $(this).attr('href').replace('#', '');
                if(api_interlink[type].has(id)) {
                    api_interlink[type].instance(id).focus();
                }
            });
        });
    });

} )( wp.customize );
