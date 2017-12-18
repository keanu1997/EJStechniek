<?php require 'header.php'; ?>
        <div class="main-content">
            <section class="hero">
                <div class="container">
                    <div class="txt-box">
                        <h2>EJS-Techniek Voor oplossingen in metaal en techniek</h2>
                        <p>Constructiewerken in staal, rvs of aluminium. Montagewerkzaamheden, mechanisch en elektrisch onderhoud en keuring elektrische arbeidsmiddelen. Of een combinatie hiervan. Wij kunnen het voor u verzorgen.</p>
                    </div>
                </div>
            </section>
            <section class="services">
                <div class="container">
                    <h2>Service</h2>
                    <div class="service-items flex-sb">
                        <div class="service">
                            <h3>Fabriceren en monteren</h3>
                            <p>In overleg met u kunnen wij zowel uw opdracht voor u fabriceren als monteren.</p>
                        </div>
                        <div class="service">
                            <h3>Keuren</h3>
                            <p>Het keuren van elektrische gereedschappen behoort ook tot onze service.</p>
                        </div>
                        <div class="service">
                            <h3>Onderhoud</h3>
                            <p>Tevens kunnen we monteurs leveren voor onderhoud en/of montage.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="portfolio">
                <div class="container">
                    <h2>Portfolio</h2>
                    <ul class="portfolio-items flex-sb">
                        <li class="portfolio-item"><a href="spoortunnel.php">
                            <img src="img/portfolio-links/spoortunnel-link.jpg" alt="spoortunnel">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="tiny-logo">
                                        <img src="img/logo/ejs-techniek.png" alt="ejs-techniek">
                                    </div>
                                    <h5>Spoortunnel (Zwolle)</h5>
                                    <p>staalconstructies en kabeldraagsystemen ten behoeve van de spoortunnel</p>
                                </div>
                                
                            </div>
                        </a></li>
                        <li class="portfolio-item"><a href="waterfabriek.php">
                            <img src="img/portfolio-links/waterfabriek-link.jpg" alt="leidingwerk en constructie">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="tiny-logo">
                                        <img src="img/logo/ejs-techniek.png" alt="ejs-techniek">
                                    </div>
                                    <h5>Waterfabriek (Ulvenhout)</h5>
                                    <p>project Waterfabriek; het aanpassen van een waterfabriek naar een showroom voor ICT met behoud van originele details.</p>
                                </div>
                                
                            </div>
                        </a></li>
                        <li class="portfolio-item"><a href="rvs-constructies.php">
                            <img src="img/portfolio-items/homepage/rvs_werken1.jpg" alt="rvs">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="tiny-logo">
                                        <img src="img/logo/ejs-techniek.png" alt="ejs-techniek">
                                    </div>
                                    <h5>RVS constructies</h5>
                                    <p>diverse rvs constructies en producten (ook voor petrochemie)</p> 
                                </div>
                               
                            </div>
                        </a></li>
                        <li class="portfolio-item"><a href="waterwerken.php">
                            <img src="img/portfolio-links/waterwerken-link.jpg" alt="constructies damwand verankering">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="tiny-logo">
                                        <img src="img/logo/ejs-techniek.png" alt="ejs-techniek">
                                    </div>
                                    <h5>Waterwerken</h5>
                                    <p>zwaar staalwerk ten behoeve van kade/oeverversterking, remmingwerk en afmeervoorzieningen.</p>
                                </div>
                                
                            </div>
                        </a></li>
                    </ul>
                </div>
            </section>
            <section class="tender">
                <div class="container">
                    <h2>Vraag vrijblijvend een offerte aan</h2>

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
        </div>
<?php require 'footer.php'; ?>
