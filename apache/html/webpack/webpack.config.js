//path モジュールの読み込み
const path = require('path');
//MiniCssExtractPlugin の読み込み cssを別ファイルに吐き出す
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
//WebpackFixStyleOnlyEntries の読み込み　jsを吐き出さない
const WebpackFixStyleOnlyEntries = require("webpack-fix-style-only-entries");
 
module.exports = {
  //エントリポイント 吐き出す名前と読み込み元
  entry: {
    "style": './src/style.scss'
  },
  //出力先
  output: { 
  //  filename: '[name].js', 
    path: path.resolve('../','webroot','css'),
  },
  module: {
    rules: [
      //SASS 及び CSS 用のローダー
      {
        //拡張子 .scss、.sass、css を対象
        test: /\.(scss|sass|css)$/i, 
        // 使用するローダーの指定（後ろから順番に適用される）
        use: [ MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader' ], 
      },
    ],
  },
  //プラグインの設定
  plugins: [
    new MiniCssExtractPlugin({
      // 抽出する CSS のファイル名
      filename: './[name].css',
    }),
    new WebpackFixStyleOnlyEntries()
  ],
  //source-map タイプのソースマップを出力
  // devtool: 'source-map',
  // node_modules を監視（watch）対象から除外
  watchOptions: {
    ignored: /node_modules/  //正規表現で指定
  },
};