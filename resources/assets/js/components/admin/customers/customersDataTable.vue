<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header clearfix">
                        <div class="form-inline float-left">
                            <div class="form-group pt-0 mr-2">
                                <input style="width:250px; margin-top: 0.4rem;" type="text" id="searchItemsField" class="form-control" placeholder="Search Items">
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
                                <a href="/admin/customers/create" class="btn btn-primary btn-raised mb-0">
                                    <i class="fas fa-plus-circle"></i> New Customer
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
                                        <i class="fas fa-upload"></i>&nbsp;Excel Import</a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-download"></i>&nbsp;Excel Export</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-times-circle"></i>&nbsp;Cleanup old Customers</a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-trash-alt"></i> &nbsp;Manage Deleted Customers</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card body table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">
                                    <div class="checkbox">
                                        <label>
                                        <input type="checkbox">
                                        <span class="check"></span>
                                        </label>
                                    </div>
                                </th>
                                <th scope="col" style="width:100px;">Action</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Email</th>
                                <th>Phone Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">
                                        <div class="checkbox">
                                        <label>
                                        <input type="checkbox">
                                        <span class="check"></span>
                                        </label>
                                    </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-raised btn-sm">Edit <i class="fas fa-edit"></i></button>
                                    </td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>mark.otto@gmail.com</td>
                                    <td>+63916465456</td>
                                </tr>
                                <tr>
                                    <td scope="row">
                                        <div class="checkbox">
                                        <label>
                                        <input type="checkbox">
                                        <span class="check"></span>
                                        </label>
                                    </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-raised btn-sm">Edit <i class="fas fa-edit"></i></button>
                                    </td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>jacob.thornton@gmail.com</td>
                                    <td>+63916465456</td>
                                </tr>

                                <tr>
                                    <td scope="row">
                                        <div class="checkbox">
                                            <label>
                                            <input type="checkbox">
                                            <span class="checkbox-decorator"><span class="check"></span></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-raised btn-sm">Edit <i class="fas fa-edit"></i></button>
                                    </td>
                                    <td>Larry</td>
                                    <td>Silva</td>
                                    <td>larry.silva@gmail.com</td>
                                    <td>+63916465456</td>
                                </tr>
                            </tbody>
                            </table>
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
        }
    }
</script>

<style>
    
</style>