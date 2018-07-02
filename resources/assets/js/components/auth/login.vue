<template>
    <div>
        <v-flex xs12>
            <p class="text-sm-center headline">Login</p>
            <v-divider class="mt-1"></v-divider>
        </v-flex>
        <v-flex v-if="error_msg != ''" xs12>
            <v-alert :value="true" type="error">
                {{ error_msg }}
            </v-alert>
        </v-flex>
        <v-form @submit.prevent="submit('loginForm')" data-vv-scope="loginForm">
            <v-flex xs12>
                <v-text-field
                    v-model="username"
                    prepend-icon="account_circle" 
                    class="" 
                    solo 
                    name="username" 
                    data-vv-name="username"
                    data-vv-as="username"
                    v-validate="'required'"
                    :error-messages="errors.collect('loginForm.username')"
                    :class="errors.collect('loginForm.username').length != 0 ? 'mb-3':''"
                    label="Username or Email"></v-text-field>

            </v-flex>
            <v-flex>
                <v-text-field 
                    v-model="password"
                    prepend-icon="vpn_key" 
                    solo 
                    class="" 
                    name="password" 
                    label="Password" 
                    data-vv-name="password"
                    data-vv-as="password"
                    v-validate="'required'"
                    :error-messages="errors.collect('loginForm.password')"
                    :class="errors.collect('loginForm.password').length != 0 ? 'mb-3':''"
                    type="password"></v-text-field>

            </v-flex>
            <v-flex xs12>

                <v-checkbox 
                v-model="remember_me" 
                label="Remember me" 
                type="checkbox" 
                name="remember"></v-checkbox>
            </v-flex>
            <!-- <v-flex xs12>
                <a style="color:#0366d6; font-weight: 400; text-transform:uppercase;" class="" href="{{ route('password.request') }}">
                    <small>{{ __('Forgot Your Password?') }}</small>
                </a>
            </v-flex> -->
            <v-flex xs12>
                <v-btn type="submit" color="primary" block>
                    <span v-if="!loading">Sign in</span>
                    <span v-else :disabled="loading ? true: false"><div class="loader"></div></span>
                </v-btn>
            </v-flex>
        </v-form>
    </div>
</template>

<script>
    export default {
        data: () => ({
            remember_me: false,
            username: '',
            password:'',
            error_msg: '',
            loading: false
        }),
        methods: {
            submit(scope) {
                this.$validator.validateAll(scope).then(response => {
                    if(response) {
                        let body = {
                            // grant_type: 'password',
                            // client_id: '2',
                            // client_secret: 'TiFxrXeN8ukVVg7ad3Ni70V1PG3s5Ec5FfAjx0tR',
                            login: this.username,
                            password: this.password,
                            // scope:''
                        };

                        this.loading = true;

                        return new Promise((resolve, reject) => {
                            axios.post('/login', body)
                            .then(response => {
                                console.log(response)
                                let data = response.data;
                                window.location = response.data.redirect_uri;
                                this.loading = false;
                                // Cookies.set('_pos.token', `${data.token_type} ${data.token}`, {
                                //     expires: data.expires_in,
                                //     domain: window.location.hostname
                                // });
                                // Cookies.set('_pos.refresh_token', data.token, {
                                //     expires: data.expires_in,
                                //     domain: window.location.hostname
                                // });

                                // window.location = window.location.protocol + "//" + window.location.host + '/admin/dashboard';
                            })
                            .catch(err => {
                                console.log(err)
                                this.error_msg = err.response.data.message;
                                this.loading = false;
                            })
                        }); 
                    }
                });
            }
        }
    }
</script>

<style>
</style>