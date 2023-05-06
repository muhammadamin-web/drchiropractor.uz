<div class="consultation_send" style="background-image: url('assets/images/header_img.jpg');">
            <div class="overlay_consultation_send">
                <div class="consultation_send_container">
                    <h2 class="consultation_send_title lang" key="consultation_send_title">
                        Бесплатная консультация
                    </h2>
                    <p class="consultation_send_text lang" key="consultation_send_text">
                        Запишитесь на консультацию и получите
                    профессиональный осмотр от главного
                    специалиста центра
                    </p>
                    <!-- <div > -->
                    <!-- <a href="" class="consultation_send_button lang" key="consultation_send_button">Записаться</a> -->
                    <!-- </div> -->
                </div>
                <form class="consultation_send_form" action="{{ route('contact.store') }}" method="POST">
                    <!-- @csrf -->
                    <!-- Name input -->
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="consultation_input"
                        required
                        value
                        placeholder="Ваше имя"
                    >
                    <!-- <input type="tel" id="phone" name="phone" placeholder="998-99-999-99-99" oninput="formatPhoneInput(event)" onkeydown="handleBackspace(event)" required>                Email input -->
                    <input
                        type="tel"
                        class="consultation_input"
                        name="tildaspec-phone-part[]"
                        value=""
                        placeholder="99-999-9999"
                        data-phonemask-iso="uz"
                        data-phonemask-code="+998"
                        data-phonemask-mask="+998-9-999-9999"
                        maxlength="11"
                        data-phonemask-without-code="99-999-9999"
                        data-phonemask-current="4-444-44444"
                    >
                    <!-- Message input -->
                    <!-- Submit button -->
                    <button type="submit" class="consultation_send_button lang" key="consultation_send_button">Send</button>
                </form>
            </div>
        </div>
        <footer>
            <div class="map_contact">
                <div class="contact">
                    <div class="contact_container">
                        <h2 class="contact_title lang" key="contact">Контакты</h2>
                        <p class="contact_phone">+998 (99) 4004494</p>
                        <p class="lang time_work" key="card3_text"></p>
                    </div>
                </div>
                <iframe
                    class="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2998.2811034007123!2d69.2414575!3d41.280986199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b5823121b41%3A0xe75f023bbbc4ae9c!2zTXlQaGFybS51eiAtINCY0L3RgtC10YDQvdC10YIt0LDQv9GC0LXQutCwINGBINC00L7RgdGC0LDQstC60L7QuSDQu9C10LrQsNGA0YHRgtCy!5e0!3m2!1sru!2s!4v1683218224657!5m2!1sru!2s"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
            <div class="footer">
                <div class=" footer_container">
                    <div class="footer_logo">
                        <img src="assets/images/logo .png" alt="" class="footer_logo_img">
                    </div>
                    <p class="footer_date">© 2020 drchiropractor.uz</p>
                    <div class="social_network">
                        <a href="https://t.me/dr_chiropractors" class="social_network_icon"><i class="fa fa-telegram"></i></a>
                        <a href="https://instagram.com/dr.chiropractors?igshid=YmMyMTA2M2Y=" class="social_network_icon"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.facebook.com/terapiyamarkazi?mibextid=LQQJ4d" class="social_network_icon">
                            <i class="fa fa-facebook"></i></a>
                        <a href="https://youtube.com/@dr.chiropractortv" class="social_network_icon"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <div class="powered_by">
            <div class="powered_by_text">
                <P>© 2023 Powered by</P>
                <a href="cmd-tech.uz"> CMD TECH</a>
            </div>
        </div>