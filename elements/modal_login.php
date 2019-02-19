<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login-dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close ico__hover" data-dismiss="modal" aria-label="Close">
                    <i class="ico ico-modal--close orig"></i>
                    <i class="ico ico-modal--close--red hover"></i>
                </button>
                <h4 class="modal-title" id="myModalLabel"><?= __('Prihláste sa') ?></h4>
            </div>
            <div class="modal-body">
                <div class="modal__box__wrapper flex">
                    <div class="col-xs-100 col-sm-60 nopadding">
                        <div class="modal__box modal__box--login">
                            <form name="form-login-modal" action="login" method="post">
                                <div class="form-group with_label">
                                    <label for="login-email"><?= __('Váš email') ?>:</label>
                                    <input type="text" class="form-control" id="login-email" name="login-email">
                                </div>
                                <div class="form-group with_label">
                                    <label for="login-password"><?= __('Heslo') ?>:</label>
                                    <input type="text" class="form-control" id="login-password" name="login-password">
                                </div>
                                <div class="col-xs-50 nopadding">
                                    <i class="ico arr--black--right left"></i><a href="#" class="link link--bordered" title="<?= __('Zabudli ste heslo?') ?>"><?= __('Zabudli ste heslo?') ?></a>
                                </div>
                                <div class="col-xs-50 nopadding">
                                    <button type="submit" class="btn btn--submit right"><?= __('Prihlásiť sa') ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-100 col-sm-40 nopadding">
                        <div class="modal__box modal__box--advantages bx bx--advantages">
                            <?php include('boxes/advantages.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-100 nopadding">
                    <div class="modal__box modal__box--registration">
                        <div class="modal__title"><?= __('Chcete sa u nás registrovať?') ?></div>
                        <div class="row">
                            <div class="modal__box--registration__text col-xs-67">
                                <div class="modal__text">Lorem ipsum dolor sit amet, per cu prima dicam periculis, Lorem ipsum dolor sit amet, per cu prima dicam periculis</div>
                            </div>
                            <div class="modal__box--registration__btn col-xs-33 nopadding">
                                <button class="btn btn--gray"><i class="ico arr--black--right"></i><?= __('Požiadať o registráciu') ?></button>
                            </div>
                        </div>
                    </div>
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

    $('.modal__box--registration__btn .btn').bind('click', function(event) {
        $('#login').modal('hide');
        $('#registration').modal('show');
    });
});
</script>