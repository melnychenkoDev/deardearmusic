export default function header() {
	let menu = document.querySelector('.menu');

	function outputMenuItem(output = false) {
		menu.querySelectorAll('.menu-item-has-children').forEach(el => {
			let subMenu = el.querySelector('.sub-menu');
			let padding = 15;

			if (subMenu) {
				el.addEventListener('mouseenter', e => {
					if (!subMenu.classList.contains('active')) {
						subMenu.classList.add('active');

						if (output) {
							let pr = (+subMenu.clientWidth - +el.clientWidth) + padding;
							if (pr > 0) {
								el.style.paddingRight = pr + 'px';
							}
						}
					}
				});

				el.addEventListener('mouseleave', e => {
					if (subMenu.classList.contains('active')) {
						subMenu.classList.remove('active');
						if (output) {
							el.style.paddingRight = padding + 'px';
						}
					}
				});


			}
		})
	}

	outputMenuItem();

}