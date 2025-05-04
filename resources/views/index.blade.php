@extends('layout.app')

@section('title', 'Home - Kelly')
@section('body-class', 'index-page')

@section('content')

<!DOCTYPE html>
<html lang="en">

<body class="index-page">

 

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="assets/img/hero-bg.png" alt="" data-aos="fade-in">

      <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2>Maitsa Luthfiyyah</h2>
            <p>A student on a learning journey to become a proficient Data Scientist.</p>
            <a href="about" class="btn-get-started">About Me</a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

  </main>



</body>

</html>
@endsection