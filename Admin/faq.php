<?php
session_start();
include '../includes/admin_header.php';
?>
<?php   
$sql = "SELECT * FROM admin_faq;";
$data = mysqli_query($conn, $sql);
if (isset($_POST['sub_faq_edit'])) {
    $_SESSION['faqId'] = $_POST['sub_faq_edit'];
    header("Location: ./edit-faq.php");
    exit();
}

if (isset($_POST['sub_faq_del'])) {
    $id = $_POST['sub_faq_del'];
    $result = mysqli_query($conn, "SELECT * FROM admin_faq where faq_id = '$id';");
    if (mysqli_num_rows($result) > 0) {
        $sql_delete = "DELETE FROM admin_faq WHERE faq_id = '$id';";
        mysqli_query($conn, $sql_delete);
    }
}
?>

<body>
    <div id = "main">
        <a title = "" id = "btn" href = "./add-faq.php"><i class = "material-icons">add</i> Add New FAQ</a>
        <table>
            <tbody>
                <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Action</th>
                </tr>

                <?php while ($row = mysqli_fetch_array($data)) {
                    ?>
                <form method="post" action="faq.php">
                    <tr>
                        <td><?php echo $row["faq_id"] ?> </td>
                        <td><?php echo $row["question"] ?> </td>
                        <td><?php echo $row["answer"] ?> </td>
                        <td>
                            <button id="btn1"  type="submit" name="sub_faq_edit" class="material-icons " value="<?php echo$row['faq_id'] ?>">edit</button>
                            <button id="btn1"  type="submit" name="sub_faq_del" class="material-icons delete" value="<?php echo$row['faq_id'] ?>" >delete</button>
                        </td>
                    </tr>
                </form>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>

    <?php include("footer.php"); ?>

</body>

</html>