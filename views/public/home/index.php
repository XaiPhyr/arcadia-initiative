<div class="container mt-3">
    <div class="card border border-primary">
        <div class="card-body">
            <form action="action.php" method="post">
                <div class="row">
                    <div class="form-group col-4">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="" class="form-control">
                    </div>

                    <div class="form-group col-4">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="" class="form-control">
                    </div>

                    <div class="form-group col-2">
                        <label for="status">Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="super user">Super User</option>
                            <option value="user">User</option>
                        </select>
                    </div>

                    <div class="form-group col-2">
                        <label for="group">Group</label>
                        <input type="text" name="group" id="" class="form-control">
                    </div>
                </div>

                <legend>Information</legend>
                <div class="row">
                    <div class="form-group col-4">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" id="" class="form-control">
                    </div>

                    <div class="form-group col-4">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" id="" class="form-control">
                    </div>

                    <div class="form-group col-4">
                        <label for="suffix">Suffix</label>
                        <input type="text" name="suffix" id="" class="form-control">
                    </div>
                </div>

                <legend>Detail</legend>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="" class="form-control">
                    </div>

                    <div class="form-group col-3">
                        <label for="zone">Zone</label>
                        <input type="text" name="zone" id="" class="form-control">
                    </div>

                    <div class="form-group col-3">
                        <label for="region">Region</label>
                        <input type="text" name="region" id="" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-4">
                        <label for="city">City</label>
                        <input type="text" name="city" id="" class="form-control">
                    </div>

                    <div class="form-group col-4">
                        <label for="country">Country</label>
                        <input type="text" name="country" id="" class="form-control">
                    </div>

                    <div class="form-group col-4">
                        <label for="postal_code">Postal Code</label>
                        <input type="text" name="postal_code" id="" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-3">
                        <label for="area_code">Area Code</label>
                        <input type="text" name="area_code" id="" class="form-control">
                    </div>

                    <div class="form-group col-5">
                        <label for="contact_number">Number</label>
                        <input type="text" name="contact_number" id="" class="form-control">
                    </div>
                </div>

                <input type="submit" value="Submit" name="register" class="btn btn-primary float-right">
            </form>
        </div>
    </div>
</div>