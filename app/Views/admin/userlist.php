<head>
  <link rel="stylesheet" href="css/output.css">
</head>

<body class="bg-gray-100">
  <div class="container mx-auto p-4 px-20">
    <h1 class="text-2xl font-bold mb-4 flex justify-center">User List</h1>
    <table class="table-auto w-full text-center">
      <thead>
        <tr>
          <th class="py-2 w-fit">NO</th>
          <th class="py-2 w-fit">ID</th>
          <th class="px-4 py-2 w-auto">Name</th>
          <th class="px-4 py-2 w-auto">E-mail</th>
          <th class="py-2 w-fit">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1;
        foreach ($users as $user) : ?>
          <tr>
            <td class="border py-2 w-fit"><?=$i?></td>
            <td class="border py-2 w-fit"><?=$user->id?></td>
            <td class="border px-4 py-2 w-auto"><?=$user->username?></td>
            <td class="border px-4 py-2 w-auto"><?=$user->email?></td>
            <td class="border py-2 w-fit">
              <?php if($user->groups[0] == "superadmin") :?>
                <span class="ml-2 font-bold text-blue-800">Admin</span>
              <?php else: ?>
              <a href="<?= url_to("admin_delete_user") . "?id=" . $user->id ?>" class="text-red-500 ml-2">Delete</a>
              <?php endif; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>