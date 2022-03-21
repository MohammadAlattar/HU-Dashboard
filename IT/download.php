<?php   
                include "config.php";

                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $stat = $db->prepare("select * from courses WHERE name=? ");
                    $stat->bindParam(1, $id);
                    $stat->execute();
                    $data = $stat->fetch();
                    $file = "$filepath/".$data['filename'];
                    
                    if(file_exists($file)){
                        header('Content-Type: '. $data['type']);
                        header('Content-Transfer-Encoding: Binary');
                        header('Content-Length: '.filesize($file));
                        header('Content-disposition: attachment; filename="'.basename($file).'"');
                    
                        readfile($file);
                        exit;
                        }}