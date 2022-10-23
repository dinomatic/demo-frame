<?php
/**
 * The HTML content of the frame.
 */
?>

<section class="demo-frame">

	<a href="<?php echo esc_url(DF_PRODUCT_URL.'#pricing'); ?>"
		class="demo-frame--buy">
		Buy Now
	</a>

	<a href="<?php echo esc_url(DF_PRODUCT_URL); ?>"
		class="demo-frame--back">
		Go Back
	</a>

	<button class="demo-frame--close">
		&times;
	</button>

	<style>
		.demo-frame {
			position: fixed;
			bottom: 0.5rem;
			right: 3.5rem;
			display: none;
			align-items: center;
			justify-content: end;
			border: 1px solid #f1f5f8;
		}
		.demo-frame--buy,
		.demo-frame--back,
		.demo-frame--close {
			display: inline-block;
			padding: 0.5rem 1rem;
			font-size: 1rem;
			background-color: #fff;
		}
		.demo-frame--buy {
			background-color: #4dc0b5;
		}
		.demo-frame--close {
			background-color: #8795a1;
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
