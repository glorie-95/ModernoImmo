( function( api ) {

	// Extends our custom "construction-map" section.
	api.sectionConstructor['construction-map'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
