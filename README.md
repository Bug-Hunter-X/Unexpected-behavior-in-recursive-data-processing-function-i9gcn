# PHP Recursive Data Processing Bug

This repository demonstrates a bug in a PHP function designed to recursively process an array of data. The function attempts to handle numeric values greater than 100 and strings longer than 10 characters; however, it lacks sufficient error handling and input validation, leading to potential issues.

## Bug Description
The `processData` function recursively iterates through an array. It intends to modify values based on numeric or string conditions.  However, it does not handle potential errors (like division by zero if numeric values can be 0) or unexpected data types.  This can lead to unexpected behavior or runtime errors.

## Bug Solution
The solution adds input validation and more robust error handling to prevent unexpected behavior and improve the function's reliability.