<template>
    <div class="card">
        <div class="card-header clearfix">
            <div class="float-left">
                <legend >Employee Details</legend>
            </div>
            <router-link to="/suppliers" class="btn btn-raised btn-primary float-right">
                <i class="fas fa-arrow-left"></i>&nbsp;Back to Employees
            </router-link>
        </div>
        <div class="card-body">
            <form action="">

                <h5>Basic Information</h5>
                <hr class="my-1">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Employee #</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Hired Date</label>
                            <datepicker input-class="form-control"></datepicker>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                        <label for="exampleInputFile" class="bmd-label-floating">Upload Image</label>
                        <input type="file" class="form-control-file" id="exampleInputFile">
                        <!-- <small class="text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> -->
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
                </div>
                <br>
                <h5>Account Credentials</h5>
                <hr class="my-1">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Username</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                </div>

                <div class="row">
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
    import Datepicker from 'vuejs-datepicker';
    export default {
        components: {
            Datepicker
        }
    };
</script>

<style>
    .vdp-datepicker input {
        background-color: transparent!important;
    }
</style>