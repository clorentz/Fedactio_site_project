require('../css/app.scss');

// require jQuery normally
const $ = require('jquery');
require('bootstrap');

// create global $ and jQuery variables
global.$ = global.jQuery = $;

$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});
