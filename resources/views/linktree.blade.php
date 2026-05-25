<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DrinkPepsi LinkTree Start Now</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />

    <style>
      body {
        background-color: #000000;
        color: #ffffff;
        font-family:
          -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
          Arial, sans-serif;
      }

      .linktree-container {
        max-width: 680px;
        margin: 3rem auto;
        padding: 3rem 2rem;
        border: 1px solid #dadada;
        border-radius: 24px;
        background-color: #636363;
      }

      .profile-pic {
        width: 96px;
        height: 96px;
        border-radius: 50%;
        object-fit: cover;
      }

      .social-icons a {
        color: #ffffff;
        font-size: 1.5rem;
        margin: 0 12px;
        text-decoration: none;
        transition: opacity 0.2s;
      }

      .social-icons a:hover {
        opacity: 0.7;
      }

      .link-card {
        background-color: #121212;
        border: 1px solid #333333;
        border-radius: 12px;
        padding: 18px 20px;
        margin-bottom: 16px;
        text-decoration: none;
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: space-between;
        transition:
          transform 0.2s ease,
          background-color 0.2s ease,
          border-color 0.2s ease;
      }

      .link-card:hover {
        transform: scale(1.02);
        background-color: #222222;
        border-color: #555555;
        color: #ffffff;
      }

      .link-card-content {
        flex-grow: 1;
        text-align: center;
        font-weight: 600;
      }

      .three-dots {
        color: #ffffff;
        opacity: 0.6;
        font-size: 1.2rem;
      }

      .spacer {
        width: 24px;
      }
    </style>
  </head>
  <body>
    <div class="linktree-container text-center">
      <img
        src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/Pepsi_2023.svg/960px-Pepsi_2023.svg.png?_=20240325134818"
        alt="DrinkPepsi"
        class="profile-pic mb-3"
      />
      <h2 class="fw-bold fs-4 mb-2">DrinkPepsi</h2>
      <p class="mb-4">Is Pepsi OkAy??? Honey we're thriving</p>

      <div class="social-icons mb-4 d-flex justify-content-center flex-wrap">
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-tiktok"></i></a>
        <a href="#"><i class="bi bi-youtube"></i></a>
        <a href="#"><i class="bi bi-twitter-x"></i></a>
        <a href="#"><i class="bi bi-threads"></i></a>
      </div>

      <a href="#" class="link-card">
        <div class="spacer"></div>
        <div class="link-card-content">Buy Pepsi Prebiotic Cola</div>
        <div class="three-dots"><i class="bi bi-three-dots-vertical"></i></div>
      </a>

      <a href="#" class="link-card">
        <div class="spacer"></div>
        <div class="link-card-content">PEPSI.COM</div>
        <div class="three-dots"><i class="bi bi-three-dots-vertical"></i></div>
      </a>

      <a href="#" class="link-card">
        <div class="spacer"></div>
        <div class="link-card-content">Facebook 📱</div>
        <div class="three-dots"><i class="bi bi-three-dots-vertical"></i></div>
      </a>

      <a href="#" class="link-card">
        <div class="spacer"></div>
        <div class="link-card-content">TikTok 🎬</div>
        <div class="three-dots"><i class="bi bi-three-dots-vertical"></i></div>
      </a>

      <a
        href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&list=RDdQw4w9WgXcQ&start_radio=1"
        class="link-card"
      >
        <div class="spacer"></div>
        <div class="link-card-content">Secret Link</div>
        <div class="three-dots"><i class="bi bi-three-dots-vertical"></i></div>
      </a>

      <hr style="border-color: #555555; margin: 30px 0;">

      <div style="margin-top: 20px;">
        <a href="/menu" class="link-card" style="background-color: #1a1a1a; border-color: #764ba2;">
          <div class="spacer"></div>
          <div class="link-card-content">📍 Back to Main Menu</div>
          <div class="three-dots"><i class="bi bi-arrow-left"></i></div>
        </a>
        <a href="/blog" class="link-card" style="background-color: #1a1a1a; border-color: #667eea;">
          <div class="spacer"></div>
          <div class="link-card-content">🏠 Home Page</div>
          <div class="three-dots"><i class="bi bi-house-fill"></i></div>
        </a>
      </div>
    </div>
  </body>
</html>
