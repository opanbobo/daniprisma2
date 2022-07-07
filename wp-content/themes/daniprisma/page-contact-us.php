<?php get_header();?>

<?php /* Template Name: Contact Template */ ?>

  <section id="contact-page">
    <div class="text-column" data-aos="fade-up">
      <h1 class="title text-white text-uppercase">contact us</h1>
    </div>
  </section>
  <section id="contact-content-page" class="section">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-8 position-relative mb-5">
              <div class="block">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.166522234235!2d106.79994121476925!3d-6.241772395481871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1691193c127%3A0xabf296ba8b5bf471!2sPlaza%20Dani%20Prisma!5e0!3m2!1sen!2sid!4v1657023042422!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="shadow"></iframe>
              </div>
            </div>
            <div class="col-md-4 position-relative mb-5">
              <div class="block">
                <h4 class="title">Contact us</h4>
                <?php $contact='[contact-form-7 id="105" title="Contact form 1"]'?>
                <?php echo do_shortcode($contact);?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="detail-info text-center">
              <div class="title-address"><b>Address</b>:</div>
              <div class="address">Jl. Sultan Hasanudin, No.Kav 47-48, RT.2/RW.1, Melawai, Kec. Kby Baru, DKI Jakarta, 12160</div>
              <div class="column d-flex justify-content-center">
                <div class="px-2"><b>Email</b> :  Contact@daniprisma.co.id</div>
                <div class="px-2"><b>Phone</b> :  (021) 7260416</div>
              </div>
              <div class="column">
                <div><b>Fax</b> : (021) 7260416</div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
    
<?php get_footer();?>  