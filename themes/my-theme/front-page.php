<?php get_header(); ?>


<section>
    <div class="hero-slider">
        <div class="slide active" style="background-image: url('http://ohana-clinic.test/wp-content/uploads/2025/12/banner.jpg');">
          <div class="slide-infor">
            <h1>Warm medical care that fully acknowledges the feelings of each patient</h1>
            <p>We will answer your questions thoroughly during your consultation, so <br>
                you can approach your infertility treatment in a relaxed atmosphere.</p>
          </div>
        </div>
        
        <div class="slide" style="background-image: url('http://ohana-clinic.test/wp-content/uploads/2025/12/unnamed-file.jpeg');">
         <div class="slide-infor">
            <h1>Warm medical care that fully acknowledges the feelings of each patient</h1>
            <p>We will answer your questions thoroughly during your consultation, so <br>
                you can approach your infertility treatment in a relaxed atmosphere.</p>
          </div>
        </div>
        
        <div class="slide" style="background-image: url('http://ohana-clinic.test/wp-content/uploads/2025/12/Les-medecins-quebecois-en-furie-_-Un-chirurgien-revele-son-salaire_-Je-gagne-46-de-lheure.jpeg');">
          <div class="slide-infor">
            <h1>Warm medical care that fully acknowledges the feelings of each patient</h1>
            <p>We will answer your questions thoroughly during your consultation, so <br>
                you can approach your infertility treatment in a relaxed atmosphere.</p>
          </div>
        </div>
    </div>


<script>
  const slides = document.querySelectorAll(".slide");
  let index = 0;

  function showSlide() {
    slides.forEach(slide => slide.classList.remove("active"));
    slides[index].classList.add("active");
    index = (index + 1) % slides.length;
  }

  setInterval(showSlide, 3000); // change every 3 seconds
</script>


    <div class="notice-box">
        <div class="notice-left">
            <small>NEWS</small>
            <h1>notice</h1>
            <a href="#" class="notice-btn">List of announcements</a>
        </div>

        <div class="notice-right">
            <div class="notice-item">
              <div class="date">December 12, 2025</div>
              <div class="title">Notice of New Year's holiday closure</div>
        </div>

        <div class="notice-item">
            <div class="date">October 20, 2025</div>
                <div class="title highlight">
                    Information on the expansion of PGT-A testing coverage under health insurance and the schedule of the IVF information session
                </div>
        </div>

        <div class="notice-item">
          <div class="date">October 20, 2025</div>
          <div class="title">Notice of change in clinic hours</div>
        </div>
        </div>
    </div>

    <div class="strengths-box">
        <div class="strengths-text">
            <h5>Our strengths</h5>
        </div>
    </div>

</section>

<section class="section">

    <div class="card">
        <div class="icon">
            <i class="fa-solid fa-train-subway"></i>
        </div>
        <h3>Easy to commute while working</h3>
        <p>
            Close to the station. Open from 8am to 8pm
            (Monday, Wednesday and Friday)
        </p>
        <a href="#" class="btn">Learn more </a>
    </div>


    <div class="card">
        <div class="icon">
            <i class="fa-solid fa-chart-line"></i>
        </div>
        <h3>Overwhelming experience and pregnancy results</h3>
        <p>
            Pregnancy rate from 2022 to 2023:
            63.2% (frozen blastocyst transfer)
        </p>
        <a href="#" class="btn">Learn more </a>
    </div>

   
    <div class="card">
        <div class="icon">
            <i class="fa-solid fa-user-doctor"></i>
        </div>
        <h3>Examination by the same doctor</h3>
        <p>
            There is no difference in the treatment plan
            or explanation given by the doctor.
        </p>
        <a href="#" class="btn">Learn more </a>
    </div>

</section>

<section class="message-section">

   
    <div class="message-text">
        <span>MESSAGE</span>

        <h1>
            <span class="highlight">Warm medical care</span> and<br>
            New technologies provides
        </h1>

        <p>
            Our clinic's philosophy is "More friendly infertility treatment"
            and it is our hope that patients, doctors, and staff can communicate
            and become friendly with each other to make infertility treatment,
            which can often be a gloomy experience, more cheerful.
            We also incorporate new tests, treatments, and techniques that
            are thought to be effective, and all staff members will do their
            best to support as many patients as possible so that they can have children.
        </p>

        <a href="#" class="message-btn">Director introduction →</a>
    </div>

    
    <div class="message-image">
        <img src="http://ohana-clinic.test/wp-content/uploads/2025/12/Doctor.jpg" alt="Doctor">
        <div class="name-box">
            Director <span>Yuji Chhai</span>
        </div>
    </div>
</section>


<section>
        <div class="medical">
            <div class="medical-text">
                <h1>Medical Information</h1>
            </div>
        </div>
        
        <div class="inform">
            <div class="information1">
                <h6>In vitro <br> fertilizatio <br>n</h6>
                <div class="line"></div>
                <p>It is a treatment that promotes implantation by removing eggs that have grown up to near ovulation by egg retrieval surgery outside the body, fertilizing it with the sperm of the partner, and converting the fertilized egg that has been successfully fertilized and divided back into the uterus.</p>
                <button>See more</button>
            </div>

            <div class="information2">
                <h6>General <br> Fertility <br> Treatment</h6>
                <div class="line"></div>
                <p>Depending on the cause of infertility, it is a treatment that aims to become pregnant with timing methods and artificial insemination.</p>
                <button>See more</button>
            </div>

            <div class="information3">
                <h6>Fertility <br> testing</h6>
                <div class="line3"></div>
                <p>A fertility test is a test to examine physical condition and fertility and to find disorders of pregnancy.</p>
                <button>See more</button>
            </div>

                <div class="information4">
                <h6>In vitro <br> fertilizatio <br>n</h6>
                <div class="line"></div>
                <p>By testing and treating malnutrition, it is possible to reduce the number of out-of-life cases and improve the production rate.

                    <br><br>※Only patients in our hospital treatment</p>
                <button>See more</button>
            </div>
        </div>

        <div class="galary">
            <div class="galary-text">
                <h1>Gallery</h1>
            </div>
        </div>

        <div class="image">
            <div class="image-pic">
                <img src="http://ohana-clinic.test/wp-content/uploads/2025/12/gallery1.webp" alt="gallery1">
                <img src="http://ohana-clinic.test/wp-content/uploads/2025/12/gallery2.webp" alt="gallery2">
                <img src="http://ohana-clinic.test/wp-content/uploads/2025/12/gallery3.webp" alt="gallery3">
                <img src="http://ohana-clinic.test/wp-content/uploads/2025/12/gallery4.webp" alt="gallery4  ">
                <img src="http://ohana-clinic.test/wp-content/uploads/2025/12/gallery2.webp" alt="gallery5">
                <img src="http://ohana-clinic.test/wp-content/uploads/2025/12/gallery3.webp" alt="gallery6">
            </div>
        </div>
        <div class="line2"></div>
    </section>

<section class="column-section">
    <h1 class="title1">Column</h1>

    <div class="item">
      <span class="dated">July 17, 2025</span>
      <p class="text">Expansion of PGT-A testing target for insurance treatment</p>
    </div>

    <hr />

    <div class="item">
      <span class="dated">November 21, 2024</span>
      <p class="text">About PGT-A test of embryos collected in the insurance treatment</p>
    </div>
</section>

<section>
    <div class="reservation">
        <div class="reservation-text">
            <h1>Reservation</h1>
            <p>Reservations are accepted by phone and web reservation.
              <br> If you are in a hurry, please call us.</p>

            <div class="parents">
                    <div div class="reservice1">
                    <a href="#" class="phone-btn">
                        <i class="fas fa-phone-alt"></i>
                        03-3987-3090
                    </a>
                </div>

                <div div class="reservice2">
                    <a href="#" class="phone-btn">
                        <i class="fa-solid fa-calendar-days"></i>
                        WEB BOOKING
                    </a>
                </div>
            </div>

            <div class="pha">
                    <p>It may take some time to respond to your inquiry via the inquiry form.</p>
            </div>

            <div class="rsv-ct">
                <div class="rsv-text">
                    <a href="">Contact Us ></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>