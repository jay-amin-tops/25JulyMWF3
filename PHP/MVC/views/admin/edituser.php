<div id="page-wrapper">
    <div class="main-page">
        <div class="col_3">
            <div class="clearfix"> </div>
        </div>

        <div class="charts">
            <div class="mid-content-top charts-grids">
                <div class="middle-content">
                    <div class="row">
                        <div class="col-md-11">
                            <h4 class="title">Edit user's Data</h4>
                        </div>
                        <div class="col">
                            <a class="btn btn-sm btn-info" href="addnewuser">Add New</a>
                        </div>
                    </div>
                    <hr>
                    <div class="card">
                        <form enctype="multipart/form-data" method="post">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="username">User Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo $UsersDataById['Data'][0]->username; ?>" class="form-control" name="username" id="username">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="fullname">Full Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo $UsersDataById['Data'][0]->fullname; ?>"  class="form-control" name="fullname" id="fullname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="email">Email</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo $UsersDataById['Data'][0]->email; ?>"  class="form-control" name="email" id="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="mobile">Mobile</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo $UsersDataById['Data'][0]->mobile; ?>"  class="form-control" name="mobile" id="mobile">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="Gender">Gender</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="radio"  <?php if ($UsersDataById['Data'][0]->gender == "Male") {
                                        echo "checked";
                                    }  ?>  name="gender" id="Male" value="Male"> <label for="Male"> Male</label>
                                    <input type="radio"  <?php if ($UsersDataById['Data'][0]->gender == "Female") {
                                        echo "checked";
                                    }  ?>  name="gender" id="Female" value="Female"> <label for="Female"> Female</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="">Hobbies</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="checkbox" name="chk[]" id="Cricket" value="Cricket"> <label for="Cricket">Cricket</label>
                                    <input type="checkbox" name="chk[]" id="Music" value="Music"> <label for="Music">Music</label>
                                    <input type="checkbox" name="chk[]" id="Travelling" value="Travelling"> <label for="Travelling">Travelling</label>
                                    <input type="checkbox" name="chk[]" id="Reading" value="Reading"> <label for="Reading">Reading</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="Country">Country</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="country" id="Country">
                                        <option value="">Select country</option>
                                        <?php
                                            foreach ($allCountriesData['Data'] as $countrykey => $countryvalue) { ?>
                                                <option value="<?php echo $countryvalue->country_id; ?>"><?php echo $countryvalue->country_name; ?></option>
                                            <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="State">State</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="state" id="State">

                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="City">City</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="city" id="City"></select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="profile_pic">Profile Pic</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="file" name="prof_pic" id="prof_pic">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="submit" name="update" value="update" id="update">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--//sreen-gallery-cursual---->
            </div>
        </div>
    </div>
</div>