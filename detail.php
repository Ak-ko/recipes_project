<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header>
    <nav class="flex  justify-between items-center h-[80px] border-b xl:px-[80px] md:px-[50px] px-[20px]">
      <div>
        <a href='/' class="text-3xl text-green-400 font-semibold">My Recipe</a>
      </div>
      <div>
        <a href="create.php" class="px-3 py-3 rounded-lg bg-red-400 hover:opacity-[0.85] transition-all duration-500 text-white flex items-center gap-2">
          <i class="fa-solid fa-plus"></i>
          <div>Add Recipe</div>
        </a>
      </div>
    </nav>
  </header>

  <main class="flex gap-5 items-center md:flex-row flex-col xl:px-[80px] md:px-[50px] px-[20px] my-11">
    <img class="max-h-[400px]" src="https://cdn.shopify.com/s/files/1/0291/8606/4520/files/ygn-200513-7.jpg?v=1589460584" alt="product image" />
    <div class="space-y-5">
      <h5 class="text-4xl font-semibold tracking-tight text-gray-900 dark:text-white">
        Tomato Salad
      </h5>
      <p class="text-gray-500">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione mollitia modi fugit ex sint? Veritatis dicta iste quasi sapiente, totam est a alias. Fugiat nulla illo dolorem ullam sequi laudantium.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione mollitia modi fugit ex sint? Veritatis dicta iste quasi sapiente, totam est a alias. Fugiat nulla illo dolorem ullam sequi laudantium.
      </p>
      <div class="flex gap-2 text-xs my-3">
        <div class="bg-red-400 text-white px-2 py-1 rounded-2xl">tomato</div>
        <div class="bg-red-400 text-white px-2 py-1 rounded-2xl">nga-yok-tee</div>
        <div class="bg-red-400 text-white px-2 py-1 rounded-2xl">pal-kyaw</div>
      </div>
      <div class="flex items-center justify-between">
        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
      </div>
    </div>
  </main>
</body>

</html>