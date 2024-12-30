// import external dependencies
// import 'jquery'

// Import everything from autoload
import './autoload/_bootstrap'
import './autoload/_font-awesome'

// import local dependencies
import Router from './util/Router'
import common from './routes/common'
import home from './routes/home'
import singlePost from './routes/singlePost'
import templateApplicationForm from './routes/templateApplicationForm'
import templateCalculator from './routes/templateCalculator'
import templateContact from './routes/templateContact'

/** Populate Router instance with DOM routes */
const routes = new Router({
  common,
  home,
  singlePost,
  templateApplicationForm,
  templateCalculator,
  templateContact,
})

// Load Events
jQuery(() => {
  routes.loadEvents()

  /**
   * Force Gravity Forms to show. Has to be some weird JS timing issue with the form.
   * @see https://stackoverflow.com/a/67741301/1331870
   */
  window.document.dispatchEvent(
    new Event('DOMContentLoaded', {
      bubbles: true,
      cancelable: true,
    })
  )
})
