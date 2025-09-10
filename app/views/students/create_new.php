<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <style>
        /* Reset default styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #fdf6f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 1rem;
        }

        form {
            background: #fff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            position: relative;
        }

        h2 {
            text-align: center;
            color: #ff8c94;
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
            font-weight: 600;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1.2rem;
            border: 1px solid #ddd;
            border-radius: 10px;
            transition: border 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #ffb6b9;
            outline: none;
        }

        .button-group {
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
            margin-top: 1.5rem;
        }

        input[type="submit"] {
            padding: 0.8rem;
            background-color: #ffb6b9;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #ff8c94;
        }

        .back-button {
            display: block;
            text-align: center;
            padding: 0.8rem;
            background-color: #f0f0f0;
            color: #444;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .back-button:hover {
            background-color: #ddd;
        }

        /* Cute corner decorations */
        body::before {
            content: "💖";
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 2rem;
        }

        body::after {
            content: "🌸";
            position: absolute;
            bottom: 20px;
            right: 20px;
            font-size: 2rem;
        }
    </style>
</head>

<body>
    <form action="<?= site_url('/students/create'); ?>" method="post">
        <h2>Add a New Student</h2>

        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <div class="button-group">
            <input type="submit" value="Add Student">
            <a href="<?= site_url('/students/get-all') ?>" class="back-button">← Back to Students List</a>
        </div>
    </form>
</body>

</html>
