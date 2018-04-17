<template>
    <div class="card">
        <div class="card-header clearfix">
            <div class="float-left">
                <legend >New Expense</legend>
            </div>
            <router-link to="/expenses" class="btn btn-raised btn-primary float-right">
                <i class="fas fa-arrow-left"></i>&nbsp;Back to Expenses
            </router-link>
        </div>
        <div class="card-body">
            <form action="">

                <h5>Basic Information</h5>
                <hr class="my-1">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Date</label>
                            <datepicker input-class="form-control"></datepicker>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="amount" class="bmd-label-floating">Amount</label>
                            <input type="text" class="form-control" id="amount">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tax" class="bmd-label-floating">Tax amount</label>
                            <input type="text" class="form-control" id="tax">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="decription" class="bmd-label-floating">Description</label>
                            <input type="text" class="form-control" id="description">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="expense-type" class="bmd-label-floating">Type</label>
                            <input type="text" class="form-control" id="expense-type">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="bmd-label-floating">Reason</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- <label for="exampleInputEmail1" class="bmd-label-floating">Category</label> -->
                            <v-select v-model="selected" placeholder="Category" label="label" :options="options"></v-select>
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <v-select v-model="selected" placeholder="Recipient Name" label="label" :options="options"></v-select>
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <v-select v-model="selected" placeholder="Approved by" label="label" :options="options"></v-select>
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="expense-notes" class="bmd-label-floating">Expenses Notes</label>
                            <textarea name="expense-notes" class="form-control" id="expense-notes" cols="30" rows="10"></textarea>
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
        },
        data() {
            return {
                selected:null,
                options: [
                    'Category 1', 'Category 2'
                ]
            }
        }
    };
</script>

<style>
    .vdp-datepicker input {
        background-color: transparent!important;
    }
</style>