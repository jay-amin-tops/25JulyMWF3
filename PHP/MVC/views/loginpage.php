
<section class="locations-1" id="locations">
<div class="locations py-5">
    <!-- test -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="card">
                    <div class="card-header text-center">
                        Login
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <div class="col">
                                    <input type="text" onblur="checkreq(this,'usernameerror')" placeholder="Enter User Name or Email" class="form-control" name="username" id="username" required>
                                    <span id="usernameerror"></span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="text" onblur="checkreq(this,'passworderror')" placeholder="Enter Password" class="form-control" name="password" id="password">
                                    <span id="passworderror"></span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col text-center">
                                    <input type="submit" class="btn btn-primary" name="login" id="login" value="Login">
                                    <input type="reset" class="btn btn-danger" name="login" id="login">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col text-center">
                                    <a href="registration">Click here for new account</a>
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
<script>
    document.getElementById('username').addEventListener("keyup",function () {
        // console.log("called");
        // var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var RegX = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
        if (RegX.test(this.value)) {
            console.log("inside if");
            document.getElementById("usernameerror").innerHTML = ""
        } else {
            console.log("inside else");
            document.getElementById("usernameerror").innerHTML = "Invalid formate"
            
        }
    })
function checkreq(e,spn) {
    // uname = document.getElementById("username").value
    // console.log(uname);
    if (e.value == "") {
        document.getElementById(spn).innerHTML = "This field is required !!!"
        // console.log("This field is required");
    } else {
        document.getElementById(spn).innerHTML = ""
        console.log("Done");
    }
    // console.log("called ");
}
</script>