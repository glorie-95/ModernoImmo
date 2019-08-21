<?php
add_filter( 'comment_form_default_fields', 'construc_comment_form' );
function construc_comment_form( $construc_fields ) {
	$construc_fields['author'] = '<div class="col-md-6">
                  <div class="single-comment">
                    <input type="text" name="author" id="name-cmt" placeholder="'.esc_attr__('Name', 'construc').'">
                  </div>
                </div>';
	$construc_fields['email'] = ' <div class="col-md-6">
                  <div class="single-comment">
                    <input type="email" name="email" id="email-cmt" placeholder="'.esc_attr__('Email', 'construc').'">
                  </div>
                </div>';
	$construc_fields['url'] = ' ';
	$construc_fields['cookies'] = ' ';
	return $construc_fields;
}
add_filter( 'comment_form_defaults', 'construc_comment_default_forms' );
function construc_comment_default_forms( $default_form ) {
	$default_form['comment_field'] = '<div class="row"><div class="col-sm-12">
                  <div class="single-comment comment-message">
                    <textarea name="comment" rows="7" placeholder="'.esc_attr__('Comments', 'construc').'"></textarea>
                  </div>
                </div>';
	$default_form['submit_button'] = '</div><div class="submit-button"> <button type="submit" class="button btn btn-default btn-sm">' . esc_attr__( 'Post Comment', 'construc' ) . '</button></div></div>';
	$default_form['comment_notes_before'] = '';
	$default_form['title_reply'] = esc_html__( 'leave a Comment', 'construc' );
	$default_form['title_reply_before'] = '<div class="comment-form-area"><h2 class="leave-comment">';
	$default_form['title_reply_after'] = '</h2>';
	return $default_form;
}
