// import Swiper JS
import Swiper, {Autoplay} from 'swiper';
// import Swiper styles
import 'swiper/css';

Swiper.use(Autoplay);

document.addEventListener('DOMContentLoaded', () => {

	const labelsSlider = new Swiper(".labelsSlider", {
		slidesPerView: 3,
		spaceBetween: 15,
		speed: 5000,
		autoplay: {
			// delay: 2000,
			disableOnInteraction: false,
			delay: 1,
		},
		centeredSlides: true,
		loop: true,
		breakpoints: {
			768: {
				spaceBetween: 30,
			},
			1024: {
				slidesPerView: 4,
				spaceBetween: 50,
			},
		}
	});

});