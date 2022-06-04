require('./bootstrap');


import {
    createApp
} from 'vue';
import mainapp from './components/mainapp'

const app = createApp({});
app.component('mainapp', mainapp);

app.mount('#app');
