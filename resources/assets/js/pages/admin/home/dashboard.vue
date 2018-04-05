<template>
    <div>
        <div class="row cards-box">
                <div class="col-md-3">
                    <info-card 
                        data="80"
                        data-label="Total Sales"
                        icon="fas fa-hand-holding-usd"
                        :icon-class="'bg-primary'"></info-card>
                </div>
                <div class="col-md-3">
                    <info-card 
                        data="102"
                        data-label="Total Customers"
                        icon="fas fa-users"
                        :icon-class="'bg-success'"></info-card>
                </div>
                <div class="col-md-3">
                    <info-card 
                        data="1000"
                        data-label="Total Items"
                        icon="fas fa-cube"
                        :icon-class="'bg-info'"></info-card>
                </div>
                <div class="col-md-3">
                    <info-card 
                        data="900"
                        data-label="Total Item Kits"
                        icon="fas fa-cubes"
                        :icon-class="'bg-warning'"></info-card>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Sales Chart</h5>
                        </div>
                        <div class="card-body">
                            <sales-chart-box></sales-chart-box>
                        </div>
                    </div>            
                </div>
            </div>
    </div>
</template>

<script>

export default {

}
</script>

<style>

</style>
