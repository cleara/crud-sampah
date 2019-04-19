<!DOCTYPE html>
<html>
    <head>
        <title>
            form sampah
        </title>
    </head>
    <body>
            <a href="sampah_store.php">BACK</a><br>
            <form action="sampah_buat.php" method="POST">
        <p>id sampah
        <input type="text"
        name="txt_id_sampah">
        </p>
        <p> nama sampah
            <input type="text"
            name="txt_nama_sampah">
        </p>
        <p> jenis sampah
            <select name="txt_jenis_sampah">
            <option value="alami">alami</option>
            <option value="hewani">hewani</option>
            <option value="plastik">plastik</option>
            <option value="kertas">kertas</option>
            </select>
            </p>
            <p> fungsi 3R
                    <input type="text"
                    name="txt_fungsi_3R">
                </p>
                <p> organik anorganik<br>
                    <input type="radio" name="txt_organik_anorganik"
                    value="organik">organik<br>
                    <input type="radio" name="txt_organik_anorganik"
                    value="anorganik">anorganik<br>
                      
                    </p>
                    <p> basah kering
                            <input type="text"
                            name="txt_basah_kering">
                        </p>
                        <p> manfaat<br>
                            <input type="checkbox"
                            name="txt_manfaat []"
                            value="for juice">untuk dijual
                            <input type="checkbox"
                            name="txt_manfaat []"
                            value="untuk hiasa">untuk hiasan
                            <input type="checkbox"
                            name="txt_manfaat []"
                            value="untuk hiasa">untuk pupuk
                        
                              
                            </p>
                            <input type="submit">
                            </form>

    </body>
</html>