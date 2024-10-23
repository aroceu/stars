<div id="commentwrapper">
    
    <div id="ficbuttonnav">
    <a href="#container"><button>&uarr; Top</button></a>
    

    <a href="#comments" rel="toggle[comments]"><button>
     <?php comments_number('No comments', 'Comment (1)', 'Comments (%)' );?>
     </button></a>
     
         
     </div>
     
     <?php if ('open' == $post->comment_status) : ?>

<div id="respond">

<div class="cancel-comment-reply">
<dl><dt><?php cancel_comment_reply_link(); ?></dt><dd></dd></dl>
</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

<?php else : ?>

<div id="type">
<dl>
<dt class="invisi"></dt>    
<dd>Name and email fields are required. Your email address will not be published.</dd>
    
<dt>Name:<?php if ($req) echo ""; ?></dt> 
<dd><input type="text" name="author" id="author" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> /></dd>

<dt>Email:<?php if ($req) echo ""; ?></dt>

<dd><input type="text" name="email" id="email" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> /></dd>

<dt>Website (optional):</dt>

<dd><input type="text" name="url" id="url" tabindex="3" /></dd>

</dl>

<div class="commentcodeinfo"><small>(Accepts plain text with limited HTML)</small></div>

<textarea name="comment" id="comment" rows="8" tabindex="4">
</textarea>

<?php endif; ?>




<p align="right"><input name="submit" type="submit" id="submit" tabindex="5" value="Comment"/>
   <?php comment_id_fields(); ?>
   <?php do_action('comment_form', $post->ID); ?></p>
   

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; ?>

</div></div>

	<?php if ( have_comments() ) : ?>

<div id="comments">
    
<?php // Do not delete these lines
     if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
     die ('Please do not load this page directly. Thanks!');

     if ( post_password_required() ) { ?>
             <div><div>
                 
                 
    
	<?php
		return;
	}
		/* This variable is for alternating comment background */
$oddcomment = 'alt';
?>

<?php the_comments_navigation(); ?>

		<div class="comment-list">
			<?php
				wp_list_comments('type=comment&callback=fic_comment&avatar_size=100');
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

</div></div>


		</div>
<?php else : ?>

     
     </div>

	<?php if ('open' == $post->comment_status) : ?>
	 <?php else : // comments are closed ?>
	 
	 
		
	<?php endif; ?>

<?php endif; ?>

</div></div>
