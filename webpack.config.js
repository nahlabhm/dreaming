const path = require('path');

module.exports = {
  mode: 'development',
  entry: path.resolve(__dirname, './vendor/js/index.js'),
  module: {
    rules: [
      {
        test: /\.(js)$/,
        exclude: /node_modules/,
        use: ['babel-loader']
      },
      {
        test: /\.(scss|css)$/,
        use: [
            'style-loader',
            'css-loader',
            'sass-loader'
        ],
      }
    ]
  },
  resolve: {
    extensions: ['*', '.js']
  },
  output: {
    filename: 'bundle.js', // Nom du fichier de sortie JS
    path: path.resolve(__dirname, 'assets') // Répertoire de sortie pour le fichier bundle.js
  },
  
};

