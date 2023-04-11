// Font Awesome
import { library, dom } from '@fortawesome/fontawesome-svg-core'

// Import the icons
import {
  faFacebook,
  faInstagram,
  faTwitter,
  faLinkedin,
  faYoutube,
} from '@fortawesome/free-brands-svg-icons'
import {
  faPlus,
  faMinus,
  faCircle,
  faSearch,
} from '@fortawesome/pro-solid-svg-icons'
import {
  faBars,
  faSpinnerThird,
  faArrowRight,
  faChevronRight,
} from '@fortawesome/pro-regular-svg-icons'
import { faTimes, faChevronDown } from '@fortawesome/pro-light-svg-icons'

// Add the imported icons to the library
library.add(
  faFacebook,
  faInstagram,
  faTwitter,
  faLinkedin,
  faYoutube,
  faPlus,
  faMinus,
  faCircle,
  faSearch,
  faBars,
  faSpinnerThird,
  faArrowRight,
  faChevronRight,
  faTimes,
  faChevronDown
)

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch()
