<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Slice of Life Pizzeria</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
  
    <nav class="bg-green-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Slice of Life Pizzeria</h1>
            <ul class="flex space-x-6">
                <li><a href="index.php" class="hover:underline">Home</a></li>
                <li><a href="menu.php" class="hover:underline">Menu</a></li>
                <li><a href="about.php" class="hover:underline">About</a></li>
                <li><a href="contact.php" class="hover:underline">Contact</a></li>
            </ul>
        </div>
    </nav>

    
    <section class="container mx-auto my-12 p-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-center text-green-600 mb-6">About Slice of Life Pizzeria</h2>
      
        <div class="mb-6">
            <img src="https://images.squarespace-cdn.com/content/v1/59d4f274f6576ec36dca8782/1507154441603-CYFAMNLKB1HH280RDDY4/Andrew-Cebulka--9099.jpg" alt="Delicious pizza" class="w-full h-64 object-cover rounded-lg">
        </div>
        <?php
            $pizzeria_name = "Slice of Life Pizzeria";
            $about_us = "Welcome to $pizzeria_name, a family-run pizzeria in the Western Cape.We've been passionate about creating delicious pizzas with diverse flavors and traditional recipes, making every visit special for our community.";
            $our_mission = "We aim to make our customers happy by offering a simple and secure online ordering system, with fast service and an easy-to-use experience, while staying true to our traditional roots.";
        ?>
        <p class="text-lg text-gray-700 mb-4"><?php echo $about_us; ?></p>
        <p class="text-lg text-gray-700 mb-4"><?php echo $our_mission; ?></p>
        <h3 class="text-2xl font-semibold text-green-600 mt-6 mb-4">Our Story</h3>
      
        <div class="mb-6">
            <img src="https://i.pinimg.com/originals/e4/98/01/e49801682e8aa6a0dc1184c5f071d62b.jpg" alt="Wood-fired pizza" class="w-full h-64 object-cover rounded-lg">
        </div>
        <p class="text-lg text-gray-700">
            <?php
                $our_story = "$pizzeria_name started as a small family pizzeria with a love for authentic pizza. As we grew across the Western Cape, we built our own online ordering system to make ordering easier, reduce mistakes, and offer a better experience without relying on expensive third-party apps.";
                echo $our_story;
            ?>
        </p>
        <h3 class="text-2xl font-semibold text-green-600 mt-6 mb-4">Our Values</h3>
        <ul class="list-disc list-inside text-lg text-gray-700">
            <?php
                $our_values = [
                    "Quality: We use fresh, local ingredients to make every pizza exceptional.",
                    "Tradition: We stick to authentic family recipes that honor our heritage.",
                    "Innovation: We use affordable technology to make ordering smooth and easy.",
                    "Community: We create a warm, welcoming space for families and pizza lovers.",
                    "Customer Focus: We prioritize fast, easy, and satisfying experiences for our customers."
                ];
                foreach ($our_values as $value) {
                    echo "<li>$value</li>";
                }
            ?>
        </ul>
    </section>


    <footer class="bg-green-600 text-white p-4 text-center">
        <p>© <?php echo date("Y"); ?> Slice of Life Pizzeria. All rights reserved.</p>
    </footer>
</body>
</html>
