<form class="contact-header__form form" id="contact-form">
    <ul>
        <li>
            <input type="text" id="name" name="name" placeholder=" "/>
            <label for="name">Name</label>
        </li>
        <li>
            <input type="email" id="email" name="email" placeholder=" "/>
            <label for="email">Email Address</label>
        </li>
        <li>
            <input type="text" id="phone" name="phone" placeholder=" "/>
            <label for="phone">Phone</label>
        </li>
        <li>
            <textarea id="msg" name="message" placeholder=" "></textarea>
            <label for="msg">Your Message</label>
        </li>
        <li class="button">
            <input type="hidden" name="action" value="send_contact_form">
            <button type="submit" value="SUBMIT" class="btn-primary" id="submit-button">Submit</button>
        </li>
    </ul>
</form>
