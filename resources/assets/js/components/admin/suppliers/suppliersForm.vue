<template>
    <div class="card">
        <div class="card-header clearfix">
            <div class="float-left">
                <legend >Supplier Information</legend>
            </div>
            <a href="/admin/suppliers" class="btn btn-raised btn-primary float-right">
                <i class="fas fa-arrow-left"></i>&nbsp;Back to Suppliers
            </a>
        </div>
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Company Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Last Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">First Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Phone Number</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
                            <div class="input-group-prepend">
                                <button @click.prevent="$root.openFile('supplierAvatar')" class="mb-0 btn btn-raised btn-primary">
                                    <i class="fas fa-folder-open"></i>&nbsp;Choose File
                                </button>
                                <input  type="text" id="inputFile" class="form-control ml-1" disabled>
                            </div>
                            <input @change="$root.setInputFile('supplierAvatar')" type="file" accept="image/*" style="display:none;" id="supplierAvatar">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Address 1</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Address 2</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">City</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Stata/Province</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Zip Code</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <button type="submit" class="btn btn-success btn-raised mt-1">Save Record</button>
                    </div>
                </div>
                
            </form>
        </div>
        <div class="card-footer"></div>
    </div>
</template>

<script>
    export default {};
</script>

<style>
</style>