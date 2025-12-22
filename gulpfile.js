// 定数
var workdir = ''; // コンパイルする階層を入れる
//var workdir = 'recruit_form/'; // コンパイルする階層を入れる

var url = "http://moana-skin-clinic.192.168.0.211.nip.io/"+workdir; // ブラウザ自動リロードで使用


// プラグイン読み込み
var gulp = require('gulp');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var sass = require('gulp-sass')(require('sass'));
var autoprefixer = require('gulp-autoprefixer');
var cssmin = require('gulp-clean-css');
var rename = require('gulp-rename');
var svgstore = require('gulp-svgstore');
var cheerio = require('gulp-cheerio');
var imagemin = require('gulp-imagemin');
var pngquant =  require('imagemin-pngquant');
var mozjpeg = require('imagemin-mozjpeg');
var webp = require('gulp-webp');
var changed = require('gulp-changed');
var browsersync = require("browser-sync").create();

// /_scss/以下のSCSSファイル
gulp.task('mainScss', function(done) {
    gulp.src(workdir + 'resources/_scss/**/!(_)*.scss', {base: '_scss'})
    .pipe(plumber({
        errorHandler: notify.onError("Error: <%= error.message %>")
    }))
    .pipe(sass({
        outputStyle: 'expanded'
    }))
    .pipe(autoprefixer())

    // .cssを出力
    .pipe(rename({dirname: 'css'}))
    .pipe(gulp.dest(workdir + 'assets'))

    // min.cssを出力
    .pipe(cssmin())
    .pipe(rename({extname: '.min.css'}))
    .pipe(gulp.dest(workdir + 'assets'));
    done();
});

// svg生成
gulp.task('svg', function (done) {
    // 個別svgの圧縮
    gulp.src(workdir + 'resources/svg/**/*.svg')
    .pipe(changed(workdir + 'assets/svg'))
    .pipe(imagemin([
        imagemin.svgo({
            plugins: [
                { removeViewBox: false },
            ]
        })
    ]))
    .pipe(gulp.dest(workdir + 'assets/svg'));

    // icons以下のファイルをまとめてsvgスプライトを生成
    gulp.src(workdir + 'resources/svg/icons/*.svg')
    .pipe(imagemin([
        imagemin.svgo({
            plugins: [
                { removeViewBox: false },
            ]
        })
    ]))
    .pipe(svgstore({ inlineSvg: true }))
    .pipe(cheerio({
        run: function ($, file) {
            $('style,title,defs').remove();
            $('[id]:not(symbol)').removeAttr('id');
            $('[class]').removeAttr('class');
            $('[data-name]').removeAttr('data-name');
            $('[fill]').removeAttr('fill');
            $('[stroke]').removeAttr('stroke');
            $('[style]:not(svg)').removeAttr('style');
            $('svg').attr('style','display:none');
        },
        parserOptions: { xmlMode: true }
    }))
    .pipe(gulp.dest(workdir + 'assets/svg'));
    done();
});

// 画像圧縮
gulp.task('imagemin', function(done) {
    gulp.src(workdir + 'resources/img/**/*.{jpg,jpeg,png,gif,svg}')
    .pipe(changed(workdir + 'assets/img'))
    .pipe(imagemin([
        pngquant({ quality: [ 0.65, 0.8 ], speed: 1 }),
        mozjpeg({ quality: 80 }),
        imagemin.svgo({
            plugins: [
                { removeViewBox: false },
            ]
        }),
        imagemin.gifsicle()
    ]))
    .pipe(gulp.dest(workdir + 'assets/img'));
    done();
});

// webp生成
gulp.task('webp', function (done) {
    gulp.src(workdir + 'resources/img/**/*.{jpg,jpeg,png}')
    .pipe(changed(workdir + 'assets/img'))
    .pipe(rename(function (path) {
        path.basename += path.extname;
    }))
    .pipe(webp({
        quality: 80,
        method: 6,
    }))
    .pipe(gulp.dest(workdir + 'assets/img'));
    done();
});

// ブラウザを立ち上げる
gulp.task('build-server', function (done) {
    browsersync.init({
        proxy: url
    });
    done();
    console.log('Server was launched');
});

// ブラウザリロード
gulp.task('browser-reload', function (done){
    browsersync.reload();
    done();
    console.log('Browser reload completed');
});

// ------------------------------------------------
//  ファイルの更新監視タスク
// ------------------------------------------------
// メインのSCSSの更新を監視
gulp.task('mainWatch', function(done) {
    gulp.watch(workdir + 'resources/_scss/**/*.scss', gulp.series('mainScss', 'browser-reload'));
    done();
});

// svgの更新を監視
gulp.task('svgWatch', function(done) {
    gulp.watch(workdir + 'resources/svg/**/*.svg', gulp.series('svg', 'browser-reload'));
    done();
});

// 画像の更新を監視
gulp.task('imgWatch', function (done) {
    gulp.watch(workdir + 'resources/img/**/*', gulp.series('imagemin', 'webp', 'browser-reload'));
    done();
});

// 全てを監視
gulp.task('default', gulp.series(
    gulp.parallel('mainScss', 'svg', 'imagemin', 'webp'),
    gulp.parallel('mainWatch', 'svgWatch', 'imgWatch', 'build-server')
));
