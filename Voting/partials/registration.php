<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System - Registration </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body class="bg-dark">

     <h1 class="text-center text-info p-3 ">Voting System </h1>
    

     <div class="bg-info py-4">

        <h2 class="text-center">Register Account</h2>
        
        <div class="container text-center py-4">
         
         <form action="" >

        <div class="mb-3">
        <input type="username" class="form-control w-50 m-auto" name="username"  placeholder="Enter your name" required="required"
         minlength="10" maxlength="35" />
        </div>

        <div class="mb-3">
        <input type="text" class="form-control w-50 m-auto" name="mobile"  placeholder="Enter your Mobile number" required="required"
         minlength="10" maxlength="35" />
        </div>

        <div class="mb-3">
            <input type="password" class="form-control w-50 m-auto" name="Password" placeholder="Enter your Password" required="required"/>
           </div>

           <div class="mb-3">
            <input type="password" class="form-control w-50 m-auto" name="Password" placeholder="Confirm your Password" required="required"/>
           </div>

           
           <div class="mb-3">
            <input type="file" class="form-control w-50 m-auto" name="Password" name="photo"/>
           </div>

           
       <div class="mb-3">
            <select name="std" class="form-control w-50 m-auto">

                <option value="Group">Group</option>
                <option value="Voters">Voters</option>
            </select>
        </div> 

        <button type="submit" class="bg-dark text-white">Register</button>
        <p class="p-1">Already have an account?   <a href="../index.php" class="text-white">Login here </a>  </p>
 </form>


     </div>
     </div>
</body>
</html>