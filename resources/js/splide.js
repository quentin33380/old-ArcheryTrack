import Splide from '@splidejs/splide';
import '@splidejs/splide/css/sea-green';

var splide = new Splide( '.splide', {
    type   : 'loop',
    gap: '1rem',
    rewind : true,
    perMove: 1,
    breakpoints : {
        640:{
            perPage: 2,
        },
        1025:{
            perPage: 3,
        },
        1280:{
            perPage: 5,
        },
    },
} );

splide.mount();
