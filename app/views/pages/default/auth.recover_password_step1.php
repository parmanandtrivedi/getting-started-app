<div class="main-bg">
	<div id="content">
		<div class="page-header">
			<h2>Sign into your GettingStartedApp account.</h2>
		</div><!-- end page-header -->
		<div class="page-content">
			<p class="n-message">
				We have sent a reset password invite to your email address <?= $this->html_encode($email) ?>. Please verify.
			</p>
			<div class="forgot-pass">
				<strong>Forgot your password?</strong>
			</div>
			<section class="app-actions pattern2">
				<ul class="unstyled">
					<li>
						<div class="image-frame">
							<img src="<?= $url ?>/images/illustrations/Illustations_bancBoxApp-10.png" />
						</div>
						<em>Fill in the reissue form</em>
					</li>
					<li>
						<div class="image-frame">
							<img src="<?= $url ?>/images/illustrations/Illustations_bancBoxApp-07.png" />
						</div>
						<em>Check your email</em>
					</li>
					<li>
						<div class="image-frame">
							<img src="<?= $url ?>/images/illustrations/Illustations_bancBoxApp-09.png" />
						</div>
						<em>Reset your password</em>
					</li>
				</ul>
			</section>
		</div><!-- page-content -->
	</div><!-- end content -->
	<div class="bottom-content">
		<? $this->partial('bottom_content') ?>
	</div><!-- end bottom-content -->
</div><!-- end main-bg -->
