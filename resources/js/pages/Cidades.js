import Axios from 'axios';

/**
 *
 *
 * @class App
 */
class Cidades {

  /**
   *Creates an instance of App.
   */
  constructor() {
    this.eventHandlers()
  }

  /**
   *
   *
   */
  eventHandlers() {
    $('.select-estados').on('change', async event => {
      let content = '';
      const ID = event.currentTarget.value;
      const result = await Axios.get(`/estados/${ID}/cidades`)

      for (let [key, value] of Object.entries(result.data)) {
        content += `<option value="${key}">${value}</option>`;
      }

      $('.select-cidades').html(content);
    })
  }

}

new Cidades
