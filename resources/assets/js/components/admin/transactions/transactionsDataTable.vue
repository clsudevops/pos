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
        <th scope="col">Transaction Id</th>
        <th scope="col">Customer Name</th>
        <th scope="col">Amount</th>
        <th>Transaction Date</th>
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
            <td>John Doe</td>
            <td>mark.otto@gmail.com</td>
            <td>April 15, 2018</td>
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
            <td>0001231</td>
            <td>Thornton</td>
            <td>₱3,100.00</td>
            <td>April 14, 2018</td>
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
