import replace from "gulp-replace"; // Finding + replace
import plumber from "gulp-plumber"; // Error processing
import notify from "gulp-notify"; // Messages(help)
import browsersync from "browser-sync"; // Local server
import newer from "gulp-newer"; // Check updates
import ifPlugin from "gulp-if" // if brench


export const plugins = {
    replace: replace,
    plumber: plumber,
    notify: notify,
    browsersync: browsersync,
    newer: newer,
    if : ifPlugin
}