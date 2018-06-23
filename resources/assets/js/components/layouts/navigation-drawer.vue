<template>
    <v-navigation-drawer 
        stateless
        style="margin-top: 4.65rem;" 
        :value="sidenavIsVisible" 
        fixed 
        dark
        app>
        <!-- <v-toolbar flat>
            <v-list class="pa-0">
                <v-list-tile avatar>
                    <v-list-tile-avatar>
                        <img src="https://randomuser.me/api/portraits/men/85.jpg">
                    </v-list-tile-avatar>
                    <v-list-tile-content>
                        <v-list-tile-title>John Leider</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list>
        </v-toolbar> -->
        <v-list>
            <v-list-tile v-for="(item, i) in items" :key="i" :href="item.link">
                <v-list-tile-action>
                    <v-icon small>{{ item.icon }}</v-icon>
                </v-list-tile-action>
                <v-list-tile-title>{{ item.text }}</v-list-tile-title>
            </v-list-tile>
            <v-list-group prepend-icon="account_circle" value="true">
                <v-list-tile slot="activator">
                    <v-list-tile-title>Users</v-list-tile-title>
                </v-list-tile>
                <v-list-group sub-group no-action value="true">
                    <v-list-tile slot="activator">
                        <v-list-tile-title>Admin</v-list-tile-title>
                    </v-list-tile>
                    <v-list-tile v-for="(admin, i) in admins" :key="i" @click="">
                        <v-list-tile-title v-text="admin[0]"></v-list-tile-title>
                        <v-list-tile-action>
                            <v-icon v-text="admin[1]"></v-icon>
                        </v-list-tile-action>
                    </v-list-tile>
                </v-list-group>
                
            </v-list-group>
        </v-list>
    </v-navigation-drawer>
</template>

<script>
    import { mapGetters } from 'vuex';
    
    export default {
        computed: {
            ...mapGetters({
                sidenavIsVisible: 'StylesModule/getSidenavState'
            })
        },
        data: () => ({
            items: [
                {
                    text: 'Dashboard',
                    link: '/admin/dashboard',
                    icon: 'fas fa-tachometer-alt'
                },
                {
                    text: 'Customers',
                    link: '/admin/customers',
                    icon: 'fas fa-users'
                },
                {
                    text: 'Items',
                    link: '/admin/items',
                    icon: 'fas fa-cube'
                },
                {
                    text: 'Suppliers',
                    link: '/admin/suppliers',
                    icon: 'fas fa-dolly-flatbed'
                },
                {
                    text: 'Transactions',
                    link: '/admin/transactions',
                    icon: 'ion ion-clipboard'
                },
                {
                    text: 'Price rules',
                    link: '/admin/price-rules',
                    icon: 'fas fa-tags'
                },
                {
                    text: 'Reports',
                    link: '/admin/reports',
                    icon: 'fas fa-chart-line'
                },
                {
                    text: 'Sales',
                    link: '/admin/sales',
                    icon: 'fas fa-hand-holding-usd'
                },
                {
                    text: 'Expenses',
                    link: '/admin/expenses',
                    icon: 'fas fa-dollar-sign'
                },
                {
                    text: 'Employees',
                    link: '/admin/employees',
                    icon: 'fas fa-users'
                },
                {
                    text: 'Store configuration',
                    link: '/admin/store',
                    icon: 'fas fa-cogs'
                },
                {
                    text: 'Locations',
                    link: '/admin/locations',
                    icon: 'fas fa-map-marker-alt'
                },
                {
                    text: 'Gift Cards',
                    link: '/admin/gift-cards',
                    icon: 'fas fa-gift'
                },
            ],
            admins: [
                ['Management', 'people_outline'],
                ['Settings', 'settings']
            ],
        })
    }
</script>

<style>
</style>