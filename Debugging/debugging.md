# Debugging & Problem Solving

## Problem

The problem is that we are trying to access **ID 5**, which does not exist in the `$users` array.

## Corrected Code

```php
<?php

function getUser($id)
{
    $users = [
        1 => 'Ali',
        2 => 'Ahmed',
        3 => 'Usman'
    ];

    if (isset($users[$id])) {
        return $users[$id];
    }

    return 'User not found';
}

echo getUser(5);
```

The code safely checks whether the given ID exists before trying to access it. If the ID does not exist, it returns **"User not found"** instead.
