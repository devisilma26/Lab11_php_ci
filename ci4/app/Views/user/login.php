<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>

<body>
  <div class="login-wrapper">
    <h1>Sign In</h1>
    <hr>

    <form action="" method="POST">
      <div class="mb-3">
        <label for="InputForEmail" class="form-label">Email Address</label>
        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email'); ?>">
      </div>
      <div class="nb-3">
        <label for="form-lable">Password</label>
        <input type="password" name="password" class="form-control" id="InputForPassword">
      </div>
      <div class="tombol">
        <button type="submit" class="btn btn-primary">Login</button>
        <button class="btn btn-primary"><a href="<?= base_url('/home'); ?>">Home</a></button>

      </div>
    </form>

    <?php if (session()->getFlashdata('flash_msg')) : ?>
      <div class="alert alert-danger">
        <?= session()->getFlashdata('flash_msg') ?>
      </div>
    <?php endif; ?>
  </div>
</body>

</html>