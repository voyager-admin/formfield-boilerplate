import Demo from './components/Demo.vue';
import Formfield from './components/Formfield.vue';
import Builder from './components/Builder.vue';

voyager.component('my-plugin-demo', Demo);
voyager.component('my-plugin-formfield', Formfield);
voyager.component('my-plugin-builder', Builder);
voyager.addToUI('My Plugin', 'my-plugin-demo');