<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- link font awesome icon -->
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'/>
    <!-- link custome styling -->
    <link rel='stylesheet' href='<?php echo base_url('assets/css/register.css')?>'/>
</head>
    <body >
        <div class="container mt-3 ">
            <form class='form '>
                <div class='row '>
                    <div class='h2 text-center mt-3'>Responsive Registration<br>Form</div>  
                </div>
                <div class='row  mt-4  d-flex justify-content-center form-1 '>
                    <div class='col-sm-6'>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                            <input type='text' class='form-control' name='email' placeholder='Email'/>
                        </div>
                    </div>
                </div>
                <div class='row  mt-4  d-flex justify-content-center form-1 '>
                    <div class='col-sm-6 '>
                    <div class="input-group">
                            <span class="input-group-text"><i class="fa-sharp fa-solid fa-lock"></i></span>
                         <input type='password' class='form-control' name='password' placeholder='Password'/>
                    </div>
                    </div>
                </div>

                <div class='row  mt-4  d-flex justify-content-center form-1 '>
                    <div class='col-sm-6 '>
                    <div class="input-group">
                            <span class="input-group-text"><i class="fa-sharp fa-solid fa-lock"></i></span>
                         <input type='password' class='form-control' name='re-type-password' placeholder='Re-Type-Password'/>
                    </div>
                    </div>
                </div>
                
                <div class='row  d-flex justify-content-center form-1 '>
                    <div class='col-sm-3 mt-4'>
                    <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                         <input type='text' class='form-control' name='re-type-password' placeholder='First Name'/>
                    </div>
</div>
                    <div class='col-sm-3 mt-4'>
                    <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <input type='text' class='form-control' name='re-type-password' placeholder='Last Name'/>
                   </div>
</div>
                </div>
                <div class='row  mt-4  d-flex justify-content-center form-1 '>
                    <div class='col-sm-3 '>
                         <input type='radio' class='form-check-input' name='radio' /> Male
                    </div>
                    <div class='col-sm-3 '>
                        <input type='radio' class='form-check-input' name='radio' /> Female
                   </div>
                </div>
                <div class='row  mt-4  d-flex justify-content-center form-1 '>
                    <div class='col-sm-6 '>
                         <select class='form-select'>  
                            <option>India</option>
                            <option>America</option>
                            <option>Australia</option>

                        </select>
                            
                    </div>
                </div>
                <div class='row  mt-4  d-flex justify-content-center form-1 '>
                    <div class='col-sm-6 '>
                         <input type='checkbox' class='form-check-input' name='check'/> I agree with terms and conditions
                    </div>
                </div>
                <div class='row  mt-4  d-flex justify-content-center form-1 '>
                    <div class='col-sm-6 '>
                         <input type='checkbox' class='form-check-input' name='check'/> I want to receive the newsletter
                    </div>
                </div>

                <div class='row  mt-4  d-flex justify-content-center form-1 '>
                    <div class='col-sm-6 '>
                         <button type='button' class='btn-btn-primary form-control'> submit</button>
                    </div>
                </div>


                   
                </div>
                
            </form>
        </div>

    </body>
</html>


