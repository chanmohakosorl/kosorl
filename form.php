<?php include "header.php" ?>
<div class="container mt-5">
<h1 class="text-info text-center">Quiz OOP</h1><hr>
    <div class="row">
        <div class="col-md-6">
            <div class="card bg-light">
                <div class="card-body">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Gender</label>
                            <select name="gender" id="" class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Province</label>
                            <input type="text" name="province" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group float-right">
                            <button class="btn btn-success" type="sumit" name="btn-submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
        <div class="col-md-6">

        <?php include "process.php" ?>
            <div class="container">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="form">
                        <div class="form-group">
                            <p>Name: <?php echo $name ?></p>
                        </div> 
                        <div class="form-group">
                            <p>Gender: <?php echo $gender ?></p>
                        </div> 
                        <div class="form-group">
                            <p>Province: <?php echo $province ?></p>
                        </div> 
                        <div class="form-group">
                            <p>Email: <?php echo $email ?></p>
                        </div> 
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>