<?php
/**
/* Template Name: Home
 *
 * Displays Only Home template
 *
 * @package WordPress
 * @subpackage website
 * @since website 1.0
 */

 get_header(); ?>
      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url(<?php echo esc_url(get_template_directory_uri());?>/assets/img/gallery/hero-bg.png);background-position:top center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row min-vh-xl-100 min-vh-xxl-25">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end blob"></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
              <h1 class="fw-light font-base fs-6 fs-xxl-7">  <strong>Making change  </strong><br />&nbsp;<strong>possible.</strong></h1>
              <p class="fs-1 mb-5">Skill-building, training and work-experience<br />opportunities that empower young people in their <br> transition to adulthood so they can positively shape <br> their futures and those of their communities. </p><a class="btn btn-lg btn-primary rounded-pill" href="#!" role="button">Make an Appointment</a>
            </div>
          </div>
        </div>
      </section>

<style>
        /* blob */
.blob{
    background-image: url(https://i.pinimg.com/564x/79/5f/cc/795fccfa3e1bb8b78770dc347218e284.jpg);
    width: 480px;
    height: 480px;
    background-size: cover;
    -webkit-background-position: center;
    background-position: center center;
    margin: 20px;
    box-shadow: 0 5px 5px 5px rgba(13, 110, 253, 0.2);
    animation: animate 5s ease-in-out infinite;
    transition: all 1s ease-in-out;
}

        /* blob */
.blob2{
    background-image: url(https://i.pinimg.com/564x/13/7a/2e/137a2e320e51f99893d1c62bca173a1e.jpg);
    width: 300px;
    height: 300px;
    background-size: cover;
    -webkit-background-position: center;
    background-position: center center;
    margin: 20px;
    box-shadow: 0 5px 20px 5px rgba(13, 110, 253, 0.2);
    animation: animate 5s ease-in-out infinite;
    transition: all 1s ease-in-out;
}

.blob3{
    background-image: url(https://i.pinimg.com/564x/4a/68/7b/4a687bcc50d66de6c20bb33153c7f296.jpg);
    width: 300px;
    height: 300px;
    background-size: cover;
    -webkit-background-position: center;
    background-position: center center;
    margin: 20px;
    box-shadow: 0 5px 20px 5px rgba(13, 110, 253, 0.2);
    animation: animate 5s ease-in-out infinite;
    transition: all 1s ease-in-out;
}


.blob4{
    background-image: url('<?php echo esc_url(get_template_directory_uri());?>/assets/img/gallery/office.jpg');
    width: 300px;
    height: 300px;
    background-size: cover;
    -webkit-background-position: center;
    background-position: center center;
    margin: 20px;
    box-shadow: 0 5px 20px 5px rgba(13, 110, 253, 0.2);
    animation: animate 5s ease-in-out infinite;
    transition: all 1s ease-in-out;
}

.blob5{
    background-image: url(https://i.pinimg.com/564x/cd/15/9c/cd159c39c19a018d0ea9a6a1f4925d54.jpg);
    width: 400px;
    height: 400px;
    background-size: cover;
    -webkit-background-position: center;
    background-position: center center;
    margin: 20px;
    box-shadow: 0 5px 5px 5px rgba(13, 110, 253, 0.2);
    animation: animate 5s ease-in-out infinite;
    transition: all 1s ease-in-out;
}

.blob6{
    background-image: url(https://i.pinimg.com/564x/91/93/23/9193232822d005fa4a8c2e2acfa5b519.jpg);
    width: 300px;
    height: 300px;
    background-size: cover;
    -webkit-background-position: center;
    background-position: center center;
    margin: 20px;
    box-shadow: 0 5px 5px 5px rgba(13, 110, 253, 0.2);
    animation: animate 5s ease-in-out infinite;
    transition: all 1s ease-in-out;
}

.blob7{
    background-image: url(https://i.pinimg.com/564x/3e/2f/d5/3e2fd502f0aa15e6a242ed46440a1f99.jpg);
    width: 300px;
    height: 300px;
    background-size: cover;
    -webkit-background-position: center;
    background-position: center center;
    margin: 20px;
    box-shadow: 0 5px 5px 5px rgba(13, 110, 253, 0.2);
    animation: animate 5s ease-in-out infinite;
    transition: all 1s ease-in-out;
}

.blob8{
    background-image: url(https://i.pinimg.com/236x/97/60/74/976074d519d0c12e6be89bc4e3fe9c51.jpg);
    width: 300px;
    height: 300px;
    background-size: cover;
    -webkit-background-position: center;
    background-position: center center;
    margin: 20px;
    box-shadow: 0 5px 5px 5px rgba(13, 110, 253, 0.2);
    animation: animate 5s ease-in-out infinite;
    transition: all 1s ease-in-out;
}


@keyframes animate {
    0%, 100%{
        border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
    }
    50%{
        border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%;
    }
}

.font {
    font-weight: 600; /* Set font weight to 600 */
    font-size: 25px;
}


.font2 {
    font-weight: 600; /* Set font weight to 600 */
    font-size: 18px;
}

.font3 {
    font-weight: 600; /* Set font weight to 600 */
    font-size: 50px;
}
</style>


     <section  class="py-5" id="departments">
      <div class="container">
        <div
          class="row justify-content-center align-items-center g-2">
          <div class="col text-center ">
            <div class="blob2"></div>
            <strong class="font">Learn about our work</strong>
            
          </div>
          <div class="col text-center">
            <div class="blob3"></div>
            <strong class="font">Get involved</strong>
          </div>
          <div class="col text-center">
           <div class="blob4"></div>
           <strong class="font">Support Us</strong>
          </div>
        </div>
        
      </div>

     </section >



      <section class="bg-secondary">
        <div class="bg-holder" style="background-image:url(<?php echo esc_url(get_template_directory_uri());?>/assets/img/gallery/bg-eye-care.png);background-position:center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-xxl-6 blob5"></div>
            <div class="col-md-7 col-xxl-6 text-center text-md-start">
              <h2 class="fw-bold text-light mb-4 mt-4 mt-lg-0">We exist to empower young people <br class="d-none d-sm-block" />to shape their own futures.</h2>
              <ul class="text-light">
               <li>Work with us to amplify young people’s voices and inspire ambition for a fair, sustainable future.</li>
               <li >Sign up to our training and get the skills you need to build a brighter, fairer future for yourself and your community.</li>
               <li >Engage us as a research partner or test your ideas through our diverse international network of young people.</li>
             </ul>

              <div class="py-3"><a class="btn btn-lg btn-light rounded-pill" href="#!" role="button">Learn more </a></div>
            </div>
          </div>
        </div>
      </section>


<!-- ------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------ -->
     <section  class="py-5 mt-5" id="departments">
      <div class="container">
        <h2 class='text-center'>Areas we work in</h2>
        <div
          class="row justify-content-center align-items-center g-2">
          <div class="col text-center ">
            <div class="blob6"></div>
            <strong class="font2">Employment and Work-Readiness</strong>
            
          </div>
          <div class="col text-center">
            <div class="blob7"></div>
            <strong class="font2">Youth Voice</strong>
          </div>
          <div class="col text-center">
           <div class="blob8"></div>
           <strong class="font2">Leadership</strong>
          </div>
        </div>
        
      </div>

     </section >



<!-- ============================================-->
      <!-- <section> begin ============================-->
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-12 py-3">
        <div class="bg-holder bg-size" style="background-image:url(<?php echo esc_url(get_template_directory_uri());?>/assets/img/gallery/blog-post.png);background-position:top center;background-size:contain;"></div>
        <!--/.bg-holder-->
        <h1 class="text-center">News and Events</h1>
      </div>
    </div>
  </div>
  <!-- end of .container-->
</section>
<!-- <section> close ============================-->
<!-- ============================================-->

<section>
  <div class="bg-holder bg-size" style="background-image:url(<?php echo esc_url(get_template_directory_uri());?>/assets/img/gallery/dot-bg.png);background-position:top left;background-size:auto;"></div>
  <!--/.bg-holder-->
  <div class="container">
    <div class="row">
      <?php
        // Query WordPress posts
        $args = array(
          'post_type' => 'post', // Change 'post' to your custom post type if needed
          'posts_per_page' => 4, // Number of posts to display
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $query = new WP_Query($args);
        
        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
      ?>
      <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card h-100 shadow card-span rounded-3">
          <?php if (has_post_thumbnail()) : ?>
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium', ['class' => 'card-img-top rounded-top-3', 'alt' => get_the_title()]); ?>
          </a>
          <?php endif; ?>
          <div class="card-body">
            <span class="fs--1 text-primary me-3"><?php echo get_the_category_list(', '); ?></span>
            <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
              <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
            </svg>
            <span class="fs--1 text-900"><?php echo get_the_date('M j, Y'); ?></span>
            <h5 class="font-base fs-lg-0 fs-xl-1 my-3"><?php the_title(); ?></h5>
            <a class="stretched-link" href="<?php the_permalink(); ?>">read full article</a>
          </div>
        </div>
      </div>
      <?php endwhile; wp_reset_postdata(); ?>
      <?php else : ?>
      <p><?php esc_html_e('Sorry, no posts found.', 'textdomain'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>





      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(<?php echo esc_url(get_template_directory_uri());?>/assets/img/gallery/people.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">Join Us</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-8">
        <div class="bg-holder bg-size" style="background-image:url(<?php echo esc_url(get_template_directory_uri());?>/assets/img/gallery/people-bg-1.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="num text-center font3">169,353</div>
              <h5 class="text-center mt-4 mb-3">Volunteer Hours</h5>
              <p>Our volunteers and interns are key to our success and we want to give back by providing free accredited training and opportunities to develop skills to increase their employability.</p>
              <h4 class="mt-5 text-center">Opportunities </h4>
            </div>
            <div class="col">
              <div class="num text-center font3">67</div>
              <h5 class="text-center mt-4 mb-3">Projects</h5>
              <p>Thanks to the generous support of our funders and donors we have been able to impact thousands of young people from disadvantaged communities in the Kenya and abroad.</p>
              <h4 class="mt-5 text-center">Projects & Campaigns </h4>
            </div>
            <div class="col">
              <div class="num text-center font3">236</div>
              <h5 class="text-center mt-4 mb-3">Project partners</h5>
              <p>In unity lies our strength. Since its beginnings, Sculpt has partnered with like-minded organisations to further extend our reach on issues of equality, justice and empowerment.</p>
              <h4 class="mt-5 text-center">Partner with us</h4>
            </div>
          </div>
        </div>


      </section>


            <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(<?php echo esc_url(get_template_directory_uri());?>/assets/img/gallery/people.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">Our Partners</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
      


      

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0">

<div class="container">
  <div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
    <div class="col-lg-8"> <!-- Adjust the column width as needed -->
      <div id="partners-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/gallery/kiit2.png" class="d-block w-100" alt="Partner 1">
          </div>
          <div class="carousel-item">
            <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/gallery/education.png" class="d-block w-100" alt="Partner 2">
          </div>
          <!-- <div class="carousel-item">
            <img src="partner3.jpg" class="d-block w-100" alt="Partner 3">
          </div> -->
          <!-- Add more carousel items as needed -->
        </div>
        <a class="carousel-control-prev" href="#partners-slider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#partners-slider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>

        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      

    



<?php get_footer(); ?>