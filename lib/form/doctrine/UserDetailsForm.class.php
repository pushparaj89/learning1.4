<?php

/**
 * UserDetails form.
 *
 * @package    learning1.4
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UserDetailsForm extends BaseUserDetailsForm
{
  public function configure()
  {
      unset($this['created_at'],$this['updated_at'],$this['best_contact']);
      $this->disableCSRFProtection();

  }
}
