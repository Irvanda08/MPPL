<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register User</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-[#08c4fc]">
    <div class="flex items-center justify-center h-screen">
      <div
        class="container border rounded-xl mx-auto p-10 max-w-md bg-white shadow-md"
      >
        <p class="text-center text-3xl font-semibold">Register</p>
        <div class="p-5">
          <p class="mt-10"></p>
          <form action="" method="post">
            <label for="username" class="block">Username</label>
            <input type="text" class="p-1 mt-1 block border border-gray-800 rounded-md w-full"></input>
            <p class="mt-5"></p>
            <label for="password" class="block">Password</label>
            <input type="text" class="p-1 mt-1 block border border-gray-800 rounded-md w-full"></input>

            <div class="mt-3 flex justify-center">
                <p class="text-sm text-gray-500">Allready have an account?<a href="login_user.php" class="text-blue-500"> Login here</a></p>
            </div>

            <div class="flex justify-center">
              <button type="submit" value="Register" class="w-2/4 flex justify-center py-2 mt-16 border rounded-lg bg-blue-400 text-white">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
