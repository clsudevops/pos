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
                                <button class="btn btn-info btn-raised mb-0">
                                    <i class="fas fa-search"></i>
                                    Search
                                </button>

                            </div>
                        </div>

                        <div class="form-inline float-right">
                            <div class="form-group mr-1">
                                <button class="btn btn-primary btn-raised mb-0">
                                    <i class="fas fa-plus-circle"></i> New Item
                                </button>
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
                                        <th scope="col">Item Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Category</th>
                                        <th>Cost Price</th>
                                        <th>Selling Price</th>
                                        <th>Quantity</th>
                                        <th>Location Cost Price</th>
                                        <th>Description</th>
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
                                        <td>1000</td>
                                        <td>Crop Giant</td>
                                        <td>Fertilizer</td>
                                        <td>₱399.00</td>
                                        <td>₱499.00</td>
                                        <td>100</td>
                                        <td>₱499.00</td>
                                        <td>
                                            <img src="https://ph-test-11.slatic.net/p/3/crop-giant-15-15-30-1kg-1730-96044411-28a9c792e2f2330f7cd9462f2748cfcb-catalog_233.jpg"
                                                height="45" width="45" alt="">
                                        </td>
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
                                        <td>1001</td>
                                        <td>
                                            Spitfire 480SL Glyphosate Herbicide</td>
                                        <td>Pesticide</td>
                                        <td>₱3,100.00</td>
                                        <td>₱3,150.00</td>
                                        <td>120</td>
                                        <td>₱3,150.00</td>
                                        <td>
                                            <img src="https://ph-test-11.slatic.net/p/3/spitfire-480sl-glyphosate-herbicide-1-gallon-6763-52097958-7ae7c5b9af58605a6c4ff7439adb68dc-catalog_233.jpg"
                                                height="45" width="45" alt="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td scope="row">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-raised btn-sm">Edit
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </td>
                                        <td>1000</td>
                                        <td>Crop Giant</td>
                                        <td>Fertilizer</td>
                                        <td>₱399.00</td>
                                        <td>₱499.00</td>
                                        <td>100</td>
                                        <td>₱499.00</td>
                                        <td>
                                            <img src="https://ph-test-11.slatic.net/p/3/crop-giant-15-15-30-1kg-1730-96044411-28a9c792e2f2330f7cd9462f2748cfcb-catalog_233.jpg"
                                                height="45" width="45" alt="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td scope="row">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-raised btn-sm">Edit
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </td>
                                        <td>1001</td>
                                        <td>
                                            Spitfire 480SL Glyphosate Herbicide</td>
                                        <td>Pesticide</td>
                                        <td>₱3,100.00</td>
                                        <td>₱3,150.00</td>
                                        <td>120</td>
                                        <td>₱3,150.00</td>
                                        <td>
                                            <img src="https://ph-test-11.slatic.net/p/3/spitfire-480sl-glyphosate-herbicide-1-gallon-6763-52097958-7ae7c5b9af58605a6c4ff7439adb68dc-catalog_233.jpg"
                                                height="45" width="45" alt="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td scope="row">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-raised btn-sm">Edit
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </td>
                                        <td>1000</td>
                                        <td>Crop Giant</td>
                                        <td>Fertilizer</td>
                                        <td>₱399.00</td>
                                        <td>₱499.00</td>
                                        <td>100</td>
                                        <td>₱499.00</td>
                                        <td>
                                            <img src="https://ph-test-11.slatic.net/p/3/crop-giant-15-15-30-1kg-1730-96044411-28a9c792e2f2330f7cd9462f2748cfcb-catalog_233.jpg"
                                                height="45" width="45" alt="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td scope="row">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-raised btn-sm">Edit
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </td>
                                        <td>1001</td>
                                        <td>
                                            Spitfire 480SL Glyphosate Herbicide</td>
                                        <td>Pesticide</td>
                                        <td>₱3,100.00</td>
                                        <td>₱3,150.00</td>
                                        <td>120</td>
                                        <td>₱3,150.00</td>
                                        <td>
                                            <img src="https://ph-test-11.slatic.net/p/3/spitfire-480sl-glyphosate-herbicide-1-gallon-6763-52097958-7ae7c5b9af58605a6c4ff7439adb68dc-catalog_233.jpg"
                                                height="45" width="45" alt="">
                                        </td>
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
    .v-select.searchable .dropdown-toggle {
        border-top: none;
        border-left: none;
        border-right: none;
    }
</style>