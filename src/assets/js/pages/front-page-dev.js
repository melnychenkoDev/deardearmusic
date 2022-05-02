// import Swiper JS
import Swiper, {Autoplay} from 'swiper';
// import Swiper styles
import 'swiper/css';

Swiper.use(Autoplay);

document.addEventListener('DOMContentLoaded', () => {

	const labelsSlider = new Swiper(".labelsSlider", {
		slidesPerView: 1,
		spaceBetween: 10,
		speed: 5000,
		autoplay: {
			// delay: 2000,
			disableOnInteraction: false,
			delay: 1,
		},
		centeredSlides: true,
		loop: true,
		breakpoints: {
			640: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			768: {
				slidesPerView: 3,
				spaceBetween: 40,
			},
			1024: {
				slidesPerView: 4,
				spaceBetween: 50,
			},
		}
	});

});