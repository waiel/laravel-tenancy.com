/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import * as _ from 'lodash';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(require('vuetify'));

const app = new Vue({
  el: '#app',
  computed: {
    segments: function () {
      return window.location.pathname.split('/');
    },
    /**
     * Retrieves valid paths of url path segment.
     * @returns {Array}
     */
    paths: function() {
      let addedUp = [];
      let results = [];

      _.forEach(this.segments, (segment) => {
        addedUp.push(segment);
        let item = addedUp.join('/');
        results.push(item);
      });

      return _.compact(results);
    }
  },
  methods: {
    pathStartsWith: function(path) {
      return _.indexOf(this.paths, path) !== -1;
    }
  }
});
