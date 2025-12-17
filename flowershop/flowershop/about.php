<?php
include 'config.php';
session_start();

$user_id=$_SESSION['user_id'];

if(!isset($user_id)){
  header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Page</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="home.css">

</head>
<body>
  
<?php
include 'user_header.php';
?>
<section class="about_cont">
    <img src="about1.jpg" alt="">
    <div class="about_descript">
      <h2>Why Choose Us ?</h2>
      <p>
        At The Flower Shop, we are passionate about bringing the beauty and joy of flowers into your life. With a wide variety of fresh, vibrant blooms, we offer arrangements for every occasion, from heartfelt gestures to grand celebrations. Our team of dedicated floral designers is committed to crafting stunning, unique bouquets tailored to your vision.
        We believe in creating memorable experiences, hosting floral workshops and community events that connect people through the art of flowers. With our easy-to-use online store, you can browse, customize, and order arrangements from the comfort of your home. We guarantee secure transactions, timely delivery, and the highest quality flowers, ensuring they arrive fresh and beautiful every time.
        Customer satisfaction is our top priority, and we’re here to answer any questions or offer guidance on selecting the perfect floral arrangement. Let us be a part of your special moments, adding color, fragrance, and beauty to every memory. Celebrate the magic of flowers with us today!
      </p>
    </div>
  </section>

  <section class="questions_cont">
    <div class="questions">
    <h2>Have Any Queries?</h2>
    <p>At The Flower Shop, your satisfaction is our top priority. If you have any questions, concerns, or special requests, our friendly and knowledgeable team is here to help you every step of the way. Whether you're looking for advice on choosing the perfect bouquet or need assistance with an order, feel free to reach out – we’re always happy to assist!</p>
    <button class="product_btn" onclick="window.location.href='contact.php'">Contact Us</button>
    </div>
    
  </section>

<?php
include 'footer.php';
?>
<script src="https://kit.fontawesome.com/eedbcd0c96.js" crossorigin="anonymous"></script>

<script src="script.js"></script>

</body>
</html>