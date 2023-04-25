require('./bootstrap');

//Enable - Importing Alpinejs to use it with Laravel
import Alpine from 'alpinejs';

//instantiate Alpinejs for Global usage
window.Alpine = Alpine; 

//Run Alpinejs to use it in HTML code
Alpine.start();