@extends('layout.app')

@section('title', 'Resume - Maitsa')
@section('body-class', 'index-page')

@section('content')

<!DOCTYPE html>
<html lang="en">

<body class="resume-page">
  <main class="main">

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p>Delivering data-driven solutions and user-centric designs.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Education</h3>

            <div class="resume-item pb-0">
              <h4>Undergraduate Student in Information Systems</h4>
              <h5>2022 - Present</h5>
              <p><em>Telkom University, Bandung</em></p>
              <p>Focus on data science, information system management, and software development. Actively involved in academic competitions and practicum assistantship in data mining.</p>
              
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Skills & Certifications</h3>
            <div class="resume-item">
              <h4>CERTIFIED DATA SCIENTIST</h4>
              <h5>2024</h5>
              <p><em>SanberCode</em></p>
              <p>I studied algorithms in data mining and built machine learning models. In the final project, I performed end-to-end data analysis and achieved a score of 93/100.</p>
              <p><a href="https://drive.google.com/file/d/1AdaQpPpsTGpidgyiSasMGVe-CM4xnXv8/view?usp=sharing" target="_blank">View Certificate</a></p> <!-- Add certificate link here -->
            </div><!-- End Resume Item -->

            <div class="resume-item">
              <h4>CERTIFIED DATA ANALYST</h4>
              <h5>2023</h5>
              <p><em>MySkill</em></p>
              <p>Completed training in data analysis using Python, SQL, and data visualization with Matplotlib and Tableau.</p>
              <p><a href="https://drive.google.com/file/d/1isFUPIWGtZNxyWqWChs7l6pxwJW76gfC/view?usp=sharing" target="_blank">View Certificate</a></p> <!-- Add certificate link here -->
            </div><!-- End Resume Item -->


          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Freelance Frontend Developer</h4>
              <h5>Jan - March 2025</h5>
              <p><em>PT Santai Berkualitas Syberindo, Bandung </em></p>
              <ul>
                <li>Involved in two major projects:</li>
                <ul>
                  <li>
                    Internal project: Contributed to the development of a landing page for an internship management information system website; received appreciation from the Project Manager for delivering an informative, engaging, and user-friendly design.
                  </li>
                  <li>
                    External project: Developed a communication website for Inacombs, responsible for designing the user interface for each feature and assisting in frontend integration with the database.
                  </li>
                </ul>
                <li>Implemented HTML, CSS, and the Laravel framework throughout the development process.</li>
              </ul>

            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Data mining practicum assistant</h4>
              <h5>Jan 2025 - Present</h5>
              <p><em>Daspro Laboratory Telkom University, Bandung</em></p>
              <ul>
                <li>Served as the coordinator of the creative team, responsible for designing visual materials such as module covers, preliminary assignments, and journals.</li>
                <li>Contributed to the development of academic materials, including creating preliminary assignments based on the Naive Bayes classification method and dashboards using Streamlit.</li>
                <li>Actively taught in practical sessions, especially by discussing and explaining solutions to preliminary assignments to students.</li>
              </ul>

            </div><!-- Edn Resume Item -->

          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

  </main>

</body>

</html>


@endsection