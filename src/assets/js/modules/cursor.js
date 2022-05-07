export default function cursor() {
	const cursorOuter = document.querySelector('.cursor-outer');
	const cursorInner = document.querySelector('.cursor-inner');
	const cursorView = document.querySelector('.cursor-view');
	let hoverLinks = document.querySelectorAll('.hover-this');

	const magnetItems = document.querySelectorAll('.magnet-link');

	let isMouseDown = false;
	let cursorLeave = false;

	const moveCursor = (e) => {
		const mouseY = e.clientY;
		const mouseX = e.clientX;

		cursorOuter.style.top = ` ${mouseY}px`;
		cursorOuter.style.left = ` ${mouseX}px`;

		cursorInner.style.top = ` ${mouseY}px`;
		cursorInner.style.left = ` ${mouseX}px`;

		cursorView.style.top = ` ${mouseY}px`;
		cursorView.style.left = ` ${mouseX}px`;
	}

	const linkMouseHover = (e) => {
		e.stopPropagation();
		let type = e.type;
		let target = e.target.closest('.hover-this');

		if (type === 'mouseover' && !isMouseDown) {
			if (target.classList.contains('labels_item') && !target.classList.contains('end')) {
				cursorOuter.classList.add('hovering-view');
				cursorInner.classList.add('hovering-view');
				cursorView.classList.add('hovering-view');
			} else {
				cursorOuter.classList.add('hovering-link');
				cursorInner.classList.add('hovering-link');
			}
		} else {
			cursorOuter.classList.remove('hovering-link');
			cursorInner.classList.remove('hovering-link');

			cursorOuter.classList.remove('hovering-view');
			cursorInner.classList.remove('hovering-view');
			cursorView.classList.remove('hovering-view');

			cursorMouseEventsReset();
			cursorMouseEvents();
		}
	}

	function cursorMouseEvents() {
		hoverLinks.forEach(el => {
			el.addEventListener('mouseover', linkMouseHover);
			el.addEventListener('mouseout', linkMouseHover);
		});
	}

	function cursorMouseEventsReset() {
		hoverLinks.forEach(el => {
			el.removeEventListener('mouseover', linkMouseHover);
			el.removeEventListener('mouseout', linkMouseHover);
		});
		hoverLinks = document.querySelectorAll('.hover-this');
	}

	const resetTransformMagnetItem = (subEl) => {
		subEl.style.transform = "translate(0px, 0px)";
	}

	const updateTransformMagnetItem = (subEl, x, y) => {
		// x = x > 5 ? x / 10 : x;
		// y = y > 5 ? y / 10 : y;
		subEl.style.transform = "translate(" + x + "px, " + y + "px)";
	}

	const magnetItemMouseOut = (subEl, magnetItem) => {
		resetTransformMagnetItem(subEl);
		document.documentElement.classList.remove('on-magnet-hover');
		magnetItem.removeEventListener('mouseout', () => magnetItemMouseOut(subEl, magnetItem));
	}

	magnetItems.forEach(magnetItem => {
		const subEl = magnetItem.querySelector('[data-magnet]');
		magnetItem.addEventListener('mousemove', (e) => {
			const el = e.currentTarget;

			let rect = el.getBoundingClientRect();
			let mouseX = e.pageX - rect.left;
			let mouseY = e.clientY - rect.top;

			let moveX = (mouseX - (rect.width/2))/3;
			let moveY = (mouseY - (rect.height/2))/3;

			updateTransformMagnetItem(subEl, moveX, moveY);
		});

		magnetItem.addEventListener('mouseout', () => magnetItemMouseOut(subEl, magnetItem));
	})

	window.addEventListener('mousemove', moveCursor);

	document.querySelectorAll('iframe').forEach(el => {
		el.addEventListener('mouseover', () => {
			cursorLeave = true;
			cursorOuter.classList.add('cursor-hide');
			cursorInner.classList.add('cursor-hide');
			cursorView.classList.add('cursor-hide');
		});

		el.addEventListener('mouseout', () => {
			cursorLeave = false;
			cursorOuter.classList.remove('cursor-hide');
			cursorInner.classList.remove('cursor-hide');
			cursorView.classList.remove('cursor-hide');
		});
	})

	window.addEventListener('mousedown', () => {
		isMouseDown = true;
	});
	window.addEventListener('mouseup', () => {
		isMouseDown = false;
	});

	cursorMouseEvents();

	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
		if (cursorOuter && cursorInner && cursorView) {
			cursorOuter.classList.add('cursor-hide');
			cursorInner.classList.add('cursor-hide');
			cursorView.classList.add('cursor-hide');
		}
	}

}