// Font Awesome
import { library, dom } from '@fortawesome/fontawesome-svg-core'; 

// import the Facebook and Twitter icons
import { faFacebook, faTwitter, faLinkedin, faYoutube } from "@fortawesome/free-brands-svg-icons";
import { faPlus, faMinus, faCircle } from "@fortawesome/pro-solid-svg-icons";
import { faBars, faSpinnerThird, faArrowRight } from "@fortawesome/pro-regular-svg-icons";
import { faTimes, faChevronDown } from "@fortawesome/pro-light-svg-icons";

// add the imported icons to the library
library.add(faFacebook, faTwitter, faLinkedin, faYoutube, faPlus, faMinus, faBars, faTimes, faChevronDown, faSpinnerThird, faArrowRight, faCircle);

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();
