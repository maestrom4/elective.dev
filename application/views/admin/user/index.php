<section>
  <h2>Users</h2>
  <?php echo anchor('admin/user/edit','<i class="icon-plus"></i> Add user');?>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
     <!-- <?php var_dump($users);?> -->
      <?php if(count($users)): foreach($users as $user): ?>
         <tr>
          <td><?php echo anchor("admin/user/edit/".$user->id,$user->email);?></td>
          <td><?php echo btn_edit("admin/user/edit/".$user->id);?> </td>
          <td><?php echo btn_delete("admin/user/delete/".$user->id);?></td>
        </tr>
      <?php endforeach; ?>


      <? else; ?>
        <tr>
          <td colspan="3">We could not find the only users.</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>
</section>
