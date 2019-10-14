const mix = require('laravel-mix')
const browserSyncFiles = ['public/css/*.{css,js}']

mix.js('resources/js/App.js', 'public/js')
  .js('resources/js/pages/Home.js', 'public/js/pages')
  .js('resources/js/pages/Cidades.js', 'public/js/pages')
  .js('resources/js/pages/Usuarios.js', 'public/js/pages')

  .sass('resources/sass/app.scss', 'public/css')
  .sass('resources/sass/pages/login.scss', 'public/css/pages')
  .sass('resources/sass/pages/welcome.scss', 'public/css/pages')

  .browserSync({
    files: !process.env.LIVERELOAD_PHP
      ? browserSyncFiles
      : ['{app,config,public,resources/views}/**/*.php', ...browserSyncFiles],
    proxy: 'localhost',
    logSnippet: false,
    notify: false,
    open: false,
    port: 3000,
    ui: false
  })

  .webpackConfig({
    devtool: !mix.inProduction() && 'inline-source-map'
  })
