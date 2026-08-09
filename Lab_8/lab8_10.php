<?php
try
{
    $num1 = 20;
    $num2 = 2;

    if ($num2 == 0)
    {
        throw new Exception("Denominator cannot be zero.");
    }

    $result = $num1 / $num2;
    echo "Result: $result";
}
catch (Exception $e)
{
    echo "Error: " . $e->getMessage();
}
finally
{
    echo "<br>Program Finished.";
}
?>