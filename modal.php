<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<?php
        include 'authentication.php';
    ?>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <h2>Book</h2>
          <section class="book" id="book">

              <h1 class="heading"><span>book </span> now</h1>
          
              <div class="row">
          
                  <div class="image">
                      <img src="image/book.jpg" alt="">
                  </div>
          
                  <form action="">
                      <h3>book appointment</h3>
                      <input type="text" placeholder="your name" class="box">
                      <input type="number" placeholder="your number" class="box">
                      <input type="email" placeholder="your email" class="box">
                      <input type="date" class="box">
                       <input type="submit" value="book now" class="btn">
                  </form>
              </div>
          </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
