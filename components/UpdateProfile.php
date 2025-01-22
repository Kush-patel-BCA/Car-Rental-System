<?php 
    if($_SESSION['userid']){
        include("../controller/connection.php");
        $id = $_SESSION['userid'];
        $q = "select * from users where id=$id";
        $main = mysqli_query($con,$q);
        $data = mysqli_fetch_array($main);
    }
?>
<div class="modal fade" id="update_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="update_user" class="form-border" method="post">
                    <div class="de_tab tab_simple">

                        <ul class="de_nav">
                            <li class="active"><span>Update Profile </span></li>
                        </ul>

                        <div class="de_tab_content">
                            <div class="tab-1">
                                <div class="row">
                                    <div class="col-lg-6 mb20">
                                        <h5>Name</h5>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Enter Name" value="<?php echo $data['name']; ?>" />
                                    </div>
                                    <div class="col-lg-6 mb20">
                                        <h5>Username</h5>
                                        <input type="text" name="username" id="username" class="form-control"
                                            placeholder="Enter Username" value="<?php echo $data['username']; ?>" />
                                    </div>
                                    <div class="col-lg-6 mb20">
                                        <h5>Email</h5>
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="Enter Email" value="<?php echo $data['email']; ?>" />
                                    </div>
                                    <div class="col-lg-6 mb20">
                                        <h5>Phone</h5>
                                        <input type="text" name="phone" id="phone" class="form-control"
                                            placeholder="Enter Phone " value="<?php echo $data['mobile']; ?>" />
                                    </div>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-primary" value="Save Change" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>