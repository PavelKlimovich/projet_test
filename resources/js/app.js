import $ from 'jquery';
import 'jquery-ui/ui/widgets/datepicker.js';
import 'bootstrap';
import '@fortawesome/fontawesome-free/js/all.js';


window.$ = window.jQuery = $;
window._ = require('lodash');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


