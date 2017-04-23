<section class="footer">
    <div class="footer__top">
        <div class="container">
            <div class="footer__top__logo col-xs-100 col-md-38 col-lg-40">
                <a href="<?= $this->Url->build('index') ?>" title="<?= $configurations['storeName'] ?>">
                    <img src="webroot/img/logos/logo--footer.png" alt="<?= $configurations['storeName'] ?>" />
                </a>
            </div>
            <div class="footer__top__link hidden-xs hidden-sm col-md-19 col-lg-19">
                <a href="tel:<?= $configurations['storePhone'] ?>" title="<?= $configurations['storePhone'] ?>">
                    <i class="ico ico--tel--footer left"></i>
                    <span><?= $configurations['storePhone'] ?></span>
                </a>
            </div>
            <div class="footer__top__link hidden-xs hidden-sm col-md-19 col-lg-19">
                <a href="tel:<?= $configurations['storePhone'] ?>" title="<?= $configurations['storePhone'] ?>">
                    <i class="ico ico--phone left"></i>
                    <span><?= $configurations['storePhone'] ?></span>
                </a>
            </div>
            <div class="footer__top__link footer__top__link--mail hidden-xs hidden-sm col-md-24 col-lg-22">
                <a href="mailto:<?= $configurations['storeEmail'] ?>" title="<?= $configurations['storeEmail'] ?>">
                    <i class="ico ico--atsign--footer left"></i>
                    <span><?= $configurations['storeEmail'] ?></span>
                </a>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__bottom__box col-xs-100 col-sm-35 visible-xs visible-sm">
                <div class="footer__bottom__box__link">
                    <a href="tel:<?= $configurations['storePhone'] ?>" title="<?= $configurations['storePhone'] ?>">
                        <i class="ico ico--tel--footer left"></i>
                        <span><?= $configurations['storePhone'] ?></span>
                    </a>
                </div>
                <div class="footer__bottom__box__link">
                    <a href="tel:<?= $configurations['storePhone'] ?>" title="<?= $configurations['storePhone'] ?>">
                        <i class="ico ico--phone left"></i>
                        <span><?= $configurations['storePhone'] ?></span>
                    </a>
                </div>
                <div class="footer__bottom__box__link">
                    <a href="mailto:<?= $configurations['storeEmail'] ?>" title="<?= $configurations['storeEmail'] ?>" class="footer_mail">
                        <i class="ico ico--atsign--footer--blue left"></i>
                        <span><?= $configurations['storeEmail'] ?></span>
                    </a>
                </div>
            </div>

            <div class="footer__delimiter visible-xs"></div>

            <div class="footer__bottom__links col-xs-50 col-sm-35 col-md-19 col-lg-20">
                <div class="footer__bottom__title">Klientský servis</div>
                <ul class="list list--circle">
                    <li><i class="ico arr--circle--footer"></i><a href="#" title="Prihlásenie odberateľa">Prihlásenie odberateľa</a></li>
                    <li><i class="ico arr--circle--footer"></i><a href="#" title="Registrácia nového odberateľa">Registrácia nového odberateľa</a></li>
                    <li><i class="ico arr--circle--footer"></i><a href="#" title="Ochrana údajov">Ochrana údajov</a></li>
                    <li><i class="ico arr--circle--footer"></i><a href="#" title="FAQ">FAQ</a></li>
                </ul>
            </div>
            <div class="footer__bottom__links col-xs-50 col-sm-30 col-md-19 col-lg-20">
                <div class="footer__bottom__title">Objednávky</div>
                <ul class="list list--circle">
                    <li><i class="ico arr--circle--footer"></i><a href="#" title="Ako objednať tovar?">Ako objednať tovar?</a></li>
                    <li><i class="ico arr--circle--footer"></i><a href="#" title="Doprava">Doprava</a></li>
                    <li><i class="ico arr--circle--footer"></i><a href="#" title="Obchodné podmienky">Obchodné podmienky</a></li>
                    <li><i class="ico arr--circle--footer"></i><a href="#" title="Reklamačné podmienky">Reklamačné podmienky</a></li>
                </ul>
            </div>

            <div class="footer__delimiter visible-xs visible-sm"></div>

            <div class="footer__bottom__logo col-xs-50 col-sm-35 col-md-19 col-lg-19">
                <a href="#" title="System certification">
                    <img src="webroot/img/logos/logo--sgs.png" alt="Logo System Certification" />
                </a>
            </div>
            <div class="footer__bottom__logo col-xs-50 col-sm-35 col-md-19 col-lg-19">
                <a href="#" title="Logo Viac ako 20 rokov skúseností, dôvery, spoľahlivosti a stability">
                    <img src="webroot/img/logos/logo--sdss.png" alt="Logo Viac ako 20 rokov skúseností, dôvery, spoľahlivosti a stability" />
                </a>
            </div>

            <div class="footer__delimiter visible-xs"></div>

            <div class="footer__bottom__map col-xs-100 col-sm-30 col-md-24 col-lg-22">
                <a href="<?= $this->Url->build('kontakt') ?>" title="Kontakt" class="link">
                    <div class="footer__bottom__map__link">
                        <i class="ico arr--circle left"></i><span>Kontakt</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        <div class="container">
            Copyright © 2016 Slovakia Trend. Tvorba webu a webdizajn od <a href="http://www.riesenia.com/" title=
            "RIESENIA.com" target="_blank">RIESENIA.com</a>
        </div>
    </div>
</section>