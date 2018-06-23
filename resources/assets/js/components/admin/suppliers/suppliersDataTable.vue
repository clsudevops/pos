<template>
    <v-container grid-list-md>
        <v-layout row wrap>
            <v-flex xs12>
                <v-layout row wrap>
                    <v-flex xs12 md4>
                        <v-text-field
                            solo
                            label="Seach Suppliers"
                            prepend-icon="search"                            
                        ></v-text-field>
                    </v-flex>
                    <v-flex xs12 md1>
                        <v-btn block color="success" large class="ma-0">
                            Search
                        </v-btn>
                    </v-flex>
                    <v-spacer></v-spacer>
                    <div class="pa-1">
                        <v-btn @click="dialog = true" color="success" class="ma-0" large>
                            New Supplier
                        </v-btn>
                        <v-menu offset-y>
                            <v-btn slot="activator" class="ma-0" large>
                                <v-icon>more_horiz</v-icon>
                            </v-btn>
                            <v-list>
                                <v-list-tile href="">
                                    <v-list-tile-title>Excel Import</v-list-tile-title>
                                </v-list-tile>
                                <v-list-tile href="">
                                    <v-list-tile-title>Excel Export</v-list-tile-title>
                                </v-list-tile>
                            </v-list>
                        </v-menu>
                    </div>
                </v-layout>
            </v-flex>
            <v-flex xs12>
                <v-data-table
                    :headers="headers"
                    :items="customers"
                    :search="search"
                    v-model="selected"
                    item-key="name"
                    select-all
                    class="elevation-1"
                    
                >
                    <template slot="headerCell" slot-scope="props">
                    <v-tooltip bottom>
                        <span slot="activator">
                        {{ props.header.text }}
                        </span>
                        <span>
                        {{ props.header.text }}
                        </span>
                    </v-tooltip>
                    </template>
                    <template slot="items" slot-scope="props">
                    <td>
                        <v-checkbox
                        v-model="props.selected"
                        primary
                        hide-details
                        ></v-checkbox>
                    </td>
                     <td>{{ props.item.company }}</td>
                    <td>{{ props.item.first_name }}</td>
                    <td>{{ props.item.last_name }}</td>
                    <td>{{ props.item.email }}</td>
                    <td>{{ props.item.phone }}</td>
                    <td class="justify-center layout px-0">
                        <v-btn icon class="mx-0" @click="editSupplier(props.item)">
                            <v-icon color="teal">edit</v-icon>
                        </v-btn>
                        <v-btn icon class="mx-0" @click="deleteSupplier(props.item)">
                            <v-icon color="error">delete</v-icon>
                        </v-btn>
                    </td>
                    </template>
                </v-data-table>
            </v-flex>
        </v-layout>
        <!-- modal -->
        <v-layout row justify-center>
            <v-dialog v-model="dialog" persistent max-width="500px">
                <v-card>
                    <v-card-title>
                        <h1 class="headline">Supplier Details</h1>
                    </v-card-title>
                    <v-card-text>
                       <v-container grid-list-md>
                            <v-layout row wrap justify-center>
                                <v-flex xs12>
                                    <v-text-field solo v-model="supplier.company" label="Company name"></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field solo v-model="supplier.first_name" label="First name"></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field solo v-model="supplier.last_name" label="Last name"></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field solo v-model="supplier.email" label="Email"></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field solo v-model="supplier.phone" label="Phone number"></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field solo v-model="supplier.address" label="Complete address"></v-text-field>
                                </v-flex>
                                
                                <!-- <v-flex xs12>
                                    <v-text-field multi-line solo v-model="supplier.description" label="Description"></v-text-field>
                                </v-flex> -->
                                <v-flex xs6>
                                    <v-btn
                                        color="success"
                                        block>
                                        Submit
                                    </v-btn>
                                </v-flex>
                                <v-flex xs6>
                                    <v-btn
                                        @click="dialog = false"
                                        block>
                                        Cancel
                                    </v-btn>
                                </v-flex>
                            </v-layout>
                        </v-container>
                    </v-card-text>
                </v-card>
            </v-dialog>
        </v-layout>
    </v-container>
</template>
<script>
    import { mapGetters } from 'vuex'
    export default {
    computed: {
        ...mapGetters({
            supplier: 'SuppliersModule/getSupplier'
        })
    },
    data () {
      return {
        dialog: false,
        search: '',
        selected: [],
        loading:false,
        headers: [
            // { text: 'Supp Id', value: 'id'},
            { text: 'Company name', value: 'company' },
            { text: 'First name', value: 'first_name' },
            { text: 'Last name', value: 'last_name',  },
            { text: 'Email', value: 'email' },
            { text: 'Phone no.', value: 'phone' },
            { text: 'Actions', value: 'action', sortable:false }
        ],
        customers: [
          {
            value: false,
            first_name: 'Marvin',
            last_name: 'Tate',
            email: 'MarvinMTate@dayrep.com',
            phone: '928-719-5837',
            company: 'Childs Restaurants'
          },
          {
            value: false,
            first_name: 'Marvin',
            last_name: 'Tate',
            email: 'MarvinMTate@dayrep.com',
            phone: '928-719-5837',
            company: 'Regional Book Store'
          },
          {
            value: false,
            first_name: 'Ethel',
            last_name: 'Gonzales',
            email: 'EthelGGonzalez@jourrapide.com',
            phone: '407-856-2791',
            company: 'Micro Design'
          },
          {
            value: false,
            first_name: 'Leslie',
            last_name: 'Dosch',
            email: 'LeslieTDosch@teleworm.us',
            phone: '321-615-0726',
            company: 'Tech Revo'
          },
          {
            value: false,
            first_name: 'Marvin',
            last_name: 'Tate',
            email: 'MarvinMTate@dayrep.com',
            phone: '928-719-5837',
            company: 'Childs Restaurants'
          },
          {
            value: false,
            first_name: 'Marvin',
            last_name: 'Tate',
            email: 'MarvinMTate@dayrep.com',
            phone: '928-719-5837',
            company: 'Regional Book Store'
          },
          {
            value: false,
            first_name: 'Ethel',
            last_name: 'Gonzales',
            email: 'EthelGGonzalez@jourrapide.com',
            phone: '407-856-2791',
            company: 'Micro Design'
          },
          {
            value: false,
            first_name: 'Leslie',
            last_name: 'Dosch',
            email: 'LeslieTDosch@teleworm.us',
            phone: '321-615-0726',
            company: 'Tech Revo'
          },
          {
            value: false,
            first_name: 'Marvin',
            last_name: 'Tate',
            email: 'MarvinMTate@dayrep.com',
            phone: '928-719-5837',
            company: 'Childs Restaurants'
          },
          {
            value: false,
            first_name: 'Marvin',
            last_name: 'Tate',
            email: 'MarvinMTate@dayrep.com',
            phone: '928-719-5837',
            company: 'Regional Book Store'
          },
          {
            value: false,
            first_name: 'Ethel',
            last_name: 'Gonzales',
            email: 'EthelGGonzalez@jourrapide.com',
            phone: '407-856-2791',
            company: 'Micro Design'
          },
          {
            value: false,
            first_name: 'Leslie',
            last_name: 'Dosch',
            email: 'LeslieTDosch@teleworm.us',
            phone: '321-615-0726',
            company: 'Tech Revo'
          },
        ]
      }
    },
    methods: {
        editSupplier(item) {

        },
        deleteSupplier(item) {

        }
    }
  }
</script>