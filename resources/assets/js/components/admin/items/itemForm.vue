<template>
    <div class="card">
        <div class="card-header clearfix">
            <div class="float-left">
                <legend >Item Details</legend>
            </div>
            <a href="/admin/items" class="btn btn-raised btn-primary float-right">
                <i class="fas fa-arrow-left"></i>&nbsp;Back to Item List
            </a>
        </div>
        <div class="card-body">
            <form action="">
                <h5>Basic Information</h5>
                <hr class="my-1">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="itemName" class="bmd-label-floating">Item Name</label>
                            <input type="text" class="form-control" id="itemName">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group pt-3">
                            <!-- <v-select v-model="selected" placeholder="Category" label="label" :options="options"></v-select> -->
                            <select class="custom-select">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="costPrice" class="bmd-label-floating">Cost Price</label>
                            <input type="text" class="form-control" id="costPrice">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sellingPrice" class="bmd-label-floating">Selling Price</label>
                            <input type="text" class="form-control" id="sellingPrice">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="quantity" class="bmd-label-floating">Quantity</label>
                            <input type="number" class="form-control" id="quantity">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="locationPrice" class="bmd-label-floating">Location Price</label>
                            <input type="text" class="form-control" id="locationPrice">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- <label for="itemDescription" class="bmd-label-floating">Description</label>
                            <br> -->
                            <div class="input-group-prepend">
                                <button @click.prevent="$root.openFile('itemDescription')" class="mb-0 btn btn-raised btn-primary">
                                    <i class="fas fa-folder-open"></i>&nbsp;Choose File
                                </button>
                                <input  type="text" id="inputFile" class="form-control ml-1" disabled>
                            </div>
                            <input @change="$root.setInputFile('itemDescription')" type="file" accept="image/*" style="display:none;" id="itemDescription">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-raised btn-success">Save Item</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            selected: null,
            file:null,
            options: [
                'Category 1', 'Category 2'
            ],
        }
    },
    methods: {
        
    }
}
</script>

<style>

</style>
