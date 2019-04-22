<?php
//https://byronyasgur.wordpress.com/2011/09/09/51/
 
// ##########  Do not delete these lines
if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])){
    die ('Não carregue essa página diretamente. Obrigado!'); }
if ( post_password_required() ) { ?>
    <p class="nocomments"><?php _e('Este post é protegido por senha. Digite a senha para ver os comentários.'); ?></p>
<?php
    return; }
// ##########  End do not delete section
 
// Display Comments Section
if ( have_comments() ) : ?>
    <h3 id="comments"><?php comments_number('Sem comentários', 'Um comentário', '% comentários');?> <?php printf('para “%s”', the_title('', '', false)); ?></h3>
        <div class="navigation">
            <div class="alignleft"><?php previous_comments_link() ?></div>
            <div class="alignright"><?php next_comments_link() ?></div>
        </div>
    <ol class="commentlist">
     <?php
     wp_list_comments(array(
      // see http://codex.wordpress.org/Function_Reference/wp_list_comments
      // 'login_text'        => 'Login to reply',
      // 'callback'          => null,
      // 'end-callback'      => null,
      // 'type'              => 'all',
      // 'avatar_size'       => 32,
      // 'reverse_top_level' => null,
      // 'reverse_children'  =>
      ));
      ?>
    </ol>
        <div class="navigation">
            <div class="alignleft"><?php previous_comments_link() ?></div>
            <div class="alignright"><?php next_comments_link() ?></div>
        </div>
    <?php
    if ( ! comments_open() ) : // There are comments but comments are now closed
        echo"<p class='nocomments'>Comentários encerrado.</p>";
    endif;
 
else : // I.E. There are no Comments
    if ( comments_open() ) : // Comments are open, but there are none yet
        // echo"<p>Be the first to write a comment.</p>";
    else : // comments are closed
        echo"<p class='nocomments'>Comentários encerrados.</p>";
    endif;
endif;
 
// Display Form/Login info Section
// the comment_form() function handles this and can be used without any paramaters simply as "comment_form()"
comment_form(array(
  // see codex http://codex.wordpress.org/Function_Reference/comment_form for default values
  // tutorial here http://blogaliving.com/wordpress-adding-comment_form-theme/
  'comment_field' => '<p><textarea class="input-block-level" name="comment" id="comment" cols="58" rows="10" tabindex="4" aria-required="true" required></textarea></p>',
  'label_submit' => 'Enviar comentário',
  'comment_notes_after' => ''
  ));
 
// RSS comments link
echo '<div class="comments_rss">';
comments_rss_link('Feed RSS dos comentários');
echo '</div>';
 
?>
