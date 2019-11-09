// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import singlePost from './routes/singlePost';
import templateApplicationForm from './routes/templateApplicationForm';
import templateCalculator from './routes/templateCalculator';
import templateContact from './routes/templateContact';

/** Populate Router instance with DOM routes */
const routes = new Router({
  common,
  home,
  singlePost,
  templateApplicationForm,
  templateCalculator,
  templateContact,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
