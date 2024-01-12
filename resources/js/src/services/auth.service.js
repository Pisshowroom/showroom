import axios from 'axios';
// import { createApp } from 'vue';
// import App from '../App.vue';

// const app = createApp(App);
const API_URL = import.meta.env.VITE_BASE_URL;
// const API_URL = 'https://sahabatibadah.com/api';
// const API_URL = 'https://qaraa.hotamadev.com/api';
// const API_URL = 'http://127.0.0.1:8000/api';

class AuthService {
    token = null;
    user = null;
    login(user) {
        return axios
            .post(API_URL + '/login-for-admin', {
                // email: user.email,
                username: user.username,
                password: user.password,
            })
            .then((response) => {
                if (response.data.token) {
                    this.token = response.data.token;
                    response.data.user.permission = 'admin';
                    /* if (response.data.user.role == 'admin') {
                        response.data.user.permission = 'admin';
                    } else if (response.data.user.role == 'admin_institution' && response.data.user.educational_institution_id != null) {
                        response.data.user.permission = 'institution';
                    } else if (response.data.user.role == 'mudabbir' && response.data.user.educational_institution_id != null) {
                        response.data.user.permission = 'mudabbir';
                    } else if (response.data.user.role == 'mudabbir' && response.data.user.educational_institution_id == null) {
                        response.data.user.permission = 'mudabbir_qaraa';
                    } */
                    this.user = response.data.user;
                    localStorage.setItem('api-token', response.data.token);
                    localStorage.setItem('user', JSON.stringify(response.data.user));
                }
                return response.data.user;
            });
    }
    isAuthenticated() {
        this.token = localStorage.getItem('api-token');
        if (this.token != null) {
            console.log("isAuth check : " + this.token);
            axios.defaults.headers.common['Authorization'] = this.token;
            return true;
        }
        return false;
    }
    getToken() {
        this.token = localStorage.getItem('api-token');
        if (this.token != null) {
            return this.token;
        }
        return false;
    }
    logout() {
        this.user = null;
        this.token = null;
        localStorage.removeItem('api-token');
        localStorage.removeItem('user');
    }

    register(user) {
        return axios.post(API_URL + 'signup', {
            username: user.username,
            email: user.email,
            password: user.password,
        });
    }
    getAbility() {
        const user = this.users();
        let ability = [];
        if (user) {
            switch (user.permission) {
                /* case 'admin_institution':
                    ability.push('institution');
                    ability.push('mudabbirInstitution');
                    ability.push('profile');
                    ability.push('public');
                    break;

                case 'mudabbir':
                    ability.push('mudabbir');
                    ability.push('mudabbirInstitution');
                    ability.push('profile');
                    ability.push('public');
                    break;

                case 'mudabbir_qaraa':
                    ability.push('mudabbir');
                    ability.push('mudabbirInstitution');
                    ability.push('profile');
                    ability.push('public');
                    break; */

                case 'admin':
                    ability.push('admin');
                    ability.push('profile');
                    ability.push('public');
                    break;

                default:
                    break;
            }
            return ability;
        }
        return [];
    }
    authRoute(rule, next) {
        const ability = this.getAbility();
        const user = this.users();
        console.log('si user');
        console.log(user);
        console.log(rule);
        // return next();

        if (ability.includes(rule)) {
            return next();
        } else if (rule == null) {
            return next();
        }
        else if (user.role == 'admin') {
            return next('/');
        } else {
            this.user = null;
            this.token = null;
            localStorage.removeItem('api-token');
            localStorage.removeItem('user');
            return next('/auth/login');
        }

        /* if (user != null) {
            console.log('x8  user != null');
            console.log(rule);
            console.log(user);

            return next('/admin/order/index');

        } else {
            this.user = null;
            this.token = null;
            localStorage.removeItem('api-token');
            localStorage.removeItem('user');
            console.log('x8  else {');

            // return next('/auth/login');
        } */
        /* if (ability.includes(rule)) {
            return next();
        } else if (user.role == 'admin') {
            return next('/admin/order/index');
        } else if (user.role == 'admin_institution') {
            return next('/institusi/dashboard');
        } else if (user.role == 'mudabbir') {
            return next('/institusi/ustadz/dashboard');
        } else if (user.role == 'mudabbir_qaraa') {
            return next('/ustadz/mudabbir/uncorrected');
        } else {
            this.user = null;
            this.token = null;
            localStorage.removeItem('api-token');
            localStorage.removeItem('user');
            return next('/auth/login');
        } */
    }
    users() {
        if (localStorage.getItem('user')) {
            const user = JSON.parse(localStorage.getItem('user'));
            /* if (user.role == 'admin') {
                user.permission = 'admin';
            } else if (user.role == 'admin_institution' && user.educational_institution_id != null) {
                user.permission = 'institution';
            } else if (user.role == 'mudabbir' && user.educational_institution_id != null) {
                user.permission = 'mudabbir';
            } else if (user.role == 'mudabbir' && user.educational_institution_id == null) {
                user.permission = 'mudabbir_qaraa';
            } */
            user.permission = 'admin';
            this.user = user;
        }
        return this.user;
    }
}

export default new AuthService();
