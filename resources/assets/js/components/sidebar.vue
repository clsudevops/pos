<template>
  
    <div class="sidebar">
        <ul class="sidebar-nav">
            <li><router-link to="/dashboard"> <i class="fas fa-tachometer-alt"></i>&nbsp;Dashboard </router-link></li>
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
            <li><router-link to="/gift-cards"><i class="fas fa-gift"></i>&nbsp;Gift Cards </router-link></li>
        </ul>
    </div>

</template>

<script>
    export default {

    }
</script>

<style>
    .ion {
        font-size: 14px !important;
    }
</style>
