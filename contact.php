<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Contact - Jezreel Farm Empire</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="header">
    <div class="wrap">
      <div><h1>Contact Us</h1></div>
      <nav>
        <a href="index.html">Home</a>
        <a href="products.html">Products</a>
        <a href="contact.html">Contact</a>
      </nav>
    </div>
  </header>

  <main class="container">
    <section>
      <h2>Get in Touch</h2>
      <p>Email: info@jezreelfarm.com</p>
      <p>Phone: +254 700 000 000</p>

      <h3>Send us a message</h3>
      <form class="contact-form" action="mailto:info@jezreelfarm.com" method="post" enctype="text/plain">
        <input type="text" name="name" placeholder="Your name" required>
        <input type="email" name="email" placeholder="Your email or phone" required>
        <textarea name="message" rows="6" placeholder="Message" required></textarea>
        <button class="btn" type="submit">Send</button>
      </form>
    </section>
  </main>

  <?php include "footer.html"; ?>
</body>
</html>
