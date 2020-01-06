<section id="modal-section">
	<?php define('PAGE_PROTOCOL', (isset($_SERVER['https']) && $_SERVER['https'] === 'on') ? 'https' : 'http' ); ?>
	<button type="button" class="share-btn floating-share-btn" data-toggle="modal" data-target="#shareModal" >
		<i class="fa fa-share-alt"></i>
		<span>Share <span class="sr-only">this page</span></span>
	</button>

	<div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModal">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h2 class="modal-title" id="myModalLabel">Share this page</h2>
				</div>
				<div class="modal-body">
					<div class="copylink">
						<p>Copy and paste this code into your website.</p>
						<pre>&lt;a href="<?php echo htmlspecialchars(PAGE_PROTOCOL .'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>">Your Link Name&lt;/a&gt;</pre>
					</div><!-- /.copylink -->
					<div class="share-btns">
						<p>Share this page on your favorite Social network</p>
						<div class="row">
							<div class="col-sm-4">
								<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo htmlspecialchars(PAGE_PROTOCOL.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>" class="btn-facebook" onclick="return !window.open(this.href, 'facebook ', 'width=500,height=500')"
								target="_blank">
									<i class="fa fa-facebook"></i> Facebook
								</a>
							</div>
							<div class="col-sm-4">
								<a href="https://www.twitter.com/intent/tweet?url=<?php echo htmlspecialchars(PAGE_PROTOCOL.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>" class="btn-twitter" onclick="return !window.open(this.href, 'twitter ', 'width=500,height=500')"
								target="_blank">
									<i class="fa fa-twitter"></i> Twitter
								</a>
							</div>
							<div class="col-sm-4">
								<a href="https://www.reddit.com/submit?url=<?php echo htmlspecialchars(PAGE_PROTOCOL.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>" class="btn-reddit" onclick="return !window.open(this.href, 'redit ', 'width=500,height=500')"
								target="_blank">
									<i class="fa fa-reddit"></i> Reddit
								</a>
							</div>
						</div><!-- /.row -->
					</div><!-- /.share-btns -->
					<button type="button" class="btn btn-success btn-lg" data-dismiss="modal">Close</button>
				</div><!-- /.modal-body -->
			</div>
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</section><!-- /#modal-section -->