<?php get_header(); ?>

<header class="contact-header__section">
  <div class="contact-header container text-white">
    <div class="contact-header__content">
      <h1 class="contact-header__title text-white">Contact us</h1>
      <p class="contact-header__text">
        Ready to take it to the next level? Let’s talk about your project or
        idea and find out how we can help your business grow. If you are
        looking for unique digital experiences that’s relatable to your
        users, drop us a line.
      </p>
    </div>
    <form action="POST" class="contact-header__form form">
      <ul>
        <li>
          <input type="text" id="name" name="user_name" placeholder=" " />
          <label for="name">Name</label>
        </li>
        <li>
          <input type="email" id="mail" name="user_email" placeholder=" " />
          <label for="mail">Email Address</label>
        </li>
        <li>
          <input type="text" id="phone" name="user_phone" placeholder=" " />
          <label for="phone">Phone</label>
        </li>
        <li>
          <textarea id="msg" name="user_message" placeholder=" "></textarea>
          <label for="msg">Your Message</label>
        </li>
        <li class="button">
          <button type="submit" class="btn-primary" disabled>Submit</button>
        </li>
      </ul>
    </form>
  </div>
</header>

<?php get_template_part( 'template-parts/section', 'location-icons' ); ?>

<?php get_footer(); ?>
