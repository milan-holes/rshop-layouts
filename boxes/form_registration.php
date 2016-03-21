<form name="<?= $fname ?>" action="contact_general_submit" method="get" accept-charset="utf-8" class="o-hidden">
    <div class="row">
        <div class="form-group col-xs-50 col-md-100 col-lg-50">
            <label for="contact-ico"><?= __('IČO spoločnosti') ?> *</label>
            <input type="text" class="form-control" id="contact-ico" name="contact-ico" placeholder="<?= __('IČO spoločnosti') ?> *">
        </div>
        <div class="form-group col-xs-50 col-md-100 col-lg-50">
            <label for="contact-name"><?= __('Kontaktné meno') ?> *</label>
            <input type="text" class="form-control" id="contact-name" name="contact-name" placeholder="<?= __('Kontaktné meno') ?> *">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xs-50 col-md-100 col-lg-50">
            <label for="contact-phone"><?= __('Tel. číslo') ?> *</label>
            <input type="text" class="form-control" id="contact-phone" name="contact-phone" placeholder="<?= __('Tel. číslo') ?> *">
        </div>
        <div class="form-group col-xs-50 col-md-100 col-lg-50">
            <label for="contact-email"><?= __('E-mailová adresa') ?> *</label>
            <input type="text" class="form-control" id="contact-email" name="contact-email" placeholder="<?= __('E-mailová adresa') ?> *">
        </div>
        <div class="form-group col-xs-50">
            * Všetky údaje sú povinné
        </div>
        <div class="form-group col-xs-50">
            <button type="submit" class="btn btn--submit" title="<?= __('Potvrdiť žiadosť') ?>"><?= __('Potvrdiť žiadosť') ?></button>
        </div>
    </div>
</form>

<script>
$(function(){
    $('form[name="<?= $fname ?>"]').validate({
        rules: {
            'contact-ico': {
                required: true,
                minlength: 8
            },
            'contact-name': {
                required: true
            },
            'contact-phone': {
                required: true
            },
            'contact-email': {
                required: true,
                email: true
            }
        },
        messages: {
            'contact-ico': {
                required: 'Položka patrí medzi povinné údaje.',
                minlength: 'Minimálny počet znakov je 8.'
            },
            'contact-name': {
                required: 'Položka patrí medzi povinné údaje.'
            },
            'contact-phone': {
                required: 'Položka patrí medzi povinné údaje.'
            },
            'contact-email': {
                required: 'Položka patrí medzi povinné údaje.',
                email: 'Zadajte správny tvar emailu.'
            },
        },
        submitHandler: function(form) {
            form.submit();
            // $.post('ajax_contact.php', $(form).serialize(), function() {
            //  $('.help-inline').fadeIn();
            //  $('form[name="claim_form"]').fadeOut();
            // });
        }
    });
});
</script>