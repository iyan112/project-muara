<style>
nav ul {
  display: flex;
  align-items: center;
  list-style: none;
  gap: 1rem;
  padding: 1rem;
}
nav ul li a {
  text-decoration: none;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #191919;
  font-weight: 600;
  padding: 5px 15px; /* Tambahkan padding horizontal untuk lebih lebar */
  transition: all 300ms, background-color 300ms;
  border-bottom: 1px solid rgba(0, 0, 0, 0);
  border-radius: 50px; /* Membuat bentuk oval */
}
nav ul li a:hover {
  color: orangered;
  background-color: #f2f2f2; /* Warna background saat hover */
  border-bottom: 1px solid white;
  border-radius: 60px; /* Tetapkan border-radius agar tetap oval saat hover */
}
/* Style khusus untuk dropdown item agar seragam */
nav ul li a.dropdown-toggle {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #191919 !important;
  font-weight: 600;
  padding: 5px 0;
  transition: all 300ms;
  border-bottom: 1px solid rgba(0, 0, 0, 0) !important;
}
nav ul li a.dropdown-toggle:hover {
  color: orangered !important;
  border-bottom: 1px solid white !important;
}
.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.slider-text {
  width: 40%; /* Mengatur lebar area teks */
  padding: 20px;
  color: #fff;
  z-index: 2;
}
.slider-text h1 {
  font-size: 2.5rem; /* Mengurangi ukuran font agar lebih kompak */
  color: #fff;
}
.slider-text p {
  font-size: 1.1rem; /* Sedikit lebih kecil dari sebelumnya */
  color: #fff;
}
.img-fluid {
  z-index: 1;
  left: 110%; /* Memastikan gambar tidak bergeser ke kanan */
}
p.mb-4 {
  width: 100%; /* Mengizinkan teks menggunakan seluruh lebar */
  text-align: justify;
}
h3{
  text-align: justify;
  width: 100%;
  padding: 0.3rem;
}
.cat{
  width: 100%;
  flex-grow:1;
  text-align: justify;
  padding: 0.3rem;
}
</style>
<body class="goto-here">
  <div class="py-1 bg-black">
    <div class="container">
      <div
        class="row no-gutters d-flex align-items-start align-items-center px-md-0"
      >
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
            <div class="col-md pr-4 d-flex topper align-items-center">
              <div
                class="icon mr-2 d-flex justify-content-center align-items-center"
              >
                <span class="icon-phone2"></span>
              </div>
              <span class="text">08XX-XXXX-XXXX</span>
            </div>
            <div class="col-md pr-4 d-flex topper align-items-center">
              <div
                class="icon mr-2 d-flex justify-content-center align-items-center"
              >
                <span class="icon-paper-plane"></span>
              </div>
              <span class="text">coba_aja@gmail.com</span>
            </div>
            <div
              class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right"
            >
              <span class="text"
                >3-5 Business days delivery &amp; Free Returns</span
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav
    class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
    id="ftco-navbar"
  >
    <div class="container">
      <a class="navbar-brand" href="">BATIK GANASAN SUBANG</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#ftco-nav"
        aria-controls="ftco-nav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <nav>
              <ul>
                <li>
                  <a href="/">Home</a>
                </li>
                <li>
                  <a href="/about">Gallery</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle"href="#"id="dropdown04"data-toggle="dropdown"aria-haspopup="true"aria-expanded="false">Catalog</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="/shop">Shop</a>
                    <a class="dropdown-item" href="/product-single">Single Product</a>
                    <a class="dropdown-item" href="/cart">Cart</a>
                  </div>
                </li>
                <li>
                  <a href="/log">Blog</a>
                </li>
                <li>
                  <a href="/cart"><span class="icon-shopping_cart"></span>[0]</a>
                </li>
              </ul>
            </nav>
      </div>
  </nav>
  <!-- END nav -->

  <section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
      <div class="slider-item js-fullheight">
        <div class="overlay"></div>
        <div class="container-fluid p-0">
          <div
            class="row d-md-flex no-gutters slider-text align-items-center justify-content-end"
            data-scrollax-parent="true"
          >
            <img
              class="one-third order-md-last img-fluid"
              src="Pelanggan/images/motif batik.jpg"
              alt=""
            />
            <div
              class="one-forth d-flex align-items-center ftco-animate"
              data-scrollax=" properties: { translateY: '70%' }"
            >
              <div class="text">
                <span class="subheading">#New Arrival</span>
                <div class="horizontal">
                  <h1 class="mb-4 mt-3">New Shoes Winter Collection</h1>
                  <p class="mb-4">
                  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                  </p>

                  <p><a href="/about" class="btn-custom">Kunjungi Gallery</a></p>
                </div>
              </div>

              <div class="text">
                <div class="horizontal">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight">
        <div class="overlay"></div>
        <div class="container-fluid p-0">
          <div
            class="row d-flex no-gutters slider-text align-items-center justify-content-end"
            data-scrollax-parent="true"
          >
            <img
              class="one-third order-md-last img-fluid"
              src="Pelanggan/images/bg_2.png"
              alt=""
            />
            <div
              class="one-forth d-flex align-items-center ftco-animate"
              data-scrollax=" properties: { translateY: '70%' }"
            >
              <div class="text">
                <span class="subheading">#New Arrival</span>
                <div class="horizontal">
                  <h1 class="mb-4 mt-3">New Shoes Winter Collection</h1>
                  <p class="mb-4">
                  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                  </p>

                  <p><a href="/about" class="btn-custom">Kunjungi Gallery</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <h2 class="mb-4">WELCOME TO BATIK GANASAN STORE</h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
          <div class="product d-flex flex-column">
            <a href="/product-single" class="img-prod"
              ><img
                class="img-fluid"
                src="Pelanggan/images/product-1.png"
                alt="Colorlib Template"
              />
              <div class="overlay"></div>
            </a>
            <div class="text py-3 pb-4 px-3">
              <div class="d-flex">
                <div class="cat">
                  <spas>Batik mega mendung aoa lagi coba</spas>
                </div>
              </div>
              <h3><a href="/product-single">Batik dengan corak kulit ular dan kulit gajah dengan perbaduan buaya darat</a></h3>
              <div class="pricing">
                <p class="price"><span>$120.00</span></p>
              </div>
              <p class="bottom-area d-flex px-3">
                <a href="/cart" class="add-to-cart text-center py-2 mr-1"
                  ><span>Add to cart <i class="ion-ios-add ml-1"></i></span
                ></a>
                <a href="/checkout" class="buy-now text-center py-2"
                  >Buy now<span><i class="ion-ios-cart ml-1"></i></span
                ></a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
          <div class="product d-flex flex-column">
            <a href="/product-single" class="img-prod"
              ><img
                class="img-fluid"
                src="Pelanggan/images/product-2.png"
                alt="Colorlib Template"
              />
              <span class="status">50% Off</span>
              <div class="overlay"></div>
            </a>
            <div class="text py-3 pb-4 px-3">
              <div class="d-flex">
                <div class="cat">
                  <span>Lifestyle</span>
                </div>
              </div>
              <h3><a href="/product-single">Nike Free RN 2019 iD</a></h3>
              <div class="pricing">
                <p class="price">
                  <span class="mr-2 price-dc">$120.00</span
                  ><span class="price-sale">$80.00</span>
                </p>
              </div>
              <p class="bottom-area d-flex px-3">
                <a href="/cart" class="add-to-cart text-center py-2 mr-1"
                  ><span>Add to cart <i class="ion-ios-add ml-1"></i></span
                ></a>
                <a href="/checkout" class="buy-now text-center py-2"
                  >Buy now<span><i class="ion-ios-cart ml-1"></i></span
                ></a>
              </p>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-deal bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="Pelanggan/images/prod-1.png" class="img-fluid" alt="" />
        </div>
        <div class="col-md-6">
          <div class="heading-section heading-section-white">
            <span class="subheading">Deal of the month</span>
            <h2 class="mb-3">Deal of the month</h2>
          </div>
          <div id="timer" class="d-flex mb-4">
            <div class="time" id="days"></div>
            <div class="time pl-4" id="hours"></div>
            <div class="time pl-4" id="minutes"></div>
            <div class="time pl-4" id="seconds"></div>
          </div>
          <div class="text-deal">
            <h2><a href="#">Nike Free RN 2019 iD</a></h2>
            <p class="price">
              <span class="mr-2 price-dc">$120.00</span
              ><span class="price-sale">$80.00</span>
            </p>
            <ul class="thumb-deal d-flex mt-4">
              <li
                class="img"
                style="background-image: url(Pelanggan/images/product-6.png)"
              ></li>
              <li
                class="img"
                style="background-image: url(Pelanggan/images/product-2.png)"
              ></li>
              <li
                class="img"
                style="background-image: url(Pelanggan/images/product-4.png)"
              ></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section testimony-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="services-flow">
            <div class="services-2 p-4 d-flex ftco-animate">
              <div class="icon">
                <span class="flaticon-bag"></span>
              </div>
              <div class="text">
                <h3>Free Shipping</h3>
                <p class="mb-0">
                  Separated they live in. A small river named Duden flows
                </p>
              </div>
            </div>
            <div class="services-2 p-4 d-flex ftco-animate">
              <div class="icon">
                <span class="flaticon-heart-box"></span>
              </div>
              <div class="text">
                <h3>Valuable Gifts</h3>
                <p class="mb-0">
                  Separated they live in. A small river named Duden flows
                </p>
              </div>
            </div>
            <div class="services-2 p-4 d-flex ftco-animate">
              <div class="icon">
                <span class="flaticon-payment-security"></span>
              </div>
              <div class="text">
                <h3>All Day Support</h3>
                <p class="mb-0">
                  Separated they live in. A small river named Duden flows
                </p>
              </div>
            </div>
            <div class="services-2 p-4 d-flex ftco-animate">
              <div class="icon">
                <span class="flaticon-customer-service"></span>
              </div>
              <div class="text">
                <h3>All Day Support</h3>
                <p class="mb-0">
                  Separated they live in. A small river named Duden flows
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="heading-section ftco-animate mb-5">
            <h2 class="mb-4">Our satisfied customer says</h2>
            <p>
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the blind texts. Separated
              they live in
            </p>
          </div>
          <div class="carousel-testimony owl-carousel">
            <div class="item">
              <div class="testimony-wrap">
                <div
                  class="user-img mb-4"
                  style="background-image: url(Pelanggan/images/person_1.jpg)"
                >
                  <span
                    class="quote d-flex align-items-center justify-content-center"
                  >
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4 pl-4 line">
                    Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts.
                  </p>
                  <p class="name">Garreth Smith</p>
                  <span class="position">Marketing Manager</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div
                  class="user-img mb-4"
                  style="background-image: url(Pelanggan/images/person_2.jpg)"
                >
                  <span
                    class="quote d-flex align-items-center justify-content-center"
                  >
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4 pl-4 line">
                    Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts.
                  </p>
                  <p class="name">Garreth Smith</p>
                  <span class="position">Interface Designer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div
                  class="user-img mb-4"
                  style="background-image: url(Pelanggan/images/person_3.jpg)"
                >
                  <span
                    class="quote d-flex align-items-center justify-content-center"
                  >
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4 pl-4 line">
                    Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts.
                  </p>
                  <p class="name">Garreth Smith</p>
                  <span class="position">UI Designer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div
                  class="user-img mb-4"
                  style="background-image: url(Pelanggan/images/person_1.jpg)"
                >
                  <span
                    class="quote d-flex align-items-center justify-content-center"
                  >
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4 pl-4 line">
                    Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts.
                  </p>
                  <p class="name">Garreth Smith</p>
                  <span class="position">Web Developer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div
                  class="user-img mb-4"
                  style="background-image: url(Pelanggan/images/person_1.jpg)"
                >
                  <span
                    class="quote d-flex align-items-center justify-content-center"
                  >
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4 pl-4 line">
                    Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts.
                  </p>
                  <p class="name">Garreth Smith</p>
                  <span class="position">System Analyst</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-gallery">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 heading-section text-center mb-4 ftco-animate">
          <h2 class="mb-4">Follow Us On Instagram</h2>
          <p>
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts. Separated they
            live in
          </p>
        </div>
      </div>
    </div>
    <div class="container-fluid px-0">
      <div class="row no-gutters">
        <div class="col-md-4 col-lg-2 ftco-animate">
          <a
            href="Pelanggan/images/gallery-1.jpg"
            class="gallery image-popup img d-flex align-items-center"
            style="background-image: url(Pelanggan/images/gallery-1.jpg)"
          >
            <div
              class="icon mb-4 d-flex align-items-center justify-content-center"
            >
              <span class="icon-instagram"></span>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-lg-2 ftco-animate">
          <a
            href="Pelanggan/images/gallery-2.jpg"
            class="gallery image-popup img d-flex align-items-center"
            style="background-image: url(Pelanggan/images/gallery-2.jpg)"
          >
            <div
              class="icon mb-4 d-flex align-items-center justify-content-center"
            >
              <span class="icon-instagram"></span>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-lg-2 ftco-animate">
          <a
            href="Pelanggan/images/gallery-3.jpg"
            class="gallery image-popup img d-flex align-items-center"
            style="background-image: url(Pelanggan/images/gallery-3.jpg)"
          >
            <div
              class="icon mb-4 d-flex align-items-center justify-content-center"
            >
              <span class="icon-instagram"></span>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-lg-2 ftco-animate">
          <a
            href="Pelanggan/images/gallery-4.jpg"
            class="gallery image-popup img d-flex align-items-center"
            style="background-image: url(Pelanggan/images/gallery-4.jpg)"
          >
            <div
              class="icon mb-4 d-flex align-items-center justify-content-center"
            >
              <span class="icon-instagram"></span>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-lg-2 ftco-animate">
          <a
            href="Pelanggan/images/gallery-5.jpg"
            class="gallery image-popup img d-flex align-items-center"
            style="background-image: url(Pelanggan/images/gallery-5.jpg)"
          >
            <div
              class="icon mb-4 d-flex align-items-center justify-content-center"
            >
              <span class="icon-instagram"></span>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-lg-2 ftco-animate">
          <a
            href="Pelanggan/images/gallery-6.jpg"
            class="gallery image-popup img d-flex align-items-center"
            style="background-image: url(Pelanggan/images/gallery-6.jpg)"
          >
            <div
              class="icon mb-4 d-flex align-items-center justify-content-center"
            >
              <span class="icon-instagram"></span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
</body>
