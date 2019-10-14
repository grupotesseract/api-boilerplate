import $ from 'jquery'
import 'bootstrap'
import '@coreui/coreui'

/**
 *
 * @class App
 */
class App {

  /**
   * @constructor
   */
  constructor() {
    this.eventHandlers()
  }

  /**
   * @returns
   */
  eventHandlers() {
    // Avoid anchor and button clicks to modify URL or refresh page.
    $('a[href="#"], button').on('click', event => {
      event.preventDefault()
    })
  }

}

export default App
