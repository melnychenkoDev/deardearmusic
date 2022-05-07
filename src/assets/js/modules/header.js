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

	function mobileMenu() {
		const menuOpenBtns = document.querySelectorAll('.menu_open_btn');
		const mobMenu = document.querySelector('#mob-menu');
		const overlay = document.querySelector('.overlay');
		const menuItemHasChild = document.querySelectorAll('.menu-item-has-children');

		if (menuOpenBtns) {
			menuOpenBtns.forEach(el => {
				el.addEventListener('click', () => {
					if(mobMenu && overlay) {
						mobMenu.classList.add('active');
						overlay.classList.add('active');
						document.body.style.overflow = 'hidden';
					}
				})
			});

			if (mobMenu && overlay) {
				overlay.addEventListener('click', () => {
					mobMenu.classList.remove('active');
					overlay.classList.remove('active');
					document.body.style.overflow = null;

					if (menuItemHasChild) {
						menuItemHasChild.forEach(el => {
							el.classList.remove('active');
							el.style.paddingBottom = null;
						})
					}

				})
			}
		}

		if (menuItemHasChild) {
			menuItemHasChild.forEach(el => {
				el.addEventListener('click', (e) => {
					let halfWidth = el.clientWidth / 2;
					if (e.offsetX > halfWidth) e.preventDefault();
					if (el.classList.contains('active')) {
						el.classList.remove('active');
						el.style.paddingBottom = null;
					} else {
						el.classList.add('active');
						el.style.paddingBottom = '10px';
					}
				});
			})
		}

	}

	outputMenuItem();
	mobileMenu();

}