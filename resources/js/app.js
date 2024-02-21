import './bootstrap';
import 'bootstrap/dist/css/bootstrap.css';
import axios from 'axios'; // Додайте імпорт Axios
import { createApp } from 'vue';
import Index from './components/Index.vue';
import router from './router';

const app = createApp(Index);

app.config.globalProperties.axios = axios; // Додаємо Axios до глобальних властивостей Vue для доступу в усіх компонентах

app.use(router);

app.mount('#app');
