const gulp = require('flarum-gulp');

gulp({
  modules: {
    'joom/recaptcha': 'src/**/*.js',
  },
});
