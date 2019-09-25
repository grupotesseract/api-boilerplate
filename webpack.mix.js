const mix = require('laravel-mix')
const sassOptions = { outputStyle: 'compressed' }

mix.js('resources/js/App.js', 'public/js/')
  .js('resources/js/pages/Home.js', 'public/js/')
  .js('resources/js/pages/Cidades.js', 'public/js/')

  .sass('resources/sass/app.scss', 'public/css', { sassOptions })
  .sass('resources/sass/pages/login.scss', 'public/css', { sassOptions })
  .sass('resources/sass/pages/welcome.scss', 'public/css', { sassOptions })

  .browserSync({
    files: ['public/css/*.{css,js}', 'resources/**/*.blade.php'],
    proxy: 'localhost',
    logSnippet: false,
    ghostMode: false,
    notify: false,
    open: false,
    port: 3000,
    ui: false
  })

  .webpackConfig({
    devtool: !mix.inProduction() && 'inline-source-map'
  })
