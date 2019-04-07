<!-- Common Sign Up for Doctor and Patient -->

<!DOCTYPE html>
<html>
<head>
    <title>HealTrail - Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">

    <script src="../assets/js/jquery.min.js"></script>

    <style type="text/css">
    .main{
        margin:20px 20px;
        background-color: #fff;
        border:1px solid #eee;
        box-shadow:0px 0px 10px #eee;
        padding:20px;
    }
    .row{
        margin:20px;
    }
    .form-group-main{
        border-bottom:1px solid #eee;
    }
    .progress.active{
        box-shadow:5px 5px 10px red;
    }
    .form-group{
      margin:15px auto;
    }
    </style>
</head>
<body>

    <section class="main contanier text-center">
        <div class="row text-center" style="margin-left:20px;">
            <h1><big>Welcome to Healtrail</big></h1>
            <h2><small>Your personalised Healthcare solution</small></h2>  
            <hr class="col-md-2 col-md-offset-5" style="padding:0;border:2px solid #eee;background-color:#eee;">
            </br>          
            <h3 style="margin-top: 40px;margin-bottom:0px"><big>Create an Account</big></h3>


        <div class="" style="margin:55px 0 45px 0;">

            <div class="progress" style="margin:40px 80px;height:8px;margin-bottom:0px">
              <div class="progress-bar progress-bar-info" style="width: 20%">
              </div>
              <div class="progress-bar progress-bar-success" style="width: 20%">
              </div>
              <div class="progress-bar progress-bar-warning" style="width: 20%">
              </div>
              <div class="progress-bar progress-bar-danger" style="width: 20%">
              </div>
              <div class="progress-bar progress-bar-primary" style="width: 20%">
              </div>
            </div>

            <div class="progress" style="margin:0px 80px;height:40px;background-color: transparent;border:none;box-shadow:none; margin-bottom:40px">
              <div class="progress-bar progress-bar-info active" style="width: 20%;background-color: transparent;box-shadow:none;color:#000;">
              <h2 style="margin:0;padding:0"><small>Personal</small></h2>
              </div>
              <div class="progress-bar progress-bar-success" style="width: 20%;background-color: transparent;box-shadow:none;color:#000;">
              <h2 style="margin:0;padding:0"><small>Recovery</small></h2>
              </div>
              <div class="progress-bar progress-bar-warning" style="width: 20%;background-color: transparent;box-shadow:none;color:#000;">
              <h2 style="margin:0;padding:0"><small>Adhaar</small></h2>
              </div>
              <div class="progress-bar progress-bar-danger" style="width: 20%;background-color: transparent;box-shadow:none;color:#000;">
              <h2 style="margin:0;padding:0"><small>Contact</small></h2>
              </div>
              <div class="progress-bar progress-bar-primary" style="width: 20%;background-color: transparent;box-shadow:none;color:#000;">
              <h2 style="margin:0;padding:0"><small>Confirmation</small></h2>
              </div>
            </div>

        </div>

            <form class="form col-md-6 col-md-offset-3" style="margin-top:20px">
                <span class="alert alert-danger hide" role="alert">Invalid Username</span>

                    <div class="form-group col-md-12 text-center">
                        <input style="" type="file" class="col-md-6 col-md-offset-3" id="exampleInputEmail3" placeholder="">
                        <label class="col-md-12" for="exampleInputEmail3">Profile Pic</label>
                    </div>

                    <div class="form-group col-md-6">
                        <label class="sr-only" for="exampleInputEmail3">First Name</label>
                        <input type="email" class="form-control input-lg" id="exampleInputEmail3" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="sr-only" for="exampleInputEmail3">Last Name</label>
                        <input type="email" class="form-control input-lg" id="exampleInputEmail3" placeholder="Last Name">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="sr-only" for="exampleInputEmail3">Street</label>
                        <input type="email" class="form-control input-lg" id="exampleInputEmail3" placeholder="Room No, Building, Street">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="sr-only" for="exampleInputEmail3">City</label>
                        <input type="email" class="form-control input-lg" id="exampleInputEmail3" placeholder="City">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="sr-only" for="exampleInputEmail3">State</label>
                        <input type="email" class="form-control input-lg" id="exampleInputEmail3" placeholder="State">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="sr-only" for="exampleInputEmail3">Country </label>
                        <input type="email" class="form-control input-lg" id="exampleInputEmail3" placeholder="Country">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="sr-only" for="exampleInputEmail3">Zipcode</label>
                        <input type="email" class="form-control input-lg" id="exampleInputEmail3" placeholder="Zipcode">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="sr-only" for="exampleInputPassword3">Phone Number</label>
                        <input type="email" class="form-control input-lg" id="exampleInputPassword3" placeholder="Phone Number">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="sr-only" for="exampleInputPassword3">DOB</label>
                        <input type="date" class="form-control input-lg" id="exampleInputPassword3" placeholder="mm/dd/yy">
                    </div>  
                    <div class="col-md-12" style="margin:0;padding:0">
                      <div class="form-group col-md-8">
                          <label class="sr-only" for="exampleInputPassword3">Aadhaar Number</label>
                          <input type="text" class="form-control input-lg" id="exampleInputPassword3" placeholder="Aadhaar Number">
                      </div>
                      
                      <div class="form-group col-md-3">
                          <button type="email" class="form-control btn-primary" id="exampleInputEmail3">Verify</button>
                      </div>    
                    </div>
                    <h2><small>Emergency Detail</small></h2>
                    <div class="" id="timesheet-rows">
                      <div class="timesheet-row">
                          <div class="form-group col-md-4">
                              <label class="sr-only" for="exampleInputEmail3">Name</label>
                              <input type="text" class="form-control input-lg" name="emer_name[]" id="exampleInputEmail3" placeholder="Name">
                          </div>
                          <div class="form-group col-md-4">
                              <label class="sr-only" for="exampleInputEmail3">Number</label>
                              <input type="text" class="form-control input-lg" name="emer_number[]" id="exampleInputEmail3" placeholder="Number">
                          </div>
                          <div class="form-group col-md-4">
                              <label class="sr-only" for="exampleInputEmail3">Email</label>
                              <input type="email" class="form-control input-lg" name="emer_email[]" id="exampleInputEmail3" placeholder="Email">
                          </div>
                      </div>
                      <div class="form-group col-md-12">
                              <input type="button" class="btn btn-success col-md-4" id="add-row" name="add-row" value="Add row" />
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="sr-only" for="exampleInputEmail3">Blood Group</label>
                        <input type="email" class="form-control input-lg" id="exampleInputEmail3" placeholder="Blood Group">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="sr-only" for="exampleInputEmail3">Height (cm)</label>
                        <input type="email" class="form-control input-lg" id="exampleInputEmail3" placeholder="Height Eg. 160">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="sr-only" for="exampleInputEmail3">Weight (kg)</label>
                        <input type="email" class="form-control input-lg" id="exampleInputEmail3" placeholder="Weight Eg. 65">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="sr-only" for="exampleInputEmail3">Food Preference</label>
                        <input type="email" class="form-control input-lg" id="exampleInputEmail3" placeholder="Vegetarian / Non-Vegetarian / Jain ">
                    </div>
                </div>
                    <p><small>Note: Proceeding to the next step will subscribe user for system notifications allowing the system to send emails to the email ID.</small></p>
                <div class="form-group col-md-12">
                <a type="submit" class="btn btn-success">Proceed to Signup</a>
                </div>
            </form>
        </div>
        </br>
        </br>
        </br>
        </br>
    </section>    
    
    <script>
jQuery(function($){
    var $button = $('#add-row'),
        $row = $('.timesheet-row').clone();
    
    $button.click(function(){
        $row.clone().insertBefore( $button );
    });
});
</script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html> 