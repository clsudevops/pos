<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <router-view></router-view>
                    
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        
        data() {
            return {
                
            }
        }
    }
</script>

<style>
    .v-select.searchable .dropdown-toggle {
        border-top: none;
        border-left: none;
        border-right: none;
    }
</style>