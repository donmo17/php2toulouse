<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }

            th,
            td {
                border: 1px solid #000;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #87CEFA;
            }

        </style>
    </head>

    <body>
        <table>
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Age</th>
                    <th>Disponibilité</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $clients = [
                    ['prenom' => "<script>alert('bonjour'); </script>", 'age' => 30, 'dispo' => true],
                    ['prenom' => 'Bob', 'age' => 25, 'dispo' => false],
                    ['prenom' => 'Charlie', 'age' => 42, 'dispo' => false],
                ];
                foreach ($clients as $client): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($client['prenom']); ?></td>
                        <td><?php echo htmlspecialchars($client['age']); ?></td>
                        <td>
                            <?php echo $client['dispo'] ? '✅' : '❌'; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>

</html>
