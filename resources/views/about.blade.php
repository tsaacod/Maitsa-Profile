@extends('layout.app')

@section('title', 'Home - Kelly')
@section('body-class', 'index-page')

@section('content')

<!DOCTYPE html>
<html lang="en">


<body class="about-page">

  <main class="main">

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Hello! I’m Maitsa Luthfiyyah, a third-year Information Systems student at Telkom University with a strong interest in data management. In addition to developing my technical skills, I’m also an active volunteer at the Islamic Learning Center (ILC), where I’ve enhanced my communication and leadership abilities. With this combination, I’m confident in my ability to contribute effectively to any team.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/profile-img.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>Data Scientist &amp; Web Developer.</h2>
           <div class="mb-5"></div>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>29 September 2002</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>tsaamaitsa@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 851 7973 2909</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Bandung, Indonesia</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor (Ongoing)</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <a href="https://medium.com/@itsaamaitsa" target="_blank">https://medium.com/@itsaamaitsa</a></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Github:</strong> <a href="https://github.com/tsaacod" target="_blank">https://github.com/tsaacod</a></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              I’m passionate about transforming data into meaningful insights to support decision-making processes. With a solid foundation in web development and data analysis, I’ve worked on several academic and personal projects involving data visualization, dashboard creation, and system development. I enjoy learning new technologies and collaborating with others to solve real-world problems through data and code.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>Here are some of the skills I’m proficient in</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>Python</span> <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Statistics and probability</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Machine learning algorithms</span> <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>PHP</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Laravel</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>CSS</span> <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

  </main>

</body>

</html>
@endsection