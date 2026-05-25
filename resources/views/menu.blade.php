<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Izaaz's Main Menu</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      body {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        padding: 40px 20px;
      }
      .menu-container {
        max-width: 800px;
        margin: 0 auto;
      }
      .header-section {
        text-align: center;
        color: white;
        margin-bottom: 50px;
      }
      .header-section h1 {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 10px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
      }
      .header-section p {
        font-size: 1.2rem;
        opacity: 0.9;
      }
      .menu-category {
        background: white;
        border-radius: 10px;
        padding: 25px;
        margin-bottom: 25px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      }
      .menu-category h3 {
        color: #667eea;
        border-bottom: 2px solid #667eea;
        padding-bottom: 10px;
        margin-bottom: 15px;
      }
      .menu-item {
        display: block;
        padding: 12px;
        margin-bottom: 10px;
        text-decoration: none;
        background: #f8f9fa;
        border-left: 4px solid #667eea;
        border-radius: 4px;
        transition: all 0.3s;
      }
      .menu-item:hover {
        background: #667eea;
        color: white;
        transform: translateX(5px);
      }
      .menu-item small {
        display: block;
        font-size: 0.85rem;
        opacity: 0.7;
        margin-top: 5px;
      }
    </style>
  </head>
  <body>
    <div class="menu-container">
      <!-- Header -->
      <div class="header-section">
        <h1>Izaaz Verdiansyah Khaisan Athif</h1>
        <p>NRP: 5026241194</p>
        <p>Complete Website Navigation</p>
      </div>

      <!-- Blog Section -->
      <div class="menu-category">
        <h3>📰 Blog & Main Pages</h3>
        <a href="/blog" class="menu-item">
          Home Page
          <small>Main blog homepage with latest updates</small>
        </a>
        <a href="/blog/tentang" class="menu-item">
          Tentang (About)
          <small>Learn more about this website and its purpose</small>
        </a>
        <a href="/blog/kontak" class="menu-item">
          Kontak (Contact)
          <small>Get in touch with us via contact information</small>
        </a>
      </div>

      <!-- Forms & Database -->
      <div class="menu-category">
        <h3>📝 Forms & Data</h3>
        <a href="/formulir" class="menu-item">
          Formulir Input
          <small>Fill out personal information form</small>
        </a>
        <a href="/pegawai" class="menu-item">
          Data Pegawai
          <small>View employee database with pagination</small>
        </a>
      </div>

      <!-- Courses & Learning Materials -->
      <div class="menu-category">
        <h3>📚 Pertemuan (Lesson Materials)</h3>
        <a href="/pertemuan1" class="menu-item">
          Pertemuan 1
          <small>Introduction to ITS and Web Development</small>
        </a>
        <a href="/pertemuan2" class="menu-item">
          Pertemuan 2
          <small>RoboDog Innovation Article</small>
        </a>
        <a href="/pertemuan3" class="menu-item">
          Pertemuan 3
          <small>Responsive Web Design with Bootstrap</small>
        </a>
        <a href="/pertemuan4" class="menu-item">
          Pertemuan 4
          <small>Client Reviews & Testimonials</small>
        </a>
        <a href="/pertemuan5" class="menu-item">
          Pertemuan 5
          <small>DELL Technologies Corporate Website</small>
        </a>
      </div>

      <!-- Additional Features -->
      <div class="menu-category">
        <h3>⚙️ Additional Features</h3>
        <a href="/bootstrap" class="menu-item">
          Bootstrap Demo
          <small>Interactive login form with tooltips</small>
        </a>
        <a href="/linktree" class="menu-item">
          LinkTree
          <small>Pepsi brand social links collection</small>
        </a>
        <a href="/biodata" class="menu-item">
          Biodata
          <small>Personal information and courses</small>
        </a>
      </div>

      <!-- Footer -->
      <div class="text-center text-white mt-5">
        <p>&copy; 2026 Izaaz Verdiansyah. All Rights Reserved.</p>
        <p>
          <a href="https://github.com/izaaz-v/izaaz-v.github.io" target="_blank"
             style="color: white; text-decoration: none;">
            Visit GitHub Repository
          </a>
        </p>
      </div>
    </div>
  </body>
</html>
