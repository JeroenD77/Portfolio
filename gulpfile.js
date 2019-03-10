var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var concat      = require('gulp-concat');
var uglify      = require('gulp-uglify');
var exec        = require('child_process').exec;

var config = {
    env: 'local'
}

function jigsaw (cb) {
    return exec('./vendor/bin/jigsaw build ' + config.env, function (err, stdout, stderr) {
        console.log(stdout);
        console.log(stderr);
        cb(err);
    });
}

// Bundle CSS
gulp.task('css', function () {
    return gulp.src([
        'assets/css/bootstrap/bootstrap.min.css',
        'assets/css/plugins/fullpage/javascript.fullPage.css',
        'assets/css/plugins/hover/hover.min.css',
        'assets/css/plugins/owl.carousel/owl.carousel.css',
        'assets/css/plugins/owl.carousel/owl.theme.css',
        'assets/css/plugins/owl.carousel/owl.transitions.css',
        'assets/css/plugins/jquery.fs.wallpaper/jquery.fs.wallpaper.css',
        'assets/css/plugins/magnific-popup/magnific-popup.css',
        'assets/css/plugins/progresstracker/css/jquery.progresstracker.min.css',
        'assets/css/main.css',


    ])
    .pipe(concat('style.css'))
    .pipe(gulp.dest('assets/dist'));
});

// Bundle JS
gulp.task('js', function () {
    return gulp.src([
		'assets/js/jquery-1.10.2.js',
        'assets/js/bootstrap/bootstrap.min.js',
        'assets/js/modernizr.custom.js',
        'assets/js/plugins/fullpage/javascript.fullPage.js',
        'assets/js/plugins/jquery.easing/jquery.easing.1.3.js',
        'assets/js/plugins/jquery.fitvids/jquery.fitvids.js',
        'assets/js/plugins/jquery.fs.wallpaper/jquery.fs.wallpaper.min.js',
        'assets/js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js',
        'assets/js/plugins/jquery.tubular/jquery.tubular.1.0.js',
        'assets/js/plugins/owl.carousel/owl.carousel.min.js',
        'assets/js/plugins/scrollReveal/scrollReveal.js',
        'assets/js/plugins/stellar/stellar.js',
        'assets/js/plugins/iScroll/iscroll.js',
        'assets/js/plugins/SmoothScroll/SmoothScroll.js',
        'assets/js/plugins/jqBootstrapValidation/jqBootstrapValidation.js',
        'assets/js/contact_me.js',
        'assets/js/plugins/isotope/isotope.pkgd.min.js',
        'assets/js/plugins/progresstracker/js/jquery.progresstracker.js',
        'assets/js/spectrum.nav.js',
        'assets/js/spectrum.js',
        'assets/js/main.js',
        'assets/js/style.switcher.js',
	])
	.pipe(concat('app.js'))
    // .pipe(uglify())
    .pipe(gulp.dest('assets/dist'));
});

// Build site with Jigsaw
gulp.task('jigsaw', function (cb) {
    config.env = 'local';
    return jigsaw(cb);
});

gulp.task('jigsaw-production', function (cb) {
    config.env = 'production';
    return jigsaw(cb);
});

gulp.task('build', ['js', 'css', 'jigsaw-production'], function(cb) {
    return gulp.src('assets/**/*')
        .pipe(gulp.dest('build_production/assets'));
});

// Static Server + watching changing files
gulp.task('watch', ['jigsaw', 'js', 'css'], function() {
    browserSync.init({
        server: {
        	baseDir: 'build_' + config.env
        },
        proxy: null,
        serveStatic: ['.']
    });

    gulp.watch("source/**/*.php", ['jigsaw-watch']);
    
    gulp.watch("assets/js/**/*.js", ['js']);
    gulp.watch("assets/css/**/*.css", ['css']);
    gulp.watch("build_" + config.env + "/**/*.html", browserSync.reload);
    gulp.watch("assets/dist/*.*", browserSync.reload);
    //gulp.watch("assets/css/**/*.css", browserSync.reload);
});

gulp.task('jigsaw-watch', ['jigsaw'], browserSync.reload);
//gulp.task('css-watch', ['css'], browserSync.reload);
//gulp.task('js-watch', ['js'], browserSync.reload);

gulp.task('default', ['watch']);
