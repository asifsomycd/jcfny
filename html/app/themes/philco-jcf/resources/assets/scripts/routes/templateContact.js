function showHideForm($form, slug) {
  if (window.innerWidth <= window.jcf.breakpointMd) {
    $form.appendTo('#mobile-form__' + slug).show();
    $('#desktop-form__' + slug + ' .gform_wrapper').detach();
  } else {
    $form.appendTo('#desktop-form__' + slug).show();
    $('#mobile-form__' + slug + ' .gform_wrapper').detach();
  }
}

export default {
  init() {
    // JavaScript to be fired
  },
  finalize() {
    // JavaScript to be fired, after the init JS

    // Move forms around based on window width

    $('.main .gform_wrapper')
      .first()
      .wrap('<div id="desktop-form__schedule"></div>');

    // const $scheduleForm = $( '#desktop-form__schedule .gform_wrapper' );
    const $emailForm = $('#desktop-form__email .gform_wrapper');
    const $infoForm = $('#desktop-form__info .gform_wrapper');

    $(window).on('window:resize', () => {
      // showHideForm( $scheduleForm, 'schedule' );
      showHideForm($emailForm, 'email');
      showHideForm($infoForm, 'info');
    });
  },
};
