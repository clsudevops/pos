<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header clearfix">
                        <div class="form-inline float-left">
                            <div class="form-group pt-0 mr-2">
                                <input style="width:250px; margin-top: 0.4rem;" type="text" id="searchTransactionField" class="form-control" placeholder="Search Transactions">
                            </div>
                            <div class="form-group pt-0 mr-2">
                                <v-select v-model="selected" placeholder="Filter by Category" label="label" :options="options"></v-select>
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
                                <a href="/admin/transactions/create" class="btn btn-primary btn-raised mb-0">
                                    <i class="fas fa-plus-circle"></i> New Transaction
                                </a>
                            </div>
                            <div class="form-group">

                                <button type="button" class="btn btn-secondary btn-outline dropdown-toggle mb-0" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu" style="top">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card body">
                        <div class="table-responsive">
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
                                        <th scope="col">Transaction Id</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Amount</th>
                                        <th>Transaction Date</th>
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
                                        <td>0000123</td>
                                        <td>John Doe</td>
                                        <td>mark.otto@gmail.com</td>
                                        <td>April 15, 2018</td>
                                    </tr>
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
                                        <td>0001231</td>
                                        <td>Thornton</td>
                                        <td>₱3,100.00</td>
                                        <td>April 14, 2018</td>
                                    </tr>

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
                                        <td>021343</td>
                                        <td>Thornton James</td>
                                        <td>₱3,100.00</td>
                                        <td>April 14, 2018</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <pagination></pagination>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Pagination from '../../../components/pagination';

    export default {
        components: {

            Pagination
        },
        data() {
            return {
                selected: {
                    label: 'All',
                    value: null
                },
                options: [{
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
        }
    }
</script>

<style>
</style>