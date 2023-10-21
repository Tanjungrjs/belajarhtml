<?php
$title = 'register';
include('components/header.php');
?>

<section class="autentikasi py-5">
<h2 class="text-primary text-center mb-4">Register</h2>
    <div class="container flex justify-content-center align-items-center">
        
        <form action="Submit" method="post">
            <div class="gap-3 mb-3">
                <label for="Name" class="fs-5">Name</label>
                <input type="text" name="Name" id="Name" class="form-control" >
            </div>
            <div class="gap-3">
                <label for="Email" class="fs-5">Email</label>
                <input type="email" name="email" id="email" class="form-control" >
            </div>
            <div class="gap-3 mt-3">
                <label for="Password" class="fs-5">Password</label>
                <input type="text" name="password" id="password" class="form-control" >
            </div>

<button type="submit" class="btn btn-primary w-100 mt-3" name="submit";">Register</button>
<p class="mt-3 text-secondary text-center" >Already have an account? <a href="login.php" class="text-primary">Login</a></p>
        </form>
    </div>
</section>


<?php include('components/footer.php')
 ?>