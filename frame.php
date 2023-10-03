<?php
/**
 * The HTML content of the frame.
 */
?>

<section class="demo-frame">

	<a href="<?php echo esc_url(DF_PRODUCT_URL.'#pricing'); ?>"
		class="demo-frame--buy">
		Get <?php esc_html_e(DF_PRODUCT_NAME); ?> Now
	</a>

	<a href="https://dinomatic.com/contact"
		class="demo-frame--contact"
		title="Get in touch">
		📨
	</a>

	<a href="<?php echo esc_url(DF_PRODUCT_URL); ?>"
		class="demo-frame--back"
		title="Go back">
		🔙
	</a>

	<button class="demo-frame--close"
		title="Close this frame">
		&times;
	</button>

	<style>
		.demo-frame {
			position: fixed;
			bottom: 0.5rem;
			left: 1.5rem;
			display: none;
			align-items: center;
			justify-content: end;
			border: 1px solid #f1f5f8;
		}
		.demo-frame--buy,
		.demo-frame--back,
		.demo-frame--contact,
		.demo-frame--close {
			display: inline-block;
			padding: 0.5rem 1rem;
			font-size: 1rem;
			color: #000;
			background-color: #fff;
		}
		.demo-frame--buy {
			background-color: #4dc0b5;
		}
		.demo-frame--contact {
			background-color: #8795a1;
		}
		.demo-frame--close {
			background-color: #8795a1;
			border: 0 none;
			border-radius: 0;
		}
	</style>

	<script>
		document.addEventListener('DOMContentLoaded', () => {
			const hideFrameButton = document.querySelector('.demo-frame--close')
			if (hideFrameButton) {
				hideFrameButton.addEventListener('click', () => {
					document.body.removeChild(hideFrameButton.parentElement)
					window.sessionStorage.setItem('frame-hidden', 1)
				})
			}

			if (!window.sessionStorage.getItem('frame-hidden')) {
				const frame = document.querySelector('.demo-frame')
				if (frame) {
					frame.style.display = 'flex'
				}
			}
		})
	</script>
</section>
