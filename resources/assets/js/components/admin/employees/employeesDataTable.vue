<template>
    <div class="card">
        <div class="card-header clearfix">
            <div class="form-inline float-left">
                <div class="form-group pt-0 mr-2">
                    <input style="width:250px; margin-top: 0.4rem;" type="text" id="searchItemsField" class="form-control" placeholder="Search Employees">
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
                    <button class="btn btn-info btn-raised mb-0">
                        <i class="fas fa-search"></i>
                        Search
                    </button>

                </div>
            </div>

            <div class="form-inline float-right">
                <div class="form-group mr-1">
                    <router-link to="/employees/create" class="btn btn-primary btn-raised mb-0">
                        <i class="fas fa-plus-circle"></i> New Employee
                    </router-link>
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
                            <i class="fas fa-times-circle"></i>&nbsp;Cleanup old Suppliers</a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-trash-alt"></i> &nbsp;Manage Deleted Suppliers</a>
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
                        <th scope="col">Person ID</th>
                        <th scope="col">Last Name</th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th></th>
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
                        <td>Simon</td>
                        <td>John</td>
                        <td>john.simon@gmail.com</td>
                        <td>0912331423423</td>
                        <td>
                            <img src="/images/supplier_avatar.png" alt="" height="45" width="50">
                        </td>
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