import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

const app = createApp(App)
app.use(router).mount('#app')

app.config.globalProperties.servidor = 'https://grupoeuroandino.com/app/api/';
