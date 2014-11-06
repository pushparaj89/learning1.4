<td colspan="5">
  <?php echo __('%%name%% - %%email_address%% - %%phone_number%% - %%comments%% - %%created_at%%', array('%%name%%' => $user_details->getName(), '%%email_address%%' => $user_details->getEmailAddress(), '%%phone_number%%' => $user_details->getPhoneNumber(), '%%comments%%' => $user_details->getComments(), '%%created_at%%' => false !== strtotime($user_details->getCreatedAt()) ? format_date($user_details->getCreatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>
