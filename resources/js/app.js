require('bootstrap');
import tooltip from "bootstrap/js/dist/tooltip";
window.tooltip = tooltip;

import { createApp } from "vue"
import { AVPlugin } from "vue-audio-visual";
import jQuery from 'jquery';

window.jQuery = window.$ = jQuery;

import App from "./vue/App.vue";

const app = createApp(App);
$(document).ready(()=> {
	app.use(AVPlugin).mount("#app");
});
