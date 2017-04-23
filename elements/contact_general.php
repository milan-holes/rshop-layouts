<div class="col-xs-100 col-md-60">
    <h1 class="contact__title"><?= __('Neváhajte nás kontaktovať') ?></h1>
    <div class="row">
        <div class="col-xs-100 col-sm-50">
            <h3 class="contact__title--small"><?= __('Sídlo spoločnosti') ?></h3>
            <div class="contact__text">
                Slovakia Trend Export - Import s. r. o.<br>
                Michalovská 87/1414 , 073 01, Sobrance
            </div>
            <table class="contact__table">
                <tr>
                    <td><strong><?= __('IČO') ?>: </strong>46512250</td>
                    <td><strong><?= __('IČ DPH') ?>: </strong>SK2023403371</td>
                </tr>
            </table>
        </div>
        <div class="col-xs-100 col-sm-50">
            <h3 class="contact__title--small"><?= __('Všeobecné kontaktné údaje') ?></h3>
            <table class="contact__table">
                <tr>
                    <td><strong><?= __('Telefón') ?>:</strong></td>
                    <td><a href="tel:0850111177" class="link link--bordered" title="0850 111 177">0850 111 177</a></td>
                </tr>
                <tr>
                    <td><strong><?= __('E-mail') ?>:</strong></td>
                    <td><a href="mailto:info@slovakia-trend.sk" class="link link--text" title="info@slovakia-trend.sk">info@slovakia-trend.sk</a></td>
                </tr>
                <tr>
                    <td><strong><?= __('Fax') ?>:</strong></td>
                    <td>+421 56 652 2329</td>
                </tr>
            </table>
        </div>
        <div class="col-xs-100">
            <div class="contact__store">
                <h3 class="contact__title--small"><?= __('Predajňa Sobrance') ?></h3>
                <div class="row">
                    <div class="col-xs-100 col-sm-50">
                        <div class="contact__text">
                            Slovakia Trend Export - Import s. r. o.<br>
                            Michalovská 87/1414, 073 01, Sobrance
                        </div>
                    </div>
                    <div class="col-xs-100 col-sm-50">
                        <div class="contact__text">
                            <strong><?= __('Otváracie hodiny') ?>:</strong><br>
                            Po-Pia: 7:00 - 17:00&nbsp;&nbsp;&nbsp;&nbsp;So: 8:00 - 12:00
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-100 col-md-40">
    <div class="contact__reg">
        <h2 class="contact__title--medium"><?= __('Žiadosť o registráciu') ?></h2>
        <div class="contact__reg__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus consequat lacus id magna tempus venenatis. Fusce sagittis ultricies dolor a tincidunt.
        </div>
        <?php $fname = 'form-contact-registration'; include('boxes/form_registration.php'); ?>
    </div>
</div>