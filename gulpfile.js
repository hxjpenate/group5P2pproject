//引入gulp
var gulp = require('gulp');

// 引入模块
//引入gulp-babel
var babel = require('gulp-babel');
// 压缩模块
var uglify = require("gulp-uglify");
// 改名模块
var rename = require("gulp-rename");
// less转css模块
var less = require("gulp-less");
// path模块 less用
var path = require("path");
// 压缩css模块
var cleanCSS = require('gulp-clean-css');
// 图片压缩模块
var imagemin = require('gulp-imagemin');
// js文件合并模块
var concat = require('gulp-concat');
// sass转css模块
//var sass = require('gulp-sass');


//配置任务1:压缩改名js
gulp.task("uglifyJs", function () {
    gulp.src("src/js/*.js") //源目录
        .pipe(babel({
            presets: ['env']
        }))
        .pipe(uglify())
        .pipe(rename({
            suffix: ".min"
        }))
        .pipe(gulp.dest("dist/js")); //输出目录
});

// 配置任务2:js文件合并
gulp.task('scripts', function () {
    return gulp.src('src/js/*.js')
        .pipe(concat('all.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./dist/js'));
});
//配置任务3:转换less改名压缩css
gulp.task("LessTocss", function () {
    gulp.src("src/less/*.less")
        .pipe(less({
            paths: [path.join(__dirname, 'less', 'includes')]
        }))
        .pipe(gulp.dest("dist/css"));
});
//配置任务4:转换less改名压缩css
gulp.task("uglifyLess", function () {
    gulp.src("src/less/*.less")
        .pipe(less({
            paths: [path.join(__dirname, 'less', 'includes')]
        }))
        .pipe(cleanCSS({
            compatibility: 'ie8'
        }))
        .pipe(rename({
            suffix: ".min"
        }))
        .pipe(gulp.dest("dist/css"));
});

// //配置任务5:转换sass改名压缩css
gulp.task('sass', function () {
        gulp.src('src/sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(cleanCSS({
            compatibility: 'ie8'
        }))
        .pipe(rename({
            suffix: ".min"
        }))
        .pipe(gulp.dest('./dist/css'));
  });

//配置任务6:图片压缩
gulp.task('uglifyImg', function () {
    gulp.src('src/img/*')
        .pipe(imagemin())
        .pipe(rename({
            suffix: ".max"
        }))
        .pipe(gulp.dest('dist/img'))
});

// 观察者
gulp.task("default", function () {
    gulp.watch("src/js/*.js", ["uglifyJs"]);
    // gulp.watch("src/js/*.js", ["scripts"]);
    gulp.watch("src/less/*.less", ["LessTocss"]);
    gulp.watch("src/less/*.less", ["uglifyLess"]);
    gulp.watch("src/sass/*.scss", ["sass"]);
    // gulp.watch("src/img/*", ["uglifyImg"]);
});