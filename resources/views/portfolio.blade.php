@extends('layout.app')

@section('title', 'Portofolio - Maitsa')
@section('body-class', 'index-page')

@section('content')
<main class="main">

  <!-- Portfolio Section -->
  <section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Portfolio</h2>
      <p>Take a look at some of the projects I’ve worked on</p>
    </div>
    <!-- End Section Title -->

    <div class="container">

      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <!-- Portfolio Filters -->
        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-data">Data</li>
          <li data-filter=".filter-web">Web</li>
        </ul>
        <!-- End Portfolio Filters -->

        <!-- Portfolio Items -->
        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

          <!-- Web Project 1 -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
            <img src="assets/img/portfolio/web-1.png" class="img-fluid w-100" alt="">
            <div class="portfolio-info">
              <h4>Website Inacombs</h4>
              <p>Website Inacombs, komunitas yang berfokus pada seminar ilmiah, publikasi, dll</p>
              <a href="https://inacombs.id/" class="details-link" title="More Details" target="_blank">
                <i class="bi bi-link-45deg"></i>
              </a>
            </div>
          </div>

          <!-- Web Project 2 -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
            <img src="assets/img/portfolio/web-2.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Website E-Posyandu</h4>
              <p>Proyek akhir semester 5 untuk memantau balita dan ibu hamil, membantu pengambilan keputusan cepat dan tepat.</p>
              <a href="https://github.com/tsaacod/WebsitePosyandu" class="details-link" title="More Details" target="_blank">
                <i class="bi bi-link-45deg"></i>
              </a>
            </div>
          </div>

          <!-- Data Project 1 -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-data">
            <img src="assets/img/portfolio/data-1.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sales Dashboard</h4>
              <p>Belajar Tableau bersama Data with Baraa, mendalami minat pada visualisasi data.</p>
              <a href="https://public.tableau.com/views/SalesDashboard_17257525756360/CustomerDashboard" class="details-link" title="More Details" target="_blank">
                <i class="bi bi-link-45deg"></i>
              </a>
            </div>
          </div>

          <!-- Data Project 2 -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-data">
            <img src="assets/img/portfolio/data-2.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Artikel Medium</h4>
              <p>Channeling interest in writing through data mining articles published on Medium.</p>
              <a href="https://medium.com/@itsaamaitsa" class="details-link" title="More Details" target="_blank">
                <i class="bi bi-link-45deg"></i>
              </a>
            </div>
          </div>

          <!-- Web Project 1 -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
            <img src="assets/img/portfolio/web-3.png" class="img-fluid w-100" alt="">
            <div class="portfolio-info">
              <h4>Website Profile</h4>
              <p>This personal profile website was developed as a way to sharpen my web development skills while also serving as a platform to introduce myself more personally and professionally to visitors.</p>
              <a href="https://inacombs.id/" class="details-link" title="More Details" target="_blank">
                <i class="bi bi-link-45deg"></i>
              </a>
            </div>
          </div>

        </div>
        <!-- End Portfolio Items -->

      </div>

    </div>

  </section>
  <!-- /Portfolio Section -->

</main>
@endsection
