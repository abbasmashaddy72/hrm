require('./bootstrap')
require('fslightbox')
require('./hope-ui')
require('./countdown')

import Alpine from 'alpinejs'
import Swiper, {
    Grid,
    Lazy,
    EffectFade,
    Navigation,
    Pagination,
    Scrollbar,
    EffectCoverflow
} from 'swiper'

window.Alpine = Alpine

Alpine.start()

Swiper.use([
    Grid,
    Lazy,
    EffectFade,
    Navigation,
    Pagination,
    Scrollbar,
    EffectCoverflow
])
