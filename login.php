<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Piece And Freedom Bakery</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

  <header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <img src="images/Logo.png" class="" style="height:15vh; width: 15vh;"alt="">
        <!-- <span class="ml-3 text-xl text-red-500">Piece And Freedom Bakery</span> -->
      </a>
      <button class="md:hidden ml-auto outline-none" id="menu-toggle">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center hidden md:block" id="menu">
        <a href="index.html" class="mr-5 hover:text-gray-900 text-xl">Home</a>
        <a href="about.html" class="mr-5 hover:text-gray-900 text-xl">About</a>
        <a href="shop.html" class="mr-5 hover:text-gray-900 text-xl">Shop</a>
        <a href="menu.html" class="mr-5 hover:text-gray-900 text-xl">Menu</a>
        <a href="contact.html" class="mr-5 hover:text-gray-900 text-xl">Contact</a>
        <a href="classes.html" class="mr-5 hover:text-gray-900 text-xl">Classes</a>
        <a href="blog.html" class="mr-5 hover:text-gray-900 text-xl">Blog</a>
      </nav>
      <!-- <button href="cart.html" class="hidden md:block inline-flex items-center bg-gray-100 border-0 py-2 px-6  focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0 text-xl">My Account</button> -->
    </div>
  </header>
  <script>
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');
  
    menuToggle.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>
<center>
<div class="w-1/3 h-1/3">
<form method="POST" action="authenticate.php" class="relative mb-4">
          <label for="username" class="leading-7 text-sm text-gray-600">Username</label>
          <input type="username" id="username" name="username" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"><br><br>
          <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
          <input type="password" id="password" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"><br><br>
          <input type="submit" value="Submit" class="text-white bg-red-400 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg"></input>
</form>
</div>
</center>

  <style>
    @font-face {
    font-family: "SF New Republic";
    src: url(Fonts/SF\ New\ Republic.ttf) format("truetype");
    }
    h1{
      font-family: 'SF New Republic', sans-serif;
    }
    </style>
</section>
</body>
</html>