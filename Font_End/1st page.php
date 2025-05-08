<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Events by Arthur</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #38b2ac; /* Teal */
      --accent: #4299e1;  /* Blue */
      --glass-bg: rgba(255, 255, 255, 0.15);
      --border-glass: rgba(255, 255, 255, 0.3);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Open Sans', sans-serif;
      color: #333;
      background: linear-gradient(135deg, #e6fffa, #ebf8ff);
      overflow-x: hidden;
      background: url(Font_End/Images/84a5d02a9009bfb8c59754d2b00b936c.jpg) no-repeat;
    }
  
    header {
      position: sticky;
      top: 0;
      z-index: 1000;
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(8px);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 40px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .logo-area {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 4px;
}


    .logo-area img {
      height: 100px;
    }

    .logo-text {
  font-family: 'Playfair Display', serif;
  font-size: 18px;
  font-weight: 600;
  color: var(--primary);
  margin-top: 4px;
}


    .nav-buttons a {
      text-decoration: none;
      margin-left: 15px;
      padding: 10px 18px;
      font-weight: bold;
      background: var(--primary);
      color: white;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .nav-buttons a:hover {
      background: var(--accent);
      box-shadow: 0 0 10px rgba(0, 128, 128, 0.5);
    }

    .hero {
      text-align: center;
      padding: 120px 20px 60px;
      background: linear-gradient(to right, #ccfbf1, #bee3f8);
      position: relative;
    }

    .glass-box {
      margin: auto;
      max-width: 700px;
      background: var(--glass-bg);
      padding: 40px;
      border-radius: 20px;
      border: 1px solid var(--border-glass);
      backdrop-filter: blur(12px);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
      animation: slideFade 1.2s ease forwards;
    }

    .glass-box h1 {
      font-size: 2.8rem;
      color: var(--primary);
      font-family: 'Playfair Display', serif;
    }

    .glass-box p {
      font-size: 1.1rem;
      margin: 15px 0;
    }

    .glass-box img {
      width: 100%;
      max-width: 360px;
      margin: 30px auto 10px;
      border-radius: 15px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    .explore-btn {
      display: inline-block;
      margin-top: 20px;
      background: var(--primary);
      color: #fff;
      padding: 12px 28px;
      border-radius: 10px;
      font-size: 16px;
      text-decoration: none;
      font-weight: 600;
      transition: background 0.3s ease;
    }

    .explore-btn:hover {
      background: var(--accent);
    }

    .portfolio {
      padding: 60px 40px;
      background: #f0fdfa;
      text-align: center;
    }

    .portfolio h2 {
      font-size: 2.2rem;
      color: var(--primary);
      margin-bottom: 40px;
    }

    .works {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .work {
      width: 280px;
      background: #e0f2f1;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 4px 16px rgba(0,0,0,0.07);
      transition: transform 0.3s ease;
    }

    .work:hover {
      transform: translateY(-5px);
    }

    .work img {
      width: 100%;
      border-radius: 10px;
    }

    .work p {
      margin-top: 10px;
      font-weight: 600;
      color: #444;
    }

    @keyframes slideFade {
      0% { opacity: 0; transform: translateY(30px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 768px) {
      .works {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>



<header>
  <div class="logo-area">
    <img src="images/logo.png" alt="Logo" style="height: 80px;">
    <div class="logo-text">Events by Arthur</div>
  </div>
  <div class="nav-buttons">
    <a href="Couple/Login.php">Login</a>
    <a href="Couple/Register.php">Sign Up</a>
  </div>
</header>

  <section class="hero">
    <div class="glass-box">
      <h1>Crafting Unforgettable Moments</h1>
      <p>From elegant ceremonies to joyful receptions, we bring your wedding vision to life — stylish, timeless, and stress-free.</p>
      <br>
      <a href="portfolio.php" class="explore-btn">Explore Our Work</a>
    </div>
  </section>

  <section class="portfolio">
    <h2>Our Signature Weddings</h2>
    <div class="works">
      <div class="work">
        <img src="images/work1.jpg" alt="Beach Wedding">
        <p>Beachside Bliss</p>
      </div>
      <div class="work">
        <img src="images/work2.jpg" alt="Garden Theme">
        <p>Garden Elegance</p>
      </div>
      <div class="work">
        <img src="images/work3.jpg" alt="Luxury Ballroom">
        <p>Royal Ballroom Night</p>
      </div>
    </div>
  </section>

</body>
</html>
