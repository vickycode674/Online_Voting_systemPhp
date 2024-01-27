<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Voting system</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class="text-info text-center p-3">Voting System </h1>
   <div class="bg-info">
     <h1 class="text-center p-3">Login Page</h1> 
     
     <div class="container text-center py-4">

        <form action="" autocomplete="off" class="height-100">

           <div class="mb-3">
            <input type="text" class="form-control w-50 m-auto" name="usernames" placeholder="Enter your username" required="required"
              maxlength="10" minLength="10" autocomplete="off"/>
           </div>

           <div class="mb-3">
            <input type="text" class="form-control w-50 m-auto" name="Mobile numbers" placeholder="Enter your Mobile no" required="required"
               maxlength="10" minLength="10"/>
           </div>

           <div class="mb-3">
            <input type="Password" class="form-control w-50 m-auto" name="Password" placeholder="Enter your Password" required="required"/>
           </div>

           <div class="mb-3">
            <select name="std" class="form-select w-50 m-auto">

                <option value="Group">Group</option>
                <option value="Voters">Voters</option>

            </select>
           </div>
           <!-- my refers to top and bottom padding  -->
           <button type="submit" class="btn btn-dark my-4">  
            Login
           </button>
          <p>Dont have an account?   <a href="./partials/registration.php" class="text-white">Register here </a>  </p>
         


        
       </form>
      </div> 
   </div> 
</body>
</html>