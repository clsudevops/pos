<template>
    <v-container grid-list-md>
        <v-layout row wrap>
            <v-flex xs12>
                <v-layout row wrap>
                    <v-flex xs12 md4>
                        <v-text-field
                            solo
                            label="Seach Expenses"
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
                            New Expense
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
                    :items="expenses"
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
                    <td>{{ props.item.id }}</td>
                    <td>{{ props.item.type }}</td>
                    <td>{{ props.item.description }}</td>
                    <td>{{ props.item.category }}</td>
                    <td>{{ props.item.date }}</td>
                    <td>{{ props.item.amount }}</td>
                    <td>{{ props.item.tax }}</td>
                    <td>{{ props.item.recipient }}</td>
                    <td>{{ props.item.approved_by }}</td>
                    <td class="justify-center layout px-0">
                        <v-btn icon class="mx-0" @click="editexpense(props.item)">
                            <v-icon color="teal">edit</v-icon>
                        </v-btn>
                        <v-btn icon class="mx-0" @click="deleteexpense(props.item)">
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
                        <h1 class="headline">Expense Details</h1>
                    </v-card-title>
                    <v-card-text>
                       <v-container grid-list-md>
                            <v-layout row wrap justify-center>
                                <v-flex xs12>
                                    <v-text-field solo v-model="expense.type" label="First name"></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field solo v-model="expense.description" label="Last name"></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field solo v-model="expense.category" label="Email"></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field solo v-model="expense.date" label="Phone number"></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field solo v-model="expense.amount" label="Complete address"></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field solo v-model="expense.tax" label="Company name"></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field solo v-model="expense.recipient" label="Store Balance"></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field multi-line solo v-model="expense.approved_by" label="Description"></v-text-field>
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
            expense: 'ExpensesModule/getExpense'
        })
    },
    data () {
      return {
        dialog: false,
        search: '',
        selected: [],
        loading:false,
        headers: [
          { text: 'ID', value: 'id' },
          { text: 'Type', value: 'type',  },
          { text: 'Description', value: 'description' },
          { text: 'Category', value: 'category' },
          { text: 'Date', value: 'date' },
          { text: 'Amount', value: 'amount' },
          { text: 'Tax', value: 'tax' },
          { text: 'Recipient', value: 'recipient' },
          { text: 'Approved By', value: 'approved_by' },
          { text: 'Actions', value: 'action', sortable:false }
        ],
        expenses: [
          {
            value: false,
            id: '1233',
            type: 'Gas Expense',
            description: 'Lorem ipsum',
            category: 'Category Expense',
            date: 'April 15, 2018',
            amount: '₱2000.00',
            tax: '₱150.00',
            recipient: 'Doe, John',
            approved_by:'Babbage, Charles'
          },
          {
            value: false,
            id: '1233',
            type: 'Gas Expense',
            description: 'Lorem ipsum',
            category: 'Category Expense',
            date: 'April 15, 2018',
            amount: '₱2000.00',
            tax: '₱150.00',
            recipient: 'Doe, John',
            approved_by:'Babbage, Charles'
          },
          {
            value: false,
            id: '1233',
            type: 'Gas Expense',
            description: 'Lorem ipsum',
            category: 'Category Expense',
            date: 'April 15, 2018',
            amount: '₱2000.00',
            tax: '₱150.00',
            recipient: 'Doe, John',
            approved_by:'Babbage, Charles'
          },
          {
            value: false,
            id: '1233',
            type: 'Gas Expense',
            description: 'Lorem ipsum',
            category: 'Category Expense',
            date: 'April 15, 2018',
            amount: '₱2000.00',
            tax: '₱150.00',
            recipient: 'Doe, John',
            approved_by:'Babbage, Charles'
          },
          {
            value: false,
            id: '1233',
            type: 'Gas Expense',
            description: 'Lorem ipsum',
            category: 'Category Expense',
            date: 'April 15, 2018',
            amount: '₱2000.00',
            tax: '₱150.00',
            recipient: 'Doe, John',
            approved_by:'Babbage, Charles'
          },
          {
            value: false,
            id: '1233',
            type: 'Gas Expense',
            description: 'Lorem ipsum',
            category: 'Category Expense',
            date: 'April 15, 2018',
            amount: '₱2000.00',
            tax: '₱150.00',
            recipient: 'Doe, John',
            approved_by:'Babbage, Charles'
          },
          {
            value: false,
            id: '1233',
            type: 'Gas Expense',
            description: 'Lorem ipsum',
            category: 'Category Expense',
            date: 'April 15, 2018',
            amount: '₱2000.00',
            tax: '₱150.00',
            recipient: 'Doe, John',
            approved_by:'Babbage, Charles'
          },
          
        ]
      }
    },
    methods: {
        editexpense(item) {

        },
        deleteexpense(item) {

        }
    }
  }
</script>