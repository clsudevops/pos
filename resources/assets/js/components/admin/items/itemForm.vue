<template>
    <v-container grid-list-md>
        <form id="" data-vv-scope="itemForm" @submit.prevent="submit('itemForm')">
            <v-layout row wrap justify-center>
                <v-flex xs6>
                    <v-text-field 
                        solo
                        :class="errors.collect('itemForm.code').length != 0 ? 'mb-3':''"
                        v-model="item.code" 
                        label="Code" 
                        data-vv-name="itemForm.code"
                        data-vv-as="Code"
                        v-validate="'required'"
                        :error-messages="errors.collect('itemForm.code')"></v-text-field>
                </v-flex>
                <v-flex xs6>
                    <v-text-field
                    solo
                    v-model="item.barcode"
                    v-validate="'required'"
                    data-vv-name="barcode"
                    data-vv-as="Barcode"
                    label="Barcode"
                    :error-messages="errors.collect('itemForm.barcode')"
                    :class="errors.collect('itemForm.barcode').length != 0 ? 'mb-3':''"
                    ></v-text-field>
                </v-flex>
                <v-flex xs12>
                    <v-text-field
                    v-model="item.name"
                    data-vv-name="name"
                    data-vv-as="Name"
                    v-validate="'required'"
                    :error-messages="errors.collect('itemForm.name')"
                    solo
                    name="name"
                    label="Name"
                    :class="errors.collect('itemForm.name').length != 0 ? 'mb-3':''"></v-text-field>
                </v-flex>
            </v-layout>
            <v-layout>
                <v-flex xs6>
                    <v-checkbox 
                    data-vv-name="beginning"
                    data-vv-as="Beginning value"
                    v-validate="'required'"
                    :error-messages="errors.collect('itemForm.beginning')"
                    :class="errors.collect('itemForm.beginning').length != 0 ? 'mb-3':''"
                    label="Beginning value" v-model="item.beginning"></v-checkbox>
                </v-flex>
                <v-flex xs6>
                    <v-checkbox 
                    data-vv-name="part_of_inventory"
                    data-vv-as="Part of inventory"
                    v-validate="'required'"
                    :error-messages="errors.collect('itemForm.part_of_inventory')"
                    :class="errors.collect('itemForm.part_of_inventory').length != 0 ? 'mb-3':''"
                    label="Part of Inventory Report" v-model="item.part_of_inventory"></v-checkbox>
                </v-flex>
            </v-layout>
            <v-layout row wrap justify-center>
                <v-flex xs4>
                    <v-text-field
                    v-model="item.minimum"
                    data-vv-name="minimum"
                    data-vv-as="Minimum"
                    v-validate="'required'"
                    :error-messages="errors.collect('itemForm.minimum')"
                    solo
                    name="minimum"
                    label="Minimum"
                    :class="errors.collect('itemForm.minimum').length != 0 ? 'mb-3':''"></v-text-field>
                </v-flex>
                <v-flex xs4>
                    <v-text-field
                    v-model="item.beginning_value"
                    data-vv-name="beginning_value"
                    data-vv-as="Beginning value"
                    v-validate="'required'"
                    :error-messages="errors.collect('itemForm.beginning_value')"
                    solo
                    name="beginning_value"
                    label="Beginning value"
                    :class="errors.collect('itemForm.beginning_value').length != 0 ? 'mb-3':''"></v-text-field>
                </v-flex>
                <v-flex xs4>
                    <v-text-field
                    v-model="item.stock_value"
                    data-vv-name="stock_value"
                    data-vv-as="Stock value"
                    v-validate="'required'"
                    :error-messages="errors.collect('itemForm.stock_value')"
                    solo
                    name="stock_value"
                    label="Stock value"
                    :class="errors.collect('itemForm.stock_value').length != 0 ? 'mb-3':''"></v-text-field>
                </v-flex>
            </v-layout>
            <v-layout>
                <v-flex xs6>
                    <v-text-field
                    v-model="item.unit"
                    data-vv-name="unit"
                    data-vv-as="Unit"
                    v-validate="'required'"
                    :error-messages="errors.collect('itemForm.unit')"
                    solo
                    name="unit"
                    label="Unit"
                    :class="errors.collect('itemForm.unit').length != 0 ? 'mb-3':''"
                    ></v-text-field>
                </v-flex>
                <v-flex xs6>
                    <v-text-field
                    v-model="item.packaging"
                    data-vv-name="packaging"
                    data-vv-as="Packaging"
                    v-validate="'required'"
                    :error-messages="errors.collect('itemForm.packaging')"
                    solo
                    name="packaging"
                    label="Packaging"
                    :class="errors.collect('itemForm.packaging').length != 0 ? 'mb-3':''"
                    ></v-text-field>
                </v-flex>
            </v-layout>
            <v-layout row wrap justify-center>
                <v-flex xs4>
                    <v-btn type="submit" color="success">
                        Save Item
                    </v-btn>
                </v-flex>
            </v-layout>
        </form>
    </v-container>
</template>

<script>
import { mapGetters } from 'vuex';
export default {
    computed: {
        ...mapGetters({item: 'ItemsModule/getItem'})
    },
    methods: {
        submit(scope) {
            this.$validator.validateAll(scope).then((result) => {
                console.log(result)
                console.log(this.errors.collect('itemForm.code'))
            });
        }
    }
}   
</script>

<style>

</style>
