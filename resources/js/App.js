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
    $(function () {
      $('.select2').select2();

      $('.datepicker').datetimepicker({
        format: 'DD/MM/YYYY HH:mm:ss',
        locale: 'pt-br',
        useCurrent: true,
        icons: {
          up: "icon-arrow-up-circle icons font-2xl",
          down: "icon-arrow-down-circle icons font-2xl"
        },
        sideBySide: true
      })

    });
  }

}

new App
