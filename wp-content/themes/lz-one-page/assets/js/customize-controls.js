( function( api ) {

	// Extends our custom "lz-one-page" section.
	api.sectionConstructor['lz-one-page'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );