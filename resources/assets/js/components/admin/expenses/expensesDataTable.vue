<template>
    <div class="card">
        <div class="card-header clearfix">
            <div class="form-inline float-left">
                <div class="form-group pt-0 mr-2">
                    <input style="width:250px; margin-top: 0.4rem;" type="text" id="searchItemsField" class="form-control" placeholder="Search Expenses">
                </div>
                <div class="form-group pt-0 mr-2">
                    <v-select v-model="selected" placeholder="Filter by Category" label="label" :options="options"></v-select>
                    <!-- <select class="custom-select">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select> -->
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-raised mb-0">
                        <i class="fas fa-search"></i>
                        Search
                    </button>

                </div>
            </div>

            <div class="form-inline float-right">
                <div class="form-group mr-1">
                    <a href="/admin/expenses/create" class="btn btn-primary btn-raised mb-0">
                        <i class="fas fa-plus-circle"></i> New Expense
                    </a>
                </div>
                <div class="form-group">

                    <button type="button" class="btn btn-secondary btn-outline dropdown-toggle mb-0" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                    <div class="dropdown-menu" style="top">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-upload"></i>&nbsp;Manage Deleted Expense</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="card body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    <span class="checkbox-decorator">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </th>
                        <th scope="col" style="width:100px;">Action</th>
                        <th>Id</th>
                        <th scope="col">Type</th>
                        <th scope="col">Description</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Tax</th>
                        <th>Recipient</th>
                        <th>Approved By</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    <span class="checkbox-decorator">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn btn-raised btn-sm">Edit
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                        <td>1233</td>
                        <td>Gas Expense</td>
                        <td>Lorem ipsum</td>
                        <td>Sample Category Expense</td>
                        <td>April 15, 2018</td>
                        <td>₱2000.00</td>
                        <td>₱150.00</td>
                        <td>Doe, John</td>
                        <td>Babbage, Charles</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <pagination></pagination>
        </div>
    </div>
</template>

<script>
    import Pagination from '../../../components/pagination'

    export default {
        data() {
            return {
                selected: { label: 'All', value: null },
                options: [
                    {
                        label: 'All',
                        value: null
                    },
                    {
                        label: 'Item Id',
                        value: 'item_id'
                    },
                    {
                        label: 'Item Name',
                        value: 'item_name'
                    },
                    {
                        label: 'Quantity',
                        value: 'quantity'
                    },

                ]
            }
        },
        components: {
            Pagination
        }
    }
</script>

<style>
</style>