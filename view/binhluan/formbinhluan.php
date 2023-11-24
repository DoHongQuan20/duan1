<?php
session_start();
include "../../admin/model/pdo.php";
include "../../admin/model/binhluan.php";
$idpro = $_REQUEST['idpro'];
if (isset($_POST['name']) && isset($_POST['id']) && ($_POST['user']) != "") {
    $user = $_SESSION['user']['id'];
    $user = $_SESSION['user']['name'];
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

    <style>
        .binhluanform {
            margin-top: 50px;
            width: 100%;
        }

        .panel-footer {
            width: 100%;
            padding: 10px 0px;
            background-color: #f5f5f5;
            border-top: 1px solid #ddd;

            margin-bottom: -50px;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px
        }

        .binhluan table {
            width: 1300px;
            margin-left: 10%;
            margin-bottom: 10px;
        }

        .binhluan table th:nth-child(1) {
            width: 50%;
        }

        .binhluan table th:nth-child(2) {
            width: 20%;
        }

        .binhluan table th:nth-child(3) {
            width: 30%;
        }

        .timkiemip {
            height: 35px;
            border-radius: 5px;
            border: 1px #979797 solid;
            width: 80%;
        }

        .timkiembt {
            height: 35px;
            border-radius: 5px;
            border: 1px #979797 solid;
            background-color: #ffffff;
        }

        .timkiembt:hover {
            background-color: #ccc
        }
    </style>
</head>

<body>
    <div class="row mb" style="margin-bottom: 30px;">
        <div class="boxtitle"></div>
        <div class="boxconten2 binhluan">
            <table>
                <tr>
                    <th>Nội dung</th>
                    <th>người bình luận</th>
                    <th>Thời gian</th>
                </tr>
                <?php
                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<tr><td>' . $noidung . '</td>';
                    echo '<td>' . $nameuser . '</td>';
                    echo '<td>' . $ngaybinhluan . '</td></tr>';
                }
                ?>

            </table>
        </div>
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        }
        ?>

        <div class="panel-footer binhluanform">
            <?php
            if (!isset($_SESSION['user'])) { ?>
                <label for="" style="margin-left: 140px;"><a href="index.php?act=dangnhap">Đăng nhập </a>để bình luận</label>
            <?php } else { ?>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="hidden" name="idpro" value="<?= $idpro ?>">
                    <input class="timkiemip" type="text" name="noidung" placeholder=" Viết bình luận" style="margin-left: 140px;width: 70%;">
                    <input class="timkiembt" type="submit" name="guibinhluan" value="Gửi bình luận">
                </form>
            <?php } ?>
        </div>
        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $nameuser = $_SESSION['user']['name'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            insert_binhluan($noidung, $iduser, $nameuser, $idpro, $ngaybinhluan);
            header("location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>
</body>

</html>