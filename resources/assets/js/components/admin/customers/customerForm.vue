<template>
    <div class="card">
        <div class="card-header clearfix">
            <div class="float-left">
                <legend >Customer Information</legend>
            </div>
            <a href="/admin/customers" class="btn btn-raised btn-primary float-right">
                <i class="fas fa-arrow-left"></i>&nbsp;Back to Customer List
            </a>
        </div>
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="companyName" class="bmd-label-floating">Company name</label>
                            <input type="text" class="form-control" id="companyName">
                            <!-- <span class="bmd-help">We'll never share your email with anyone else.</span> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname" class="bmd-label-floating">First Name</label>
                            <input type="text" class="form-control" id="firstname">
                            <!-- <span class="bmd-help">We'll never share your email with anyone else.</span> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="lastname" class="bmd-label-floating">Last Name</label>
                            <input type="text" class="form-control" id="lastname">
                            <!-- <span class="bmd-help">We'll never share your email with anyone else.</span> -->
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="bmd-label-floating">Email</label>
                            <input type="email" class="form-control" id="email">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phonenumber" class="bmd-label-floating">Phone Number</label>
                            <input type="text" class="form-control" id="phonenumber">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <!-- <label for="itemDescription" class="bmd-label-floating">Description</label>
                            <br> -->
                            <div class="input-group-prepend">
                                <button @click.prevent="$root.openFile('customerAvatar')" class="mb-0 btn btn-raised btn-primary">
                                    <i class="fas fa-folder-open"></i>&nbsp;Choose File
                                </button>
                                <input  type="text" id="inputFile" class="form-control ml-1" disabled>
                            </div>
                            <input @change="$root.setInputFile('customerAvatar')" type="file" accept="image/*" style="display:none;" id="customerAvatar">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="address1" class="bmd-label-floating">Address 1</label>
                            <input type="text" class="form-control" id="address1">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="address2" class="bmd-label-floating">Address 2</label>
                            <input type="text" class="form-control" id="address2">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="city" class="bmd-label-floating">City</label>
                            <input type="text" class="form-control" id="city">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="province" class="bmd-label-floating">State/Province</label>
                            <input type="text" class="form-control" id="province">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-raised btn-success">Save Customer Information</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
