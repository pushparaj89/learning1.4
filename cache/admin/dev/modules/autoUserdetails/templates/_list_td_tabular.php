<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $user_details->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email_address">
  <?php echo $user_details->getEmailAddress() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_phone_number">
  <?php echo $user_details->getPhoneNumber() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_comments">
  <?php echo $user_details->getComments() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($user_details->getCreatedAt()) ? format_date($user_details->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
