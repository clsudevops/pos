<template>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">
            <div class="checkbox">
                <label>
                <input type="checkbox">
                <span class="checkbox-decorator"><span class="check"></span></span>
                </label>
            </div>
        </th>
        <th scope="col" style="width:100px;">Action</th>
        <th scope="col">Rule ID</th>
        <th scope="col">Rule Name</th>
        <th scope="col">Start Date</th>
        <th>End Date</th>
        <th>Rule Type</th>
        <th>Coupon Code</th>
        <th>Status</th>
        </tr>
    </thead>
    <tbody>
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
            <td>0000123</td>
            <td>Christmans Discount</td>
            <td>Dec 1, 2018</td>
            <td>Dec 31, 2018</td>
            <td>Holiday Sale</td>
            <td>qwehksdf</td>
            <td><span class="badge badge-danger">INACTIVE</span></td>
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
            <td>0000123</td>
            <td>Summer Discount</td>
            <td>April 20</td>
            <td>Dec 31, 2018</td>
            <td>Holiday Sale</td>
            <td>qwehksdf</td>
            <td><span class="badge badge-success">ACTIVE</span></td>
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
            <td>021343</td>
            <td>Thornton James</td>
            <td>₱3,100.00</td>
            <td>April 14, 2018</td>
        </tr>
    </tbody>
    </table>
</template>

<script>
    export default {

    }
</script>

<style>

</style>
