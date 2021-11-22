<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <title>Edit Agent</title>
</head>


<body>
  <h2>Edit Agent <?= $agent?></h2>
  <div>
    <form action="" class="container-sm card py-4">
      <label for="">Name</label>
      <input class="mb-2" type="text" value="<?= $agent[0]["agent_name"]?>">
      <label for="">Working Area</label>
      <input class="mb-2" type="text" value="<?= $agent[0]["working_area"]?>">
      <label for="">Comission</label>
      <input class="mb-2" type="text" value="<?= $agent[0]["comission"]?>">
      <label for="">Phone Number</label>
      <input class="mb-2" type="text" value="<?= $agent[0]["phone_no"]?>">
      <label for="">Country</label>
      <input class="mb-2" type="text" value="<?= $agent[0]["country"]?>">
      <input type="submit" class="btn btn-primary mt-4">
    </form>
  </div>

</body>

</html>