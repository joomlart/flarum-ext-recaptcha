import app from 'flarum/app';

import ReCaptchaSettingsModal from 'joom/recaptcha/components/ReCaptchaSettingsModal';

console.log('init recaptcha setting')
app.initializers.add('joom-recaptcha', () => {
	console.log('init recaptcha setting done')
  app.extensionSettings['joom-recaptcha'] = () => app.modal.show(new ReCaptchaSettingsModal());
});
