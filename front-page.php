<?php get_header(); ?>

<section class="hero">
    <div class="hero__wrapper">
        <div class="hero__text">
            <p class="typography--small">Who we are</p>
            <h1 class="typography--big">Engage brand and increase viewability.</h1>
            <p class="typography--paragraph"> Elementum sagittis vitae et leo duis ut. Eu feugiat pretium nibh ipsum consequat.</p>
            
            <div class="hero__actions">
                <a href="#" class="button button__primary">Download Now</a>
                <a href="#" class="button button__secondary">Learn More</a>
            </div>
        </div>
        <div class="hero__image">
            <picture>
                <source srcset="<?php echo get_bloginfo(
                "template_url"
            ); ?>/assets/images/Device_Ipad.webp" type="image/webp">
                <img alt="A photo of an iPad device" src="<?php echo get_bloginfo(
                "template_url"
            ); ?>/assets/images/Device_Ipad.png"/>
            </picture>
        </div> 
    </div>
</section>
<section class="about">
    <picture class="about__image">
        <source srcset="<?php echo get_bloginfo(
            "template_url"
        ); ?>/assets/images/Device_Mobile.webp" type="image/webp">
            <img width="619" height="596"  alt="A photo of an iPhone device showing HTML tags" src="<?php echo get_bloginfo(
            "template_url"
        ); ?>/assets/images/Device_Mobile.png"/>
    </picture>
    <div class="about__text">
        <p class="typography--small">Eyebrow</p>
        <h2 class="typography--big">Generating relevant & engaging content</h1>
            <p class="typography--paragraph"> Nom diam phasellus vestibulum lorem sed. Massa enim nec dui nunc mattis enim. Quisque egestas diam in arcu cursus euismod quis viverra. Eget arcu dictum varius duis at consectur lorem donec massa.</p>
        </div>
    </section>
    <section class="contact-us">
        <div class="contact-us__text">
            <p class="typography--small">Eyebrow</p>
            <h2 class="typography--big">Integrated tech</h1>
                <p class="typography--paragraph">Create custom solutions with the aim to improve overall outcomes.</p>
            </div>
            <div class="contact-us__actions">
                <a href="#" class="button button__primary">Contact Us</a>
            </div>
</section>

<?php get_footer(); ?>