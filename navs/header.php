<header class="site-header">
  <div class="container">
    <a href="/index.php" class="logo-link" aria-label="Go to homepage">
      <img src="https://360muslimexperts.com/assets/medico-logo-300.png" alt="Logo" class="logo" width="50" height="50" loading="lazy" />
      <span class="site-title">Medico 360</span>
    </a>

    <!-- Hamburger menu toggle -->
    <input type="checkbox" id="menu-toggle" class="menu-toggle" aria-label="Toggle menu" aria-expanded="false" aria-controls="navbar-menu" />
    <label for="menu-toggle" class="hamburger" aria-label="Toggle navigation menu">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </label>
    <div class="menu-overlay"></div>

    <!-- Navigation menu -->
    <nav class="navbar" id="navbar-menu" role="navigation" aria-label="Main navigation">
      <ul>
        <li><a href="/" class="<?php echo basename($_SERVER['PHP_SELF']) === 'index.php' ? 'active' : ''; ?>" aria-current="<?php echo basename($_SERVER['PHP_SELF']) === 'index.php' ? 'page' : 'false'; ?>">Home</a></li>
        <li><a href="/blog" class="<?php echo isActive('/blog'); ?>" <?php if (isActive('/blog')) echo 'aria-current="page"'; ?>>blog</a></li>
        <li><a href="/ask.php" class="<?php echo basename($_SERVER['PHP_SELF']) === 'ask.php' ? 'active' : ''; ?>" aria-current="<?php echo basename($_SERVER['PHP_SELF']) === 'ask.php' ? 'page' : 'false'; ?>">Ask Medico</a></li>
        <li><a href="/about.html" class="<?php echo basename($_SERVER['PHP_SELF']) === 'about.html' ? 'active' : ''; ?>" aria-current="<?php echo basename($_SERVER['PHP_SELF']) === 'about.html' ? 'page' : 'false'; ?>">About</a></li>
        <li><a href="/contact.html" class="<?php echo basename($_SERVER['PHP_SELF']) === 'contact.html' ? 'active' : ''; ?>" aria-current="<?php echo basename($_SERVER['PHP_SELF']) === 'contact.html' ? 'page' : 'false'; ?>">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>