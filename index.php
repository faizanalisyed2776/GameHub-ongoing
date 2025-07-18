<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GameStore - Your Ultimate Gaming Destination</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="pages/styles.css">
</head>
<body>
  <nav class="navbar">
    <div class="nav-left">
      <button class="hamburger" id="hamburger"><i class='bx bx-menu'></i></button>
      <div class="logo"><i class='bx bxs-game'></i> <span>GameHub</span></div>
    </div>
    <div class="nav-links" id="navLinks">
      <ul>
     <li><a href="index.php"><i class='bx bx-home'></i> Home</a></li>
        <li><a href="#web-games"><i class='bx bx-joystick'></i> Games</a></li>
        <li><a href="pages/about.php"><i class='bx bx-user'></i> About Us</a></li>
         <li><a href="pages/games.php"><i class='bx  bx-store-alt'  ></i>  Store</a></li>
        <li><a href="pages/contact.php"><i class='bx bx-envelope'></i> Contact</a></li>
      </ul>
    </div>
    <div class="nav-right">
      <!-- Theme Toggle Button -->
      <button class="theme-button" id="themeToggle">
        <i class='bx bx-sun' id="themeIcon"></i>
      </button>
  
      <a href="pages/join.php"><button class="join-button">Join</button></a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="hero">
    <video autoplay muted loop class="hero-video">
      <source src="https://media.istockphoto.com/id/1874598624/video/animated-pixel-art-design-of-cityscape-with-sunset-and-moving-clouds.mp4?s=mp4-640x640-is&k=20&c=E_JXwvcl8Ys55vrUJIKtmRcjRAaMVFedDt9m6x5UTZs=" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="hero-content">
      <h1>Welcome to GameStore</h1>
      <p>Your ultimate destination for the best games in the world.</p>
      <a href="#games" class="cta-button">Explore Games</a>
    </div>
  </section>
  </section>
  <section id="luxury-games" class="luxury-games">
    <h2>Limited Luxury Games</h2>
    <p>Experience the pinnacle of gaming with our exclusive collection of luxury games. These titles offer unparalleled graphics, storytelling, and gameplay.</p>
    <div class="luxury-games-grid">
      <!-- Game 1 -->
      <div class="luxury-card">
        <div class="luxury-image">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDLGO8jtv-P-0QocTavJDCMOlEqSHPym1g2Q&s" alt="Luxury Game 1">
          <span class="luxury-badge">Exclusive</span>
          <button class="quick-view">Quick View</button>
        </div>
        <div class="luxury-details">
          <h3>Elysium: The Golden Realm</h3>
          <p>Step into a world of opulence and adventure in this visually stunning RPG.</p>
          <div class="luxury-price">
            <p>$99.99 <span class="original-price">$149.99</span></p>
            <button class="buy-now">Buy Now</button>
          </div>
        </div>
      </div>
  
      <!-- Game 2 -->
      <div class="luxury-card">
        <div class="luxury-image">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXDM9MOaWnkfl836ROy8Fzsb3qlrm4yF0SAA&s" alt="Luxury Game 2">
          <span class="luxury-badge">Limited Edition</span>
          <button class="quick-view">Quick View</button>
        </div>
        <div class="luxury-details">
          <h3>Neon Dynasty</h3>
          <p>A cyberpunk masterpiece with cutting-edge visuals and immersive gameplay.</p>
          <div class="luxury-price">
            <p>$79.99 <span class="original-price">$119.99</span></p>
            <button class="buy-now">Buy Now</button>
          </div>
        </div>
      </div>
  
      <!-- Game 3 -->
      <div class="luxury-card">
        <div class="luxury-image">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv_KgblTiYw35IU4L_qhClMemcuWy1-KrtpA&s" alt="Luxury Game 3">
          <span class="luxury-badge">Premium</span>
          <button class="quick-view">Quick View</button>
        </div>
        <div class="luxury-details">
          <h3>Royal Ascension</h3>
          <p>Rule a kingdom in this strategy game with breathtaking visuals and deep gameplay.</p>
          <div class="luxury-price">
            <p>$89.99 <span class="original-price">$129.99</span></p>
            <button class="buy-now">Buy Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="gaming-news" class="gaming-news">
    <h2>Gaming News & Updates</h2>
    <p>Stay up-to-date with the latest news, updates, and announcements from the gaming world.</p>
  
    <!-- Alternating Text and Images -->
    <div class="news-articles">
      <!-- Article 1 -->
      <article class="news-article">
        <div class="article-content">
          <h3>CyberWorld 2079: The Most Anticipated RPG is Finally Here!</h3>
          <p>Gamers have been eagerly awaiting CyberWorld 2079, the latest open-world cyberpunk RPG from NeonVerse Studios. The game features a sprawling futuristic city, enhanced AI-driven NPCs, and a fully immersive VR mode.</p>
          <button class="read-more">Read More</button>
        </div>
        <div class="article-image">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS61-KCq4Frsv-XDUYiAlHNO9TwdV5k-P03IQ&s" alt="CyberWorld 2079">
          <span class="article-badge">New Release</span>
        </div>
      </article>
  
      <!-- Article 2 -->
      <article class="news-article">
        <div class="article-image">
          <img src="https://esports-news.co.uk/wp-content/uploads/2021/03/revolution-esports-logo.jpg" alt="Esports Tournament">
          <span class="article-badge">Esports</span>
        </div>
        <div class="article-content">
          <h3>Esports Revolution: The Biggest Tournament Yet!</h3>
          <p>The global esports scene is witnessing its biggest-ever showdown as the Legends Arena Championship 2025 kicks off. With a staggering $10 million prize pool, teams from across the world are battling in games like Valorant, Counter-Strike 2, League of Legends, and Dota 2.</p>
          <button class="read-more">Read More</button>
        </div>
      </article>
  
      <!-- Article 3 -->
      <article class="news-article">
        <div class="article-content">
          <h3>Next-Gen Graphics Cards: Is It Time to Upgrade?</h3>
          <p>The NVIDIA RTX 5090 and AMD Radeon RX 8900 XT have officially launched, pushing gaming performance to 8K resolution with over 120 FPS in ultra settings. Benchmarks show that these new GPUs outperform their predecessors by 40%.</p>
          <button class="read-more">Read More</button>
        </div>
        <div class="article-image">
          <img src="https://www.nvidia.com/en-in/geforce/graphics-cards/50-series/rtx-5090/_jcr_content/root/responsivegrid/nv_modalcontainer_1683966542/nv_image.coreimg.100.1070.jpeg/1736094519375/geforce-rtx-5090-gallery-shot-2-ari.jpeg" alt="Next-Gen Graphics Cards">
          <span class="article-badge">Hardware</span>
        </div>
      </article>
    </div>
  </section>
 
 
  <section id="gta-6-section" class="gta-6-section">
    <div class="gta-6-content">
      <!-- Image -->
      <div class="gta-6-image">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWM8h9j0mcQ_mcEsUzS25nhRduB2IA7PfUMg&s" alt="GTA 6">
      </div>
  
      <!-- GTA 6 Paragraph -->
      <div class="gta-6-text">
        <h3>Grand Theft Auto VI: What We Know So Far</h3>
        <p>
          The gaming world is buzzing with excitement as Rockstar Games officially announced the development of Grand Theft Auto VI. Set in a modern-day Vice City, the game promises to deliver an unparalleled open-world experience with cutting-edge graphics, immersive storytelling, and dynamic gameplay. Rumors suggest that GTA VI will feature a dual-protagonist system, allowing players to switch between two characters with unique storylines. Additionally, the game is expected to introduce a living, breathing world with advanced AI, realistic weather systems, and a vast array of activities. With a release date still under wraps, fans are eagerly awaiting more details about what could be the most ambitious game in the series yet.
        </p>
      </div>
    </div>
  </section>
 
 <!-- Web Games -->
<section id="web-games" class="web-games">
  <h2>Web Games</h2>
  <p>Play these classic games directly in your browser - no downloads required!</p>
  
  <div class="web-games-grid">
    <!-- Racing Game -->
    <div class="web-game-card">
      <div class="web-game-image">
        <img src="https://media.istockphoto.com/id/1474952342/video/car-racing-game-8-bit-retro-3d-animation-4k.jpg?s=640x640&k=20&c=uaYl8BWattkzyn0rJngfyB6G2aLyEwCj7J1CpqHKlro=" alt="Racing Game">
        <div class="play-button"><i class='bx bx-play'></i></div>
      </div>
      <div class="web-game-details">
        <h3> Pixel Racing</h3>
        <p>High-speed browser racing with customizable cars</p>
        <a href="pages/web-games/PixelRacing.html" class="play-now">Play Now</a>
      </div>
    </div>

    <!-- Tetris -->
    <div class="web-game-card">
      <div class="web-game-image">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyBRLVuVQC4EkmvI0CDoMZy7Wl2gcpxLRFPA&s" alt="Tetris">
        <div class="play-button"><i class='bx bx-play'></i></div>
      </div>
      <div class="web-game-details">
        <h3>Tetris Pro</h3>
        <p>The classic puzzle game with modern twists</p>
        <a href="pages/web-games/Tetris Pro.html" class="play-now">Play Now</a>
      </div>
    </div>

    <!-- Snake -->
    <div class="web-game-card">
      <div class="web-game-image">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsXbF7ZA00AolEZS306QaeEuxXF_LmiulvAA&s" alt="Snake Game">
        <div class="play-button"><i class='bx bx-play'></i></div>
      </div>
      <div class="web-game-details">
        <h3>Snake Game</h3>
        <p>Retro snake game with power-ups and obstacles</p>
        <a href="pages/web-games/SnakeGame.html" class="play-now">Play Now</a>
      </div>
    </div>

    <!-- Coming Soon -->
    <div class="web-game-card coming-soon">
      <div class="web-game-image">
        <img src="https://img.freepik.com/free-vector/gradient-mystery-box-illustration_23-2149532750.jpg?semt=ais_hybrid&w=740" alt="Coming Soon">
        <div class="play-button"><i class='bx bx-time'></i></div>
      </div>
      <div class="web-game-details">
        <h3>Mystery Game</h3>
        <p>Exciting new game launching soon!</p>
        <div class="coming-soon-badge">Coming Soon</div>
      </div>
    </div>
  </div>
</section>

  <section class="our-partners">
    <div class="partners-container">
        <h2 class="partners-title">🤝 Our Partners</h2>
        <p class="partners-subtitle">
            We proudly collaborate with the biggest names in gaming.  
            These legendary studios shape the future of interactive entertainment.
        </p>

        <div class="partners-grid">
            <!-- Rockstar Games -->
            <div class="partner-card">
                <div class="partner-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkntITRgUjqq23dUVoCR5wbZ1H_kb6DOc2Jg&s" alt="Rockstar Games">
                </div>
                <div class="partner-info">
                    <h3>Rockstar Games</h3>
                    <p>Creators of Grand Theft Auto, Red Dead Redemption, and more.</p>
                    <a href="https://www.instagram.com/rockstargames/" target="_blank" class="social-link">
                        <i class='bx bxl-instagram'></i> Follow
                    </a>
                </div>
            </div>

  <div class="partner-card">
                <div class="partner-image">
                    <img src="https://eu-images.contentstack.com/v3/assets/blt740a130ae3c5d529/blt6461a4bc63e94eae/650f006340ca7cf8ac4b6bf6/Spotlight_Header.png?disable=upscale&width=1200&height=630&fit=crop" alt=" Quantic Dream ">
                </div>
                <div class="partner-info">
                    <h3> Quantic Dream </h3>
                    <p>Creators of Detroit: Become Human, Heavy Rain, and more.</p>
                    <a href="https://www.instagram.com/rockstargames/" target="_blank" class="social-link">
                        <i class='bx bxl-instagram'></i> Follow
                    </a>
                </div>
            </div>

            <!-- Mojang Studios -->
            <div class="partner-card">
                <div class="partner-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeAdjGXa1Jeij5Jix0BcrICO2__nslMDX5Gg&s" alt="Mojang Studios">
                </div>
                <div class="partner-info">
                    <h3>Mojang Studios</h3>
                    <p>The masterminds behind Minecraft, the best-selling game ever.</p>
                    <a href="https://www.instagram.com/mojangstudios/" target="_blank" class="social-link">
                        <i class='bx bxl-instagram'></i> Follow
                    </a>
                </div>
            </div>

            <!-- Santa Monica Studio -->
            <div class="partner-card">
                <div class="partner-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHWkvIcUFsdYnl49xqpFnDp73eFAZMYDMKrg&s" alt="Santa Monica Studio">
                </div>
                <div class="partner-info">
                    <h3>Santa Monica Studio</h3>
                    <p>Developers of the legendary God of War series.</p>
                    <a href="https://www.instagram.com/santamonicastudio/" target="_blank" class="social-link">
                        <i class='bx bxl-instagram'></i> Follow
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
  
  <section id="limited-time" class="limited-time">
    <h2>Limited Time Offers</h2>
    <p>Don't miss out on these exclusive deals! Grab them before they're gone.</p>
    <div class="limited-time-grid">
      <!-- Card 1 -->
      <div class="limited-card">
        <div class="limited-image">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7GmXoWQIhGZsAxZJ4NJdNQnzIwbErM9rN7Lzo9MuhJPhz4phZ0GBJEcrP2lh-bxsX1MA&usqp=CAU" alt="Game 1">
          <span class="limited-badge">50% Off</span>
        </div>
        <div class="limited-details">
          <h3>CyberWorld 2077</h3>
          <p>Step into a futuristic world with stunning visuals and immersive gameplay.</p>
          <div class="limited-price">
            <p>$49.99 <span class="original-price">$99.99</span></p>
            <button class="buy-now">Buy Now</button>
          </div>
        </div>
      </div>
  
      <!-- Card 2 -->
      <div class="limited-card">
        <div class="limited-image">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXDM9MOaWnkfl836ROy8Fzsb3qlrm4yF0SAA&s" alt="Game 2">
          <span class="limited-badge">30% Off</span>
        </div>
        <div class="limited-details">
          <h3>Neon Dynasty</h3>
          <p>A cyberpunk masterpiece with cutting-edge visuals and immersive gameplay.</p>
          <div class="limited-price">
            <p>$39.99 <span class="original-price">$59.99</span></p>
            <button class="buy-now">Buy Now</button>
          </div>
        </div>
      </div>
  
      <!-- Card 3 -->
      <div class="limited-card">
        <div class="limited-image">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR-HYpU3aG_9368Zg6JSkSB_pZnptnwoI8KQ&s" alt="Game 3">
          <span class="limited-badge">25% Off</span>
        </div>
        <div class="limited-details">
          <h3>Royal Ascension</h3>
          <p>Rule a kingdom in this strategy game with breathtaking visuals and deep gameplay.</p>
          <div class="limited-price">
            <p>$44.99 <span class="original-price">$59.99</span></p>
            <button class="buy-now">Buy Now</button>
          </div>
        </div>
      </div>
  
      <!-- Card 4 -->
      <div class="limited-card">
        <div class="limited-image">
          <img src="https://image.api.playstation.com/vulcan/ap/rnd/202402/0713/d956c0df3a0cfe7c1b8e81c684ecff8a9a141c4f1f38578c.png" alt="Game 4">
          <span class="limited-badge">40% Off</span>
        </div>
        <div class="limited-details">
          <h3>Shadow Realms</h3>
          <p>Explore dark dungeons and defeat powerful enemies in this action-packed RPG.</p>
          <div class="limited-price">
            <p>$29.99 <span class="original-price">$49.99</span></p>
            <button class="buy-now">Buy Now</button>
          </div>
        </div>
      </div>
  
      <!-- Card 5 -->
      <div class="limited-card">
        <div class="limited-image">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSd0EgEOv0GjoIlD1MZbL-RtxXfC9z18tWPhg&s" alt="Game 5">
          <span class="limited-badge">20% Off</span>
        </div>
        <div class="limited-details">
          <h3>Galactic Wars</h3>
          <p>Command your fleet and conquer the galaxy in this epic space strategy game.</p>
          <div class="limited-price">
            <p>$34.99 <span class="original-price">$44.99</span></p>
            <button class="buy-now">Buy Now</button>
          </div>
        </div>
      </div>
  
      <!-- Card 6 -->
      <div class="limited-card">
        <div class="limited-image">
          <img src="https://play-lh.googleusercontent.com/R8GhXN219A88qf4guJbpJKdqyBio9gAqIMXx3batgn9iim3nfvr5aPoE6EAQjT4fmA=w526-h296-rw" alt="Game 6">
          <span class="limited-badge">35% Off</span>
        </div>
        <div class="limited-details">
          <h3>Mystic Legends</h3>
          <p>Uncover ancient secrets and battle mythical creatures in this fantasy RPG.</p>
          <div class="limited-price">
            <p>$39.99 <span class="original-price">$59.99</span></p>
            <button class="buy-now">Buy Now</button>
          </div>
        </div>
      </div>
  
      <!-- Card 7 -->
      <div class="limited-card">
        <div class="limited-image">
          <img src="/assets/media/upcoming7jpg.jpeg" alt="Game 7">
          <span class="limited-badge">15% Off</span>
        </div>
        <div class="limited-details">
          <h3>Zombie Apocalypse</h3>
          <p>Survive the undead horde in this intense survival horror game.</p>
          <div class="limited-price">
            <p>$24.99 <span class="original-price">$29.99</span></p>
            <button class="buy-now">Buy Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Our Partners Section -->
    <section class="our-partners">
        <div class="our-partners-container">
            <h2>Our Partners</h2>
            <p>Check out these amazing content creators! We collaborate with them to bring you exclusive gaming content and experiences.</p>
            <div class="developer-cards">
                <!-- Partner 1 -->
                <div class="developer-card">
                    <div class="developer-image">
                        <img src="https://yt3.googleusercontent.com/kKLvEl3-qLD8tS8uy7CXR0nZRNg41Tr0E6iZ5erM7FCdXyCvWfijBGz-jfn3Sm_bBGFc8BFpieU=s900-c-k-c0x00ffffff-no-rj" alt="Beast Boy Shub">
                    </div>
                    <div class="developer-details">
                        <h3>Beast Boy Shub</h3>
                        <p>YouTube & Instagram</p>
                        <div class="social-links">
                            <a href="https://www.youtube.com/channel/UCI86prlqXhbkREDMTaORvLQ" target="_blank"><i class='bx bxl-youtube bx-md'></i></a>
                            <a href="https://www.instagram.com/beast_boy._shub/?hl=en" target="_blank"><i class='bx bxl-instagram bx-md'></i></a>
                        </div>
                    </div>
                </div>
                <!-- Partner 2 -->
                <div class="developer-card">
                    <div class="developer-image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlv0NutWQfRoPzZKRvRkZL0Rw2O56xZidj3A&s" alt="Penguinz0">
                    </div>
                    <div class="developer-details">
                        <h3>Penguinz0</h3>
                        <p>YouTube & Instagram</p>
                        <div class="social-links">
                            <a href="https://www.youtube.com/user/penguinz0" target="_blank"><i class='bx bxl-youtube bx-md'></i></a>
                            <a href="https://www.instagram.com/bigmoistcr1tikal/?hl=en" target="_blank"><i class='bx bxl-instagram bx-md'></i></a>
                        </div>
                    </div>
                </div>
                <!-- Partner 3 -->
                 <div class="developer-card">
                    <div class="developer-image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL3211RCmibHjZa3vqwzTb_e1NgZPRvzN5gA&s" alt="CaseOh">
                    </div>
                    <div class="developer-details">
                        <h3>CaseOh</h3>
                        <p>YouTube & Instagram</p>
                        <div class="social-links">
                            <a href="https://www.youtube.com/channel/UC63anZxfVGHUEmfBAf5w7pw" target="_blank"><i class='bx bxl-youtube bx-md'></i></a>
                            <a href="https://www.instagram.com/caseoh_games/?hl=en" target="_blank"><i class='bx bxl-instagram bx-md'></i></a>
                        </div>
                    </div>
                </div>
                  <!-- Partner 4 -->
                <div class="developer-card">
                    <div class="developer-image">
                        <img src="https://www.iwmbuzz.com/wp-content/uploads/2025/01/slaying-the-style-game-payal-gamings-hottest-midriff-baring-looks-9-736x920.jpg" alt="Payal Gaming">
                    </div>
                    <div class="developer-details">
                        <h3>Payal Gaming</h3>
                         <p>YouTube & Instagram</p>
                        <div class="social-links">
                            <a href="https://www.youtube.com/channel/UCwA3yPBSbZpwse6Q0aA2LPg" target="_blank"><i class='bx bxl-youtube bx-md'></i></a>
                            <a href="https://www.instagram.com/payalgamingg/?hl=en" target="_blank"><i class='bx bxl-instagram bx-md'></i></a>
                        </div>
                    </div>
                </div>
                  <!-- Partner 5 -->
                <div class="developer-card">
                    <div class="developer-image">
                        <img src="https://i.pinimg.com/736x/b3/50/a4/b350a43c29c7a26b029e21bf81e5ceff.jpg" alt="CarryisLive">
                    </div>
                    <div class="developer-details">
                        <h3>CarryisLive</h3>
                         <p>YouTube & Instagram</p>
                        <div class="social-links">
                            <a href="https://www.youtube.com/channel/UCj22tfcQrWG7EMEKS0qLeEg" target="_blank"><i class='bx bxl-youtube bx-md'></i></a>
                            <a href="https://www.instagram.com/carryminati/?hl=en" target="_blank"><i class='bx bxl-instagram bx-md'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


  <section id="trailer-clips" class="trailer-clips">
    <h2>Trailers & Clips</h2>
    <p>Watch the latest trailers and gameplay clips from your favorite games.</p>
    <div class="video-grid">
      <!-- Video 1 -->
      <div class="video-card">
        <div class="video-container">
          <iframe
            src="https://www.youtube.com/embed/VIDEO_ID_1"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
        <div class="video-details">
          <h3>CyberWorld 2079: Official Trailer</h3>
          <p>Experience the futuristic world of CyberWorld 2079 in this action-packed trailer.</p>
        </div>
      </div>
  
      <!-- Video 2 -->
      <div class="video-card">
        <div class="video-container">
          <iframe
            src="https://www.youtube.com/embed/VIDEO_ID_2"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
        <div class="video-details">
          <h3>Elden Ring: Gameplay Clip</h3>
          <p>Get a sneak peek at the gameplay mechanics of Elden Ring.</p>
        </div>
      </div>
  
      <!-- Video 3 -->
      <div class="video-card">
        <div class="video-container">
          <iframe
            src="https://www.youtube.com/embed/VIDEO_ID_3"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
        <div class="video-details">
          <h3>GTA VI: Teaser Trailer</h3>
          <p>Check out the first look at the highly anticipated GTA VI.</p>
        </div>
      </div>
    </div>
  </section>  
  <footer class="footer">
    <div class="footer-content">
      <!-- About Section -->
      <div class="footer-section">
        <h3>About GameHub</h3>
        <p>Welcome to GameHub, your ultimate destination for the latest and greatest in gaming. From AAA titles to indie gems, we bring you the best deals, news, and community events.</p>
        <div class="social-icons">
          <a href="#"><i class='bx bxl-facebook'></i></a>
          <a href="#"><i class='bx bxl-twitter'></i></a>
          <a href="#"><i class='bx bxl-instagram'></i></a>
          <a href="#"><i class='bx bxl-youtube'></i></a>
          <a href="#"><i class='bx bxl-discord'></i></a>
        </div>
      </div>
  
      <!-- Quick Links Section -->
      <div class="footer-section">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="index.php"><i class='bx bx-chevron-right'></i> Home</a></li>
          <li><a href="#web-games"><i class='bx bx-chevron-right'></i> Web Games</a></li>
          <li><a href="pages/games.php"><i class='bx bx-chevron-right'></i> All Games</a></li>
          <li><a href="pages/contact.php"><i class='bx bx-chevron-right'></i> Contact Us</a></li>
          <li><a href="pages/about.php"><i class='bx bx-chevron-right'></i> About Us</a></li>
        </ul>
      </div>
  
      <!-- Newsletter Section -->
      <div class="footer-section">
        <h3>Stay Updated</h3>
        <p>Subscribe to our newsletter to receive the latest gaming news, exclusive discounts, and special giveaways.</p>
        <form class="newsletter-form">
          <input type="email" placeholder="Enter your email" required>
          <button type="submit">Subscribe</button>
        </form>
      </div>  
    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <p>© 2025 GameHub. All Rights Reserved.</p>
      <p>Designed with <i class='bx bx-heart'></i> <a href="https://github.com/faizanalisyed2776" target="https://github.com/faizanalisyed2776" rel="noopener noreferrer"></a> <div class="Name">by Faizan Ali</div></a> </p>
     
    </div>
  </footer>
  <script src="pages/script.js"></script>
</body>
</html>
