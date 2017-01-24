<?php

	// Bu satırları silmeyiniz
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');
	
	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('Bu sayfa şifre korumalıdır. Yorumları görmek için şifre girmeniz gerekmektedir.'); ?>.</p>
	<?php return; } ?>
	
	<?php if ( have_comments() ) : ?>
	
        <div class="total-comments"><?php comments_number(__('Yorum yapılmamış'), __('1 yorum'),  __('% yorum') );?> / geribildirim</div>
        
        <!-- Eğer ping varsa bu kısımda yayınlanır. -->
        <div id="pings">
            <ol class="pings">
            <?php wp_list_comments('type=pings&callback=mytheme_comment'); ?>
            </ol>
        </div>
        
        <!-- Eğer yorum varsa bu kısımda yayınlanır. -->
        <div id="comments">
            <ol class="commentlist">
                <!-- Yorumların üst kısmında sayfalama -->
                <div class="navigation">
                    <div class="alignleft"><?php previous_comments_link() ?></div>
                    <div class="alignright"><?php next_comments_link() ?></div>
                    <div class="clearfix"></div>
                </div>
                
                <!-- Yorumları listele -->
                <?php wp_list_comments('type=comment&callback=mytheme_comment&avatar_size=30'); ?>
                
                <!-- Yorumların alt kısmında sayfalama -->
                <div class="navigation bottomnav">
                    <div class="alignleft"><?php previous_comments_link() ?></div>
                    <div class="alignright"><?php next_comments_link() ?></div>
                    <div class="clearfix"></div>
                </div>
            </ol>
        </div>
    
	<?php else : // yorum olmadığı zaman buradaki veriler görünür. ?>
        <?php if ('open' == $post->comment_status) : ?>
            <!-- Yorumlar açık ve yorum yoksa buradaki veriler görünür. -->
        <?php else : // yorumlar kapalıysa buradaki veriler görünür ?>
            <!-- Yorumlar kapalıysa buradaki veriler görünür. -->
        <?php endif; ?>
    <?php endif; ?>
    
    
    
	<?php if ('open' == $post->comment_status) : ?>
        <hr>
        <div id="commentsAdd">
                <?php global $aria_req; $comments_args = array(
                    'title_reply'=>'<h4"><span>'.__('Yorum yap').'</span></h4></h4>',
                    'comment_notes_before' => '',
                    'comment_notes_after' => '',
					'class_submit' => 'btn btn-primary',
                    'label_submit' => 'Gönder',
                    'comment_field' => '<label for="comment">'.__('Yorum:').'<span class="required">*</span></label><p class="comment-form-comment"><textarea  id="comment" name="comment" cols="45" rows="5" aria-required="true" class="form-control"></textarea></p>',
                    'fields' => apply_filters( 'comment_form_default_fields',
                        array(
                        'author' => '' 
                            . '<label for="author">' . __( 'İsim' ) . ':<span class="required">*</span></label>' 
                            . ( $req ? '' : '' ) . '<p class="comment-form-author"><input class="form-control" id="author" name="author"  type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
    
                        'email' => '<label for="email">' . __( 'E-posta' ) . ':<span class="required">*</span></label>' 
                            . ( $req ? '' : '' ) . '<p class="comment-form-email"><input class="form-control" id="email" name="email" type="text"  value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
    
                        'url' => '<label for="url">' . __( 'Website' ) . ':</label>' . 
                '<p class="comment-form-url"><input class="form-control" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>' 
                ))
                ); 
                comment_form($comments_args); ?>
        </div>
	<?php endif;?>