<head>
  <link rel="stylesheet" href="css/output.css">
</head>

<body class="bg-gray-100 overflow-hidden">
<div class="flex justify-center items-center">
    <a class="text-gray-900 text-2xl font-bold mt-5" href="<?= url_to("home") ?>">Marketplace</a>
  </div>
  <div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-sm">
      <div class="mb-6 text-center">
        <h1 class="text-2xl font-bold text-gray-800">Register</h1>
        <p class="text-gray-600">Create your account</p>
      </div>
      <?php if (session('error') !== null) : ?>
        <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
      <?php elseif (session('errors') !== null) : ?>
        <div class="alert alert-danger" role="alert">
          <?php if (is_array(session('errors'))) : ?>
            <?php foreach (session('errors') as $error) : ?>
              <?= $error ?>
              <br>
            <?php endforeach ?>
          <?php else : ?>
            <?= session('errors') ?>
          <?php endif ?>
        </div>
      <?php endif ?>
      <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="<?= url_to('register') ?>" method="post">
        <?= csrf_field() ?>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
            Username
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="username" inputmode="text" autocomplete="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" required>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Email
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" inputmode="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required>
        </div>
        <div class="mb-6">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
            Password
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" inputmode="text" autocomplete="new-password" placeholder="<?= lang('Auth.password') ?>" required>
        </div>
        <div class="mb-6">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirm">
            Confirm Password
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" id="password_confirm" name="password_confirm" inputmode="text" autocomplete="new-password" placeholder="<?= lang('Auth.passwordConfirm') ?>" required>
        </div>
        <div class="flex items-center justify-between mb-6">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Register
          </button>
        </div>
        <div class="text-center">
          <p class="text-gray-600 text-sm">Already have an account?</p>
          <a class="text-blue-500 hover:text-blue-800 font-bold" href="<?= url_to('login') ?>">Login here</a>
        </div>
      </form>
    </div>
  </div>
</body>