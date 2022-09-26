<?php
include '../component/sidebar.php';
$user = $_SESSION['user'];
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>MY PROFILE</h4> 
    </div>
    <hr>
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <div class="form-group mb-3">
        <label for="exampleInputEmail1">Name</label>
        <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $user['name'] ?>" disabled>
    </div>
    <div class="form-group mb-3">
        <label for="exampleInputEmail1">Phone Number</label>
        <input name="phonenum" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $user['phonenum'] ?>" disabled>
    </div>
    <div class="form-group mb-3">
        <label for="exampleInputEmail1">Email</label>
        <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $user['email'] ?>" disabled>
    </div>
    <div class="form-group mb-3">
        <label for="exampleInputEmail1">Job</label>
        <input type="text" name="job" class="form-control" value="<?= $user['job'] ?>" disabled>
    </div>
    <div class="form-group mb-3">
        <label for="exampleInputEmail1">Membership</label>
        <input name="membership" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $user['membership'] ?>" disabled>
    </div>  
    <a href="./page/profilePageedit.php" class="m-0">
        <button type="submit" class="form-control btn btn-warning w-full">EDIT</button>
    </a>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>