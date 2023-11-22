<?php
session_start();
include "../../admin/model/pdo.php";
include "../../admin/model/binhluan.php";
$idpro = $_REQUEST['idpro'];
if (isset($_POST['id']) && ($_POST['user']) != "") {
    $user = $_SESSION['user']['id'];
}
$dsbl = loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .binhluanform {
            margin-top: 100px;

        }

        .binhluan table {
            width: 100%;
            margin-left: 5%;
            margin-bottom: 10px;

        }

        .binhluan table td:nth-child(1) {
            width: 50%;
        }

        .binhluan table td:nth-child(2) {
            width: 20%;
        }

        .binhluan table td:nth-child(3) {
            width: 30%;
        }
    </style>
</head>

<body>
    <div class="row mb">
        <div class="boxtitle"></div>
        <div class="boxconten2 binhluan">
            <table>
                <tr>
                    <td><b>Nội dung</b></td>
                    <td><b>Id người dùng</b></td>
                    <td><b>Thời gian</b></td>
                </tr>
                <?php
                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<tr><td>' . $noidung . '</td>';
                    echo '<td>' . $iduser . '</td>';
                    echo '<td>' . $ngaybinhluan . '</td></tr>';
                }
                ?>

            </table>
        </div>
        <div class="panel-footer binhluanform">
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <input class="timkiemip" type="text" name="noidung" placeholder=" Viết bình luận" style="margin-left: 20px;">
                <input class="timkiembt" type="submit" name="guibinhluan" value="Gửi bình luận">
            </form>
        </div>
        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            header("location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>
</body>

</html>