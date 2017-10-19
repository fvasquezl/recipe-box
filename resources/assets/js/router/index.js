import Vue from 'vue'
import VueRouter from 'vue-router'
import Register from '../views/Auth/Register.vue'
import Login from '../views/Auth/Login.vue'
import RecipeIndex from '../views/Recipes/Index.vue'
import RecipeShow from  '../views/Recipes/Show.vue'

Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
        { path: '/', component:RecipeIndex},
        { path: '/recipes/:id', component:RecipeShow},
        { path: '/register', component: Register},
        { path: '/login', component: Login}
    ]
});

export default router
