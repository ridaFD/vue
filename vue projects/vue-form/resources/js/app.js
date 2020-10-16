import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
import Form from "./core/Form";

window.axios = axios;
window.Vueaxios = VueAxios;
window.Form = Form;

new Vue({
    el: '#app',

    data: {
        form: new Form({
            name: '',
            description: '',
        })
    },

    methods: {
        onSubmit() {
            this.form.post('/projects');
        }
    }
})
