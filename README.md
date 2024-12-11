# PHP Array Processing Bug

This repository demonstrates a common error in PHP array processing:  handling non-numeric values during arithmetic operations. The `processArray` function recursively processes an array, adding 1 to each element.  However, if a non-numeric value is encountered, PHP will issue an error or warning. 

The `bug.php` file contains the buggy code.  The `bugSolution.php` file demonstrates a corrected version.