
<?php
include("./Database/config.php");

?>

<?php
include("./include/head.php");
?>

<div class="admin">

    <h2>"স্বাগতম " আপনার ফসল ওয়েবসাইটে আপলোড দিন </h2>
    <div class="block">

        <form action="" method="post" enctype="multipart/form-data">

            <table>

                <tr>
                    <td>পণ্যের নাম : </td>
                    <td><input type="text" name="pnm"></td>
                </tr>
                <tr>
                    <td>প্রতি কেজি মূল্য : </td>
                    <td><input type="text" name="ppr"></td>
                </tr>
                <tr>
                    <td>পণ্যের পরিমাণ :  </td>
                    <td><input type="text" name="pqty"></td>
                </tr>
                <tr>
                    <td>পণ্যের ছবি  : </td>
                    <td><input type="file" name="pimg"></td>
                </tr>
                <tr>
                    <td>সবজি / শস্য : </td>
                    <td>
                        <select name="pcat">
                            <option value="সবজি">সবজি</option>
                            <option value="শস্য"> শস্য</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>পণ্যটি সম্পর্কে লিখুন : </td>
                    <td><textarea cols="15"rows="10" name="pdes"></textarea></td>
                </tr>
                <tr>
                    
                    <td><button type="submit"  name="admin"><b>উপরের তথ্যগুলো ওয়েবসাইটে প্রেরণ করুন </b></button></td>
                </tr>
            </table>


        </form>



    </div>
</div>
<?php
include("./include/foot.php")
?>