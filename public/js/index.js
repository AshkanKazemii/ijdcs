if ( typeof WebFontConfig === "undefined" ) {
    WebFontConfig = new Object();
}
WebFontConfig['google'] = {families: ['Lato:400']};

(function() {
    var wf = document.createElement( 'script' );
    wf.src = '../ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName( 'script' )[0];
    s.parentNode.insertBefore( wf, s );
})();


jQuery(document).ready( function() {

	/* Use backticks instead of <code> for the Code button in the editor */
	if ( typeof( edButtons ) !== 'undefined' ) {
		edButtons[110] = new QTags.TagButton( 'code', 'code', '`', '`', 'c' );
		QTags._buttonsInit();
	}

	/* Tab from topic title */
	jQuery( '#bbp_topic_title' ).bind( 'keydown.editor-focus', function(e) {
		if ( e.which !== 9 )
			return;

		if ( !e.ctrlKey && !e.altKey && !e.shiftKey ) {
			if ( typeof( tinymce ) !== 'undefined' ) {
				if ( ! tinymce.activeEditor.isHidden() ) {
					var editor = tinymce.activeEditor.editorContainer;
					jQuery( '#' + editor + ' td.mceToolbar > a' ).focus();
				} else {
					jQuery( 'textarea.bbp-the-content' ).focus();
				}
			} else {
				jQuery( 'textarea.bbp-the-content' ).focus();
			}

			e.preventDefault();
		}
	});

	/* Shift + tab from topic tags */
	jQuery( '#bbp_topic_tags' ).bind( 'keydown.editor-focus', function(e) {
		if ( e.which !== 9 )
			return;

		if ( e.shiftKey && !e.ctrlKey && !e.altKey ) {
			if ( typeof( tinymce ) !== 'undefined' ) {
				if ( ! tinymce.activeEditor.isHidden() ) {
					var editor = tinymce.activeEditor.editorContainer;
					jQuery( '#' + editor + ' td.mceToolbar > a' ).focus();
				} else {
					jQuery( 'textarea.bbp-the-content' ).focus();
				}
			} else {
				jQuery( 'textarea.bbp-the-content' ).focus();
			}

			e.preventDefault();
		}
	});
});