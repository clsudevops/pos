<template>
  
    <div class="sidebar">
        <ul class="sidebar-nav">
            <li><a :class="isActiveLink('/admin/dashboard')" href="/admin/dashboard"> <i class="fas fa-tachometer-alt"></i>&nbsp;Dashboard </a></li>
            <li><a :class="isActiveLink('/admin/customers')" href="/admin/customers"> <i class="fas fa-users"></i>&nbsp;Customers </a></li>
            <li><a :class="isActiveLink('/admin/items')" href="/admin/items"> <i class="fas fa-cube"></i>&nbsp;Items </a></li>
            <li><a :class="isActiveLink('/admin/transactions')" href="/admin/transactions"> <i class="ion ion-clipboard"></i>&nbsp;Transactions </a></li>
            <li><a :class="isActiveLink('/admin/price-rules')" href="/admin/price-rules"> <i class="fas fa-tags"></i>&nbsp;Price Rules </a></li>
            <li><a :class="isActiveLink('/admin/suppliers')" href="/admin/suppliers"> <i class="fas fa-dolly-flatbed"></i>&nbsp;Suppliers </a></li>
            <li><a :class="isActiveLink('/admin/reports')" href="/admin/reports"> <i class="fas fa-chart-line"></i>&nbsp;Reports </a></li>
            <li><a :class="isActiveLink('/admin/sales')" href="/admin/sales"> <i class="fas fa-hand-holding-usd"></i>&nbsp;Sales </a></li>
            <li><a :class="isActiveLink('/admin/expenses')" href="/admin/expenses"> <i class="fas fa-dollar-sign"></i>&nbsp;Expenses </a></li>
            <li><a :class="isActiveLink('/admin/employees')" href="/admin/employees"> <i class="fas fa-users"></i>&nbsp;Employees</a>  </li>
            <li><a :class="isActiveLink('/admin/store')" href="/admin/store"> <i class="fas fa-cogs"></i>&nbsp;Store Config </a></li>
            <li><a :class="isActiveLink('/admin/locations')" href="/admin/locations"> <i class="fas fa-map-marker-alt"></i>&nbsp;Locations </a></li>
            <li><a :class="isActiveLink('/admin/gift-cards')" href="/admin/gift-cards"><i class="fas fa-gift"></i>&nbsp;Gift Cards </a></li>
            <!-- <li><router-link to="/dashboard"> <i class="fas fa-tachometer-alt"></i>&nbsp;Dashboard </router-link></li>
            <li><router-link to="/customers"> <i class="fas fa-users"></i>&nbsp;Customers </router-link></li>
            <li><router-link to="/items"> <i class="fas fa-cube"></i>&nbsp;Items </router-link></li>
            <li><router-link to="/transactions"> <i class="ion ion-clipboard"></i>&nbsp;Transactions </router-link></li>
            <li><router-link to="/price-rules"> <i class="fas fa-tags"></i>&nbsp;Price Rules </router-link></li>
            <li><router-link to="/suppliers"> <i class="fas fa-dolly-flatbed"></i>&nbsp;Suppliers </router-link></li>
            <li><router-link to="/reports"> <i class="fas fa-chart-line"></i>&nbsp;Reports </router-link></li>
            <li><router-link to="/sales"> <i class="fas fa-hand-holding-usd"></i>&nbsp;Sales </router-link></li>
            <li><router-link to="/expenses"> <i class="fas fa-dollar-sign"></i>&nbsp;Expenses </router-link></li>
            <li><router-link to="/employees"> <i class="fas fa-users"></i>&nbsp;Employees</router-link>  </li>
            <li><router-link to="/stores"> <i class="fas fa-cogs"></i>&nbsp;Store Config </router-link></li>
            <li><router-link to="/locations"> <i class="fas fa-map-marker-alt"></i>&nbsp;Locations </router-link></li>
            <li><router-link to="/gift-cards"><i class="fas fa-gift"></i>&nbsp;Gift Cards </router-link></li> -->
        </ul>
    </div>

</template>

<script>
    export default {
        created() {
            
        },
        methods: {
            isActiveLink(link) {
                let path = window.location.pathname;
                
                if(link == path){
                    return "active";
                }
                
            }
        }
    }
</script>

<style>
    .ion {
        font-size: 14px !important;
    }
</style>
