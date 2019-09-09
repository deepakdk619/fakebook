<div class="form-container w-25 mr-auto ml-auto">
    <h1><b> Register</b></h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('auth/register'); ?>
    <fieldset>
        <div class="form-group">
            <label for="first_name">FirstName</label>
            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
        </div>
        <div class="form-group">
            <label for="Email">Email address</label>
            <input type="email" class="form-control" name="email" id="Email" placeholder="email address">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="New Password">
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" class="form-control" name="confirm_password" id="confirm_password"
                placeholder="Re-enter Password">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </fieldset>
    </form>
</div>