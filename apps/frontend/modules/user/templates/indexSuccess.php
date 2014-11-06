<h1>User detailss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email address</th>
      <th>Phone number</th>
      <th>Comments</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($user_detailss as $user_details): ?>
    <tr>
      <td><a href="<?php echo url_for('user/edit?id='.$user_details->getId()) ?>"><?php echo $user_details->getId() ?></a></td>
      <td><?php echo $user_details->getName() ?></td>
      <td><?php echo $user_details->getEmailAddress() ?></td>
      <td><?php echo $user_details->getPhoneNumber() ?></td>
      <td><?php echo $user_details->getComments() ?></td>
      <td><?php echo $user_details->getCreatedAt() ?></td>
      <td><?php echo $user_details->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('user/new') ?>">New</a>
