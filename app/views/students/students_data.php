<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #fdf6f0;
            padding: 2rem;
            color: #333;
        }

        h2 {
            text-align: center;
            color: #ff8c94;
            margin-bottom: 1.5rem;
        }

        .flash-message {
            max-width: 600px;
            margin: 0 auto 1.5rem auto;
            padding: 1rem 1.5rem;
            border-radius: 10px;
            font-weight: 600;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .flash-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .flash-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
        }

        th, td {
            padding: 1rem;
            text-align: center;
        }

        th {
            background-color: #ffe5ec;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #fceef2;
        }

        tr:hover {
            background-color: #fddde6;
            transition: background 0.3s ease;
        }

        a {
            color: #ff6b81;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .add-button {
            display: inline-block;
            margin-top: 1.5rem;
            padding: 0.8rem 1.2rem;
            background-color: #ffb6b9;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: bold;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .add-button:hover {
            background-color: #ff8c94;
        }

        /* Emoji corners */
        body::before {
            content: "📚";
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 2rem;
        }

        body::after {
            content: "🎀";
            position: absolute;
            bottom: 20px;
            right: 20px;
            font-size: 2rem;
        }
    </style>
</head>

<body>

    <h2>Students</h2>

    <!-- Session Flash Messages -->
    <?php if ($data['flashdata'] != null): ?>
        <div class="flash-message flash-success">
            <?= $data['flashdata'] ?>
        </div>
    <?php endif; ?>

    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>

        <?php foreach ($data['students'] as $student): ?>
            <tr>
                <td><?= $student['id'] ?></td>
                <td><?= $student['first_name'] ?></td>
                <td><?= $student['last_name'] ?></td>
                <td><?= $student['email'] ?></td>
                <td>
                    <a href="<?= site_url('students/update/' . $student['id']) ?>">Update</a> |
                    <a href="<?= site_url('students/delete/' . $student['id']) ?>" style="color: #e57373;">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div style="text-align: center;">
        <a class="add-button" href="<?= site_url('students/create') ?>">+ Add New Student</a>
    </div>
</body>

</html>
