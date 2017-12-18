<?php require 'header.php'; ?>
        <div class="main-content">
             <section class="tender">
                <div class="container">
                    <h2>Vragen of opmerkingen?</h2>

                    <div class="flex-sb">
                        <form action="mailto.php" method="POST">
                        <div class="form-group">
                            <label for="name">Naam: *</label>
                            <input name="name" type="text" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail: *</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="company">Bedrijf:</label>
                            <input name="company" type="text">
                        </div>
                        <div class="form-group">
                            <label for="subject">Onderwerp: (offerte/vraag)</label>
                            <input name="subject" type="text">
                        </div>
                        <div class="form-group">
                            <label for="message">Bericht: *</label>
                            <textarea name="message" required></textarea>
                        </div>
                        <input class="submit" type="submit" value="Versturen">
                    </form>
                    <p>U kunt tevens contact met ons opnemen via het contactformulier. Hierbij kunt u aangeven of het een vraag/opmerking betreft of een aanvraag voor een offerte.</p>
                    </div>
                    
                </div>
            </section>
            <section class="contact-details">
                <div class="container">
                    
                    <div class="flex-sa">
                        <ul>
                            <h2>Contact</h2>
                            <li><strong>EJS-techniek Adres:</strong></li>
                            <li>Rijksweg 21</li>
                            <li>4681 RB Nieuw-Vossemeer</li>
                            <li>The Netherlands (Nederland)</li>
                    </ul>
                    <ul>
                        <li><strong>EJS-techniek Contact opnemen:</strong></li>
                        <li>(0031)651586099 (directeur) </li>
                        <li href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#101;&#114;&#105;&#99;&#64;&#69;&#74;&#83;&#45;&#84;&#101;&#99;&#104;&#110;&#105;&#101;&#107;&#46;&#110;&#108;">&#101;&#114;&#105;&#99;&#64;&#69;&#74;&#83;&#45;&#84;&#101;&#99;&#104;&#110;&#105;&#101;&#107;&#46;&#110;&#108;</li>
                        <li>(0031)167-850059 (administratie) </li>
                        <li href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#106;&#101;&#97;&#110;&#101;&#116;&#116;&#101;&#64;&#69;&#74;&#83;&#45;&#84;&#101;&#99;&#104;&#110;&#105;&#101;&#107;&#46;&#110;&#108;">&#106;&#101;&#97;&#110;&#101;&#116;&#116;&#101;&#64;&#69;&#74;&#83;&#45;&#84;&#101;&#99;&#104;&#110;&#105;&#101;&#107;&#46;&#110;&#108;</li>
                    </ul>
                    </div>
                
                </div>
            </section>
            <section class="oneliner">
                <div class="oneliner-textbox">
                    <h2>Uw technisch probleem is onze uitdaging</h2>
                </div>
            </section>
            <section class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2478.1108313650784!2d4.239714215343739!3d51.6028578115408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c46a0be9ba2063%3A0xf3e0ddb5963f9fb8!2sEric&#39;s+Job+Support+(EJS)!5e0!3m2!1snl!2snl!4v1461669963406"></iframe>
            </section>
        </div>

        <?php require 'footer.php'; ?>