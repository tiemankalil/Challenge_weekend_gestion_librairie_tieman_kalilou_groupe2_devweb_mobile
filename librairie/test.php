

                <?php
                require ('model.php');
                $dbco = Connexiondb();
                $sql = 'SELECT * from livres  ORDER BY id DESC';
                $stmt = $dbco->query($sql);
                        $row = $stmt->fetchAll();

                        var_dump($row);
                ?>