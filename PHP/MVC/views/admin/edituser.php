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
                            <!-- <img name="myimg" src="https://m.media-amazon.com/images/I/31jo5pyShXL._SY445_SX342_QL70_FMwebp_.jpg" alt=""> -->
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
                                    <input type="text" value="<?php echo $UsersDataById['Data'][0]->fullname; ?>" class="form-control" name="fullname" id="fullname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="email">Email</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo $UsersDataById['Data'][0]->email; ?>" class="form-control" name="email" id="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="mobile">Mobile</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo $UsersDataById['Data'][0]->mobile; ?>" class="form-control" name="mobile" id="mobile">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="Gender">Gender</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="radio" <?php if ($UsersDataById['Data'][0]->gender == "Male") {
                                                            echo "checked";
                                                        }  ?> name="gender" id="Male" value="Male"> <label for="Male"> Male</label>
                                    <input type="radio" <?php if ($UsersDataById['Data'][0]->gender == "Female") {
                                                            echo "checked";
                                                        }  ?> name="gender" id="Female" value="Female"> <label for="Female"> Female</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="">Hobbies</label>
                                </div>
                                <div class="col-md-8">
                                    <?php
                                    $arrayofHobby = explode(",", $UsersDataById['Data'][0]->hobby);
                                    // echo "<pre>";
                                    // print_r($arrayofHobby);
                                    // var_dump(in_array("Cricket",$arrayofHobby));
                                    // var_dump(in_array("Travelling",$arrayofHobby));
                                    // echo "</pre>";
                                    ?>
                                    <input type="checkbox" name="chk[]" <?php if (in_array("Cricket", $arrayofHobby)) {
                                                                            echo "checked";
                                                                        } ?> id="Cricket" value="Cricket"> <label for="Cricket">Cricket</label>
                                    <input type="checkbox" <?php if (in_array("Cricket", $arrayofHobby)) {
                                                                echo "checked";
                                                            } ?> name="chk[]" id="Music" value="Music"> <label for="Music">Music</label>
                                    <input type="checkbox" <?php if (in_array("Travelling", $arrayofHobby)) {
                                                                echo "checked";
                                                            } ?> name="chk[]" id="Travelling" value="Travelling"> <label for="Travelling">Travelling</label>
                                    <input type="checkbox" <?php if (in_array("Reading", $arrayofHobby)) {
                                                                echo "checked";
                                                            } ?> name="chk[]" id="Reading" value="Reading"> <label for="Reading">Reading</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="Country">Country</label>
                                </div>
                                <div class="col-md-8">
                                    <?php //echo "<pre>"; print_r($allCountriesData['Data'] ); ?>
                                    <select name="country" id="Country" onchange="getStateDataByCountryId(this)">
                                        <option value="">Select country</option>
                                        <?php foreach ($allCountriesData['Data'] as $CountryKey => $CountryValue) { ?>
                                            <option <?php if ($UsersDataById['Data'][0]->country_id == $CountryValue->country_id) {
                                               echo "selected";
                                            } ?>  value="<?php echo $CountryValue->country_id; ?>"><?php echo $CountryValue->country_name; ?></option>
                                        <?php } ?>
                                    </select>
                                    <script>
                                        function getStateDataByCountryId(e) {
                                            $.ajax({
                                            url:"http://localhost/laravel/11JulyMWF3/25JulyMWF3/PHP/API/allstatebycountryid",
                                            data:{countryid:this.value},
                                            success:function(response){
                                                // console.log(response);
                                                data = JSON.parse(response)
                                                console.log(data.Data);
                                                htmloption = "<option>Select state</option>"
                                                data.Data.forEach(element => {
                                                    // console.log(element);
                                                    htmloption += "<option>"+element.country_name+"</option>"

                                                });
                                                console.log(htmloption);
                                                $("#State").html(htmloption);
                                            }
                                        })
                                        }
                                        // fetch()
                                        // $.ajax({
                                        //     url:"http://localhost/laravel/11JulyMWF3/25JulyMWF3/PHP/API/allcountries",
                                        //     success:function(response){
                                        //         // console.log(response);
                                        //         data = JSON.parse(response)
                                        //         console.log(data.Data);
                                        //         htmloption = "<option>Select country</option>"
                                        //         data.Data.forEach(element => {
                                        //             // console.log(element);
                                        //             htmloption += "<option>"+element.country_name+"</option>"

                                        //         });
                                        //         console.log(htmloption);
                                        //         $("#Country").html(htmloption);
                                        //     }
                                        // })
                                    </script>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="State">State</label>
                                </div>
                                <div class="col-md-8">
                                    <?php 
                                    // echo "<pre>";
                                    // print_r($UsersDataById['Data'][0]); 
                                    ?>
                                    <select name="state" id="State">
                                        <option value="">Select State</option>
                                        <?php foreach ($allStateData['Data'] as $StateKey => $StateValue) {  ?>
                                            <option <?php if ($UsersDataById['Data'][0]->steteid == $StateValue->steteid) {
                                               echo "selected";
                                            } ?>  value="<?php echo $StateValue->steteid; ?>"><?php echo $StateValue->state_title; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="City">City</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="city" id="city">
                                        <option value="">Select City</option>
                                        <?php foreach ($allCitiesData['Data'] as $CityKey => $CityValue) { ?>
                                            <option <?php if ($UsersDataById['Data'][0]->city == $CityValue->id) {
                                               echo "selected";
                                            } ?>  value="<?php echo $CityValue->id; ?>"><?php echo $CityValue->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="profile_pic">Profile Pic</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo $UsersDataById['Data'][0]->prof_pic; ?>" name="prof_old_pic" id="prof_old_pic">
                                    <input type="file" value="<?php $UsersDataById['Data'][0]->prof_pic; ?>" name="prof_pic" id="prof_pic">
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