<?php
include "../components/nav-simple.html";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>

  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <script src="../js/popper.min.js"></script>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>

<body>

  <div class="post container mt-5">
    <h1><?php echo $_GET['title']; ?></h1>

    <div class="p-2 ps-0 pe-0">
      <img src="<?php echo $_GET['img']; ?>" class="rounded" alt="..." width="100%">
    </div>

    <div class="post-body mt-4">

      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi doloremque eum repudiandae a itaque quod nemo saepe! Aliquam eius voluptates delectus odio debitis autem, nesciunt dicta, saepe qui placeat provident.
      </p>

      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa itaque, fugit sit voluptatem dolores labore est laudantium delectus aliquam. Ut, error obcaecati! Repudiandae minima et optio aut distinctio. Impedit ipsam dicta qui, laboriosam accusamus voluptates fugiat modi quo asperiores alias vitae vel eos. Ducimus nisi, ratione nulla corrupti, pariatur mollitia suscipit at, facere ea neque asperiores enim molestiae! Aliquid excepturi ratione tempora vitae harum laudantium neque blanditiis obcaecati iure assumenda dolores vel, expedita architecto laboriosam optio tempore, magnam consequuntur quisquam, cupiditate hic nulla? Veniam, libero distinctio? Saepe corrupti impedit sunt vitae. Minima quia aspernatur ipsa quaerat temporibus rem? Illum, cum!
      </p>

      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus impedit architecto ducimus obcaecati commodi eligendi eius quisquam modi rerum est quasi enim ipsam numquam culpa, maiores dolor nisi voluptates mollitia nulla repudiandae? Consequatur, harum inventore vero magnam molestias veniam dolor autem laborum voluptates, aspernatur deleniti praesentium incidunt soluta rem libero!
      </p>
    </div>

  </div>

</body>

</html>