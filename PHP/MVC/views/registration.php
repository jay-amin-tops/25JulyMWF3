<!-- 
 <section class="w3l-breadcrumb">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Pages</li>
                <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> About Us</li>
            </ul>
        </div>
    </section> -->
<section class="locations-1" id="locations">
    <style>
        input[type="radio"],input[type="checkbox"] {
            -webkit-appearance: auto !important;
            outline: auto !important;
        }
    </style>
    <div class="locations py-5">
        <!-- test -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-header text-center">
                            Registration
                        </div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col">
                                        <input type="text" placeholder="Enter User Name or Email" class="form-control" name="username" id="username">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <input type="password" placeholder="Enter Password" class="form-control" name="password" id="password">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <input type="text" placeholder="Enter Fullname" class="form-control" name="fullname" id="fullname">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <input type="email" placeholder="Enter Email" class="form-control" name="email" id="email">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <input type="tel" placeholder="Enter Mobile" class="form-control" name="mobile" id="mobile">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <input type="radio" name="gender" value="Male" id="male"> <label for="male"> Male</label>
                                        <input type="radio" name="gender" value="Female" id="female"> <label for="female"> Female</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <input type="checkbox" name="hobbies[]" value="Cricket" id="Cricket"> <label for="Cricket"> Cricket</label>
                                        <input type="checkbox" name="hobbies[]" value="Music" id="Music"> <label for="Music"> Music</label>
                                        <input type="checkbox" name="hobbies[]" value="Reading" id="Reading"> <label for="Reading"> Reading</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <?php // echo "<pre>"; print_r($allCitiesData); ?>
                                    <div class="col">
                                        <select name="city" class="form-control" id="city">
                                            <option value="">--Select City--</option>
                                            <?php
                                            foreach ($allCitiesData['Data'] as $key => $value) {
                                                echo '<option value="'.$value->id.'">'.$value->name.'</option>';
                                            }
                                            ?>
                                            <!-- <option value="1">Ahemdabad</option>
                                            <option value="2">Baroda</option>
                                            <option value="3">Surat</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <input type="file" name="prof_pic" id="prof_pic">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col text-center">
                                        <input type="submit" class="btn btn-primary" name="registraion" id="registraion">
                                        <input type="reset" class="btn btn-danger">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>