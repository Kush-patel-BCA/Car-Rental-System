<div class="" id="book-form">
    <h3>Fill Your Details </h3>

    <form class="form-border" method="post" id="formbook">
        <div class="row ">
            <div class="col-md-6 mb10">
                <div class="field-set">
                    <input type="text" name="fname" id="fname" class="form-control" placeholder="Your First Name"
                        required>
                </div>
            </div>
            <div class="col-md-6 mb10">
                <div class="field-set">
                    <input type="text" name="lname" id="lname" class="form-control" placeholder="Your Last Name "
                        required>
                </div>
            </div>
            <div class="w-full"></div>
            <div class="col-md-6  mb10">
                <div class="field-set">
                    <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" required>
                </div>
            </div>
            <div class="col-md-6 mb10">
                <div class="field-set">
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your phone"
                        maxlength="10" pattern="[6-9]{1}[0-9]{9}" onkeypress="return (event.charCode > 47 && 
    event.charCode < 58)" required>
                </div>
            </div>
            <div class="w-full"></div>
            <div class="col-md-6  mb10">
                <div class="field-set">
                    <input type="text" name="state" id="state" class="form-control" placeholder="Your State Address"
                        required>
                </div>
            </div>
            <div class="col-md-6 mb10">
                <div class="field-set">
                    <input type="text" name="scode" id="scode" class="form-control" placeholder="Your City Code"
                        onkeypress="return (event.charCode > 47 && 
    event.charCode < 58)" maxlength="6" required>
                </div>
            </div>
        </div>

        <div class="field-set mb20">
            <textarea name="address" id="address" class="form-control" rows="5" placeholder="Your Address"
                required></textarea>
        </div>

        <div id='submit' class="mt20">
            <input type='submit' id='send_form_data' value='Submit' class="btn-main">
        </div>


    </form>
</div>