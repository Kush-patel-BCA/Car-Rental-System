<div class="modal fade" id="chanage_pwd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close1">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="chnage_password" class="form-border" method="post">
                    <div class="de_tab tab_simple">

                        <ul class="de_nav">
                            <li class="active"><span>Change Password </span></li>
                        </ul>

                        <div class="de_tab_content">
                            <div class="tab-1">
                                <div class="row">
                                    <div class="col-lg-12 mb20">
                                        <h5>Old Password</h5>
                                        <input type="password" name="pwd" id="pwd" class="form-control"
                                            placeholder="Enter Old Password" />
                                    </div>
                                    <div class="col-lg-12 mb20">
                                        <h5>New Password</h5>
                                        <input type="password" name="newpwd" id="newpwd" class="form-control"
                                            placeholder="Enter New Password" />
                                    </div>
                                    <div class="col-lg-12 mb20">
                                        <h5>Confirm Password</h5>
                                        <input type="password" name="conpwd" id="conpwd" class="form-control"
                                            placeholder="Enter Confirm Password" />
                                    </div>
                                    <p class="px-3 text-danger d-none" id="error-password">Password and Confirm Password
                                    </p>
                                    <p class="px-3 text-danger d-none" id="wrong-password">Password don't match !
                                    </p>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-primary" value="Change Password" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>