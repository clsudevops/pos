<template>
    <v-container grid-list-md>
        <v-layout row wrap>
            <v-flex xs12>
                <v-layout row wrap>
                    <v-flex xs12 md4>
                        <v-text-field
                            solo
                            label="Seach Transactions"
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
                            New Transaction
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
                    :items="desserts"
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
                    <td>{{ props.item.name }}</td>
                    <td class="text-xs-right">{{ props.item.calories }}</td>
                    <td class="text-xs-right">{{ props.item.fat }}</td>
                    <td class="text-xs-right">{{ props.item.carbs }}</td>
                    <td class="text-xs-right">{{ props.item.protein }}</td>
                    <td class="text-xs-right">{{ props.item.iron }}</td>
                    <td class="justify-center layout px-0">
                        <v-btn icon class="mx-0" @click="editItem(props.item)">
                            <v-icon color="teal">edit</v-icon>
                        </v-btn>
                        <v-btn icon class="mx-0" @click="deleteItem(props.item)">
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
                        <h1 class="headline">Item Details</h1>
                    </v-card-title>
                    <v-card-text>
                       <v-container grid-list-md>
                            <v-layout row wrap justify-center>
                                <v-flex xs12>
                                    <v-text-field solo v-model="customer.name" label="Dessert name"></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field solo v-model="customer.calories" label="Calories"></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field solo v-model="customer.fat" label="Fat (g)"></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field solo v-model="customer.carbs" label="Carbs (g)"></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field solo v-model="customer.protein" label="Protein (g)"></v-text-field>
                                </v-flex>
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
            customer: 'CustomersModule/getCustomer'
        })
    },
    data () {
      return {
        dialog: false,
        search: '',
        selected: [],
        loading:false,
        headers: [
          {
            text: 'Dessert (100g serving)',
            align: 'left',
            sortable: false,
            value: 'name'
          },
          { text: 'Calories', value: 'calories' },
          { text: 'Fat (g)', value: 'fat' },
          { text: 'Carbs (g)', value: 'carbs' },
          { text: 'Protein (g)', value: 'protein' },
          { text: 'Iron (%)', value: 'iron' },
          { text: 'Actions', value: 'action', sortable: false }
        ],
        desserts: [
          {
            value: false,
            name: 'Frozen Yogurt',
            calories: 159,
            fat: 6.0,
            carbs: 24,
            protein: 4.0,
            iron: '1%'
          },
          {
            value: false,
            name: 'Ice cream sandwich',
            calories: 237,
            fat: 9.0,
            carbs: 37,
            protein: 4.3,
            iron: '1%'
          },
          {
            value: false,
            name: 'Eclair',
            calories: 262,
            fat: 16.0,
            carbs: 23,
            protein: 6.0,
            iron: '7%'
          },
          {
            value: false,
            name: 'Cupcake',
            calories: 305,
            fat: 3.7,
            carbs: 67,
            protein: 4.3,
            iron: '8%'
          },
          {
            value: false,
            name: 'Gingerbread',
            calories: 356,
            fat: 16.0,
            carbs: 49,
            protein: 3.9,
            iron: '16%'
          },
          {
            value: false,
            name: 'Jelly bean',
            calories: 375,
            fat: 0.0,
            carbs: 94,
            protein: 0.0,
            iron: '0%'
          },
          {
            value: false,
            name: 'Lollipop',
            calories: 392,
            fat: 0.2,
            carbs: 98,
            protein: 0,
            iron: '2%'
          },
          {
            value: false,
            name: 'Honeycomb',
            calories: 408,
            fat: 3.2,
            carbs: 87,
            protein: 6.5,
            iron: '45%'
          },
          {
            value: false,
            name: 'Donut',
            calories: 452,
            fat: 25.0,
            carbs: 51,
            protein: 4.9,
            iron: '22%'
          },
          {
            value: false,
            name: 'KitKat',
            calories: 518,
            fat: 26.0,
            carbs: 65,
            protein: 7,
            iron: '6%'
          }
        ]
      }
    },
    methods: {
        editItem(item) {

        },
        deleteItem(item) {

        }
    }
  }
</script>