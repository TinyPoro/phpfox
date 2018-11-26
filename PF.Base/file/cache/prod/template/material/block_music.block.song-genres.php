<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 8:35 am */ ?>
<?php
/**
 * Created by PhpStorm.
 * User: minhhai
 * Date: 5/15/17
 * Time: 15:49
 */
?>

<?php if (! isset ( $this->_aVars['bNoTitle'] )):  echo _p('genres'); ?>:<?php endif;  if (count((array)$this->_aVars['aSong']['genres'])):  foreach ((array) $this->_aVars['aSong']['genres'] as $this->_aVars['iKey'] => $this->_aVars['aGenre']): ?>
    <a href="<?php echo Phpfox::permalink('music.genre', $this->_aVars['aGenre']['genre_id'], null, false, null, (array) array (
)); ?>"><?php echo $this->_aVars['aGenre']['name']; ?></a><?php if (( $this->_aVars['iKey'] + 1 ) < $this->_aVars['iTotal']): ?>,&nbsp;<?php endif;  endforeach; endif; ?>


