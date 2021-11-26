window._ = require('lodash');

try {
    window.$ = window.jQuery = require('jquery');

    window.bootstrap = require('bootstrap5/dist/js/bootstrap.bundle.min');
} catch (e) {}
