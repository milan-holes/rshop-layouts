<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="registration-dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close ico__hover" data-dismiss="modal" aria-label="Close">
                    <i class="ico ico--modal--close orig"></i>
                    <i class="ico ico--modal--close--red hover"></i>
                </button>
                <h4 class="modal-title" id="myModalLabel"><?= __('Žiadosť o registráciu') ?></h4>
            </div>
            <div class="modal-body">
                <div class="col-xs-100 nopadding">
                    <div class="modal__box modal__box--registration">
                        <div class="modal__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus consequat lacus id magna tempus venenatis. Fusce sagittis ultricies dolor a tincidunt.</div>
                    </div>
                </div>
                <div class="modal__box modal__box--registration">
                    <?php $fname = 'form-registration-modal'; include('boxes/form_registration.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(function(){
    $('form[name="form-login-modal"]').validate({
        rules: {
            'login-email': {
                required: true,
                email: true
            },
            'login-password': {
                required: true
            }
        },
        messages: {
            'login-email': {
                required: 'Položka patrí medzi povinné údaje.',
                email: 'Zadajte správny tvar emailu.'
            },
            'login-password': {
                required: 'Položka patrí medzi povinné údaje.'
            }
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