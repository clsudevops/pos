<template>
    <v-container grid-list-md>
        <v-layout row wrap class="cards-box">
            <v-flex xs12 sm6 md3 class="col-md-3">
                <info-card data="80" data-label="Total Sales" icon="fas fa-hand-holding-usd" :icon-class="'bg-primary'"></info-card>
            </v-flex>
            <v-flex xs12 sm6 md3>
                <info-card data="102" data-label="Total Customers" icon="fas fa-users" :icon-class="'bg-success'"></info-card>
            </v-flex>
            <v-flex xs12 sm6 md3>
                <info-card data="1000" data-label="Total Items" icon="fas fa-cube" :icon-class="'bg-info'"></info-card>
            </v-flex>
            <v-flex xs12 sm6 md3>
                <info-card data="900" data-label="Total Item Kits" icon="fas fa-cubes" :icon-class="'bg-warning'"></info-card>
            </v-flex>
        </v-layout>
        <v-layout row wrap>
            <v-flex xs12>
                <v-card class="pa-3">
                    <h5 class="mb-3 headline">Sales Chart</h5>
                    
                    <sales-chart-box></sales-chart-box>
                    
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>

    export default {

    }
</script>

<style>
</style>