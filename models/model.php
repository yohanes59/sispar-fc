<?php
class model
{
    public function execute($query)
    {
        include './database/koneksi.php';
        $result =  mysqli_query($conn, $query);

        if (!$result) {
            echo "Error: " . mysqli_error($conn);
        }

        return $result;
    }

    public function fetch($var)
    {
        return mysqli_fetch_array($var, MYSQLI_ASSOC);
    }

    public function numRow($data)
    {
        return mysqli_num_rows($data);
    }
}