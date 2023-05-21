<nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgba(0, 0, 0, 0.1);">
  <div class="container">
    <a class="navbar-brand" href="/" style="font-weight: bold; color: white;">Partner Kamu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/" style="font-weight: bold; color: white;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://partner-kamu.blogspot.com/" target="_blank"style="font-weight: bold; color: white;">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pricing" style="font-weight: bold; color: white;">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about" style="font-weight: bold; color: white;">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
.navbar {
  background-color: rgba(0, 0, 0, 0.315);
  backdrop-filter: blur(20px);
}

.navbar-brand,
.navbar-nav .nav-link {
  color: white;
}

.navbar-brand,
.navbar-nav .nav-link:hover {
  color: white;
}

.navbar-collapse {
  flex-grow: 0;
}

.navbar-nav {
  margin-left: auto;
}

@media (max-width: 576px) {
  .navbar-collapse {
    background-color: rgba(0, 0, 0, 0.9);
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    z-index: 999;
    backdrop-filter: blur(10px);
  }
  
  .navbar-nav {
    width: 100%;
    text-align: center;
  }
  
  .navbar-nav .nav-item {
    width: 100%;
    display: inline-block;
  }
  
  .navbar-toggler {
    margin-right: 15px;
  }
}
</style>
