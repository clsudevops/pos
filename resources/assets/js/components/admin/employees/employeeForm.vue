<template>
    <div class="card">
        <div class="card-header clearfix">
            <div class="float-left">
                <legend >Employee Details</legend>
            </div>
            <a href="/admin/employees" class="btn btn-raised btn-primary float-right">
                <i class="fas fa-arrow-left"></i>&nbsp;Back to Employees
            </a>
        </div>
        <div class="card-body">
            <form action="">
                <h5>Basic Information</h5>
                <hr class="my-1">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="employeeNumber" class="bmd-label-floating">Employee #</label>
                            <input type="text" class="form-control" id="employeeNumber">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="hiredDate" class="bmd-label-floating">Hired Date</label>
                            <datepicker input-class="form-control"></datepicker>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastname" class="bmd-label-floating">Last Name</label>
                            <input type="text" class="form-control" id="lastname">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname" class="bmd-label-floating">First Name</label>
                            <input type="text" class="form-control" id="firstname">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
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
                </div>
                <div class="row">
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <button @click.prevent="$root.openFile('employeeAvatar')" class="mb-0 btn btn-raised btn-primary">
                                    <i class="fas fa-folder-open"></i>&nbsp;Choose File
                                </button>
                                <input  type="text" id="inputFile" class="form-control ml-1" disabled>
                            </div>
                            <input @change="$root.setInputFile('employeeAvatar')" type="file" accept="image/*" style="display:none;" id="employeeAvatar">
                        </div>
                        <!-- <small class="text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> -->
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
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="city" class="bmd-label-floating">City</label>
                            <input type="text" class="form-control" id="city">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="province" class="bmd-label-floating">State/Province</label>
                            <input type="text" class="form-control" id="province">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="zipcode" class="bmd-label-floating">Zip Code</label>
                            <input type="text" class="form-control" id="zipcode">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                </div>
                <br>
                <h5>Account Credentials</h5>
                <hr class="my-1">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="username" class="bmd-label-floating">Username</label>
                            <input type="text" class="form-control" id="username">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="password" class="bmd-label-floating">Password</label>
                            <input type="password" class="form-control" id="password">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="confirmPassword" class="bmd-label-floating">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword">
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