<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 8:35 am */ ?>
<?php

 if (! empty ( $this->_aVars['aForms']['current_image'] ) && ! empty ( $this->_aVars['aForms']['song_id'] )): ?>
<?php Phpfox::getBlock('core.upload-form', array('type' => 'music_image','params' => $this->_aVars['aForms']['params'],'current_photo' => $this->_aVars['aForms']['current_image'],'id' => $this->_aVars['aForms']['song_id']));  else: ?>
<?php Phpfox::getBlock('core.upload-form', array('type' => 'music_image','params' => $this->_aVars['aForms']['params'],'id' => $this->_aVars['aForms']['song_id']));  endif; ?>


