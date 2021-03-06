<?php return array (
  'plugins.importexport.common.error.DOIsNotAvailable' => 'In order to use this plug-in please go to the "Public Identifier" plug-in category, enable and configure the DOI plug-in and specify a valid DOI prefix there.',
  'plugins.importexport.common.error.pluginNotConfigured' => 'The plug-in is not fully set up.',
  'plugins.importexport.common.settings' => 'Settings',
  'plugins.importexport.common.settings.form.password' => 'Password',
  'plugins.importexport.common.settings.form.passwordRequired' => 'Please enter a password.',
  'plugins.importexport.common.register' => 'Register',
  'plugins.importexport.common.registerDescription' => 'Click this button to register this object with the registration agency for the first time. This only works when you\'ve never registered the object before!',
  'plugins.importexport.common.registerDescription.multi' => 'Click this button to register or update the meta-data of the selected object(s) with the registration agency.',
  'plugins.importexport.common.register.error.mdsError' => 'Registration was not successful! The DOI registration server returned an error: \'{$param}\'.',
  'plugins.importexport.common.register.success' => 'Registration successful!',
  'plugins.importexport.common.register.warning' => 'Registering many objects can take a long time. So please be patient after clicking the "Register" button. You\'ll be notified when registration is complete.',
  'plugins.importexport.common.register.noCredentials' => 'Direct registration is currently disabled. Please <a href="{$settingsUrl}">configure</a> a username and password to be able to register objects directly with the registration agency.',
  'plugins.importexport.common.update' => 'Update',
  'plugins.importexport.common.updateDescription' => 'Click this button to update the meta-data of this object with the registration agency. This only works if you successfully registered the object before!',
  'plugins.importexport.common.export' => 'Export Data',
  'plugins.importexport.common.export.unregistered' => 'Export all unregistered issues, articles and galleys',
  'plugins.importexport.common.export.selectUnregistered' => 'Select unregistered Issues, Articles and Galleys',
  'plugins.importexport.common.export.noUnregistered' => 'All published issues, articles and galleys have already been registered (or none of them has a DOI assigned).',
  'plugins.importexport.common.export.issues' => 'Export specific issues',
  'plugins.importexport.common.export.selectIssue' => 'Select Issues',
  'plugins.importexport.common.export.noIssues' => 'No issues currently have DOIs assigned.',
  'plugins.importexport.common.export.articles' => 'Export specific articles',
  'plugins.importexport.common.export.selectArticle' => 'Select Articles',
  'plugins.importexport.common.export.noArticles' => 'No articles currently have DOIs assigned.',
  'plugins.importexport.common.export.galleys' => 'Export specific galleys',
  'plugins.importexport.common.export.selectGalley' => 'Select Galleys',
  'plugins.importexport.common.export.noGalleys' => 'No galleys currently have DOIs assigned.',
  'plugins.importexport.common.exportDescription' => 'Click this button to export XML data for the selected object(s) into a local file without registering it with the registration agency. This can be useful if you want a third party to register DOIs for you or if you want to inspect the XML format before registering it.',
  'plugins.importexport.common.export.error.issueNotFound' => 'No issue matched the specified issue ID: {$param}.',
  'plugins.importexport.common.export.error.articleNotFound' => 'No article matched the specified article ID: {$param}.',
  'plugins.importexport.common.export.error.galleyNotFound' => 'No galley matched the specified galley ID: {$param}.',
  'plugins.importexport.common.export.error.noDoiAssigned' => 'The object with ID {$param} does not have a DOI assigned.',
  'plugins.importexport.common.export.error.unknownJournal' => 'No journal matched the specified journal path: {$param}.',
  'plugins.importexport.common.export.error.unknownObjectType' => 'The object type {$param} cannot be exported.',
  'plugins.importexport.common.export.error.outputFileNotWritable' => 'The output file {$param} is not writable.',
  'plugins.importexport.common.notification.exportSuccessful' => 'Successfully exported selected objects to \'{$param}\'',
  'plugins.importexport.common.cliError' => 'ERROR:',
); ?>