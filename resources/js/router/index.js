import { createRouter, createWebHistory } from "vue-router";
import { useAuthStore } from "../store/useAuthStore";
import Home from "../views/Home.vue";
import Login from "../views/Login.vue";
import Register from "../views/Register.vue";
import Dashboard from "../views/Dashboard.vue";

const isLoggedIn = () => {
    return useAuthStore().getToken !== null;
};

const isGuest = () => {
    return useAuthStore().getToken === null;
};

const routes = [
    {
        name: "home",
        path: "/",
        component: Home,
        meta: {
            title: "Home",
        },
    },
    {
        name: "login",
        path: "/login",
        component: Login,
        meta: {
            middleware: "isGuest",
            title: "Login",
        },
    },
    {
        name: "register",
        path: "/register",
        component: Register,
        meta: {
            middleware: "isGuest",
            title: "Register",
        },
    },
    {
        name: "dashboard",
        path: "/dashboard",
        component: Dashboard,
        meta: {
            middleware: "isLoggedIn",
            title: "Dashboard",
        },
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from, next) => {
    if (to.meta.title) {
        document.title = `${to.meta.title} - PT.Data Andalan Utama`;
    } else {
        document.title = "PT.Data Andalan Utama";
    }

    if (to.meta.middleware) {
        const middleware = Array.isArray(to.meta.middleware)
            ? to.meta.middleware
            : [to.meta.middleware];
        const token = useAuthStore().getToken;

        if (middleware.includes("isLoggedIn") && !token) {
            next("/login");
        } else {
            next();
        }
    } else {
        next();
    }
});

export default router;
