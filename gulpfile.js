

const { src , dest, watch }= require('gulp');
const sass = require('gulp-sass');

//rutas 

function css (done ){//inecesario
    return src("./fw/scss/app.scss")
        .pipe( sass() )
        .pipe( dest('./fw/css') )
}

function minificarcss(){
    return src("./fw/scss/app.scss")
        .pipe( sass({
            outputStyle: 'compressed'
        }) )
        .pipe( dest('./fw/css') )
}


function watchArchivos(){
    watch("./fw/scss/app.scss",css);
}

exports.css = css;
exports.minificarcss = minificarcss;
exports.watchArchivos = watchArchivos;
// exports.default = series(css,watchArchivos);
