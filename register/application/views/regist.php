    <!DOCTYPE html>
           
        <head>

            <title>Register form</title>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


            <link rel='stylesheet' href='<?php echo base_url('assets/css/register.css');?>'/>
            
        </head>

        <body>

            <div class='register'>

                <form>
                    
                    <p>
                         <input type='email' name='email' placeholder='Email' required/>
                    </p>

                    <p>
                         <input type='password' name='password' placeholder='Password' required/>
                    </p>

                    <p>
                         <input type='password' name='re-type-password' placeholder='re-type-password' required/>
                    </p>

                    <p>
                         <input type='text' name='first-name' placeholder='First-Name' required/>
                    </p>

                    <p>
                         <input type='text' name='last-name' placeholder='Last-Name' required/>
                    </p>

                    <p>
                         <input type='radio' name='male' value='male'/>male
                         <input type='radio' name='fe-male' value='female'/>Female
                    </p>

                    <p>
                        <select>
                            <option>India</option>
                            <option>America</option>
                            <option>pakishtan</option>
                            <option>country n</option>
                        </select>
                    </p>

                    <p>
                         <input type='checkbox' /> I agree terms and conditions<br>
                         <input type='checkbox' /> I want to receive the newsletter
                    </p>

                    <p>
                        <button type='submit'>Register</button>

                    </p>



                </form>

            </div>
            
        </body>
        
    </html>